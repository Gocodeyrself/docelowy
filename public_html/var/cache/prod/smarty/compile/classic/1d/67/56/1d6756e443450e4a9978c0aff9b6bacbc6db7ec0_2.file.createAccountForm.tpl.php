<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:25
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/glogin/views/templates/createAccountForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740334d488092_68761305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d6756e443450e4a9978c0aff9b6bacbc6db7ec0' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/glogin/views/templates/createAccountForm.tpl',
      1 => 1721121623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740334d488092_68761305 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
    
    <div class="new-custom-class">
        <footer class="form-footer clearfix">
            <input type="hidden" name="submitCreate" value="1">
            <div class="custom-save-button-wrapper">
                <button class="btn btn-primary form-control-submit custom-save-button" data-link-action="save-customer" type="submit">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                </button>
            </div>
        </footer>
    </div>

    <div class="glogin customBtnCreateAccountForm">
        <div id="customBtnCreateAccountForm" class="customGPlusSignIn" onclick="glogin_mypresta();">
            <span class="buttonText"><?php if (Configuration::get('glogin_button_style') == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in with Google','mod'=>'glogin'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in','mod'=>'glogin'),$_smarty_tpl ) );
}?></span>
        </div>
    </div>
    <div class="fblcreateaccountform">
        <div class="fbloginbox">
            <p onclick="fblogin_mypresta();">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="33" height="33" viewBox="0 0 48 48"> 
                    <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#2aa4f4"></stop>
                        <stop offset="1" stop-color="#007ad9"></stop>
                    </linearGradient>
                    <path fill="#4267b2" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                    <path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 
                    c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 
                    C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path>
                </svg>
                <span class="fblogintext"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in with Facebook','mod'=>'glogin'),$_smarty_tpl ) );?>
</span>
            </p>
        </div>
    </div>
<?php }?>


<?php }
}
