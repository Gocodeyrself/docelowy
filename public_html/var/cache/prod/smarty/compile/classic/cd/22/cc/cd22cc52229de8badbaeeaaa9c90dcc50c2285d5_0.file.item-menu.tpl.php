<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:35:20
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/hook/item-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67109408bb2845_37334895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd22cc52229de8badbaeeaaa9c90dcc50c2285d5' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/hook/item-menu.tpl',
      1 => 1702039028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67109408bb2845_37334895 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['have_li']->value) {?>
    <li class="mm_menus_li item<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_menu'] ));?>
 <?php if (!$_smarty_tpl->tpl_vars['menu']->value['enabled']) {?>mm_disabled<?php }?>" data-id-menu="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_menu'] ));?>
" data-obj="menu">
<?php }?>                        
    <?php if ($_smarty_tpl->tpl_vars['menu']->value['enabled_vertical']) {?>
        <div class="mm_menus_li_content" style="width: <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_item_width']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['menu_item_width'],'html','UTF-8' ));
} else { ?>230px<?php }?>">
            <span class="mm_menu_name mm_menu_toggle">
                <span class="mm_menu_content_title">
                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_img_link']) {?>
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['menu_img_link'],'html','UTF-8' ));?>
" title="" alt="" width="20" />
                    <?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['menu_icon']) {?>
                        <i class="fa <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['menu_icon'],'html','UTF-8' ));?>
"></i>
                    <?php }?>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['title'],'html','UTF-8' ));?>

                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['bubble_text']) {?><span class="mm_bubble_text" style="background: <?php if ($_smarty_tpl->tpl_vars['menu']->value['bubble_background_color']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['bubble_background_color'],'html','UTF-8' ));
} else { ?>#FC4444<?php }?>; color: <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['bubble_text_color'],'html','UTF-8' ))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['bubble_text_color'],'html','UTF-8' ));
} else { ?>#ffffff<?php }?>;"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['bubble_text'],'html','UTF-8' ));?>
</span><?php }?>
                </span>
            </span>
            <div class="mm_buttons button_add_tab">
                <span class="mm_menu_delete" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>  
                <span class="mm_duplicate" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>                      
                <span class="mm_menu_edit" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>                
                <span class="mm_menu_toggle mm_menu_toggle_arrow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span> 
                <div class="mm_add_tab btn btn-default" data-id-menu="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_menu'] ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add tab','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add tab','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div> 
            </div> 
        </div>
        
        <div class="mm_tabs_ul">
            <ul class="mm_tabs_ul_content">
                <?php if ($_smarty_tpl->tpl_vars['menu']->value['tabs']) {?>                            
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['tabs'], 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                        <li data-id-tab="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id_tab'] ));?>
" class="mm_tabs_li item<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id_tab'] ));?>
 <?php if (!$_smarty_tpl->tpl_vars['tab']->value['enabled']) {?>mm_disabled<?php }?>" data-obj="tab">
                            <?php echo Module::getInstanceByName('ets_megamenu')->hookDisplayMMItemTab(array('tab'=>$_smarty_tpl->tpl_vars['tab']->value));?>

                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                            
                <?php }?>
            </ul>
        </div>
    <?php } else { ?>
        <div class="mm_menus_li_content">
            <span class="mm_menu_name mm_menu_toggle">
                <span class="mm_menu_content_title">
                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_img_link']) {?>
                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['menu_img_link'],'html','UTF-8' ));?>
" title="" alt="" width="20" />
                    <?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['menu_icon']) {?>
                        <i class="fa <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['menu_icon'],'html','UTF-8' ));?>
"></i>
                    <?php }?>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['title'],'html','UTF-8' ));?>

                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['bubble_text']) {?><span class="mm_bubble_text" style="background: <?php if ($_smarty_tpl->tpl_vars['menu']->value['bubble_background_color']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['bubble_background_color'],'html','UTF-8' ));
} else { ?>#FC4444<?php }?>; color: <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['bubble_text_color'],'html','UTF-8' ))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['bubble_text_color'],'html','UTF-8' ));
} else { ?>#ffffff<?php }?>;"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['bubble_text'],'html','UTF-8' ));?>
</span><?php }?>
                </span>
            </span>
            <div class="mm_buttons">
                <span class="mm_menu_delete" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>  
                <span class="mm_duplicate" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>                      
                <span class="mm_menu_edit" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>                
                <span class="mm_menu_toggle mm_menu_toggle_arrow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span> 
                <div class="mm_add_column btn btn-default" data-id-menu="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_menu'] ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add column','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add column','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div> 
            </div> 
        </div>
        <ul class="mm_columns_ul">
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['columns']) {?>                            
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['columns'], 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
                    <li data-id-column="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value['id_column'] ));?>
" class="mm_columns_li item<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value['id_column'] ));?>
 column_size_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value['column_size'] ));?>
 <?php if ($_smarty_tpl->tpl_vars['column']->value['is_breaker']) {?>mm_breaker<?php }?>" data-obj="column">
                        <?php echo Module::getInstanceByName('ets_megamenu')->hookDisplayMMItemColumn(array('column'=>$_smarty_tpl->tpl_vars['column']->value));?>

                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                            
            <?php }?>  
        </ul> 
    <?php }?> 
<?php if ($_smarty_tpl->tpl_vars['have_li']->value) {?>
</li>
<?php }
}
}
