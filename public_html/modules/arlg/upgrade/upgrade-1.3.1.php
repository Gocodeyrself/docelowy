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
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_3_1($module)
{
    $configMap = array(
        'ARLGS_DESKTOP' => 'ARLGS_ENABLED',
        'ARLGS_MOBILE' => 'ARLGSM_ENABLED',
        'ARLGS_CONTROLS_DESKTOP' => 'ARLGS_CONTROLS',
        'ARLGS_CONTROLS_MOBILE' => 'ARLGSM_CONTROLS',
        'ARLGS_GALLERY_DESKTOP' => 'ARLGS_THUMB_CONTROLS',
        'ARLGS_GALLERY_MOBILE' => 'ARLGSM_THUMB_CONTROLS',

        'ARLGS_CONTROL_BG' => 'ARLGSM_CONTROL_BG',
        'ARLGS_CONTROL_COLOR' => 'ARLGSM_CONTROL_COLOR',
        'ARLGS_CONTROL_HBG' => 'ARLGSM_CONTROL_HBG',
        'ARLGS_CONTROL_HCOLOR' => 'ARLGSM_CONTROL_HCOLOR',
        'ARLGS_THUMB_BORDER' => 'ARLGSM_THUMB_BORDER',
        'ARLGS_THUMB_BORDER_COLOR' => 'ARLGSM_THUMB_BORDER_COLOR',
        'ARLGS_ACTIVE_THUMB_BORDER' => 'ARLGSM_ACTIVE_THUMB_BORDER',
        'ARLGS_ACTIVE_THUMB_BORDER_COLOR' => 'ARLGSM_ACTIVE_THUMB_BORDER_COLOR'
    );

    $configDefaults = array(
        'ARLGS_MODE' => 'horizontal',
        'ARLGS_LAYOUT' => 'left',
        'ARLGS_VERTICAL_HEIGHT' => '382',
        'ARLGS_THUMB_WIDTH' => '65',
        'ARLGS_THUMB_ITEM' => '5',

        'ARLGSM_MODE' => 'horizontal',
        'ARLGSM_LAYOUT' => 'left',
        'ARLGSM_VERTICAL_HEIGHT' => '382',
        'ARLGSM_THUMB_WIDTH' => '65',
        'ARLGSM_THUMB_ITEM' => '5',
    );

    foreach ($configMap as $source => $dest) {
        $value = Configuration::get($source);
        Configuration::updateValue($dest, $value);
    }

    foreach ($configDefaults as $key => $val) {
        Configuration::updateValue($key, $val);
    }

    return true;
}
