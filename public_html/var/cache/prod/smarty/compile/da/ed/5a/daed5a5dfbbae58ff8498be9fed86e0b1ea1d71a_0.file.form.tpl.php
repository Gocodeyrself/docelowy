<?php
/* Smarty version 4.3.1, created on 2024-10-17 06:35:20
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671094088ff093_55106490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daed5a5dfbbae58ff8498be9fed86e0b1ea1d71a' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ets_megamenu/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1700227159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671094088ff093_55106490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17938364467109408878137_56495987', "label");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3218362536710940887d8d6_65548775', "input");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_846637411671094088e5361_19843367', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1637305267671094088ebe33_83829384', "footer");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1091075173671094088fb4e1_01560009', "input_row");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "label"} */
class Block_17938364467109408878137_56495987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_17938364467109408878137_56495987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['showRequired'])) && $_smarty_tpl->tpl_vars['input']->value['showRequired']) {?>
        <label class="control-label col-lg-3 required"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['label'],'html','UTF-8' ));?>
</label>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>
 
    <?php }
}
}
/* {/block "label"} */
/* {block "input"} */
class Block_3218362536710940887d8d6_65548775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_3218362536710940887d8d6_65548775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'checkbox') {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['values']['query'])) && $_smarty_tpl->tpl_vars['input']->value['values']['query']) {?>
                <?php $_smarty_tpl->_assignInScope('id_checkbox', (($_smarty_tpl->tpl_vars['input']->value['name']).('_')).('all'));?>
                <?php $_smarty_tpl->_assignInScope('checkall', true);?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['query'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    				<?php if (!((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && is_array($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] && in_array($_smarty_tpl->tpl_vars['value']->value['value'],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]))) {?> 
                        <?php $_smarty_tpl->_assignInScope('checkall', false);?>
                    <?php }?>
    			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                <div class="checkbox_all checkbox">
					<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_checkbox']->value,'html','UTF-8' ));?>
"><input type="checkbox" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
[]" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_checkbox']->value,'html','UTF-8' ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['value']))) {?> value="0"<?php }
if ($_smarty_tpl->tpl_vars['checkall']->value) {?> checked="checked"<?php }?> /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select/Unselect all','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</label>
				</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['query'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    				<?php $_smarty_tpl->_assignInScope('id_checkbox', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]),'html','UTF-8' )));?>
    				<div class="checkbox<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand'])) && strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'show') {?> hidden<?php }?>">
    					<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_checkbox']->value,'html','UTF-8' ));?>
"><input type="checkbox" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
[]" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_checkbox']->value,'html','UTF-8' ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['value']))) {?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8' ));?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && is_array($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] && in_array($_smarty_tpl->tpl_vars['value']->value['value'],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?> checked="checked"<?php }?> /><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']],'html','UTF-8' ));?>
</label>
    				</div>
    			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'search') {?>
        <div class="mm_search_product_form">
            <input class="mm_search_product" name="mm_search_product" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['placeholder']))) {?>placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['placeholder'],'html','UTF-8' ));?>
"<?php }?> autocomplete="off" type="text" />
            <input class="mm_product_ids" name="id_products" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" type="hidden" />
            <ul class="mm_products">
                <?php echo Module::getInstanceByName('ets_megamenu')->hookDisplayMMProductList(array('ids'=>$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]));?>

                <li class="mm_product_loading"></li>
            </ul>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'radios') {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['values'])) && $_smarty_tpl->tpl_vars['input']->value['values']) {?>
            <ul class="mm_product_type">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('id_radio', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value['value']),'html','UTF-8' )));?>
                <li class="mm_type_item <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8' ));?>
">
                    <label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_radio']->value,'html','UTF-8' ));?>
