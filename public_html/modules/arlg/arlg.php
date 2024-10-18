<?php
/**
* 2023 Areama
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@areama.net so we can send you a copy immediately.
*
*  @author Areama <contact@areama.net>
*  @copyright  2023 Areama
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of Areama
*/
include_once dirname(__FILE__).'/classes/ArLgConfigForm.php';
include_once dirname(__FILE__).'/classes/ArLgGeneralConfigForm.php';
include_once dirname(__FILE__).'/classes/ArLgSliderConfigForm.php';
include_once dirname(__FILE__).'/classes/ArLgSliderMobileConfigForm.php';
include_once dirname(__FILE__).'/classes/ArLgMagnifyConfigForm.php';

class Arlg extends Module
{
    const REMIND_TO_RATE = 259200; // 3 days

    protected $configModel;
    protected $generalConfig;
    protected $sliderConfig;
    protected $sliderMobileConfig;
    protected $magnifyConfig;


    protected $html;
    protected $addonsId = 27862;

    protected $isMobile;

    public function __construct()
    {
        $this->name = 'arlg';
        $this->tab = 'front_office_features';
        $this->version = '1.4.2';

        $this->author = 'Areama';
        $this->need_instance = 0;
        $this->bootstrap = true;
        if ($this->is17() || $this->is8x()) {
            $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        }
        $this->module_key = '40e1eb90131cea057ffa2fdbcc00d150';
        parent::__construct();

        $this->displayName = $this->l('Amazing gallery');
        $this->description = $this->l('Displays amazing gallery with many features on product page');
        $this->confirmUninstall = $this->l('Are you sure you want to delete all data?');

        $this->configModel = new ArLgConfigForm($this, 'ar_lg_');
        $this->generalConfig = new ArLgGeneralConfigForm($this, 'arlg_');
        $this->sliderConfig = new ArLgSliderConfigForm($this, 'arlgs_');
        $this->sliderMobileConfig = new ArLgSliderMobileConfigForm($this, 'arlgsm_');
        $this->magnifyConfig = new ArLgMagnifyConfigForm($this, 'arlgm_');
        $this->configModel->loadFromConfig();
    }

    public function getAddonsId()
    {
        return $this->addonsId;
    }

    public function uninstall()
    {
        Configuration::deleteByName('AR_LG_INSTALL_TS');
        if (!parent::uninstall() || !$this->clearConfig() || !$this->uninstallTab()) {
            return false;
        }
        return true;
    }

