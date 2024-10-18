<?php
/* Smarty version 4.3.1, created on 2024-10-14 11:03:19
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/arlg/views/templates/hook/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670cde572d6da0_87887486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb1b157a9630caa288777e258bbc48a9601e0b04' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/arlg/views/templates/hook/head.tpl',
      1 => 1713429882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670cde572d6da0_87887486 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style type="text/css">
    .lg-backdrop{
        z-index: 10400;
        <?php if ($_smarty_tpl->tpl_vars['config']->value->bg_color) {?>
            background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->bg_color,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }
    .lg-outer{
        z-index: 10500;
    }
    .lg-toolbar .lg-icon{
        <?php if ($_smarty_tpl->tpl_vars['config']->value->controls_color) {?>
            color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->controls_color,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }
    .lg-toolbar .lg-icon:hover{
        <?php if ($_smarty_tpl->tpl_vars['config']->value->controls_hcolor) {?>
            color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->controls_hcolor,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }
    .lg-sub-html, .lg-toolbar{
        <?php if ($_smarty_tpl->tpl_vars['config']->value->toolbar_bg) {?>
            background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->toolbar_bg,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }
    .lg-actions .lg-next, .lg-actions .lg-prev{
        <?php if ($_smarty_tpl->tpl_vars['config']->value->prev_next_bg) {?>
            background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->prev_next_bg,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value->prev_next_color) {?>
            color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->prev_next_color,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }
    .lg-actions .lg-next:hover, .lg-actions .lg-prev:hover{
        <?php if ($_smarty_tpl->tpl_vars['config']->value->prev_next_hbg) {?>
            background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->prev_next_hbg,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value->prev_next_hcolor) {?>
            color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->prev_next_hcolor,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }
    .lg-outer .lg-thumb-outer{
        <?php if ($_smarty_tpl->tpl_vars['config']->value->thumb_bg) {?>
            background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->thumb_bg,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }
    .lg-outer .lg-toogle-thumb{
        <?php if ($_smarty_tpl->tpl_vars['config']->value->controls_color) {?>
            color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->controls_color,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value->thumb_bg) {?>
            background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->thumb_bg,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }
    .lg-outer .lg-toogle-thumb:hover, .lg-outer.lg-dropdown-active #lg-share{
        <?php if ($_smarty_tpl->tpl_vars['config']->value->controls_hcolor) {?>
            color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->controls_hcolor,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }
    .lg-outer .lg-thumb-item.active, .lg-outer .lg-thumb-item:hover{
        <?php if ($_smarty_tpl->tpl_vars['config']->value->active_thumb_border) {?>
            border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->active_thumb_border,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }
    <?php if (!$_smarty_tpl->tpl_vars['config']->value->img_captions) {?>
        .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html,
        .lg-outer.lg-pull-caption-up .lg-sub-html{
            display: none;
        }
    <?php } else { ?>
        .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html{
            bottom: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->img_captions_offset )), ENT_QUOTES, 'UTF-8');?>
px;
        }
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['magnify']->value->width && $_smarty_tpl->tpl_vars['magnify']->value->height) {?>
        .magnify > .magnify-lens {
            width: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['magnify']->value->width )), ENT_QUOTES, 'UTF-8');?>
px;
            height: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['magnify']->value->height )), ENT_QUOTES, 'UTF-8');?>
px;
        }
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['magnify']->value->fader) {?>
        .magnify:before{
            opacity: 0;
            transition: 0.2s all;
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            <?php if ($_smarty_tpl->tpl_vars['magnify']->value->fader_opacity) {?>
                background: rgba(0, 0, 0, <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['magnify']->value->fader_opacity ))/100, ENT_QUOTES, 'UTF-8');?>
);
            <?php } else { ?>
                background: rgba(0, 0, 0, 0.2);
            <?php }?>
        }
        .magnify:hover:before{
            opacity: 1;
        }
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['generalConfig']->value->custom_css) {?>
        <?php echo $_smarty_tpl->tpl_vars['generalConfig']->value->custom_css;?>

    <?php }?>
    .arlg-pager-controls{
        position: relative;
    }
    .arlg-pager-controls .arlg-pager-prev,
    .arlg-pager-controls .arlg-pager-next{
        width: 24px;
        height: 32px;
        padding: 0;
        margin: 0;
        border: 0;
        position: absolute;
        top: -59px;
        color: #232323;
        opacity: 0.7;
        transition: 0.2s all;
        z-index: 100;
    }
    .arlg-pager-controls .arlg-pager-prev:hover,
    .arlg-pager-controls .arlg-pager-next:hover{
        opacity: 0.9;
    }
    .arlg-pager-controls .arlg-pager-prev{
        left: -24px;
        right: auto;
        background: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
views/img/prev.svg') 50% 50% no-repeat scroll rgba(255, 255, 255, 0.6);
    }
    .arlg-pager-controls .arlg-pager-next{
        right: -24px;
        left: auto;
        background: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
views/img/next.svg') 50% 50% no-repeat scroll rgba(255, 255, 255, 0.6);
    }
    .arlg-pager-controls.active .arlg-pager-prev{
        left: 0;
    }
    .arlg-pager-controls.active .arlg-pager-next{
        right: 0;
    }
    <?php if (($_smarty_tpl->tpl_vars['sliderConfig']->value->mode == 'vertical')) {?>
        .lSSlideOuter .lSPager.lSGallery img{
            margin: auto;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
        .lSSlideOuter .lSPager.lSGallery li{
            position: relative;
        }
        .lSSlideOuter.vertical .lightSlider .lslide{
            position: relative;
        }
        .lSSlideOuter.vertical .lightSlider .lslide img{
            margin: auto;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->layout == 'left') {?>
            .lSSlideOuter.vertical{
                padding-right: 0 !important;
                padding-left: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_width ))+5, ENT_QUOTES, 'UTF-8');?>
px !important;
            }
            .lSSlideOuter.vertical .lSGallery{
                right: auto;
                left: 0;
                margin-right: 5px !important;
                margin-left: 0 !important;
            }
        <?php }?>
    <?php }?>
    .quickview-modal .product-cover,
    .quickview-modal .js-qv-mask,
    .quickview .product-cover,
    .quickview .js-qv-mask{
        display: block;
    }
    <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->gallery == 2) {?>
        .lSSlideOuter .lSPager.lSGallery{
            display: grid;
            width: 100% !important;
            grid-template-columns: repeat(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_items_per_row )), ENT_QUOTES, 'UTF-8');?>
, 1fr);
            gap: 5px;
            transform: none !important;
        }
        .lSSlideOuter .lSPager.lSGallery li{
            margin: 0 !important;
            width: auto !important;
        }
        .lSSlideOuter .lSPager.lSGallery::after, .lSSlideOuter .lSPager.lSGallery::before{
            display: none !important;
            content: "";
        }
    <?php }?>
</style>
<?php echo '<script'; ?>
 type="text/javascript">
    var arlgMagnify = <?php if ($_smarty_tpl->tpl_vars['magnify']->value->enable) {?>true<?php } else { ?>false<?php }?>;
    var arlgWidth = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderImgWidth']->value )), ENT_QUOTES, 'UTF-8');?>
;
    var arlgHeight = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderImgHeight']->value )), ENT_QUOTES, 'UTF-8');?>
;
    var arlgGalleryConfig = {
        <?php if ($_smarty_tpl->tpl_vars['isMobile']->value) {?>
            thumbnail: <?php if ($_smarty_tpl->tpl_vars['config']->value->m_thumbnails) {?>true<?php } else { ?>false<?php }?>,
            showThumbByDefault: <?php if ($_smarty_tpl->tpl_vars['config']->value->m_show_thumbs) {?>true<?php } else { ?>false<?php }?>,
            animateThumb: <?php if ($_smarty_tpl->tpl_vars['config']->value->m_animate_thumbs) {?>true<?php } else { ?>false<?php }?>,
        <?php } else { ?>
            thumbnail: <?php if ($_smarty_tpl->tpl_vars['config']->value->thumbnails) {?>true<?php } else { ?>false<?php }?>,
            showThumbByDefault: <?php if ($_smarty_tpl->tpl_vars['config']->value->show_thumbs) {?>true<?php } else { ?>false<?php }?>,
            animateThumb: <?php if ($_smarty_tpl->tpl_vars['config']->value->animate_thumbs) {?>true<?php } else { ?>false<?php }?>,
        <?php }?>
        loop: <?php if ($_smarty_tpl->tpl_vars['config']->value->loop) {?>true<?php } else { ?>false<?php }?>,
        closable: <?php if ($_smarty_tpl->tpl_vars['config']->value->closable) {?>true<?php } else { ?>false<?php }?>,
        escKey: <?php if ($_smarty_tpl->tpl_vars['config']->value->esc_key) {?>true<?php } else { ?>false<?php }?>,
        keyPress: <?php if ($_smarty_tpl->tpl_vars['config']->value->key_press) {?>true<?php } else { ?>false<?php }?>,
        controls: <?php if ($_smarty_tpl->tpl_vars['config']->value->controls) {?>true<?php } else { ?>false<?php }?>,
        slideEndAnimatoin: <?php if ($_smarty_tpl->tpl_vars['config']->value->slide_end_animatoin) {?>true<?php } else { ?>false<?php }?>,
        hideControlOnEnd: <?php if ($_smarty_tpl->tpl_vars['config']->value->hide_control_on_end) {?>true<?php } else { ?>false<?php }?>,
        mousewheel: <?php if ($_smarty_tpl->tpl_vars['config']->value->mousewheel) {?>true<?php } else { ?>false<?php }?>,
        preload: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->mousewheel )), ENT_QUOTES, 'UTF-8');?>
,
        download: <?php if ($_smarty_tpl->tpl_vars['config']->value->download) {?>true<?php } else { ?>false<?php }?>,
        counter: <?php if ($_smarty_tpl->tpl_vars['config']->value->counter) {?>true<?php } else { ?>false<?php }?>,
        enableDrag: <?php if ($_smarty_tpl->tpl_vars['config']->value->enable_drag) {?>true<?php } else { ?>false<?php }?>,
        enableSwipe: <?php if ($_smarty_tpl->tpl_vars['config']->value->enable_swipe) {?>true<?php } else { ?>false<?php }?>,
        <?php if ($_smarty_tpl->tpl_vars['config']->value->autoplay) {?>
            pause: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->pause )), ENT_QUOTES, 'UTF-8');?>
,
            progressBar: <?php if ($_smarty_tpl->tpl_vars['config']->value->progress) {?>true<?php } else { ?>false<?php }?>,
        <?php }?>
        thumbWidth: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->thumbWidht )), ENT_QUOTES, 'UTF-8');?>
,
        thumbContHeight: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->thumbHeight ))+20, ENT_QUOTES, 'UTF-8');?>

    };
    var arlgVertical = <?php if (($_smarty_tpl->tpl_vars['sliderConfig']->value->mode == 'vertical')) {?>true<?php } else { ?>false<?php }?>;
    var arlgZoomSL = false;
    <?php if (($_smarty_tpl->tpl_vars['magnify']->value->type == 'out' || $_smarty_tpl->tpl_vars['magnify']->value->type == 'in')) {?>
        arlgZoomSL = true;
        var arLgZoomSLOptions = {
            container: '#arlg-zoom',
            innerzoom: <?php if ($_smarty_tpl->tpl_vars['magnify']->value->type == 'in') {?>true<?php } else { ?>false<?php }?>,
            magnifierspeedanimate: 250,
            scrollspeedanimate: 4
        };
    <?php }?>
    var arlgSliderConfig = {
        enableDrag: false,
        <?php if (($_smarty_tpl->tpl_vars['sliderConfig']->value->mode == 'vertical')) {?>
            prevHtml: '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-up fa-w-14 fa-3x"><path fill="currentColor" d="M4.465 366.475l7.07 7.071c4.686 4.686 12.284 4.686 16.971 0L224 178.053l195.494 195.493c4.686 4.686 12.284 4.686 16.971 0l7.07-7.071c4.686-4.686 4.686-12.284 0-16.97l-211.05-211.051c-4.686-4.686-12.284-4.686-16.971 0L4.465 349.505c-4.687 4.686-4.687 12.284 0 16.97z" class=""></path></svg>',
            nextHtml: '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-down fa-w-14 fa-3x"><path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z" class=""></path></svg>',
        <?php } else { ?>
            prevHtml: '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg>',
            nextHtml: '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg>',
        <?php }?>
        item: 1,
        loop: true,
        <?php if (($_smarty_tpl->tpl_vars['sliderConfig']->value->mode == 'vertical')) {?>
            vertical: true,
            verticalHeight: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->vertical_height )), ENT_QUOTES, 'UTF-8');?>
,
            vThumbWidth: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_width )), ENT_QUOTES, 'UTF-8');?>
,
        <?php }?>
        slideMargin: 0,
        thumbItem: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_item )), ENT_QUOTES, 'UTF-8');?>
,
        item: 1,
        controls: <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->controls) {?>true<?php } else { ?>false<?php }?>,
        gallery: <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->gallery) {?>true<?php } else { ?>false<?php }?>,
        pager: <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->gallery) {?>true<?php } else { ?>false<?php }?>,
        thumbImageWidth: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderThumbWidth']->value )), ENT_QUOTES, 'UTF-8');?>
,
        thumbImageHeight: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderThumbHeight']->value )), ENT_QUOTES, 'UTF-8');?>
,
                onAfterSlide: function(el) {
            arlg.setCurrentPagerPos(el.getCurrentSlideCount()-2);
            if (arlgMagnify && arlgZoomSL){
                $('#lightSlider .lslide.active img').imagezoomsl(arLgZoomSLOptions);
            }
        },
        onSliderLoad: function(el) {
            $('.product-cover').addClass('hidden');
            $('.lSSlideOuter').addClass('active');
            var config = JSON.parse(JSON.stringify(arlgGalleryConfig));
            config.selector = '#lightSlider .lslide';
            el.lightGallery(config);
            <?php if (($_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_controls && $_smarty_tpl->tpl_vars['sliderConfig']->value->mode == 'horizontal' && $_smarty_tpl->tpl_vars['sliderConfig']->value->gallery != 2)) {?>
                setTimeout(function(){
                    var $controls = $('<div>', {
                        class: 'arlg-pager-controls'
                    });
                    var thumbHeight = $('.lSPager').height();
                    var btnTop = thumbHeight / 2 + 16;
                    var $button = $('<button>', {
                        class: 'arlg-pager-prev',
                        type: 'button',
                        onclick: 'arlg.scrollPager(-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_controls_offset )), ENT_QUOTES, 'UTF-8');?>
)'
                    });
                    $button.css({
                        top: '-' + btnTop + 'px'
                    });
                    $controls.append($button);
                    var $button = $('<button>', {
                        class: 'arlg-pager-next',
                        type: 'button',
                        onclick: 'arlg.scrollPager(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_controls_offset )), ENT_QUOTES, 'UTF-8');?>
)'
                    });
                    $button.css({
                        top: '-' + btnTop + 'px'
                    });
                    $controls.append($button);
                    $('.lSSlideOuter').append($controls);
                    setTimeout(function(){
                        if ($('.lSPager>li').length > 5){
                            $controls.addClass('active');
                        }
                    }, 200);
                }, 800);
            <?php }?>
            if (arlg.coverIndex) {
                arlg.lightSlider.goToSlide(arlg.coverIndex + 1);
            }
            if (arlgMagnify && arlgZoomSL){
                $('#lightSlider .lslide.active img').imagezoomsl(arLgZoomSLOptions);
            }
        }
    };
    function arLgInit(){
        <?php if (($_smarty_tpl->tpl_vars['is17']->value || $_smarty_tpl->tpl_vars['is8x']->value)) {?>
            $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').each(function(index){
                var img = $(this).find('img');
                $(img).parent().attr('data-src', img.attr('data-image-large-src'));
            });
            var arlgMainImg = $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->main_root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').find('[data-toggle="modal"]');
            arlgMainImg.removeAttr('data-toggle').removeAttr('data-target').addClass('arlg-main-container');
            $(document).on('click', '.arlg-main-container', function(){
                $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->current_class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').trigger('click');
            });
            $(document).on('click', '.js-qv-product-cover', function(){
                $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->current_class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').trigger('click');
            });
            <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->enabled == false) {?>
                $(document).on('click', '.magnify', function(){
                    $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->current_class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').trigger('click');
                });
            <?php }?>
            $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').hover(function(){
                $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->current_class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').removeClass('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->current_class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
                $(this).find('img').addClass('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->current_class,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
                var imgSrc = $(this).find('img').attr('data-image-large-src');
                $('.arlg-main-container').parent().find('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->img_selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').attr('src', imgSrc).attr('data-magnify-src', imgSrc);
                if (arlgMagnify){
                    <?php if (($_smarty_tpl->tpl_vars['magnify']->value->type == 'out' || $_smarty_tpl->tpl_vars['magnify']->value->type == 'in')) {?>
                        // $('.lSSlideOuter .lslide.active img').imagezoomsl(arLgZoomSLOptions);
                    <?php } else { ?>
                        $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->main_root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->img_selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').magnify();
                    <?php }?>
                }
            });
            if (arlgMagnify){
                arlgMainImg.hide();
                $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->main_root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->img_selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').attr('data-magnify-src', $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->main_root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->img_selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').attr('src'));
                <?php if (($_smarty_tpl->tpl_vars['magnify']->value->type == 'out' || $_smarty_tpl->tpl_vars['magnify']->value->type == 'in')) {?>
                    // $('.lSSlideOuter .lslide.active img').imagezoomsl(arLgZoomSLOptions);
                <?php } else { ?>
                    $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->main_root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->img_selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').magnify();
                <?php }?>
                
            }
        <?php }?>
        $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .fancybox').removeClass('fancybox');
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->enabled == false) {?>
            <?php if ($_smarty_tpl->tpl_vars['config']->value->selector) {?>
                arlgGalleryConfig.selector = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
            <?php }?>
            arlgGalleryConfig.selectWithin = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
            $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').lightGallery(arlgGalleryConfig);
        <?php }?>
    };
    window.addEventListener('load', function(){
        $('body').on('click', '.tracker', function(){
            $('.lightSlider .lslide.active').click();
        });
        <?php if (($_smarty_tpl->tpl_vars['is17']->value || $_smarty_tpl->tpl_vars['is8x']->value)) {?>
            prestashop.on('updatedProduct', function(resp){
                arLgInit();
            });
        <?php }?>
        <?php if (((!$_smarty_tpl->tpl_vars['is17']->value && !$_smarty_tpl->tpl_vars['is8x']->value) && $_smarty_tpl->tpl_vars['magnify']->value->enable)) {?>
            if ($('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->main_root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->img_selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').attr('data-magnify-src')) {
                <?php if (($_smarty_tpl->tpl_vars['magnify']->value->type == 'out' || $_smarty_tpl->tpl_vars['magnify']->value->type == 'in')) {?>
                    // $('.lSSlideOuter .lslide.active img').imagezoomsl(arLgZoomSLOptions);
                <?php } else { ?>
                    $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->main_root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->img_selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').magnify();
                <?php }?>
                
            }
        <?php }?>
        arLgInit();
        <?php if (((!$_smarty_tpl->tpl_vars['is17']->value && !$_smarty_tpl->tpl_vars['is8x']->value) && $_smarty_tpl->tpl_vars['magnify']->value->enable)) {?>
            var origDisplayImage = displayImage;
            displayImage = function (domAAroundImgThumb, no_animation) {
                var newSrc = domAAroundImgThumb.attr('href');
                $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->main_root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->img_selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').attr('data-magnify-src', newSrc);
                <?php if (($_smarty_tpl->tpl_vars['magnify']->value->type == 'out' || $_smarty_tpl->tpl_vars['magnify']->value->type == 'in')) {?>
                    // $('.lSSlideOuter .lslide.active img').imagezoomsl(arLgZoomSLOptions);
                <?php } else { ?>
                    $('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->main_root,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['config']->value->img_selector,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').magnify();
                <?php }?>

                return origDisplayImage(domAAroundImgThumb, no_animation);
            }
        <?php }?>
    });
    
    <?php if ($_smarty_tpl->tpl_vars['generalConfig']->value->custom_js) {?>
        <?php echo $_smarty_tpl->tpl_vars['generalConfig']->value->custom_js;?>

    <?php }
echo '</script'; ?>
><?php }
}
