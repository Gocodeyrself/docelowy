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
{extends file='page.tpl'}

{block name='page_title'}
  {$cms_category.name}
{/block}

{block name='page_content'}
  {block name='cms_sub_categories'}
    {if $sub_categories}
      <p>{l s='List of sub categories in %name%:' d='Shop.Theme.Global' sprintf=['%name%' => $cms_category.name]}</p>
      <ul>
        {foreach from=$sub_categories item=sub_category}
          <li><a href="{$sub_category.link}">{$sub_category.name}</a></li>
        {/foreach}
      </ul>
    {/if}
  {/block}

  {block name='cms_sub_pages'}
    {if $cms_pages}
      {* <p>{l s='List of pages in %category_name%:' d='Shop.Theme.Global' sprintf=['%category_name%' => $cms_category.name]}</p> *}
      <div class="blog-container-subpage row">
        {* {foreach from=$cms_pages item=cms_page}
          <li><a href="{$cms_page.link}">{$cms_page.meta_title}</a></li>
        {/foreach} *}
        {foreach from=$cms_pages item=itemBlog}
            <div class="col-md-4 col-sm-6">
              <div class="blog-item-container-subpage">
                <div class="blog-item-img-container col-xs-4 pl-0">
                  <img src="/img/cms/blog/{CMS::generateBlogImg($itemBlog.id_cms)}" class="img-fluid blog-item-img"/>
                </div>
                <div class="blog-item-text-container col-xs-8">
                  <div class="text-content">
                    <h4>{$itemBlog.meta_title}</h4>
                    <p>{$itemBlog.content|truncate:500:"..." nofilter}</p>
                  </div>
                  {* <img src="/img/cms/blog/{$itemBlog->image}" class="blog-item-img"/></a>
                  <h4>{$itemBlog->meta_title[1]}</h4> 
                  <p>{$itemBlog->content[1] nofilter}</p> *}
                  <a href="{$itemBlog.link}" class="btn btn-primary blog-item-btn">{l s='Read' d='Shop.Theme.Global'}</a>
                </div>
              </div>
            </div>
        {/foreach}
      </div>
    {/if}
  {/block}
{/block}
