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
        $this->author = 'Twoje Imię';
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
            $this->registerHook('actionValidateCustomerForm');
    }

    public function hookDisplayCustomerAccountForm($params)
    {
        $this->context->smarty->assign([
            'site_key' => '6LcpGhwqAAAAAB2-Hi3qM1zrGiPeP2agHIoglTdg', // Zamień na swój klucz witryny
        ]);

        return $this->display(__FILE__, 'views/templates/hook/recaptcha.tpl');
    }

    public function hookActionValidateCustomerForm($params)
    {
        $form = $params['form'];

        $recaptcha_response = Tools::getValue('g-recaptcha-response');
        $secret_key = '6LcpGhwqAAAAAJzoy6_gNzqOMwi59KIcb6rchvAP'; // Zamień na swój klucz tajny

        if (!$recaptcha_response) {
            $form->addError($this->l('Proszę potwierdzić, że nie jesteś robotem.'));
            return;
        }

        $recaptcha_verify = $this->verifyRecaptcha($secret_key, $recaptcha_response);

        if (!$recaptcha_verify->success) {
            $form->addError($this->l('Weryfikacja reCAPTCHA nie powiodła się. Spróbuj ponownie.'));
        }
    }

    private function verifyRecaptcha($secret_key, $response)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $secret_key,
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
