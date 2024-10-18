<?php
/* Smarty version 4.3.1, created on 2024-08-08 13:24:54
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4ab06e174c6_05628588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd8c34bee686add1bf26cc08c4f7c552f4a5a02b' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/order.tpl',
      1 => 1720159721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4ab06e174c6_05628588 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="clear:both"></div>
<?php $_smarty_tpl->_assignInScope('data', $_smarty_tpl->tpl_vars['sensbitgls']->value);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'content', null, null);?>
	<form class='packages-ready-form messages-container'<?php if (empty($_smarty_tpl->tpl_vars['data']->value['shipments'])) {?> style="display:none"<?php }?>>
		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Packages created for order','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['order']->reference;?>
</h4>
		<table class='table'>
			<thead>
				<tr>
					<th></th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tracking number','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status przesyłki','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pobranie','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create date','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created by','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
					<th></th>
				</tr>
			</thead>
			<tbody class='packages-ready-container'>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['shipments'], 'shipment');
$_smarty_tpl->tpl_vars['shipment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipment']->value) {
$_smarty_tpl->tpl_vars['shipment']->do_else = false;
?>
					<?php echo $_smarty_tpl->tpl_vars['shipment']->value->getCompletedRowHtml();?>

				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<div class="packages-completed-actions">
			<button class="btn btn-default print-labels"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print labels','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</button>
			<button class="btn btn-default delete-shipments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel shipments','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</button>

		</div>
	</form>


	<?php if (empty($_smarty_tpl->tpl_vars['data']->value['templates']) && empty($_smarty_tpl->tpl_vars['data']->value['global_templates'])) {?>
		<div class='alert alert-warning'>Nie posiadasz skonfigurowanych szablonów przesyłek.</div>
	<?php } else { ?>
		<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['templates'])) {?>
			<h4>Szablony powiązane z tym zamówieniem</h4>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['templates'], 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
				<a href='' class='button btn btn-default btn-xs sensbitgls-service' data-id='<?php echo $_smarty_tpl->tpl_vars['template']->value['id_template'];?>
'><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
 <?php echo htmlspecialchars_decode(SensbitGlsService::getServiceLogo($_smarty_tpl->tpl_vars['template']->value['service']), ENT_QUOTES);?>
</a>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<div class='alert alert-warning'>To zamówienie nie posiada żadnych przypisanych szablonów.</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['global_templates'])) {?>
			<h4<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['templates'])) {?> style="margin-top:15px"<?php }?>>Wszystkie pozostałe szablony niepowiązane z tym zamówieniem. <a href="#" class="btn btn-xs btn-success switch_global_templates s">Pokaż</a><a href="#" class="btn btn-xs btn-warning switch_global_templates h">Ukryj</a></h4>
			<div class="global_templates">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['global_templates'], 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
					<a href='' class='button btn btn-default btn-xs sensbitgls-service' data-id='<?php echo $_smarty_tpl->tpl_vars['template']->value['id_template'];?>
'><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
 <?php echo htmlspecialchars_decode(SensbitGlsService::getServiceLogo($_smarty_tpl->tpl_vars['template']->value['service']), ENT_QUOTES);?>
</a>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>

		<form class='packages-form messages-container' style="display:none">
						<table class='table'>
				<thead>
					<tr>	
						<th></th>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Szablon','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Usługa','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Dane kontaktowe odbiorcy','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Dostawa do','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pobranie','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Opis przesyłki','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
						<th>Paczki</th>
						<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Szczegóły','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</th>
						<th></th>
					</tr>
				</thead>

				<tbody class="package-container">

				</tbody>

			</table>
			<div style="margin-top:20px">
				<button class="btn btn-warning prepare-packs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create','mod'=>'sensbitgls'),$_smarty_tpl ) );?>
</button>
			</div>
		</form>

		<?php echo '<script'; ?>
>
			<?php if (!SensbitGlsTools::isBootstrap()) {?>
			$('.sensbitgls').eq(0).insertAfter($('.sensbitgls').eq(0).parent());
			<?php }?>
			sensbitgls.setOptions({
				id_order: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['order']->id ));?>
,
				ajax_url_packages: '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminSensbitGlsPackage');?>
',
				google_key: '<?php echo $_smarty_tpl->tpl_vars['data']->value['google_key'];?>
'
			});
		<?php echo '</script'; ?>
>
	<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="sensbitgls<?php if ($_smarty_tpl->tpl_vars['data']->value['hide_global_templates']) {?> hide_global_templates<?php }
if (empty($_smarty_tpl->tpl_vars['data']->value['templates']) && $_smarty_tpl->tpl_vars['data']->value['hide_panel_if_no_templates']) {?> hide_no_templates<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['data']->value['bootstrap']) {?>
		<div class="panel">
			<div class="panel-heading">
				<i class="icon-truck"></i> Wysyłka z GLS <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['module_link'];?>
"><i class="icon-cogs"></i></a> <a href="#" class="switch_no_templates s">Pokaż</a><a href="#" class="switch_no_templates h">Ukryj</a>
			</div>
				<div class="panel-body panel_container">
				<?php if ($_smarty_tpl->tpl_vars['data']->value['customer_id_point']) {?>
					<div class="alert alert-info">
						Wybrany punkt odbioru przez klienta: <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['customer_id_point'];?>
</strong><?php if ((isset($_smarty_tpl->tpl_vars['data']->value['customer_id_point_data']['address']))) {?>  <em><?php echo $_smarty_tpl->tpl_vars['data']->value['customer_id_point_data']['address'];?>
</em><?php } else { ?> <strong style="color:#c00">Uwaga. Nie można pobrać danych tego punktu odbioru. Może już nie istnieć!</strong><?php }?>
					</div>
				<?php } elseif (!$_smarty_tpl->tpl_vars['data']->value['hide_no_point']) {?>
					<div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['data']->value['default_id_point']) {?>warning<?php } else { ?>danger<?php }?>">
						<?php if ($_smarty_tpl->tpl_vars['data']->value['default_id_point']) {?>
							Klient nie wybrał punktu odbioru w tym zamówieniu ale znamy jego ostatnio wybrany punkt: <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['default_id_point'];?>
</strong><?php if ((isset($_smarty_tpl->tpl_vars['data']->value['default_id_point_data']['address']))) {?> <em><?php echo $_smarty_tpl->tpl_vars['data']->value['default_id_point_data']['address'];?>
</em><?php } else { ?> <strong style="color:#c00">Uwaga. Nie można pobrać danych tego punktu odbioru. Może już nie istnieć!</strong><?php }?>
						<?php } else { ?>
							Klient nie wybrał punktu odbioru w tym zamówieniu.
						<?php }?>
					</div>
				<?php }?>
				<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content');?>

			</div>
		</div>
	<?php } else { ?>
		<fieldset class='panel'>
			<legend><img src="../img/admin/delivery.gif"> Wysyłka z GLS <a href="#" class="btn btn-xs btn-success switch_no_templates s">Pokaż</a><a href="#" class="btn btn-xs btn-warning switch_no_templates h">Ukryj</a></legend>
			<div class="panel_container">
				<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content');?>

			</div>
		</fieldset>
	<?php }?>
</div>

<?php }
}
