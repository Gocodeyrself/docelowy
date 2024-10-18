/*
 * cs_invisible_recaptcha_v2 front-end module version 1.0.1 for Prestashop 1.6, 1.7
 * Support contact : prestashop@comonsoft.com.
 *
 * NOTICE OF LICENSE
 *
 * This source file is the property of Com'onSoft
 * that is bundled with this package.
 * It is also available through the world-wide-web at this URL:
 * https://boutique.comonsoft.com/
 *
 * @category  front-end
 * @package   cs_invisible_recaptcha_v2
 * @author    Com'onSoft (http://www.comonsoft.com/)
 * @copyright 2016-2018 Com'onSoft and contributors
 * @version   1.0.1
 */

var onSubmit = function(token) {
    $('form.contact-form-box').submit();
};

var onloadCallback = function() {
    if($('form.contact-form-box button[name=submitMessage]').attr('disabled') == 'disabled'){
        grecaptcha.render('submitMessage', {
            'sitekey' : recaptchaKey,
            'callback' : onSubmit
        });
        $('form.contact-form-box button[name=submitMessage]').attr('disabled','disabled');
        $('form').append('<input type="hidden" name="submitMessage">');
    }else{
        grecaptcha.render('submitMessage', {
            'sitekey' : recaptchaKey,
            'callback' : onSubmit
        });
        $('form').append('<input type="hidden" name="submitMessage">');
    }
};
