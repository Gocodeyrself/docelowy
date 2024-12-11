<?php
/**
 * PrestaShop module created by VEKIA, a guy from official PrestaShop community ;-)
 *
 * @author    VEKIA PL VATEU: PL9730945634
 * @copyright 2010-2025 VEKIA
 * @license   This program is not free software and you can't resell and redistribute it
 *
 * CONTACT WITH DEVELOPER http://mypresta.eu
 * support@mypresta.eu
 */

include_once(dirname(__FILE__) . '../../../aapfree.php');
require_once(dirname(__FILE__) . '../../../models/aapfree_question.php');

class aapfreequestionModuleFrontController extends ModuleFrontController
{
    public static function psversion($part = 1)
    {
        $version = _PS_VERSION_;
        $exp = explode('.', $version);
        if ($part == 0) {
            return $exp[0];
        }
        if ($part == 1) {
            if ($exp[0] >= 8) {
                return 7;
            }
            return $exp[1];
        }
        if ($part == 2) {
            return $exp[2];
        }
        if ($part == 3) {
            return $exp[3];
        }
    }

    public function initContent()
    {
        if (Module::isEnabled('aapfree') && Tools::getValue('action') == 'sendQuestion' && Tools::getValue('secure_key') == $this->module->secure_key) {
            // Retrocompatibilty with old theme

            $customerMail = Tools::getValue('email');
            $author = Tools::getValue('author');
            $phone = Tools::getValue('phone');
            $id_product = Tools::getValue('id_product');
            $question = Tools::getValue('question');

            if (!$customerMail || !$id_product) {
                die('0');
            }

            $isValidEmail = Validate::isEmail($customerMail);
            if (false === $isValidEmail) {
                die('0');
            }


            /** check if combination **/
            $combinations_array = array();
            $combination_id = 0;
            if (Tools::getValue('group', 'false') != 'false') {
                $groups = Tools::getValue('group');
                if (empty($groups)) {
                    return null;
                }

                $combination_id = (int)Product::getIdProductAttributeByIdAttributes(
                    Tools::getValue('id_product'),
                    $groups,
                    true
                );
            }

            $combination_variable = '';
            $combination = '';
            if ($combination_id > 0) {
                $comb = new Combination($combination_id);
                if (is_object($comb)) {
                    foreach ($comb->getAttributesName(Tools::getValue('id_lang')) AS $attr) {
                        if ($this->psversion(0) >= 8) {
                            $attribute = new ProductAttribute($attr['id_attribute'], Tools::getValue('id_lang'));

                        } else {
                            $attribute = new Attribute($attr['id_attribute'], Tools::getValue('id_lang'));
                        }
                        $attribute_group = new AttributeGroup($attribute->id_attribute_group, Tools::getValue('id_lang'));
                        $combinations_array[] = $attribute_group->public_name . ': ' . $attr['name'];
                    }
                    $combination_variable = implode(",", $combinations_array);
                    $combination = '(' . implode(",", $combinations_array) . ')';
                }
            }

            /* Email generation */
            $product = new Product((int)$id_product, false, Tools::getValue('id_lang'));
            $productLink = Context::getContext()->link->getProductLink($product);

            $templateVars = array(
                '{product}' => $product->name . $combination,
                '{combination}' => $combination_variable,
                '{product_link}' => $productLink,
                '{productLink}' => $productLink,
                '{customer}' => $author,
                '{phone}' => $phone,
                '{customerMail}' => $customerMail,
                '{question}' => $question
            );

            $recipient_aapfree = Configuration::get('PS_SHOP_EMAIL');

            if (strlen($aapfree_emailslist = trim(Configuration::get('aapfree_emailslist'))) > 3) {
                $aapfree_emailslist_exploded = explode(',', $aapfree_emailslist);
                if (is_array($aapfree_emailslist_exploded)) {
                    if (count($aapfree_emailslist_exploded) > 0) {
                        foreach ($aapfree_emailslist_exploded as $k => $v) {
                            $aapfree_emailslist_exploded[$k] = trim($v);
                        }
                        $recipient_aapfree = $aapfree_emailslist_exploded;
                    }
                } else {
                    $recipient_aapfree = $aapfree_emailslist;
                }
            }

            $recaptcha = 1;
            if (Configuration::get('aapfree_recaptcha') == true) {
                $recaptcha = 0;
                // RE CAPTCHA
                $secretKey = Configuration::get('aapfree_recaptcha_secretkey');
                $siteKey = Configuration::get('aapfree_recaptcha_sitekey');
                require_once _PS_MODULE_DIR_ . 'aapfree/lib/recaptchaaapfree/autoload.php';
                $recaptcha = new \ReCaptchaAapFree\ReCaptchaAapFree($secretKey);
                $resp = $recaptcha->verify(Tools::getValue('g_recaptcha_response'), $_SERVER['REMOTE_ADDR']);
                if (!$resp->isSuccess()) {
                    $recaptcha = 0;
                } else {
                    $recaptcha = 1;
                }
            }


            /* Email sending */
            if ($recaptcha == 1) {
                if (!Mail::Send((int)Tools::getValue('id_lang'),
                    'send_question',
                    sprintf(Configuration::get('aapfree_TITLE', (int)Tools::getValue('id_lang')), $author, $product->name),
                    $templateVars,
                    $recipient_aapfree,
                    null,
                    null,
                    null,
                    null,
                    null,
                    dirname(__FILE__) . '/mails/',
                    false,
                    Context::getContext()->shop->id,
                    $customerMail,
                    $customerMail,
                    $author
                )) {
                    $aq = new aapfreeQuestion();
                    $aq->product = $product->name . $combination;
                    $aq->author = $author;
                    $aq->id_product = (int)$id_product;
                    $aq->id_combination = (int)$combination_id;
                    $aq->phone = $phone;
                    $aq->email = $customerMail;
                    $aq->question = $question;
                    $aq->save();
                    die('0');
                } else {
                    $aq = new aapfreeQuestion();
                    $aq->product = $product->name . $combination;
                    $aq->author = $author;
                    $aq->id_product = (int)$id_product;
                    $aq->id_combination = (int)$combination_id;
                    $aq->phone = $phone;
                    $aq->email = $customerMail;
                    $aq->question = $question;
                    $aq->save();
                }
            } else {
                die('0');
            }
            die('1');
        }
        die('0');
    }
}