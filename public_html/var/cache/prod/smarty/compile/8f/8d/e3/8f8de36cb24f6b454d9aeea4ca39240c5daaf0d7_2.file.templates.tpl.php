<?php
/* Smarty version 4.3.1, created on 2024-10-16 13:32:53
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/gformbuilderpro/views/templates/front/templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670fa465a2ca78_81062386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f8de36cb24f6b454d9aeea4ca39240c5daaf0d7' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/gformbuilderpro/views/templates/front/templates.tpl',
      1 => 1723533775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670fa465a2ca78_81062386 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['codehook']->value)) || !$_smarty_tpl->tpl_vars['codehook']->value) {?>

{extends file='page.tpl'}
{block name='page_content'}


<?php echo '<script'; ?>
 type="text/javascript">
var baseUri = '{$baseUri|escape:'html':'UTF-8'}';
<?php echo '</script'; ?>
>



{if isset($ispopup) && $ispopup}
    <a href="#gformbuilderpro_form_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['idform']->value )), ENT_QUOTES, 'UTF-8');?>
" rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['idform']->value )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary gformbuilderpro_openform">{$popup_label}</a>
{/if}

<input type="hidden" id="gformbuilderpro_formValidity" value="{$required_warrning}" />
<div id="gformbuilderpro_form_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['idform']->value )), ENT_QUOTES, 'UTF-8');?>
" class="gformbuilderpro_form gformbuilderpro_form_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['idform']->value )), ENT_QUOTES, 'UTF-8');?>
 {if isset($ispopup) && $ispopup} ispopup_form ghidden_form {/if}" >
    
    {if isset($_errors)}
    <div class="alert alert-danger" id="create_account_error">
        <ol>
        {foreach $_errors as $_error}
            <li>{$_error|escape:'html':'UTF-8'}</li>
        {/foreach}
        </ol>
    </div>
    {/if}
    
    <form action="{$actionUrl|escape:'html':'UTF-8'}" method="POST" class="<?php if ($_smarty_tpl->tpl_vars['ajax']->value) {?>form_using_ajax<?php }?> row" <?php if ($_smarty_tpl->tpl_vars['hasupload']->value) {?> enctype="multipart/form-data" <?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['ajax']->value) {?>
            <input type="hidden" name="usingajax" value="1" />
        <?php } else { ?>
            <input type="hidden" name="usingajax" value="0" />
        <?php }?>
        <input type="hidden" name="idform" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['idform']->value )), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="id_lang" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_lang']->value )), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="id_shop" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_shop']->value )), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="Conditions" value="{$Conditions|escape:'html':'UTF-8'}" />
        <input type="hidden" name="ConditionsHide" value="" />
        <input type="hidden" name="gSubmitForm" value="1" />
        <div class="gformbuilderpro_content">
            <?php echo $_smarty_tpl->tpl_vars['htmlcontent']->value;?>
            
            {if isset($id_module_gformbuilderpro) && $id_module_gformbuilderpro > 0}
                {hook h='displayGDPRConsent' id_module=$id_module_gformbuilderpro}
            {/if}
            
        </div>
        <div style="clear:both;"></div>
    </form>
    <div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>

{/block}

<?php } else { ?>

{if isset($ispopup) && $ispopup}
    <a href="#gformbuilderpro_form_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['idform']->value )), ENT_QUOTES, 'UTF-8');?>
" rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['idform']->value )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary gformbuilderpro_openform">{$popup_label|escape:'html':'UTF-8'}</a>
{/if}

<input type="hidden" id="gformbuilderpro_formValidity" value="{$required_warrning}" />
<div id="gformbuilderpro_form_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['idform']->value )), ENT_QUOTES, 'UTF-8');?>
" class="gformbuilderpro_form gformbuilderpro_form_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['idform']->value )), ENT_QUOTES, 'UTF-8');?>
 {if isset($ispopup) && $ispopup} ispopup_form ghidden_form {/if}" >
    
    {if isset($_errors)}
    <div class="alert alert-danger" id="create_account_error">
        <ol>
        {foreach $_errors as $_error}
            <li>{$_error|escape:'html':'UTF-8'}</li>
        {/foreach}
        </ol>
    </div>
    {/if}
    
    <form action="{$actionUrl|escape:'html':'UTF-8'}" method="POST" class="<?php if ($_smarty_tpl->tpl_vars['ajax']->value) {?>form_using_ajax<?php }?> row" <?php if ($_smarty_tpl->tpl_vars['hasupload']->value) {?> enctype="multipart/form-data" <?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['ajax']->value) {?>
            <input type="hidden" name="usingajax" value="1" />
        <?php } else { ?>
            <input type="hidden" name="usingajax" value="0" />
        <?php }?>
        <input type="hidden" name="idform" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['idform']->value )), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="id_lang" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_lang']->value )), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="id_shop" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_shop']->value )), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="Conditions" value="{$Conditions|escape:'html':'UTF-8'}" />
        <input type="hidden" name="ConditionsHide" value="" />
        <input type="hidden" name="gSubmitForm" value="1" />
        <div class="gformbuilderpro_content">
            <?php echo $_smarty_tpl->tpl_vars['htmlcontent']->value;?>
            
            {if isset($id_module_gformbuilderpro) && $id_module_gformbuilderpro > 0}
                {hook h='displayGDPRConsent' id_module=$id_module_gformbuilderpro}
            {/if}
            
        </div>
        <div style="clear:both;"></div>
    </form>
    <div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>
<?php }
}
}
