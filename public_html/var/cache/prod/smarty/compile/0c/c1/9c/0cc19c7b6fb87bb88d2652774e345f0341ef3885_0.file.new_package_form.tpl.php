<?php
/* Smarty version 4.3.1, created on 2024-11-22 09:17:13
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/new_package_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403e093f3517_37606240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cc19c7b6fb87bb88d2652774e345f0341ef3885' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/new_package_form.tpl',
      1 => 1720159721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./new_package_form_options/service_options.tpl' => 1,
  ),
),false)) {
function content_67403e093f3517_37606240 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr id='package_<?php echo $_smarty_tpl->tpl_vars['uniq']->value;?>
' class='package' data-id='<?php echo $_smarty_tpl->tpl_vars['uniq']->value;?>
'>
	<td>
		<div class="message">Trwa przygotowywanie przesyłki.</div>
		<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['uniq']->value;?>
" name="checked" checked="checked"/>
	</td>
	<td>
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_order'];?>
" name="id_order" class='param'/>
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['uniq']->value;?>
" name="uniq" class='param'/>
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['service'];?>
" name="service" class='param'/>
		<input type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['is_point'] ));?>
" name="is_point" class='param'/>
		<input type="hidden" value="0" name="id_shipment" class='param'/>
		<?php echo $_smarty_tpl->tpl_vars['data']->value['template'];?>

	</td>
	<td>
		<div class='tip' title='<?php echo $_smarty_tpl->tpl_vars['data']->value['service_name'];?>
'><?php echo $_smarty_tpl->tpl_vars['data']->value['service_logo'];?>
</div>
	</td>
	<td>
		<input class='param form-control' name="email" type="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
" />
		<input class='param form-control' name="phone" type="text" value="<?php if (empty($_smarty_tpl->tpl_vars['data']->value['phone_mobile'])) {
echo $_smarty_tpl->tpl_vars['data']->value['phone'];
} else {
echo $_smarty_tpl->tpl_vars['data']->value['phone_mobile'];
}?>" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
"/>
	</td>
	<td>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['is_point']) {?>
			<input style='width: 100%' type='text' name='id_point' value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_point'];?>
" class='param package_<?php echo $_smarty_tpl->tpl_vars['uniq']->value;?>
_id_point' placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID punktu odbioru','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
"/>
			<input type="text" class='place_name' value="<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['place_label']))) {
echo $_smarty_tpl->tpl_vars['data']->value['place_label'];
}?>" disabled="disabled"/>
		<?php }?>
		<div class='address' <?php if ($_smarty_tpl->tpl_vars['data']->value['is_point']) {?>style="display:none"<?php }?>>
			<div style="display:inline">
				<?php if ($_smarty_tpl->tpl_vars['data']->value['company']) {?>
					<?php echo $_smarty_tpl->tpl_vars['data']->value['company'];?>
 <br/>
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['data']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['lastname'];?>

				<br/>
				<?php echo $_smarty_tpl->tpl_vars['data']->value['address1'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['address2'];?>
<br/>
				<?php echo $_smarty_tpl->tpl_vars['data']->value['postcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['city'];?>
<br/>
				<?php echo $_smarty_tpl->tpl_vars['data']->value['country_iso_code'];?>

			</div>
			<button class="btn btn-default btn-xs edit-address tip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit address','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
"><i class="icon-edit"></i></button>
		</div>
		<div class='address-edit' style="display:none; max-width:230px;">
			<input type='text' class='param' value="<?php echo $_smarty_tpl->tpl_vars['data']->value['company'];?>
" name='company' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
'/>
			<div class='row'>
				<div class='col-sm-6'>
					<input type='text' class='param' value="<?php echo $_smarty_tpl->tpl_vars['data']->value['firstname'];?>
" name='firstname' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Firstname','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
'/>
				</div>
				<div class='col-sm-6'>
					<input type='text' class='param' value="<?php echo $_smarty_tpl->tpl_vars['data']->value['lastname'];?>
"  name='lastname' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lastname','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
'/>
				</div>
			</div>
			<div class='row'>
				<div class='col-sm-6'>
					<input type='text' class='param' value="<?php echo $_smarty_tpl->tpl_vars['data']->value['address1'];?>
"  name='street' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Street','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
'/>
				</div>
				<div class='col-sm-6'>
					<input type='text' class='param' value="<?php echo $_smarty_tpl->tpl_vars['data']->value['address2'];?>
"  name='building_number' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Building number','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
'/>
				</div>
			</div>
			<div class='row'>
				<div class='col-sm-4'>
					<input type='text' class='param' value="<?php echo $_smarty_tpl->tpl_vars['data']->value['postcode'];?>
"  name='postcode' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Postcode','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
'/>
				</div>
				<div class='col-sm-4'>
					<input type='text' class='param' value="<?php echo $_smarty_tpl->tpl_vars['data']->value['city'];?>
"  name='city' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
'/>
				</div>
				<div class='col-sm-4'>
					<input type='text' class='param' value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country_iso_code'];?>
"  name='country_iso_code' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country code','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
'/>
				</div>
			</div>

			<button class="btn btn-success btn-xs save-address tip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save address','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
"><i class="icon-check"></i></button>

		</div>

	</td>
	<td>
		<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['options']['cod']))) {?>
			<div class="input-group">
				<span class="input-group-addon"><input class='param' placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Is COD','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
" name="cod" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['data']->value['options']['cod']) {?> checked='checked'<?php }?>/></span>
				<input class='param' style="width:70px" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'COD value','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
" name="cod_value" type="text" value="<?php if (empty($_smarty_tpl->tpl_vars['data']->value['options']['cod_value'])) {
echo round((float) $_smarty_tpl->tpl_vars['data']->value['total_paid_tax_incl'], (int) 2, (int) 1);
} else {
echo $_smarty_tpl->tpl_vars['data']->value['options']['cod_value'];
}?>"/>
				<input class='param' style="width:40px;text-align: center" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'COD Currency','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
" name="cod_currency" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['currency'];?>
"/>
			</div>
		<?php } else { ?>
			-
		<?php }?>
	</td>
	<td>
		<input class='param' name="reference" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['custom_reference'];?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
"/>
	</td>
	<td>
		<div class="subpackages">
			<div class="subpackage">
				<div class="number">
					<input type='text' value="1" disabled='disabled'/>
					<button class="btn btn-xs btn-block btn-warning copy"><i class="icon-copy"></i></button>
					<button class="btn btn-xs btn-block btn-danger remove"><i class="icon-remove"></i></button>
				</div>
				<div class="data">
					<div>
						<input type='text' class='package-param' value="<?php if ((isset($_smarty_tpl->tpl_vars['data']->value['options']['package_content'])) && $_smarty_tpl->tpl_vars['data']->value['options']['package_content']) {
echo $_smarty_tpl->tpl_vars['data']->value['options']['package_content'];
} else {
}?>" name='package_content' placeholder='Zawartość paczki'/>
					</div>
					<div>
						<div class="input-group" style='width:100%'>
							<input type='text' class='package-param' value="<?php if ($_smarty_tpl->tpl_vars['data']->value['options']['weight']) {
echo $_smarty_tpl->tpl_vars['data']->value['options']['weight'];
} else {
echo $_smarty_tpl->tpl_vars['data']->value['total_weight'];
}?>"  name='weight' placeholder='Waga paczki'/>
							<span class="input-group-addon">kg.</span>
						</div>
					</div>
									</div>
			</div>
		</div>
	</td>
	<td>
		<button class="btn btn-xs btn-info show-options"><i class="icon-list"></i></button>
	</td>
	<td>
		<button class="btn btn-xs btn-danger remove-package"><i class="icon-remove"></i></button>
	</td>
</tr>

<tr id='package_options_<?php echo $_smarty_tpl->tpl_vars['uniq']->value;?>
' class="package-options">
	<td colspan="9">
		<?php $_smarty_tpl->_assignInScope('service', $_smarty_tpl->tpl_vars['data']->value['service']);?>
		<?php $_smarty_tpl->_subTemplateRender("file:./new_package_form_options/service_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</td>
</tr> 
<?php }
}
