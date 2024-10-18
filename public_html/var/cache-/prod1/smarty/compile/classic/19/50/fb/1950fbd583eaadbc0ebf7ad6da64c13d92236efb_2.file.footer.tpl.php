<?php
/* Smarty version 4.3.1, created on 2024-08-08 13:23:31
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/fblogin/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4aab3c43d75_51741858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1950fbd583eaadbc0ebf7ad6da64c13d92236efb' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/fblogin/footer.tpl',
      1 => 1716979452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4aab3c43d75_51741858 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="fbloader"></div>
<?php if ($_smarty_tpl->tpl_vars['fb_psver']->value == 4) {?>
    <?php echo '<script'; ?>
>
        var baseUri = baseDir;
    <?php echo '</script'; ?>
>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
    <?php if (Configuration::get('fbl_displayFooter') == 1) {?>
        <div class="fblogin fblfooter"><p onclick="fblogin_mypresta();"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in','mod'=>'fblogin'),$_smarty_tpl ) );?>
</span></p>
        </div>
    <?php }
}
}
}
