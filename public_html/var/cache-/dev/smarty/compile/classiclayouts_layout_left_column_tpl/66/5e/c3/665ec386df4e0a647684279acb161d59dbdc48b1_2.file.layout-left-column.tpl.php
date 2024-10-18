<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:15:12
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b6d00cce42_99097815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '665ec386df4e0a647684279acb161d59dbdc48b1' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/layouts/layout-left-column.tpl',
      1 => 1699002948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b6d00cce42_99097815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63944646666b4b6d00ca1e0_53294573', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154951899266b4b6d00ca8d4_16183381', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_63944646666b4b6d00ca1e0_53294573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_63944646666b4b6d00ca1e0_53294573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_117223337166b4b6d00cc163_57897507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_154951899266b4b6d00ca8d4_16183381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_154951899266b4b6d00ca8d4_16183381',
  ),
  'content' => 
  array (
    0 => 'Block_117223337166b4b6d00cc163_57897507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
  <div id="content-wrapper" class="js-content-wrapper left-column col-xs-12 col-md-8 col-lg-9 <?php if (!(isset($_smarty_tpl->tpl_vars['miniaturesLayout']->value)) || $_smarty_tpl->tpl_vars['miniaturesLayout']->value == "2") {?>long_products<?php } else { ?>short_products<?php }?>">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117223337166b4b6d00cc163_57897507', 'content', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
