<?php
/* Smarty version 4.3.1, created on 2024-08-08 13:32:32
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/admin-order-tab-ship.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4acd08ba993_50891062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9531127e06201f63216cea521b1c9971f2360f4' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/admin-order-tab-ship.tpl',
      1 => 1709029526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4acd08ba993_50891062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<li class="nav-item d-print-none">
  <a class="nav-link" data-toggle="tab" id="inpostshipping-nav" href="#inpostshipping">
    <i class="material-icons">local_shipping</i>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'InPost Shipments','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
 (<span class="count"><?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['inPostShipments']->value);?>
</span>)
  </a>
</li>
<?php }
}
