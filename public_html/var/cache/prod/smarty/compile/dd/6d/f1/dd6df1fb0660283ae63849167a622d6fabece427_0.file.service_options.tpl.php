<?php
/* Smarty version 4.3.1, created on 2024-11-22 09:17:13
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/new_package_form_options/service_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403e093fd744_38319141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd6df1fb0660283ae63849167a622d6fabece427' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/new_package_form_options/service_options.tpl',
      1 => 1720159721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./var.tpl' => 1,
  ),
),false)) {
function content_67403e093fd744_38319141 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row form-horizontal">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['service_options'], 'vars', false, 'group');
$_smarty_tpl->tpl_vars['vars']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value => $_smarty_tpl->tpl_vars['vars']->value) {
$_smarty_tpl->tpl_vars['vars']->do_else = false;
?>
		<div class='col-xs-4'>
			<h4><?php echo $_smarty_tpl->tpl_vars['group']->value;?>
</h4>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vars']->value, 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
				<div class="form-group">
					<label for="sensbitgls_var_<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
" class="col-sm-<?php if ($_smarty_tpl->tpl_vars['var']->value['type'] == 'switch' && !(isset($_smarty_tpl->tpl_vars['var']->value['grouped']))) {?>8<?php } else { ?>4<?php }?> control-label"><?php echo $_smarty_tpl->tpl_vars['var']->value['label'];?>
</label>
					<div class="col-sm-<?php if ($_smarty_tpl->tpl_vars['var']->value['type'] == 'switch' && !(isset($_smarty_tpl->tpl_vars['var']->value['grouped']))) {?>4<?php } else { ?>6<?php }?>">
						<?php $_smarty_tpl->_subTemplateRender("file:./var.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>$_smarty_tpl->tpl_vars['var']->value), 0, true);
?>
					</div>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
