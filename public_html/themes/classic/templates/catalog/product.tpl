{**
* Copyright since 2007 PrestaShop SA and Contributors
* PrestaShop is an International Registered Trademark & Property of PrestaShop SA
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.md.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to https://devdocs.prestashop.com/ for more information.
*
* @author PrestaShop SA and Contributors <contact@prestashop.com>
  * @copyright Since 2007 PrestaShop SA and Contributors
  * @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
  *}
  {extends file=$layout}

  {assign var='lang_iso_code' value=$context.language.iso_code}


{block name='head' append}
<meta property="og:type" content="product">
{if $product.cover}
<meta property="og:image" content="{$product.cover.large.url}">
{/if}

{if $product.show_price}
<meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
<meta property="product:pretax_price:currency" content="{$currency.iso_code}">
<meta property="product:price:amount" content="{$product.price_amount}">
<meta property="product:price:currency" content="{$currency.iso_code}">
{/if}
{if isset($product.weight) && ($product.weight != 0)}
<meta property="product:weight:value" content="{$product.weight}">
<meta property="product:weight:units" content="{$product.weight_unit}">
{/if}
{/block}

{block name='head_microdata_special'}
{include file='_partials/microdata/product-jsonld.tpl'}
{/block}

{block name='content'}

<section id="main">
  <meta content="{$product.url}">

  <div class="row product-container js-product-container">
    <div class="col-lg-4 col-md-12" id="product_column_right">
      <div class="col-md-12 p-0 product-right-container">
        <div class="col-md-12 white-bgr box-shadow">
          {block name='product_prices'}
          {include file='catalog/_partials/product-prices.tpl'}
          {/block}

          <div class="product-information">

            {if $product.is_customizable && count($product.customizations.fields)}
            {block name='product_customization'}
            {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
            {/block}
            {/if}

            <div class="product-actions js-product-actions">
              {block name='product_buy'}
              <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="{$static_token}">
                <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id" class="js-product-customization-id">

                {block name='product_variants'}
                {include file='catalog/_partials/product-variants.tpl'}
                {/block}

                {block name='product_pack'}
                {if $packItems}
                <section class="product-pack">
                  <p class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</p>
                  {foreach from=$packItems item="product_pack"}
                  {block name='product_miniature'}
                  {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack showPackProductsPrice=$product.show_price}
                  {/block}
                  {/foreach}
                </section>
                {/if}
                {/block}

                {block name='product_discounts'}
                {include file='catalog/_partials/product-discounts.tpl'}
                {/block}

                {block name='product_add_to_cart'}
                {include file='catalog/_partials/product-add-to-cart.tpl'}
                {/block}

                {block name='product_additional_info'}
                {include file='catalog/_partials/product-additional-info.tpl'}
                {hook h='displayProductActions' product=$product}
                {/block}
                
                {* Wskaźniki flag produktów *}
                <ul class="product-flags-custom product-flags js-product-flags">
                  {foreach from=$product.flags item=flag}
                    {if $flag.type != "new" && $flag.type != "discount" && $flag.type != "on-sale" && $flag.type != "out_of_stock"}
                      <li class="product-flag {$flag.type}">{$flag.label}</li>
                    {/if}
                  {/foreach}
                </ul>

                {block name='product_refresh'}{/block}
              </form>
              {/block}

              <div class="catalog_number">
                {l s="Stan" d='Shop.Theme.Catalog'}
                {assign var="qFeature" value=Tools::getQuantityFromFeature($product.id_product)}
                {if $qFeature}
                  {l s="%count% szt." sprintf=['%count%' => $qFeature ] d='Shop.Theme.Checkout'}
                {else}
                  {if $product.quantity < 0}
                    {l s="%count% szt." sprintf=['%count%' => 0] d='Shop.Theme.Checkout'}
                  {else}
                    {l s="%count% szt." sprintf=['%count%' => $product.quantity] d='Shop.Theme.Checkout'}
                  {/if}
                {/if}
              </div>
            </div>

            {block name='hook_display_reassurance'}
            {hook h='displayReassurance'}
            {/block}
          </div>
        </div>

        <!-- New box with delivery and returns information -->
<div class="col-md-12 white-bgr box-shadow accessories-container" style="padding: 10px 15px;">
<h4 class="head-title mb-2">{l s='Delivery and Returns' d='Shop.Theme.Catalog'}</h4>

<div class="delivery-info" style="padding: 5px 10px; line-height: 1.4;">

  <!-- Returns and complaints -->
  <p class="d-flex align-items-center mb-1">
    <i class="material-icons mr-1" style="color: #2d4156; font-size: 20px;">&#xE89C;</i>
    <span style="font-weight: bold; color: #2d4156;">{l s='Returns and complaints:' d='Shop.Theme.Catalog'}</span>
    <a href="https://sklep.cezos.com/{$lang_iso_code}/content/20-reklamacjazwroty" target="_blank" class="ml-1" style="color: #007bff; text-decoration: underline;">
      {l s='Learn more' d='Shop.Theme.Catalog'}
    </a>
  </p>

  <!-- Package tracking -->
  <p class="d-flex align-items-center mb-1">
    <i class="material-icons mr-1" style="color: #2d4156; font-size: 20px;">&#xE8B6;</i>
    <span style="font-weight: bold; color: #2d4156;">{l s='Package tracking available after shipment:' d='Shop.Theme.Catalog'}</span>
    <a href="https://sklep.cezos.com/{$lang_iso_code}/order-history" target="_blank" class="ml-1" style="color: #007bff; text-decoration: underline;">
      {l s='Check order status' d='Shop.Theme.Catalog'}
    </a>
  </p>

  <!-- Delivery within -->
  <p class="d-flex align-items-center mb-1">
    <i class="material-icons mr-1" style="color: #2d4156; font-size: 20px;">&#xE425;</i>
    <span style="font-weight: bold; color: #2d4156;">{l s='Delivery within:' d='Shop.Theme.Catalog'}</span>
    <span style="color: #2d4156; margin-left: 5px;">{l s='2-4 days' d='Shop.Theme.Catalog'}</span>
  </p>

  <!-- Available shipping methods -->
  <h5 class="mt-3 mb-1" style="color: #333; font-weight: bold;">{l s='Available shipping methods:' d='Shop.Theme.Catalog'}</h5>
  <ul class="pl-0" style="color: #666; margin-bottom: 0;">
    {if $lang_iso_code == 'pl'}
      <!-- Metody dla języka polskiego -->
      <li>{l s='In-store pickup:' d='Shop.Theme.Catalog'} {l s='free' d='Shop.Theme.Catalog'}</li>
      <li>{l s='GLS Courier - Poland:' d='Shop.Theme.Catalog'} {l s='30,00 zł' d='Shop.Theme.Catalog'}</li>
      <li>{l s='GLS Parcel Shop:' d='Shop.Theme.Catalog'} {l s='18,50 zł' d='Shop.Theme.Catalog'}</li>
      <li>{l s='Standard parcel locker shipping:' d='Shop.Theme.Catalog'} {l s='25,92 zł' d='Shop.Theme.Catalog'}</li>
      <li>{l s='InPost Parcel Locker (cash on delivery):' d='Shop.Theme.Catalog'} {l s='30,00 zł' d='Shop.Theme.Catalog'}</li>
      <li>{l s='InPost courier:' d='Shop.Theme.Catalog'} {l s='30,91 zł' d='Shop.Theme.Catalog'}</li>
    {else}
      <!-- Metoda dla języka angielskiego lub innego -->
      <li>{l s='GLS Courier - International:' d='Shop.Theme.Catalog'} {l s='Price depends on destination country' d='Shop.Theme.Catalog'}</li>
    {/if}
  </ul>
</div>
</div>
<!-- End of new box with delivery and returns information -->
  

          <div class="col-md-12 hidden-md-down white-bgr box-shadow scroll height-400 accessories-container">
            <h4 class="head-title">{l s='You might also like' d='Shop.Theme.Catalog'}</h4>            
              {if $accessories}
              <section class="product-accessories clearfix">
                <div class="products row">
                  {foreach from=$accessories item="product_accessory" key="position"}
                    {block name='product_miniature'}
                    {include file='catalog/_partials/miniatures/accessory.tpl' product=$product_accessory position=$position
                    productClasses="col-xs-12 col-sm-6 col-lg-4 col-xl-3"}
                    {/block}
                  {/foreach}
                </div>
              </section>
              {/if}
          </div>
        </div>
      </div>

      <div class="col-lg-8 col-md-12" id="product_column_left">
        <!-- <div class="row"> -->
        <div class="col-md-12">
          <div class="row white-bgr box-shadow product-left-container">
            <div class="col-md-5 right-red-line">
              {block name='page_content_container'}
              <section class="page-content" id="content">
                {block name='page_content'}
                {block name='product_cover_thumbnails'}
                {include file='catalog/_partials/product-cover-thumbnails.tpl'}
                {/block}
                <div class="scroll-box-arrows">
                  <i class="material-icons left">&#xE314;</i>
                  <i class="material-icons right">&#xE315;</i>
                </div>

                {/block}
              </section>
              {/block}
            </div>
            <div class="col-md-7 position-unset">
              {block name='page_header_container'}
              {block name='page_header'}
              <div class="catalog_number">{l s='Catalog Number:' d='Shop.Theme.Global'} <b itemprop="sku">{$product.ean13}</b></div>
              <div class="catalog_number">{l s='Reference' d='Shop.Pdf'}: <b itemprop="sku">{$product.reference}</b>
              </div>
              <h1 class="h1 product-name">{block name='page_title'}{$product.name}{/block}</h1>
              {if $product.flags}
              {/if}
              {if $product.grouped_features}
              <ul>
                {foreach from=$product.grouped_features item=feature}
                    {if $feature.name == 'Producent' && $feature.value == 'Cezos'}
                        <li class="product_type highlight-cezos">
                            {$feature.name}: <b>{$feature.value}</b>
                        </li>
                        {break}
                    {/if}
                {/foreach}

                {foreach from=$product.grouped_features item=feature}
                  {if !($feature.name == 'Producent' && $feature.value == 'Cezos') 
                      && $feature.id_feature != 52 
                      && $feature.id_feature != 69 
                      && $feature.id_feature != 70 
                      && $feature.id_feature != 71
                      && $feature.id_feature != 7 
                      && $feature.name != 'Waga brutto' 
                      && $feature.name != 'Gross Weight'}
                    <li class="product_type">
                        {$feature.name}: <b>{$feature.value}</b>
                    </li>
                  {/if}
                {/foreach}
              </ul>
              {/if}
              {/block}
              {/block}
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 hidden-lg-up white-bgr box-shadow scroll height-400 accessories-container">
              <h4 class="head-title">{l s='Similar' d='Shop.Theme.Global'}</h4>            
                {if $accessories}
                <section class="product-accessories clearfix">
                  <div class="products row">
                    {foreach from=$accessories item="product_accessory" key="position"}
                      {block name='product_miniature'}
                      {include file='catalog/_partials/miniatures/accessory.tpl' product=$product_accessory position=$position
                      productClasses="col-xs-12 col-sm-6 col-lg-4 col-xl-3"}
                      {/block}
                    {/foreach}
                  </div>
                </section>
                {/if}
            </div>
          </div>
        </div>

        {block name='product_tabs'}
        <div class="tabs col-xs-12 p-0">
          <ul class="nav nav-tabs white-bgr box-shadow" role="tablist">
            {if $product.description}
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab"
                onclick="handleTabClick()"
                href="#description" role="tab" aria-controls="description" {if $product.description}
                aria-selected="true" {/if}>{l s='Description' d='Shop.Theme.Catalog'}</a>
            </li>
            {/if}
            <li class="nav-item">
              <a class="nav-link{if !$product.description} active js-product-nav-active{/if}"
                onclick="handleTabClick()"
                data-toggle="tab"
                href="#product-details" role="tab" aria-controls="product-details" {if !$product.description}
                aria-selected="true" {/if}>{l s='Technical data' d='Shop.Theme.Global'}</a>
            </li>

            {if $product.attachments}
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#attachments" 
                onclick="handleTabClick()"              
                role="tab" aria-controls="attachments">{l
                s='Attachments' d='Shop.Theme.Catalog'}</a>
            </li>
            {/if}
            {foreach from=$product.extraContent item=extra key=extraKey}
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#extra-{$extraKey}" role="tab"
                onclick="handleTabClick()"
                aria-controls="extra-{$extraKey}">{$extra.title}</a>
            </li>
            {/foreach}
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#product-contact" 
                onclick="handleTabClick()"
                role="tab"
                aria-controls="product-contact">{l s='Ask about the product' d='Shop.Theme.Global'}</a>
            </li>
            <li class="nav-item hidden">
              <a class="nav-link" data-toggle="tab" href="#extra-inspirations" 
              onclick="handleTabClick()"
               role="tab"
                aria-controls="extra-inspirations">{l s='Inspirations' d='Shop.Theme.Global'}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#extra-product-comments-list-header" 
              onclick="handleTabClick()"
              role="tab"
                aria-controls="extra-product-comments-list-header">{l s='Reviews' d='Shop.Theme.Global'}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#featured-products" 
              role="tab"
              onclick="handleTabClick()"
                aria-controls="extra-featured-products">{l s='Viewed products' d='Shop.Theme.Catalog'}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#similar" 
                onclick="handleTabClick()"
                role="tab"
                aria-controls="extra-similar">{l s='Similar' d='Shop.Theme.Global'}</a>
            </li>
          </ul>
          <div class="tab-content" id="tab-content">     
            <div class="tab-pane box-shadow fade in active" id="description" role="tabpanel">
                {block name='product_description'}
                  <div class="product-description">{$product.description nofilter}</div>
                {/block}
            </div>          
            {block name='product_details'}
              {include file='catalog/_partials/product-details.tpl'}
            {/block}
            {block name='product_attachments'}
              {if $product.attachments}
              <div class="tab-pane box-shadow fade in" id="attachments">
                <section class="product-attachments">
                  {foreach from=$product.attachments item=attachment}
                  <div class="attachment">
                    <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                      <h4>
                        {$attachment.name}
                      </h4>
                      <i class="fas fa-download"></i>
                    </a>
                  </div>
                  {/foreach}
                </section>
              </div>
              {/if}
            {/block}
            <div class="tab-pane box-shadow fade in" id="product-contact" role="tabpanel">
                <section class="product-rewievs_tab">
                    {widget name="contactform"}
                </section>
            </div>
            {foreach from=$product.extraContent item=extra key=extraKey}
              <div class="tab-data tab-{$extra.attr.class}" id="extra-{$extraKey}" {foreach
                $extra.attr as $key=> $val} {$key}="{$val}"{/foreach}>
                {$extra.content nofilter}
              </div>
            {/foreach}
            {hook h='displayFooterProduct' product=$product category=$category}
          </div>
        </div>
        {/block}
      </div>
    </div>

    {block name='product_accessories'}
    {/block}

    {block name='product_images_modal'}
    {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}

    {block name='page_footer_container'}
    <footer class="page-footer">
      {block name='page_footer'}
      {/block}
    </footer>
    {/block}
  </section>

  {/block}