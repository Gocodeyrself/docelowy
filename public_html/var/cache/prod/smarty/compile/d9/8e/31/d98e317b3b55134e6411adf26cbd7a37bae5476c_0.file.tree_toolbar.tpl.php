<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:35:20
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/admin270jq8jrlc4glrd2ocx/themes/default/template/helpers/tree/tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6710940879e432_46762231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd98e317b3b55134e6411adf26cbd7a37bae5476c' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/admin270jq8jrlc4glrd2ocx/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1689594792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6710940879e432_46762231 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if ((isset($_smarty_tpl->tpl_vars['actions']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
