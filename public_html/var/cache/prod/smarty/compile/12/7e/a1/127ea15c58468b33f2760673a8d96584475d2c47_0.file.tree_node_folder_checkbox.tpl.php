<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:35:20
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/admin270jq8jrlc4glrd2ocx/themes/default/template/helpers/tree/tree_node_folder_checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6710940898c3f2_98470653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '127ea15c58468b33f2760673a8d96584475d2c47' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/admin270jq8jrlc4glrd2ocx/themes/default/template/helpers/tree/tree_node_folder_checkbox.tpl',
      1 => 1689594792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6710940898c3f2_98470653 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-folder">
	<span class="tree-folder-name<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-folder-name-disable<?php }?>">
		<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['id_category'])) && $_smarty_tpl->tpl_vars['node']->value['id_category'] != $_smarty_tpl->tpl_vars['root_category']->value) {?>
		<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<?php }?>
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php if ((isset($_smarty_tpl->tpl_vars['node']->value['name']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' ));
}
if ((isset($_smarty_tpl->tpl_vars['node']->value['selected_childs'])) && (int)$_smarty_tpl->tpl_vars['node']->value['selected_childs'] > 0) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%s selected)','sprintf'=>array($_smarty_tpl->tpl_vars['node']->value['selected_childs'])),$_smarty_tpl ) );
}?></label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li>
<?php }
}
