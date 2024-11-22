<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:07
  from 'module:ps_customersigninps_customersignin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740333bca2c49_08296592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersigninps_customersignin.tpl',
      1 => 1732176815,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740333bca2c49_08296592 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div id="_desktop_user_info">
 <div class="user-info">
   <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
     <div class="dropdown">
       <!-- Ikona konta po zalogowaniu: account_circle -->
       <a
         class="account dropdown-toggle"
         href="#"
         title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
         rel="nofollow"
         id="accountDropdown"
         aria-haspopup="true"
         aria-expanded="false"
       >
         <i class="material-icons">account_circle</i> <!-- Ikona account_circle po zalogowaniu -->
         <i class="material-icons arrow">&#xE5C5;</i> <!-- Strzałka do rozwijania -->
       </a>
       <div class="dropdown-menu" aria-labelledby="accountDropdown">
         <!-- Pełna nazwa użytkownika i adres e-mail -->
         <div class="dropdown-item user-full-name">
           <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
 <!-- Wyświetlamy pełną nazwę użytkownika -->
           <div class="user-email">
             <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['email'], ENT_QUOTES, 'UTF-8');?>
 <!-- Wyświetlamy adres e-mail użytkownika -->
           </div>
         </div>
         <!-- Dynamiczne linki do stron zależne od języka -->
         <a class="dropdown-item" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
">
           <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'pl') {?>
             Twoje konto
           <?php } else { ?>
             Your account
           <?php }?>
         </a>
         <a class="dropdown-item" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">
           <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'pl') {?>
             Dane osobiste
           <?php } else { ?>
             Personal information
           <?php }?>
         </a>
         <a class="dropdown-item" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
">
           <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'pl') {?>
             Historia zamówień
           <?php } else { ?>
             Order history
           <?php }?>
         </a>
         <!-- Link do wylogowania -->
         <a class="dropdown-item" href="<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'pl') {?>https://cezos.com/pl/?mylogout=<?php } else { ?>https://cezos.com/en/?mylogout=<?php }?>" rel="nofollow">
           <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'pl') {?>
             Wyloguj się
           <?php } else { ?>
             Logout
           <?php }?>
         </a>
       </div>
     </div>
   <?php } else { ?>
     <div class="dropdown">
       <!-- Ikona logowania przed zalogowaniem: person -->
       <a
         class="account dropdown-toggle"
         href="#"
         title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
         rel="nofollow"
         id="accountDropdown"
         aria-haspopup="true"
         aria-expanded="false"
       >
         <i class="material-icons">person</i> <!-- Ikona person przed zalogowaniem -->
         <i class="material-icons arrow">&#xE5C5;</i> <!-- Strzałka do rozwijania -->
       </a>
       <div class="dropdown-menu" aria-labelledby="accountDropdown">
         <!-- Poprawione linki do logowania -->
         <a class="dropdown-item" href="<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'pl') {?>https://cezos.com/pl/logowanie<?php } else { ?>https://cezos.com/en/login<?php }?>">
           <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'pl') {?>
             Zaloguj
           <?php } else { ?>
             Log in
           <?php }?>
         </a>
         <!-- Poprawione tłumaczenie dla rejestracji -->
         <a class="dropdown-item" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
">
           <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == 'pl') {?>
             Zarejestruj
           <?php } else { ?>
             Register
           <?php }?>
         </a>
       </div>
     </div>
   <?php }?>
 </div>
</div>
<style>
 /* CSS bez zmian */
 .dropdown-menu {
   display: none;
   position: absolute;
   background-color: white;
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
   min-width: 250px;
   padding: 10px;
   z-index: 9999;
   top: 80%;
   left: 0;
   border-radius: 5px;
   opacity: 0;
   transition: all 0.3s ease 0s;
   transform: translateY(-10px);
 }
 .dropdown:hover .dropdown-menu,
 .dropdown-toggle:focus + .dropdown-menu {
   display: block;
   opacity: 1;
   transform: translateY(0);
 }
 .dropdown-item {
   font-weight: 600;
   font-size: 18px;
   color: #000;
   padding: 15px 20px;
   display: block;
   text-decoration: none;
 }
 .dropdown-item:hover {
   background-color: transparent;
 }
 .user-full-name {
   font-weight: bold;
   font-size: 18px;
   padding: 10px 20px;
   border-bottom: 1px solid #e0e0e0;
   color: #333;
   background-color: #f9f9f9;
   border-radius: 5px 5px 0 0;
 }
 .user-email {
   font-size: 14px;
   color: #666;
 }
 .arrow {
   vertical-align: middle;
   font-size: 16px;
 }
 @media (max-width: 767px) {
   .arrow {
     display: none;
   }
   .dropdown-menu {
     display: none;
     left: 50%;
     right: auto;
     transform: translateX(-50%) translateY(-10px);
     min-width: 90%;
     box-sizing: border-box;
   }
   .dropdown-toggle:focus + .dropdown-menu,
   .dropdown-toggle:active + .dropdown-menu {
     display: block;
     opacity: 1;
     transform: translateX(-50%) translateY(0);
   }
 }
</style>
<?php }
}
