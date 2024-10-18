<?php
/* Smarty version 4.3.1, created on 2024-10-16 13:09:04
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ph_simpleblog/views/templates/hook/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670f9ed01891a8_68051555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a60288000d6e4781693f08f728d643a85a916505' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ph_simpleblog/views/templates/hook/header.tpl',
      1 => 1717758683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670f9ed01891a8_68051555 (Smarty_Internal_Template $_smarty_tpl) {
?><meta property="og:url" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:title" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_title']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:type" content="article" />
<meta property="og:site_name" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Configuration::get('PS_SHOP_NAME'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_description']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
<?php if ((isset($_smarty_tpl->tpl_vars['post_image']->value)) && !empty($_smarty_tpl->tpl_vars['post_image']->value)) {?>
<meta property="og:image" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<meta property="fb:admins" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( Configuration::get('PH_BLOG_FACEBOOK_MODERATOR') )), ENT_QUOTES, 'UTF-8');?>
"/>
<meta property="fb:app_id" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( Configuration::get('PH_BLOG_FACEBOOK_APP_ID') )), ENT_QUOTES, 'UTF-8');?>
"/><?php }
}
