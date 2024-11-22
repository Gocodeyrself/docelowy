<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:33
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403355a82031_70843107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de0173d0c963550aaf6a5ad6292e7f94706c849e' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/index.tpl',
      1 => 1701699379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67403355a82031_70843107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
index-menu

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212996940367403355a7fc73_52223170', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_13214501967403355a80a11_70148035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ((isset($_smarty_tpl->tpl_vars['barsCategories']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['barsCategories']->value;?>

          <?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['discoverCezos']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['discoverCezos']->value;?>

          <?php }?>
        <?php
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_125024574867403355a81927_22464289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

                      <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_177147896167403355a81777_17906842 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125024574867403355a81927_22464289', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_212996940367403355a7fc73_52223170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_212996940367403355a7fc73_52223170',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13214501967403355a80a11_70148035',
  ),
  'page_content' => 
  array (
    0 => 'Block_177147896167403355a81777_17906842',
  ),
  'hook_home' => 
  array (
    0 => 'Block_125024574867403355a81927_22464289',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <div class="row">
          <div id="index-menu" class="col-md-3 hidden-sm-down">
            <div class="index-menu-container">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayIndexMenu"),$_smarty_tpl ) );?>

            </div>
          </div>
          <div class="col-xs-12 col-md-9">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displaySlider"),$_smarty_tpl ) );?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tilesCategories']->value))) {?>
              <?php echo $_smarty_tpl->tpl_vars['tilesCategories']->value;?>

            <?php }?>
          </div>
                  </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13214501967403355a80a11_70148035', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177147896167403355a81777_17906842', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
