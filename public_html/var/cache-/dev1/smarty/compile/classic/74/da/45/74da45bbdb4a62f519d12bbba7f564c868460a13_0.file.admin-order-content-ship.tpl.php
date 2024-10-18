<?php
/* Smarty version 4.3.1, created on 2024-08-08 13:32:32
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/admin-order-content-ship.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4acd08dae82_37537570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74da45bbdb4a62f519d12bbba7f564c868460a13' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/admin-order-content-ship.tpl',
      1 => 1709029526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:inpostshipping/views/templates/hook/_partials/shipment-table-row.tpl' => 2,
    'module:inpostshipping/views/templates/hook/_partials/shipment-table-action.tpl' => 1,
  ),
),false)) {
function content_66b4acd08dae82_37537570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="tab tab-pane" id="inpostshipping">
  <div class="card card-details mb-0">
    <div class="card-header d-none d-print-block">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'InPost Shipments','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
 (<span class="count"><?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['inPostShipments']->value);?>
</span>)
    </div>
    <div class="card-body">
      <div class="form-horizontal">
        <div class="table-responsive">
          <table class="table">
            <thead>
            <tr>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipment number','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</th>
              <th class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created at','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</th>
              <th class="text-right product_actions d-print-none">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Actions','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </th>
            </tr>
            </thead>
            <tbody class="js-inpost-shipping-shipments-table">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inPostShipments']->value, 'shipment');
$_smarty_tpl->tpl_vars['shipment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipment']->value) {
$_smarty_tpl->tpl_vars['shipment']->do_else = false;
?>
              <?php $_smarty_tpl->_subTemplateRender('module:inpostshipping/views/templates/hook/_partials/shipment-table-row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>

          <div class="row no-gutters d-print-none">
            <div class="col-sm-12 text-right">
              <a class="btn btn-secondary" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inPostShipmentsListUrl']->value,'html','UTF-8' ));?>
">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to shipments list','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </a>
              <button class="btn btn-primary" data-toggle="modal" data-target="#inpost-create-shipment-modal">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New shipment','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php if ((isset($_smarty_tpl->tpl_vars['inPostLockerAddress']->value))) {?>
    <div class="js-inpost-locker-address inpost-locker-address" style="display: none">
      <?php echo $_smarty_tpl->tpl_vars['inPostLockerAddress']->value;?>

      <div class="my-3 d-xl-none"><?php echo $_smarty_tpl->tpl_vars['carrierName']->value;?>
</div>
    </div>

    <div class="js-inpost-carrier-name inpost-locker-address d-none d-xl-block" style="display: none">
      <?php echo $_smarty_tpl->tpl_vars['carrierName']->value;?>

    </div>
  <?php }?>

  <template id="js_inpost_shipping_shipment_table_row_template">
    <?php $_smarty_tpl->_subTemplateRender('module:inpostshipping/views/templates/hook/_partials/shipment-table-row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipment'=>null), 0, true);
?>
  </template>

  <template id="js_inpost_shipping_shipment_table_action_template">
    <?php $_smarty_tpl->_subTemplateRender('module:inpostshipping/views/templates/hook/_partials/shipment-table-action.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action_name'=>null,'action'=>null), 0, false);
?>
  </template>
</div>
<?php }
}
