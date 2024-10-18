<div class="main-product-delivery-container">
    <i class="fas fa-truck"></i>
    <div class="product-delivery-container">
        {assign var="toFreeDelivery" value=((float)Configuration::get('PS_SHIPPING_FREE_PRICE')-$cart.subtotals.products.amount)}
        <div class="h4">            
            {l s='Free Shipping' d='Shop.Theme.Global'} 
        </div>
        <div class="to-free-delivery {if $toFreeDelivery<=0}hidden{/if}">
            {l s='Missing in the cart:' d='Shop.Theme.Global'} 
            <span>{$toFreeDelivery|number_format:2:",":" "}</span> {$currency.sign}
        </div>
    </div>
</div>