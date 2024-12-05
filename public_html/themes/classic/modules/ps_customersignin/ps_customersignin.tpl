{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

 <div id="_desktop_user_info">
 <div class="user-info">
   {if $logged}
     <div class="dropdown">
       <!-- Ikona konta po zalogowaniu: account_circle -->
       <a
         class="account dropdown-toggle"
         href="#"
         title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}"
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
           {$customerName} <!-- Wyświetlamy pełną nazwę użytkownika -->
           <div class="user-email">
             {$customer.email} <!-- Wyświetlamy adres e-mail użytkownika -->
           </div>
         </div>
         <!-- Dynamiczne linki do stron zależne od języka -->
         <a class="dropdown-item" href="{$urls.pages.my_account}">
           {if $language.iso_code == 'pl'}
             Twoje konto
           {else}
             Your account
           {/if}
         </a>
         <a class="dropdown-item" href="{$urls.pages.identity}">
           {if $language.iso_code == 'pl'}
             Dane osobiste
           {else}
             Personal information
           {/if}
         </a>
         <a class="dropdown-item" href="{$urls.pages.history}">
           {if $language.iso_code == 'pl'}
             Historia zamówień
           {else}
             Order history
           {/if}
         </a>
         <!-- Link do wylogowania -->
         <a class="dropdown-item" href="{if $language.iso_code == 'pl'}https://cezos.com/pl/?mylogout={else}https://cezos.com/en/?mylogout={/if}" rel="nofollow">
           {if $language.iso_code == 'pl'}
             Wyloguj się
           {else}
             Logout
           {/if}
         </a>
       </div>
     </div>
   {else}
     <div class="dropdown">
       <!-- Ikona logowania przed zalogowaniem: person -->
       <a
         class="account dropdown-toggle"
         href="#"
         title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}"
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
         <a class="dropdown-item" href="{if $language.iso_code == 'pl'}https://cezos.com/pl/logowanie?back={$smarty.server.REQUEST_URI|escape:'html':'UTF-8'}{else}https://cezos.com/en/login?back={$smarty.server.REQUEST_URI|escape:'html':'UTF-8'}{/if}">
           {if $language.iso_code == 'pl'}
             Zaloguj
           {else}
             Log in
           {/if}
         </a>
         <!-- Poprawione tłumaczenie dla rejestracji -->
         <a class="dropdown-item" href="{$urls.pages.register|escape:'html':'UTF-8'}?back={$smarty.server.REQUEST_URI|escape:'html':'UTF-8'}">
           {if $language.iso_code == 'pl'}
             Zarejestruj
           {else}
             Register
           {/if}
         </a>
       </div>
     </div>
   {/if}
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
