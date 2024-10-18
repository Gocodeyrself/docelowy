<?php
/**
 * cs_invisible_recaptcha_v2 front-end module version 1.3.4 for Prestashop 1.6, 1.7
 * Support contact : prestashop@comonsoft.com.
 *
 * NOTICE OF LICENSE
 *
 * This source file is the property of Com'onSoft
 * that is bundled with this package.
 * It is also available through the world-wide-web at this URL:
 * https://boutique.comonsoft.com/
 *
 * @category  front-end
 * @package   cs_invisible_recaptcha_v2
 * @author    Com'onSoft (http://www.comonsoft.com/)
 * @copyright 2016-2020 Com'onSoft and contributors
 * @version   1.3.4
 */

class cs_invisible_recaptcha_v2AddModuleReviewsModuleFrontController extends ModuleFrontController {

  public function display(){

	if(Configuration::get('CS_INV_CAPTCHA_REVIEW')==0) {
		/** Validate all Posted data */
		$id_product = (int) Tools::getValue('id_product');
		if(!Validate::isGenericName($id_product) || !Validate::isCleanHtml($id_product))
		  return false;
	
		$comment_content = Tools::getValue('comment_content');
		if(!Validate::isGenericName($id_product) || !Validate::isCleanHtml($id_product))
		  return false;
	
		$customer_name = Tools::getValue('customer_name');
		if(!Validate::isGenericName($customer_name) || !Validate::isCleanHtml($customer_name))
		  return false;
	
		$criterions = Tools::getValue('criterion');
		if(!Validate::isGenericName($criterions) || !Validate::isCleanHtml($criterions))
		  return false;
	
		$url = 'https://boutique.comonsoft.com/fr/module/csoft_save_modules_reviews/SaveModuleReviews';
		$parameters = array('id_product' => $id_product, 'comment_content' => $comment_content, 'customer_name' => $customer_name, 'criterion' => $criterions);
	
		$encoded = '';
		foreach($parameters as $name => $value) {
		  $encoded .= urlencode($name).'='.urlencode($value).'&';
		}
		$encoded = substr($encoded, 0, strlen($encoded)-1);
	
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POSTFIELDS,  $encoded);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		$json = curl_exec($ch);
		curl_close($ch);
	
		Configuration::updateValue('CS_INV_CAPTCHA_REVIEW',1);
		
		$this->ajaxDie($json);
		die;
    }
    else {
        $this->ajaxDie( json_encode(array('success' => false, 'errors' => array( $this->module->l('You already reviewed this module!', 'AddModuleReviews')))));
	}
    die;
  }
}
?>