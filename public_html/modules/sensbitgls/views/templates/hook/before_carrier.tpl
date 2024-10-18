{**
* 2016-2017 Sensbit
*
* MODUŁ ZOSTAŁ UDOSTĘPNIONY NA PODSTAWIE LICENCJI NA JEDNO STANOWISKO/DOMENĘ
* NIE MASZ PRAWA DO JEGO KOPIOWANIA, EDYTOWANIA I SPRZEDAWANIA
* W PRZYPADKU PYTAŃ LUB BŁĘDÓW SKONTAKTUJ SIĘ Z AUTOREM
*
* ENGLISH:
* MODULE IS LICENCED FOR ONE-SITE / DOMAIM
* YOU ARE NOT ALLOWED TO COPY, EDIT OR SALE
* IN CASE OF ANY QUESTIONS CONTACT AUTHOR
*
* ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** *
*
* PL: ODWIEDŹ NASZ SKLEP PO WIĘCEJ PROFESJONALNYCH MODUŁÓW PRESTASHOP
* EN: VISIT OUR ONLINE SHOP FOR MORE PROFESSIONAL PRESTASHOP MODULES
* HTTPS://sensbit.pl
*
* ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** *
*
* @author    Tomasz Dacka (kontakt@sensbit.pl)
* @copyright 2016-2017 sensbit.pl
* @license   One-site license (jednostanowiskowa, bez możliwości kopiowania i udostępniania innym)
*}

<div id='szybkapaczka_group_column' style='display:none'><div></div><div></div></div>
<div id='sensbitgls-wrapper' class='row'>
	<div id='sensbitgls' class='sensbitgls'>
		<img style='height:auto;' class='sensbitgls-img' src="{$sensbitgls_options.module_dir}views/img/services/odbior-w-punkcie.png"/>
		{if $sensbitgls_options.countries_enabled}
			<div class="sensbitgls-country-form">
				<strong>{l s='Select your country' mod='sensbitgls'}:</strong>
				<select>
					{foreach $sensbitgls_options.countries_enabled as $country}
						<option value='{$country.iso_code}'{if $sensbitgls_options.countries_selected && $sensbitgls_options.countries_selected == $country.id_country} selected='selected'{/if}>{$country.name}</option>
					{/foreach}
				</select>
			</div>
		{/if}
		<div class="sensbitgls-search"{if $sensbitgls_options.hide_map} style="width:100%;padding:0;margin:0;"{/if}>
			<select class='sensbitgls-point-select'>
				<option>
					{if !empty($sensbitgls_options.point)}
						{$sensbitgls_options.point_label}
					{else}
						{l s='Choose your point' mod='sensbitgls'}
					{/if}
				</option>
			</select>
			{if !$sensbitgls_options.hide_map}
				<a class='sensbitgls-map-btn' onclick='sensbitgls.openMap(".sensbitgls-point-select", "{$sensbitgls_options.customer_place}");
						return false;' href='#'>{l s='Choose from map' mod='sensbitgls'}</a>
			{/if}
		</div>
	</div>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		if (typeof window.jQuery === 'undefined') {
			var sensbitglsjquery = document.createElement('script');
			sensbitglsjquery.type = 'text/javascript';
			sensbitglsjquery.src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js';
			document.documentElement.childNodes[0].appendChild(sensbitglsjquery);
		}
	}, false);
</script>

<script>
	{strip}
		{literal}
			var sensbitglsloader = setInterval(function () {
				if (typeof sensbitgls !== 'undefined' && typeof sensbitgls.init === 'function') {
					sensbitgls.init({/literal}{$sensbitgls_options|json_encode nofilter}{literal});
					clearInterval(sensbitglsloader);
				}
			}, 300);
		{/literal}
	{/strip}
</script>
