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

<br/>
 <div class="blog-index-container owl-carousel">
    {foreach from=$items item=itemBlog}
        <div class="blog-item-container">
            <a href="/content/{$itemBlog->id_cms}-{$itemBlog->link_rewrite[1]}"><img src="/img/cms/blog/{$itemBlog->image}" class="blog-item-img"/></a>
            <h4>{$itemBlog->meta_title[1]}</h4> 
            {$itemBlog->content[1] nofilter}
            <a href="/content/{$itemBlog->id_cms}-{$itemBlog->link_rewrite[1]}" class="btn btn-primary blog-item-btn">{l s='Read' d='Shop.Theme.Global'}</a>
        </div>
    {/foreach}
 </div>