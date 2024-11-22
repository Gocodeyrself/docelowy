<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:33
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/_partials/blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403355c8d743_40165555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46cd6c9ab45664696a72e66a2152687ee57e54d9' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/_partials/blog.tpl',
      1 => 1718717008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67403355c8d743_40165555 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br/>
 <div class="blog-index-container owl-carousel">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'itemBlog');
$_smarty_tpl->tpl_vars['itemBlog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemBlog']->value) {
$_smarty_tpl->tpl_vars['itemBlog']->do_else = false;
?>
        <div class="blog-item-container">
            <a href="/content/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['itemBlog']->value->id_cms, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['itemBlog']->value->link_rewrite[1], ENT_QUOTES, 'UTF-8');?>
"><img src="/img/cms/blog/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['itemBlog']->value->image, ENT_QUOTES, 'UTF-8');?>
" class="blog-item-img"/></a>
            <h4><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['itemBlog']->value->meta_title[1], ENT_QUOTES, 'UTF-8');?>
</h4> 
            <?php echo $_smarty_tpl->tpl_vars['itemBlog']->value->content[1];?>

            <a href="/content/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['itemBlog']->value->id_cms, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['itemBlog']->value->link_rewrite[1], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary blog-item-btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 </div><?php }
}
