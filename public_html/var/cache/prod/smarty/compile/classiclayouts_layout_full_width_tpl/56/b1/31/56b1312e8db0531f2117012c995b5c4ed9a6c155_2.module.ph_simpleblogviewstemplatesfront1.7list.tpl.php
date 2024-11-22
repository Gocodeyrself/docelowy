<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:39
  from 'module:ph_simpleblogviewstemplatesfront1.7list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740335b7df2a8_96216099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56b1312e8db0531f2117012c995b5c4ed9a6c155' => 
    array (
      0 => 'module:ph_simpleblogviewstemplatesfront1.7list.tpl',
      1 => 1717758683,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ph_simpleblog/views/templates/front/1.7/_partials/post-miniature.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/pagination.tpl' => 2,
  ),
),false)) {
function content_6740335b7df2a8_96216099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10266702996740335b7d2e12_22082404', 'page_header_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1195997766740335b7d44c2_77158108', 'head_seo_title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1804183996740335b7d4973_86294982', 'head_seo_description');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7789379236740335b7d4d55_44399242', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_10266702996740335b7d2e12_22082404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_10266702996740335b7d2e12_22082404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-heading">
    <h1 class="h1">
    	<?php if ($_smarty_tpl->tpl_vars['is_category']->value == true) {?>
			<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blogCategory']->value->name, ENT_QUOTES, 'UTF-8');?>

		<?php } else { ?>
			<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blogMainTitle']->value, ENT_QUOTES, 'UTF-8');?>

		<?php }?>
    </h1>
	</div><!--.page-heading-->
<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'head_seo_title'} */
class Block_1195997766740335b7d44c2_77158108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_title' => 
  array (
    0 => 'Block_1195997766740335b7d44c2_77158108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_1804183996740335b7d4973_86294982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_description' => 
  array (
    0 => 'Block_1804183996740335b7d4973_86294982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'category_heading'} */
class Block_6471784176740335b7d5065_52577353 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if ($_smarty_tpl->tpl_vars['is_category']->value == true) {?>
			<?php if (Configuration::get('PH_BLOG_DISPLAY_CATEGORY_IMAGE') && (isset($_smarty_tpl->tpl_vars['blogCategory']->value->image)) || !empty($_smarty_tpl->tpl_vars['blogCategory']->value->description) && Configuration::get('PH_BLOG_DISPLAY_CAT_DESC')) {?>
				<div class="cardblog">
					<?php if (Configuration::get('PH_BLOG_DISPLAY_CATEGORY_IMAGE') && (isset($_smarty_tpl->tpl_vars['blogCategory']->value->image))) {?>
						<div class="simpleblog-category-image">
							<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blogCategory']->value->image, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blogCategory']->value->name, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" />
						</div>
					<?php }?>

					<?php if (!empty($_smarty_tpl->tpl_vars['blogCategory']->value->description) && Configuration::get('PH_BLOG_DISPLAY_CAT_DESC')) {?>
						<div class="ph_cat_description rte card-block pb-1">
							<?php echo $_smarty_tpl->tpl_vars['blogCategory']->value->description;?>

						</div>
					<?php }?>
				</div>
			<?php }?>
		<?php }?>
		<?php
}
}
/* {/block 'category_heading'} */
/* {block 'category_children'} */
class Block_16692365836740335b7d7a87_75914373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

		<?php if (Configuration::get('PH_BLOG_DISPLAY_CATEGORY_CHILDREN')) {?>
			<?php if ($_smarty_tpl->tpl_vars['is_category']->value == true) {?>
				<?php $_smarty_tpl->_assignInScope('subcategories', SimpleBlogCategory::getChildrens($_smarty_tpl->tpl_vars['blogCategory']->value->id_simpleblog_category));?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('subcategories', SimpleBlogCategory::getCategories($_smarty_tpl->tpl_vars['language']->value['id'],true,true));?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['subcategories']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value) > 0) {?>
			<div class="blogSubcat mb-2">
				<ul class="blogSubcat__list my-1">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
						<li class="blogSubcat__item">
							<a
								class="blogSubcat__link cardblog btn mb-0"
								href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
								>	
								<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>

							</a>
						</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
			<?php }?>
		<?php }?>
		<?php
}
}
/* {/block 'category_children'} */
/* {block 'category_elements'} */
class Block_20077109256740335b7d4ed5_74189301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6471784176740335b7d5065_52577353', 'category_heading', $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16692365836740335b7d7a87_75914373', 'category_children', $this->tplIndex);
?>

	<?php
}
}
/* {/block 'category_elements'} */
/* {block 'listing'} */
class Block_19371407816740335b7dbde7_26345883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="simpleblog__listing">
		<div class="<?php if ($_smarty_tpl->tpl_vars['useMasonry']->value) {?>blog-masonry-list<?php } else { ?>row<?php }?>">
			<?php if ((isset($_smarty_tpl->tpl_vars['posts']->value)) && count($_smarty_tpl->tpl_vars['posts']->value)) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
	        	<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/_partials/post-miniature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('masonry'=>$_smarty_tpl->tpl_vars['useMasonry']->value), 0, true);
?>
		    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	        <?php } else { ?>
			<div class="warning alert alert-warning col-xs-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no posts','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</div>
	        <?php }?>
		</div><!-- .row -->
	</div><!-- .simpleblog__listing -->
	<?php
}
}
/* {/block 'listing'} */
/* {block 'pagination'} */
class Block_17557814056740335b7dddc9_55250370 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['posts']->value)) && count($_smarty_tpl->tpl_vars['posts']->value)) {?>
	    <?php if ($_smarty_tpl->tpl_vars['is_category']->value) {?>
	    	<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rewrite'=>$_smarty_tpl->tpl_vars['blogCategory']->value->link_rewrite,'type'=>'category'), 0, false);
?>
	    <?php } else { ?>
	    	<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rewrite'=>false,'type'=>false), 0, true);
?>
	    <?php }?>
	<?php }?>
	<?php
}
}
/* {/block 'pagination'} */
/* {block 'page_content'} */
class Block_7789379236740335b7d4d55_44399242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_7789379236740335b7d4d55_44399242',
  ),
  'category_elements' => 
  array (
    0 => 'Block_20077109256740335b7d4ed5_74189301',
  ),
  'category_heading' => 
  array (
    0 => 'Block_6471784176740335b7d5065_52577353',
  ),
  'category_children' => 
  array (
    0 => 'Block_16692365836740335b7d7a87_75914373',
  ),
  'listing' => 
  array (
    0 => 'Block_19371407816740335b7dbde7_26345883',
  ),
  'pagination' => 
  array (
    0 => 'Block_17557814056740335b7dddc9_55250370',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20077109256740335b7d4ed5_74189301', 'category_elements', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19371407816740335b7dbde7_26345883', 'listing', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17557814056740335b7dddc9_55250370', 'pagination', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
