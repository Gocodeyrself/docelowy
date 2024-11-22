<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:32:28
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/arlg/views/templates/hook/gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740338c5e89b6_57890396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79b5b4fd94ce9d6054509f993f5f21b0d5287c0d' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/arlg/views/templates/hook/gallery.tpl',
      1 => 1713429882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740338c5e89b6_57890396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<style type="text/css">
    .lSAction > a{
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->control_bg) {?>
            background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->control_bg,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->control_color) {?>
            color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->control_color,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
        <?php }?>
    }
    .lSAction > a:hover{
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->control_hbg) {?>
            background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->control_hbg,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->control_hcolor) {?>
            color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->control_hcolor,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
        <?php }?>
    }
    .lSSlideOuter .lSPager.lSGallery li{
        border-width: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_border )), ENT_QUOTES, 'UTF-8');?>
px;
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_border_color) {?>
            border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_border_color,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        border-style: solid;
    }
    .lSSlideOuter .lSPager.lSGallery li.active{
        border-width: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->active_thumb_border )), ENT_QUOTES, 'UTF-8');?>
px;
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->active_thumb_border_color) {?>
            border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->active_thumb_border_color,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        border-style: solid;
    }
</style>
<?php echo '<script'; ?>
>
    if (typeof arlg === 'undefined'){
        window.addEventListener('load', function(){
            arlgUpdateImages();
        });
    }else{
        arlgUpdateImages();
    }
    
    function arlgUpdateImages() {
        arlg.coverIndex = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['coverIndex']->value )), ENT_QUOTES, 'UTF-8');?>
;
        arlg.images = [];
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['bySize']['_orig']['url'] = $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['image']->value['id_image'],'');
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
            arlg.images.push({
                type: 'image',
                original: '<?php echo $_smarty_tpl->tpl_vars['image']->value['bySize']['_orig']['url'];?>
',
                thumb: '<?php echo $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_size]['url'];?>
',
                slider_img: '<?php echo $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sliderConfig']->value->img_size]['url'];?>
',
                <?php if ($_smarty_tpl->tpl_vars['isMobile']->value) {?>
                    gallery_img: '<?php echo $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['galleryConfig']->value->m_img_size]['url'];?>
',
                <?php } else { ?>
                    gallery_img: '<?php echo $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['galleryConfig']->value->img_size]['url'];?>
',
                <?php }?>
                title: "<?php if ($_smarty_tpl->tpl_vars['image']->value['legend']) {
echo htmlspecialchars((string) smarty_modifier_replace(smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['legend'],'htmlall','UTF-8' )),"\r\n",''),"\n",''), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_replace(smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->name,'htmlall','UTF-8' )),"\r\n",''),"\n",''), ENT_QUOTES, 'UTF-8');
}?>"
            });
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
            arlg.images.push({
                type: 'video',
                src: '<?php echo $_smarty_tpl->tpl_vars['video']->value['src'];?>
',
                poster: '<?php echo $_smarty_tpl->tpl_vars['video']->value['poster'];?>
',
                thumb: '<?php echo $_smarty_tpl->tpl_vars['video']->value['thumb'];?>
',
                embed_url: '<?php echo $_smarty_tpl->tpl_vars['video']->value['embed_url'];?>
',
            });
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['galleryConfig']->value->img_captions) {?>
            arlg.displayCaption = true;
        <?php }?>
        arlg.video = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->video )), ENT_QUOTES, 'UTF-8');?>
;
        arlg.buildSlider();
    }
<?php echo '</script'; ?>
><?php }
}
