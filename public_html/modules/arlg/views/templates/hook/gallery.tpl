{*
* 2017 Areama
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@areama.net so we can send you a copy immediately.
*
*
*  @author Areama <contact@areama.net>
*  @copyright  2017 Areama
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of Areama
*}

<style type="text/css">
    .lSAction > a{
        {if $sliderConfig->control_bg}
            background-color: {$sliderConfig->control_bg|escape:'htmlall':'UTF-8'};
        {/if}
        {if $sliderConfig->control_color}
            color: {$sliderConfig->control_color|escape:'htmlall':'UTF-8'} !important;
        {/if}
    }
    .lSAction > a:hover{
        {if $sliderConfig->control_hbg}
            background-color: {$sliderConfig->control_hbg|escape:'htmlall':'UTF-8'};
        {/if}
        {if $sliderConfig->control_hcolor}
            color: {$sliderConfig->control_hcolor|escape:'htmlall':'UTF-8'} !important;
        {/if}
    }
    .lSSlideOuter .lSPager.lSGallery li{
        border-width: {$sliderConfig->thumb_border|intval}px;
        {if $sliderConfig->thumb_border_color}
            border-color: {$sliderConfig->thumb_border_color|escape:'htmlall':'UTF-8'};
        {/if}
        border-style: solid;
    }
    .lSSlideOuter .lSPager.lSGallery li.active{
        border-width: {$sliderConfig->active_thumb_border|intval}px;
        {if $sliderConfig->active_thumb_border_color}
            border-color: {$sliderConfig->active_thumb_border_color|escape:'htmlall':'UTF-8'};
        {/if}
        border-style: solid;
    }
</style>
<script>
    if (typeof arlg === 'undefined'){
        window.addEventListener('load', function(){
            arlgUpdateImages();
        });
    }else{
        arlgUpdateImages();
    }
    
    function arlgUpdateImages() {
        arlg.coverIndex = {$coverIndex|intval};
        arlg.images = [];
        {foreach from=$images item=image}
            {$image.bySize['_orig']['url'] = $link->getImageLink($product->link_rewrite, $image.id_image, '')}
            arlg.images.push({
                type: 'image',
                original: '{$image.bySize['_orig'].url nofilter}',
                thumb: '{$image.bySize[$sliderConfig->thumb_size].url nofilter}',
                slider_img: '{$image.bySize[$sliderConfig->img_size].url nofilter}',
                {if $isMobile}
                    gallery_img: '{$image.bySize[$galleryConfig->m_img_size].url nofilter}',
                {else}
                    gallery_img: '{$image.bySize[$galleryConfig->img_size].url nofilter}',
                {/if}
                title: "{if $image.legend}{$image.legend|escape:'htmlall':'UTF-8'|replace:"\r\n":""|replace:"\n":""}{else}{$product->name|escape:'htmlall':'UTF-8'|replace:"\r\n":""|replace:"\n":""}{/if}"
            });
        {/foreach}
        {foreach from=$videos item=video}
            arlg.images.push({
                type: 'video',
                src: '{$video.src nofilter}',
                poster: '{$video.poster nofilter}',
                thumb: '{$video.thumb nofilter}',
                embed_url: '{$video.embed_url nofilter}',
            });
        {/foreach}
        {if $galleryConfig->img_captions}
            arlg.displayCaption = true;
        {/if}
        arlg.video = {$sliderConfig->video|intval};
        arlg.buildSlider();
    }
</script>