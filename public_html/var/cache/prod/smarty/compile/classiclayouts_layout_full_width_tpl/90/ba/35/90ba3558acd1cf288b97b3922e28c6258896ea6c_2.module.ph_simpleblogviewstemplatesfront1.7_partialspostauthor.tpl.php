<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:34:54
  from 'module:ph_simpleblogviewstemplatesfront1.7_partialspostauthor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740341eb4a913_49565405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90ba3558acd1cf288b97b3922e28c6258896ea6c' => 
    array (
      0 => 'module:ph_simpleblogviewstemplatesfront1.7_partialspostauthor.tpl',
      1 => 1729490480,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740341eb4a913_49565405 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cardblog author-card blog-mb" id="blog-author">
    <div class="card-block">
        <div class="author-card__row" style="
        display: flex;
        align-items: center;
        ">
            <?php if ($_smarty_tpl->tpl_vars['author']->value->photo) {?>
            <div class="author-card__block author-card__block--thumb" style="
            margin-right: 20px;
            width: 200px;
            height: auto;
            ">
                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['author']->value->photo, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid blog-author-thumb">
            </div>
            <?php }?>
            <div class="author-card__block author-card__block--desc">
                <h5 class="h3 blog-text-no-transform">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['author']->value, ENT_QUOTES, 'UTF-8');?>

                </h5>
                <?php if ($_smarty_tpl->tpl_vars['author']->value->bio) {?>
                <div class="mb-0">
                    <?php echo $_smarty_tpl->tpl_vars['author']->value->bio;?>

                </div>
                <?php }?>

                <?php if ((($tmp = $_smarty_tpl->tpl_vars['showAllPostsBtn']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                <div class="clearfix">
                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['author']->value->getUrl(), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary float-xs-right authorMiniature__btn">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See the author\'s articles','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

                    </a>
                </div>
                <?php }?>
            </div>

        </div>
    </div>
    <div class="card-footer">
        <ul class="authorMiniature__links blogsocial" style="
                    display: flex;
                    gap: 20px;
                    ">
            <?php if ($_smarty_tpl->tpl_vars['author']->value->twitter) {?>
            <li class="blogsocial__elem">
                <a class="btn btn-blog-social btn-blog-social--twitter" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['author']->value->twitter, ENT_QUOTES, 'UTF-8');?>
">Twitter</a>
            </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['author']->value->instagram) {?>
            <li class="blogsocial__elem">
                <a class="btn btn-blog-social btn-blog-social--instagram" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['author']->value->instagram, ENT_QUOTES, 'UTF-8');?>
">Instagram</a>
            </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['author']->value->linkedin) {?>
            <li class="blogsocial__elem">
                <a class="btn btn-blog-social btn-blog-social--linkedin" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['author']->value->linkedin, ENT_QUOTES, 'UTF-8');?>
">Linkedin</a>
            </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['author']->value->facebook) {?>
            <li class="blogsocial__elem">
                <a class="btn btn-blog-social btn-blog-social--facebook" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['author']->value->facebook, ENT_QUOTES, 'UTF-8');?>
">Facebook</a>
            </li>
            <?php }?>
        </ul>
    </div>
</div><?php }
}
