<?php
/* Smarty version 4.3.1, created on 2024-10-16 18:23:05
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/cms/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670fe869b258e4_85183770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57d3af8fe4dbd4f084faa8837de6db5d7de0b8e5' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/cms/category.tpl',
      1 => 1718717131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670fe869b258e4_85183770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1556889098670fe869b055f6_03255491', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1299702739670fe869b0c1e1_62801968', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_1556889098670fe869b055f6_03255491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_1556889098670fe869b055f6_03255491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cms_category']->value['name'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'cms_sub_categories'} */
class Block_2041447194670fe869b0c570_01914175 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['sub_categories']->value) {?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of sub categories in %name%:','d'=>'Shop.Theme.Global','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['cms_category']->value['name'])),$_smarty_tpl ) );?>
</p>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_categories']->value, 'sub_category');
$_smarty_tpl->tpl_vars['sub_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_category']->value) {
$_smarty_tpl->tpl_vars['sub_category']->do_else = false;
?>
          <li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_category']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php }?>
  <?php
}
}
/* {/block 'cms_sub_categories'} */
/* {block 'cms_sub_pages'} */
class Block_898630901670fe869b1b609_17636982 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['cms_pages']->value) {?>
            <div class="blog-container-subpage row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_pages']->value, 'itemBlog');
$_smarty_tpl->tpl_vars['itemBlog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemBlog']->value) {
$_smarty_tpl->tpl_vars['itemBlog']->do_else = false;
?>
            <div class="col-md-4 col-sm-6">
              <div class="blog-item-container-subpage">
                <div class="blog-item-img-container col-xs-4 pl-0">
                  <img src="/img/cms/blog/<?php echo htmlspecialchars((string) CMS::generateBlogImg($_smarty_tpl->tpl_vars['itemBlog']->value['id_cms']), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid blog-item-img"/>
                </div>
                <div class="blog-item-text-container col-xs-8">
                  <div class="text-content">
                    <h4><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['itemBlog']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
</h4>
                    <p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['itemBlog']->value['content'],500,"..." ));?>
</p>
                  </div>
                                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['itemBlog']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary blog-item-btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
                </div>
              </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'cms_sub_pages'} */
/* {block 'page_content'} */
class Block_1299702739670fe869b0c1e1_62801968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1299702739670fe869b0c1e1_62801968',
  ),
  'cms_sub_categories' => 
  array (
    0 => 'Block_2041447194670fe869b0c570_01914175',
  ),
  'cms_sub_pages' => 
  array (
    0 => 'Block_898630901670fe869b1b609_17636982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2041447194670fe869b0c570_01914175', 'cms_sub_categories', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_898630901670fe869b1b609_17636982', 'cms_sub_pages', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
