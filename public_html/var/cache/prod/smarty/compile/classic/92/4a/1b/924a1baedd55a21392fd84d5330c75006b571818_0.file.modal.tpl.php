<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:58:37
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/modal/modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_674039ad5fef21_45646630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '924a1baedd55a21392fd84d5330c75006b571818' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/modal/modal.tpl',
      1 => 1709029526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674039ad5fef21_45646630 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['modal_id']->value,'html','UTF-8' ));?>
" tabindex="-1">
  <div class="modal-dialog <?php if ((isset($_smarty_tpl->tpl_vars['modal_class']->value))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['modal_class']->value,'html','UTF-8' ));
}?>">
    <div class="modal-content">
      <?php if ((isset($_smarty_tpl->tpl_vars['modal_title']->value))) {?>
        <div class="modal-header">
          <h4 class="modal-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['modal_title']->value,'html','UTF-8' ));?>
</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      <?php }?>

      <div class="modal-body">
        <?php echo $_smarty_tpl->tpl_vars['modal_content']->value;?>

      </div>

      <?php if ((isset($_smarty_tpl->tpl_vars['modal_actions']->value))) {?>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modal_actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['action']->value['type'] == 'link') {?>
              <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value['href'],'html','UTF-8' ));?>
" class="btn <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value['class'],'html','UTF-8' ));?>
">
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value['label'],'html','UTF-8' ));?>

              </a>
            <?php } elseif ($_smarty_tpl->tpl_vars['action']->value['type'] == 'button') {?>
              <button type="button" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value['value'],'html','UTF-8' ));?>
" class="btn <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value['class'],'html','UTF-8' ));?>
">
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value['label'],'html','UTF-8' ));?>

              </button>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      <?php }?>
    </div>
  </div>
</div>
<?php }
}
