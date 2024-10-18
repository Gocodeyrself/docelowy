<?php
/* Smarty version 4.3.1, created on 2024-10-16 13:09:04
  from 'module:ph_simpleblogviewstemplatesfront1.7commentsform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670f9ed04f3c75_94010690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfbee9f821a44efd4450751e78ed722a24786400' => 
    array (
      0 => 'module:ph_simpleblogviewstemplatesfront1.7commentsform.tpl',
      1 => 1717758683,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670f9ed04f3c75_94010690 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="simpleblog__addComment blog-mb">
<?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged'] || Configuration::get('PH_BLOG_COMMENT_ALLOW_GUEST')) {?>
    <h2 class="h2 mb-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New comment','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</h2> 
	<form class="simpleblog__addComment__form cardblog" action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->url,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
    <p class="simpleblog_answer_info card-header text-xs-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are replying to a comment','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</p>

        <div class="card-block">
            <div class="form-group">
                <label class="col-12 form-control-label">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your name','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

                </label>
                <div class="col-12">
                    <input <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>readonly<?php }?> type="text" class="form-control" name="customer_name" id="customer_name" value="<?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer']->value['firstname'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
if ((isset($_POST['comment_content']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_POST['customer_name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
}?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-12 form-control-label">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

                </label>
                <div class="col-12">
                    <textarea class="form-control"id="comment_content" name="comment_content" rows="6"><?php if ((isset($_POST['comment_content']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_POST['comment_content'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></textarea>
                </div>
            </div>
            <?php if (Configuration::get('PH_BLOG_COMMENTS_RECAPTCHA') && Configuration::get('PH_BLOG_COMMENTS_RECAPTCHA_SITE_KEY')) {?>
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars((string) Configuration::get('PH_BLOG_COMMENTS_RECAPTCHA_SITE_KEY'), ENT_QUOTES, 'UTF-8');?>
" data-theme="<?php echo htmlspecialchars((string) Configuration::get('PH_BLOG_COMMENTS_RECAPTCHA_THEME'), ENT_QUOTES, 'UTF-8');?>
"></div>
                <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
            </div>
            <?php }?>
            <footer class="form-footer clearfix">
                <input type="hidden" name="id_simpleblog_post" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->id_simpleblog_post )), ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="id_parent" id="id_parent" value="0" />
                <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

                <?php }?>
                <button class="continue btn btn-secondary float-xs-left simpleblog__cancelReplay" name="cancelreplay">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

                </button>
                <button class="continue btn btn-primary float-xs-right" name="submitNewComment" type="submit" value="1">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new comment','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

                </button>
            </footer>
        </div>
    </form>
<?php } else { ?>
	<div class="warning alert alert-warning">
		<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'authentication','params'=>array('back'=>$_smarty_tpl->tpl_vars['post']->value->url)),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only registered and logged customers can add comments','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</a>
	</div><!-- .warning -->
<?php }?>
</div><?php }
}
