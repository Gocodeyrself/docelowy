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
{block name='header_banner'}
  <head>
    <!-- Dodanie Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}
<!-- Poczatek top headera -->
{block name='header_nav'}
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
      Premiera sklepu! Produkty są wciąż dodawane.
    </div>
  </nav>
{/block}


<!-- Zakonczenie top headera -->



{block name='header_top'}
  <div class="header-top">
    <div class="container p-c">
       <div class="row">
          <div class="col-md-12" id="menu_id_for_sm">
  {hook h='displayMegaMenu'}

  <div class="hidden-md-up">
    {renderLogo}

    {*<div id="blockwishlist">
      <a href="https://sklep.cezos.com/pl/module/blockwishlist/lists">
        <i class="fa fa-heart-o"></i>
      </a>
    </div>*}

    {hook h='displayLogin'}
  </div>
</div>
   </div>
       {* <div class="row"> *}
          {* <div class="col-md-5" id="left_header"> *}
            {* <i id="magic_sidebar_icon" class="fas fa-bars f-l trigger_magic_sidebar">   <span>Produkty</span></i> *}
            {*hook h='displaySearch'*}
          {* </div> *}
          {* <div class="col-md-2" id="_desktop_logo"> *}
            {* {if $shop.logo_details} *}
              {* {if $page.page_name == 'index'} *}
                {* <h1> *}
                  {* {renderLogo} *}
                {* </h1> *}
              {* {else} *}
                {* {renderLogo} *}
              {* {/if} *}
            {* {/if} *}
          {* </div> *}
          {* <div class="col-md-5" id="right_header"> *}
            {* {hook h='displayTop'} *}
        {* <div class="header-top-right col-lg-5 col-md-7 col-xs-12 position-static" id="displayTopRight"> *}
            {* <div class="icons_header"> *}
              {* {hook h='displayTopRight'} *}
            {* </div> *}
          {* </div> *}

        {* </div> *}
      {* </div> *}
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
  {hook h='displayNavFullWidth'}
{/block}
