<?php
/* Smarty version 4.3.1, created on 2024-10-14 11:03:19
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670cde5739d8a6_95104050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf69842b897b4335b461d400027d99f5ceffed55' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/product.tpl',
      1 => 1728476914,
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
    'file:catalog/_partials/product-delivery.tpl' => 1,
    'file:catalog/_partials/miniatures/accessory.tpl' => 2,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_670cde5739d8a6_95104050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1527817836670cde5730ab35_28932527', 'head');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1756865527670cde5730f9c6_63326401', 'head_microdata_special');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1760894394670cde57310e40_29962411', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head'} */
class Block_1527817836670cde5730ab35_28932527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1527817836670cde5730ab35_28932527',
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
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
class Block_1756865527670cde5730f9c6_63326401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_1756865527670cde5730f9c6_63326401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_prices'} */
class Block_43702632670cde57311676_68855773 extends Smarty_Internal_Block
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
class Block_1825559398670cde57312c34_68655434 extends Smarty_Internal_Block
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
class Block_2100762123670cde57315f91_96963549 extends Smarty_Internal_Block
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
class Block_1219927485670cde57319383_20950363 extends Smarty_Internal_Block
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
class Block_1718721535670cde57316867_60003592 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1219927485670cde57319383_20950363', 'product_miniature', $this->tplIndex);
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
class Block_665855737670cde5731b044_34840999 extends Smarty_Internal_Block
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
class Block_125052585670cde5731b932_63287507 extends Smarty_Internal_Block
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
class Block_292267944670cde5731c1a1_93013556 extends Smarty_Internal_Block
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
class Block_174606352670cde57322e42_34484546 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_1783463707670cde57314c70_95103470 extends Smarty_Internal_Block
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
"
                    id="product_customization_id" class="js-product-customization-id">

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2100762123670cde57315f91_96963549', 'product_variants', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1718721535670cde57316867_60003592', 'product_pack', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_665855737670cde5731b044_34840999', 'product_discounts', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125052585670cde5731b932_63287507', 'product_add_to_cart', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_292267944670cde5731c1a1_93013556', 'product_additional_info', $this->tplIndex);
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
                        <?php if (Tools::generateFlag(10,$_smarty_tpl->tpl_vars['product']->value['id'])) {?>
                            <li class="product-flag new"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New','d'=>"Shop.Theme.Global"),$_smarty_tpl ) );?>
</li>
                        <?php }?>
                        <?php if (Tools::generateFlag(11,$_smarty_tpl->tpl_vars['product']->value['id'])) {?>
                            <li class="product-flag promotion"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special offer','d'=>"Shop.Theme.Global"),$_smarty_tpl ) );?>
</li>
                        <?php }?>
                        <?php if (Tools::generateFlag(12,$_smarty_tpl->tpl_vars['product']->value['id'])) {?>
                            <li class="product-flag bestseller">Bestseller</li>
                        <?php }?>
                    </ul>

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174606352670cde57322e42_34484546', 'product_refresh', $this->tplIndex);
?>

                </form>
                <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_delivery'} */
class Block_2001699368670cde57327c76_15407708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-delivery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_delivery'} */
/* {block 'hook_display_reassurance'} */
class Block_1690754697670cde57328612_74026230 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_1497918647670cde5732a128_41702295 extends Smarty_Internal_Block
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
class Block_1851901971670cde5732b7b3_81538784 extends Smarty_Internal_Block
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
class Block_837539072670cde5732b4c1_65373446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1851901971670cde5732b7b3_81538784', 'product_cover_thumbnails', $this->tplIndex);
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
class Block_1316788594670cde5732b195_18122649 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <section class="page-content" id="content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_837539072670cde5732b4c1_65373446', 'page_content', $this->tplIndex);
?>

              </section>
              <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_2080540438670cde5732e458_67222801 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_1495804855670cde5732c798_32010660 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <!-- <?php $_smarty_tpl->_assignInScope('psLogo', Configuration::get('PS_LOGO'));?> -->
              <!-- <img class="logo-product" src="/img/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['psLogo']->value, ENT_QUOTES, 'UTF-8');?>
" alt="Logo PrestaShop"> -->
              <div class="catalog_number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Catalog Number:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <b itemprop="sku"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['ean13'], ENT_QUOTES, 'UTF-8');?>
</b></div>
              <div class="catalog_number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Pdf'),$_smarty_tpl ) );?>
