<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:07
  from 'module:ps_languageselectorps_languageselector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740333bcb0963_57502686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:ps_languageselectorps_languageselector.tpl',
      1 => 1729853448,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740333bcb0963_57502686 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div id="_desktop_language_selector">
 <div class="language-selector-wrapper">
   <div class="language-selector dropdown">
     <!-- Przycisk do rozwijania dropdowna (tylko flaga) -->
     <button data-toggle="dropdown" class="hidden-sm-down btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language dropdown','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
       <img class="flag_img image-fluid" src="/img/flags/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg"/>
     </button>
     
     <!-- Lista dostępnych języków w pełnych nazwach -->
     <ul class="dropdown-menu" aria-labelledby="language-selector-label">
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
         <li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
           <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" class="dropdown-item" data-iso-code="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
             <img class="flag_img image-fluid" src="/img/flags/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg"/>
             <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'pl') {?> Polski <?php } else { ?> English <?php }?> <!-- Pełne nazwy języków w dropdownie -->
           </a>
         </li>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     </ul>
   </div>
 </div>
</div>
<style>
 /* Stylizacja przycisku rozwijanego menu */
 .language-selector button {
   cursor: pointer;
   padding: 3px;
   border: none;
   background-color: transparent;
   display: flex;
   align-items: center;
   width: 20px;
   height: 14px;
 }
 .language-selector .flag_img {
   width: 20px;
   height: 14px;
 }
 /* Dropdown menu */
 .language-selector .dropdown-menu {
   display: none;
   position: absolute;
   background-color: white;
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
   width: auto;
   min-width: 100px; /* Minimalna szerokość dropdownu */
   padding: 5px; /* Zmniejszony padding */
   z-index: 9999;
   top: 100%;
   right: 0; /* Przyleganie do prawej krawędzi */
   margin-right: 5px; /* Margines 5px od prawej strony */
   border-radius: 5px;
   opacity: 0;
   transition: all 0.3s ease 0s;
   transform: translateY(-10px);
 }
 /* Pokaż menu po kliknięciu */
 .language-selector:hover .dropdown-menu,
 .language-selector button:focus + .dropdown-menu {
   display: block;
   opacity: 1;
   transform: translateY(0);
 }
 /* Stylizacja elementów w dropdown */
 .language-selector .dropdown-item {
   font-weight: 600;
   font-size: 14px; /* Zmniejszony rozmiar czcionki */
   color: #000;
   padding: 5px 10px; /* Zmniejszony padding wewnątrz dropdownu */
   display: flex;
   align-items: center;
   text-decoration: none;
 }
 .language-selector .dropdown-item:hover {
   background-color: #f0f0f0;
 }
 .language-selector .dropdown-item .flag_img {
   width: 18px;
   height: 12px;
   margin-right: 8px;
 }
 /* Stylizacja aktualnie wybranego języka */
 .language-selector .current {
   font-weight: bold;
 }
 @media (max-width: 767px) {
   .language-selector button {
     font-size: 12px;
   }
   .language-selector .dropdown-menu {
     left: 50%;
     right: auto;
     transform: translateX(-50%) translateY(-10px);
     min-width: 90%;
     box-sizing: border-box;
   }
 }
</style>
<?php }
}
