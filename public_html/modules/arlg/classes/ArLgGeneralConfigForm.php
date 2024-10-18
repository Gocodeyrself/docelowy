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
include_once dirname(__FILE__).'/ArLgModel.php';

class ArLgGeneralConfigForm extends ArLgModel
{
    public $sandbox;
    public $allowed_ips;
    public $custom_css;
    public $custom_js;

    public function rules()
    {
        return array(
            array(
                array(
                    'sandbox',
                    'allowed_ips',
                    'custom_css',
                    'custom_js'
                ), 'safe'
            )
        );
    }

    public function attributeTypes()
    {
        return array(
            'sandbox' => 'switch',
            'allowed_ips' => 'textarea',
            'custom_css' => 'textarea',
            'custom_js' => 'textarea'
        );
    }

    public function attributeLabels()
    {
        return array(
            'sandbox' => $this->l('Sandbox mode', 'ArLgGeneralConfigForm'),
            'allowed_ips' => $this->l('Allowed IPs'), 'ArLgGeneralConfigForm',
            'custom_css' => $this->l('Custom CSS styles', 'ArLgGeneralConfigForm'),
            'custom_js' => $this->l('Custom JS code'), 'ArLgGeneralConfigForm',
        );
    }

    public function attributeDescriptions()
    {
        return array(
            'sandbox' => $this->l('If enabled, module will be shown from allowed IPs only.', 'ArLgGeneralConfigForm'),
            'allowed_ips' => sprintf($this->l('One IP address per line. Your current IP %s', 'ArLgGeneralConfigForm'), $this->getCurrentIP()),
        );
    }

    public function getCurrentIP()
    {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        if (isset($_SERVER['REMOTE_ADDR'])) {
            return $_SERVER['REMOTE_ADDR'];
        }
    }

    public function attributeDefaults()
    {
        return array(
            'sandbox' => 0,
            'allowed_ips' => $this->getCurrentIP()
        );
    }

    public function getFormTitle()
    {
        return $this->l('General cofiguration', 'ArLgGeneralConfigForm');
    }
}
