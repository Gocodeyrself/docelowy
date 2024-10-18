<?php
/* Smarty version 4.3.1, created on 2024-10-16 12:12:29
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/pi_gusloader/views/templates/hook/pi_gusloader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670f918dd54f29_19875605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b5946870c44c64008ca1375892d6a20fd448cb2' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/pi_gusloader/views/templates/hook/pi_gusloader.tpl',
      1 => 1720432368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670f918dd54f29_19875605 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="asgusloadercontainer as-hidden">
    <button id="asgusloaderbutton" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pobierz dane z GUS','mod'=>"asgusloader"),$_smarty_tpl ) );?>
</button>
    <div class="as-spinner"></div>
    <div class="asgusloader-notification"></div>
</div><?php }
}
