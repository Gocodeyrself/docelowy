<?php
/* Smarty version 4.3.1, created on 2024-11-22 09:16:38
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/sensbit_gls_order/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403de65fbda8_85794308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '977e22d79666c3941e4c5a672a02982aac5ebf19' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/sensbit_gls_order/helpers/list/list_header.tpl',
      1 => 1720159721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67403de65fbda8_85794308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85203552767403de65edeb2_34322987', 'override_header');
?>
 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_85203552767403de65edeb2_34322987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_85203552767403de65edeb2_34322987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="sensbitgls sensbitgls-parent">
		<div class="sensbitgls sensbitgls-orders-selected-container">
			<p>Wybranych <span class="n">0</span> przesyłek.</p>
			<a href="#" class="prepare-packs">
				Dodaj wybrane
			</a>

			<a href="#" class="next-error" data-next="0">
				Popraw błędne przesyłki
			</a>

		</div>

		<div class="sensbitgls-orders-filters">
			<div class="row">
				<div class="col-sm-8">
					<h4>Super filtry</h4>
					<em class="text-info"><i class="icon-question-circle"></i> Zapisujemy Twoje wybrane filtry w konfiguracji. Nie stracisz ich po odświeżeniu strony.<br/>Oprócz super filtrów możesz używać filtrów w kolumnach danych np. filtrując po nr przesyłki czy kupionych produktach.</em>

					<div class="filters-container">
						<div class="filter-group">
							<div class="btn-group"  data-toggle="buttons">
								<div class="btn btn-primary">
									Data zamówienia
								</div>

								<?php $_smarty_tpl->_assignInScope('active', ((isset($_smarty_tpl->tpl_vars['filters']->value['date_add'])) && (isset($_smarty_tpl->tpl_vars['filters']->value['date_add']['novalidation'])) && $_smarty_tpl->tpl_vars['filters']->value['date_add']['novalidation']));?>
								<label class='btn btn-default<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> active<?php }?>'>
									<input type="checkbox" name='filters[date_add][novalidation]' value='1' <?php if ($_smarty_tpl->tpl_vars['active']->value) {?>checked='checked<?php }?>'/>
									Pomiń walidację dat zamówień
								</label>

								<div style='width:170px;display:inline-block'>
									<div class="input-group">
										<span class="input-group-addon">Od</span>
										<input type='text' class='sensbitgls-datetime' value="<?php if ((isset($_smarty_tpl->tpl_vars['filters']->value['date_add']))) {
echo $_smarty_tpl->tpl_vars['filters']->value['date_add']['from'];
}?>"  name='filters[date_add][from]' placeholder='Od'/>
									</div>
								</div>
								<div  style='width:170px;display:inline-block'>
									<div class="input-group">
										<span class="input-group-addon">Do</span>
										<input type='text' class='sensbitgls-datetime' value="<?php if ((isset($_smarty_tpl->tpl_vars['filters']->value['date_add']))) {
echo $_smarty_tpl->tpl_vars['filters']->value['date_add']['to'];
}?>"  name='filters[date_add][to]' placeholder='Do'/>
									</div>
								</div>
							</div>
						</div>

						<div class="filter-group">
							<div class="btn-group"  data-toggle="buttons">
								<div class="btn btn-primary">
									Przewoźnicy
								</div>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value, 'carrier');
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
?>
									<?php $_smarty_tpl->_assignInScope('active', (isset($_smarty_tpl->tpl_vars['filters']->value['carrier'])) && in_array($_smarty_tpl->tpl_vars['carrier']->value['id_reference'],$_smarty_tpl->tpl_vars['filters']->value['carrier']));?>
									<label class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> active<?php }?>">
										<input type="checkbox" name="filters[carrier][]" value="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['id_reference'];?>
"<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> checked='checked'<?php }?>/>
										<?php echo $_smarty_tpl->tpl_vars['carrier']->value['name'];?>

									</label>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						</div>

						<div class="filter-group">
							<div class="btn-group"  data-toggle="buttons">
								<div class="btn btn-primary">
									Płatności
								</div>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
									<?php $_smarty_tpl->_assignInScope('active', (isset($_smarty_tpl->tpl_vars['filters']->value['payment'])) && in_array($_smarty_tpl->tpl_vars['payment']->value['name'],$_smarty_tpl->tpl_vars['filters']->value['payment']));?>
									<label class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> active<?php }?>">
										<input type="checkbox" name="filters[payment][]" value="<?php echo $_smarty_tpl->tpl_vars['payment']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> checked='checked'<?php }?>/>
										<?php echo $_smarty_tpl->tpl_vars['payment']->value['displayName'];?>

									</label>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						</div>

						<div class="filter-group">
							<div class="btn-group"  data-toggle="buttons">
								<div class="btn btn-primary">
									Aktywne statusy zamówień
								</div>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statuses']->value, 'status');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
									<?php $_smarty_tpl->_assignInScope('active', (isset($_smarty_tpl->tpl_vars['filters']->value['status'])) && in_array($_smarty_tpl->tpl_vars['status']->value['id_order_state'],$_smarty_tpl->tpl_vars['filters']->value['status']));?>
									<label class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> active<?php }?>">
										<input type="checkbox" name="filters[status][]" value="<?php echo $_smarty_tpl->tpl_vars['status']->value['id_order_state'];?>
"<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> checked='checked'<?php }?>/>
										<?php echo $_smarty_tpl->tpl_vars['status']->value['name'];?>

										<?php if ($_smarty_tpl->tpl_vars['status']->value['color']) {?>
											<span style="display:inline-block; margin-left:5px;width:15px;height:15px;background: <?php echo $_smarty_tpl->tpl_vars['status']->value['color'];?>
;vertical-align:middle;"></span>
										<?php }?>
									</label>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						</div>

						<div class="filter-group">
							<div class="btn-group"  data-toggle="buttons">
								<div class="btn btn-primary">
									Przesyłki
								</div>
								<?php $_smarty_tpl->_assignInScope('active', (isset($_smarty_tpl->tpl_vars['filters']->value['orders'])) && in_array('noshipments',$_smarty_tpl->tpl_vars['filters']->value['orders']));?>
								<label class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> active<?php }?>">
									<input type="checkbox" name="filters[orders][]" value="noshipments"<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> checked='checked'<?php }?>/>
									Bez przesyłek
								</label>
								<?php $_smarty_tpl->_assignInScope('active', (isset($_smarty_tpl->tpl_vars['filters']->value['orders'])) && in_array('withshipments',$_smarty_tpl->tpl_vars['filters']->value['orders']));?>
								<label class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> active<?php }?>">
									<input type="checkbox" name="filters[orders][]" value="withshipments"<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> checked='checked'<?php }?>/>
									Z przesyłkami
								</label>
							</div>
						</div>

						<div class="filter-group">
							<div class="btn-group"  data-toggle="buttons">
								<div class="btn btn-primary">
									Status opłaconych zamówień
								</div>
								<?php $_smarty_tpl->_assignInScope('active', (isset($_smarty_tpl->tpl_vars['filters']->value['state'])) && in_array('valid',$_smarty_tpl->tpl_vars['filters']->value['state']));?>
								<label class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> active<?php }?>">
									<input type="checkbox" name="filters[state][]" value="valid"<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> checked='checked'<?php }?>/>
									Opłacone
								</label>
								<?php $_smarty_tpl->_assignInScope('active', (isset($_smarty_tpl->tpl_vars['filters']->value['state'])) && in_array('notvalid',$_smarty_tpl->tpl_vars['filters']->value['state']));?>
								<label class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> active<?php }?>">
									<input type="checkbox" name="filters[state][]" value="notvalid"<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> checked='checked'<?php }?>/>
									Nieopłacone
								</label>
							</div>
						</div>

						<div class="filter-group">
							<div class="btn-group"  data-toggle="buttons">
								<div class="btn btn-primary">
									Wyświetlane dane
								</div>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_to_filter']->value, 'vars', false, 'name');
$_smarty_tpl->tpl_vars['vars']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['vars']->value) {
$_smarty_tpl->tpl_vars['vars']->do_else = false;
?>
									<?php if (!in_array($_smarty_tpl->tpl_vars['name']->value,array('templates'))) {?>
										<?php $_smarty_tpl->_assignInScope('active', (isset($_smarty_tpl->tpl_vars['filters']->value['fields'])) && in_array($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['filters']->value['fields']));?>
										<label class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> active<?php }?>">
											<input type="checkbox" name="filters[fields][]" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['active']->value) {?> checked='checked'<?php }?>/>
											<?php echo $_smarty_tpl->tpl_vars['vars']->value['title'];?>

										</label>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						</div>
						<div class="filter-group">
							<input class="btn btn-success" type="submit" name="set_filters" value="Filtruj"/>
						</div>
					</div>
					<button class="sensbitgls-orders-filters-open btn btn-primary btn-xs" style="margin-top:10px;">Rozwiń ⇊</button>
				</div>
				<div class="col-sm-4">
					<h4>Masowe działania</h4>
					<em class="text-info"><i class="icon-question-circle"></i> Chodzą słuchy, że ktoś jeszcze dodaje przesyłki kilkając pojedynczo. :)<br/>Używaj poniższych opcji z rozsądkiem.</em>
					<div class="filter-group">
						<button class="btn btn-primary sensbitgls-tip sensbitgls-mass-open" title="Na podstawie wybranych szablonów otwiera edycję przesyłek przy wszystkich widocznych zamówieniach poniżej.">
							Edytuj przesyłki do wszystkich zamówień
						</button>
					</div>
					<div class="filter-group">
						<button class="btn btn-primary sensbitgls-tip sensbitgls-mass-add" title="Na podstawie wybranych szablonów otwiera edycję przesyłek po czym od razu je dodaje na podstawie domyślnych ustawień przy wszystkich widocznych zamówieniach poniżej.">
							Dodaj szybko przesyłki do wszystkich zamówień
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
>
		$(function () {
			var target = '';
		<?php if (SensbitGlsTools::isBootstrap()) {?>
			target = "#form-orders table.table";
		<?php } else { ?>
			target = "table[name=list_table]";
		<?php }?>
			$(".sensbitgls-parent").insertBefore(target);
			$(target).addClass('sensbitgls');
			var br_target = $(target).find('tbody > tr').not(':last');
			var colspan = br_target.eq(0).find('td').length;
			$("<tr><td colspan=" + colspan + " style='background: #777 !important;height:3px;'></td></tr>").insertAfter(br_target);
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'override_header'} */
}
