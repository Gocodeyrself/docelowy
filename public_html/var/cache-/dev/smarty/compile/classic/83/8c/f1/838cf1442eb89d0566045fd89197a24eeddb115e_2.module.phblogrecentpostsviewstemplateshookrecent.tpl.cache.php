<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:14:42
  from 'module:phblogrecentpostsviewstemplateshookrecent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b6b2af7474_62049432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '838cf1442eb89d0566045fd89197a24eeddb115e' => 
    array (
      0 => 'module:phblogrecentpostsviewstemplateshookrecent.tpl',
      1 => 1721642411,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ph_simpleblog/views/templates/front/1.7/_partials/post-miniature.tpl' => 1,
  ),
),false)) {
function content_66b4b6b2af7474_62049432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '169945582766b4b6b2af1567_29144808';
?>
<!-- begin /home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/phblogrecentposts/views/templates/hook/recent.tpl --><?php if ((isset($_smarty_tpl->tpl_vars['recent_posts']->value)) && count($_smarty_tpl->tpl_vars['recent_posts']->value)) {?>
    <section class="simpleblog" id="phblogrecentposts">
    <div class="container">
        <div class="row">
            <h3 class="h1">
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blogLink']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blogTitle']->value, ENT_QUOTES, 'UTF-8');?>

                </a>
                <!-- <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blogLink']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See all articles','mod'=>'phblogrecentposts'),$_smarty_tpl ) );?>

                </a> -->
            </h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/_partials/post-miniature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section-news -->
<?php }?>
<!-- end /home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/phblogrecentposts/views/templates/hook/recent.tpl --><?php }
}
