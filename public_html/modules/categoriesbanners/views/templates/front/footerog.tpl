{if $cat_banner}
<script type="text/javascript" src="{$img_url}themes/core.js" ></script>
{foreach from=$cat_banner item=banner}
<script type="text/javascript">  


var banner_html='<{if $category_banners_product_tag}{$category_banners_product_tag|escape:'htmlall':'UTF-8'} {else}{$banner_div_tag}{/if} class="{$category_banners_product_class_without_dot} {$banner_div_class} {$banner.class}" data-id-product="{$banner.after_nu_product}" data-id-product-attribute="{$banner.after_nu_product}" >';
banner_html +='<div class="thumbnail-containesr">';
banner_html +='<a {if {$banner.other}} href="{$banner.other}" {/if} ><img class="bannerimg_{$banner.id}"  src="{$img_url}modules/categoriesbanners/views/img/{$banner.image}" alt="{$banner.comment}" title="{$banner.comment}"></a>';
banner_html +='</div></{if $category_banners_product_tag}{$category_banners_product_tag|escape:'htmlall':'UTF-8'}{else}{$banner_div_tag}{/if}>';



var after_product={$banner.after_nu_product};
var col_class='{$banner.class}';

{if $category_banners_id}
var rowsc=$( "{$category_banners_id|escape:'htmlall':'UTF-8'} {$category_banners_product_class|escape:'htmlall':'UTF-8'}").eq(after_product - 1);
{else}
var rowsc=$( "{$parent_id_class|escape:'htmlall':'UTF-8'} {$banner_div_tag|escape:'htmlall':'UTF-8'}").eq(after_product - 1);;
{/if}

rowsc.before( banner_html );



</script>

<style>
    .bannerimg_{$banner.id}{
{$banner.css}
    }
</style>
{/foreach}
</div>
<!-- categorybannermodule-->
{literal}
<style>
article.product-miniature.js-product-miniature {
    overflow: hidden;
}


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



</style>{/literal}
{/if}