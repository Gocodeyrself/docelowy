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
* @author PrestaShop SA and Contributors <contact@prestashop.com>
  * @copyright Since 2007 PrestaShop SA and Contributors
  * @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
  *}
{extends file='page.tpl'}

{block name='page_header_container'}{/block}

{if $layout === 'layouts/layout-left-column.tpl'}
{block name="left_column"}
<div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
  {hook h='displayContactLeftColumn'}
</div>
{/block}
{else if $layout === 'layouts/layout-right-column.tpl'}
{block name="right_column"}
<div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
  {hook h='displayContactRightColumn'}
</div>
{/block}
{/if}

{block name='page_content'}
{if isset($contactData)}
<div class="col-md-9">
  {$contactData nofilter}
{/if}
  <h4 class="head-title"><span style="border-bottom:2px solid #ff0000">{l s='Contact' d='Shop.Theme.Global'}</span> {l s='Form' d='Shop.Theme.Global'}</h4>
  <div class="white-bgr padding-container box-shadow">
  {hook h='displayGform' id='12'}
  </div>
</div>  

<div class="col-md-3" id="sticky-box-container">
  <div id="sticky-box">
    {hook h='displayBannerSec'}

    <div id="cms-menu">
      <h4 class="head-title">{l s='What we do' d='Shop.Theme.Global'}</h4>
      <div class="cms-menu-container">
        {Tools::generateCmsMenu(0) nofilter}
      </div>
    </div>
  </div>
</div>

<div class="mt-3 map-container col-md-12">
  <div class="row" style="width:100%;">
  <div class="col-md-3" style="padding: 0;">
      {$contactAddress nofilter}
    </div>
    <iframe class="col-md-9" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2318.332739495452!2d18.511202276801267!3d54.47471087263798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fda0efd14dc283%3A0x62123cd7567edd47!2zQ2V6b3MgU3DDs8WCa2EgeiBvZ3Jhbmljem9uxIUgb2Rwb3dpZWR6aWFsbm_Fm2NpxIUgU3Auay4!5e0!3m2!1spl!2spl!4v1695020035315!5m2!1spl!2spl" width="100%" height="600" style="border:0;padding-bottom: 0px;padding-left: 0;padding-right: 0; border-radius: var(--border-radius);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
{/block}

{block name='google_reviews'}
<div class="kontakt-opinie">
  <iframe src="https://1569f588ae1d4fa6bca2dbef90cfc749.elf.site/" width="100%" height="500" style="position: relative; display: block; background-color: #fff !important; border-radius: 10px; border: 1px solid rgba(0, 0, 0, .125); box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.1);"></iframe>
</div>
{/block}
