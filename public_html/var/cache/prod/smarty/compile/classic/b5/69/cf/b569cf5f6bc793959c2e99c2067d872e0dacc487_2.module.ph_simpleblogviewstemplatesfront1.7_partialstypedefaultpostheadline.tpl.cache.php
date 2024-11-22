<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:33
  from 'module:ph_simpleblogviewstemplatesfront1.7_partialstypedefaultpostheadline.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403355a62db0_53744946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b569cf5f6bc793959c2e99c2067d872e0dacc487' => 
    array (
      0 => 'module:ph_simpleblogviewstemplatesfront1.7_partialstypedefaultpostheadline.tpl',
      1 => 1717758683,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67403355a62db0_53744946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '109548651567403355a625e8_66040322';
?>
<h3 itemprop="headline">
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>

    </a>
</h3><?php }
}
