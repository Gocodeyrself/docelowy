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

class ArLgMagnifyConfigForm extends ArLgModel
{
    public $enable;
    public $type;
    public $width;
    public $height;
    public $fader;
    public $fader_opacity;

    public function attributeTypes()
    {
        return array(
            'enable' => 'switch',
            'type' => 'select',
            'width' => 'text',
            'height' => 'text',
            'fader' => 'switch',
            'fader_opacity' => 'text'
        );
    }

    public function attributeDefaults()
    {
        return array(
            'enable' => 0,
            'type' => 'lens',
            'width' => 200,
            'height' => 200,
            'fader' => 0,
            'fader_opacity' => 20
        );
    }

    public function rules()
    {
        return array(
            array(
                array(
                    'enable',
                    'fader',
                    'type'
                ), 'safe'
            ),
            array(
                array(
                    'width',
                    'height',
                    'fader_opacity'
                ), 'isInt'
            )
        );
    }

    public function attributeLabels()
    {
        return array(
            'enable' => $this->l('Enable magnifier', 'ArLgMagnifyConfigForm'),
            'type' => $this->l('Magnifier type', 'ArLgMagnifyConfigForm'),
            'width' => $this->l('Magnifier width, px', 'ArLgMagnifyConfigForm'),
            'height' => $this->l('Magnifier height, px', 'ArLgMagnifyConfigForm'),
            'fader' => $this->l('Fade image on hover', 'ArLgMagnifyConfigForm'),
            'fader_opacity' => $this->l('Fader opacity, %', 'ArLgMagnifyConfigForm')
        );
    }

    public function typeSelectOptions()
    {
        return array(
            array(
                'id' => 'lens',
                'name' => $this->l('Lens', 'ArLgMagnifyConfigForm')
            ),
            array(
                'id' => 'out',
                'name' => $this->l('Out-of-image zoom', 'ArLgMagnifyConfigForm')
            ),
            array(
                'id' => 'in',
                'name' => $this->l('Inner-image zoom', 'ArLgMagnifyConfigForm')
            )
        );
    }

    public function attributeDescriptions()
    {
        return array(
            'fader_opacity' => $this->l('From 0 to 100', 'ArLgMagnifyConfigForm')
        );
    }

    public function getFormTitle()
    {
        return $this->l('Magnier settings', 'ArLgMagnifyConfigForm');
    }
}
