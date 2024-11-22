<?php
/* Smarty version 4.3.1, created on 2024-11-22 09:17:13
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/new_package_form_options/var.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403e0940db85_87417310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3640991aa5cde263c3f94b0b9fd98e087b8f7242' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/new_package_form_options/var.tpl',
      1 => 1720159721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./var.tpl' => 2,
  ),
),false)) {
function content_67403e0940db85_87417310 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['var']->value['type'] == 'select') {?>
	<select class="sensbitgls_var_<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
 form-control param" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['label'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['var']->value['options']['query'], 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
			<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['var']->value['options']['id']);?>
			<?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['var']->value['options']['name']);?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['o']->value[$_smarty_tpl->tpl_vars['id']->value];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']])) && $_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']] == $_smarty_tpl->tpl_vars['o']->value[$_smarty_tpl->tpl_vars['id']->value]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value[$_smarty_tpl->tpl_vars['name']->value];?>
</option>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</select>
<?php } elseif ($_smarty_tpl->tpl_vars['var']->value['type'] == 'radio') {?>
	<select class="sensbitgls_var_<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
 form-control param" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['label'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['var']->value['values'], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
			<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['v']->value['value']);?>
			<?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['v']->value['label']);?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']])) && $_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']] == $_smarty_tpl->tpl_vars['id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</select>
<?php } elseif ($_smarty_tpl->tpl_vars['var']->value['type'] == 'text') {?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['is_grouped']->value)) || !$_smarty_tpl->tpl_vars['is_grouped']->value) {?>
		<div class="input-group">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['var']->value['prefix']) {?>
			<div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['var']->value['prefix'];?>
</div>
		<?php }?>
		<input type="text" class="sensbitgls_var_<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
 form-control param" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['label'];?>
" name='<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
' value="<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']])) && $_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']]) {
echo $_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']];
} elseif ((isset($_smarty_tpl->tpl_vars['var']->value['default']))) {
echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['var']->value['default']];
}?>">
		<?php if ($_smarty_tpl->tpl_vars['var']->value['suffix']) {?>
			<div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['var']->value['suffix'];?>
</div>
		<?php }?>
		<?php if (!(isset($_smarty_tpl->tpl_vars['is_grouped']->value)) || !$_smarty_tpl->tpl_vars['is_grouped']->value) {?>
		</div>
	<?php }
} elseif ($_smarty_tpl->tpl_vars['var']->value['type'] == 'textarea') {?>
	<textarea style="height:auto;" class="sensbitgls_var_<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
 form-control param" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['label'];?>
" name='<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
'><?php if ($_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']]) {
echo $_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']];
} elseif ((isset($_smarty_tpl->tpl_vars['var']->value['default']))) {
echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['var']->value['default']];
}?></textarea>

<?php } elseif ($_smarty_tpl->tpl_vars['var']->value['type'] == 'switch' || $_smarty_tpl->tpl_vars['var']->value['type'] == 'radio') {?>
	<div class="input-group">
		<?php if ((isset($_smarty_tpl->tpl_vars['var']->value['grouped']))) {?>
			<div class="input-group-addon">
				<input class="param sensbitgls_var_<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['label'];?>
" type='checkbox' name="<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']])) && $_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']]) {?> checked="checked"<?php }?>/>
			</div>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['var']->value['grouped'], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
				<?php $_smarty_tpl->_subTemplateRender("file:./var.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var'=>$_smarty_tpl->tpl_vars['v']->value,'is_grouped'=>1), 0, true);
?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<div class="checkbox">
				<label>
					<input class="param sensbitgls_var_<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['var']->value['label'];?>
" type='checkbox' name="<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']])) && $_smarty_tpl->tpl_vars['data']->value['options'][$_smarty_tpl->tpl_vars['var']->value['name']]) {?> checked="checked"<?php }?>/>
									</label>
			</div>
		<?php }?>
	</div>
<?php }
}
}
