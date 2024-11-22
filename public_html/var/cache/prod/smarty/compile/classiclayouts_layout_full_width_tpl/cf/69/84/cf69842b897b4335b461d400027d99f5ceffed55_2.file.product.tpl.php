<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:32:28
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740338c46abe8_24332712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf69842b897b4335b461d400027d99f5ceffed55' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/product.tpl',
      1 => 1732181717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/miniatures/accessory.tpl' => 2,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_6740338c46abe8_24332712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14285287786740338c437869_73198421', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11399607316740338c440230_67927663', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4635675066740338c4412f9_51340309', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head'} */
class Block_14285287786740338c437869_73198421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14285287786740338c437869_73198421',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<meta property="og:type" content="product">
<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
<meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
<meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
<meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
<meta property="product:price:amount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
<meta property="product:price:currency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
<meta property="product:weight:value" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
<meta property="product:weight:units" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<!-- JSON-LD Structured Data for Google -->
<?php echo '<script'; ?>
 type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Product",
  "name": "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html' )), ENT_QUOTES, 'UTF-8');?>
",
  "image": "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
",
  "description": "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],'html' )), ENT_QUOTES, 'UTF-8');?>
",
  "sku": "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['reference'],'html' )), ENT_QUOTES, 'UTF-8');?>
",
  "mpn": "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id'],'html' )), ENT_QUOTES, 'UTF-8');?>
",
  "brand": {
    "@type": "Brand",
    "name": "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'],'html' )), ENT_QUOTES, 'UTF-8');?>
"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.5",
    "reviewCount": "24"
  },
  "review": [
    {
      "@type": "Review",
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": "5"
      },
      "author": {
        "@type": "Person",
        "name": "John Doe"
      }
    }
  ],
  "offers": {
    "@type": "Offer",
    "url": "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
",
    "priceCurrency": "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
",
    "price": "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
",
    "priceValidUntil": "<?php echo htmlspecialchars((string) date('Y-m-d',strtotime('+1 year')), ENT_QUOTES, 'UTF-8');?>
",  // Ustal na rok do przodu
    "itemCondition": "http://schema.org/NewCondition",
    "availability": "http://schema.org/<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>InStock<?php } else { ?>OutOfStock<?php }?>",
    "seller": {
      "@type": "Organization",
      "name": "sklep.cezos.com",  // Zastąp rzeczywistą nazwą sklepu
      "description": "Oferujemy zasilacze o różnych mocach i napięciach, dostosowane do szerokiego zakresu zastosowań, od domowych instalacji po profesjonalne projekty komercyjne",  // Opis sprzedawcy
      "applicableCountry": {
        "@type": "Country",
        "name": "Poland"
      }
    },
    "hasMerchantReturnPolicy": {
      "@type": "MerchantReturnPolicy",
      "url": "https://sklep.cezos.com/pl/content/20-reklamacjazwroty",
      "returnPolicyCategory": "https://schema.org/Refund",  // Poprawiona wartość
      "merchantReturnDays": "30"
    },
    "shippingDetails": {
      "@type": "OfferShippingDetails",
      "shippingRate": {
        "@type": "MonetaryAmount",
        "value": "30.00",
        "currency": "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"
      },
      "shippingDestination": {
        "@type": "DefinedRegion",
        "addressCountry": {
          "@type": "Country",
          "name": "<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'pl') {?>Poland<?php } else { ?>International<?php }?>"
        }
      },
      "deliveryTime": {
        "@type": "ShippingDeliveryTime",
        "handlingTime": {
          "@type": "QuantitativeValue",
          "minValue": 1,
          "maxValue": 2,
          "unitCode": "d"
        },
        "transitTime": {
          "@type": "QuantitativeValue",
          "minValue": 2,
          "maxValue": 4,
          "unitCode": "d"
        }
      }
    }
  }
}
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
class Block_11399607316740338c440230_67927663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_11399607316740338c440230_67927663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_prices'} */
class Block_8054550946740338c4419e7_86157311 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_customization'} */
class Block_2027966196740338c442679_60154839 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
            <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_895882076740338c444db9_62404029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_1847607436740338c447902_23464493 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value,'showPackProductsPrice'=>$_smarty_tpl->tpl_vars['product']->value['show_price']), 0, true);
?>
                  <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_20049997646740338c445559_88396109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                <section class="product-pack">
                  <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1847607436740338c447902_23464493', 'product_miniature', $this->tplIndex);
