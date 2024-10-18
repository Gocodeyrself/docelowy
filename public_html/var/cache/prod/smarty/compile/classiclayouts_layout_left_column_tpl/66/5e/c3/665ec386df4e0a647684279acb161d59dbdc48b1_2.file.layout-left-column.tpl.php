<?php
/* Smarty version 4.3.1, created on 2024-10-14 11:12:57
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670ce099ad0ef0_47721592',
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
function content_670ce099ad0ef0_47721592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1997205876670ce099acdef8_54066604', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2068733664670ce099ace799_60286423', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_1997205876670ce099acdef8_54066604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1997205876670ce099acdef8_54066604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_1052146483670ce099ad01e7_17022695 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_2068733664670ce099ace799_60286423 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_2068733664670ce099ace799_60286423',
  ),
  'content' => 
  array (
    0 => 'Block_1052146483670ce099ad01e7_17022695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
  <div id="content-wrapper" class="js-content-wrapper left-column col-xs-12 col-md-8 col-lg-9 <?php if (!(isset($_smarty_tpl->tpl_vars['miniaturesLayout']->value)) || $_smarty_tpl->tpl_vars['miniaturesLayout']->value == "2") {?>long_products<?php } else { ?>short_products<?php }?>">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1052146483670ce099ad01e7_17022695', 'content', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
