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
class ContactControllerCore extends FrontController
{
    /** @var string */
    public $php_self = 'contact';
    /** @var bool */
    public $ssl = true;

    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();
        
        
        $id_lang = $this->context->language->id;
        $cms = new CMS(30, intval($id_lang));
        if (Validate::isLoadedObject($cms) && $cms->active){
          $this->context->smarty->assign('contactData', $cms->content);
        }

        $cms = new CMS(43, intval($id_lang));
        if (Validate::isLoadedObject($cms) && $cms->active){
          $this->context->smarty->assign('contactAddress', $cms->content);
        }

        $cms = new CMS(49, intval($id_lang));
        if (Validate::isLoadedObject($cms) && $cms->active){
          $this->context->smarty->assign('oswiadczam', $cms->content);
        }

        $cms = new CMS(50, intval($id_lang));
        if (Validate::isLoadedObject($cms) && $cms->active){
          $this->context->smarty->assign('po_zapoznaniu', $cms->content);
        }

        $cms = new CMS(51, intval($id_lang));
        if (Validate::isLoadedObject($cms) && $cms->active){
          $this->context->smarty->assign('akceptuje_regulamin', $cms->content);
        }
        
        $this->setTemplate('contact');
    }

    public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();

        $breadcrumb['links'][] = [
            'title' => $this->getTranslator()->trans('Contact us', [], 'Shop.Theme.Global'),
            'url' => $this->context->link->getPageLink('contact', true),
        ];

        return $breadcrumb;
    }
}
