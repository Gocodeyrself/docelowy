<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:34:54
  from 'module:ph_simpleblogviewstemplatesfront1.7single.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740341ea44ca1_37411447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99a809de32653f6e62db9cfad0917d1582a14bf3' => 
    array (
      0 => 'module:ph_simpleblogviewstemplatesfront1.7single.tpl',
      1 => 1717758683,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ph_simpleblog/views/templates/front/1.7/_partials/post-author.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/_partials/post-single-related-products.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/comments/layout.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/comments/facebook.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/comments/disqus.tpl' => 1,
  ),
),false)) {
function content_6740341ea44ca1_37411447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14373165676740341ea2a839_84011832', 'page_header_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13946664386740341ea2b249_61964621', 'hook_after_body_opening_tag');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18807960666740341ea2d3b0_81102703', 'head_seo_title');
?>


<?php if (!empty($_smarty_tpl->tpl_vars['post']->value->meta_description)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13215762566740341ea2ee64_44467547', 'head_seo_description');
?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['post']->value->meta_keywords)) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1131129216740341ea2f8d3_91828145', 'head_seo_keywords');
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10049177746740341ea2fe05_13436608', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_14373165676740341ea2a839_84011832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_14373165676740341ea2a839_84011832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header class="page-header">
	<h1 class="h1"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
</h1>
</header>
<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_13946664386740341ea2b249_61964621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_13946664386740341ea2b249_61964621',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (Configuration::get('PH_BLOG_FB_INIT')) {?><div id="fb-root"></div><?php echo '<script'; ?>
>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = 'https://connect.facebook.net/<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['language']->value['locale'],'-','_'), ENT_QUOTES, 'UTF-8');?>
/sdk.js#xfbml=1&version=v3.2&appId=&autoLogAppEvents=1';fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
><?php }
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'head_seo_title'} */
class Block_18807960666740341ea2d3b0_81102703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_title' => 
  array (
    0 => 'Block_18807960666740341ea2d3b0_81102703',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['post']->value->meta_title)) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->meta_title, ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_13215762566740341ea2ee64_44467547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_description' => 
  array (
    0 => 'Block_13215762566740341ea2ee64_44467547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->meta_description, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_1131129216740341ea2f8d3_91828145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_keywords' => 
  array (
    0 => 'Block_1131129216740341ea2f8d3_91828145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->meta_keywords, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'hook_blog_elementor'} */
class Block_13711637266740341ea39b19_65765440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'elementorContent');?>

            <?php
}
}
/* {/block 'hook_blog_elementor'} */
/* {block 'page_content'} */
class Block_10049177746740341ea2fe05_13436608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_10049177746740341ea2fe05_13436608',
  ),
  'hook_blog_elementor' => 
  array (
    0 => 'Block_13711637266740341ea39b19_65765440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<?php $_smarty_tpl->_assignInScope('post_type', $_smarty_tpl->tpl_vars['post']->value->post_type);?>
<div class="simpleblog__postInfo">
    <ul>
    	<?php if (Configuration::get('PH_BLOG_DISPLAY_DATE')) {?>
        <li>
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['isWarehouse']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
            <i class="fa fa-calendar"></i>
            <?php } else { ?>
            <i class="material-icons">today</i>
            <?php }?>
        	<span>
        		<time>
        			<?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date_add,Configuration::get('PH_BLOG_DATEFORMAT')), ENT_QUOTES, 'UTF-8');?>

        		</time>
        	</span>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value->author && Configuration::get('PH_BLOG_DISPLAY_AUTHOR')) {?>
        <li>
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['isWarehouse']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
            <i class="fa fa-user"></i>
            <?php } else { ?>
            <i class="material-icons">perm_identity</i>
            <?php }?>
        	<span>
                <?php if ((($tmp = $_smarty_tpl->tpl_vars['post']->value->author->active ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
                <a href="#blog-author"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->author, ENT_QUOTES, 'UTF-8');?>
</a>
                <?php } else { ?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->author, ENT_QUOTES, 'UTF-8');?>

                <?php }?>
	        </span>
        </li>
        <?php }?>
        <?php if (Configuration::get('PH_BLOG_DISPLAY_CATEGORY')) {?>
        <li>
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['isWarehouse']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
            <i class="fa fa-tags"></i>
            <?php } else { ?>
            <i class="material-icons">label</i>
            <?php }?>
        	<span>
	        	<a
	        		href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ph_simpleblog','category',array('sb_category'=>$_smarty_tpl->tpl_vars['post']->value->category_rewrite)), ENT_QUOTES, 'UTF-8');?>
