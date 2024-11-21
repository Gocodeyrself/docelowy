<?php
class AuthController extends AuthControllerCore
{
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
            $recaptcha_verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$recaptcha_response.'&remoteip='.$_SERVER['REMOTE_ADDR']);
            $recaptcha_verify = json_decode($recaptcha_verify);

            if (!$recaptcha_verify->success) {
                $this->errors[] = $this->trans('Weryfikacja reCAPTCHA nie powiodła się. Spróbuj ponownie.', [], 'Shop.Notifications.Error');
                return;
            }
        }

        parent::postProcess();
    }
}
