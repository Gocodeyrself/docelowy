<?php
/* Smarty version 4.3.1, created on 2024-11-22 10:05:33
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740495de96d08_71118695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfa1e097518648fab44158cdb16f442e3ab2faf0' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/contact.tpl',
      1 => 1729853569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740495de96d08_71118695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17320775786740495de91af5_00597676', 'page_header_container');
?>


<?php if ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-left-column.tpl') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16950006486740495de931d9_26082400', "left_column");
?>

<?php } elseif ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-right-column.tpl') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15993472256740495de94318_70082432', "right_column");
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6267091366740495de948d7_99454689', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11724667856740495de969e1_95216126', 'google_reviews');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_17320775786740495de91af5_00597676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_17320775786740495de91af5_00597676',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block "left_column"} */
class Block_16950006486740495de931d9_26082400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_16950006486740495de931d9_26082400',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactLeftColumn'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_15993472256740495de94318_70082432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_15993472256740495de94318_70082432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactRightColumn'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block "right_column"} */
/* {block 'page_content'} */
class Block_6267091366740495de948d7_99454689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_6267091366740495de948d7_99454689',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['contactData']->value))) {?>
<div class="col-md-9">
  <?php echo $_smarty_tpl->tpl_vars['contactData']->value;?>

<?php }?>
  <h4 class="head-title"><span style="border-bottom:2px solid #ff0000"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Form','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
  <div class="white-bgr padding-container box-shadow">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGform','id'=>'12'),$_smarty_tpl ) );?>

  </div>
</div>  

<div class="col-md-3" id="sticky-box-container">
  <div id="sticky-box">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBannerSec'),$_smarty_tpl ) );?>


    <div id="cms-menu">
      <h4 class="head-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'What we do','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
      <div class="cms-menu-container">
        <?php echo Tools::generateCmsMenu(0);?>

      </div>
    </div>
  </div>
</div>

<div class="mt-3 map-container col-md-12">
  <div class="row" style="width:100%;">
  <div class="col-md-3" style="padding: 0;">
      <?php echo $_smarty_tpl->tpl_vars['contactAddress']->value;?>

    </div>
    <iframe class="col-md-9" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2318.332739495452!2d18.511202276801267!3d54.47471087263798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fda0efd14dc283%3A0x62123cd7567edd47!2zQ2V6b3MgU3DDs8WCa2EgeiBvZ3Jhbmljem9uxIUgb2Rwb3dpZWR6aWFsbm_Fm2NpxIUgU3Auay4!5e0!3m2!1spl!2spl!4v1695020035315!5m2!1spl!2spl" width="100%" height="600" style="border:0;padding-bottom: 0px;padding-left: 0;padding-right: 0; border-radius: var(--border-radius);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'google_reviews'} */
class Block_11724667856740495de969e1_95216126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'google_reviews' => 
  array (
    0 => 'Block_11724667856740495de969e1_95216126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="kontakt-opinie">
  <iframe src="https://1569f588ae1d4fa6bca2dbef90cfc749.elf.site/" width="100%" height="500" style="position: relative; display: block; background-color: #fff !important; border-radius: 10px; border: 1px solid rgba(0, 0, 0, .125); box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.1);"></iframe>
</div>
<?php
}
}
/* {/block 'google_reviews'} */
}