"
	        		title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->category, ENT_QUOTES, 'UTF-8');?>
"
	        	>
	        		<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->category, ENT_QUOTES, 'UTF-8');?>

	        	</a>
	        </span>

        </li>
        <?php }?>
        <?php if (Configuration::get('PH_BLOG_DISPLAY_LIKES')) {?>
        <li>
        	<a href="#" data-guest="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['guest']->value, ENT_QUOTES, 'UTF-8');?>
" data-post="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->id_simpleblog_post, ENT_QUOTES, 'UTF-8');?>
" class="simpleblog-like-button">
                <?php if ((($tmp = $_smarty_tpl->tpl_vars['isWarehouse']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
                <i class="fa fa-heart"></i>
                <?php } else { ?>
                <i class="material-icons">favorite</i>
                <?php }?>
	        	<span class="likes-count">
	        		<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->likes, ENT_QUOTES, 'UTF-8');?>

	        	</span>
	        	<span>
		        	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'likes','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

		        </span>
	        </a>
        </li>
        <?php }?>
        <?php if (Configuration::get('PH_BLOG_DISPLAY_VIEWS')) {?>
        <li>
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['isWarehouse']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
            <i class="fa fa-eye"></i>
            <?php } else { ?>
            <i class="material-icons">remove_red_eye</i>
            <?php }?>
        	<span>
	        	<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->views, ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'views','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

	        </span>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['allow_comments']->value == true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'native') {?>
        <li>
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['isWarehouse']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>
            <i class="fa fa-comments"></i>
            <?php } else { ?>
            <i class="material-icons">comment</i>
            <?php }?>
        	<span>
        		<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->url, ENT_QUOTES, 'UTF-8');?>
#phsimpleblog_comments"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->comments, ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comments','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</a>
        	</span>
        </li>
        <?php }?>
    </ul>
</div>
<div class="simpleblog__post blog-mb cardblog">
	<?php if ($_smarty_tpl->tpl_vars['post']->value->featured_image && Configuration::get('PH_BLOG_DISPLAY_FEATURED')) {?>
		<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->featured_image, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
" class="fancybox simpleblog__post-featured text-xs-center d-block">
			<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->featured_image, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" />
		</a>
	<?php }?>
    <div class="simpleblog__post__content card-block pb-1">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'elementorContent', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlogElementor'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if (!empty($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'elementorContent'))) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13711637266740341ea39b19_65765440', 'hook_blog_elementor', $this->tplIndex);
?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['post_type']->value == 'gallery' && smarty_modifier_count($_smarty_tpl->tpl_vars['post']->value->gallery)) {?>
        <div class="post-gallery">
            <?php if ($_smarty_tpl->tpl_vars['post']->value->gallery_style == 'masonry') {?>
            <div class="post-gallery__gallery-js">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->gallery, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                    <a rel="post-gallery-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->id_simpleblog_post, ENT_QUOTES, 'UTF-8');?>
" class="blog-fancybox gallery-js__elem" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gallery_dir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['image'], ENT_QUOTES, 'UTF-8');?>
.jpg" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View full','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gallery_dir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['image'], ENT_QUOTES, 'UTF-8');?>
-thumb.jpg" class="img-fluid" /></a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div><!-- .post-gallery -->
            <?php } else { ?>
            <div class="post-gallery__row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->gallery, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['post']->value->gallery_style == '3columns') {?>
                <?php $_smarty_tpl->_assignInScope('galleryCols', 'col-lg-4 col-md-4');?>
                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value->gallery_style == '4columns') {?>
                <?php $_smarty_tpl->_assignInScope('galleryCols', 'col-lg-3 col-md-4');?>
                <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('galleryCols', 'col-lg-6 col-md-6');?>
                <?php }?>
                <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['galleryCols']->value, ENT_QUOTES, 'UTF-8');?>
 col-xs-6 post-gallery__elem">
                    <a rel="post-gallery-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value->id_simpleblog_post, ENT_QUOTES, 'UTF-8');?>
