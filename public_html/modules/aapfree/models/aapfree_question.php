<?php

/**
 * PrestaShop module created by VEKIA, a guy from official PrestaShop community ;-)
 *
 * @author    VEKIA PL MILOSZ MYSZCZUK VATEU: PL9730945634
 * @copyright 2010-2025 VEKIA
 * @license   This program is not free software and you can't resell and redistribute it
 *
 * CONTACT WITH DEVELOPER http://mypresta.eu
 * support@mypresta.eu
 */

class aapfreeQuestion extends ObjectModel
{
    public $email;
    public $author;
    public $phone;
    public $id_product;
    public $id_combination;
    public $question;
    public $date_add;
    public static $definition = array(
        'table' => 'aapfreequestion',
        'primary' => 'id_aapfreequestion',
        'multilang' => false,
        'fields' => array(
            'id_product' => array('type' => ObjectModel :: TYPE_INT),
            'id_combination' => array('type' => ObjectModel :: TYPE_INT),
            'email' => array('type' => ObjectModel :: TYPE_STRING),
            'author' => array('type' => ObjectModel :: TYPE_STRING),
            'phone' => array('type' => ObjectModel :: TYPE_STRING),
            'question' => array('type' => ObjectModel :: TYPE_NOTHING),
            'date_add' => array('type' => ObjectModel :: TYPE_DATE),
        ),
    );
}