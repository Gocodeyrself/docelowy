<?php
/* Smarty version 4.3.1, created on 2024-08-08 13:24:48
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/modal/create-dispatch-order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4ab002d3842_16630581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ece0e7ac146cf05f4c471712da9b4d7bfc400f83' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/modal/create-dispatch-order.tpl',
      1 => 1709029526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4ab002d3842_16630581 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="inpost-dispatch-order-form"
      class="defaultForm form-horizontal"
      enctype="multipart/form-data"
      action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['dispatchOrderAction']->value,'html','UTF-8' ));?>
"
      autocomplete="off"
>
  <div class="panel-body">
    <div id="inpost-dispatch-order-form-errors"></div>

    <div class="form-wrapper">
      <input type="hidden" name="id_shipment" value="">

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="id_dispatch_point" class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Dispatch point','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <div class="input-group">
              <select name="id_dispatch_point" id="id_dispatch_point" class="custom-select">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dispatchPointChoices']->value, 'choice');
$_smarty_tpl->tpl_vars['choice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['choice']->value) {
$_smarty_tpl->tpl_vars['choice']->do_else = false;
?>
                  <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['value'] ));?>
"<?php if ($_smarty_tpl->tpl_vars['choice']->value['value'] == $_smarty_tpl->tpl_vars['defaultDispatchPoint']->value) {?> selected="selected"<?php }?>>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['text'],'html','UTF-8' ));?>

                  </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
              <a class="btn btn-primary fixed-width-md js-inpost-new-dispatch-order"
                 href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['newDispatchPointUrl']->value,'html','UTF-8' ));?>
"
              >
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<?php }
}
