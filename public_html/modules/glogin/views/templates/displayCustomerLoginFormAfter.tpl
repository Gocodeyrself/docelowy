{*
* PrestaShop module created by VEKIA, a guy from official PrestaShop community ;-)
*
* @author    VEKIA PL MILOSZ MYSZCZUK VATEU: PL9730945634
* @copyright 2010-2025
* @license   This program is not free software and you can't resell and redistribute it
*
* CONTACT WITH DEVELOPER http://mypresta.eu
* support@mypresta.eu
*}

{if !$logged}
    <div class="text-xs-center clearfix">
        <div class="glogin customBtndisplayCustomerLoginFormAfter">
            <div id="customBtndisplayCustomerLoginFormAfter" class="customGPlusSignIn" onclick="glogin_mypresta();">
                <span class="buttonText">{if Configuration::get('glogin_button_style') == 1}{l s='Sign in with Google' mod='glogin'}{else}{l s='Log in' mod='glogin'}{/if}</span>
            </div>
        </div>
		<div class="fblcreateaccountform">
	<div class="fbloginbox">
	<p onclick="fblogin_mypresta();">
	<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="33" height="33" viewBox="0 0 48 48"> <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient><path fill="#4267b2" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
<path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"></path> </svg>
	<span class="fblogintext">{l s='Sign in with Facebook' mod='glogin'}</span></p>
    </div>
	</div>
    </div>
{/if}