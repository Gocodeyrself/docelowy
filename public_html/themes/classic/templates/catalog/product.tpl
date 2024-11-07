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
              {* {block name='product_description_short'}
              <div id="product-description-short-{$product.id}" class="product-description">
                {$product.description_short
                nofilter}</div>
              {/block} *}

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
                  <input type="hidden" name="id_customization" value="{$product.id_customization}"
                    id="product_customization_id" class="js-product-customization-id">

                  {block name='product_variants'}
                  {include file='catalog/_partials/product-variants.tpl'}
                  {/block}

                  {block name='product_pack'}
                  {if $packItems}
                  <section class="product-pack">
                    <p class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</p>
                    {foreach from=$packItems item="product_pack"}
                    {block name='product_miniature'}
                    {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack
                    showPackProductsPrice=$product.show_price}
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
                   <ul class="product-flags-custom product-flags js-product-flags">
                       {foreach from=$product.flags item=flag}
                            {if $flag.type != "new" && $flag.type != "discount" && $flag.type != "on-sale" && $flag.type != "out_of_stock"}
                                <li class="product-flag {$flag.type}">{$flag.label}</li>
                            {/if}
                        {/foreach}
                        {if Tools::generateFlag(10,$product.id)}
                            <li class="product-flag new">{l s='New' d="Shop.Theme.Global"}</li>
                        {/if}
                        {if Tools::generateFlag(11,$product.id)}
                            <li class="product-flag promotion">{l s='Special offer' d="Shop.Theme.Global"}</li>
                        {/if}
                        {if Tools::generateFlag(12,$product.id)}
                            <li class="product-flag bestseller">Bestseller</li>
                        {/if}
                    </ul>

                  {* Input to refresh product HTML removed, block kept for compatibility with themes *}
                  {block name='product_refresh'}{/block}
                </form>
                {/block}

                <div class="catalog_number">{l s="Condition" d='Shop.Theme.Catalog'} 
                {* <b itemprop="quantity"> *}
                {assign var="qFeature" value=Tools::getQuantityFromFeature($product.id_product)}
                {if $qFeature}
                  {l s="%count% items" sprintf=['%count%' => $qFeature ] d='Shop.Theme.Checkout'}
                {else}
                  {if $product.quantity < 0}
                    {l s="%count% items" sprintf=['%count%' => 0] d='Shop.Theme.Checkout'}
                  {else}
                    {l s="%count% items" sprintf=['%count%' => $product.quantity] d='Shop.Theme.Checkout'}
                    {* {l s="%count% items" sprintf=['%count%' => 'Stan do dyspozycji'] d='Shop.Theme.Checkout'} *}
                  {/if}
                {/if}
                {* </b> *}
                </div>

                  {block name='product_delivery'}
                  {include file='catalog/_partials/product-delivery.tpl'}
                  {/block}
              </div>

              {block name='hook_display_reassurance'}
              {hook h='displayReassurance'}
              {/block}

            </div>
          </div>

          <!-- Nowy box z informacjami o dostawie -->
<div class="col-md-12 white-bgr box-shadow mt-3 p-3">
<h4 class="box-title mb-3" style="color: #333; font-weight: bold;">{l s='Dostawa i Zwroty' d='Shop.Theme.Catalog'}</h4>
<div class="delivery-info">

  <!-- Ikona i czas dostawy -->
  <p class="d-flex align-items-center mb-2">
    <i class="material-icons mr-2" style="color: #007bff;">&#xE425;</i> <!-- Ikona zegara -->
    <span style="font-weight: bold; color: #333;">{l s='Dostawa w ciągu 2-4 dni' d='Shop.Theme.Catalog'}</span>
  </p>

  <!-- Ikona i darmowa dostawa -->
  <p class="d-flex align-items-center mb-2">
    <i class="material-icons mr-2" style="color: #28a745;">&#xE558;</i> <!-- Ikona ciężarówki -->
    <span style="font-weight: bold; color: #333;">{l s='Darmowa dostawa przy zakupach powyżej 450 zł' d='Shop.Theme.Catalog'}</span>
  </p>

  <!-- Ikona śledzenia paczki -->
  <p class="d-flex align-items-center mb-2">
    <i class="material-icons mr-2" style="color: #ffc107;">&#xE8B6;</i> <!-- Ikona śledzenia -->
    <span style="font-weight: bold; color: #333;">{l s='Śledzenie paczki dostępne po wysyłce' d='Shop.Theme.Catalog'}</span>
    <a href="https://sklep.cezos.com/pl/historia-zamowien" target="_blank" class="ml-2" style="color: #007bff; text-decoration: underline;">{l s='Sprawdź status zamówienia' d='Shop.Theme.Catalog'}</a>
  </p>

  <!-- Informacje o zwrotach i reklamacjach -->
  <p class="d-flex align-items-center mb-2">
    <i class="material-icons mr-2" style="color: #dc3545;">&#xE89C;</i> <!-- Ikona zwrotów -->
    <span style="font-weight: bold; color: #333;">{l s='Reklamacje i zwroty' d='Shop.Theme.Catalog'}</span>
    <a href="https://sklep.cezos.com/pl/content/20-reklamacjazwroty" target="_blank" class="ml-2" style="color: #007bff; text-decoration: underline;">{l s='Dowiedz się więcej' d='Shop.Theme.Catalog'}</a>
  </p>

  <!-- Dostępne metody wysyłki -->
  <h5 class="mt-4 mb-2" style="color: #333; font-weight: bold;">{l s='Dostępne metody wysyłki' d='Shop.Theme.Catalog'}</h5>
  <ul class="pl-3" style="color: #666;">
    <li>{l s='Odbiór osobisty: za darmo' d='Shop.Theme.Catalog'}</li>
    <li>{l s='Kurier GLS: od 22,76 zł brutto' d='Shop.Theme.Catalog'}</li>
    <li>{l s='Przesyłka Paczkomat® - standardowa: od 25,92 zł brutto' d='Shop.Theme.Catalog'}</li>
    <li>{l s='Inpost - Przesyłka kurierska: od 30,91 zł brutto' d='Shop.Theme.Catalog'}</li>
  </ul>
</div>
</div>
<!-- Koniec nowego boxa z informacjami o dostawie -->



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
