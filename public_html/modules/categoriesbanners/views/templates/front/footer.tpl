{if $cat_banner}
<script type="text/javascript" src="{$img_url}themes/core.js" ></script>
{foreach from=$cat_banner item=banner}
<script type="text/javascript">  

function displaySingleBanner() {
var banner_html='<div class="banner-wrapper">';
banner_html += '<div class="banner-content">';
banner_html += '<div class="thumbnail-container">';
banner_html += '<a href="{$banner.other}" {if $category_banners_product_tag}{/if}><img class="banner-img" src="{$img_url}modules/categoriesbanners/views/img/{$banner.image}" alt="{$banner.comment}" title="{$banner.comment}"></a>';
banner_html += '</div>';
banner_html += '<div class="banner-text">';
banner_html += '<p>{$banner.comment}</p>';
banner_html += '</div>';
banner_html += '</div>';
banner_html += '</div>';


var after_product={$banner.after_nu_product};
var col_class='{$banner.class}';

{if $category_banners_id}
var rowsc=$( "{$category_banners_id|escape:'htmlall':'UTF-8'} {$category_banners_product_class|escape:'htmlall':'UTF-8'}").eq(after_product - 1);
{else}
var rowsc=$( "{$parent_id_class|escape:'htmlall':'UTF-8'} {$banner_div_tag|escape:'htmlall':'UTF-8'}").eq(after_product - 1);;
{/if}

rowsc.before( banner_html );
}


</script>

<style>
    .bannerimg_{$banner.id}{
{$banner.css}
    }
</style>
{/foreach}
<!-- categorybannermodule-->
{literal}
<style>
article.product-miniature.js-product-miniature {
    overflow: hidden;
    display: block;
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



.banner-wrapper {
  display: flex;
  justify-content: center; /* Centrowanie baneru */
  margin-bottom: 20px; /* Dostosuj według potrzeb */
}

.banner-content {
  display: flex;
  align-items: center;
  background-color: white;
  border-radius: 10px; /* Zaokrąglone rogi */
  padding: 15px; /* Wewnętrzne odstępy */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtelny cień */
  max-width: 100%;
  margin: 15px;
}

.thumbnail-container {
  flex: 0 0 auto; /* Zapobiega rozciąganiu obrazu */
  margin-right: 20px; /* Odstęp między obrazem a tekstem */
}

.banner-img {
  max-width: 100%;
  height: auto;
  border-radius: 10px; /* Zaokrąglone rogi obrazu */
}

.banner-text {
  flex: 1; /* Pozwala tekstowi zająć pozostałą przestrzeń */
}

.banner-text p {
  font-size: 14px; /* Dostosuj rozmiar czcionki według potrzeb */
  margin: 0; /* Dostosuj margines według potrzeb */
}
</style>
{/literal}
{/if}