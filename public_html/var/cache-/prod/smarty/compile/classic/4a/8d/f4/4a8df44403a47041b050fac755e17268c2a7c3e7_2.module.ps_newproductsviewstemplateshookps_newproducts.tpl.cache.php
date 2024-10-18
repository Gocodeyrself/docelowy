<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:12:15
  from 'module:ps_newproductsviewstemplateshookps_newproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b61f5d4380_21512754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:ps_newproductsviewstemplateshookps_newproducts.tpl',
      1 => 1698311522,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
function content_66b4b61f5d4380_21512754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '161030232866b4b61f5d0774_73702746';
?>

<?php if ((isset($_smarty_tpl->tpl_vars['tilesCategoriesTwo']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['tilesCategoriesTwo']->value;?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['consultant']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['consultant']->value;?>

<?php }?>
<section id="newProducts" class="featured-products clearfix section-box-shadow">
  <h4 class="head-title">   
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </h4>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'cssClass'=>"owl-carousel products-container",'productClass'=>"no-border"), 0, false);
?>
</section>

<?php }
}
