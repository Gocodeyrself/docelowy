<?php
/* Smarty version 4.3.1, created on 2024-10-16 13:32:53
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/gformbuilderpro/views/templates/front/formtemplates/notfound.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670fa465aaa682_26431757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '828272cf575c1bdf8091ee92787df933d821cf7b' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/gformbuilderpro/views/templates/front/formtemplates/notfound.tpl',
      1 => 1723533775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670fa465aaa682_26431757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212058395670fa465aa5bc6_15422306', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_212058395670fa465aa5bc6_15422306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_212058395670fa465aa5bc6_15422306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Form not found','mod'=>'gformbuilderpro'),$_smarty_tpl ) );?>
</h4>
<?php
}
}
/* {/block 'page_content'} */
}
