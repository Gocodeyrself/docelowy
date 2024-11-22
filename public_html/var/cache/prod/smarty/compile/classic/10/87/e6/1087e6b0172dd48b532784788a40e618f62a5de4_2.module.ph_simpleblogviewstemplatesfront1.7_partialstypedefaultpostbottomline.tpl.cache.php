<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:33
  from 'module:ph_simpleblogviewstemplatesfront1.7_partialstypedefaultpostbottomline.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403355a66e64_14580544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1087e6b0172dd48b532784788a40e618f62a5de4' => 
    array (
      0 => 'module:ph_simpleblogviewstemplatesfront1.7_partialstypedefaultpostbottomline.tpl',
      1 => 1717758683,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67403355a66e64_14580544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '95918071567403355a64e56_91896778';
if (Configuration::get('PH_BLOG_DISPLAY_MORE')) {?>
<div class="simpleblog__listing__post__wrapper__content__footer">
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

    </a>
    <?php if ($_smarty_tpl->tpl_vars['is_category']->value == false && Configuration::get('PH_BLOG_DISPLAY_CATEGORY')) {?>
    <div class="simpleblog__listing__post__wrapper__content__footer__category">
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['isWarehouse']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
        <i class="fa fa-tags"></i>
        <?php } else { ?>
        <i class="material-icons">label</i>
        <?php }?>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['category_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['category'], ENT_QUOTES, 'UTF-8');?>
" rel="category"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a>
    </div>
    <?php }?>
</div>
<?php }
}
}
