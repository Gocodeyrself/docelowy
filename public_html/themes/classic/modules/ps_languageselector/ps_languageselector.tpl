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

 <div id="_desktop_language_selector">
 <div class="language-selector-wrapper">
   <div class="language-selector dropdown">
     <!-- Przycisk do rozwijania dropdowna (tylko flaga) -->
     <button data-toggle="dropdown" class="hidden-sm-down btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="{l s='Language dropdown' d='Shop.Theme.Global'}">
       <img class="flag_img image-fluid" src="/img/flags/{$current_language.iso_code}.jpg"/>
     </button>
     
     <!-- Lista dostępnych języków w pełnych nazwach -->
     <ul class="dropdown-menu" aria-labelledby="language-selector-label">
       {foreach from=$languages item=language}
         <li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
           <a href="{url entity='language' id=$language.id_lang}" class="dropdown-item" data-iso-code="{$language.iso_code}">
             <img class="flag_img image-fluid" src="/img/flags/{$language.iso_code}.jpg"/>
             {if $language.iso_code == 'pl'} Polski {else} English {/if} <!-- Pełne nazwy języków w dropdownie -->
           </a>
         </li>
       {/foreach}
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
