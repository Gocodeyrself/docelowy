<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:14:42
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b6b28a0d50_43186695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c806284826cd4cd0e567179b37f9da9426bb778a' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1720695181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b6b28a0d50_43186695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '121774724766b4b6b28993c2_16394902';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51718681066b4b6b289a1f7_92295204', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_51718681066b4b6b289a1f7_92295204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_51718681066b4b6b289a1f7_92295204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] != "new" && $_smarty_tpl->tpl_vars['flag']->value['type'] != "discount" && $_smarty_tpl->tpl_vars['flag']->value['type'] != "on-sale" && $_smarty_tpl->tpl_vars['flag']->value['type'] != "out_of_stock") {?>
                <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if (Tools::generateFlag(10,$_smarty_tpl->tpl_vars['product']->value['id'])) {?>
            <li class="product-flag new"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New','d'=>"Shop.Theme.Global"),$_smarty_tpl ) );?>
</li>
        <?php }?>
        <?php if (Tools::generateFlag(11,$_smarty_tpl->tpl_vars['product']->value['id'])) {?>
            <li class="product-flag promotion"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special offer','d'=>"Shop.Theme.Global"),$_smarty_tpl ) );?>
</li>
        <?php }?>
        <?php if (Tools::generateFlag(12,$_smarty_tpl->tpl_vars['product']->value['id'])) {?>
            <li class="product-flag bestseller">Bestseller</li>
        <?php }?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
