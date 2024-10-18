<?php
/* Smarty version 4.3.1, created on 2024-10-16 12:11:53
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/_partials/product-delivery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670f916913eeb3_60445075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd74bb66912dfa99198ecd05b61ebcafcebc20d04' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/_partials/product-delivery.tpl',
      1 => 1718717117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670f916913eeb3_60445075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<div class="main-product-delivery-container">
    <i class="fas fa-truck"></i>
    <div class="product-delivery-container">
        <?php $_smarty_tpl->_assignInScope('toFreeDelivery', ((float)Configuration::get('PS_SHIPPING_FREE_PRICE')-$_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount']));?>
        <div class="h4">            
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free Shipping','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 
        </div>
        <div class="to-free-delivery <?php if ($_smarty_tpl->tpl_vars['toFreeDelivery']->value <= 0) {?>hidden<?php }?>">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Missing in the cart:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 
            <span><?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['toFreeDelivery']->value,2,","," "), ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>

        </div>
    </div>
</div><?php }
}
