<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:12:07
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/admin270jq8jrlc4glrd2ocx/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b617ac37d3_81724289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a12f3c037ce9cc8497bd7863e25e86d5467d7f6a' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/admin270jq8jrlc4glrd2ocx/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1689594794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b617ac37d3_81724289 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
