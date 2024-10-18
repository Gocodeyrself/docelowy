<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:12:34
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b632055a79_78449243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b2443e3f4bf25e7c195b1aa97e2fae1fed69f24' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1721907742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-delivery.tpl' => 1,
    'file:catalog/_partials/product-flags.tpl' => 2,
  ),
),false)) {
function content_66b4b632055a79_78449243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '23272449566b4b631f39fe7_23402007';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173235766766b4b631f3aed0_38183922', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_71314594666b4b631f3e278_35220554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
              <picture>
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                <img
                  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
                  loading="lazy"
                  data-full-size-image-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                  height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                />
              </picture>
            </a>
          <?php } else { ?>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
              <picture>
                <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                <img
                  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  loading="lazy"
                  width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                  height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                />
              </picture>
            </a>
          <?php }?>
        <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_203757638166b4b63200e4f2_86804316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <p class="product-index pl-0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Catalog Number:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['ean13'], ENT_QUOTES, 'UTF-8');?>
</p>
              <h2 class="h3 product-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h2>
          <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_features'} */
class Block_51218819266b4b632011327_02490027 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="product-long-features">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['manufacturer_name']) {?>
                <li><dl><dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Brand",'d'=>"Shop.Theme.Catalog"),$_smarty_tpl ) );?>
</dt><dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'], ENT_QUOTES, 'UTF-8');?>
</dd></dl></li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['features']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['feature']->value['name'] != 'Waga brutto' && $_smarty_tpl->tpl_vars['feature']->value['name'] != 'Szerokość brutto' && $_smarty_tpl->tpl_vars['feature']->value['name'] != 'Głębokość brutto' && $_smarty_tpl->tpl_vars['feature']->value['name'] != 'Wysokość brutto') {?>
                    <li><dl><dt><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
</dt><dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');?>
</dd></dl></li>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>
            </ul>
          <?php
}
}
/* {/block 'product_features'} */
/* {block 'product_delivery'} */
class Block_180377955766b4b63201a096_36603071 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-delivery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_delivery'} */
/* {block 'product_price_and_shipping'} */
class Block_121708902166b4b632019299_64435956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping">
              <div class="price-container-miniature">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180377955766b4b63201a096_36603071', 'product_delivery', $this->tplIndex);
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


                <span class="price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
                  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                  <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

                  <?php } else { ?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == "category") {
echo htmlspecialchars((string) Tools::getUnit($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');
}?>
                </span>
                
                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                  <span class="regular-price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                    <span class="discount-percentage discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
                    <span class="discount-amount discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <?php }?>
                <?php }?>

              </div>

              <div class="cart-flag-container-miniature">
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <a 
            class="
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'] || $_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>
              disabled
            <?php }?> quick-view js-quick-view btn btn-primary" href="#" data-link-action="quickview"><i class="material-icons shopping-cart" aria-hidden="true">shopping_cart</i>
            
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'] || $_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              <?php }?>
            </a>
              </div>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

            </div>
          <?php }?>
        <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_thumbnail'} */
class Block_36438530866b4b63202d3a1_78641589 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
              <picture>
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                <img
                  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
                  loading="lazy"
                  data-full-size-image-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                  height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                />
              </picture>
            </a>
          <?php } else { ?>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
              <picture>
                <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                <img
                  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  loading="lazy"
                  width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                  height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                />
              </picture>
            </a>
          <?php }?>
        <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_126915868366b4b632040068_02876798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p class="product-index pl-0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Catalog Number:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['ean13'], ENT_QUOTES, 'UTF-8');?>
