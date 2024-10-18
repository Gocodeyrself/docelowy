<?php
/* Smarty version 4.3.1, created on 2024-10-14 11:03:19
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/_partials/product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670cde577d4627_44516934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52a122d3e0145e2be540e58f3bbd12f32efe5939' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/_partials/product-prices.tpl',
      1 => 1712657182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670cde577d4627_44516934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <div class="product-prices js-product-prices">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165542540670cde577b9700_25583413', 'product_price');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1633878776670cde577c5238_41153767', 'product_without_taxes');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_396116930670cde577c6868_96187389', 'product_pack_price');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66436195670cde577c7a14_59002671', 'product_ecotax');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_955115636670cde577ca373_17543494', 'product_discount');
?>

    
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>


    <div class="tax-shipping-delivery-label">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual'] == 0) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 1) {?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['delivery_information']) {?>
            <span class="delivery-information"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_information'], ENT_QUOTES, 'UTF-8');?>
</span>
          <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 2) {?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] >= $_smarty_tpl->tpl_vars['product']->value['quantity_wanted']) {?>
            <span class="delivery-information"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_in_stock'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
            <span class="delivery-information"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_out_stock'], ENT_QUOTES, 'UTF-8');?>
</span>
          <?php }?>
        <?php }?>
      <?php }?>
    </div>
  </div>
<?php }
}
/* {block 'product_unit_price'} */
class Block_1177115500670cde577c38e6_86096224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
            <p class="product-unit-price sub"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</p>
          <?php }?>
        <?php
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_price'} */
class Block_165542540670cde577b9700_25583413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price' => 
  array (
    0 => 'Block_165542540670cde577b9700_25583413',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_1177115500670cde577c38e6_86096224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div
        class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
          <h6 class="price-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h6>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
            <span class="discount discount-percentage">            -<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'], ENT_QUOTES, 'UTF-8');?>

            </span>
          <?php } else { ?>
            <span class="discount discount-amount">
                                -<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_to_display'], ENT_QUOTES, 'UTF-8');?>

            </span>
          <?php }?>
          <span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
          <h6 class="price-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Cena promocyjna",'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h6>
        <?php } else { ?>
                  <?php }?>
                <div class="current-price">
          <span class='current-price-value' content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['rounded_display_price'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'product_sheet'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
              <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

            <?php } else { ?>
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
            
            <span class="tax-sign"><?php if (!$_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No tax','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['labels']['tax_long'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
            <?php echo htmlspecialchars((string) Tools::getUnit($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>

            </span>
          </span>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1177115500670cde577c38e6_86096224', 'product_unit_price', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'product_price'} */
/* {block 'product_without_taxes'} */
class Block_1633878776670cde577c5238_41153767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_without_taxes' => 
  array (
    0 => 'Block_1633878776670cde577c5238_41153767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
        <p class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_pack_price'} */
class Block_396116930670cde577c6868_96187389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_pack_price' => 
  array (
    0 => 'Block_396116930670cde577c6868_96187389',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
        <p class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></p>
      <?php }?>
    <?php
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
class Block_66436195670cde577c7a14_59002671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_ecotax' => 
  array (
    0 => 'Block_66436195670cde577c7a14_59002671',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!$_smarty_tpl->tpl_vars['product']->value['is_virtual'] && $_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?>
        <p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

          <?php }?>
        </p>
      <?php }?>
    <?php
}
}
/* {/block 'product_ecotax'} */
/* {block 'product_discount'} */
class Block_955115636670cde577ca373_17543494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_discount' => 
  array (
    0 => 'Block_955115636670cde577ca373_17543494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount'] && false) {?>
        <div class="product-discount">
          <p class="price-text">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Cena detaliczna",'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

          </p>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

          <span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
            <span class="tax-sign"><?php if (!$_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No tax','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['labels']['tax_long'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
            </span>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_discount'} */
}