" class="blog-fancybox" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gallery_dir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['image'], ENT_QUOTES, 'UTF-8');?>
.jpg" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View full','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gallery_dir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['image'], ENT_QUOTES, 'UTF-8');?>
-square.jpg" class="img-fluid" /></a>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div><!-- .post-gallery -->
            <?php }?>
        </div>
		<?php } elseif ($_smarty_tpl->tpl_vars['post_type']->value == 'video') {?>
		<div class="post-video" itemprop="video">
			<?php echo $_smarty_tpl->tpl_vars['post']->value->video_code;?>

		</div><!-- .post-video -->
		<?php }?>
    </div>
    <div class="simpleblog__post__after-content" id="displayPrestaHomeBlogAfterPostContent">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPrestaHomeBlogAfterPostContent'),$_smarty_tpl ) );?>

	</div><!-- #displayPrestaHomeBlogAfterPostContent -->

    <nav>
      <ul class="pagination pagination-lg">
        <?php if ($_smarty_tpl->tpl_vars['previousPost']->value) {?>
        <li class="page-item">
          <a class="page-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['previousPost']->value['url'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous article','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</a>
        </li>
        <?php }?>
        <li class="page-item"><a class="page-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ph_simpleblog','list'), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Main page','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['nextPost']->value) {?>
        <li class="page-item">
          <a class="page-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nextPost']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next article','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</a>
        </li>
        <?php }?>
      </ul>
    </nav>
</div>

<?php if ((($tmp = $_smarty_tpl->tpl_vars['post']->value->author->active ?? null)===null||$tmp==='' ? false ?? null : $tmp) && Configuration::get('PH_BLOG_DISPLAY_AUTHOR')) {?>
    <?php $_smarty_tpl->_subTemplateRender('module:ph_simpleblog/views/templates/front/1.7/_partials/post-author.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('author'=>$_smarty_tpl->tpl_vars['post']->value->author), 0, false);
}?>

<?php if (Configuration::get('PH_BLOG_DISPLAY_SHARER')) {?>
<div class="simpleblog__share blog-mb">
    <h2 class="h2 mb-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share this post','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</h2>
    <ul class="my-2">
        <li>
        	<a
        		data-type="twitter"
        		href="#"
        		class="btn btn-blog-social btn-blog-social--twitter"
        	>
        		Twitter
        	</a>
       	</li>
        <li>
        	<a
        		data-type="facebook"
        		href="#"
        		class="btn btn-blog-social btn-blog-social--facebook"
        	>
        		Facebook
        	</a>
        </li>
        <li>
        	<a
        		data-type="pinterest"
        		href="#"
        		class="btn btn-blog-social btn-blog-social--pinterest"
        	>
        		Pinterest
        	</a>
        </li>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlogForPrestaShopSocialSharing'),$_smarty_tpl ) );?>

    </ul>
</div>
<?php }?>

<?php if (Configuration::get('PH_BLOG_DISPLAY_RELATED') && $_smarty_tpl->tpl_vars['related_products']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/_partials/post-single-related-products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['allow_comments']->value == true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'native') {?>
	<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/comments/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['allow_comments']->value == true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'facebook') {?>
	<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/comments/facebook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['allow_comments']->value == true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'disqus') {?>
	<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/comments/disqus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php echo '<script'; ?>
 type="application/ld+json">
<?php echo $_smarty_tpl->tpl_vars['jsonld']->value;?>

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'page_content'} */
}
