<?php
/*
* 2007-2015 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
use PrestaShop\PrestaShop\Adapter\Category\CategoryProductSearchProvider;
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
use PrestaShop\PrestaShop\Core\Product\Search\SortOrder;

class Ps_FeaturedProducts extends Module implements WidgetInterface
{
    private $templateFile;

    public function __construct()
    {
        $this->name = 'ps_featuredproducts';
        $this->author = 'PrestaShop';
        $this->version = '2.0.0';
        $this->need_instance = 0;

        $this->ps_versions_compliancy = [
            'min' => '1.7.1.0',
            'max' => _PS_VERSION_,
        ];

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('Polecane z trzema kategoriami', array(), 'Modules.Featuredproducts.Admin');
        $this->description = $this->trans('Displays featured products in the central column of your homepage.', array(), 'Modules.Featuredproducts.Admin');

        $this->templateFile = 'module:ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl';
    }

    public function install()
    {
        $this->_clearCache('*');

        Configuration::updateValue('TAB1_FEATURED_NAME', "Featured products");
        Configuration::updateValue('TAB2_FEATURED_NAME', "Featured products");
        Configuration::updateValue('TAB3_FEATURED_NAME', "Featured products");
        Configuration::updateValue('HOME_FEATURED_NBR', 8);
        Configuration::updateValue('HOME_FEATURED_NBR2', 8);
        Configuration::updateValue('HOME_FEATURED_NBR3', 8);
        Configuration::updateValue('HOME_FEATURED_CAT', (int) Context::getContext()->shop->getCategory());
        Configuration::updateValue('HOME_FEATURED_CAT2', (int) Context::getContext()->shop->getCategory());
        Configuration::updateValue('HOME_FEATURED_CAT3', (int) Context::getContext()->shop->getCategory());
        Configuration::updateValue('HOME_FEATURED_RANDOMIZE', false);
        Configuration::updateValue('HOME_FEATURED_RANDOMIZE2', false);
        Configuration::updateValue('HOME_FEATURED_RANDOMIZE3', false);

        return parent::install()
            && $this->registerHook('addproduct')
            && $this->registerHook('updateproduct')
            && $this->registerHook('deleteproduct')
            && $this->registerHook('categoryUpdate')
            && $this->registerHook('displayHome')
            && $this->registerHook('displayOrderConfirmation2')
            && $this->registerHook('displayCrossSellingShoppingCart')
            && $this->registerHook('actionAdminGroupsControllerSaveAfter')
        ;
    }

    public function uninstall()
    {
        $this->_clearCache('*');

        return parent::uninstall();
    }

    public function hookAddProduct($params)
    {
        $this->_clearCache('*');
    }

    public function hookUpdateProduct($params)
    {
        $this->_clearCache('*');
    }

    public function hookDeleteProduct($params)
    {
        $this->_clearCache('*');
    }

    public function hookCategoryUpdate($params)
    {
        $this->_clearCache('*');
    }

    public function hookActionAdminGroupsControllerSaveAfter($params)
    {
        $this->_clearCache('*');
    }

    public function _clearCache($template, $cache_id = null, $compile_id = null)
    {
        parent::_clearCache($this->templateFile);
    }

    public function getContent()
    {
        $output = '';
        $errors = array();

        if (Tools::isSubmit('submitHomeFeatured')) {
            $tab1 = Tools::getValue('TAB1_FEATURED_NAME');
            $tab2 = Tools::getValue('TAB2_FEATURED_NAME');
            $tab3 = Tools::getValue('TAB3_FEATURED_NAME');
            $nbr = Tools::getValue('HOME_FEATURED_NBR');
            $nbr2 = Tools::getValue('HOME_FEATURED_NBR2');
            $nbr3 = Tools::getValue('HOME_FEATURED_NBR3');
            if (!Validate::isInt($nbr) || $nbr <= 0) {
                $errors[] = $this->trans('TAB 1 --- The number of products is invalid. Please enter a positive number.', array(), 'Modules.Featuredproducts.Admin');
            }

            if (!Validate::isInt($nbr2) || $nbr2 <= 0) {
                $errors[] = $this->trans('TAB 2 --- The number of products is invalid. Please enter a positive number.', array(), 'Modules.Featuredproducts.Admin');
            }

            if (!Validate::isInt($nbr3) || $nbr3 <= 0) {
                $errors[] = $this->trans('TAB 3 --- The number of products is invalid. Please enter a positive number.', array(), 'Modules.Featuredproducts.Admin');
            }

            $cat = Tools::getValue('HOME_FEATURED_CAT');
            $cat2 = Tools::getValue('HOME_FEATURED_CAT2');
            $cat3 = Tools::getValue('HOME_FEATURED_CAT3');
            if (!Validate::isInt($cat) || $cat <= 0) {
                $errors[] = $this->trans('TAB 1 --- The category ID is invalid. Please choose an existing category ID.', array(), 'Modules.Featuredproducts.Admin');
            }
            if (!Validate::isInt($cat2) || $cat2 <= 0) {
                $errors[] = $this->trans('TAB 2 --- The category ID is invalid. Please choose an existing category ID.', array(), 'Modules.Featuredproducts.Admin');
            }
            if (!Validate::isInt($cat3) || $cat3 <= 0) {
                $errors[] = $this->trans('TAB 3 --- The category ID is invalid. Please choose an existing category ID.', array(), 'Modules.Featuredproducts.Admin');
            }

            $rand = Tools::getValue('HOME_FEATURED_RANDOMIZE');
            $rand2 = Tools::getValue('HOME_FEATURED_RANDOMIZE2');
            $rand3 = Tools::getValue('HOME_FEATURED_RANDOMIZE3');
            if (!Validate::isBool($rand)) {
                $errors[] = $this->trans('TAB 1 --- Invalid value for the "randomize" flag.', array(), 'Modules.Featuredproducts.Admin');
            }
            if (!Validate::isBool($rand2)) {
                $errors[] = $this->trans('TAB 2 --- Invalid value for the "randomize" flag.', array(), 'Modules.Featuredproducts.Admin');
            }
            if (!Validate::isBool($rand3)) {
                $errors[] = $this->trans('TAB 3 --- Invalid value for the "randomize" flag.', array(), 'Modules.Featuredproducts.Admin');
            }
            if (isset($errors) && count($errors)) {
                $output = $this->displayError(implode('<br />', $errors));
            } else {
                Configuration::updateValue('TAB1_FEATURED_NAME', (string) $tab1);
                Configuration::updateValue('TAB2_FEATURED_NAME', (string) $tab2);
                Configuration::updateValue('TAB3_FEATURED_NAME', (string) $tab3);
                Configuration::updateValue('HOME_FEATURED_NBR', (int) $nbr);
                Configuration::updateValue('HOME_FEATURED_NBR2', (int) $nbr2);
                Configuration::updateValue('HOME_FEATURED_NBR3', (int) $nbr3);
                Configuration::updateValue('HOME_FEATURED_CAT', (int) $cat);
                Configuration::updateValue('HOME_FEATURED_CAT2', (int) $cat2);
                Configuration::updateValue('HOME_FEATURED_CAT3', (int) $cat3);
                Configuration::updateValue('HOME_FEATURED_RANDOMIZE', (bool) $rand);
                Configuration::updateValue('HOME_FEATURED_RANDOMIZE2', (bool) $rand2);
                Configuration::updateValue('HOME_FEATURED_RANDOMIZE3', (bool) $rand3);

                $this->_clearCache('*');

                $output = $this->displayConfirmation($this->trans('The settings have been updated.', array(), 'Admin.Notifications.Success'));
            }
        }

        return $output.$this->renderForm();
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->trans('Settings', array(), 'Admin.Global'),
                    'icon' => 'icon-cogs',
                ),

                'description' => $this->trans('To add products to your homepage, simply add them to the corresponding product category (default: "Home").', array(), 'Modules.Featuredproducts.Admin'),
                'input' => array(
                     array(
                        'type' => 'text',
                        'label' => $this->trans('1. Tab name', array(), 'Modules.Featuredproducts.Admin'),
                        'name' => 'TAB1_FEATURED_NAME',
                        'class' => '',
                        'desc' => $this->trans('Set the name of tab that you would like to display on homepage (default: Featured products).', array(), 'Modules.Featuredproducts.Admin'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->trans('Number of products to be displayed', array(), 'Modules.Featuredproducts.Admin'),
                        'name' => 'HOME_FEATURED_NBR',
                        'class' => 'fixed-width-md',
                        'desc' => $this->trans('Set the number of products that you would like to display on homepage (default: 8).', array(), 'Modules.Featuredproducts.Admin'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->trans('Category from which to pick products to be displayed', array(), 'Modules.Featuredproducts.Admin'),
                        'name' => 'HOME_FEATURED_CAT',
                        'class' => 'fixed-width-md',
                        'desc' => $this->trans('Choose the category ID of the products that you would like to display on homepage (default: 2 for "Home").', array(), 'Modules.Featuredproducts.Admin'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->trans('Randomly display featured products', array(), 'Modules.Featuredproducts.Admin'),
                        'name' => 'HOME_FEATURED_RANDOMIZE',
                        'class' => 'fixed-width-md',
                        'desc' => $this->trans('Enable if you wish the products to be displayed randomly (default: no).', array(), 'Modules.Featuredproducts.Admin'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->trans('Yes', array(), 'Admin.Global'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->trans('No', array(), 'Admin.Global'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->trans('2. Tab name', array(), 'Modules.Featuredproducts.Admin'),
                        'name' => 'TAB2_FEATURED_NAME',
                        'class' => '',
                        'desc' => $this->trans('Set the name of tab that you would like to display on homepage (default: Featured products).', array(), 'Modules.Featuredproducts.Admin'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->trans('Number of products to be displayed', array(), 'Modules.Featuredproducts.Admin'),
                        'name' => 'HOME_FEATURED_NBR2',
                        'class' => 'fixed-width-md',
                        'desc' => $this->trans('Set the number of products that you would like to display on homepage (default: 8).', array(), 'Modules.Featuredproducts.Admin'),
                    ),array(
                        'type' => 'text',
                        'label' => $this->trans('Category from which to pick products to be displayed', array(), 'Modules.Featuredproducts.Admin'),
                        'name' => 'HOME_FEATURED_CAT2',
                        'class' => 'fixed-width-md',
                        'desc' => $this->trans('Choose the category ID of the products that you would like to display on homepage (default: 2 for "Home").', array(), 'Modules.Featuredproducts.Admin'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->trans('Randomly display featured products', array(), 'Modules.Featuredproducts.Admin'),
                        'name' => 'HOME_FEATURED_RANDOMIZE2',
                        'class' => 'fixed-width-md',
                        'desc' => $this->trans('Enable if you wish the products to be displayed randomly (default: no).', array(), 'Modules.Featuredproducts.Admin'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->trans('Yes', array(), 'Admin.Global'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->trans('No', array(), 'Admin.Global'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->trans('3. Tab name', array(), 'Modules.Featuredproducts.Admin'),
                        'name' => 'TAB3_FEATURED_NAME',
                        'class' => '',
                        'desc' => $this->trans('Set the name of tab that you would like to display on homepage (default: Featured products).', array(), 'Modules.Featuredproducts.Admin'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->trans('Number of products to be displayed', array(), 'Modules.Featuredproducts.Admin'),
                        'name' => 'HOME_FEATURED_NBR3',
                        'class' => 'fixed-width-md',
                        'desc' => $this->trans('Set the number of products that you would like to display on homepage (default: 8).', array(), 'Modules.Featuredproducts.Admin'),
                    ),array(
                        'type' => 'text',
                        'label' => $this->trans('Category from which to pick products to be displayed', array(), 'Modules.Featuredproducts.Admin'),
                        'name' => 'HOME_FEATURED_CAT3',
                        'class' => 'fixed-width-md',
                        'desc' => $this->trans('Choose the category ID of the products that you would like to display on homepage (default: 2 for "Home").', array(), 'Modules.Featuredproducts.Admin'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->trans('Randomly display featured products', array(), 'Modules.Featuredproducts.Admin'),
                        'name' => 'HOME_FEATURED_RANDOMIZE3',
                        'class' => 'fixed-width-md',
                        'desc' => $this->trans('Enable if you wish the products to be displayed randomly (default: no).', array(), 'Modules.Featuredproducts.Admin'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->trans('Yes', array(), 'Admin.Global'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->trans('No', array(), 'Admin.Global'),
                            ),
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->trans('Save', array(), 'Admin.Actions'),
                ),
            ),
        );

        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->id = (int) Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitHomeFeatured';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        return array(
            'TAB1_FEATURED_NAME' => Tools::getValue('TAB1_FEATURED_NAME', (string) Configuration::get('TAB1_FEATURED_NAME')),
            'TAB2_FEATURED_NAME' => Tools::getValue('TAB2_FEATURED_NAME', (string) Configuration::get('TAB2_FEATURED_NAME')),
            'TAB3_FEATURED_NAME' => Tools::getValue('TAB3_FEATURED_NAME', (string) Configuration::get('TAB3_FEATURED_NAME')),
            'HOME_FEATURED_NBR' => Tools::getValue('HOME_FEATURED_NBR', (int) Configuration::get('HOME_FEATURED_NBR')),
            'HOME_FEATURED_NBR2' => Tools::getValue('HOME_FEATURED_NBR2', (int) Configuration::get('HOME_FEATURED_NBR2')),
            'HOME_FEATURED_NBR3' => Tools::getValue('HOME_FEATURED_NBR3', (int) Configuration::get('HOME_FEATURED_NBR3')),
            'HOME_FEATURED_CAT' => Tools::getValue('HOME_FEATURED_CAT', (int) Configuration::get('HOME_FEATURED_CAT')),
            'HOME_FEATURED_CAT2' => Tools::getValue('HOME_FEATURED_CAT2', (int) Configuration::get('HOME_FEATURED_CAT2')),
            'HOME_FEATURED_CAT3' => Tools::getValue('HOME_FEATURED_CAT3', (int) Configuration::get('HOME_FEATURED_CAT3')),
            'HOME_FEATURED_RANDOMIZE' => Tools::getValue('HOME_FEATURED_RANDOMIZE', (bool) Configuration::get('HOME_FEATURED_RANDOMIZE')),
            'HOME_FEATURED_RANDOMIZE2' => Tools::getValue('HOME_FEATURED_RANDOMIZE2', (bool) Configuration::get('HOME_FEATURED_RANDOMIZE2')),
            'HOME_FEATURED_RANDOMIZE3' => Tools::getValue('HOME_FEATURED_RANDOMIZE3', (bool) Configuration::get('HOME_FEATURED_RANDOMIZE3')),
        );
    }

    public function renderWidget($hookName = null, array $configuration = [])
    {
        if (!$this->isCached($this->templateFile, $this->getCacheId('ps_featuredproducts'))) {
            $variables = $this->getWidgetVariables($hookName, $configuration);

            if (empty($variables)) {
                return false;
            }

            $this->smarty->assign($variables);
        }

        return $this->fetch($this->templateFile, $this->getCacheId('ps_featuredproducts'));
    }

    public function getWidgetVariables($hookName = null, array $configuration = [])
    {

        $nProductsV = Configuration::get('HOME_FEATURED_NBR');
        $categoryV = new Category((int) Configuration::get('HOME_FEATURED_CAT'));
        $randomizeV = Configuration::get('HOME_FEATURED_RANDOMIZE');
        $products1 = $this->getProducts( $categoryV, $nProductsV, $randomizeV );

        $nProductsV = Configuration::get('HOME_FEATURED_NBR2');
        $categoryV = new Category((int) Configuration::get('HOME_FEATURED_CAT2'));
        $randomizeV = Configuration::get('HOME_FEATURED_RANDOMIZE2');
        $products2 = $this->getProducts( $categoryV, $nProductsV, $randomizeV );

        $nProductsV = Configuration::get('HOME_FEATURED_NBR3');
        $categoryV = new Category((int) Configuration::get('HOME_FEATURED_CAT3'));
        $randomizeV = Configuration::get('HOME_FEATURED_RANDOMIZE3');
        $products3 = $this->getProducts( $categoryV, $nProductsV, $randomizeV );

        $tab1 = Configuration::get('TAB1_FEATURED_NAME');
        $tab2 = Configuration::get('TAB2_FEATURED_NAME');
        $tab3 = Configuration::get('TAB3_FEATURED_NAME');

        return array(
            'products1' => $products1,
            'products2' => $products2,
            'products3' => $products3,
            'allProductsLink1' => Context::getContext()->link->getCategoryLink($this->getConfigFieldsValues()['HOME_FEATURED_CAT']),
            'allProductsLink2' => Context::getContext()->link->getCategoryLink($this->getConfigFieldsValues()['HOME_FEATURED_CAT2']),
            'allProductsLink3' => Context::getContext()->link->getCategoryLink($this->getConfigFieldsValues()['HOME_FEATURED_CAT3']),
            'tab1_name' => $tab1,
            'tab2_name' => $tab2,
            'tab3_name' => $tab3,
        );
    }

    protected function getProducts( $category, $nProducts, $randomize )
    {
        

        $searchProvider = new CategoryProductSearchProvider(
            $this->context->getTranslator(),
            $category
        );

        $context = new ProductSearchContext($this->context);

        $query = new ProductSearchQuery();

        
        if ($nProducts < 0) {
            $nProducts = 12;
        }

        $query
            ->setResultsPerPage($nProducts)
            ->setPage(1)
        ;

        if ($randomize) {
            $query->setSortOrder(SortOrder::random());
        } else {
            $query->setSortOrder(new SortOrder('product', 'position', 'asc'));
        }

        $result = $searchProvider->runQuery(
            $context,
            $query
        );

        $assembler = new ProductAssembler($this->context);

        $presenterFactory = new ProductPresenterFactory($this->context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $this->context->link
            ),
            $this->context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $this->context->getTranslator()
        );

        $products_for_template = [];

        foreach ($result->getProducts() as $rawProduct) {
            $products_for_template[] = $presenter->present(
                $presentationSettings,
                $assembler->assembleProduct($rawProduct),
                $this->context->language
            );
        }

        return $products_for_template;
    }
}
