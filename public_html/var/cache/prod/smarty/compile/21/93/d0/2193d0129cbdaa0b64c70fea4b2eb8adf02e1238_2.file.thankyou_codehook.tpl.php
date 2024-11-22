<?php
/* Smarty version 4.3.1, created on 2024-11-22 09:03:06
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/gformbuilderpro/views/templates/front/thankyou_codehook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403aba70fc91_82429741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2193d0129cbdaa0b64c70fea4b2eb8adf02e1238' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/gformbuilderpro/views/templates/front/thankyou_codehook.tpl',
      1 => 1723533775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67403aba70fc91_82429741 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['_errors']->value)) && $_smarty_tpl->tpl_vars['_errors']->value) {?>
<div class="alert alert-danger" id="create_account_error">
    <ol>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_errors']->value, '_error');
$_smarty_tpl->tpl_vars['_error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_error']->value) {
$_smarty_tpl->tpl_vars['_error']->do_else = false;
?>
        <li><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_error']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
</div>
<?php } else { ?>
<div id="thankyou-page">
    <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value != '1') {?>
        <div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your message has been successfully sent to our team.','mod'=>'gformbuilderpro'),$_smarty_tpl ) );?>

		</div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['success_message']->value)) && $_smarty_tpl->tpl_vars['success_message']->value) {?>
        <?php echo $_smarty_tpl->tpl_vars['success_message']->value;?>
    <?php }?>
</div>
<?php }
}
}
