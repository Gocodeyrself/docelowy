<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:07
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ps_googleanalytics/views/templates/hook/ps_googleanalytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740333bc3fed6_73361771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5099def7027961b6a9f0bbd08b4a3eda80bd5bf' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ps_googleanalytics/views/templates/hook/ps_googleanalytics.tpl',
      1 => 1730123624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740333bc3fed6_73361771 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gaAccountId']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag(
    'config',
    '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gaAccountId']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
',
    {
      'debug_mode':false
      <?php if ($_smarty_tpl->tpl_vars['gaAnonymizeEnabled']->value) {?>, 'anonymize_ip': true<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['userId']->value && !$_smarty_tpl->tpl_vars['backOffice']->value) {?>, 'user_id': '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userId']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['backOffice']->value && !$_smarty_tpl->tpl_vars['trackBackOffice']->value) {?>, 'non_interaction': true, 'send_page_view': false<?php }?>
    }
  );
<?php echo '</script'; ?>
>

<?php }
}
