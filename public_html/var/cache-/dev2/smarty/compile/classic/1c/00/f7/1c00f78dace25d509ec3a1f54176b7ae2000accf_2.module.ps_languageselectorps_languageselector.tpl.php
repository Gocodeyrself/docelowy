<?php
/* Smarty version 4.3.1, created on 2024-08-08 14:12:33
  from 'module:ps_languageselectorps_languageselector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4b631c23d25_28240207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:ps_languageselectorps_languageselector.tpl',
      1 => 1718869807,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4b631c23d25_28240207 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/modules/ps_languageselector/ps_languageselector.tpl --><div id="_desktop_language_selector">
  <div class="language-selector-wrapper">
        <div class="language-selector dropdown js-dropdown">
      <button data-toggle="dropdown" class="hidden-sm-down btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language dropdown','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
       <img class="flag_img image-fluid" src="/img/flags/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg"/>
        <span class="expand-more"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</span>
        <i class="material-icons expand-more">&#xE5C5;</i>
      </button>
            <ul class="dropdown-menu" aria-labelledby="language-selector-label">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
          <li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" class="dropdown-item" data-iso-code="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><img class="flag_img image-fluid" src="/img/flags/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
.jpg"/><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</a>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
          </div>
  </div>
</div>
<!-- end /home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/modules/ps_languageselector/ps_languageselector.tpl --><?php }
}