</p>
            <h2 class="h3 product-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h2>

            <ul class="product-short-features">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['features']) {?>
                <?php $_smarty_tpl->_assignInScope('count', 0);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['feature']->value['name'] != 'Waga brutto' && $_smarty_tpl->tpl_vars['feature']->value['name'] != 'Szerokość brutto' && $_smarty_tpl->tpl_vars['feature']->value['name'] != 'Głębokość brutto' && $_smarty_tpl->tpl_vars['feature']->value['name'] != 'Wysokość brutto') {?>
                    <?php if ($_smarty_tpl->tpl_vars['count']->value < 3) {?>
                      <li><dl><dt><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
</dt><dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');?>
</dd></dl></li>
                      <?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
                    <?php }?>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>
            </ul>
        <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_14583646366b4b632046862_97186964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping">
              <div class="price-container-miniature <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>product-miniature-with-discount<?php }?>">
                <span class="price-whithout-tax hidden"><?php echo htmlspecialchars((string) number_format(($_smarty_tpl->tpl_vars['product']->value['price_amount']/1.23),2,",",''), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
<p class="price-sign"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Price",'d'=>"Shop.Theme.Catalog"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"tax excl.",'d'=>"Shop.Theme.Checkout"),$_smarty_tpl ) );?>
</p></span>


                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


                <span class="price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
                  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                  <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

                  <?php } else { ?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == "category") {
echo htmlspecialchars((string) Tools::getUnit($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');
}?>
                  <p class="price-sign"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Price",'d'=>"Shop.Theme.Catalog"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"tax incl.",'d'=>"Shop.Theme.Checkout"),$_smarty_tpl ) );?>
</p>
                </span>

                                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                  <span class="regular-price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
 <p class="price-sign"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Price",'d'=>"Shop.Theme.Catalog"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"tax incl.",'d'=>"Shop.Theme.Checkout"),$_smarty_tpl ) );?>
</p><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == "category") {
echo htmlspecialchars((string) Tools::getUnit($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');
}?>
                  </span>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                    <span class="discount-percentage discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
                    <span class="discount-amount discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <?php }?>
                <?php }?>
              </div>
              <a 
            class="
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'] || $_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>
              disabled
            <?php }?> quick-view js-quick-view btn btn-primary" href="#" data-link-action="quickview"><i class="material-icons shopping-cart" aria-hidden="true">shopping_cart</i></a>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

            </div>
          <?php }?>
        <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_reviews'} */
class Block_106042505566b4b632054687_77555300 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_miniature_item'} */
class Block_173235766766b4b631f3aed0_38183922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_173235766766b4b631f3aed0_38183922',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_71314594666b4b631f3e278_35220554',
    1 => 'Block_36438530866b4b63202d3a1_78641589',
  ),
  'product_name' => 
  array (
    0 => 'Block_203757638166b4b63200e4f2_86804316',
    1 => 'Block_126915868366b4b632040068_02876798',
  ),
  'product_features' => 
  array (
    0 => 'Block_51218819266b4b632011327_02490027',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_121708902166b4b632019299_64435956',
    1 => 'Block_14583646366b4b632046862_97186964',
  ),
  'product_delivery' => 
  array (
    0 => 'Block_180377955766b4b63201a096_36603071',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_106042505566b4b632054687_77555300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == "category") {?>
<div class="js-product product<?php if (!empty($_smarty_tpl->tpl_vars['productClasses']->value)) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productClasses']->value, ENT_QUOTES, 'UTF-8');
}?> js-product2 long_product">
  <article class="product-miniature js-product-miniature box-shadow" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="thumbnail-container row">
      <div class="thumbnail-left col-md-3">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71314594666b4b631f3e278_35220554', 'product_thumbnail', $this->tplIndex);
?>

      </div>
      <div class="thumbnail-center col-md-6">
        <div class="product-description">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203757638166b4b63200e4f2_86804316', 'product_name', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51218819266b4b632011327_02490027', 'product_features', $this->tplIndex);
?>

        </div>
      </div>
      <div class="thumbnail-right col-md-3">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121708902166b4b632019299_64435956', 'product_price_and_shipping', $this->tplIndex);
?>

      </div>
    </div>
  </article>
</div>
<?php }?>
<div class="js-product product<?php if (!empty($_smarty_tpl->tpl_vars['productClasses']->value)) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productClasses']->value, ENT_QUOTES, 'UTF-8');
}?> short_product">
  <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36438530866b4b63202d3a1_78641589', 'product_thumbnail', $this->tplIndex);
?>

      </div>

      <div class="product-description">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126915868366b4b632040068_02876798', 'product_name', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14583646366b4b632046862_97186964', 'product_price_and_shipping', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106042505566b4b632054687_77555300', 'product_reviews', $this->tplIndex);
?>

      </div>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
  </article>
</div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
