<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:12:33
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/glogin/views/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b631c84905_74780630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3613d97863188e8eb0fcf66c7a0aaa214259dcac' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/glogin/views/templates/header.tpl',
      1 => 1716979481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b631c84905_74780630 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['logged']->value) {?>

    <?php echo '<script'; ?>
>
        var gglogin_appid = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ggl_appid']->value, ENT_QUOTES, 'UTF-8');?>
';
        var ggl_loginloader = '<?php echo $_smarty_tpl->tpl_vars['ggl_loginloader']->value;?>
';
        
        <?php if (Tools::getValue('back','false') != 'false') {?>
        var back = '<?php echo htmlspecialchars((string) Tools::getValue('back','false'), ENT_QUOTES, 'UTF-8');?>
';
        <?php }?>
        
        
        <?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 7 || $_smarty_tpl->tpl_vars['ps_version80']->value >= 8) {?>
        var baseDir = prestashop.urls.base_url;
        var baseUri = prestashop.urls.base_url;
        <?php }?>
        
    <?php echo '</script'; ?>
>

<?php }
if (((Context::getContext()->controller->php_self !== null )) && (isset($_smarty_tpl->tpl_vars['passwd']->value))) {?>
    <?php if (Context::getContext()->controller->php_self == "identity") {?>
    
        <?php echo '<script'; ?>
>
            document.addEventListener("DOMContentLoaded", function (event) {
                $("#old_passwd,#passwd,#confirmation, input[name='new_password'], input[name='password']").parent().parent().parent().hide();
                $("#old_passwd, input[name='new_password']").val('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['passwd']->value, ENT_QUOTES, 'UTF-8');?>
');
                $("#passwd, input[name='password']").val('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['passwd']->value, ENT_QUOTES, 'UTF-8');?>
');
                $("#confirmation").val('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['passwd']->value, ENT_QUOTES, 'UTF-8');?>
');
            });
        <?php echo '</script'; ?>
>
    
    <?php }
}
}
}
