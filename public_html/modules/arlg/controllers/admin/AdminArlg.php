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
include_once dirname(__FILE__).'../../../arlg.php';
include_once dirname(__FILE__).'../../../classes/ArLgTools.php';

class AdminArlgController extends ModuleAdminController
{
    public function ajaxProcessRateModal()
    {
        $result = (int)Tools::getValue('result');
        if ($result > 0) {
            $result = time() + Arlg::REMIND_TO_RATE;
        }
        Configuration::updateValue('AR_LG_REMINDER', pSQL($result), false, 0, 0);
        die(ArLgTools::jsonEncode(array(
            'reminder' => Configuration::get('AR_LG_REMINDER')
        )));
    }

    public function ajaxProcessLoadModules()
    {
        $url = 'https://api.areama.net/plugins/list';
        $data = array();
        $params = array(
            'lang' => Context::getContext()->language->iso_code,
            'pl' => 'ps',
            'partners' => 1
        );
        $url = $url . '?' . http_build_query($params);
        if ($json = Tools::file_get_contents($url)) {
            $data = ArLgTools::jsonDecode($json);
        }
        if ($data) {
            foreach ($data as $k => $module) {
                if (Module::isInstalled($module->name)) {
                    $data[$k]->installed = 1;
                } else {
                    $data[$k]->installed = 0;
                }
                $data[$k]->rate = str_replace('.', '', $data[$k]->avg_rate);
                if ($module->marketplace_item_id == $this->module->getAddonsId()) {
                    unset($data[$k]);
                }
            }
            die(ArLgTools::jsonEncode(array(
                'content' => $this->module->render('_partials/_modules.tpl', array(
                    'data' => $data
                )),
                'data' => $data
            )));
        }
        die(ArLgTools::jsonEncode(array(
            'content' => ''
        )));
    }
}
