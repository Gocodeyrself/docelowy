<?php

class ShareCartShareModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $uniqueId = Tools::getValue('id');
        if (!$uniqueId) {
            die('Invalid link');
        }

        // Pobranie danych koszyka
        $cart = Db::getInstance()->getRow('
            SELECT * FROM `' . _DB_PREFIX_ . 'sharecart_links`
            WHERE unique_id = "' . pSQL($uniqueId) . '"
        ');

        if (!$cart) {
            die('Cart not found');
        }

        // Sprawdzenie, czy link nie wygasł
        $dateAdded = new DateTime($cart['date_add']);
        $dateLimit = (new DateTime())->modify('-2 weeks');
        if ($dateAdded < $dateLimit) {
            die('This link has expired.');
        }

        // Pobranie produktów z koszyka
        $cartObj = new Cart((int)$cart['cart_id']);
        $products = $cartObj->getProducts();

        // Przekazanie danych do widoku
        $this->context->smarty->assign([
            'products' => $products,
        ]);

        $this->setTemplate('module:sharecart/views/templates/front/share.tpl');
    }
}