    public function installTab()
    {
        // Prepare tab
        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = 'AdminArlg';
        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = $this->l('AdminArlg');
        }
        $tab->id_parent = -1;
        $tab->module = $this->name;
        return $tab->add();
    }

    public function uninstallTab()
    {
        $id_tab = (int)Tab::getIdFromClassName('AdminArlg');
        if ($id_tab) {
            $tab = new Tab($id_tab);
            return $tab->delete();
        } else {
            return false;
        }
    }

    public function install()
    {
        Configuration::updateValue('AR_LG_INSTALL_TS', time());
        if (!parent::install()
                || !$this->installHook()
                || !$this->installDefaults()
                || !$this->installTab()) {
            return (false);
        }
        return (true);
    }

    protected function installDefaults()
    {
        foreach ($this->getForms() as $model) {
            $model->loadDefaults();
            $model->saveToConfig(false);
        }
        return true;
    }

    protected function clearConfig()
    {
        foreach ($this->getForms() as $model) {
            $model->clearConfig();
        }
        return true;
    }

    protected function installHook()
    {
        return $this->registerHook('displayHeader') && $this->registerHook('displayAfterProductThumbs') && $this->registerHook('displayFooterProduct');
    }

    protected function reminder()
    {
        if (!$installTS = Configuration::get('AR_LG_INSTALL_TS')) {
            $installTS = time();
            Configuration::updateValue('AR_LG_INSTALL_TS', $installTS);
        }
        $reminder = Configuration::get('AR_LG_REMINDER');
        if ($reminder == 0) {
            $reminder = $installTS + self::REMIND_TO_RATE;
        }
        if (!in_array($reminder, array('-1', '-2'))) {
            if (time() > $reminder) {
                $this->smarty->assign(array(
                    'path' => $this->getPath(),
                    'ajaxUrl' => $this->getAjaxUrl()
                ));
                $this->html .= $this->display(__FILE__, '_rate-modal.tpl');
            }
        }
    }

    public function getContent()
    {
        if ((bool)Tools::getValue('empty_smarty_cache')) {
            Tools::clearSmartyCache();
            Tools::clearXMLCache();
            Media::clearCache();
            Tools::generateIndex();
        }
        $this->context->controller->addCss($this->_path.'views/css/styles.css');
        if ($this->isSubmit()) {
            if ($this->postValidate()) {
                $this->postProcess();
            }
        }
        $this->reminder();
        $this->html .= $this->renderForm();
        return $this->html;
    }

    public function isSubmit()
    {
        foreach ($this->getAllowedSubmits() as $submit) {
            if (Tools::isSubmit($submit)) {
                return true;
            }
        }
    }

    public function getAllowedSubmits()
    {
        $submits = array();
        foreach ($this->getForms() as $model) {
            $submits[] = get_class($model);
        }
        return $submits;
    }

    public function postProcess()
    {
        foreach ($this->getForms() as $model) {
            if (Tools::isSubmit(get_class($model))) {
                $model->populate();
                if ($model->saveToConfig()) {
                    $this->html .= $this->displayConfirmation($this->l('Settings updated'));
                } else {
                    $this->postValidate();
                }
            }
        }
        $this->_clearCache('head.tpl');
    }

    public function postValidate()
    {
        foreach ($this->getForms() as $model) {
            if (Tools::isSubmit(get_class($model))) {
                $model->loadFromConfig();
                $model->populate();
                if (!$model->validate()) {
                    foreach ($model->getErrors() as $errors) {
                        foreach ($errors as $error) {
                            $this->html .= $this->displayError($error);
                        }
                    }
                    return false;
                }
                return true;
            }
        }
    }

    public function render($file, $params = array())
    {
        $this->smarty->assign($params);
        return $this->display(__FILE__, $file);
    }

    public function renderForm()
    {
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ?: 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'btnSubmit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='
            .$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
            'path' => $this->getPath(),
        );
        $helper->base_folder =  dirname(__FILE__);
        $helper->base_tpl = '/views/templates/admin/arlg/helpers/form/form.tpl';

        $this->smarty->assign(array(
            'form' => $helper,
            'formParams' => array($this->getForm($this->configModel)),
            'sliderFormParams' => array($this->getForm($this->sliderConfig)),
            'sliderMobileFormParams' => array($this->getForm($this->sliderMobileConfig)),
            'generalFormParams' => array($this->getForm($this->generalConfig)),
            'magnifyFormParams' => array($this->getForm($this->magnifyConfig)),
            'link' => $this->context->link,
            'path' => $this->getPath(),
            'active_tab' => $this->getActiveTab(),
            'name' => $this->displayName,
            'version' => $this->version,
            'ajaxUrl' => $this->getAjaxUrl(),
            'is17' => $this->is17(),
            'is8x' => $this->is8x()
        ));
        return $this->display(__FILE__, 'configuration.tpl');
    }

    public function getActiveTab()
    {
        foreach ($this->getForms() as $model) {
            if (Tools::isSubmit(get_class($model))) {
                return get_class($model);
            }
        }
        return null;
    }

    public function getAjaxUrl()
    {
        return $this->context->link->getAdminLink('AdminArlg');
    }

    public function getConfigFieldsValues()
    {
        $values = array();
        foreach ($this->getForms() as $model) {
            $model->loadFromConfig();
            $model->populate();
            foreach ($model->getAttributes() as $attr => $value) {
                $values[$model->getConfigAttribueName($attr)] = $value;
            }
        }
        return $values;
    }

    public function getForms()
    {
        return array(
            $this->configModel,
            $this->generalConfig,
            $this->sliderConfig,
            $this->sliderMobileConfig,
            $this->magnifyConfig
        );
    }

    public function getConfigModel()
    {
        return $this->configModel;
    }

    public function getFormConfigs()
    {
        $configs = array();
        foreach ($this->getForms() as $form) {
            $configs[] = $this->getForm($form);
        }
        return $configs;
    }

    public function getForm($model)
    {
        $model->populate();
        $model->validate(false);
        $config = $model->getFormHelperConfig();
        return array(
            'form' => array(
                'name' => get_class($model),
                'legend' => array(
                    'title' => $model->getFormTitle(),
                    'icon' => $model->getFormIcon()
                ),
                'input' => $config,
                'submit' => array(
                    'name' => get_class($model),
                    'class' => $this->is15() ? 'button' : null,
                    'title' => $this->l('Save'),
                )
            )
        );
    }

    public function hookDisplayHeader($params)
    {
        if (!$this->generalConfig->isLoaded()) {
            $this->generalConfig->loadFromConfig();
        }
        if (!$this->magnifyConfig->isLoaded()) {
            $this->magnifyConfig->loadFromConfig();
        }

        if ($this->isMobile()) {
            $this->magnifyConfig->enable = false;
        }

        if ($this->generalConfig->sandbox) {
            $ips = explode("\r\n", $this->generalConfig->allowed_ips);
            if (!in_array($this->generalConfig->getCurrentIP(), $ips)) {
                return null;
            }
        }
        $controllerId = (isset($this->context->controller->php_self) && $this->context->controller->php_self) ?
            $this->context->controller->php_self : null;
        if ($this->is15() && $this->context->controller instanceof ProductController) {
            $controllerId = 'product';
        }
        if ($controllerId != 'product' || Tools::getValue('content_only') == 1) {
            return null;
        }
        $this->context->controller->addCss($this->_path.'views/css/lightgallery.min.css');
        if ($this->configModel->mousewheel) {
            $this->context->controller->addJs($this->_path.'views/js/jquery.mousewheel.min.js');
        }
        $this->context->controller->addJs($this->_path.'views/js/lightgallery.min.js');
        if ($this->configModel->thumbnails) {
            $this->context->controller->addJs($this->_path.'views/js/lg-thumbnail.min.js');
        }
        if ($this->configModel->fullscreen) {
            $this->context->controller->addJs($this->_path.'views/js/lg-fullscreen.min.js');
        }
        if ($this->configModel->zoom) {
            $this->context->controller->addJs($this->_path.'views/js/lg-zoom.min.js');
        }
        if ($this->configModel->autoplay) {
            $this->context->controller->addJs($this->_path.'views/js/lg-autoplay.min.js');
        }
        if ($this->configModel->hash) {
            $this->context->controller->addJs($this->_path.'views/js/lg-hash.min.js');
        }

        if ($this->isMobile()) {
            if (!$this->sliderMobileConfig->isLoaded()) {
                $this->sliderMobileConfig->loadFromConfig();
            }
        } else {
            if (!$this->sliderConfig->isLoaded()) {
                $this->sliderConfig->loadFromConfig();
            }
        }

        if (($this->isMobile() && $this->sliderMobileConfig->enabled) || (!$this->isMobile() && $this->sliderConfig->enabled)) {
            $this->context->controller->addJs($this->_path.'views/js/lightslider.min.js');
            $this->context->controller->addCss($this->_path.'views/css/lightslider.min.css');
        }

        if ($this->magnifyConfig->enable) {
            if ($this->magnifyConfig->type == 'out' || $this->magnifyConfig->type == 'in') {
                $this->context->controller->addJs($this->_path.'views/js/zoomsl-3.0.js');
            } else {
                $this->context->controller->addJs($this->_path.'views/js/jquery.magnify.js');
                $this->context->controller->addJs($this->_path.'views/js/jquery.magnify-mobile.js');
                $this->context->controller->addCss($this->_path.'views/css/magnify.css');
            }
        }
        $thumbSize = $this->isMobile() ? $this->configModel->m_thumb_size : $this->configModel->thumb_size;

        $sliderImgSize = $this->isMobile() ? $this->sliderMobileConfig->img_size : $this->sliderConfig->img_size;
        $sliderThumbSize = $this->isMobile() ? $this->sliderMobileConfig->thumb_size : $this->sliderConfig->thumb_size;

        $row = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'image_type`
            WHERE `name` = "'.pSQL($thumbSize).'"');

        $row2 = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'image_type`
            WHERE `name` = "'.pSQL($sliderImgSize).'"');

        $row3 = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'image_type`
            WHERE `name` = "'.pSQL($sliderThumbSize).'"');

        $this->configModel->thumbHeight = $row['height'];
        $this->configModel->thumbWidht = $row['width'];
        $this->smarty->assign(array(
            'config' => $this->configModel,
            'magnify' => $this->magnifyConfig,
            'generalConfig' => $this->generalConfig,
            'is17' => $this->is17(),
            'is8x' => $this->is8x(),
            'isMobile' => $this->isMobile(),
            'path' => $this->getPathUri(),
            'sliderConfig' => $this->isMobile() ? $this->sliderMobileConfig : $this->sliderConfig,
            'sliderImgWidth' => $row2['width'],
            'sliderImgHeight' => $row2['height'],
            'sliderThumbWidth' => $row3['width'],
            'sliderThumbHeight' => $row3['height'],
        ));
        return $this->display(__FILE__, 'head.tpl');
    }

    public function isMobile()
    {
        if ($this->isMobile === null) {
            $this->isMobile = Context::getContext()->getMobileDetect()->isMobile() || Context::getContext()->getMobileDetect()->isTablet();
        }
        return $this->isMobile;
    }

    public function hookDisplayFooterProduct($params)
    {
        if ($this->is17() || $this->is8x()) {
            return $this->hookDisplayAfterProductThumbs($params);
        }
        if (Tools::getValue('action') == 'quickview' || Tools::getValue('content_only')) {
            return null;
        }
        if (!$this->is16() || !isset($params['product']) || empty($params['product'])) {
            return null;
        }
        $product = $params['product'];
        $id_lang = Context::getContext()->language->id;
        $link = Context::getContext()->link;
        $images = $product->getImages($id_lang);

        if (!$this->generalConfig->isLoaded()) {
            $this->generalConfig->loadFromConfig();
        }
        if ($this->generalConfig->sandbox) {
            $ips = explode("\r\n", $this->generalConfig->allowed_ips);
            if (!in_array($this->generalConfig->getCurrentIP(), $ips)) {
                return null;
            }
        }
        if ($this->isMobile()) {
            if (!$this->sliderMobileConfig->isLoaded()) {
                $this->sliderMobileConfig->loadFromConfig();
            }
        } else {
            if (!$this->sliderConfig->isLoaded()) {
                $this->sliderConfig->loadFromConfig();
            }
        }
        if (!$this->configModel->isLoaded()) {
            $this->configModel->loadFromConfig();
        }
        $imgSize = $this->configModel->img_size == '_orig' ? '' : $this->configModel->img_size;
        if ($this->isMobile()) {
            $imgSize = $this->configModel->m_img_size == '_orig' ? '' : $this->configModel->m_img_size;
        }
        $coverIndex = 0;
        foreach ($images as $k => $v) {
            $images[$k]['type'] = 'image';
            if ($this->isMobile()) {
                $images[$k]['thumb'] = $link->getImageLink($product->link_rewrite, $v['id_image'], $this->sliderMobileConfig->thumb_size == '_orig' ? '' : $this->sliderMobileConfig->thumb_size);
                $images[$k]['slider_img'] = $link->getImageLink($product->link_rewrite, $v['id_image'], $this->sliderMobileConfig->img_size == '_orig' ? '' : $this->sliderMobileConfig->img_size);
                $images[$k]['gallery_img'] = $link->getImageLink($product->link_rewrite, $v['id_image'], $imgSize);
            } else {
                $images[$k]['thumb'] = $link->getImageLink($product->link_rewrite, $v['id_image'], $this->sliderConfig->thumb_size == '_orig' ? '' : $this->sliderConfig->thumb_size);
                $images[$k]['slider_img'] = $link->getImageLink($product->link_rewrite, $v['id_image'], $this->sliderConfig->img_size == '_orig' ? '' : $this->sliderConfig->img_size);
                $images[$k]['gallery_img'] = $link->getImageLink($product->link_rewrite, $v['id_image'], $imgSize);
            }
            if ($v['cover']) {
                $coverIndex = $k;
            }
        }
        if (($this->isMobile() && $this->sliderMobileConfig->enabled) || (!$this->isMobile() && $this->sliderConfig->enabled)) {
            return $this->render('gallery_16.tpl', array(
                'sliderConfig' =>  $this->isMobile() ? $this->sliderMobileConfig : $this->sliderConfig,
                'galleryConfig' => $this->configModel,
                'isMobile' => $this->isMobile(),
                'images' => $images,
                'videos' => $this->getVideos($product->id),
                'product' => $product,
                'coverIndex' => $coverIndex
            ));
        }
        return null;
    }

    public function hookDisplayAfterProductThumbs($params)
    {
        if (Tools::getValue('action') == 'quickview' || Tools::getValue('content_only')) {
            return null;
        }
        if (!$this->is17() && !$this->is8x()) {
            return null;
        }
        if (!$this->generalConfig->isLoaded()) {
            $this->generalConfig->loadFromConfig();
        }
        if ($this->generalConfig->sandbox) {
            $ips = explode("\r\n", $this->generalConfig->allowed_ips);
            if (!in_array($this->generalConfig->getCurrentIP(), $ips)) {
                return null;
            }
        }
        if ($this->isMobile()) {
            if (!$this->sliderMobileConfig->isLoaded()) {
                $this->sliderMobileConfig->loadFromConfig();
            }
        } else {
            if (!$this->sliderConfig->isLoaded()) {
                $this->sliderConfig->loadFromConfig();
            }
        }
        if (!$this->configModel->isLoaded()) {
            $this->configModel->loadFromConfig();
        }
        $controller = Context::getContext()->controller;
        if ($controller instanceof ProductControllerCore || $controller instanceof ProductController) {
            $product = $controller->getProduct();

            $link = Context::getContext()->link;
            $ir = new PrestaShop\PrestaShop\Adapter\Image\ImageRetriever($link);
            $allImages = $this->isMobile() ? $this->sliderMobileConfig->all_images : $this->sliderConfig->all_images;
            $pr = $controller->getTemplateVarProduct();
            $ipa = $pr['id_product_attribute'];
            $images = $ir->getProductImages(array(
                'id_product' => $product->id,
                'id_product_attribute' => !$allImages ? $ipa : 0
            ), Context::getContext()->language);
            $coverIndex = 0;
            foreach ($images as $k => $img) {
                if ($img['cover']) {
                    $coverIndex = $k;
                }
            }
            $videos = $this->getVideos($product->id);
            if (($this->isMobile() && $this->sliderMobileConfig->enabled) || (!$this->isMobile() && $this->sliderConfig->enabled)) {
                return $this->render('gallery.tpl', array(
                    'sliderConfig' =>  $this->isMobile() ? $this->sliderMobileConfig : $this->sliderConfig,
                    'galleryConfig' => $this->configModel,
                    'isMobile' => $this->isMobile(),
                    'images' => $images,
                    'coverIndex' => $coverIndex,
                    'videos' => $videos,
                    'product' => $product
                ));
            }
        }
        return null;
    }

    public function getVideos($id_product)
    {
        $videos = array();
        if (Module::isInstalled('stprovideos') && Module::isEnabled('stprovideos')) {
            if (class_exists('StProVideosClass')) {
                if ($rows = StProVideosClass::getProVideos($id_product)) {
                    foreach ($rows as $row) {
                        if ($this->isYoutubeVideo($row['url'])) {
                            $videos[] = array(
                                'type' => 'video',
                                'src' => $row['url'],
                                'embed_url' => $this->getYoutubeEmbed($row['url']),
                                'thumb' => '//img.youtube.com/vi/' . $this->getYoutubeVideoId($row['url']) . '/default.jpg',
                                'poster' => '//img.youtube.com/vi/' . $this->getYoutubeVideoId($row['url']) . '/maxresdefault.jpg',
                            );
                        }
                    }
                }
            }
        }

        return $videos;
    }

    public function isYoutubeVideo($url)
    {
        return preg_match('/youtube.com/is', $url);
    }

    public function getYoutubeEmbed($url)
    {
        $url = str_replace('/watch?v=', '/embed/', $url);
        return str_replace('&', '?', $url);
    }

    public function getYoutubeVideoId($url)
    {
        if (preg_match('{(?:youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=)([^#\&\?]*)}is', $url, $m)) {
            return $m[1];
        }
        return null;
    }

    public function is15()
    {
        if ((version_compare(_PS_VERSION_, '1.5.0', '>=') === true)
                && (version_compare(_PS_VERSION_, '1.6.0', '<') === true)) {
            return true;
        }
        return false;
    }

    public function is16()
    {
        if ((version_compare(_PS_VERSION_, '1.6.0', '>=') === true)
                && (version_compare(_PS_VERSION_, '1.7.0', '<') === true)) {
            return true;
        }
        return false;
    }

    public function is17()
    {
        if ((version_compare(_PS_VERSION_, '1.7.0', '>=') === true)
                && (version_compare(_PS_VERSION_, '1.8.0', '<') === true)) {
            return true;
        }
        return false;
    }

    public function is8x()
    {
        if ((version_compare(_PS_VERSION_, '8.0.0', '>=') === true)
                && (version_compare(_PS_VERSION_, '9.0.0', '<') === true)) {
            return true;
        }
        return false;
    }

    public function getPath()
    {
        return $this->_path;
    }
}
