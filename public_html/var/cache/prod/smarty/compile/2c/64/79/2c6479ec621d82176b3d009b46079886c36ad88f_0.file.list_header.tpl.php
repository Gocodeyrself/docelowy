<?php
/* Smarty version 4.3.1, created on 2024-11-22 09:16:50
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/sensbit_gls_package/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403df2e95ca6_64366816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c6479ec621d82176b3d009b46079886c36ad88f' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/sensbitgls/views/templates/admin/sensbit_gls_package/helpers/list/list_header.tpl',
      1 => 1720159721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67403df2e95ca6_64366816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74976074567403df2e91881_70586382', 'preTable');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'preTable'} */
class Block_74976074567403df2e91881_70586382 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'preTable' => 
  array (
    0 => 'Block_74976074567403df2e91881_70586382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="sensbitgls-orders-filters">
		<div class="row">
			<div class="col-sm-8">
				<h4>Super filtry</h4>
				<em class="text-info"><i class="icon-question-circle"></i> Zapisujemy Twoje wybrane filtry w konfiguracji. Nie stracisz ich po odświeżeniu strony.<br/>Oprócz super filtrów możesz używać filtrów w kolumnach danych np. filtrując po nr śledzenia czy numerze protokołu.</em>
				<div class="filters-container">
					<div class="filter-group">
						<div class="btn-group"  data-toggle="buttons">
							<div class="btn btn-primary">
								Data utworzenia przesyłki
							</div>
							<div style='width:170px;display:inline-block'>
								<div class="input-group">
									<span class="input-group-addon">Od</span>
									<input type='text' class='sensbitgls-datetime' value="<?php if ((isset($_smarty_tpl->tpl_vars['filters']->value['date_add']))) {
echo $_smarty_tpl->tpl_vars['filters']->value['date_add']['from'];
}?>"  name='filters[date_add][from]' placeholder='Od' autocomplete="off"/>
								</div>
							</div>
							<div  style='width:170px;display:inline-block'>
								<div class="input-group">
									<span class="input-group-addon">Do</span>
									<input type='text' class='sensbitgls-datetime' value="<?php if ((isset($_smarty_tpl->tpl_vars['filters']->value['date_add']))) {
echo $_smarty_tpl->tpl_vars['filters']->value['date_add']['to'];
}?>"  name='filters[date_add][to]' placeholder='Do' autocomplete="off"/>
								</div>
							</div>
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
								<?php if (!in_array($_smarty_tpl->tpl_vars['name']->value,array('actions'))) {?>
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

				<div class="filter-group">
					<button class="btn btn-primary sensbitgls-tip sensbitgls-bulk-labels" title="Na podstawie wybranych przesyłek generuje zbiorczy plik z etykietami.">
						Pobierz wybrane etykiety zbiorczo
					</button>
				</div>
							</div>
		</div>
	</div>

<?php
}
}
/* {/block 'preTable'} */
}
