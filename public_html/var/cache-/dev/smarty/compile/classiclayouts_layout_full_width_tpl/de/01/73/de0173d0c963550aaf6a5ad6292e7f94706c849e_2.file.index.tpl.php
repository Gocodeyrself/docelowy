<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:14:42
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b6b2b57601_08585191',
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
function content_66b4b6b2b57601_08585191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
index-menu

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123833583766b4b6b2b4eb67_24136793', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_129230449666b4b6b2b52181_69446952 extends Smarty_Internal_Block
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
class Block_86368555466b4b6b2b55a17_18334249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

                      <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_170490095066b4b6b2b553e8_34706356 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86368555466b4b6b2b55a17_18334249', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_123833583766b4b6b2b4eb67_24136793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_123833583766b4b6b2b4eb67_24136793',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_129230449666b4b6b2b52181_69446952',
  ),
  'page_content' => 
  array (
    0 => 'Block_170490095066b4b6b2b553e8_34706356',
  ),
  'hook_home' => 
  array (
    0 => 'Block_86368555466b4b6b2b55a17_18334249',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129230449666b4b6b2b52181_69446952', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170490095066b4b6b2b553e8_34706356', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
