<?php
/* Smarty version 4.3.1, created on 2024-08-08 13:32:32
  from 'module:inpostshippingviewstemplateshook_partialsshipmenttableaction.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4acd08f62d9_31278632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab3bb9d41fc94121e0145c5d47ffd7d817b5ee95' => 
    array (
      0 => 'module:inpostshippingviewstemplateshook_partialsshipmenttableaction.tpl',
      1 => 1709029526,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4acd08f62d9_31278632 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/_partials/shipment-table-action.tpl --><a class="btn tooltip-link js-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['action_name']->value ?? null)===null||$tmp==='' ? '__name__' ?? null : $tmp),'html','UTF-8' ));?>
 dropdown-item"
   href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['action']->value['url'] ?? null)===null||$tmp==='' ? '__url__' ?? null : $tmp),'html','UTF-8' ));?>
"
   data-id-shipment="<?php if ((isset($_smarty_tpl->tpl_vars['shipment']->value['id']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['shipment']->value['id'] ));
} else { ?>__id__<?php }?>"
>
  <i class="material-icons">
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['action']->value['icon'] ?? null)===null||$tmp==='' ? '__icon__' ?? null : $tmp),'html','UTF-8' ));?>

  </i>
  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['action']->value['text'] ?? null)===null||$tmp==='' ? '__title__' ?? null : $tmp),'html','UTF-8' ));?>

</a>
<!-- end /home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/_partials/shipment-table-action.tpl --><?php }
}