: <b itemprop="sku"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</b>
              </div>
              <h1 class="h1 product-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2080540438670cde5732e458_67222801', 'page_title', $this->tplIndex);
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
        <?php if (!($_smarty_tpl->tpl_vars['feature']->value['name'] == 'Producent' && $_smarty_tpl->tpl_vars['feature']->value['value'] == 'Cezos') && $_smarty_tpl->tpl_vars['feature']->value['id_feature'] != 52 && $_smarty_tpl->tpl_vars['feature']->value['id_feature'] != 69 && $_smarty_tpl->tpl_vars['feature']->value['id_feature'] != 70 && $_smarty_tpl->tpl_vars['feature']->value['id_feature'] != 71 && $_smarty_tpl->tpl_vars['feature']->value['name'] != 'Waga brutto') {?>
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
class Block_551031253670cde5732c486_68615392 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1495804855670cde5732c798_32010660', 'page_header', $this->tplIndex);
?>

              <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_miniature'} */
class Block_1142138420670cde5737e016_18855992 extends Smarty_Internal_Block
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
class Block_112953852670cde5738a418_05936468 extends Smarty_Internal_Block
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
class Block_1998288000670cde5738bbd7_17303260 extends Smarty_Internal_Block
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
class Block_52208761670cde5738ccd9_95203568 extends Smarty_Internal_Block
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
class Block_1700443581670cde5737ff92_70325138 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112953852670cde5738a418_05936468', 'product_description', $this->tplIndex);
?>

            </div>          
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1998288000670cde5738bbd7_17303260', 'product_details', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52208761670cde5738ccd9_95203568', 'product_attachments', $this->tplIndex);
?>

            <div class="tab-pane box-shadow fade in" id="product-contact" role="tabpanel">
                <section class="product-rewievs_tab">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

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
class Block_1175431448670cde57399a29_08464952 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_images_modal'} */
class Block_277512648670cde5739a488_87903698 extends Smarty_Internal_Block
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
class Block_982488848670cde5739bbb0_36597753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Footer content -->
      <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_924615850670cde5739b5e7_63217564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="page-footer">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_982488848670cde5739bbb0_36597753', 'page_footer', $this->tplIndex);
?>

    </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1760894394670cde57310e40_29962411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1760894394670cde57310e40_29962411',
  ),
  'product_prices' => 
  array (
    0 => 'Block_43702632670cde57311676_68855773',
  ),
  'product_customization' => 
  array (
    0 => 'Block_1825559398670cde57312c34_68655434',
  ),
  'product_buy' => 
  array (
    0 => 'Block_1783463707670cde57314c70_95103470',
  ),
  'product_variants' => 
  array (
    0 => 'Block_2100762123670cde57315f91_96963549',
  ),
  'product_pack' => 
  array (
    0 => 'Block_1718721535670cde57316867_60003592',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_1219927485670cde57319383_20950363',
    1 => 'Block_1497918647670cde5732a128_41702295',
    2 => 'Block_1142138420670cde5737e016_18855992',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_665855737670cde5731b044_34840999',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_125052585670cde5731b932_63287507',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_292267944670cde5731c1a1_93013556',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_174606352670cde57322e42_34484546',
  ),
  'product_delivery' => 
  array (
    0 => 'Block_2001699368670cde57327c76_15407708',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_1690754697670cde57328612_74026230',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1316788594670cde5732b195_18122649',
  ),
  'page_content' => 
  array (
    0 => 'Block_837539072670cde5732b4c1_65373446',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_1851901971670cde5732b7b3_81538784',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_551031253670cde5732c486_68615392',
  ),
  'page_header' => 
  array (
    0 => 'Block_1495804855670cde5732c798_32010660',
  ),
  'page_title' => 
  array (
    0 => 'Block_2080540438670cde5732e458_67222801',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_1700443581670cde5737ff92_70325138',
  ),
  'product_description' => 
  array (
    0 => 'Block_112953852670cde5738a418_05936468',
  ),
  'product_details' => 
  array (
    0 => 'Block_1998288000670cde5738bbd7_17303260',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_52208761670cde5738ccd9_95203568',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_1175431448670cde57399a29_08464952',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_277512648670cde5739a488_87903698',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_924615850670cde5739b5e7_63217564',
  ),
  'page_footer' => 
  array (
    0 => 'Block_982488848670cde5739bbb0_36597753',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43702632670cde57311676_68855773', 'product_prices', $this->tplIndex);
?>


            <div class="product-information">
              
              <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1825559398670cde57312c34_68655434', 'product_customization', $this->tplIndex);
?>

              <?php }?>

              <div class="product-actions js-product-actions">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1783463707670cde57314c70_95103470', 'product_buy', $this->tplIndex);
?>


                <div class="catalog_number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Condition",'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 
                                <?php $_smarty_tpl->_assignInScope('qFeature', Tools::getQuantityFromFeature($_smarty_tpl->tpl_vars['product']->value['id_product']));?>
                <?php if ($_smarty_tpl->tpl_vars['qFeature']->value) {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"%count% items",'sprintf'=>array('%count%'=>$_smarty_tpl->tpl_vars['qFeature']->value),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 0) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"%count% items",'sprintf'=>array('%count%'=>0),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

                  <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"%count% items",'sprintf'=>array('%count%'=>$_smarty_tpl->tpl_vars['product']->value['quantity']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

                                      <?php }?>
                <?php }?>
                                </div>

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2001699368670cde57327c76_15407708', 'product_delivery', $this->tplIndex);
?>

              </div>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1690754697670cde57328612_74026230', 'hook_display_reassurance', $this->tplIndex);
?>


            </div>
          </div>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1497918647670cde5732a128_41702295', 'product_miniature', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1316788594670cde5732b195_18122649', 'page_content_container', $this->tplIndex);
?>

            </div>
            <div class="col-md-7 position-unset">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_551031253670cde5732c486_68615392', 'page_header_container', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1142138420670cde5737e016_18855992', 'product_miniature', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1700443581670cde5737ff92_70325138', 'product_tabs', $this->tplIndex);
?>

      </div>
      




    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1175431448670cde57399a29_08464952', 'product_accessories', $this->tplIndex);
?>



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_277512648670cde5739a488_87903698', 'product_images_modal', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_924615850670cde5739b5e7_63217564', 'page_footer_container', $this->tplIndex);
?>

  </section>

  <?php
}
}
/* {/block 'content'} */
}
