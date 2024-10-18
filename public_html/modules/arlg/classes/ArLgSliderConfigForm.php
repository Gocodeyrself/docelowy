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

class ArLgSliderConfigForm extends ArLgModel
{
    public $enabled;

    public $mode;

    public $layout;
    public $vertical_height;
    public $thumb_width;

    public $thumb_size;
    public $img_size;
    public $thumb_item;

    public $all_images;

    public $controls;

    public $gallery;

    public $video;

    public $thumb_controls;
    public $thumb_controls_offset;
    public $thumb_items_per_row;

    public $control_bg;
    public $control_color;
    public $control_hbg;
    public $control_hcolor;

    public $thumb_border;
    public $thumb_border_color;

    public $active_thumb_border;
    public $active_thumb_border_color;

    //public $breakdowns;

    public function attributeTypes()
    {
        return array(
            'enabled' => 'switch',

            'layout' => 'select',

            'mode' => 'select',

            'thumb_size' => 'select',
            'img_size' => 'select',
            'all_images' => 'switch',
            'controls' => 'switch',

            'thumb_controls' => 'switch',
            'gallery' => 'select',
            'video' => 'select',

            'control_bg' => 'color',
            'control_color' => 'color',
            'control_hbg' => 'color',
            'control_hcolor' => 'color',

            'thumb_border' => 'text',
            'thumb_border_color' => 'color',

            'active_thumb_border' => 'text',
            'active_thumb_border_color' => 'color',

            'breakdowns' => 'textarea'
        );
    }

    public function videoSelectOptions()
    {
        return array(
            array(
                'id' => 0,
                'name' => $this->l('None')
            ),
            array(
                'id' => 1,
                'name' => $this->l('In-place video')
            ),
            array(
                'id' => 2,
                'name' => $this->l('Preview image')
            ),
        );
    }

    public function gallerySelectOptions()
    {
        return array(
            array(
                'id' => 0,
                'name' => $this->l('None')
            ),
            array(
                'id' => 1,
                'name' => $this->l('Default')
            ),
            array(
                'id' => 2,
                'name' => $this->l('Grid')
            ),
        );
    }

    public function attributeDefaults()
    {
        return array(
            'enabled' => 1,

            'mode' => 'horizontal',

            'layout' => 'left',
            'vertical_height' => 382,
            'thumb_width' => 65,

            'thumb_size' => $this->getDefaultThumbSize(),
            'img_size' => $this->getDefaultImgSize(),

            'thumb_item' => 5,
            'all_images' => 0,

            'controls' => 1,
            'gallery' => 1,
            'thumb_items_per_row' => 4,

            'thumb_controls_offset' => 1,

            'control_bg' => '',
            'control_color' => '#787878',
            'control_hbg' => '',
            'control_hcolor' => '#232323',

            'thumb_border' => '0',
            'thumb_border_color' => '',

            'active_thumb_border' => '3',
            'active_thumb_border_color' => '#2fb5d2',
        );
    }


    public function rules()
    {
        $rules = array(
            array(
                array(
                    'enabled',

                    'mode',

                    'layout',

                    'thumb_size',
                    'img_size',
                    'all_images',

                    'controls',

                    'thumb_controls',

                    'gallery',

                    'control_bg',
                    'control_color',
                    'control_hbg',
                    'control_hcolor',

                    'thumb_border',
                    'thumb_border_color',

                    'active_thumb_border',
                    'active_thumb_border_color',

                    'breakdowns'
                ), 'safe'
            ),
            array(
                array(
                    'active_thumb_border',
                    'thumb_border',
                    'thumb_controls_offset',
                    'vertical_height',
                    'thumb_width',
                    'thumb_item',
                ), 'isInt'
            ),
            array(
                array(
                    'thumb_items_per_row'
                ), 'isInt', 'on' => $this->gallery == 2
            ),
        );
        if ($this->isVideoModulesInstalled()) {
            $rules[] = array(
                array(
                    'video'
                ), 'safe'
            );
        }
        return $rules;
    }

    public function supportedVideoModules()
    {
        return array(
            'stprovideos'
        );
    }

    public function isVideoModulesInstalled()
    {
        foreach ($this->supportedVideoModules() as $moduleName) {
            if (Module::isInstalled($moduleName) && Module::isEnabled($moduleName)) {
                return true;
            }
        }
        return false;
    }

