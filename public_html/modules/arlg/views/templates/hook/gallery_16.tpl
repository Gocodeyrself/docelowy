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
    #image-block, #views_block{
        display: none !important;
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
    
    var arLgAllImages = {$sliderConfig->all_images|intval};
    
    function arlgUpdateImages() {
        arlg.coverIndex = {$coverIndex|intval};
        arlg.images = [];
        {foreach from=$images item=image}
            arlg.images.push({
                type: 'image',
                id: {$image.id_image|intval},
                thumb: '{$image.thumb nofilter}',
                slider_img: '{$image.slider_img nofilter}',
                gallery_img: '{$image.gallery_img nofilter}',
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
        arlg.allImages = arlg.images;
        {if $galleryConfig->img_captions}
            arlg.displayCaption = true;
        {/if}
        arlg.video = {$sliderConfig->video|intval};
        arlg.buildSlider();
    }
    
    window.addEventListener('load', function(){
        var origRefreshProductImages = refreshProductImages;
    
        refreshProductImages = function(id_product_attribute){
            var newImages = [];
            if (id_product_attribute == 0){
                arlg.images = arlg.allImages;
            }else{
                $.each(arlg.allImages, function(i){
                    if (arLgAllImages || (combinationImages[id_product_attribute].indexOf(arlg.allImages[i].id) != -1)) {
                        newImages.push(arlg.allImages[i]);
                    }
                });
                arlg.images = newImages;
            }
            arlg.buildSlider();
            origRefreshProductImages(id_product_attribute);
            if (id_product_attribute == 0){
                $('#wrapResetImages').stop(true, true).hide();
            }
        }
    });
</script>