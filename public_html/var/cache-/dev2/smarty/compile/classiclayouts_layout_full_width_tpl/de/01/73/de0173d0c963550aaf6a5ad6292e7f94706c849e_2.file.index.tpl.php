<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:12:34
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b632289d71_29463140',
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
function content_66b4b632289d71_29463140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
index-menu

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168462112366b4b6322857b1_20492515', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_6118788966b4b632287191_22022015 extends Smarty_Internal_Block
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
class Block_104243626366b4b632288e90_40332777 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

                      <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_3701700666b4b632288b41_20789709 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104243626366b4b632288e90_40332777', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_168462112366b4b6322857b1_20492515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_168462112366b4b6322857b1_20492515',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6118788966b4b632287191_22022015',
  ),
  'page_content' => 
  array (
    0 => 'Block_3701700666b4b632288b41_20789709',
  ),
  'hook_home' => 
  array (
    0 => 'Block_104243626366b4b632288e90_40332777',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6118788966b4b632287191_22022015', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3701700666b4b632288b41_20789709', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
