<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:58:37
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/modal/print-shipment-label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_674039ad5f5835_39191019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb5f520c11c80159c90ca57f6c9e6c91458c295c' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/modal/print-shipment-label.tpl',
      1 => 1709029526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674039ad5f5835_39191019 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="inpost-print-shipment-label-form"
      class="defaultForm form-horizontal"
      enctype="multipart/form-data"
      action=""
>
  <div class="panel-body">
    <div class="form-wrapper">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Label format','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['labelFormatChoices']->value, 'choice');
$_smarty_tpl->tpl_vars['choice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['choice']->value) {
$_smarty_tpl->tpl_vars['choice']->do_else = false;
?>
              <div class="radio">
                <label>
                  <input type="radio"
                         name="label_format"
                         id="label_format_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['value'],'html','UTF-8' ));?>
"
                         value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['value'],'html','UTF-8' ));?>
"
                         <?php if ($_smarty_tpl->tpl_vars['choice']->value['value'] === $_smarty_tpl->tpl_vars['defaultLabelFormat']->value) {?>checked="checked"<?php }?>
                  >
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['text'],'html','UTF-8' ));?>

                </label>
              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <label class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Label type','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['labelTypeChoices']->value, 'choice');
$_smarty_tpl->tpl_vars['choice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['choice']->value) {
$_smarty_tpl->tpl_vars['choice']->do_else = false;
?>
              <div class="radio">
                <label>
                  <input type="radio"
                         name="label_type"
                         id="label_type_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['value'],'html','UTF-8' ));?>
"
                         value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['value'],'html','UTF-8' ));?>
"
                         <?php if ($_smarty_tpl->tpl_vars['choice']->value['value'] === $_smarty_tpl->tpl_vars['defaultLabelType']->value) {?>checked="checked"<?php }?>
                  >
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['text'],'html','UTF-8' ));?>

                </label>
              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<?php }
}
