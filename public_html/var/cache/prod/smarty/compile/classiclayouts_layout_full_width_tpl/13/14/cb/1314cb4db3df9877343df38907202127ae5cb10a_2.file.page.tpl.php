<?php
/* Smarty version 4.3.1, created on 2024-10-14 11:00:13
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/cms/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670cdd9d61e977_74214234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1314cb4db3df9877343df38907202127ae5cb10a' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/cms/page.tpl',
      1 => 1721909132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670cdd9d61e977_74214234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37546124670cdd9d6181a5_81884171', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_798430662670cdd9d619053_54180438', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_37546124670cdd9d6181a5_81884171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_37546124670cdd9d6181a5_81884171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'cms_content'} */
class Block_1121262070670cdd9d6197f3_67586352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      
    <?php if (Tools::isCmsMenu($_smarty_tpl->tpl_vars['cms']->value)) {?>
      <div class="row m-0">
        <div class="col-md-9">        
          <?php echo $_smarty_tpl->tpl_vars['cms']->value['content'];?>

        </div>
        <div class="col-md-3" id="sticky-box-container">
          <div id="sticky-box">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBannerSec'),$_smarty_tpl ) );?>


            <div id="cms-menu">
              <h4 class="head-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'What we do','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
              <div class="cms-menu-container">
                <?php echo Tools::generateCmsMenu($_smarty_tpl->tpl_vars['cms']->value['id']);?>

              </div>
            </div>
            <div id="cms-menu-bottom">
              <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your question is not there?','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<i class="fas fa-chevron-right"></i></h5>
              <div class="cms-menu-product">
                <a href="/pl/kontakt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ask here','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['cms']->value['content'];?>

    <?php }?>
      <?php
}
}
/* {/block 'cms_content'} */
/* {block 'hook_cms_dispute_information'} */
class Block_1362449585670cdd9d61d3e9_45179064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSDisputeInformation'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_dispute_information'} */
/* {block 'hook_cms_print_button'} */
class Block_1738877083670cdd9d61dd87_87230476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSPrintButton'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_print_button'} */
/* {block 'page_content_container'} */
class Block_798430662670cdd9d619053_54180438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_798430662670cdd9d619053_54180438',
  ),
  'cms_content' => 
  array (
    0 => 'Block_1121262070670cdd9d6197f3_67586352',
  ),
  'hook_cms_dispute_information' => 
  array (
    0 => 'Block_1362449585670cdd9d61d3e9_45179064',
  ),
  'hook_cms_print_button' => 
  array (
    0 => 'Block_1738877083670cdd9d61dd87_87230476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-cms page-cms-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cms']->value['id'], ENT_QUOTES, 'UTF-8');?>
">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1121262070670cdd9d6197f3_67586352', 'cms_content', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1362449585670cdd9d61d3e9_45179064', 'hook_cms_dispute_information', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1738877083670cdd9d61dd87_87230476', 'hook_cms_print_button', $this->tplIndex);
?>


  </section>
<?php
}
}
/* {/block 'page_content_container'} */
}
