<?php

/**
 * PrestaShop module created by VEKIA, a guy from official PrestaShop community ;-)
 *
 * @author    VEKIA https://www.prestashop.com/forums/user/132608-vekia/
 * @copyright 2010-9999 VEKIA
 * @license   This program is not free software and you can't resell and redistribute it
 *
 * CONTACT WITH DEVELOPER http://mypresta.eu
 * support@mypresta.eu
 */
class fblogin extends Module
{
    public $mkey;
    public $modulehooks;
    public $mypresta_link;

    public function __construct()
    {
        //ini_set("display_errors", 0);
        //error_reporting(0); //E_ALL
        $this->name = 'fblogin';
        $this->tab = 'front_office_features';
        $this->version = '1.9.9';
        $this->author = 'MyPresta.eu';
        $this->bootstrap = true;
        $this->mypresta_link = 'https://mypresta.eu/modules/social-networks/facebook-login-connect.html';
        $this->module_key = 'c735fdbd6499b43f4b2b8bb1eb34489c';
        parent::__construct();
        $this->displayName = $this->l('Facebook Login');
        $this->description = $this->l('With this module you can allow your customers to log in with their facebook account.');
        $this->mkey = "nlc";
        $this->checkforupdates();

        $this->modulehooks['displayTop']['ps14'] = 1;
        $this->modulehooks['displayTop']['ps15'] = 1;
        $this->modulehooks['displayTop']['ps16'] = 1;
        $this->modulehooks['displayTop']['ps17'] = 1;
        $this->modulehooks['displayTop']['ps80'] = 1;
        $this->modulehooks['displaytopColumn']['ps14'] = 0;
        $this->modulehooks['displaytopColumn']['ps15'] = 0;
        $this->modulehooks['displaytopColumn']['ps16'] = 1;
        $this->modulehooks['displaytopColumn']['ps17'] = 0;
        $this->modulehooks['displaytopColumn']['ps80'] = 0;
        $this->modulehooks['displayNav']['ps14'] = 0;
        $this->modulehooks['displayNav']['ps15'] = 0;
        $this->modulehooks['displayNav']['ps16'] = 1;
        $this->modulehooks['displayNav']['ps17'] = 0;
        $this->modulehooks['displayNav']['ps80'] = 0;

        $this->modulehooks['displayNav1']['ps14'] = 0;
        $this->modulehooks['displayNav1']['ps15'] = 0;
        $this->modulehooks['displayNav1']['ps16'] = 0;
        $this->modulehooks['displayNav1']['ps17'] = 1;
        $this->modulehooks['displayNav1']['ps80'] = 1;

        $this->modulehooks['displayNav2']['ps14'] = 0;
        $this->modulehooks['displayNav2']['ps15'] = 0;
        $this->modulehooks['displayNav2']['ps16'] = 0;
        $this->modulehooks['displayNav2']['ps17'] = 1;
        $this->modulehooks['displayNav2']['ps80'] = 1;

        $this->modulehooks['displayLeftColumn']['ps14'] = 1;
        $this->modulehooks['displayLeftColumn']['ps15'] = 1;
        $this->modulehooks['displayLeftColumn']['ps16'] = 1;
        $this->modulehooks['displayLeftColumn']['ps17'] = 1;
        $this->modulehooks['displayLeftColumn']['ps80'] = 1;

        $this->modulehooks['fblogin']['ps14'] = 1;
        $this->modulehooks['fblogin']['ps15'] = 1;
        $this->modulehooks['fblogin']['ps16'] = 1;
        $this->modulehooks['fblogin']['ps17'] = 1;
        $this->modulehooks['fblogin']['ps80'] = 1;

        $this->modulehooks['displayRightColumn']['ps14'] = 1;
        $this->modulehooks['displayRightColumn']['ps15'] = 1;
        $this->modulehooks['displayRightColumn']['ps16'] = 1;
        $this->modulehooks['displayRightColumn']['ps17'] = 1;
        $this->modulehooks['displayRightColumn']['ps80'] = 1;

        $this->modulehooks['displayFooter']['ps14'] = 1;
        $this->modulehooks['displayFooter']['ps15'] = 1;
        $this->modulehooks['displayFooter']['ps16'] = 1;
        $this->modulehooks['displayFooter']['ps17'] = 1;
        $this->modulehooks['displayFooter']['ps80'] = 1;

        $this->modulehooks['displayHome']['ps14'] = 1;
        $this->modulehooks['displayHome']['ps15'] = 1;
        $this->modulehooks['displayHome']['ps16'] = 1;
        $this->modulehooks['displayHome']['ps17'] = 1;
        $this->modulehooks['displayHome']['ps80'] = 1;

        $this->modulehooks['displayCreateAccountForm']['ps14'] = 1;
        $this->modulehooks['displayCreateAccountForm']['ps15'] = 1;
        $this->modulehooks['displayCreateAccountForm']['ps16'] = 1;
        $this->modulehooks['displayCreateAccountForm']['ps17'] = 1;
        $this->modulehooks['displayCreateAccountForm']['ps80'] = 1;

        $this->modulehooks['displayShoppingCartExtra']['ps14'] = 1;
        $this->modulehooks['displayShoppingCartExtra']['ps15'] = 1;
        $this->modulehooks['displayShoppingCartExtra']['ps16'] = 1;
        $this->modulehooks['displayShoppingCartExtra']['ps17'] = 1;
        $this->modulehooks['displayShoppingCartExtra']['ps80'] = 1;

        $this->modulehooks['displayShoppingCart']['ps14'] = 1;
        $this->modulehooks['displayShoppingCart']['ps15'] = 1;
        $this->modulehooks['displayShoppingCart']['ps16'] = 1;
        $this->modulehooks['displayShoppingCart']['ps17'] = 1;
        $this->modulehooks['displayShoppingCart']['ps80'] = 1;

        $this->modulehooks['displayCreateAccountTop']['ps14'] = 1;
        $this->modulehooks['displayCreateAccountTop']['ps15'] = 1;
        $this->modulehooks['displayCreateAccountTop']['ps16'] = 1;
        $this->modulehooks['displayCreateAccountTop']['ps17'] = 1;
        $this->modulehooks['displayCreateAccountTop']['ps80'] = 1;

        $this->modulehooks['displayCustomerLoginFormAfter']['ps14'] = 0;
        $this->modulehooks['displayCustomerLoginFormAfter']['ps15'] = 0;
        $this->modulehooks['displayCustomerLoginFormAfter']['ps16'] = 0;
        $this->modulehooks['displayCustomerLoginFormAfter']['ps17'] = 1;
        $this->modulehooks['displayCustomerLoginFormAfter']['ps80'] = 1;

        $this->modulehooks['displayPersonalInformationTop']['ps14'] = 0;
        $this->modulehooks['displayPersonalInformationTop']['ps15'] = 0;
        $this->modulehooks['displayPersonalInformationTop']['ps16'] = 0;
        $this->modulehooks['displayPersonalInformationTop']['ps17'] = 1;
        $this->modulehooks['displayPersonalInformationTop']['ps80'] = 1;

    }

