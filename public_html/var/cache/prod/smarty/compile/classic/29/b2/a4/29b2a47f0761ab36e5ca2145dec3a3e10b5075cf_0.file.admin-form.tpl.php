<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:35:20
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/hook/admin-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67109408b46277_67195309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29b2a47f0761ab36e5ca2145dec3a3e10b5075cf' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/hook/admin-form.tpl',
      1 => 1700227159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67109408b46277_67195309 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var mm_img_dir ="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm_img_dir']->value,'quotes','UTF-8' ));?>
";
    var mmBaseAdminUrl = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mmBaseAdminUrl']->value,'quotes','UTF-8' ));?>
";
    var mmCloseTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmOpenTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmDeleteTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmEditTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmDeleteTitleTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this item','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmAddMenuTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmEditMenuTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmAddColumnTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new column','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmEditColumnTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit column','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmDeleteColumnTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this column','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmDeleteBlockTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this block','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmEditBlockTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this block','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmAddBlockTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new block','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmDuplicateTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmDuplicateMenuTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate this menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmDuplicateColumnTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate this column','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmDuplicateBlockTxt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate this block','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var ets_mm_invalid_file = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'File is invalid','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var ets_mm_invalid_image = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image is invalid','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var mmLabelDelete = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
";
    var Saved_text ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saved','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var confirm_delete_menu ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this menu?','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var confirm_delete_tab ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this tab?','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var confirm_delete_column ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this column?','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
    var confirm_delete_block ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this block?','mod'=>'ets_megamenu','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<div class="clearfix"></div>
<div class="ets_megamenu mm_view_mode_tab <?php if ($_smarty_tpl->tpl_vars['mm_backend_layout']->value == 'rtl') {?>ets-dir-rtl backend-layout-rtl<?php } else { ?>ets-dir-ltr backend-layout-ltr<?php }?> <?php if ($_smarty_tpl->tpl_vars['multiLayout']->value) {?>mm_multi_layout<?php } else { ?>mm_single_layout<?php }?>">
    <div class="ets_megamenu_tool_bar">
        <div class="ets_megamenu_buttons">
            <div class="mm_view_mm_view_modes btn btn-default">
                <div class="mm_view_mode mm_view_mode_tab_select active" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview in tab mode','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
                <div class="mm_view_mode mm_view_mode_list_select" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview in list mode','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['multiLayout']->value) {?>
                <div class="mm_layout_mode btn btn-default">
                    <div data-title="&#xE236;" class="mm_layout_ltr mm_change_mode <?php if ($_smarty_tpl->tpl_vars['mm_backend_layout']->value != 'rtl') {?>active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LTR','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
                    <div data-title="&#xE237;" class="mm_layout_rlt mm_change_mode <?php if ($_smarty_tpl->tpl_vars['mm_backend_layout']->value == 'rtl') {?>active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'RTL','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
                </div>
            <?php }?>
            <div class="mm_import_button btn btn-default"><i class="fa fa-exchange" data-title="&#xE8D4;"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import/Export','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
            <div class="mm_config_button btn btn-default" data-title="&#xE8B8;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
        </div>
    </div>
    <div class="mm_menus">
        <?php if ($_smarty_tpl->tpl_vars['menus']->value) {?>
            <ul class="mm_menus_ul">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
                    <li class="mm_menus_li item<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_menu'] ));?>
 <?php if (!$_smarty_tpl->tpl_vars['menu']->value['enabled']) {?>mm_disabled<?php }?>" data-id-menu="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_menu'] ));?>
" data-obj="menu">
                        <?php echo Module::getInstanceByName('ets_megamenu')->hookDisplayMMItemMenu(array('menu'=>$_smarty_tpl->tpl_vars['menu']->value));?>

                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>        
        <div class="mm_useful_buttons">
            <div class="mm_add_menu btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
        </div>
    </div>
    <div class="mm_loading_icon">
        <span></span>
    </div>
    <!-- popup forms -->
    <div class="mm_forms hidden mm_popup_overlay">
        <div class="mm_menu_form hidden mm_pop_up">
            <div class="mm_close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
            <div class="mm_form"></div>
        </div>
        <div class="mm_menu_form_new hidden"><?php echo $_smarty_tpl->tpl_vars['menuForm']->value;?>
</div>
        <div class="mm_tab_form_new hidden"><?php echo $_smarty_tpl->tpl_vars['tabForm']->value;?>
</div>
        <div class="mm_column_form_new hidden"><?php echo $_smarty_tpl->tpl_vars['columnForm']->value;?>
</div>
        <div class="mm_block_form_new hidden"><?php echo $_smarty_tpl->tpl_vars['blockForm']->value;?>
</div>
        <div class="mm_icon_form_new hidden"><?php echo $_smarty_tpl->tpl_vars['iconForm']->value;?>
</div>
    </div>
    <div class="mm_popup_overlay hidden">
        <div class="mm_config_form mm_pop_up">
            <div class="mm_close" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
            <div class="mm_config_form_content"><div class="mm_close"></div><?php echo $_smarty_tpl->tpl_vars['configForm']->value;?>
</div>
        </div>
    </div>
    <div class="mm_export_form hidden mm_popup_overlay">
        <div class="mm_close"></div>
        <div class="mm_export mm_pop_up hidden">
            <div data-title="&#xE14C;" class="mm_close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
            <div class="mm_export_form_content">            
                <div class="mm_export_option">
                    <div class="export_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export menu content','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
                    <a class="btn btn-default mm_export_menu" href="<?php echo $_smarty_tpl->tpl_vars['mmBaseAdminUrl']->value;?>
&exportMenu=1" target="_blank">
                        <i class="fa fa-download" data-title="&#xE864;"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>

                    </a>
                    <p class="mm_export_option_note"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export all menu data including images, text and configuration','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</p>
                </div>                       
                <div class="mm_import_option">
                    <div class="export_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import menu data','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['mmBaseAdminUrl']->value;?>
" method="post" enctype="multipart/form-data" class="mm_import_option_form">
                        <div class="mm_import_option_updata">
                            <label for="sliderdata"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu data package','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</label>
                            <input id="image" type="file" name="sliderdata" id="sliderdata" />
                        </div>
                        <div class="mm_import_option_clean">
                            <input type="checkbox" value="1" id="importoverride" checked="checked" name="importoverride" />
                            <label for="importoverride"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all menus before importing','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</label>
                        </div>
                        <div class="mm_import_option_button">
                            <input type="hidden" name="importMenu" value="1" />
                            <div class="mm_import_menu_loading"><img src="<?php echo $_smarty_tpl->tpl_vars['mm_img_dir']->value;?>
loader.gif" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Importing data','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</div>
                            <div class="mm_import_menu_submit">
                                <i class="fa fa-compress" data-title="&#xE0C3;"></i>
                                <input type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import menu','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
" class="btn btn-default mm_import_menu"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div><?php }
}
