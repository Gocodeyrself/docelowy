<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:15:12
  from 'module:ph_simpleblogviewstemplateshook1.7leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b6d0438535_77576095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6581c367e3a3eca764f7413568539628f75a7d3d' => 
    array (
      0 => 'module:ph_simpleblogviewstemplateshook1.7leftcolumn.tpl',
      1 => 1717758683,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b6d0438535_77576095 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ph_simpleblog/views/templates/hook/1.7/left-column.tpl -->
<div class="block-categories hidden-sm-down">
    <ul class="category-top-menu">
    	<li><a class="text-uppercase h6" href="<?php echo htmlspecialchars((string) ph_simpleblog::getLink(), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</a></li>
        <li>
            <ul class="category-sub-menu">
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
				<li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Link to','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
					<?php if ((isset($_smarty_tpl->tpl_vars['category']->value['childrens']))) {?>
					<div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#blog_subcategory_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons add"></i><i class="material-icons remove"></i></div>
					<div class="collapse" id="blog_subcategory_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
						<ul class="category-sub-menu">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['childrens'], 'child_category');
$_smarty_tpl->tpl_vars['child_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child_category']->value) {
$_smarty_tpl->tpl_vars['child_category']->do_else = false;
?>
							<li>
								<a class="category-sub-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['child_category']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Link to','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['child_category']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
									<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['child_category']->value['name'], ENT_QUOTES, 'UTF-8');?>

								</a>
							</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
					<?php }?>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </li>
    </ul>
</div>
<!-- end /home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ph_simpleblog/views/templates/hook/1.7/left-column.tpl --><?php }
}