?>

                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </section>
                <?php }?>
                <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_1771725346740338c4487e2_50379609 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_5876135116740338c448f69_04309995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_5047453196740338c449694_77351636 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_16697159256740338c44ce75_45464812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_5620813556740338c443e55_23725480 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" class="js-product-customization-id">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_895882076740338c444db9_62404029', 'product_variants', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20049997646740338c445559_88396109', 'product_pack', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1771725346740338c4487e2_50379609', 'product_discounts', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5876135116740338c448f69_04309995', 'product_add_to_cart', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5047453196740338c449694_77351636', 'product_additional_info', $this->tplIndex);
?>

                
                                <ul class="product-flags-custom product-flags js-product-flags">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] != "new" && $_smarty_tpl->tpl_vars['flag']->value['type'] != "discount" && $_smarty_tpl->tpl_vars['flag']->value['type'] != "on-sale" && $_smarty_tpl->tpl_vars['flag']->value['type'] != "out_of_stock") {?>
                      <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                    <?php }?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16697159256740338c44ce75_45464812', 'product_refresh', $this->tplIndex);
?>

              </form>
              <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_15006153536740338c4507b3_05216660 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_6750534596740338c454d14_60876034 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/accessory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value,'productClasses'=>"col-xs-12 col-sm-6 col-lg-4 col-xl-3"), 0, true);
?>
                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_cover_thumbnails'} */
class Block_5256123046740338c4560c9_10377675 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_17133192686740338c455e31_63269685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5256123046740338c4560c9_10377675', 'product_cover_thumbnails', $this->tplIndex);
?>

                <div class="scroll-box-arrows">
                  <i class="material-icons left">&#xE314;</i>
                  <i class="material-icons right">&#xE315;</i>
                </div>

                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13174057576740338c455b50_26561079 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <section class="page-content" id="content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17133192686740338c455e31_63269685', 'page_content', $this->tplIndex);
?>

              </section>
              <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_84611756740338c457bf9_82664181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_3888965616740338c456d03_75479827 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="catalog_number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Catalog Number:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <b itemprop="sku"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['ean13'], ENT_QUOTES, 'UTF-8');?>
</b></div>
              <div class="catalog_number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Pdf'),$_smarty_tpl ) );?>
: <b itemprop="sku"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</b>
              </div>
              <h1 class="h1 product-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84611756740338c457bf9_82664181', 'page_title', $this->tplIndex);
?>
</h1>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['flags']) {?>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['grouped_features']) {?>
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['grouped_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['name'] == 'Producent' && $_smarty_tpl->tpl_vars['feature']->value['value'] == 'Cezos') {?>
                        <li class="product_type highlight-cezos">
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
: <b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');?>
</b>
                        </li>
                        <?php break 1;?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['grouped_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                  <?php if (!($_smarty_tpl->tpl_vars['feature']->value['name'] == 'Producent' && $_smarty_tpl->tpl_vars['feature']->value['value'] == 'Cezos') && $_smarty_tpl->tpl_vars['feature']->value['id_feature'] != 52 && $_smarty_tpl->tpl_vars['feature']->value['id_feature'] != 69 && $_smarty_tpl->tpl_vars['feature']->value['id_feature'] != 70 && $_smarty_tpl->tpl_vars['feature']->value['id_feature'] != 71 && $_smarty_tpl->tpl_vars['feature']->value['id_feature'] != 7 && $_smarty_tpl->tpl_vars['feature']->value['name'] != 'Waga brutto' && $_smarty_tpl->tpl_vars['feature']->value['name'] != 'Gross Weight') {?>
                    <li class="product_type">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
: <b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');?>
</b>
                    </li>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
              <?php }?>
              <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_5009857386740338c456a76_65724890 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3888965616740338c456d03_75479827', 'page_header', $this->tplIndex);
?>

              <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_miniature'} */
class Block_15500035696740338c45ec92_69432261 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/accessory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value,'productClasses'=>"col-xs-12 col-sm-6 col-lg-4 col-xl-3"), 0, true);
?>
                      <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_description'} */
