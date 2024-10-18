{*
/**
 * Copyright ETS Software Technology Co., Ltd
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 website only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.
 *
 * @author ETS Software Technology Co., Ltd
 * @copyright  ETS Software Technology Co., Ltd
 * @license    Valid for 1 website (or project) for each purchase of license
 */
*}


<ul id="index-mega-menu">
    {foreach from=$menu.tabs key='key' item='tab'}
        <li class="index-mega-menu-li-item">
            <div class="index-mega-menu-div-item">
               <span class="mm_tab_name mm_tab_toggle{if $tab.columns} mm_tab_has_child{/if}">
                    <span>
                        {if $tab.url}
                            {Tools::generateCategoryMiniatureById($tab.id_category)}
                            <a class="ets_mm_url" href="{$tab.url|escape:'html':'UTF-8'}">
                        {/if}
                            {if $tab.tab_img_link}
                                <img src="{$tab.tab_img_link|escape:'html':'UTF-8'}" title="" alt="" width="20"/>
                            {else if $tab.tab_icon}
                                <i class="fa {$tab.tab_icon|escape:'html':'UTF-8'}"></i>
                            {/if}
                            {$tab.title|escape:'html':'UTF-8'}
                            {if $tab.bubble_text}<span class="mm_bubble_text" style="background: {if $tab.bubble_background_color}{$tab.bubble_background_color|escape:'html':'UTF-8'}{else}#FC4444{/if}; color: {if $tab.bubble_text_color|escape:'html':'UTF-8'}{$tab.bubble_text_color|escape:'html':'UTF-8'}{else}#ffffff{/if};">{$tab.bubble_text|escape:'html':'UTF-8'}</span>{/if}
                        {if $tab.url}
                            </a>
                        {/if}
                    </span>
                </span>
            </div>
            {if $tab.columns}
                <ul class="index-mega-menu-ul-item">
                    {foreach from=$tab.columns item='column'}
                        <li class="mm_columns_li column_size_{$column.column_size|intval} {if $column.is_breaker}mm_breaker{/if} {if $column.blocks}mm_has_sub{/if}">
                            {if isset($column.blocks) && $column.blocks}
                                <ul class="mm_blocks_ul">
                                    {foreach from=$column.blocks item='block'}
                                        <li data-id-block="{$block.id_block|intval}"
                                            class="mm_blocks_li">
                                            {Module::getInstanceByName('ets_megamenu')->hookDisplayBlock(['block' => $block]) nofilter}
                                        </li>
                                    {/foreach}
                                </ul>
                            {/if}
                        </li>
                    {/foreach}
                </ul>
            {/if}
        </li>
    {/foreach}
</ul>
<script type="text/javascript">
    var Days_text = '{l s='Day(s)' mod='ets_megamenu' js=1}';
    var Hours_text = '{l s='Hr(s)' mod='ets_megamenu' js=1}';
    var Mins_text = '{l s='Min(s)' mod='ets_megamenu' js=1}';
    var Sec_text = '{l s='Sec(s)' mod='ets_megamenu' js=1}';
</script>