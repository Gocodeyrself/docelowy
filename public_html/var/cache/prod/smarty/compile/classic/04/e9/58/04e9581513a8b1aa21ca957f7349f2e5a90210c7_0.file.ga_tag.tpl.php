<?php
/* Smarty version 4.3.1, created on 2024-11-22 09:17:05
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403e01c99089_18890059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e9581513a8b1aa21ca957f7349f2e5a90210c7' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1730123624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67403e01c99089_18890059 (Smarty_Internal_Template $_smarty_tpl) {
if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {
echo '<script'; ?>
 type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
        <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

      });
<?php echo '</script'; ?>
>
<?php }
}
}
