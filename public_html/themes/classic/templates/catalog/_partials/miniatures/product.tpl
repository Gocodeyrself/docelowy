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
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{block name='product_miniature_item'}
{if $page.page_name=="category"}
<div class="js-product product{if !empty($productClasses)} {$productClasses}{/if} js-product2 long_product">
  <article class="product-miniature js-product-miniature box-shadow" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
    <div class="thumbnail-container row">
      <div class="thumbnail-left col-md-3">
        {block name='product_thumbnail'}
          {if $product.cover}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
              <picture>
                {if !empty($product.cover.bySize.home_default.sources.avif)}<source srcset="{$product.cover.bySize.home_default.sources.avif}" type="image/avif">{/if}
                {if !empty($product.cover.bySize.home_default.sources.webp)}<source srcset="{$product.cover.bySize.home_default.sources.webp}" type="image/webp">{/if}
                <img
                  src="{$product.cover.bySize.home_default.url}"
                  alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
                  loading="lazy"
                  data-full-size-image-url="{$product.cover.large.url}"
                  width="{$product.cover.bySize.home_default.width}"
                  height="{$product.cover.bySize.home_default.height}"
                />
              </picture>
            </a>
          {else}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
              <picture>
                {if !empty($urls.no_picture_image.bySize.home_default.sources.avif)}<source srcset="{$urls.no_picture_image.bySize.home_default.sources.avif}" type="image/avif">{/if}
                {if !empty($urls.no_picture_image.bySize.home_default.sources.webp)}<source srcset="{$urls.no_picture_image.bySize.home_default.sources.webp}" type="image/webp">{/if}
                <img
                  src="{$urls.no_picture_image.bySize.home_default.url}"
                  loading="lazy"
                  width="{$urls.no_picture_image.bySize.home_default.width}"
                  height="{$urls.no_picture_image.bySize.home_default.height}"
                />
              </picture>
            </a>
          {/if}
        {/block}
      </div>
      <div class="thumbnail-center col-md-6">
        <div class="product-description">
          {block name='product_name'}
              <p class="product-index pl-0">{l s='Catalog Number:' d='Shop.Theme.Global'} {$product.ean13}</p>
              <h2 class="h3 product-title"><a href="{$product.url}" content="{$product.url}">{$product.name}</a></h2>
          {/block}
          {block name='product_features'}
            <ul class="product-long-features">
              {if $product.manufacturer_name}
                <li><dl><dt>{l s="Brand" d="Shop.Theme.Catalog"}</dt><dd>{$product.manufacturer_name}</dd></dl></li>
              {/if}
              {if $product.features}
                {foreach from=$product.features item=feature}
                  {if $feature.name != 'Waga brutto' && $feature.name != 'Szerokość brutto' && $feature.name != 'Głębokość brutto' && $feature.name != 'Wysokość brutto'}
                    <li><dl><dt>{$feature.name}</dt><dd>{$feature.value}</dd></dl></li>
                  {/if}
                {/foreach}
              {/if}
            </ul>
          {/block}
        </div>
      </div>
      <div class="thumbnail-right col-md-3">
        {block name='product_price_and_shipping'}
          {if $product.show_price}
            <div class="product-price-and-shipping">
              <div class="price-container-miniature">

                {block name='product_delivery'}
                  {include file='catalog/_partials/product-delivery.tpl'}
                {/block}
                {hook h='displayProductPriceBlock' product=$product type="before_price"}

                <span class="price" aria-label="{l s='Price' d='Shop.Theme.Catalog'}">
                  {capture name='custom_price'}{hook h='displayProductPriceBlock' product=$product type='custom_price' hook_origin='products_list'}{/capture}
                  {if '' !== $smarty.capture.custom_price}
                    {$smarty.capture.custom_price nofilter}
                  {else}
                    {$product.price}
                  {/if}
                  {if $page.page_name=="category"}{Tools::getUnit($product.id)}{/if}
                </span>
                
                {if $product.has_discount}
                  {hook h='displayProductPriceBlock' product=$product type="old_price"}

                  <span class="regular-price" aria-label="{l s='Regular price' d='Shop.Theme.Catalog'}">{$product.regular_price}</span>
                  {if $product.discount_type === 'percentage'}
                    <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
                  {elseif $product.discount_type === 'amount'}
                    <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
                  {/if}
                {/if}

              </div>

              <div class="cart-flag-container-miniature">
                {include file='catalog/_partials/product-flags.tpl'}
                <a 
            class="
            {if !$product.add_to_cart_url || $product.quantity < 1}
              disabled
            {/if} quick-view js-quick-view btn btn-primary" href="#" data-link-action="quickview"><i class="material-icons shopping-cart" aria-hidden="true">shopping_cart</i>
            
            {if !$product.add_to_cart_url || $product.quantity < 1}
              {$product.availability_message}
            {else}
              {l s='Add to cart' d='Shop.Theme.Actions'}
              {/if}
            </a>
              </div>
              {hook h='displayProductPriceBlock' product=$product type='unit_price'}

              {hook h='displayProductPriceBlock' product=$product type='weight'}
            </div>
          {/if}
        {/block}
      </div>
    </div>
  </article>