    public function inconsistency()
    {
        return true;
    }

    public function checkforupdates($display_msg = 0, $form = 0)
    {
        // ---------- //
        // ---------- //
        // VERSION 16 //
        // ---------- //
        // ---------- //
        $this->mkey = "nlc";
        if (@file_exists('../modules/' . $this->name . '/key.php')) {
            @require_once('../modules/' . $this->name . '/key.php');
        } else {
            if (@file_exists(dirname(__FILE__) . $this->name . '/key.php')) {
                @require_once(dirname(__FILE__) . $this->name . '/key.php');
            } else {
                if (@file_exists('modules/' . $this->name . '/key.php')) {
                    @require_once('modules/' . $this->name . '/key.php');
                }
            }
        }
        if ($form == 1) {
            return '
            <div class="panel" id="fieldset_myprestaupdates" style="margin-top:20px;">
            ' . ($this->psversion() == 6 || $this->psversion() == 7 || $this->psversion(0) >= 8 ? '<div class="panel-heading"><i class="icon-wrench"></i> ' . $this->l('MyPresta updates') . '</div>' : '') . '
			<div class="form-wrapper" style="padding:0px!important;">
            <div id="module_block_settings">
                    <fieldset id="fieldset_module_block_settings">
                         ' . ($this->psversion() == 5 ? '<legend style="">' . $this->l('MyPresta updates') . '</legend>' : '') . '
                        <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
                            <label>' . $this->l('Check updates') . '</label>
                            <div class="margin-form">' . (Tools::isSubmit('submit_settings_updates_now') ? ($this->inconsistency(0) ? '' : '') . $this->checkforupdates(1) : '') . '
                                <button style="margin: 0px; top: -3px; position: relative;" type="submit" name="submit_settings_updates_now" class="button btn btn-default" />
                                <i class="process-icon-update"></i>
                                ' . $this->l('Check now') . '
                                </button>
                            </div>
                            <label>' . $this->l('Updates notifications') . '</label>
                            <div class="margin-form">
                                <select name="mypresta_updates">
                                    <option value="-">' . $this->l('-- select --') . '</option>
                                    <option value="1" ' . ((int)(Configuration::get('mypresta_updates') == 1) ? 'selected="selected"' : '') . '>' . $this->l('Enable') . '</option>
                                    <option value="0" ' . ((int)(Configuration::get('mypresta_updates') == 0) ? 'selected="selected"' : '') . '>' . $this->l('Disable') . '</option>
                                </select>
                                <p class="clear">' . $this->l('Turn this option on if you want to check MyPresta.eu for module updates automatically. This option will display notification about new versions of this addon.') . '</p>
                            </div>
                            <label>' . $this->l('Module page') . '</label>
                            <div class="margin-form">
                                <a style="font-size:14px;" href="' . $this->mypresta_link . '" target="_blank">' . $this->displayName . '</a>
                                <p class="clear">' . $this->l('This is direct link to official addon page, where you can read about changes in the module (changelog)') . '</p>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" name="submit_settings_updates"class="button btn btn-default pull-right" />
                                <i class="process-icon-save"></i>
                                ' . $this->l('Save') . '
                                </button>
                            </div>
                        </form>
                    </fieldset>
                    <style>
                    #fieldset_myprestaupdates {
                        display:block;clear:both;
                        float:inherit!important;
                    }
                    </style>
                </div>
            </div>
            </div>';
        } else {
            if (defined('_PS_ADMIN_DIR_')) {
                if (Tools::isSubmit('submit_settings_updates')) {
                    Configuration::updateValue('mypresta_updates', Tools::getValue('mypresta_updates'));
                }
                if (Configuration::get('mypresta_updates') != 0 || (bool)Configuration::get('mypresta_updates') != false) {
                    if (Configuration::get('update_' . $this->name) < (date("U") - 259200)) {
                        $actual_version = fbloginUpdate::verify($this->name, (isset($this->mkey) ? $this->mkey : 'nokey'), $this->version);
                    }
                    if (fbloginUpdate::version($this->version) < fbloginUpdate::version(Configuration::get('updatev_' . $this->name)) && Tools::getValue('ajax', 'false') == 'false') {
                        $this->context->controller->warnings[] = '<strong>' . $this->displayName . '</strong>: ' . $this->l('New version available, check http://MyPresta.eu for more informations') . ' <a href="' . $this->mypresta_link . '">' . $this->l('More details in changelog') . '</a>';
                        $this->warning = $this->context->controller->warnings[0];
                    }
                } else {
                    if (Configuration::get('update_' . $this->name) < (date("U") - 259200)) {
                        $actual_version = fbloginUpdate::verify($this->name, (isset($this->mkey) ? $this->mkey : 'nokey'), $this->version);
                    }
                }
                if ($display_msg == 1) {
                    if (fbloginUpdate::version($this->version) < fbloginUpdate::version(fbloginUpdate::verify($this->name, (isset($this->mkey) ? $this->mkey : 'nokey'), $this->version))) {
                        return "<span style='color:red; font-weight:bold; font-size:16px; margin-right:10px;'>" . $this->l('New version available!') . "</span>";
                    } else {
                        return "<span style='color:green; font-weight:bold; font-size:16px; margin-right:10px;'>" . $this->l('Module is up to date!') . "</span>";
                    }
                }
            }
        }
    }

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

    public function install()
    {
        $prefix = _DB_PREFIX_;
        $sql = array();
        $sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'fblogin` (
                  `id_fblogin` int(10) unsigned NOT NULL AUTO_INCREMENT,
                  `id_social` VARCHAR(20) NOT NULL,
                  `type` VARCHAR(10) NOT NULL,
                  `hash` VARCHAR(100) NOT NULL,
                  `id_customer` INT(10) UNSIGNED NOT NULL,
                  PRIMARY KEY (`id_fblogin`),
                  UNIQUE  `id_fblogin_unique` (`id_fblogin`)
                 ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';
        if (!parent::install() or !$this->runSql($sql) or !$this->registerHook('displayHeader') or ($this->psversion() != 4 && $this->psversion() != 5 ? !$this->registerHook('displayDashboardZoneOne') : true) or !$this->installModuleHooks() or !Configuration::updateValue('fblogin_groupid', Configuration::get('PS_CUSTOMER_GROUP'))) {
            return false;
        }
        return true;
    }

    public function installModuleHooks()
    {
        foreach ($this->modulehooks AS $modulehook => $value) {
            if (($this->psversion() == 4 && $value['ps14'] == 1) || ($this->psversion() == 5 && $value['ps15'] == 1) || ($this->psversion() == 6 && $value['ps16'] == 1) || ($this->psversion() == 7 && $value['ps17'] == 1) || ($this->psversion(0) >= 8 && $value['ps80'] == 1)) {
                if ($this->registerHook($modulehook) == false) {
                    return false;
                }
            }
        }
        return true;
    }

    public function runSql($sql)
    {
        foreach ($sql as $s) {
            if (!Db::getInstance()->Execute($s)) {
                //return FALSE;
            }
        }
        return true;
    }

    public function verifycustomer($post)
    {
        if (isset($post['email'])) {
            if ($this->check_core($post['email']) == false) {
                if ($this->check_db($post['id']) == false) {
                    $this->loginprocess($this->registeraccount_db($post, $this->registeraccount_core($post), ""));
                    $this->update_fblogin_db($post, $this->check_core($post['email']));
                } else {
                    $this->loginprocess($this->registeraccount_core($post));
                    $this->update_fblogin_db($post, $this->check_core($post['email']));
                }
            } else {
                if ($this->check_db($post['id']) == false) {
                    $this->loginprocess($this->registeraccount_db($post, $this->check_core($post['email']), ""));
                    $this->update_fblogin_db($post, $this->check_core($post['email']));
                } else {
                    $this->loginprocess($this->check_core($post['email']));
                    $this->update_fblogin_db($post, $this->check_core($post['email']));
                }
            }
        } else {
            echo "alert(\"" . $this->l('To register and login with Facebook login you must verify your email address in your facebook account ') . "\");";
        }
    }

    public function check_core($email)
    {
        $customer = new Customer();
        $cust = $customer->getByEmail($email);
        if ($cust == false) {
            return false;
        } else {
            return $cust->id;
        }
    }

    public function check_db($fbid)
    {
        return Db::getInstance()->getRow('SELECT id_customer FROM `' . _DB_PREFIX_ . 'fblogin` WHERE id_social="' . $fbid . '"');
    }

    public function check_db_id_customer($id)
    {
        $entry = Db::getInstance()->getRow('SELECT id_customer FROM `' . _DB_PREFIX_ . 'fblogin` WHERE id_customer="' . $id . '"');
        if (isset($entry['id_customer'])) {
            return true;
        } else {
            return false;
        }
    }

    public function registeraccount_db($post, $id_customer, $passwd)
    {
        Db::getInstance()->Execute('INSERT INTO `' . _DB_PREFIX_ . 'fblogin` (`id_social`,`type`,`hash`,`id_customer`) VALUES ("' . $post['id'] . '","fb","' . $passwd . '","' . $id_customer . '")');
        return $id_customer;
    }

    public function update_fblogin_db($post, $id_customer)
    {
        Db::getInstance()->Execute('UPDATE `' . _DB_PREFIX_ . 'fblogin` SET `id_customer`=' . $id_customer . ' WHERE `id_social`=' . $post['id']);
    }

    public function registeraccount_core($post)
    {
        $passwd = md5(Tools::passwdGen(8));
        $customer = new Customer();
        if (isset($post['gender'])) {
            if ($post['gender'] == 'male') {
                $customer->id_gender = 1;
            } elseif ($post['gender'] == 'female') {
                $customer->id_gender = 2;
            }
        }
        $customer->passwd = $passwd;
        $customer->email = $post['email'];
        $customer->firstname = $post['first_name'];
        $customer->lastname = $post['last_name'];
        $customer->active = 1;
        $customer->newsletter = 0;
        if (isset($post['gender'])) {
            if ($post['gender'] == "male") {
                $customer->id_gender = 1;
            } elseif ($post['gender'] == "female") {
                $customer->id_gender = 2;
            }
        }
        if ($customer->add()) {
            $_POST['email'] = $post['email'];
            if ($this->psversion() != 4 && $this->psversion() != 3) {
                Hook::Exec('actionCustomerAccountAdd', array(
                    '_POST' => $_POST,
                    'fblogin' => true,
                    'newCustomer' => $customer
                ));
            }
        }
        $customer->cleanGroups();
        $customer->addGroups(array((int)Configuration::get('fblogin_groupid')));

        if (Configuration::get('PS_CUSTOMER_CREATION_EMAIL') && Configuration::get('fblogin_semail') == 1) {
            Mail::Send($this->context->language->id, 'account', Mail::l('Welcome!'), array(
                '{firstname}' => $customer->firstname,
                '{lastname}' => $customer->lastname,
                '{email}' => $customer->email,
                '{passwd}' => $passwd
            ), $customer->email, $customer->firstname . ' ' . $customer->lastname);
        }

        return $customer->id;
    }

    public function loginprocess($id_customer)
    {
        if ($this->psversion() == 5 || $this->psversion() == 6 || $this->psversion() == 7 || $this->psversion(0) >= 8) {
            $customer = new Customer($id_customer);
            if ($this->psversion() != 7 && $this->psversion(0) != 8) {
                $this->context->cookie->id_compare = isset($this->context->cookie->id_compare) ? $this->context->cookie->id_compare : CompareProduct::getIdCompareByIdCustomer($customer->id);
            }
            $this->context->cookie->id_customer = (int)($customer->id);
            $this->context->cookie->customer_lastname = $customer->lastname;
            $this->context->cookie->customer_firstname = $customer->firstname;
            $this->context->cookie->logged = 1;
            $customer->logged = 1;
            $this->context->cookie->is_guest = $customer->isGuest();
            $this->context->cookie->passwd = $customer->passwd;
            $this->context->cookie->email = $customer->email;
            // Add customer to the context
            $this->context->customer = $customer;
            if (Configuration::get('PS_CART_FOLLOWING') && (empty($this->context->cookie->id_cart) || Cart::getNbProducts($this->context->cookie->id_cart) == 0) && $id_cart = (int)Cart::lastNoneOrderedCart($this->context->customer->id)) {
                $this->context->cart = new Cart($id_cart);
            } else {
                $this->context->cart->id_carrier = 0;
                $this->context->cart->setDeliveryOption(null);
                $this->context->cart->id_address_delivery = Address::getFirstCustomerAddressId((int)($customer->id));
                $this->context->cart->id_address_invoice = Address::getFirstCustomerAddressId((int)($customer->id));
            }
            $this->context->cart->id_customer = (int)$customer->id;
            $this->context->cart->secure_key = $customer->secure_key;
            $this->context->cart->save();
            $this->context->cookie->id_cart = (int)$this->context->cart->id;
            $this->context->cookie->write();
            $this->context->cart->autosetProductAddress();
            Hook::exec('actionAuthentication');

            if ($this->psversion() == 7 || $this->psversion(0) >= 8) {
                $this->context->updateCustomer($customer);
            }

            // Login information have changed, so we check if the cart rules still apply
            CartRule::autoRemoveFromCart($this->context);
            CartRule::autoAddToCart($this->context);
            if ($this->psversion() == 5 || $this->psversion() == 6 || $this->psversion() == 7 || $this->psversion(0) >= 8) {
                if (Tools::getValue('back')) {
                    if (Validate::isAbsoluteUrl(Tools::getValue('back'))) {
                        echo "top.location.href='" . (Tools::getValue('back')) . "'";
                    } else {
                        echo "top.location.href='" . '' . ($this->context->link->getPageLink(Tools::getValue('back'))) . "'";
                    }
                } else {
                    echo 'top.location.reload();';
                }
            } else {
                echo 'top.location.reload();';
            }
        }
    }

    public function getContent()
    {
        $output = "";
        if (Tools::isSubmit('hooks_settings')) {
            Configuration::updateValue('fbl_popuplogin', Tools::getValue('fbl_popuplogin'));
        }
        if (Tools::isSubmit('fblapp_settings')) {
            Configuration::updateValue('fblogin_inapp', Tools::getValue('fblogin_inapp'));
            Configuration::updateValue('fbl_appid', Tools::getValue('fbl_appid'));
            Configuration::updateValue('fbl_langarray', Tools::getValue('fbl_langarray'));
        }
        if (Tools::isSubmit('register_settings')) {
            Configuration::updateValue('fblogin_groupid', Tools::getValue('fblogin_groupid'));
            Configuration::updateValue('fblogin_semail', Tools::getValue('fblogin_semail'));
            Configuration::updateValue('fblogin_identity', Tools::getValue('fblogin_identity'));
        }
        return $output . $this->displayForm();
    }

    public function displayForm()
    {
        if ($this->psversion() == 5 || $this->psversion() == 6 || $this->psversion() == 7 || $this->psversion(0) >= 8) {
            if (Hook::getIdByName(preg_replace("/[^\da-z]/i", '', trim('popuplogin'))) == true) {
                $popuplogin = '<td class="margin-form"><input type="checkbox" name="fbl_popuplogin" value="1" ' . (Configuration::get('fbl_popuplogin') == 1 ? 'checked="yes"' : '') . '/></td><td>' . $this->l('PopUp login') . '</td>';
            } else {
                $popuplogin = '<td>' . $this->l('popup login module is not installed, hook doesnt exist') . '</td><td>' . $this->l('PopUp login') . '</td>';
            }
        }
        $languages = Language::getLanguages(false);
        $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
        $langiso = "";
        foreach ($languages as $language) {
            $langiso .= '<div id="header_fbl_langarray_' . $language['id_lang'] . '" style="display: ' . ($language['id_lang'] == $id_lang_default ? 'block' : 'none') . ';float: left;">
        <input type="text" id=fbl_langarray' . $language['id_lang'] . '" name="fbl_langarray[' . $language['id_lang'] . ']" value="' . Configuration::get('fbl_langarray', $language['id_lang']) . '">
        </div>';
        }
        $langiso .= "<div class='flags_block'>" . $this->displayFlags($languages, $id_lang_default, 'header_fbl_langarray', 'header_fbl_langarray', true) . "</div>";
        $checkbox_options = '';
        foreach ($this->modulehooks AS $modulehook => $value) {
            if (($this->psversion() == 4 && $value['ps14'] == 1) || ($this->psversion() == 5 && $value['ps15'] == 1) || ($this->psversion() == 6 && $value['ps16'] == 1) || ($this->psversion() == 7 && $value['ps17'] == 1) || ($this->psversion(0) >= 8 && $value['ps80'] == 1)) {
                if (Tools::getValue('hooks_settings', 'false') != 'false') {
                    if (Tools::getValue('fbl_' . $modulehook, 'false') != 'false') {
                        if (Tools::getValue('fbl_' . $modulehook) == 1) {
                            Configuration::updateValue('fbl_' . $modulehook, 1);
                        } else {
                            Configuration::updateValue('fbl_' . $modulehook, 0);
                        }
                    } else {
                        Configuration::updateValue('fbl_' . $modulehook, 0);
                    }
                }
                $checkbox_options .= '<tr><td style="width:150px;">' . "<input type=\"checkbox\" value=\"1\" name=\"fbl_$modulehook\" " . (Configuration::get('fbl_' . $modulehook) == 1 ? 'checked' : '') . "></td><td>" . $modulehook . "</td></tr>";
            }
        }
        return '
        <link rel="stylesheet" media="all" href="../modules/' . $this->name . '/css.css" type="text/css" />
                    <div class="panel">
                        <form action="' . Tools::safeOutput($_SERVER['REQUEST_URI']) . '" method="post">
                            <h3>' . $this->l('Facebook APP ID') . '</h3>
                            <div class="alert alert-info">
                                ' . $this->l('Define the Facebook APP ID. You can find the guide here:') . ' 
                                <strong><a target="_blank" href="http://mypresta.eu/en/art/basic-tutorials/how-to-create-facebook-application-id.html">' . $this->l('how to create facebook app id') . '</a></strong>
                            </div> 
                                                            
                                
                            <div style="clear:both; margin-bottom:20px;">
                                <label>' . $this->l('Include facebook SDK (all.js)') . '</label>
                    			<div class="margin-form">
                                <select name="fblogin_inapp">
                                    <option value="1" ' . (Configuration::get('fblogin_inapp') == 1 ? 'selected' : '') . '>' . $this->l('Yes') . '</option>
                                    <option value="0" ' . (Configuration::get('fblogin_inapp') != 1 ? 'selected' : '') . '>' . $this->l('No') . '</option>
                                </select>
                    		</div>
                      </div>  
                                
                            <label>' . $this->l('Facebook APP ID') . '</label>
                    		<div class="margin-form">
                    		    <input type="text" name="fbl_appid" value="' . Configuration::get('fbl_appid') . '"/>
                    		</div>
                    		<br/>
                            <div class="alert alert-info">
                                ' . $this->l('What is language code? It informs facebook what language will be used to create a facebook popup login box. Please define language codes for each available language in your shop.') . '<br/>
                                 ' . $this->l('If you do not know what to put into field below: just') . ' <strong><a href="https://mypresta.eu/en/art/know-how/facebook-list-of-local-language-codes.html" target="_blank">' . $this->l('read more about language codes') . '</a></strong>
                            </div> 
                            <div style="display:block; clear:both;">
            		            <div style="display:block; clear:both; margin-top:20px;">
                                    <label>' . $this->l('APP language codes') . ':</label>
                                    <div class="margin-form" style="text-align:left;">
                                        ' . $langiso . '
                                    </div>	
            		            </div>
            	            </div>
                            <div class="panel-footer">
                                 <button class="btn btn-default pull-right" name="fblapp_settings" value="1"/><i class="process-icon-save"></i>' . $this->l('Save') . '</button>
                            </div>
                        </form>
                    </div>                                            
                    
                            
                   <div class="panel">
                        <form action="' . Tools::safeOutput($_SERVER['REQUEST_URI']) . '" method="post">    
                        <h3>' . $this->l('Display login button in:') . '</h3>
                        <div class="alert alert-info">' . $this->l('Select position where the module will display button to log in with Facebook') . '</div>
                        <table class="table table-bordered">
                            <tr>
                                <th>' . $this->l('Enabled') . '</th>
                                <th>' . $this->l('Position') . '</th>
                            </tr>' . $checkbox_options . ' ' . $popuplogin . '
                        </table>
                        <div class="panel-footer">
                            <button class="btn btn-default pull-right" type="submit" name="hooks_settings" value="1" class="button" /><i class="process-icon-save"></i>' . $this->l('Save') . '</button>
                        </div>
                        </form>
                   </div>
                    
                    <div class="panel">
                        <form action="' . Tools::safeOutput($_SERVER['REQUEST_URI']) . '" method="post">
                            <h3>' . $this->l('Register settings:') . '</h3>
                                <div style="clear:both; margin-bottom:10px;">
                                    <label>' . $this->l('Associate customer with group:') . '</label>
                    			    <div class="margin-form">
                                    <select name="fblogin_groupid">
                                    <option>' . $this->l('-- SELECT --') . '</option>
                                    ' . $this->customerGroup(Configuration::get('fblogin_groupid')) . '
                                    </select>
                    				</div>
                                </div>
                                <div style="clear:both; margin-bottom:20px;">
                                    <label>' . $this->l('Send email with account register confirmation:') . '</label>
                    			    <div class="margin-form">
                                    <select name="fblogin_semail">
                                        <option>' . $this->l('-- SELECT --') . '</option>
                                        <option value="1" ' . (Configuration::get('fblogin_semail') == 1 ? 'selected' : '') . '>' . $this->l('Yes') . '</option>
                                        <option value="0" ' . (Configuration::get('fblogin_semail') != 1 ? 'selected' : '') . '>' . $this->l('No') . '</option>
                                    </select>
                    				</div>
                                </div>           
                                    <div class="bootstrap clearfix">
                                        <div class="alert alert-info" style="text-align:left">
                                            ' . $this->l('Facebook login module creates an account in shop and user after register can receive email with account details (see option above)') . ' <br />
                                            ' . $this->l('Customer will receive email and password information. And it will be possible to log in to shop with facebook login as well as with email and password') . ' <br /><br />
                                            ' . $this->l('This option - when enabled will hide password change feature in customer account details section (my personal information)') . ' <br />
                                        </div>
                                    </div>
                                <div style="clear:both; margin-bottom:20px;">
                                    <label>' . $this->l('Do not allow to alter password') . '</label>
                    			    <div class="margin-form">
                                    <select name="fblogin_identity">
                                        <option>' . $this->l('-- SELECT --') . '</option>
                                        <option value="1" ' . (Configuration::get('fblogin_identity') == 1 ? 'selected' : '') . '>' . $this->l('Yes') . '</option>
                                        <option value="0" ' . (Configuration::get('fblogin_identity') != 1 ? 'selected' : '') . '>' . $this->l('No') . '</option>
                                    </select>
                    				</div>
                                </div>
                                <div class="panel-footer">
                				    <button class="btn btn-default pull-right"  name="register_settings" value="1"/><i class="process-icon-save"></i>' . $this->l('Save') . '</button>
                				</div>
                            </fieldset>
                        </form>
                    </div>

                    <div class="panel">
                            <h3>' . $this->l('Accounts created with FB Login:') . '</h3>
                            <table class="table" style="width:100%;">
                            <tr>
                                <th>' . $this->l('Image') . '</th>
                                <th>' . $this->l('Name') . '</th>
                                <th>' . $this->l('Email') . '</th>
                                <th>' . $this->l('Register date') . '</th>
                                <th>' . $this->l('Options') . '</th>
                            </tr>
                            ' . $this->displayListOfAccounts() . '
                            </table>
                        </fieldset>
                   </div>' . $this->checkforupdates(0, 1);
    }

    public function displayListOfAccounts()
    {
        $accounts = Db::getInstance()->ExecuteS('SELECT * FROM `' . _DB_PREFIX_ . 'fblogin`');
        $return = '';
        if (count($accounts) > 0) {
            foreach ($accounts AS $account => $value) {
                $customer = new Customer($value['id_customer']);
                if (isset($customer->email)) {
                    $return .= "
            <tr>
                <td><img src='https://graph.facebook.com/" . $value['id_social'] . "/picture?type=square'/></a></td>
                <td>" . $customer->firstname . ' ' . $customer->lastname . "</td>
                <td>" . $customer->email . "</td>
                <td>" . $customer->date_add . "</td>
                <td><a target='_blank' href='https://facebook.com/" . $value['id_social'] . "'>" . $this->l('See FB profile') . "</a></td>
            </tr>";
                }
            }
        } else {
            $return = '<tr><td colspan="5"><div class="alert alert-warning">' . $this->l('No accounts created') . '</div></td></tr>';
        }
        return $return;
    }

    public function displayListOfAccountsLast($nb)
    {
        $accounts = Db::getInstance()->ExecuteS('SELECT * FROM `' . _DB_PREFIX_ . 'fblogin` ORDER BY id_fblogin DESC LIMIT ' . $nb);
        $return = '';
        foreach ($accounts AS $account => $value) {
            $customer = new Customer($value['id_customer']);
            if (isset($customer->email)) {
                $return .= "
                <tr>
                    <td><img src='https://graph.facebook.com/" . $value['id_social'] . "/picture?type=square'/></a></td>
                    <td>" . $customer->firstname . ' ' . $customer->lastname . "</td>
                    <td><a target='_blank' href='https://facebook.com/" . $value['id_social'] . "'>" . $this->l('See FB profile') . "</a></td>
                </tr>";
            }
        }
        return $return;
    }

    public function nbOfAccounts()
    {
        $accounts = Db::getInstance()->ExecuteS('SELECT count(*) as counter FROM `' . _DB_PREFIX_ . 'fblogin`');
        return (isset($accounts[0]['counter']) ? $accounts[0]['counter'] : 0);
    }

    public function customerGroup($group_id)
    {
        $return = '';
        foreach (Group::getGroups($this->context->language->id, $id_shop = false) as $key => $value) {
            $return .= '<option ' . ($group_id == $value['id_group'] ? 'selected="yes"' : '') . ' value="' . $value['id_group'] . '">' . $value['name'] . '</option>';
        }
        return $return;
    }

    public function hookdisplayHeader($params)
    {
        $passwd = false;
        if (Tools::getValue('controller', 'false') != 'false') {
            if (Tools::getValue('controller') == "identity" && Configuration::get('fblogin_identity') == 1) {
                if (isset($this->context->cookie)) {
                    if (isset($this->context->cookie->id_customer)) {
                        if ($this->check_db_id_customer($this->context->cookie->id_customer)) {
                            $passwd = Tools::passwdGen(8);
                            $customer = new Customer($this->context->cookie->id_customer);
                            $customer->passwd = Tools::encrypt($passwd);
                            $this->context->cookie->passwd = Tools::encrypt($passwd);
                            $this->context->cookie->write();
                            $customer->update();
                            $this->context->smarty->assign('passwd', $passwd);
                        }
                    }
                }
            }
        }
        if ($this->psversion() == 5 || $this->psversion() == 6) {
            $this->context->controller->addJS(($this->_path) . 'js/fblogin.js', 'all');
            $this->context->controller->addCSS(($this->_path) . 'css/fblogin.css', 'all');
        } elseif ($this->psversion() == 7 || $this->psversion(0) >= 8) {
            $this->context->controller->addJS(($this->_path) . 'js/fblogin.js', 'all');
            $this->context->controller->addCSS(($this->_path) . 'css/fblogin17.css', 'all');
        }

        if ($this->psversion() != 4) {
            $logged = $this->context->customer->isLogged();
        }

        $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
        $this->smarty->assign('ps_version', $this->psversion());
        $this->smarty->assign('ps_version80', $this->psversion(0));
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('fbl_langcode', Configuration::get('fbl_langarray', $this->context->language->id));
        return $this->display(__file__, 'header.tpl');
    }

    public function hookdisplayFooter($params)
    {
        // if condition in .tpl file because it includes also other important contents
        $this->smarty->assign('fb_psver', $this->psversion());
        $this->smarty->assign('fb_psver80', $this->psversion(0));
        return $this->display(__file__, 'footer.tpl');
    }

    public function hookdisplayTop($params)
    {
        if (Configuration::get('fbl_displayTop') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'top.tpl');
        }
    }

    public function hookdisplayTopColumn($params)
    {
        if (Configuration::get('fbl_displaytopColumn') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'topColumn.tpl');
        }
    }

    public function hookdisplayHome($params)
    {
        if (Configuration::get('fbl_displayHome') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'home.tpl');
        }
    }

    public function hookdisplayNav($params)
    {
        if (Configuration::get('fbl_displayNav') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'displayNav.tpl');
        }
    }

    public function hookdisplayNav1($params)
    {
        if (Configuration::get('fbl_displayNav1') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'displayNav.tpl');
        }
    }

    public function hookdisplayNav2($params)
    {
        if (Configuration::get('fbl_displayNav2') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'displayNav.tpl');
        }
    }

    public function hookdisplayShoppingCart($params)
    {
        if (Configuration::get('fbl_displayShoppingCart') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'shoppingCart.tpl');
        }
    }

    public function hookdisplayCustomerLoginFormAfter($params)
    {
        if (Configuration::get('fbl_displayCustomerLoginFormAfter') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'displayCustomerLoginFormAfter.tpl');
        }
    }


    public function hookdisplayPersonalInformationTop($params)
    {
        if (Configuration::get('fbl_displayPersonalInformationTop') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'displayPersonalInformationTop.tpl');
        }
    }


    public function hookdisplayShoppingCartExtra($params)
    {
        if (Configuration::get('fbl_displayShoppingCartExtra') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'shoppingCartExtra.tpl');
        }
    }

    public function hookdisplayLeftColumn($params)
    {
        if (Configuration::get('fbl_displayLeftColumn') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'leftcolumn.tpl');
        }
    }

    public function hookfblogin($params)
    {
        if (Configuration::get('fbl_fblogin') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'fblogin.tpl');
        }
    }

    public function hookdisplayRightColumn($params)
    {
        if (Configuration::get('fbl_displayRightColumn') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'rightcolumn.tpl');
        }
    }

    public function hookpopuplogin($params)
    {
        if (Configuration::get('fbl_popuplogin') == 1) {
            $this->context->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            $this->context->smarty->assign('ps_version', $this->psversion());
            $this->context->smarty->assign('ps_version80', $this->psversion(0));
            $this->context->smarty->assign('fbl_langcode', Configuration::get('fbl_langarray', $this->context->language->id));
            //return $this->display(__file__, 'displayPopUpLogin.tpl');
            return $this->context->smarty->fetch(_PS_MODULE_DIR_ . $this->name . '/displayPopUpLogin.tpl');
        }
    }

    public function hookdisplayCreateAccountForm($params)
    {
        if (Configuration::get('fbl_displayCreateAccountForm') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'createAccountForm.tpl');
        }
    }

    public function hookdisplayCreateAccountTop($params)
    {
        if (Configuration::get('fbl_displayCreateAccountTop') == 1) {
            $this->smarty->assign('fbl_appid', Configuration::get('fbl_appid'));
            return $this->display(__file__, 'createAccountTop.tpl');
        }
    }

    public function hookdisplayDashboardZoneOne($params)
    {
        $this->context->smarty->assign('last_accounts', $this->displayListOfAccountsLast(3));
        $this->context->smarty->assign('nb_of_fb_accounts', $this->nbOfAccounts());
        $this->checkforupdates(0, 0);
        $this->context->smarty->assign('update_availablility', (isset($this->warning) ? $this->warning : false));
        return $this->display(__file__, 'dashboardZoneOne.tpl');
    }
}

class fbloginUpdate extends fblogin
{
    public static function version($version)
    {
        $version = (int)str_replace(".", "", $version);
        if (strlen($version) == 3) {
            $version = (int)$version . "0";
        }
        if (strlen($version) == 2) {
            $version = (int)$version . "00";
        }
        if (strlen($version) == 1) {
            $version = (int)$version . "000";
        }
        if (strlen($version) == 0) {
            $version = (int)$version . "0000";
        }
        return (int)$version;
    }

    public static function encrypt($string)
    {
        return base64_encode($string);
    }

    public static function verify($module, $key, $version)
    {
        if (ini_get("allow_url_fopen")) {
            if (function_exists("file_get_contents")) {
                $actual_version = @file_get_contents('http://dev.mypresta.eu/update/get.php?module=' . $module . "&version=" . self::encrypt($version) . "&lic=$key&u=" . self::encrypt(_PS_BASE_URL_ . __PS_BASE_URI__));
            }
        }
        Configuration::updateValue("update_" . $module, date("U"));
        Configuration::updateValue("updatev_" . $module, $actual_version);
        return $actual_version;
    }
}