">
                        <input type="radio" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_radio']->value,'html','UTF-8' ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['value']))) {?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8' ));?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] && ($_smarty_tpl->tpl_vars['value']->value['value'] == $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?> checked="checked"<?php }?> />
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'html','UTF-8' ));?>

                    </label>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['class'] == 'mm_browse_icon' && $_smarty_tpl->tpl_vars['input']->value['type'] == 'text') {?>
        <div class="dummyfile input-group">
            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

            <span class="input-group-btn mm_browse_icon">
                <button type="button" name="submitAddBrowseIcon" class="btn btn-default">
                    <i class="icon-search"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Browse icon','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>

                </button>
            </span>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_lang') {?>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
              <div class="form-group">
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    <div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
                    <div class="col-lg-9">
                <?php } else { ?>
                    <div class="col-lg-12">
                <?php }?>
                       <div class="dummyfile input-group sass">
                            <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" type="file" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
" class="hide-file-upload" />
                            <span class="input-group-addon"><i class="icon-file"></i></span>
                            <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
-name" type="text" class="disabled" name="filename" readonly />
                            <span class="input-group-btn">
                                <button id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
                                    <i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select a file','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>

                                </button>
                            </span>
                        </div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]) {?>
                            <div class="clearfix"></div>
                            <div class="preview_img">
                                <img title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to see full size image','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
" style="display: inline-block; max-width: 200px;" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));?>
" />
                                <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'thumb' && (isset($_smarty_tpl->tpl_vars['thumb_del_link']->value)) && $_smarty_tpl->tpl_vars['thumb_del_link']->value && !((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'])) {?>
                                    <a class="delete_url"  style="display: inline-block; text-decoration: none!important;" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thumb_del_link']->value,'html','UTF-8' ));?>
&id_lang=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
"><span style="color: #666"><i style="font-size: 20px;" class="process-icon-delete"></i></span></a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'image' && (isset($_smarty_tpl->tpl_vars['img_del_link']->value)) && $_smarty_tpl->tpl_vars['img_del_link']->value && !((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'])) {?>
                                    <a class="delete_url"  style="display: inline-block; text-decoration: none!important;" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_del_link']->value,'html','UTF-8' ));?>
&id_lang=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
"><span style="color: #666"><i style="font-size: 20px;" class="process-icon-delete"></i></span></a>
                                <?php }?>
                            </div>

                        <?php }?>
                    </div>
                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    <div class="col-lg-2">
                        <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'html','UTF-8' ));?>

                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
                            <li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'] ));?>
);" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'html','UTF-8' ));?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>
                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    </div>
                <?php }?>
                <?php echo '<script'; ?>
>
                $(document).ready(function(){
                    $("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
-selectbutton").click(function(e){
                        $("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
").trigger('click');
                    });
                    $("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
-name").click(function(e){
                        $("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
").trigger('click');
                    });
                    $("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
").change(function(e){
                        var val = $(this).val();
                        var file = val.split(/[\\/]/);
                        $("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'] ));?>
-name").val(file[file.length-1]);
                    });
                });
            <?php echo '</script'; ?>
>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
          </div>
        <?php }?>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>
 
        <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'ETS_MM_CACHE_LIFE_TIME') {?>
            <a class="mm_clear_cache" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm_clear_cache_url']->value,'html','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear menu cache','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</a>
        <?php }?>               
    <?php }?>            
<?php
}
}
/* {/block "input"} */
/* {block "field"} */
class Block_846637411671094088e5361_19843367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_846637411671094088e5361_19843367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['name']) {?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file' && (isset($_smarty_tpl->tpl_vars['input']->value['display_img'])) && $_smarty_tpl->tpl_vars['input']->value['display_img']) {?>
            <label class="control-label col-lg-3 uploaded_image_label" style="font-style: italic;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploaded image: ','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</label>
            <div class="col-lg-9 uploaded_img_wrapper">
        		<a  class="ets_mm_fancy" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['display_img'],'html','UTF-8' ));?>