</div>
{/if}
<div class="js-product product{if !empty($productClasses)} {$productClasses}{/if} short_product">
  <article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        {block name='product_thumbnail'}
          {if $product.cover}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
              <picture>
                {if !empty($product.cover.bySize.home_default.sources.avif)}<source srcset="{$product.cover.bySize.home_default.sources.avif}" type="image/avif">{/if}
                {if !empty($product.cover.bySize.home_default.sources.webp)}<source srcset="{$product.cover.bySize.home_default.sources.webp}" type="image/webp">{/if}
                <img
                  src="{$product.cover.bySize.home_default.url}"
                  alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
                  loading="lazy"
                  data-full-size-image-url="{$product.cover.large.url}"
                  width="{$product.cover.bySize.home_default.width}"
                  height="{$product.cover.bySize.home_default.height}"
                />
              </picture>
            </a>
          {else}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
              <picture>
                {if !empty($urls.no_picture_image.bySize.home_default.sources.avif)}<source srcset="{$urls.no_picture_image.bySize.home_default.sources.avif}" type="image/avif">{/if}
                {if !empty($urls.no_picture_image.bySize.home_default.sources.webp)}<source srcset="{$urls.no_picture_image.bySize.home_default.sources.webp}" type="image/webp">{/if}
                <img
                  src="{$urls.no_picture_image.bySize.home_default.url}"
                  loading="lazy"
                  width="{$urls.no_picture_image.bySize.home_default.width}"
                  height="{$urls.no_picture_image.bySize.home_default.height}"
                />
              </picture>
            </a>
          {/if}
        {/block}
      </div>

      <div class="product-description">
        {block name='product_name'}
            <p class="product-index pl-0">{l s='Catalog Number:' d='Shop.Theme.Global'} {$product.ean13}</p>
            <h2 class="h3 product-title"><a href="{$product.url}" content="{$product.url}">{$product.name}</a></h2>

            <ul class="product-short-features">
              {if $product.features}
                {assign var="count" value=0}
                {foreach from=$product.features item=feature}
                  {if $feature.name != 'Waga brutto' && $feature.name != 'Szerokość brutto' && $feature.name != 'Głębokość brutto' && $feature.name != 'Wysokość brutto'}
                    {if $count < 3}
                      <li><dl><dt>{$feature.name}</dt><dd>{$feature.value}</dd></dl></li>
                      {assign var="count" value=$count+1}
                    {/if}
                  {/if}
                {/foreach}
              {/if}
            </ul>
        {/block}

        {block name='product_price_and_shipping'}
          {if $product.show_price}
            <div class="product-price-and-shipping">
              <div class="price-container-miniature {if $product.has_discount}product-miniature-with-discount{/if}">
                <span class="price-whithout-tax hidden">{number_format(($product.price_amount / 1.23),2,",","")} {$currency.sign}<p class="price-sign">{l s="Price" d="Shop.Theme.Catalog"} {l s="tax excl." d="Shop.Theme.Checkout"}</p></span>


                {hook h='displayProductPriceBlock' product=$product type="before_price"}

                <span class="price" aria-label="{l s='Price' d='Shop.Theme.Catalog'}">
                  {capture name='custom_price'}{hook h='displayProductPriceBlock' product=$product type='custom_price' hook_origin='products_list'}{/capture}
                  {if '' !== $smarty.capture.custom_price}
                    {$smarty.capture.custom_price nofilter}
                  {else}
                    {$product.price}
                  {/if}
                  {if $page.page_name=="category"}{Tools::getUnit($product.id)}{/if}
                  <p class="price-sign">{l s="Price" d="Shop.Theme.Catalog"} {l s="tax incl." d="Shop.Theme.Checkout"}</p>
                </span>

                                {if $product.has_discount}
                  {hook h='displayProductPriceBlock' product=$product type="old_price"}

                  <span class="regular-price" aria-label="{l s='Regular price' d='Shop.Theme.Catalog'}">{$product.regular_price} <p class="price-sign">{l s="Price" d="Shop.Theme.Catalog"} {l s="tax incl." d="Shop.Theme.Checkout"}</p>{if $page.page_name=="category"}{Tools::getUnit($product.id)}{/if}
                  </span>
                  {if $product.discount_type === 'percentage'}
                    <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
                  {elseif $product.discount_type === 'amount'}
                    <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
                  {/if}
                {/if}
              </div>
              <a 
            class="
            {if !$product.add_to_cart_url || $product.quantity < 1}
              disabled
            {/if} quick-view js-quick-view btn btn-primary" href="#" data-link-action="quickview"><i class="material-icons shopping-cart" aria-hidden="true">shopping_cart</i></a>

              {hook h='displayProductPriceBlock' product=$product type='unit_price'}

              {hook h='displayProductPriceBlock' product=$product type='weight'}
            </div>
          {/if}
        {/block}

        {block name='product_reviews'}
          {hook h='displayProductListReviews' product=$product}
        {/block}
      </div>

      {include file='catalog/_partials/product-flags.tpl'}
    </div>
  </article>
</div>
{/block}
