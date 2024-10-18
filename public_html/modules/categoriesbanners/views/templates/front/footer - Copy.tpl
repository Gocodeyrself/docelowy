{if $cat_banner}
{foreach from=$cat_banner item=banner}
<script type="text/javascript">
 
 



//var banner_html='<{if $category_banners_product_tag}{$category_banners_product_tag|escape:'htmlall':'UTF-8'} {else}article{/if} class="product-miniature js-product-miniature {$banner.class}" data-id-product="{$banner.after_nu_product}" data-id-product-attribute="{$banner.after_nu_product}" >';
//banner_html +='<div class="thumbnail-container">';
//banner_html +='<a {if {$banner.other}} href="{$banner.other}" {/if} ><img style="{$banner.css}" src="{$img_url}modules/categoriesbanners/views/img/{$banner.image}">{$banner.comment}</a>';
//banner_html +='</div></{if $category_banners_product_tag}{$category_banners_product_tag|escape:'htmlall':'UTF-8'}{else}article{/if}>';

 
 
 
var banner_html='<li class="ajax_block_product col-sp-6 col-xs-6 col-sm-6 col-md-4 first-in-line first-item-of-tablet-line first-item-of-mobile-line {$banner.class}">';

banner_html +='<div class="product-container"><div class="row"><div class="left-block ">';
banner_html +='<a {if {$banner.other}} href="{$banner.other}" {/if} ><img style="{$banner.css}" src="{$img_url}/modules/categoriesbanners/views/img/{$banner.image}">{$banner.comment}</a>';
banner_html +='</div><div class="center-block" ><p class="product-desc">{$banner.comment}</p></div><div class="right-block"><div class="right-block-content row"><div class="product-flags"></div><div class="functional-buttons clearfix col-sm-12">.</div></div></div></div></div></li>';
var after_product={$banner.after_nu_product};
var col_class='{$banner.class}';


var rowsc=$( ".product_list > .ajax_block_product:nth-child("+after_product+")");
rowsc.before( banner_html );
//rowsc.addClass(col_class);


var rowsc=$( ".product_list > .product-miniature:nth-child("+after_product+")");
rowsc.before( banner_html );


</script>
{/foreach}
</div>
<!-- categorybannermodule-->
{literal}
<style>
.first-in-line {
    clear: none !important;
}

@media (min-width: 320px) and (max-width: 1020px) {
.doubleimg {
    width: 100%;
}
.doubleimg img {
    width: 100% !important;
}
}

/*
@media (min-width: 414px) and (max-width: 736px){
.doubleimg img {
    min-height: 270px !important;
}
}

@media (min-width: 320px) and (max-width: 568px){
.product_list .doubleimg img {
    height: 200px !important;
}
}

@media (min-width: 375px) and (max-width: 667px){
#center_column .doubleimg img {
    height: 245px !important;
}
}

@media (min-width: 320px) and (max-width: 480px) {
 .doubleimg img {
    height: 275px;
}
}
*/


</style>{/literal}
{/if}