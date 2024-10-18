<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:12:15
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/hook/menu-html_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b61fa5ed77_31341868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49d8e56301eaba631e18a773dd59486f352cdc8c' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/hook/menu-html_index.tpl',
      1 => 1719473998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b61fa5ed77_31341868 (Smarty_Internal_Template $_smarty_tpl) {
?>

<ul id="index-mega-menu">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['tabs'], 'tab', false, 'key');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
        <li class="index-mega-menu-li-item">
            <div class="index-mega-menu-div-item">
               <span class="mm_tab_name mm_tab_toggle<?php if ($_smarty_tpl->tpl_vars['tab']->value['columns']) {?> mm_tab_has_child<?php }?>">
                    <span>
                        <?php if ($_smarty_tpl->tpl_vars['tab']->value['url']) {?>
                            <?php echo htmlspecialchars((string) Tools::generateCategoryMiniatureById($_smarty_tpl->tpl_vars['tab']->value['id_category']), ENT_QUOTES, 'UTF-8');?>

                            <a class="ets_mm_url" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                        <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_img_link']) {?>
                                <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['tab_img_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="" alt="" width="20"/>
                            <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_icon']) {?>
                                <i class="fa <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['tab_icon'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i>
                            <?php }?>
                            <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['tab']->value['bubble_text']) {?><span class="mm_bubble_text" style="background: <?php if ($_smarty_tpl->tpl_vars['tab']->value['bubble_background_color']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['bubble_background_color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#FC4444<?php }?>; color: <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['bubble_text_color'],'html','UTF-8' ))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['bubble_text_color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['bubble_text'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['tab']->value['url']) {?>
                            </a>
                        <?php }?>
                    </span>
                </span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['tab']->value['columns']) {?>
                <ul class="index-mega-menu-ul-item">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['columns'], 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
                        <li class="mm_columns_li column_size_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value['column_size'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['column']->value['is_breaker']) {?>mm_breaker<?php }?> <?php if ($_smarty_tpl->tpl_vars['column']->value['blocks']) {?>mm_has_sub<?php }?>">
                            <?php if ((isset($_smarty_tpl->tpl_vars['column']->value['blocks'])) && $_smarty_tpl->tpl_vars['column']->value['blocks']) {?>
                                <ul class="mm_blocks_ul">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value['blocks'], 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
                                        <li data-id-block="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['id_block'] )), ENT_QUOTES, 'UTF-8');?>
"
                                            class="mm_blocks_li">
                                            <?php echo Module::getInstanceByName('ets_megamenu')->hookDisplayBlock(array('block'=>$_smarty_tpl->tpl_vars['block']->value));?>

                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php }?>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php }?>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php echo '<script'; ?>
 type="text/javascript">
    var Days_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day(s)','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var Hours_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hr(s)','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var Mins_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Min(s)','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var Sec_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sec(s)','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
><?php }
}