class Block_4717735946740338c463db0_03878852 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_5609702996740338c464457_16776077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_9747932286740338c464977_00964928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
              <div class="tab-pane box-shadow fade in" id="attachments">
                <section class="product-attachments">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
                  <div class="attachment">
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                      <h4>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>

                      </h4>
                      <i class="fas fa-download"></i>
                    </a>
                  </div>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </section>
              </div>
              <?php }?>
            <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_13512070736740338c45f7b5_82807690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="tabs col-xs-12 p-0">
          <ul class="nav nav-tabs white-bgr box-shadow" role="tablist">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab"
                onclick="handleTabClick()"
                href="#description" role="tab" aria-controls="description" <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                aria-selected="true" <?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
            </li>
            <?php }?>
            <li class="nav-item">
              <a class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active js-product-nav-active<?php }?>"
                onclick="handleTabClick()"
                data-toggle="tab"
                href="#product-details" role="tab" aria-controls="product-details" <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?>
                aria-selected="true" <?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Technical data','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#attachments" 
                onclick="handleTabClick()"              
                role="tab" aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
            </li>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tab"
                onclick="handleTabClick()"
                aria-controls="extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#product-contact" 
                onclick="handleTabClick()"
                role="tab"
                aria-controls="product-contact"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ask about the product','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
            </li>
            <li class="nav-item hidden">
              <a class="nav-link" data-toggle="tab" href="#extra-inspirations" 
              onclick="handleTabClick()"
               role="tab"
                aria-controls="extra-inspirations"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Inspirations','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#extra-product-comments-list-header" 
              onclick="handleTabClick()"
              role="tab"
                aria-controls="extra-product-comments-list-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#featured-products" 
              role="tab"
              onclick="handleTabClick()"
                aria-controls="extra-featured-products"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viewed products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#similar" 
                onclick="handleTabClick()"
                role="tab"
                aria-controls="extra-similar"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Similar','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
            </li>
          </ul>
          <div class="tab-content" id="tab-content">     
            <div class="tab-pane box-shadow fade in active" id="description" role="tabpanel">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4717735946740338c463db0_03878852', 'product_description', $this->tplIndex);
?>

            </div>          
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5609702996740338c464457_16776077', 'product_details', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9747932286740338c464977_00964928', 'product_attachments', $this->tplIndex);
?>

            <div class="tab-pane box-shadow fade in" id="product-contact" role="tabpanel">
                <section class="product-rewievs_tab">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGform','id'=>'13'),$_smarty_tpl ) );?>

                </section>
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
              <div class="tab-data tab-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

          </div>
        </div>
        <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_accessories'} */
class Block_18754208106740338c469770_14564843 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_images_modal'} */
class Block_13847328466740338c469a75_65160651 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_1620758286740338c46a099_95275680 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7059431526740338c469ef9_59308618 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="page-footer">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1620758286740338c46a099_95275680', 'page_footer', $this->tplIndex);
?>

    </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_4635675066740338c4412f9_51340309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4635675066740338c4412f9_51340309',
  ),
  'product_prices' => 
  array (
    0 => 'Block_8054550946740338c4419e7_86157311',
  ),
  'product_customization' => 
  array (
    0 => 'Block_2027966196740338c442679_60154839',
  ),
  'product_buy' => 
  array (
    0 => 'Block_5620813556740338c443e55_23725480',
  ),
  'product_variants' => 
  array (
    0 => 'Block_895882076740338c444db9_62404029',
  ),
  'product_pack' => 
  array (
    0 => 'Block_20049997646740338c445559_88396109',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_1847607436740338c447902_23464493',
    1 => 'Block_6750534596740338c454d14_60876034',
    2 => 'Block_15500035696740338c45ec92_69432261',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_1771725346740338c4487e2_50379609',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_5876135116740338c448f69_04309995',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_5047453196740338c449694_77351636',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_16697159256740338c44ce75_45464812',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_15006153536740338c4507b3_05216660',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_13174057576740338c455b50_26561079',
  ),
  'page_content' => 
  array (
    0 => 'Block_17133192686740338c455e31_63269685',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_5256123046740338c4560c9_10377675',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_5009857386740338c456a76_65724890',
  ),
  'page_header' => 
  array (
    0 => 'Block_3888965616740338c456d03_75479827',
  ),
  'page_title' => 
  array (
    0 => 'Block_84611756740338c457bf9_82664181',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_13512070736740338c45f7b5_82807690',
  ),
  'product_description' => 
  array (
    0 => 'Block_4717735946740338c463db0_03878852',
  ),
  'product_details' => 
  array (
    0 => 'Block_5609702996740338c464457_16776077',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_9747932286740338c464977_00964928',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_18754208106740338c469770_14564843',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_13847328466740338c469a75_65160651',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7059431526740338c469ef9_59308618',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1620758286740338c46a099_95275680',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="main">
  <meta content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

  <div class="row product-container js-product-container">
    <div class="col-lg-4 col-md-12" id="product_column_right">
      <div class="col-md-12 p-0 product-right-container">
        <div class="col-md-12 white-bgr box-shadow">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8054550946740338c4419e7_86157311', 'product_prices', $this->tplIndex);
?>


          <div class="product-information">

            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2027966196740338c442679_60154839', 'product_customization', $this->tplIndex);
?>

            <?php }?>

            <div class="product-actions js-product-actions">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5620813556740338c443e55_23725480', 'product_buy', $this->tplIndex);
