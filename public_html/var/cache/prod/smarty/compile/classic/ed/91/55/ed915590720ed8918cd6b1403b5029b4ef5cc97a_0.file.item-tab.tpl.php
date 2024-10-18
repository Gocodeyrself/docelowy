<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:35:20
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/hook/item-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67109408bd08b5_42271033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed915590720ed8918cd6b1403b5029b4ef5cc97a' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/hook/item-tab.tpl',
      1 => 1700227159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67109408bd08b5_42271033 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['have_li']->value) {?>
    <li data-id-tab="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id_tab'] ));?>
" class="mm_tabs_li item<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id_tab'] ));?>
 <?php if (!$_smarty_tpl->tpl_vars['tab']->value['enabled']) {?>mm_disabled<?php }?>" data-obj="tab">
<?php }?>
    <div class="mm_tab_li_content" style="width: <?php if ($_smarty_tpl->tpl_vars['menu']->value['tab_item_width']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['tab_item_width'],'html','UTF-8' ));
} else { ?>230px<?php }?>">
        <span class="mm_tab_name mm_tab_toggle">
            <span class="mm_tab_toggle_title">
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['url']) {?>
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['url'],'html','UTF-8' ));?>
">
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_img_link']) {?>
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['tab_img_link'],'html','UTF-8' ));?>
" title="" alt="" width="20" />
                <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_icon']) {?>
                    <i class="fa <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['tab_icon'],'html','UTF-8' ));?>
"></i>
                <?php }?>
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['title'],'html','UTF-8' ));?>

                <?php if ($_smarty_tpl->tpl_vars['tab']->value['bubble_text']) {?><span class="mm_bubble_text" style="background: <?php if ($_smarty_tpl->tpl_vars['tab']->value['bubble_background_color']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['bubble_background_color'],'html','UTF-8' ));
} else { ?>#FC4444<?php }?>; color: <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['bubble_text_color'],'html','UTF-8' ))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['bubble_text_color'],'html','UTF-8' ));
} else { ?>#ffffff<?php }?>;"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['bubble_text'],'html','UTF-8' ));?>
</span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['tab']->value['url']) {?>
                    </a>
                <?php }?>
            </span>
        </span>
        <div class="mm_buttons" style="left:<?php if ($_smarty_tpl->tpl_vars['menu']->value['tab_item_width']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['tab_item_width'],'html','UTF-8' ));
} else { ?>230px<?php }?>;right:<?php if ($_smarty_tpl->tpl_vars['menu']->value['tab_item_width']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['tab_item_width'],'html','UTF-8' ));
} else { ?>230px<?php }?>;">
            <span class="mm_tab_delete" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete tab','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>  
            <span class="mm_duplicate" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate tab','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>                      
            <span class="mm_tab_edit" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit tab','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span>                
            <span class="mm_menu_toggle mm_menu_toggle_arrow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</span> 
            <div class="mm_add_column btn btn-default" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add column','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
" data-id-menu="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id_menu'] ));?>
" data-id-tab="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id_tab'] ));?>
" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add column','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div> 
        </div> 
    </div>
    <ul class="mm_columns_ul" style="width:calc(100% - <?php if ($_smarty_tpl->tpl_vars['menu']->value['tab_item_width']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['tab_item_width'],'html','UTF-8' ));
} else { ?>230px<?php }?>); left: <?php if ($_smarty_tpl->tpl_vars['menu']->value['tab_item_width']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['tab_item_width'],'html','UTF-8' ));
} else { ?>230px<?php }?>;right: <?php if ($_smarty_tpl->tpl_vars['menu']->value['tab_item_width']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['tab_item_width'],'html','UTF-8' ));
} else { ?>230px<?php }?>;">
        <?php if ($_smarty_tpl->tpl_vars['tab']->value['columns']) {?>                            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['columns'], 'column');
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
<?php if ($_smarty_tpl->tpl_vars['have_li']->value) {?>
</li>
<?php }
}
}
