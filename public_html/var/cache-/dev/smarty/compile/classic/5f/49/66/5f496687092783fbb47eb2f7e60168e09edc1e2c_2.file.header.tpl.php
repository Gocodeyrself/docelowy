<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:14:42
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/fblogin/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b6b24dd6d9_62270027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f496687092783fbb47eb2f7e60168e09edc1e2c' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/fblogin/header.tpl',
      1 => 1716979452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b6b24dd6d9_62270027 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
    
    <?php if (Tools::getValue('back','false') != 'false') {?>
    var back = '<?php echo htmlspecialchars((string) Tools::getValue('back','false'), ENT_QUOTES, 'UTF-8');?>
';
    <?php }?>
    
    var fblogin_appid = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fbl_appid']->value, ENT_QUOTES, 'UTF-8');?>
';
    var fblogin_langcode = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fbl_langcode']->value, ENT_QUOTES, 'UTF-8');?>
';
    
    <?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 7 || $_smarty_tpl->tpl_vars['ps_version80']->value >= 8) {?>
    var baseDir = prestashop.urls.base_url;
    <?php }?>
    <?php if (Configuration::get('fblogin_inapp') == 1) {?>
    var fblogin_include_app = true;
    <?php } else { ?>
    var fblogin_include_app = false;
    <?php }
echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value == "identity" && (isset($_smarty_tpl->tpl_vars['passwd']->value))) {?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $("#old_passwd,#passwd,#confirmation").parent().hide();
            $("#old_passwd").val('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['passwd']->value, ENT_QUOTES, 'UTF-8');?>
');
            $("#passwd").val('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['passwd']->value, ENT_QUOTES, 'UTF-8');?>
');
            $("#confirmation").val('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['passwd']->value, ENT_QUOTES, 'UTF-8');?>
');
        })
    <?php echo '</script'; ?>
>

<?php }
}
}
