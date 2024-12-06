<?php

class ShareCartShareModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $uniqueId = Tools::getValue('id');
        if (!$uniqueId) {
            $this->errors[] = $this->trans('Invalid link.', [], 'Modules.Sharecart.Shop');
            $this->setTemplate('errors/not_found.tpl');
            return;
        }

        // Pobranie danych koszyka z bazy
        $cartLink = Db::getInstance()->getRow('
            SELECT * FROM `' . _DB_PREFIX_ . 'sharecart_links`
            WHERE unique_id = "' . pSQL($uniqueId) . '"
        ');

        if (!$cartLink) {
            $this->errors[] = $this->trans('This cart does not exist or has expired.', [], 'Modules.Sharecart.Shop');
            $this->setTemplate('errors/not_found.tpl');
            return;
        }

        // Pobranie zawartości koszyka
        $cart = new Cart((int)$cartLink['cart_id']);
        $products = $cart->getProducts();

        // Przekazanie produktów do widoku
        $this->context->smarty->assign([
            'products' => $products,
        ]);

        $this->setTemplate('module:sharecart/views/templates/front/share.tpl');
    }
}
