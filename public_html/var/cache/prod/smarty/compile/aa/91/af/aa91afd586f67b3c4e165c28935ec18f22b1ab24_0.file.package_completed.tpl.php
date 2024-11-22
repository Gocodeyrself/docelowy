<?php
/* Smarty version 4.3.1, created on 2024-11-22 09:17:58
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/package_completed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403e367cc854_48206259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa91afd586f67b3c4e165c28935ec18f22b1ab24' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/package_completed.tpl',
      1 => 1720159721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67403e367cc854_48206259 (Smarty_Internal_Template $_smarty_tpl) {
?><tr id='shipment_<?php echo $_smarty_tpl->tpl_vars['shipment']->value->id;?>
'>
	<td>
		<div class="message"></div>
		<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['shipment']->value->id;?>
" checked="checked" class="completed-packs"/>
	</td>
	<td>
		<div class='sensbitgls-tip' title='<?php echo $_smarty_tpl->tpl_vars['service']->value->getName();?>
'><?php echo $_smarty_tpl->tpl_vars['service']->value->getLogo();?>
</div>
	</td>
	<td>
		<?php echo $_smarty_tpl->tpl_vars['shipment']->value->tracking_number;?>

	</td>
	<td>
		<?php $_smarty_tpl->_assignInScope('status', $_smarty_tpl->tpl_vars['shipment']->value->getStatus());?>
		<a href='#' onclick="sensbitgls.getPackStatus(<?php echo $_smarty_tpl->tpl_vars['shipment']->value->id;?>
);return false" class='sensbitgls-tip sensbitgls-pack-status' data-id-shipment='<?php echo $_smarty_tpl->tpl_vars['shipment']->value->id;?>
' data-autocheck="<?php echo $_smarty_tpl->tpl_vars['status']->value['autocheck'];?>
" title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Kliknij aby sprawdzić aktualny status przesyłki','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
'><?php echo $_smarty_tpl->tpl_vars['status']->value['title'];?>
</a>
	</td>
	<td>
		<div style="text-align:center">
			<?php if ((isset($_smarty_tpl->tpl_vars['shipment']->value->options_->cod)) && $_smarty_tpl->tpl_vars['shipment']->value->options_->cod) {?>
				<img src="../img/admin/enabled.gif" alt="Tak" title="Tak"/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['shipment']->value->options_->cod_value),$_smarty_tpl ) );?>

			<?php } else { ?>
				<img src="../img/admin/disabled.gif" alt="Nie" title="Nie"/>
			<?php }?>
		</div>
	</td>
	<td>
		<?php echo $_smarty_tpl->tpl_vars['shipment']->value->date_add;?>

	</td>
	<td>
		<?php echo $_smarty_tpl->tpl_vars['shipment']->value->getEmployeeName();?>

	</td>
	<td>
		<button onclick="sensbitgls.printLabels(<?php echo $_smarty_tpl->tpl_vars['shipment']->value->id;?>
);return false" class="btn btn-xs btn-success sensbitgls-tip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print label','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
"><i class="icon-print"></i></button>
			<?php if (Configuration::get(SensbitGls::CFG_SIMPLE_PRINTNODE_ENABLED)) {?>
			<button onclick="sensbitgls.printNode(<?php echo $_smarty_tpl->tpl_vars['shipment']->value->id;?>
);return false" class="btn btn-xs btn-warning sensbitgls-tip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print label on PrintNode','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
"><i class="icon-print"></i> <i class="icon-cloud"></i></button>
			<?php }?>
		<button onclick="sensbitgls.deleteShipments(<?php echo $_smarty_tpl->tpl_vars['shipment']->value->id;?>
);return false" class="btn btn-xs btn-danger sensbitgls-tip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete shipment','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
"><i class="icon-remove"></i></button>
	</td>
</tr><?php }
}
