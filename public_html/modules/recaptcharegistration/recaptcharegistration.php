<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class RecaptchaRegistration extends Module
{
    public function __construct()
    {
        $this->name = 'recaptcharegistration';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Szymon Szewczyk';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('reCAPTCHA dla rejestracji');
        $this->description = $this->l('Dodaje weryfikację reCAPTCHA do formularza rejestracji.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayCustomerAccountForm') &&
            $this->registerHook('actionValidateCustomerForm') &&
            Configuration::updateValue('RECAPTCHA_SITE_KEY', '') &&
            Configuration::updateValue('RECAPTCHA_SECRET_KEY', '');
    }

    public function uninstall()
    {
        return parent::uninstall() &&
            Configuration::deleteByName('RECAPTCHA_SITE_KEY') &&
            Configuration::deleteByName('RECAPTCHA_SECRET_KEY');
    }

    public function getContent()
    {
        $output = '';

        // Sprawdzenie, czy formularz został przesłany
        if (Tools::isSubmit('submitRecaptchaConfiguration')) {
            $siteKey = Tools::getValue('RECAPTCHA_SITE_KEY');
            $secretKey = Tools::getValue('RECAPTCHA_SECRET_KEY');

            // Walidacja kluczy
            if (empty($siteKey) || empty($secretKey)) {
                $output .= $this->displayError($this->l('Oba pola są wymagane.'));
            } else {
                Configuration::updateValue('RECAPTCHA_SITE_KEY', $siteKey);
                Configuration::updateValue('RECAPTCHA_SECRET_KEY', $secretKey);
                $output .= $this->displayConfirmation($this->l('Ustawienia zostały zapisane.'));
            }
        }

        // Pobranie zapisanych kluczy
        $siteKey = Configuration::get('RECAPTCHA_SITE_KEY');
        $secretKey = Configuration::get('RECAPTCHA_SECRET_KEY');

        // Formularz konfiguracji
        $output .= '
            <form action="' . Tools::safeOutput($_SERVER['REQUEST_URI']) . '" method="post">
                <label>' . $this->l('Site Key (klucz witryny)') . '</label>
                <div class="margin-form">
                    <input type="text" name="RECAPTCHA_SITE_KEY" value="' . Tools::safeOutput($siteKey) . '" />
                </div>
                <label>' . $this->l('Secret Key (klucz tajny)') . '</label>
                <div class="margin-form">
                    <input type="text" name="RECAPTCHA_SECRET_KEY" value="' . Tools::safeOutput($secretKey) . '" />
                </div>
                <button type="submit" name="submitRecaptchaConfiguration" class="btn btn-primary">' . $this->l('Zapisz') . '</button>
            </form>
        ';

        return $output;
    }

    public function hookDisplayCustomerAccountForm($params)
    {
        $siteKey = Configuration::get('RECAPTCHA_SITE_KEY');

        $this->context->smarty->assign([
            'site_key' => $siteKey,
        ]);

        return $this->display(__FILE__, 'views/templates/hook/recaptcha.tpl');
    }

    public function hookActionValidateCustomerForm($params)
    {
        $form = $params['form'];

        $recaptcha_response = Tools::getValue('g-recaptcha-response');
        $secretKey = Configuration::get('RECAPTCHA_SECRET_KEY');

        if (!$recaptcha_response) {
            $form->addError($this->l('Proszę potwierdzić, że nie jesteś robotem.'));
            return;
        }

        $recaptcha_verify = $this->verifyRecaptcha($secretKey, $recaptcha_response);

        if (!$recaptcha_verify->success) {
            $form->addError($this->l('Weryfikacja reCAPTCHA nie powiodła się. Spróbuj ponownie.'));
        }
    }

    private function verifyRecaptcha($secretKey, $response)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $secretKey,
            'response' => $response,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        );

        // Używamy cURL do weryfikacji reCAPTCHA
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $recaptcha_verify = curl_exec($curl);
        curl_close($curl);

        return json_decode($recaptcha_verify);
    }
}
