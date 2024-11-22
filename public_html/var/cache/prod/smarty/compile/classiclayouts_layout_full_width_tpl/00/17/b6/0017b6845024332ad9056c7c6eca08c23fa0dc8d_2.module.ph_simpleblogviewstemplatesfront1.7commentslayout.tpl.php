<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:34:54
  from 'module:ph_simpleblogviewstemplatesfront1.7commentslayout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740341eba5f46_20831794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0017b6845024332ad9056c7c6eca08c23fa0dc8d' => 
    array (
      0 => 'module:ph_simpleblogviewstemplatesfront1.7commentslayout.tpl',
      1 => 1717758683,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ph_simpleblog/views/templates/front/1.7/comments/form.tpl' => 1,
  ),
),false)) {
function content_6740341eba5f46_20831794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="blog-mb simpleblog__comments<?php if ($_smarty_tpl->tpl_vars['post']->value->comments == 0) {?>-empty<?php }?>" id="phsimpleblog_comments">
    <h2 class="h2 mb-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->comments, ENT_QUOTES, 'UTF-8');?>
)</h2>
    <?php if ($_smarty_tpl->tpl_vars['post']->value->comments) {?>
    <ul class="cardblog mb-0">
    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
        <li class="card-block <?php if ($_smarty_tpl->tpl_vars['comment']->value['is_highlighted']) {?>simpleblog_comments_highlighted<?php }?>">
            <ul class="simpleblog__comments__authorInfo">
                <li class="simpleblog__comments__authorInfo__author"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</li>
                <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['date_add'], ENT_QUOTES, 'UTF-8');?>
</li>
            </ul>
            <div class="simpleblog__comments__text">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['comment'], ENT_QUOTES, 'UTF-8');?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['comment']->value['depth'] == 0) {?> 
                <button class="reply-simpleblog-button btn mt-1 text-uppercase" data-id-comment="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['comment']->value['id'], ENT_QUOTES, 'UTF-8');?>
" type="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reply','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</button>
            <?php }?>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['comment']->value['replies']) > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value['replies'], 'commentReply');
$_smarty_tpl->tpl_vars['commentReply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['commentReply']->value) {
$_smarty_tpl->tpl_vars['commentReply']->do_else = false;
?>
                <li class="simpleblog_reply_position <?php if ($_smarty_tpl->tpl_vars['commentReply']->value['is_highlighted']) {?>simpleblog_comments_highlighted<?php }?>">
                    <ul class="simpleblog__comments__authorInfo">
                        <li class="simpleblog__comments__authorInfo__author">
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['commentReply']->value['name'], ENT_QUOTES, 'UTF-8');?>
 
                        </li>
                        <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['commentReply']->value['date_add'], ENT_QUOTES, 'UTF-8');?>
</li>
                    </ul>
                    <div class="simpleblog__comments__text">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['commentReply']->value['comment'], ENT_QUOTES, 'UTF-8');?>

                    </div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php } else { ?>
    	<div class="warning alert alert-warning mb-2">
    		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No comments at this moment','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

    	</div><!-- .warning -->
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/comments/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