"><img title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to see full size image','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
" style="display: inline-block; max-width: 200px;" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['display_img'],'html','UTF-8' ));?>
" /></a>
                <?php if ((!(isset($_smarty_tpl->tpl_vars['input']->value['hide_delete'])) || (isset($_smarty_tpl->tpl_vars['input']->value['hide_delete'])) && !$_smarty_tpl->tpl_vars['input']->value['hide_delete']) && (isset($_smarty_tpl->tpl_vars['input']->value['img_del_link'])) && $_smarty_tpl->tpl_vars['input']->value['img_del_link'] && !((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'])) {?>
                    <a class="delete_url" style="display: inline-block; text-decoration: none!important;" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['img_del_link'],'html','UTF-8' ));?>
"><span style="color: #666"><i style="font-size: 20px;" class="process-icon-delete"></i></span></a>
                <?php }?>
            </div>        
        <?php }?>    
    <?php }
}
}
/* {/block "field"} */
/* {block "footer"} */
class Block_1637305267671094088ebe33_83829384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1637305267671094088ebe33_83829384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qisogexqbz/domains/cezos.exis24.pl/public_html/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'form_submit_btn', null, null);
echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>      
	<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) || (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']))) {?>
		<div class="panel-footer">
            <?php if ((isset($_smarty_tpl->tpl_vars['reset_default']->value)) && $_smarty_tpl->tpl_vars['reset_default']->value) {?>
                <span class="btn btn-default mm_reset_default" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only reset configuration to default. Menu data won\'t be lost','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
">
                    <i class="process-icon-refresh"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>

                </span>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) && !empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
            <div class="img_loading_wrapper hidden">
                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_module_baseurl']->value,'html','UTF-8' ));?>
ajax-loader.gif" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
" class="ets_megamenu_loading" />
            </div>
            <input type="hidden" name="mm_object" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm_object']->value,'html','UTF-8' ));?>
" />
            <?php if ((isset($_smarty_tpl->tpl_vars['list_item']->value)) && $_smarty_tpl->tpl_vars['list_item']->value) {?>
                <input type="hidden" name="itemId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['item_id']->value ));?>
" />
                <input type="hidden" name="mm_form_submitted" value="1" />
            <?php } else { ?>
                <input type="hidden" name="mm_config_submitted" value="1" />
            <?php }?>
            <div class="mm_save_wrapper">
    			<button type="submit" value="1"	class="mm_save_button <?php if ((isset($_smarty_tpl->tpl_vars['list_item']->value)) && $_smarty_tpl->tpl_vars['list_item']->value) {?>mm_save<?php } else { ?>mm_config_save<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'],'html','UTF-8' ));
} else { ?>btn btn-default pull-right<?php }?>">
    				<i class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'],'html','UTF-8' ));
} else { ?>process-icon-save<?php }?>"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'],'html','UTF-8' ));?>

    			</button>
            </div>
			<?php }?>
            
		</div>
	<?php }?>    
<?php
}
}
/* {/block "footer"} */
/* {block "input_row"} */
class Block_1091075173671094088fb4e1_01560009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_1091075173671094088fb4e1_01560009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'ETS_MM_HOOK_TO') {?>
        <div class="mm_config_form_tab_div">
            <ul class="mm_config_form_tab">
                <li class="mm_config_genneral active" data-tab="general"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</li>
                <li class="mm_config_design" data-tab="design"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Design','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</li>
                <li class="mm_config_extra_features" data-tab="extra_features"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra features','mod'=>'ets_megamenu'),$_smarty_tpl ) );?>
</li>
            </ul>
        </div>
        <div class="mm_config_forms">
            <div class="mm_config_general active">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'ETS_MM_LAYOUT') {?>
        </div>
        <div class="mm_config_design">
    <?php }?>    
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'ETS_MM_DISPLAY_SHOPPING_CART') {?>
        </div>
        <div class="mm_config_extra_features">
    <?php }?>
    <div class="form-group-wrapper row_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strtolower($_smarty_tpl->tpl_vars['input']->value['name']),'html','UTF-8' ));?>
"><?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'ETS_MM_CUSTOM_HTML_TEXT') {?>
        </div>
        </div>
    <?php }
}
}
/* {/block "input_row"} */
}
