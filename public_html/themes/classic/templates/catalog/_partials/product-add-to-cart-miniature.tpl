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
<div class="product-add-to-cart js-product-add-to-cart">
  {if !$configuration.is_catalog}

    {block name='product_quantity'}
      <div class="product-quantity">

        <div class="add">
          <button
            class="add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            onclick="addToCartHandler()"
            {if !$product.add_to_cart_url || $product.quantity < 1}
              disabled
            {/if}
          >
            <i class="material-icons shopping-cart">&#xE547;</i>
            Dodaj do koszyka
          </button>
        </div>

        <div class="qty qty-miniature">
          <i class="fa-solid fa-plus" 
            onclick="handleCartBtn(event, true)"
            ></i>
          <input
            type="number"
            name="qty"
            id="quantity_wanted"
            inputmode="numeric"
            pattern="[0-9]*"
            {if $product.quantity_wanted}
              value="{$product.quantity_wanted}"
              min="{$product.minimal_quantity}"
            {else}
              value="1"
              min="1"
            {/if}
            class="input-group"
            aria-label="{l s='Quantity' d='Shop.Theme.Actions'}"
          >
        <i class="fa-solid fa-minus"
            onclick="handleCartBtn(event, false)"></i>
        </div>
      </div>
    {/block}    
  {/if}
</div>
