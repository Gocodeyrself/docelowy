<?php

class ShareCartAjaxModuleFrontController extends ModuleFrontController
{
    public function postProcess()
    {
        $cartId = $this->context->cart->id;

        if (!$cartId) {
            die(json_encode(['success' => false, 'message' => 'Cart not found']));
        }

        // Generowanie linku
        $uniqueId = bin2hex(random_bytes(10));
        $dateAdded = date('Y-m-d H:i:s');

        Db::getInstance()->insert('sharecart_links', [
            'cart_id' => (int)$cartId,
            'unique_id' => pSQL($uniqueId),
            'date_add' => pSQL($dateAdded)
        ]);

        $link = $this->context->link->getBaseLink() . 'sharecart/' . $uniqueId;

        die(json_encode(['success' => true, 'link' => $link]));
    }
}
