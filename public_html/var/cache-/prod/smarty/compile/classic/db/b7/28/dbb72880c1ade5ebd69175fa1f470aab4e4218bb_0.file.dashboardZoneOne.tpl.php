<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:12:14
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/glogin/views/templates/dashboardZoneOne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b61e2d7225_56480294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbb72880c1ade5ebd69175fa1f470aab4e4218bb' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/glogin/views/templates/dashboardZoneOne.tpl',
      1 => 1716979481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b61e2d7225_56480294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<div class="panel" id="hookDashboardZoneOne_glogin">
    <div class="panel-heading">
        <i class="icon-puzzle-piece"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Login','mod'=>'glogin'),$_smarty_tpl ) );?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['update_availablility']->value != NULL) {?>
        <div class="alert alert-danger">
            <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['update_availablility']->value,'http://MyPresta.eu','<a href="https://mypresta.eu" target="blank">MyPresta.eu</a>');?>

        </div>
    <?php }?>
    <ul class="data_list_large">
        <li>
            <span class="data_label size_l">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer accounts','mod'=>'glogin'),$_smarty_tpl ) );?>

                <small class="text-muted"><br>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created with google login module','mod'=>'glogin'),$_smarty_tpl ) );?>

                </small>
			</span>
            <span class="data_value size_xxl">
			<?php echo $_smarty_tpl->tpl_vars['nb_of_fb_accounts']->value;?>

			</span>
        </li>
    </ul>
    <span class="data_label size_md">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last 10 accounts','mod'=>'glogin'),$_smarty_tpl ) );?>

    </span>
    <table class="table table-bordered clearfix">
        <?php echo $_smarty_tpl->tpl_vars['last_accounts']->value;?>

    </table>
</div><?php }
}
