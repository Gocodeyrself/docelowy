<?php
/**
 * Copyright ETS Software Technology Co., Ltd
 * NOTICE OF LICENSE
 * DISCLAIMER
 */
if (!defined('_PS_VERSION_')) {
    exit;
}
require_once _PS_MODULE_DIR_ . 'ets_savemycart/classes/HTMLTemplateCartPdf.php';
require_once _PS_MODULE_DIR_ . 'ets_savemycart/classes/EtsScLink.php';
require_once(dirname(__FILE__) . '/abstract.php');

class Ets_savemycartSubmitModuleFrontController extends EtsSaveCartFrontController
{
    private $cartRuleErrros;

    public function __construct()
    {
        parent::__construct();
        $this->display_column_right = false;
        $this->display_column_left = false;
    }

    public function init()
    {
        parent::init();
        file_put_contents(_PS_ROOT_DIR_ . '/log_submit_debug.log', 'Debug: Init method started' . PHP_EOL, FILE_APPEND);
    }

    public function initContent()
    {
        file_put_contents(_PS_ROOT_DIR_ . '/log_submit_debug.log', 'Debug: InitContent method started' . PHP_EOL, FILE_APPEND);

        parent::initContent();

        if (Tools::isSubmit('submitSend') || Tools::getValue('submitSend')) {
            try {
                $email = Tools::getValue('email');
                $name = Tools::getValue('name');
                $id_cart = Tools::getValue('id_cart');

                if (!$email) {
                    throw new Exception('Email value is missing');
                }

                if (!$name) {
                    throw new Exception('Name value is missing');
                }

                if (!$id_cart && !$this->context->cart->id) {
                    throw new Exception('Cart ID is missing');
                }

                // Log basic input data
                file_put_contents(
                    _PS_ROOT_DIR_ . '/log_submit_debug.log',
                    "Debug: Email: $email, Name: $name, Cart ID: $id_cart" . PHP_EOL,
                    FILE_APPEND
                );

                $currentCart = $id_cart ? new Cart((int)$id_cart) : $this->context->cart;
                $products = $currentCart->getProducts();

                if (!count($products)) {
                    throw new Exception('The shopping cart is empty');
                }

                // Prepare email data
                $data = $this->prepareEmailData($currentCart, $name, $email);
                $this->sendCartEmail($data, $email, $name, $currentCart);

                file_put_contents(_PS_ROOT_DIR_ . '/log_submit_debug.log', 'Debug: Email sent successfully' . PHP_EOL, FILE_APPEND);
                die(json_encode(['ok' => 1, 'msg' => 'Mail sent successfully.']));

            } catch (Exception $e) {
                file_put_contents(
                    _PS_ROOT_DIR_ . '/log_submit_debug.log',
                    'Error: ' . $e->getMessage() . PHP_EOL,
                    FILE_APPEND
                );
                die(json_encode(['errors' => $e->getMessage()]));
            }
        }
    }

    private function prepareEmailData($currentCart, $name, $email)
    {
        $product_list_txt = '';
        $product_list_html = '';

        $product_list = [];
        foreach ($currentCart->getProducts() as $product) {
            $product_list[] = [
                'name' => $product['name'],
                'price' => Tools::displayPrice($product['price'], $this->context->currency),
                'quantity' => $product['quantity']
            ];
        }

        return [
            'products_txt' => $product_list_txt,
            'products_html' => $product_list_html,
            'total' => CartCore::getTotalCart($currentCart->id),
            'email' => $email,
            'name' => $name
        ];
    }

    private function sendCartEmail($data, $email, $name, $currentCart)
    {
        $templateVars = [
            '{products}' => $data['products_html'],
            '{total}' => $data['total'],
            '{name}' => $name
        ];

        if (
            !Mail::Send(
                (int)$currentCart->id_lang,
                'shopping_cart',
                Mail::l('Your cart summary', (int)$currentCart->id_lang),
                $templateVars,
                $email,
                $name,
                null,
                null,
                null,
                null,
                _PS_MAIL_DIR_
            )
        ) {
            throw new Exception('Sending mail failed');
        }
    }
}