?>


              <div class="catalog_number">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Stan",'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                <?php $_smarty_tpl->_assignInScope('qFeature', Tools::getQuantityFromFeature($_smarty_tpl->tpl_vars['product']->value['id_product']));?>
                <?php if ($_smarty_tpl->tpl_vars['qFeature']->value) {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"%count% szt.",'sprintf'=>array('%count%'=>$_smarty_tpl->tpl_vars['qFeature']->value),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 0) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"%count% szt.",'sprintf'=>array('%count%'=>0),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

                  <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"%count% szt.",'sprintf'=>array('%count%'=>$_smarty_tpl->tpl_vars['product']->value['quantity']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

                  <?php }?>
                <?php }?>
              </div>
            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15006153536740338c4507b3_05216660', 'hook_display_reassurance', $this->tplIndex);
?>

          </div>
        </div>

        <!-- New box with delivery and returns information -->
        <div class="col-md-12 white-bgr box-shadow accessories-container" style="padding: 10px 15px;">
          <h4 class="head-title mb-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery and Returns','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>

          <div class="delivery-info" style="padding: 5px 10px; line-height: 1.4;">

            <!-- Complaints and returns -->
            <p class="d-flex align-items-center mb-1">
              <i class="material-icons mr-1" style="color: #2d4156; font-size: 20px;">&#xE89C;</i>
              <span style="font-weight: bold; color: #2d4156;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Complaints and returns:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
              <a href="https://sklep.cezos.com/pl/content/20-reklamacjazwroty" target="_blank" class="ml-1" style="color: #007bff; text-decoration: underline;">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

              </a>
            </p>

            <!-- Package tracking -->
            <p class="d-flex align-items-center mb-1">
              <i class="material-icons mr-1" style="color: #2d4156; font-size: 20px;">&#xE8B6;</i>
              <span style="font-weight: bold; color: #2d4156;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Package tracking available after shipment:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
              <a href="https://sklep.cezos.com/pl/historia-zamowien" target="_blank" class="ml-1" style="color: #007bff; text-decoration: underline;">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check order status','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

              </a>
            </p>

            <!-- Delivery within -->
            <p class="d-flex align-items-center mb-1">
              <i class="material-icons mr-1" style="color: #2d4156; font-size: 20px;">&#xE425;</i>
              <span style="font-weight: bold; color: #2d4156;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery within:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
              <span style="color: #2d4156; margin-left: 5px;">2-4 days</span>
            </p>

            <!-- Available shipping methods -->
            <h5 class="mt-3 mb-1" style="color: #333; font-weight: bold;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available shipping methods:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h5>
            <ul class="pl-0" style="color: #666; margin-bottom: 0;">

              <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'en') {?>
                <!-- For English, only display international shipping method -->
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GLS Courier - International:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price dependent on destination country','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</li>
              <?php } else { ?>
                <!-- For other languages, display all shipping methods -->
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Odbiór w sklepie:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'za darmo','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Kurier GLS - Polska:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 30,00 zł</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GLS Parcel Shop:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 18,50 zł</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Przesyłka Paczkomat® - standardowa:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 25,92 zł</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'InPost Paczkomat (pobranie):','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 30,00 zł</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'InPost kurier:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 30,91 zł</li>
              <?php }?>
            </ul>
          </div>
        </div>
        <!-- End of new delivery and returns information box -->
  

          <div class="col-md-12 hidden-md-down white-bgr box-shadow scroll height-400 accessories-container">
            <h4 class="head-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>            
              <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
              <section class="product-accessories clearfix">
                <div class="products row">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6750534596740338c454d14_60876034', 'product_miniature', $this->tplIndex);
?>

                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
              </section>
              <?php }?>
          </div>
        </div>
      </div>

      <div class="col-lg-8 col-md-12" id="product_column_left">
        <!-- <div class="row"> -->
        <div class="col-md-12">
          <div class="row white-bgr box-shadow product-left-container">
            <div class="col-md-5 right-red-line">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13174057576740338c455b50_26561079', 'page_content_container', $this->tplIndex);
?>

            </div>
            <div class="col-md-7 position-unset">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5009857386740338c456a76_65724890', 'page_header_container', $this->tplIndex);
?>

            </div>
          </div>
          <div class="row">
            <div class="col-md-12 hidden-lg-up white-bgr box-shadow scroll height-400 accessories-container">
              <h4 class="head-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Similar','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>            
                <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                <section class="product-accessories clearfix">
                  <div class="products row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15500035696740338c45ec92_69432261', 'product_miniature', $this->tplIndex);
?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </section>
                <?php }?>
            </div>
          </div>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13512070736740338c45f7b5_82807690', 'product_tabs', $this->tplIndex);
?>

      </div>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18754208106740338c469770_14564843', 'product_accessories', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13847328466740338c469a75_65160651', 'product_images_modal', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7059431526740338c469ef9_59308618', 'page_footer_container', $this->tplIndex);
?>

  </section>

  <?php
}
}
/* {/block 'content'} */
}
