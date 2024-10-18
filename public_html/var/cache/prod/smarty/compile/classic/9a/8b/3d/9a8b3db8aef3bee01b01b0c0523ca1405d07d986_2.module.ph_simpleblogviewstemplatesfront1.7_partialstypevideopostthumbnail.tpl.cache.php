<?php
/* Smarty version 4.3.1, created on 2024-10-14 11:04:35
  from 'module:ph_simpleblogviewstemplatesfront1.7_partialstypevideopostthumbnail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670cdea3d08509_21941238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a8b3db8aef3bee01b01b0c0523ca1405d07d986' => 
    array (
      0 => 'module:ph_simpleblogviewstemplatesfront1.7_partialstypevideopostthumbnail.tpl',
      1 => 1717758683,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670cdea3d08509_21941238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '631881547670cdea3d00911_06920031';
if (Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL') && ((isset($_smarty_tpl->tpl_vars['post']->value['banner_wide'])) || (isset($_smarty_tpl->tpl_vars['post']->value['banner_thumb'])))) {?>
<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['blogLayout']->value == 'full') {?>
        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['banner_wide'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid photo">
    <?php } else { ?>
        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['banner_thumb'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid photo">
    <?php }?>
</a>
<?php } else { ?>
<div itemprop="video">
<?php echo $_smarty_tpl->tpl_vars['post']->value['video_code'];?>

</div>
<?php }
}
}
