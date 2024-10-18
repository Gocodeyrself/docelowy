<?php
/* Smarty version 4.3.1, created on 2024-08-08 13:51:05
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/hook/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b1292f25b4_25657963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd25a6c6b3d331abf76eef53dda03d0f7c1730534' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/hook/header.tpl',
      1 => 1723115792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b1292f25b4_25657963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13870707966b4b1292ec668_14014231', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16755046266b4b1292f03c2_31930480', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177698470866b4b1292f0ac2_73580147', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_13870707966b4b1292ec668_14014231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_13870707966b4b1292ec668_14014231',
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
class Block_16755046266b4b1292f03c2_31930480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_16755046266b4b1292f03c2_31930480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_177698470866b4b1292f0ac2_73580147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_177698470866b4b1292f0ac2_73580147',
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
