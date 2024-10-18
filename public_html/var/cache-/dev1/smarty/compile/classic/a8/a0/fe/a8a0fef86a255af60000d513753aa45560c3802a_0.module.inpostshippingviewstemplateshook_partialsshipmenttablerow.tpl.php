<?php
/* Smarty version 4.3.1, created on 2024-08-08 13:32:32
  from 'module:inpostshippingviewstemplateshook_partialsshipmenttablerow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4acd08eb139_92850453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8a0fef86a255af60000d513753aa45560c3802a' => 
    array (
      0 => 'module:inpostshippingviewstemplateshook_partialsshipmenttablerow.tpl',
      1 => 1709029526,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:inpostshipping/views/templates/hook/_partials/shipment-table-action.tpl' => 1,
  ),
),false)) {
function content_66b4acd08eb139_92850453 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/_partials/shipment-table-row.tpl --><tr>
  <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['shipment']->value['service'] ?? null)===null||$tmp==='' ? '__service__' ?? null : $tmp),'html','UTF-8' ));?>
</td>
  <td>
    <?php if (array_key_exists('tracking_number',(($tmp = $_smarty_tpl->tpl_vars['shipment']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp))) {?>
      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shipment']->value['tracking_number'],'html','UTF-8' ));?>

    <?php } else { ?>
      __tracking_number__
    <?php }?>
  </td>
  <td>
    <span class="text-primary cursor-pointer"
          data-toggle="pstooltip"
          data-boundary="window"
          data-original-title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['shipment']->value['status']['description'] ?? null)===null||$tmp==='' ? '__status_description__' ?? null : $tmp),'html','UTF-8' ));?>
"
    >
      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['shipment']->value['status']['title'] ?? null)===null||$tmp==='' ? '__status_title__' ?? null : $tmp),'html','UTF-8' ));?>

    </span>
  </td>
  <td class="text-right"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['shipment']->value['price'] ?? null)===null||$tmp==='' ? '__price__' ?? null : $tmp),'html','UTF-8' ));?>
</td>
  <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['shipment']->value['date_add'] ?? null)===null||$tmp==='' ? '__date_add__' ?? null : $tmp),'html','UTF-8' ));?>
</td>
  <td class="d-print-none action-type">
    <div class="btn-group-action text-right">
      <div class="btn-group">
        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['shipment']->value['viewUrl'] ?? null)===null||$tmp==='' ? '__view_url__' ?? null : $tmp),'html','UTF-8' ));?>
"
           class="btn tooltip-link js-view-inpost-shipment-details"
           data-toggle="pstooltip"
           data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
"
           data-id-shipment="<?php if ((isset($_smarty_tpl->tpl_vars['shipment']->value['id']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['shipment']->value['id'] ));
} else { ?>__id__<?php }?>"
        >
          <i class="material-icons">zoom_in</i>
        </a>
        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
        <div class="dropdown-menu dropdown-menu-right js-inpost-shipping-shipment-actions">
          <?php if ((isset($_smarty_tpl->tpl_vars['shipment']->value['actions']))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipment']->value['actions'], 'action', false, 'action_name');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action_name']->value => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
              <?php $_smarty_tpl->_subTemplateRender('module:inpostshipping/views/templates/hook/_partials/shipment-table-action.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
        </div>
      </div>
    </div>
  </td>
</tr>
<!-- end /home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/_partials/shipment-table-row.tpl --><?php }
}
