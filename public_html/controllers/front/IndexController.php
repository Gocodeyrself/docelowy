<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class IndexControllerCore extends FrontController
{
    /** @var string */
    public $php_self = 'index';

    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        
        if(isset($_GET["category_reset"]) && $_GET["category_reset"]=="true"){
            Category::regenerateEntireNtree();
        }
        
        if(isset($_GET["typeLayout"])){
            Tools::changeLayout($_GET["typeLayout"]);
        }

        $blog = new CMSCategoryCore(5);        
        $blogItems = CMS::getCMSPages(null, 5);
        $blogItemsData = [];
        foreach($blogItems as $item){
            $cmsItem = new Cms($item["id_cms"]);
            $imgQuery = 'SELECT * FROM `'._DB_PREFIX_.'cms_img` WHERE id_cms = '.$item["id_cms"];
            $img = Db::getInstance()->executeS($imgQuery);            
            if (!empty($img)) {
                $cmsItem->image = $img[0]["img_name"];
            }else{
                $cmsItem->image = 'default.jpg';
            }
            array_push($blogItemsData, $cmsItem);
        }
        $this->context->smarty->assign('blog', $blog);
        $this->context->smarty->assign('blogItems', $blogItemsData);
        
        
        parent::initContent();
        $this->context->smarty->assign([
            'HOOK_HOME' => Hook::exec('displayHome'),
        ]);
        $this->setTemplate('index');
    }
}
