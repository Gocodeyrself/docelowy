<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:25
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740334d38b682_88916307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '654ad0653a295bbf18ba27101498f95accae2d4b' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/_partials/header.tpl',
      1 => 1731479816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740334d38b682_88916307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19572911786740334d388f88_88389343', 'header_banner');
?>

<!-- Poczatek top headera -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_273927956740334d389586_02472221', 'header_nav');
?>



<!-- Zakonczenie top headera -->



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1194295076740334d389f42_89181284', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_19572911786740334d388f88_88389343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_19572911786740334d388f88_88389343',
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
class Block_273927956740334d389586_02472221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_273927956740334d389586_02472221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style>
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideIn {
        from { transform: translateX(-100%); }
        to { transform: translateX(0); }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    .header-nav {
        background-color: #f8f9fa;
        padding: 5px 20px;
        font-size: 14px;
        text-align: center;
        animation: fadeIn 2s ease-out; /* Efekt pojawiania się całego nagłówka */
    }

    .header-nav .top-header-message {
        font-weight: bold;
        font-size: 16px;
        color: #574d67;
        display: inline-block;
        animation: slideIn 1.5s ease-out, pulse 3s infinite; /* Przesuwanie + pulsowanie */
    }
  </style>

  <nav class="header-nav" id="header_info">
    <!-- Wyśrodkowany komunikat z animacją -->
    <div class="top-header-message">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store Launch! Products are still being added','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_1194295076740334d389f42_89181284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_1194295076740334d389f42_89181284',
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
