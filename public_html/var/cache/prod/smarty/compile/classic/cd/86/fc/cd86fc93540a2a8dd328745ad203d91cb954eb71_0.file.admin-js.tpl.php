<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:35:21
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/hook/admin-js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671094091369a0_68767421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd86fc93540a2a8dd328745ad203d91cb954eb71' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/hook/admin-js.tpl',
      1 => 1700227159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671094091369a0_68767421 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var Days_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day(s)','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var Hours_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hr(s)','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var Mins_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Min(s)','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var Sec_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sec(s)','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var Sorted_successfully_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorted successfully','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['js_dir_path']->value,'quotes','UTF-8' ));?>
jquery.countdown.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['js_dir_path']->value,'quotes','UTF-8' ));?>
megamenu-admin.js"><?php echo '</script'; ?>
><?php }
}
