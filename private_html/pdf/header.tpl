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
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  {* <nav class="header-nav" id="header_info">
    <div class="container p-c">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-5 col-xs-12">
            {hook h='displayNav1'}
          </div>
          <div class="col-md-7 right-nav">
              {hook h='displayNav2'}
              {if isset($headerSocialmedia)}
                {$headerSocialmedia nofilter}
              {/if}
          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav> *}
{/block}

{block name='header_top'}
  <div class="header-top">
    <div class="container p-c">
       <div class="row">
          <div class="col-md-12" id="menu_id_for_sm">
            {hook h='displayMegaMenu'}
            <div class="hidden-md-up">
              {renderLogo}
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
