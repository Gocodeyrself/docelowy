<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:08
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/glogin/views/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740333c5282e8_80398927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a96cd0927ee5cf8828dc6b94ff121741862902e5' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/glogin/views/templates/footer.tpl',
      1 => 1716979481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740333c5282e8_80398927 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="gloader"></div>
<?php if (Configuration::get('ggl_footer') == 1) {?>
    <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
        <div class="glogin customBtnFooter">
            <div id="customBtnFooter" class="customGPlusSignIn" onclick="glogin_mypresta();">
                <span class="buttonText"><?php if (Configuration::get('glogin_button_style') == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in with Google','mod'=>'glogin'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in','mod'=>'glogin'),$_smarty_tpl ) );
}?></span>
            </div>
        </div>
    <?php }
}
}
}
