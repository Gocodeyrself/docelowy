<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:35:20
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/admin270jq8jrlc4glrd2ocx/themes/default/template/helpers/tree/tree_toolbar_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671094087b12d9_02746631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '767c1b0769fcabb8bbeae0835548cdfbbaebde5c' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/admin270jq8jrlc4glrd2ocx/themes/default/template/helpers/tree/tree_toolbar_link.tpl',
      1 => 1689594792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671094087b12d9_02746631 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['action']->value))) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['id']->value))) {?> id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
"<?php }?> class="btn btn-default">
	<?php if ((isset($_smarty_tpl->tpl_vars['icon_class']->value))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl ) );?>

</a>
<?php }
}
