<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Categoriesbanners extends Module {

    public function __construct() {
        $this->name = 'categoriesbanners';
        $this->tab = 'front_office_features';
        $this->version = '5.2.4';
        $this->author = 'Keshva Thakur';
        $this->condition_name = '';
        $this->module_key = '0a4e9eedb40b0a69c397b02116aec86d';
        if (version_compare(_PS_VERSION_, '1.6.0.1') >= 0) {
            $this->bootstrap = true;
        } else {
            $this->bootstrap = false;
        }
        $this->html = '';
        $this->_html = '';
        $this->ps_v = _PS_VERSION_;
        parent::__construct();

        $this->displayName = $this->l('Product list banners manger ( categories page banner)');
        $this->description = $this->l('category banner management before and after product banner any product row in category product page');
        $this->confirmUninstall = $this->l('Uninstalling the module will also delete all data?');
    }

    public function install() {
        if (!parent::install() OR ! $this->createTables() OR ! $this->registerHook('displayFooter') OR ! $this->registerHook('footer') OR ! $this->registerHook('header') OR ! $this->registerHook('displayFooterBottom'))
            return false;
        Configuration::updateValue('category_banners_product_tag', '');
        Configuration::updateValue('category_banners_product_class', '');
        Configuration::updateValue('category_banners_id', '');
        return true;
    }

    public function createTables() {


        $sql = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'category_banner_mangement` (
		`id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
				`image` varchar(32) NOT NULL,
				`lang` INT(11) UNSIGNED NOT NULL DEFAULT \'0\',
				`category` INT(10) UNSIGNED NOT NULL DEFAULT \'0\',
				`after_nu_product` INT(10) UNSIGNED NOT NULL DEFAULT \'0\',				
				`comment` TEXT NOT NULL,
				`class` varchar(32) NOT NULL,
				`css` TEXT NOT NULL,
				`shop_id` INT(11) UNSIGNED NOT NULL DEFAULT \'0\',
				`other` TEXT NOT NULL,
                                `active` INT(10) UNSIGNED NOT NULL DEFAULT \'1\',
		PRIMARY KEY(`id`));';

        if (!Db::getInstance()->Execute($sql))
            return false;

        return true;
    }

    public function uninstall() {
        if (!parent::uninstall()) {
            return false;
        }
         Db::getInstance()->execute('
        	DROP TABLE IF EXISTS `'._DB_PREFIX_.'category_banner_mangement`;
        ');

        return true;
    }

    public function getContent() {
        if (Tools::getValue('edit')) {
            $this->displayEdit();
        } else {
            $this->displayTable();
            $this->displayAddNew();
            $this->postSave();
            $this->deleteBaner();
        }

        $this->displayFooter();

        return $this->html;
    }

    private function postSave() {


        if (Tools::isSubmit('submit' . $this->name)) {

            if (Tools::getValue('category_banners_id')) {
                Configuration::updateValue('category_banners_id', Tools::getValue('category_banners_id'));
                $this->_html .= $this->displayConfirmation("Category banner id/class update sucessfully");
            }

            if (Tools::getValue('category_banners_product_tag')) {

                Configuration::updateValue('category_banners_product_tag', Tools::getValue('category_banners_product_tag'));
                $this->_html .= $this->displayConfirmation("Product div tag update sucessfully");
            }

            if (Tools::getValue('category_banners_product_class')) {

                Configuration::updateValue('category_banners_product_class', Tools::getValue('category_banners_product_class'));
                $this->_html .= $this->displayConfirmation("Product div class update sucessfully");
            }

            /* if (Tools::getValue('category_banners_product_tagend')) {               
              Configuration::updateValue('category_banners_product_tagend', Tools::getValue('category_banners_product_tagend'));
              $this->_html .= $this->displayConfirmation("Product div end tag update sucessfully");
              } */
        }





        if (Tools::isSubmit('btnSubmitSave')) {


            $lang = Tools::getValue('lang');
            $category = Tools::getValue('cateory');
            $after_nu_product = Tools::getValue('afterproduct');
            $comment = Tools::getValue('comment');
            $class = Tools::getValue('class');
            $css = Tools::getValue('css');
            $shop_id = Tools::getValue('shop_id');
            $other = Tools::getValue('other');
            $active = Tools::getValue('active');


            $target_dir = dirname(__FILE__) . '/views/img/';
            $target_file = $target_dir . basename($_FILES["img"]["name"]);
            $imagen = basename($_FILES["img"]["name"]);


            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                $this->displayError("Banner upload successfully.");
            } else {
                $this->displayError("Sorry, there was an error uploading your banner.");
            }

            $edit = Tools::getValue('edit_id');

            if (!empty($edit)) {

                if (empty($imagen)) {
                    $imagen = Tools::getValue('oldimg');
                }

                if (!Db::getInstance()->update('category_banner_mangement', array(
                            'image' => pSQL($imagen),
                            'lang' => (int) $lang,
                            'category' => (int) $category,
                            'after_nu_product' => pSQL($after_nu_product),
                            'comment' => mysqli_real_escape_string(mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_), $comment),
                            'class' => mysqli_real_escape_string(mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_), $class),
                            'css' => mysqli_real_escape_string(mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_), $css),
                            'shop_id' => '',
                            'active' => (int) $active,
                            'other' => pSQL($other),
                                ), '`id` = ' . (int) $edit))
                    $this->context->controller->_errors[] = Tools::displayError('Error: ') . mysql_error();


                Tools::redirectAdmin(AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules') . '&edited=1');
            }else {
                if (!Db::getInstance()->insert('category_banner_mangement', array(
                            'image' => pSQL($imagen),
                            'lang' => (int) $lang,
                            'category' => (int) $category,
                            'after_nu_product' => pSQL($after_nu_product),
                            'comment' => mysqli_real_escape_string(mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_), $comment),
                            'class' => mysqli_real_escape_string(mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_), $class),
                            'css' => mysqli_real_escape_string(mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_), $css),
                            'shop_id' => '',
                            'other' => pSQL($other),
                            'active' => 1,
                        )))
                    $this->context->controller->_errors[] = Tools::displayError('Error: ') . mysql_error();
                Tools::redirectAdmin(AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules') . '');
            }
        }
    }

    public function deleteBaner() {


        $dele = Tools::getValue('del_id');
        if ($dele) {
            if (!Db::getInstance()->delete('category_banner_mangement', '`id` = ' . $dele)) {
                $this->context->controller->_errors[] = Tools::displayError('Error: ') . mysql_error();
            } else {

                Tools::redirectAdmin(AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules') . '');
            }
        }
    }

    private function displayTable() {

        $catSQL = 'SELECT * FROM ' . _DB_PREFIX_ . 'category_banner_mangement';
        $bannerData = Db::getInstance()->ExecuteS($catSQL);


        $current_currency = null;
        $category = Currency::getCurrencies(true, true);
        $languages = Language::getLanguages(true, $this->context->shop->id);


        $id_lang = Context::getContext()->language->id;
        $cats = Category::getCategories((int) ($id_lang), true, false);




        $cats_array = array();
        foreach ($cats as $cvalues) {
            $cats_array[$cvalues['id_category']] = $cvalues;
        }



        $lang_array = array();
        foreach ($languages as $keys => $lvalues) {
            $lang_array[$lvalues['id_lang']] = $lvalues;
        }


        $data_array = array();
        $i = 0;
        foreach ($bannerData as $keys => $valuesd) {
            //echo $values['id_lang'];
            $valuesd['lang'] = $lang_array[$valuesd['lang']]['name'] . ' - (' . $valuesd['lang'] . ')';
            $valuesd['category'] = $cats_array[$valuesd['category']]['name'] . ' - (' . $valuesd['category'] . ')';
            $data_array[] = $valuesd;
            $i++;
        }








        $this->context->smarty->assign(array(
            'module_name' => $this->name,
            'token' => Tools::getValue('token'),
            'condition_name' => $this->condition_name,
            'path_uri' => $this->getPathUri(),
            'data' => $data_array,
            'action' => '',
            'category_banners_product_tag' => Configuration::get('category_banners_product_tag'),
            'category_banners_product_class' => Configuration::get('category_banners_product_class'),
            'category_banners_id' => Configuration::get('category_banners_id'),
        ));

        $this->html .= $this->display(__FILE__, 'views/templates/admin/table.tpl');
    }

    public function customCategory() {

        return 'france';
    }

    private function displayAddNew() {



        $id_test = Configuration::get('PS_ROOT_CATEGORY');

        $id_lang = Context::getContext()->language->id;
        $cats = Category::getCategories((int) ($id_lang), true, false);

        $lang = $this->context->controller->getLanguages();

        $this->context->smarty->assign(array(
            'token' => Tools::getValue('token'),
            'module_name' => $this->name,
            'action' => ((Tools::getValue('action', false) == 'edit') ? 'edit' : 'addnew'),
            'languages' => $lang,
            'cat' => $cats,
            'selected_carrrier_id' => ''
        ));

        $this->html .= $this->display(__FILE__, 'views/templates/admin/addnew.tpl');
    }

    private function displayEdit() {



        $id_test = Configuration::get('PS_ROOT_CATEGORY');

        $id_lang = Context::getContext()->language->id;
        $cats = Category::getCategories((int) ($id_lang), true, false);

        $lang = $this->context->controller->getLanguages();

        $edit_id = Tools::getValue('edit_id');
        $SQL = 'SELECT * FROM ' . _DB_PREFIX_ . 'category_banner_mangement WHERE `id` = ' . (int) $edit_id . ';';
        $banner = Db::getInstance()->ExecuteS($SQL);

        $this->context->smarty->assign(array(
            'token' => Tools::getValue('token'),
            'module_name' => $this->name,
            'action' => ((Tools::getValue('action', false) == 'edit') ? 'edit' : 'addnew'),
            'languages' => $lang,
            'cat' => $cats,
            'cat_banner' => $banner[0],
            'edit_id' => $edit_id,
            'selected_carrrier_id' => '',
        ));

        $this->html .= $this->display(__FILE__, 'views/templates/admin/edit.tpl');
    }

    public function HookDisplayFooter($id) {
        $id_category = (int) Tools::getValue('id_category');

        $c_lang = $this->context->language->id;
        $SQL = 'SELECT * FROM ' . _DB_PREFIX_ . 'category_banner_mangement WHERE `active` = "1" AND `category` = ' . (int) Tools::getValue('id_category') . ' AND `lang` = ' . (int) $c_lang . ';';
        $banner = Db::getInstance()->ExecuteS($SQL);

        if (_PS_VERSION_ <= '1.6') {
            $parent_class = ".product_list ";
            $banner_div_tag = "li";
            $banner_div_class = "ajax_block_product";
            $ps_v = '1';
        } else {

            $parent_class = "#products";
            $banner_div_tag = "article";
            $banner_div_class = "product-miniature js-product-miniature";
            $ps_v = '0';
        }

        $category_banners_product_class_without_dot = str_replace('.', '', Configuration::get('category_banners_product_class'));

        $this->context->smarty->assign(array(
            'parent_id_class' => $parent_class,
            'ps_v' => $ps_v,
            'banner_div_tag' => $banner_div_tag,
            'banner_div_class' => $banner_div_class,
            'cat_banner' => $banner,
            'ps_v' => $this->ps_v,
            'img_url' => Tools::getHttpHost(true) . __PS_BASE_URI__,
            'category_banners_product_tag' => Configuration::get('category_banners_product_tag'),
            'category_banners_product_class' => Configuration::get('category_banners_product_class'),
            'category_banners_product_class_without_dot' => $category_banners_product_class_without_dot,
            'category_banners_id' => Configuration::get('category_banners_id'),
        ));


        //echo Configuration::get('category_banners_id');
//exit;		

        return $this->display(__FILE__, 'views/templates/front/footer.tpl');
    }

    private function displayfooter() {

        $id_category = (int) Tools::getValue('id_category');

        //if($id_category){

        $c_lang = $this->context->language->id;
        $SQL = 'SELECT * FROM ' . _DB_PREFIX_ . 'category_banner_mangement WHERE `active` = "1" AND `category` = ' . (int) Tools::getValue('id_category') . ' AND `lang` = ' . (int) $c_lang . ';';
        $banner = Db::getInstance()->ExecuteS($SQL);

        if (_PS_VERSION_ >= '1.6') {
            $parent_class = "products";
            $banner_div_tag = "li";
            $banner_div_class = "ajax_block_product";
        } else {
            $parent_class = "product_list ";
            $banner_div_tag = "article";
            $banner_div_class = "product-miniature js-product-miniature";
        }

        $this->context->smarty->assign(array(
            'module_name' => $this->name,
            'ps_v' => $this->ps_v,
            'display_name' => $this->displayName,
            'version' => $this->version,
            'token' => Tools::getValue('token'),
            'path_uri' => $this->getPathUri(),
            'page' => Tools::getValue('page', false),
            'cat_banner' => $banner,
            'img_url' => Tools::getHttpHost(true) . __PS_BASE_URI__,
            'category_banners_product_tag' => Configuration::get('category_banners_product_tag'),
            'category_banners_product_class' => Configuration::get('category_banners_product_class'),
            'category_banners_id' => Configuration::get('category_banners_id'),
        ));

        $this->html .= $this->display(__FILE__, 'views/templates/admin/footer.tpl');
        //}
    }

    public function hookDisplayFooterBottom() {
        return $this->HookDisplayFooter();
    }

    public function hookDisplayBackOfficeHeader() {
        if (strcasecmp(Tools::getValue('controller'), 'AdminModules') != 0 || strcasecmp(Tools::getValue('configure'), $this->name) != 0
        ) {
            return;
        }

        $this->context->controller->addJquery();

        if (!$this->bootstrap) {
            $this->context->controller->addCSS($this->_path . 'views/css/bootstrap.min.css');
            $this->context->controller->addJquery();
            $this->context->controller->addJS($this->_path . 'views/js/bootstrap.min.js');
        }
    }

}