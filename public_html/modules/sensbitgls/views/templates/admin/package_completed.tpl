<tr id='shipment_{$shipment->id}'>
	<td>
		<div class="message"></div>
		<input type="checkbox" value="{$shipment->id}" checked="checked" class="completed-packs"/>
	</td>
	<td>
		<div class='sensbitgls-tip' title='{$service->getName()}'>{$service->getLogo()}</div>
	</td>
	<td>
		{$shipment->tracking_number}
	</td>
	<td>
		{$status = $shipment->getStatus()}
		<a href='#' onclick="sensbitgls.getPackStatus({$shipment->id});return false" class='sensbitgls-tip sensbitgls-pack-status' data-id-shipment='{$shipment->id}' data-autocheck="{$status.autocheck}" title='{l s='Kliknij aby sprawdzić aktualny status przesyłki' mod='sensbitgls'}'>{$status.title}</a>
	</td>
	<td>
		<div style="text-align:center">
			{if isset($shipment->options_->cod) && $shipment->options_->cod}
				<img src="../img/admin/enabled.gif" alt="Tak" title="Tak"/> {displayPrice price=$shipment->options_->cod_value}
			{else}
				<img src="../img/admin/disabled.gif" alt="Nie" title="Nie"/>
			{/if}
		</div>
	</td>
	<td>
		{$shipment->date_add}
	</td>
	<td>
		{$shipment->getEmployeeName()}
	</td>
	<td>
		<button onclick="sensbitgls.printLabels({$shipment->id});return false" class="btn btn-xs btn-success sensbitgls-tip" title="{l s='Print label' mod='sensbitgls'}"><i class="icon-print"></i></button>
			{if Configuration::get(SensbitGls::CFG_SIMPLE_PRINTNODE_ENABLED)}
			<button onclick="sensbitgls.printNode({$shipment->id});return false" class="btn btn-xs btn-warning sensbitgls-tip" title="{l s='Print label on PrintNode' mod='sensbitgls'}"><i class="icon-print"></i> <i class="icon-cloud"></i></button>
			{/if}
		<button onclick="sensbitgls.deleteShipments({$shipment->id});return false" class="btn btn-xs btn-danger sensbitgls-tip" title="{l s='Delete shipment' mod='sensbitgls'}"><i class="icon-remove"></i></button>
	</td>
</tr>