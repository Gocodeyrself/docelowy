<?php
/* Smarty version 4.3.1, created on 2024-10-16 12:11:53
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/_partials/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670f9169010595_51920312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75da77ad34e234857f3d4db2c6366e7f207b95e8' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/_partials/products.tpl',
      1 => 1728286974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_670f9169010595_51920312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list">
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['listing']->value['products'],'cssClass'=>"row"), 0, false);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_641321960670f916900f0b6_97746583', 'pagination');
?>


  <div class="hidden-md-up text-xs-right up">
    <a href="#left-column" class="btn btn-secondary">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to top','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      <i class="material-icons">&#xE316;</i>
    </a>
  </div>
</div>
<?php echo '<script'; ?>
>
  $('.btn-secondary').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $('#left-column').offset().top - 200 // Odejmij 20px, możesz dostosować liczbę
    }, 'slow');
  });
<?php echo '</script'; ?>
><?php }
/* {block 'pagination'} */
class Block_641321960670f916900f0b6_97746583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_641321960670f916900f0b6_97746583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
  <?php
}
}
/* {/block 'pagination'} */
}
