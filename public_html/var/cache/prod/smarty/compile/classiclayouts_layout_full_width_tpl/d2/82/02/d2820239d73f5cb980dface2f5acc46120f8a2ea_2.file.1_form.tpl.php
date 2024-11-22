<?php
/* Smarty version 4.3.1, created on 2024-11-22 09:03:15
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/gformbuilderpro/views/templates/front/formtemplates/13/1/1_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67403ac3beeca5_11863762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2820239d73f5cb980dface2f5acc46120f8a2ea' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/gformbuilderpro/views/templates/front/formtemplates/13/1/1_form.tpl',
      1 => 1732181858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67403ac3beeca5_11863762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30998335667403ac3be7cc9_79082310', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_30998335667403ac3be7cc9_79082310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_30998335667403ac3be7cc9_79082310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var baseUri = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseUri']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';<?php echo '</script'; ?>
>
<?php if ((isset($_smarty_tpl->tpl_vars['ispopup']->value)) && $_smarty_tpl->tpl_vars['ispopup']->value) {?> <a href="#gformbuilderpro_form_13" rel="13" class="btn btn-primary gformbuilderpro_openform"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['popup_label']->value, ENT_QUOTES, 'UTF-8');?>
</a>
<?php }?><input type="hidden" id="gformbuilderpro_formValidity" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['required_warrning']->value, ENT_QUOTES, 'UTF-8');?>
"/><div id="gformbuilderpro_form_13" class="gformbuilderpro_form gformbuilderpro_form_13 <?php if ((isset($_smarty_tpl->tpl_vars['ispopup']->value)) && $_smarty_tpl->tpl_vars['ispopup']->value) {?> ispopup_form ghidden_form <?php }?>"> <?php if ((isset($_smarty_tpl->tpl_vars['_errors']->value))) {?> <div class="alert alert-danger" id="create_account_error"><ol><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_errors']->value, '_error');
$_smarty_tpl->tpl_vars['_error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_error']->value) {
$_smarty_tpl->tpl_vars['_error']->do_else = false;
?> <li><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['_error']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ol></div> <?php }?> <form action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionUrl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="POST" class="form_using_ajax row"><input type="hidden" name="usingajax" value="1"/><input type="hidden" name="idform" value="13"/><input type="hidden" name="id_lang" value="1"/><input type="hidden" name="id_shop" value="1"/><input type="hidden" name="Conditions" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Conditions']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/><input type="hidden" name="ConditionsHide" value=""/><input type="hidden" name="gSubmitForm" value="1"/><div class="gformbuilderpro_content"><div class="formbuilder_group"><div class="formbuilder_column col-md-6 col-sm-12 col-xs-12"><div class="itemfield_wp"><div id="gformbuilderpro_498" class="itemfield"><div class="form-group input_box"><label for="input_93172_1730317259" class="required_label">Imię i Nazwisko</label><input type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customername']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-control input_52965 " id="input_93172_1730317259" placeholder="Imię i Nazwisko" name="input_93172_1730317259" required="required"/></div></div><div id="gformbuilderpro_499" class="itemfield"><div class="form-group input_box"><label for="input_381746_1730317259" class="required_label">Adres e-mail</label><input type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customeremail']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-control input_52965 " id="input_381746_1730317259" placeholder="Adres e-mail" name="input_381746_1730317259" required="required"/></div></div><div id="gformbuilderpro_500" class="itemfield"><div class="form-group input_box"><label for="input_486438_1730317259">Telefon</label><input type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer_phone']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-control input_52965 " id="input_486438_1730317259" placeholder="Numer telefonu" name="input_486438_1730317259"/></div></div><div id="gformbuilderpro_501" class="itemfield"><div class="form-group input_box"><label for="input_217150_1730317259">Nazwa Firmy</label><input type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customercompany']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-control input_52965 " id="input_217150_1730317259" placeholder="Nazwa Firmy" name="input_217150_1730317259"/></div></div><div id="gformbuilderpro_502" class="itemfield"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayGorderreference",'id'=>"502"),$_smarty_tpl ) );?>
</div><div id="gformbuilderpro_503" class="itemfield"><div class="form-group checkbox_box"><label for="checkbox_519317_1730317259" class=" required_label">Niewidoczny label 1</label><div class="checkbox_item_wp"><div class="row"><p class="col-xs-12 col-md-12"><input id="checkbox_checkbox_519317_1730317259_0" type="checkbox" name="checkbox_519317_1730317259[]" class="checkbox_82631" value="Oświadczam, że zapoznałem się z powyższą Klauzulą Informacyjną i akceptuję treść Regulaminu oraz Polityki Prywatności Cezos.*"/><label for="checkbox_checkbox_519317_1730317259_0">Oświadczam, że zapoznałem się z powyższą Klauzulą Informacyjną i akceptuję treść Regulaminu oraz Polityki Prywatności Cezos.*</label></p></div></div></div></div><div id="gformbuilderpro_504" class="itemfield"><div class="form-group checkbox_box"><label for="checkbox_429353_1730317259" class=" required_label">Niewidoczny label 2</label><div class="checkbox_item_wp"><div class="row"><p class="col-xs-12 col-md-12"><input id="checkbox_checkbox_429353_1730317259_0" type="checkbox" name="checkbox_429353_1730317259[]" class="checkbox_82631" value="Po zapoznaniu się z powyższą klauzulą informacyjną oświadczam, że wyrażam zgodę na przetwarzanie podanych w formularzu danych osobowych w tym adresu e-mail w celu przesyłania ofert handlowych drogą elektroniczną.*"/><label for="checkbox_checkbox_429353_1730317259_0">Po zapoznaniu się z powyższą klauzulą informacyjną oświadczam, że wyrażam zgodę na przetwarzanie podanych w formularzu danych osobowych w tym adresu e-mail w celu przesyłania ofert handlowych drogą elektroniczną.*</label></p></div></div></div></div></div></div><div class="formbuilder_column col-md-6 col-sm-12 col-xs-12"><div class="itemfield_wp"><div id="gformbuilderpro_505" class="itemfield"><div class="form-group input_box"><label for="textarea_product_text" class="required_label">Wiadomość</label><textarea class="form-control textarea_84599 " name="textarea_35564_1730317259" id="textarea_product_text" placeholder="Wprowadź swoją wiadomość" required="required" rows="7"></textarea></div></div></div></div></div><div class="formbuilder_group"><div class="formbuilder_column col-md-12 col-sm-12 col-xs-12"><div class="itemfield_wp"><div id="gformbuilderpro_514" class="itemfield"><?php if ((isset($_smarty_tpl->tpl_vars['using_v3']->value)) && $_smarty_tpl->tpl_vars['using_v3']->value) {?>
    <input type="hidden" name="recaptcha_response" id="recaptchaResponse" data-sitekey="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sitekey']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
<?php } else { ?>

            <div class="form-group capcha_box"><label for="captcha_48619">reCAPTCHA</label><div id="captcha_48619" class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sitekey']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0;-webkit-transform-origin:0;"></div></div>
<?php }?></div><div id="gformbuilderpro_506" class="itemfield"><div class="submit_btn_left"><button type="button" name="submitForm" id="submitForm" class="button btn btn-default button-medium btn-primary"><span>Wyślij formularz</span></button></div></div><div id="gformbuilderpro_507" class="itemfield"><div class="hidden_box"><input type="hidden" value="Hidden Field" name="hidden_448756_1730317259" id="hidden_448756_1730317259" class=" hidden_17795"/></div></div></div></div></div> <?php if ((isset($_smarty_tpl->tpl_vars['id_module_gformbuilderpro']->value)) && $_smarty_tpl->tpl_vars['id_module_gformbuilderpro']->value > 0) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module_gformbuilderpro']->value),$_smarty_tpl ) );?>

            <?php }?></div><div style="clear:both;"></div></form><div style="clear:both;"></div></div><div style="clear:both;"></div>
<?php
}
}
/* {/block 'page_content'} */
}
