{***
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
*}

<div class="bootstrap panel container-fluid">
	<div class="panel-heading">
		<i class="icon-book"></i> {l s='Contact & Support' mod='cs_invisible_recaptcha_v2'}
	</div>
	<a target="_blank" href="https://www.comonsoft.com/"><img src="{$module_dir}views/img/logo-comonsoft.png"></a>
	<div class="list-group pull-right">
		<button class="btn btn-primary post-product-comment"><i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> {l s='Rate this module!' mod='cs_invisible_recaptcha_v2'}</button>
		<a class="btn btn-default" target="_blank" href="https://boutique.comonsoft.com/12-modules-prestashop"><i class="icon-link"></i> {l s='Prestashop modules' mod='cs_invisible_recaptcha_v2'}</a>
		<a class="btn btn-default" target="_blank" href="https://www.comonsoft.com/offres/creation-boutique-prestashop-yvelines-78.htm"><i class="icon-link"></i> {l s='Online store with Prestashop' mod='cs_invisible_recaptcha_v2'}</a>
		<a class="btn btn-default" target="_blank" href="https://www.comonsoft.com/offres/seo-referencement-naturel.htm"><i class="icon-link"></i> {l s='SEO optimization' mod='cs_invisible_recaptcha_v2'}</a>
		<a class="btn btn-default" target="_blank" href="https://boutique.comonsoft.com/fr/nous-contacter"><i class="icon-link"></i> {l s='A question? Contact-us' mod='cs_invisible_recaptcha_v2'}</a>
	</div>
</div>

{include file=$module_review_path
moduleName=$moduleName
customer_name=$customer_name
}
