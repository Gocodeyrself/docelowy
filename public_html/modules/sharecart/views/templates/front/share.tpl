<h1>Shared Cart</h1>

<ul>
    {foreach from=$products item=product}
        <li>
            <strong>{$product.name}</strong> - Quantity: {$product.cart_quantity}
        </li>
    {/foreach}
</ul>
