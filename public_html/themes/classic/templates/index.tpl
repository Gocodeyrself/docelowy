index-menu{**
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
{extends file='page.tpl'}

    {block name='page_content_container'}
      <section id="content" class="page-home">
        <div class="row">
          <div id="index-menu" class="col-md-3 hidden-sm-down">
            <div class="index-menu-container">
              {hook h="displayIndexMenu"}
            </div>
          </div>
          <div class="col-xs-12 col-md-9">
            {hook h="displaySlider"}
            {if isset($tilesCategories)}
              {$tilesCategories nofilter}
            {/if}
          </div>
          {* <div class="col-lg-4 col-12" id="displayBanners">
            {hook h="displayBanners"}
          </div> *}
        </div>
        {block name='page_content_top'}
          {if isset($barsCategories)}
            {$barsCategories nofilter}
          {/if}
          {if isset($discoverCezos)}
            {$discoverCezos nofilter}
          {/if}
        {/block}

        {block name='page_content'}
          {block name='hook_home'}
            {$HOOK_HOME nofilter}
            {* <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FcezosLED&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> *}
          {/block}
        {/block}
      </section>
    {/block}
