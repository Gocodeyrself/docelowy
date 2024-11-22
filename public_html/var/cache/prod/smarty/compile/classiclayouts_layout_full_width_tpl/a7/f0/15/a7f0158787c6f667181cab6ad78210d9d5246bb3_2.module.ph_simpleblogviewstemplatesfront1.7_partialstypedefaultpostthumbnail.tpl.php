<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:39
  from 'module:ph_simpleblogviewstemplatesfront1.7_partialstypedefaultpostthumbnail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740335b8e21b0_00709314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7f0158787c6f667181cab6ad78210d9d5246bb3' => 
    array (
      0 => 'module:ph_simpleblogviewstemplatesfront1.7_partialstypedefaultpostthumbnail.tpl',
      1 => 1717758683,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740335b8e21b0_00709314 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL') && ((isset($_smarty_tpl->tpl_vars['post']->value['banner_wide'])) || (isset($_smarty_tpl->tpl_vars['post']->value['banner_thumb'])))) {?>
<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
" itemprop="url">
    <?php if ($_smarty_tpl->tpl_vars['blogLayout']->value == 'full') {?>
        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['banner_wide'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" class="img-fluid photo">
    <?php } else { ?>
        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['banner_thumb'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" class="img-fluid photo">
    <?php }?>
</a>
<?php }
}
}
