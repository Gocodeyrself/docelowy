<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:25
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_recaptcha_free/views/templates/hook/captcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740334d483630_83867011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89868305e45ca0710e4a03488a1f5584cd5c46b7' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_recaptcha_free/views/templates/hook/captcha.tpl',
      1 => 1732199916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740334d483630_83867011 (Smarty_Internal_Template $_smarty_tpl) {
?><<?php if ($_smarty_tpl->tpl_vars['is16']->value) {?>div<?php } else { ?>p<?php }?> class="captcha_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['posTo']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['is16']->value) {?>form-group row required<?php } else { ?>text<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['posTo']->value)) && $_smarty_tpl->tpl_vars['posTo']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['posTo']->value,'quotes' )), ENT_QUOTES, 'UTF-8');
}?> page_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['captcha_page']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ver1<?php if ($_smarty_tpl->tpl_vars['is17']->value) {?>7<?php } elseif ($_smarty_tpl->tpl_vars['is16']->value) {?>6<?php } else { ?>5<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['ETS_RCF_CAPTCHA_TYPE']->value != 'google_v3') {?>
        <label for="pa_captcha" <?php if ($_smarty_tpl->tpl_vars['is16']->value) {?>class="col-md-3"<?php }?>>
            <?php if ((isset($_smarty_tpl->tpl_vars['ETS_RCF_CAPTCHA_TYPE']->value)) && $_smarty_tpl->tpl_vars['ETS_RCF_CAPTCHA_TYPE']->value != 'google') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter security code','mod'=>'ets_recaptcha_free'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Security check','mod'=>'ets_recaptcha_free'),$_smarty_tpl ) );?>

            <?php }?>
        </label>
    <?php } else { ?>
        <label for="pa_captcha" class="col-md-3"></label>
    <?php }?>
    <<?php if ($_smarty_tpl->tpl_vars['is16']->value) {?>div<?php } else { ?>span<?php }?> class="pa-captcha-inf <?php if ($_smarty_tpl->tpl_vars['is16']->value) {?>col-md-6<?php } else { ?>pa-captcha-field-cell<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['ETS_RCF_CAPTCHA_TYPE']->value == 'google_v3') {?>
            <div id="g-recaptcha-response-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( rand() )), ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php } elseif ($_smarty_tpl->tpl_vars['ETS_RCF_CAPTCHA_TYPE']->value == 'google') {?>
            <div class="g-recaptcha"></div>
        <?php }?>
    </<?php if ($_smarty_tpl->tpl_vars['is16']->value) {?>div<?php } else { ?>span<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['is16']->value) {?><div class="col-md-3 form-control-comment"></div><?php }?>
</<?php if ($_smarty_tpl->tpl_vars['is16']->value) {?>div<?php } else { ?>p<?php }?>><?php }
}
