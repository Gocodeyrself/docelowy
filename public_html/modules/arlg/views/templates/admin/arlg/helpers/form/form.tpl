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

{extends file="helpers/form/form.tpl"}
{block name="after"}
    
{/block}
{block name="script"}
    toggleLoopOptions();
    toggleKeyboardOptions();
    toggleAutoplayOptions();
    toggleThumbsOptions();
    
    $('.field_loop .switch').click(function(){
        toggleLoopOptions();
    });
    
    $('.field_thumbnails .switch').click(function(){
        toggleThumbsOptions();
    });
    
    $('.field_key_press .switch').click(function(){
        toggleKeyboardOptions();
    });
    
    $('.field_autoplay .switch').click(function(){
        toggleAutoplayOptions();
    });
    
    function toggleThumbsOptions(){
        if ($('#AR_LG_THUMBNAILS_on').is(':checked')){
            $('.field_animate_thumbs, .field_show_thumbs').removeClass('hidden');
        }else{
            $('.field_animate_thumbs, .field_show_thumbs').addClass('hidden');
        }
    }
    
    function toggleAutoplayOptions(){
        if ($('#AR_LG_AUTOPLAY_on').is(':checked')){
            $('.field_pause, .field_progress').removeClass('hidden');
        }else{
            $('.field_pause, .field_progress').addClass('hidden');
        }
    }
    
    function toggleKeyboardOptions(){
        if ($('#AR_LG_KEY_PRESS_on').is(':checked')){
            $('.field_esc_key').removeClass('hidden');
        }else{
            $('.field_esc_key').addClass('hidden');
        }
    }
    
    function toggleLoopOptions(){
        if ($('#AR_LG_LOOP_on').is(':checked')){
            $('.field_slide_end_animatoin, .field_hide_control_on_end').addClass('hidden');
        }else{
            $('.field_slide_end_animatoin, .field_hide_control_on_end').removeClass('hidden');
        }
    }
{/block}