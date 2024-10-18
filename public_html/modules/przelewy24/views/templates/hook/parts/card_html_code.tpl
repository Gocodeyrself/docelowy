{*
* @license https://www.gnu.org/licenses/lgpl-3.0.en.html
*}

<div
        id="p24-card-config-element"
        data-ajaxurl="{$p24_charge_card_url|escape:'html':'UTF-8'}"
        data-pagetype="{$p24_page_type|escape:'html':'UTF-8'}"
        data-cartid="{$p24_cart_id|escape:'html':'UTF-8'}"
        data-ids="{$p24_card_ids_string|escape:'html':'UTF-8'}"
        data-success-url="{$p24_success_url|escape:'html':'UTF-8'}"
        data-failure-url="{$p24_failure_url|escape:'html':'UTF-8'}"
        data-terms-confirm-required="{if $p24_card_needs_term_accept}true{else}false{/if}"
></div>

<div style="display: none;">
    <div>
        <div id="p24-card-section" class="p24-inside-section">
            <h1>{l s='Register card and payment' mod='przelewy24'}</h1>
            {if $p24_card_needs_term_accept}
                <p>
                    <input type="checkbox" name="terms" id="p24-card-regulation-accept" value="1">
                    {l s='Please accept' mod='przelewy24'}
                    <a href="http://www.przelewy24.pl/regulamin.htm" target="_blank">
                        {l s='the Przelewy24 Terms' mod='przelewy24'}
                    </a>
                </p>
            {/if}
            <div
                id="P24FormContainer"
                data-successCallback="payInShopSuccess"
                data-failureCallback="payInShopFailure"
                data-cartid="{$p24_cart_id|escape:'html':'UTF-8'}"
                data-dictionary='{
                    "cardHolderLabel":"{l s='Name and surname' mod='przelewy24'}",
                    "cardNumberLabel":"{l s='Card number' mod='przelewy24'}",
                    "cvvLabel":"{l s='cvv' mod='przelewy24'}",
                    "expDateLabel":"{l s='Expired date' mod='przelewy24'}",
                    "payButtonCaption":"{l s='Pay by card' mod='przelewy24'}",
                    "description":"{l s='Register card and payment' mod='przelewy24'}",
                    "threeDSAuthMessage":"{l s='Click to redirect to 3ds payment.' mod='przelewy24'}",
                    "registerCardLabel":"{l s='Register card' mod='przelewy24'}"
                }'
            >
            </div>
            <div class="p24-card-loader"></div>
        </div>
    </div>
</div>
