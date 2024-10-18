<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:12:15
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b61f709bd0_42475650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '654ad0653a295bbf18ba27101498f95accae2d4b' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/_partials/header.tpl',
      1 => 1719919219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b61f709bd0_42475650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157935669566b4b61f704964_96532727', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95637977966b4b61f705517_35953667', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32292855266b4b61f705bc7_78882094', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_157935669566b4b61f704964_96532727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_157935669566b4b61f704964_96532727',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_95637977966b4b61f705517_35953667 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_95637977966b4b61f705517_35953667',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_32292855266b4b61f705bc7_78882094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_32292855266b4b61f705bc7_78882094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container p-c">
       <div class="row">
          <div class="col-md-12" id="menu_id_for_sm">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegaMenu'),$_smarty_tpl ) );?>


  <div class="hidden-md-up">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>


    <div id="blockwishlist">
      <a href="https://sklep.cezos.com/pl/module/blockwishlist/lists">
        <i class="fa fa-heart-o"></i>
      </a>
    </div>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLogin'),$_smarty_tpl ) );?>

  </div>
</div>
   </div>
                                                                                                                                                                                                                                                                                         
                    <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
		  
          <div id="_mobile_contact_link"></div>
		</div>
      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
