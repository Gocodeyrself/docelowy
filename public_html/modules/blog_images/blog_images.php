<?php
/**
* 2007-2023 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2023 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class Blog_images extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'blog_images';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Exis';
        $this->need_instance = 0;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Blog images');
        $this->description = $this->l('Images for blog secition');

        $this->confirmUninstall = $this->l('');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        Configuration::updateValue('BLOG_IMAGES_LIVE_MODE', false);

        include(dirname(__FILE__).'/sql/install.php');

        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('displayBackOfficeHeader');
    }

    public function uninstall()
    {
        Configuration::deleteByName('BLOG_IMAGES_LIVE_MODE');

        include(dirname(__FILE__).'/sql/uninstall.php');

        return parent::uninstall();
    }

    /**
     * Load the configuration form
     */

    public function getContent()
    {
        $this->postProcess();

        $this->context->smarty->assign('module_dir', $this->_path);        
        $output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        return $output.$this->renderForm();
    }

    protected function renderForm()
    {
        $cmsPages = CMS::listCms($this->context->language->id, 5, true);
        $output = "<div class='row'>";
    
        foreach ($cmsPages as $cms) {
            $imgQuery = 'SELECT * FROM `'._DB_PREFIX_.'cms_img` WHERE id_cms = '.$cms["id_cms"];
            $img = Db::getInstance()->executeS($imgQuery);
    
            $imgHtml = "";
            $btnText = "Dodaj zdjęcie";
    
            if (!empty($img)) {
                $imgHtml = '<img style="max-width: 300px; max-height: 200px;" src="/img/cms/blog/' . $img[0]["img_name"] . '"/><br/>';
                $btnText = "Edytuj zdjęcie";
            }
    
            $output .= '<div class="panel col-md-4 col-xs-12">';
            $output .= '<h3><i class="icon icon-credit-card"></i> ' . $cms['meta_title'] . '</h3>';
            $output .= '<form action="' . $_SERVER['REQUEST_URI'] . '" method="post" enctype="multipart/form-data">';
            $output .= $imgHtml;
            $output .= '<input type="file" name="image" accept="image/jpeg, image/png"/><br/>';
            $output .= '<input type="hidden" name="cms_id" value="' . $cms['id_cms'] . '" />';
            $output .= '<input type="submit" name="submit_image" value="'.$btnText.'" />';
            $output .= '</form></div>';
        }
    
        return $output.'</div>';
    }
    

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Settings'),
                'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Live mode'),
                        'name' => 'BLOG_IMAGES_LIVE_MODE',
                        'is_bool' => true,
                        'desc' => $this->l('Use this module in live mode'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'desc' => $this->l('Enter a valid email address'),
                        'name' => 'BLOG_IMAGES_ACCOUNT_EMAIL',
                        'label' => $this->l('Email'),
                    ),
                    array(
                        'type' => 'password',
                        'name' => 'BLOG_IMAGES_ACCOUNT_PASSWORD',
                        'label' => $this->l('Password'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'BLOG_IMAGES_LIVE_MODE' => Configuration::get('BLOG_IMAGES_LIVE_MODE', true),
            'BLOG_IMAGES_ACCOUNT_EMAIL' => Configuration::get('BLOG_IMAGES_ACCOUNT_EMAIL', 'contact@prestashop.com'),
            'BLOG_IMAGES_ACCOUNT_PASSWORD' => Configuration::get('BLOG_IMAGES_ACCOUNT_PASSWORD', null),
        );
    }

    /**
     * Save form data.
     */
    public function postProcess()
    {
        if (Tools::isSubmit('submit_image')) {
            $cmsId = (int) Tools::getValue('cms_id');
            $image = $_FILES['image'];
            $imgName =  $cmsId . '-'.$image["name"];
            $imagePath = _PS_IMG_DIR_ . 'cms/blog/'.$imgName;

            if (move_uploaded_file($image['tmp_name'], $imagePath)) {
                $query = 'select * from `'._DB_PREFIX_.'cms_img` where id_cms = '.$cmsId;
                $img = Db::getInstance()->executeS($query);
                if(empty($img)){
                    $query = 'INSERT INTO `'._DB_PREFIX_.'cms_img` (`id_cms`, img_name) VALUES ('.$cmsId.', "'.$imgName.'")';
                    Db::getInstance()->execute($query);
                }
            } else {

            }
        } 
    }
    

    /**
    * Add the CSS & JavaScript files you want to be loaded in the BO.
    */
    public function hookDisplayBackOfficeHeader()
    {
        if (Tools::getValue('configure') == $this->name) {
            $this->context->controller->addJS($this->_path.'views/js/back.js');
            $this->context->controller->addCSS($this->_path.'views/css/back.css');
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path.'/views/js/front.js');
        $this->context->controller->addCSS($this->_path.'/views/css/front.css');
    }
}
