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

if (!defined('_PS_VERSION_')) {
    exit;
}

class aapfree extends Module
{
    private $_html = '';
    private $_postErrors = array();
    public $context;
    public $mkey;
    public $secure_key;
    public $mypresta_link;

    function __construct($dontTranslate = false)
    {
        $this->name = 'aapfree';
        $this->version = '1.4.2';
        $this->author = 'MyPresta.eu';
        $this->tab = 'front_office_features';
        $this->mypresta_link = 'https://mypresta.eu/modules/front-office-features/ask-about-product-free.html';
        $this->need_instance = 0;
        $this->bootstrap = 1;
        $this->secure_key = Tools::encrypt($this->name);

        parent::__construct();

        if (!$dontTranslate) {
            $this->displayName = $this->l('Ask about product free');
            $this->description = $this->l('Free module that gives possibility to send questions about products');
        }
        $this->ps_versions_compliancy = array(
            'min' => '1.7',
            'max' => '12.0'
        );
        $this->checkforupdates(0, 0);
    }

    public function hookactionAdminControllerSetMedia($params)
    {
        //for update feature purposes
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
            ' . ($this->psversion() == 6 || $this->psversion() == 7 ? '<div class="panel-heading"><i class="icon-wrench"></i> ' . $this->l('MyPresta updates') . '</div>' : '') . '
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
                        $actual_version = aapfreeUpdate::verify($this->name, (isset($this->mkey) ? $this->mkey : 'nokey'), $this->version);
                    }
                    if (aapfreeUpdate::version($this->version) < aapfreeUpdate::version(Configuration::get('updatev_' . $this->name)) && Tools::getValue('ajax', 'false') == 'false') {
                        $this->context->controller->warnings[] = '<strong>' . $this->displayName . '</strong>: ' . $this->l('New version available, check http://MyPresta.eu for more informations') . ' <a href="' . $this->mypresta_link . '">' . $this->l('More details in changelog') . '</a>';
                        $this->warning = $this->context->controller->warnings[0];
                    }
                } else {
                    if (Configuration::get('update_' . $this->name) < (date("U") - 259200)) {
                        $actual_version = aapfreeUpdate::verify($this->name, (isset($this->mkey) ? $this->mkey : 'nokey'), $this->version);
                    }
                }
                if ($display_msg == 1) {
                    if (aapfreeUpdate::version($this->version) < aapfreeUpdate::version(aapfreeUpdate::verify($this->name, (isset($this->mkey) ? $this->mkey : 'nokey'), $this->version))) {
                        return "<span style='color:red; font-weight:bold; font-size:16px; margin-right:10px;'>" . $this->l('New version available!') . "</span>";
                    } else {
                        return "<span style='color:green; font-weight:bold; font-size:16px; margin-right:10px;'>" . $this->l('Module is up to date!') . "</span>";
                    }
                }
            }
        }
    }


    private function installdb()
    {
        $prefix = _DB_PREFIX_;
        $engine = _MYSQL_ENGINE_;
        $statements = array();
        $statements[] = "CREATE TABLE IF NOT EXISTS `{$prefix}aapfreequestion` (" . '
        `id_aapfreequestion` int(10) NOT NULL AUTO_INCREMENT,' . '
        `id_product` int(10) NOT NULL, ' . '
        `id_combination` int(10) NOT NULL DEFAULT 0, ' . '
        `email` VARCHAR(200),' . '
        `author` VARCHAR(200),' . '
        `phone` VARCHAR(200),' . '
        `question` TEXT,' . '
        `date_add` DATETIME,' . '
        PRIMARY KEY (`id_aapfreequestion`)' . ")";

        foreach ($statements as $statement) {
            if (!Db::getInstance()->Execute($statement)) {
                return false;
            }
        }
        $this->inconsistency(0);
        return true;
    }

    public function inconsistency($ret = false)
    {
        return;
    }

    public function install()
    {
        return (parent::install() &&
            $this->installdb() &&
            $this->createMenu() &&
            $this->registerHook('displayProductActions') &&
            $this->registerHook('actionAdminControllerSetMedia') &&
            $this->installMailTranslation() &&
            $this->registerHook('displayHeader'));
    }

    public function uninstall()
    {
        if (parent::uninstall() == false) {
            return false;
        }

        $idTabs = array();
        if (Tab::getIdFromClassName('AdminAapfreeQuestion')) {
            $idTabs[] = Tab::getIdFromClassName('AdminAapfreeQuestion');

            foreach ($idTabs as $idTab) {
                if ($idTab) {
                    $tab = new Tab($idTab);
                    $tab->delete();
                }
            }
        }
        return true;
    }

    public function createMenu()
    {
        $tab = new Tab();
        $tab->id_parent = Tab::getIdFromClassName('AdminParentCustomerThreads');
        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = $this->l('Questions');
        }
        $tab->class_name = 'AdminAapfreeQuestion';
        $tab->module = $this->name;
        $tab->add();
        return true;
    }

    function installMailTranslation()
    {
        $title = array();
        foreach (Language::getLanguages(false) AS $value) {
            $title[$value['id_lang']] = 'New inquiry from %1$s about %2$s';
        }
        Configuration::updateValue('aapfree_TITLE', $title);
        return true;
    }

    public function hookdisplayProductActions($params)
    {
        if (Tools::getValue('controller') == 'product' && Tools::getValue('action') == 'quickview') {
            return;
        }
        /* Product informations */
        $product = new Product((int)Tools::getValue('id_product'), false, $this->context->language->id);
        $image = Product::getCover((int)$product->id);
    
        $this->context->smarty->assign(array(
            'aapfree_link' => $this->context->link,
            'aapfree_product' => $product,
            'aapfree_product_cover' => (int)$product->id . '-' . (int)$image['id_image'],
            'aapfree_GDPR' => (int)Configuration::get('aapfree_GDPR'),
            'aapfree_GDPRCMS' => (int)Configuration::get('aapfree_GDPRCMS'),
            'aapfree_SUMMARY' => (int)Configuration::get('aapfree_SUMMARY'),
            'aapfree_recaptcha_sitekey' => Configuration::get('aapfree_recaptcha_sitekey'),
            'aapfree_recaptcha' => Configuration::get('aapfree_recaptcha'),
            'aapfree_recaptcha_lang' => $this->context->language->iso_code)
        );
        return $this->display(__FILE__, 'views/aapfree-extra.tpl');
    }

    public function hookdisplayHeader($params)
    {
        $this->page_name = Dispatcher::getInstance()->getController();

        if ($this->page_name == 'product') {
            $this->context->controller->addCSS($this->_path . 'views/aapfree.css', 'all');
            $this->context->controller->addJS($this->_path . 'views/aapfree.js');
            $this->context->controller->addJqueryPlugin('fancybox');

            Media::addJsDef(array(
                //'aapfree_recaptcha_sitekey' => Configuration::get('aapfree_recaptcha_sitekey'),
                'aapfree_frontcontroller' => $this->context->link->getModuleLink('aapfree', 'question', array('submitQuestion' => 1)),
                'aapfree_confirmation' => $this->l('Your e-mail has been sent successfully'),
                'aapfree_problem' => $this->l('Your e-mail could not be sent. Please check the name and e-mail address and try again.'),
                'aapfree_title' => $this->l('Question about product'),
                'aapfree_id_lang' => Context::getContext()->language->id,
                'aapfree_missingFields' => $this->l('You did not fill required fields'),
                'aapfree_aapfree_GDPR' => (int)Configuration::get('aapfree_GDPR'),
                'aapfree_secureKey' => $this->secure_key
            ));
        }
    }

    public function _postProcess()
    {
        if (Tools::isSubmit('submitSettings')) {
            Configuration::updateValue('aapfree_recaptcha_secretkey', Tools::getValue('aapfree_recaptcha_secretkey'));
            Configuration::updateValue('aapfree_recaptcha_sitekey', Tools::getValue('aapfree_recaptcha_sitekey'));
            Configuration::updateValue('aapfree_recaptcha', (int)Tools::getValue('aapfree_recaptcha'));
            Configuration::updateValue('aapfree_SUMMARY', (int)Tools::getValue('aapfree_SUMMARY'));
            Configuration::updateValue('aapfree_GDPRCMS', (int)Tools::getValue('aapfree_GDPRCMS'));
            Configuration::updateValue('aapfree_GDPR', (int)Tools::getValue('aapfree_GDPR'));
            Configuration::updateValue('aapfree_emailslist', trim(Tools::getValue('aapfree_emailslist')));

            $title = array();
            foreach (Language::getLanguages(false) AS $value) {
                $title[$value['id_lang']] = Tools::getValue('aapfree_TITLE_' . $value['id_lang']);
            }
            Configuration::updateValue('aapfree_TITLE', $title);

            $this->context->controller->confirmations[] = $this->l('settings updated');
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

    public function advert()
    {
        return '<div class="panel">
                <h3><i class="icon-wrench"></i> ' . $this->l('I am developing this module for free - if you want') . ' <a class="btn button label label-danger" target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7WE8PTH4ZPYZA">' . $this->l('send me a donation') . '</span></a></h3>
                <iframe src="//apps.facepages.eu/somestuff/whatsgoingon.html" width="100%" height="150" border="0" style="border:none;"></iframe>
            </div>';
    }

    public function getContent()
    {
        $this->_postProcess();
        $this->context->controller->informations[] = $this->l('You can find all submited questions here:') . ' <a href="' . $this->context->link->getAdminLink('AdminAapfreeQuestion', true) . '">' . $this->l('Questions') . '</a>';
        return $this->advert() . $this->renderConfigForm() . $this->checkforupdates(0, 1);
    }

    public function renderConfigForm()
    {
        $fields_form_1 = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Configuration'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'is_bool' => true,
                        'label' => $this->l('Display product summary inside popup'),
                        'desc' => $this->l('Product summary is a product short description'),
                        'name' => 'aapfree_SUMMARY',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'is_bool' => true,
                        'label' => $this->l('GDPR Compliant'),
                        'name' => 'aapfree_GDPR',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Privacy policy page'),
                        'desc' => $this->l('Choose a CMS page with privacy policy details for GDPR purposes'),
                        'name' => 'aapfree_GDPRCMS',
                        'class' => 't',
                        'options' => array(
                            'query' => CMS::getCmsPages($this->context->language->id, null, false),
                            'id' => 'id_cms',
                            'name' => 'meta_title'
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Email title'),
                        'name' => 'aapfree_TITLE',
                        'lang' => true,
                        'desc' => $this->l('Module will use this as a title of email that will be delivered to you (as a shop owner)') .
                            '<br/>' .
                            $this->l('%1$s - will be replaced with logged customer name') .
                            '<br/>' .
                            $this->l('%2$s - will be replaced with product name'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('recipient of the email from the form'),
                        'name' => 'aapfree_emailslist',
                        'lang' => false,
                        'desc' => $this->l('Module by default sends email from "Ask about product from" to shop contact email address. If you expect to send this email to different mailbox just type this email here. If you expect to send email to various mailboxes just type all the emails here (separate emails with comma symbol like: luke.skywalker@starwars.com,han.solo@gmail.com'),
                    ),
                    array(
                        'type' => 'switch',
                        'is_bool' => true,
                        'label' => $this->l('ReCaptcha protection (v2)'),
                        'name' => 'aapfree_recaptcha',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('reCaptcha site key'),
                        'prefix' => $this->l('SITE KEY'),
                        'name' => 'aapfree_recaptcha_sitekey',
                        'desc' => '<a href="https://mypresta.eu/know-how/recaptcha-sitekey-for-prestashop.html" target="_blank">' . $this->l('read how to get siteKey and secretKey') . '</a>'
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('reCaptcha secret key'),
                        'prefix' => $this->l('SECRET KEY'),
                        'name' => 'aapfree_recaptcha_secretkey',
                        'desc' => '<a href="https://mypresta.eu/know-how/recaptcha-sitekey-for-prestashop.html" target="_blank">' . $this->l('read how to get siteKey and secretKey') . '</a>'
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                    'class' => 'btn btn-default pull-right',
                    'name' => 'submitSettings',
                ),
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->default_form_language = $this->context->language->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->submit_action = 'submitaapfreeConfiguration';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form_1));
    }


    public function getConfigFieldsValues()
    {
        $title = array();
        foreach (Language::getLanguages(false) AS $value) {
            $title[$value['id_lang']] = Configuration::get('aapfree_TITLE', $value['id_lang']);
        }

        return array(
            'aapfree_recaptcha_secretkey' => Tools::getValue('aapfree_recaptcha_secretkey', Configuration::get('aapfree_recaptcha_secretkey')),
            'aapfree_recaptcha_sitekey' => Tools::getValue('aapfree_recaptcha_sitekey', Configuration::get('aapfree_recaptcha_sitekey')),
            'aapfree_recaptcha' => Tools::getValue('aapfree_recaptcha', Configuration::get('aapfree_recaptcha')),
            'aapfree_SUMMARY' => Tools::getValue('aapfree_SUMMARY', Configuration::get('aapfree_SUMMARY')),
            'aapfree_GDPRCMS' => Tools::getValue('aapfree_GDPRCMS', Configuration::get('aapfree_GDPRCMS')),
            'aapfree_GDPR' => Tools::getValue('aapfree_GDPR', Configuration::get('aapfree_GDPR')),
            'aapfree_emailslist' => Tools::getValue('aapfree_emailslist', Configuration::get('aapfree_emailslist')),
            'aapfree_TITLE' => $title,
        );
    }

    public function isValidName($name)
    {
        $isName = Validate::isName($name);
        $isShortName = $this->isShortName($name);
        $isNameLikeAnUrl = $this->isNameLikeAnUrl($name);
        $isValidName = $isName && $isShortName && !$isNameLikeAnUrl;

        return $isValidName;
    }

    public function isShortName($name)
    {
        $isShortName = (strlen($name) <= 50);

        return $isShortName;
    }

    public function isNameLikeAnUrl($name)
    {
        $regex = "/(https?:[\/]*.*)|([\.]*[[[:alnum:]]+\.[^ ]]*.*)/m";
        $isNameLikeAnUrl = (bool)preg_match_all($regex, $name);

        return $isNameLikeAnUrl;
    }
}


class aapfreeUpdate extends aapfree
{
    public static function _isCurl()
    {
        return function_exists('curl_version');
    }

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

    public static function verify($module, $key)
    {
        if (ini_get("allow_url_fopen")) {
            if (function_exists("file_get_contents")) {
                $actual_version = @file_get_contents('http://dev.mypresta.eu/update/get.php?module=' . $module . "&lic=$key&u=" . self::encrypt(_PS_BASE_URL_ . __PS_BASE_URI__));
            }
        }
        Configuration::updateValue("update_" . $module, date("U"));
        Configuration::updateValue("updatev_" . $module, $actual_version);

        return $actual_version;
    }

    public static function encrypt($string)
    {
        return base64_encode($string);
    }
}