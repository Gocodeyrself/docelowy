<?php
class AuthController extends AuthControllerCore
{
    public function initContent()
    {
        parent::initContent();

        // Dodajemy klucz witryny reCAPTCHA do smarty, aby był dostępny w szablonie
        $this->context->smarty->assign('recaptcha_site_key', '6LcpGhwqAAAAAB2-Hi3qM1zrGiPeP2agHIoglTdg'); // Zamień na swój klucz witryny

        $this->context->smarty->assign('test_variable', 'Nadpisanie działa');
    }

    public function postProcess()
    {
        if (Tools::isSubmit('submitCreate')) {
            $recaptcha_response = Tools::getValue('g-recaptcha-response');
            $secret_key = '6LcpGhwqAAAAAJzoy6_gNzqOMwi59KIcb6rchvAP'; // Zamień na swój klucz tajny

            // Sprawdź, czy odpowiedź reCAPTCHA została przesłana
            if (!$recaptcha_response) {
                $this->errors[] = $this->trans('Proszę potwierdzić, że nie jesteś robotem.', [], 'Shop.Notifications.Error');
                return;
            }

            // Weryfikacja odpowiedzi reCAPTCHA
            $recaptcha_verify = $this->verifyRecaptcha($secret_key, $recaptcha_response);

            if (!$recaptcha_verify->success) {
                $this->errors[] = $this->trans('Weryfikacja reCAPTCHA nie powiodła się. Spróbuj ponownie.', [], 'Shop.Notifications.Error');
                return;
            }
        }

        parent::postProcess();
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
