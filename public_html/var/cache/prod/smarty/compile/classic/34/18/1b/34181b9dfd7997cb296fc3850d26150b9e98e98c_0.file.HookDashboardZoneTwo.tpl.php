<?php
/* Smarty version 4.3.1, created on 2024-11-22 09:32:22
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ps_metrics/views/templates/hook/HookDashboardZoneTwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_674041961a0908_42839625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34181b9dfd7997cb296fc3850d26150b9e98e98c' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ps_metrics/views/templates/hook/HookDashboardZoneTwo.tpl',
      1 => 1730123601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674041961a0908_42839625 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="metrics-app"></div>

<?php if ($_smarty_tpl->tpl_vars['useLocalVueApp']->value == false) {?>
  <link rel="stylesheet" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathAssetsCdn']->value ));?>
" type="text/css" media="all">
<?php } elseif ($_smarty_tpl->tpl_vars['useLocalVueApp']->value == true && $_smarty_tpl->tpl_vars['useBuildModeOnly']->value == true) {?>
  <link rel="stylesheet" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathAssetsBuilded']->value ));?>
" type="text/css" media="all">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['useLocalVueApp']->value == true) {?>
  <?php if ($_smarty_tpl->tpl_vars['useBuildModeOnly']->value == true) {?>
    <?php echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathAppBuilded']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
  <?php } else { ?>
    <?php echo '<script'; ?>
 type="module" src="https://localhost:3001/@vite/client"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="module" src="https://localhost:3001/src/main.ts"><?php echo '</script'; ?>
>
  <?php }
} else { ?>
  <?php echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathAppCdn']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
}