    public function layoutSelectOptions()
    {
        return array(
            array(
                'id' => 'left',
                'name' => $this->l('Thumbs on left side')
            ),
            array(
                'id' => 'right',
                'name' => $this->l('Thumbs on right side')
            ),
        );
    }

    public function modeSelectOptions()
    {
        return array(
            array(
                'id' => 'horizontal',
                'name' => $this->l('Horizontal')
            ),
            array(
                'id' => 'vertical',
                'name' => $this->l('Vertical')
            ),
        );
    }

    public function getDefaultThumbSize()
    {
        if ($this->is16()) {
            return ImageType::getFormatedName('home');
        }
        if ($this->is17() || $this->is8x()) {
            return ImageType::getFormattedName('home');
        }
    }

    public function getDefaultImgSize()
    {
        if ($this->is16()) {
            return ImageType::getFormatedName('large');
        }
        if ($this->is17() || $this->is8x()) {
            return ImageType::getFormattedName('large');
        }
    }

    public function thumbSizeSelectOptions()
    {
        $types = ImageType::getImagesTypes('products');
        $result = array(
            array(
                'id' => '_orig',
                'name' => $this->l('ORIGINAL')
            )
        );
        foreach ($types as $type) {
            $result[] = array(
                'id' => $type['name'],
                'name' => $type['name'] . ' (' . $type['width'] . 'x' . $type['height'] . ')'
            );
        }
        return $result;
    }

    public function imgSizeSelectOptions()
    {
        $types = ImageType::getImagesTypes('products');
        $result = array(
            array(
                'id' => '_orig',
                'name' => $this->l('ORIGINAL')
            )
        );
        foreach ($types as $type) {
            $result[] = array(
                'id' => $type['name'],
                'name' => $type['name'] . ' (' . $type['width'] . 'x' . $type['height'] . ')'
            );
        }
        return $result;
    }

    public function attributeLabels()
    {
        return array(
            'enabled' => $this->l('Enable', 'ArLgSliderConfigForm'),

            'mode' => $this->l('Slider desktop mode', 'ArLgSliderConfigForm'),

            'layout' => $this->l('Layout', 'ArLgSliderConfigForm'),

            'thumb_size' => $this->l('Thumbnail size', 'ArLgSliderConfigForm'),
            'img_size' => $this->l('Large image size', 'ArLgSliderConfigForm'),

            'vertical_height' => $this->l('Slider height', 'ArLgSliderConfigForm'),
            'thumb_width' => $this->l('Thumbnails width', 'ArLgSliderConfigForm'),

            'thumb_items_per_row' => $this->l('Thumbnails per row', 'ArLgSliderConfigForm'),

            'controls' => $this->l('Controls', 'ArLgSliderConfigForm'),

            'thumb_controls' => $this->l('Controls for thumbnails', 'ArLgSliderConfigForm'),
            'thumb_item' => $this->l('Thumbnail items', 'ArLgSliderConfigForm'),
            'all_images' => $this->l('Display all images instead of current combination images', 'ArLgSliderConfigForm'),
            'thumb_controls_offset' => $this->l('Scroll items per click', 'ArLgSliderConfigForm'),

            'gallery' => $this->l('Thumbnails', 'ArLgSliderConfigForm'),
            'video' => $this->l('Display video as', 'ArLgSliderConfigForm'),

            'control_bg' => $this->l('Controls background color', 'ArLgSliderConfigForm'),
            'control_color' => $this->l('Controls color', 'ArLgSliderConfigForm'),
            'control_hbg' => $this->l('Controls hover background color', 'ArLgSliderConfigForm'),
            'control_hcolor' => $this->l('Controls hover color', 'ArLgSliderConfigForm'),

            'thumb_border' => $this->l('Thumbnails border width, px', 'ArLgSliderConfigForm'),
            'thumb_border_color' => $this->l('Thumbnails border color', 'ArLgSliderConfigForm'),

            'active_thumb_border' => $this->l('Active thumbnail border width, px', 'ArLgSliderConfigForm'),
            'active_thumb_border_color' => $this->l('Active thumbnail border color', 'ArLgSliderConfigForm')
        );
    }

    public function getFormTitle()
    {
        return $this->l('Slider settings', 'ArLgSliderConfigForm');
    }
}
