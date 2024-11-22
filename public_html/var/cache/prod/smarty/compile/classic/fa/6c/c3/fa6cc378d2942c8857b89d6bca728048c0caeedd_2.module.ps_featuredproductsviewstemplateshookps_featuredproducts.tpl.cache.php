<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:33
  from 'module:ps_featuredproductsviewstemplateshookps_featuredproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_674033558ecfd8_42449826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:ps_featuredproductsviewstemplateshookps_featuredproducts.tpl',
      1 => 1720170317,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 3,
  ),
),false)) {
function content_674033558ecfd8_42449826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '375061117674033558e82d2_51106074';
?>
<section class="featured-products clearfix">
  <div class="featured-products-container section-box-shadow">
    <h4 class="head-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab1_name']->value, ENT_QUOTES, 'UTF-8');?>
</h4>    
    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products1']->value,'cssClass'=>"owl-carousel products-container",'productClass'=>"no-border"), 0, false);
?>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBanners"),$_smarty_tpl ) );?>

  <div class="featured-products-container section-box-shadow">
    <h4 class="head-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab2_name']->value, ENT_QUOTES, 'UTF-8');?>
</h4>    
    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products2']->value,'cssClass'=>"owl-carousel products-container",'productClass'=>"no-border"), 0, true);
?>
  </div>

  <div class="featured-products-container section-box-shadow">
    <h4 class="head-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab3_name']->value, ENT_QUOTES, 'UTF-8');?>
</h4>    
    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products3']->value,'cssClass'=>"owl-carousel products-container",'productClass'=>"no-border"), 0, true);
?>
  </div>
</section>
<?php }
}
