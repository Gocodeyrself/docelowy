<?php
/* Smarty version 4.3.1, created on 2024-10-16 11:16:13
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/smartargetsocialfollowbar/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670f845d86cb98_54374575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1650e0ad97a11c2cc686d47f581e68777be4a424' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/smartargetsocialfollowbar/views/templates/admin/configure.tpl',
      1 => 1721991541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670f845d86cb98_54374575 (Smarty_Internal_Template $_smarty_tpl) {
?><prestashop-accounts></prestashop-accounts>

<div id="ps-billing"></div>
<div id="ps-modal"></div>

<iframe id="frame" frameborder="0" style="width: 100%;"
		src="https://integration-v2.smartarget.online/api/prestashop/social_follow_bar/<?php echo $_smarty_tpl->tpl_vars['adminHash']->value;?>
/iframe?url=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['storefrontDomain']->value,'htmlall','UTF-8' ));?>
&platformData=<?php echo $_smarty_tpl->tpl_vars['prestashopAccount']->value;?>
"></iframe>

<style>
	#main
	{
		padding-bottom: 0 !important;
    }

</style>
<?php echo '<script'; ?>
>
	const url = "https://integration-v2.smartarget.online/api/prestashop/social_follow_bar/<?php echo $_smarty_tpl->tpl_vars['adminHash']->value;?>
/iframe?url=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['storefrontDomain']->value,'htmlall','UTF-8' ));?>
&platformData=";
	let accountData = [];
	try
	{
		accountData = window?.contextPsAccounts;
	}
	catch (e)
	{
	}

	document.getElementById('frame').setAttribute('src', url + encodeURIComponent(JSON.stringify(accountData)));
	document.getElementById('frame').style.height = (document.documentElement.clientHeight - 145) + 'px';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urlAccountsCdn']->value,'htmlall','UTF-8' ));?>
" rel=preload><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urlBilling']->value,'htmlall','UTF-8' ));?>
" rel=preload><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	/*********************
	 * PrestaShop Account *
	 * *******************/
	window?.psaccountsVue?.init();

	if(window.psaccountsVue.isOnboardingCompleted() == true)
	{
		/*********************
		 * PrestaShop Billing *
		 * *******************/
		window.psBilling.initialize(window.psBillingContext.context, '#ps-billing', '#ps-modal', (type, data) => {
			// Event hook listener
			switch (type) {
				// Hook triggered when PrestaShop Billing is initialized
				case window.psBilling.EVENT_HOOK_TYPE.BILLING_INITIALIZED:
					console.log('Billing initialized', data);
					break;
				// Hook triggered when the subscription is created or updated
				case window.psBilling.EVENT_HOOK_TYPE.SUBSCRIPTION_UPDATED:
					console.log('Sub updated', data);
					break;
				// Hook triggered when the subscription is cancelled
				case window.psBilling.EVENT_HOOK_TYPE.SUBSCRIPTION_CANCELLED:
					console.log('Sub cancelled', data);
					break;
			}
		});
	}

<?php echo '</script'; ?>
>
<?php }
}
