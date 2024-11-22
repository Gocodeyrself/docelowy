<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:25
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_recaptcha_free/views/templates/hook/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740334d3295b0_69942201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f26c1fbbfd3be7108d954415f324af71b0ee11c' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_recaptcha_free/views/templates/hook/head.tpl',
      1 => 1732199916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740334d3295b0_69942201 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?<?php if ($_smarty_tpl->tpl_vars['ETS_RCF_CAPTCHA_TYPE']->value == 'google') {?>onload=rcf_onloadCallback&render=explicit<?php }
if ((isset($_smarty_tpl->tpl_vars['hl']->value)) && $_smarty_tpl->tpl_vars['hl']->value) {?>&hl=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['ETS_RCF_CAPTCHA_TYPE']->value == 'google') {?>async defer<?php }?>><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    <?php if ($_smarty_tpl->tpl_vars['ETS_RCF_CAPTCHA_TYPE']->value == 'google') {?>
        var ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
        var recaptchaWidgets = [];
        var rcf_onloadCallback = function () {
            ets_rcf_captcha_load(document.getElementsByTagName('form'));
        };
        var ets_rcf_captcha_load = function (forms) {
            var pattern = /(^|\s)g-recaptcha(\s|$)/;
            for (var i = 0; i < forms.length; i++) {
                var items = forms[i].getElementsByTagName('div');
                for (var k = 0; k < items.length; k++) {
                    if (items[k].className && items[k].className.match(pattern) && ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY) {
                        var widget_id = grecaptcha.render(items[k], {
                            'sitekey': ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY,
                            'theme': 'light',
                        });
                        recaptchaWidgets.push(widget_id);
                        break;
                    }
                }
            }
        };
    <?php } else { ?>
        var ETS_RCF_GOOGLE_V3_CAPTCHA_SITE_KEY = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_RCF_GOOGLE_V3_CAPTCHA_SITE_KEY']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
        var ETS_RCF_GOOGLE_V3_POSITION = 'bottomright';
    <?php }
echo '</script'; ?>
>
<style>
    #contact #notifications{
        display:none;
    }
</style><?php }
}
