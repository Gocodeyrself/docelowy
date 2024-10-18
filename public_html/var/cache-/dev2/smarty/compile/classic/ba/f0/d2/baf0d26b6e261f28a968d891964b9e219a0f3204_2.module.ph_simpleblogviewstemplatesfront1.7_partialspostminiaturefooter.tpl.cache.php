<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:12:34
  from 'module:ph_simpleblogviewstemplatesfront1.7_partialspostminiaturefooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b6322720d2_49022686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baf0d26b6e261f28a968d891964b9e219a0f3204' => 
    array (
      0 => 'module:ph_simpleblogviewstemplatesfront1.7_partialspostminiaturefooter.tpl',
      1 => 1717758683,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b6322720d2_49022686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '47021215266b4b6322687f5_32125606';
?>
<!-- begin /home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ph_simpleblog/views/templates/front/1.7/_partials/post-miniature-footer.tpl --><div class="simpleblog__listing__post__wrapper__footer card-footer py-0">
    <div class="row">
        <?php if (Configuration::get('PH_BLOG_DISPLAY_DATE')) {?>
        <div class="simpleblog__listing__post__wrapper__footer__block col-md-6 col-xs-12">
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['isWarehouse']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
            <i class="fa fa-calendar"></i>
            <?php } else { ?>
            <i class="material-icons">today</i>
            <?php }?>
            <time datetime="<?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],'c'), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],Configuration::get('PH_BLOG_DATEFORMAT')), ENT_QUOTES, 'UTF-8');?>

            </time>
        </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['author'])) && !empty($_smarty_tpl->tpl_vars['post']->value['author']) && Configuration::get('PH_BLOG_DISPLAY_AUTHOR')) {?>
        <div class="simpleblog__listing__post__wrapper__footer__block col-md-6 col-xs-12">
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['isWarehouse']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
            <i class="fa fa-user"></i>
            <?php } else { ?>
            <i class="material-icons">perm_identity</i>
            <?php }?>
            <span>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['author'], ENT_QUOTES, 'UTF-8');?>

            </span>
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['allow_comments'] == true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'native' && Configuration::get('PH_BLOG_DISPLAY_COMMENTS')) {?>
        <div class="simpleblog__listing__post__wrapper__footer__block col-md-6 col-xs-12">
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['isWarehouse']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
            <i class="fa fa-comments"></i>
            <?php } else { ?>
            <i class="material-icons">comment</i>
            <?php }?>
            <span>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
#phsimpleblog_comments"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['comments'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comments','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</a>
            </span>
        </div>
        <?php }?>
        <?php if (Configuration::get('PH_BLOG_DISPLAY_VIEWS') && $_smarty_tpl->tpl_vars['post']->value['post_type'] != 'url') {?>
        <div class="simpleblog__listing__post__wrapper__footer__block col-md-6 col-xs-12">
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['isWarehouse']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
            <i class="fa fa-eye"></i>
            <?php } else { ?>
            <i class="material-icons">remove_red_eye</i>
            <?php }?>
            <span>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['views'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'views','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

            </span>
        </div>
        <?php }?>
    </div><!-- .row -->
</div><!-- .simpleblog__listing__post__wrapper__footer --><!-- end /home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ph_simpleblog/views/templates/front/1.7/_partials/post-miniature-footer.tpl --><?php }
}
