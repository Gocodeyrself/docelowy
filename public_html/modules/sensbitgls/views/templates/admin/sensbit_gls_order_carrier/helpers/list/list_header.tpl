
{extends file="helpers/list/list_header.tpl"}
{block name=preTable}
	{if isset($order_completed) && $order_completed}
		<style>
			.table.sensbitgls_shipment, .bulk-actions {
				display:none !important;
			}
		</style>
		<div class='alert alert-success'>
			Potwierdzenie nadania zostało utworzone. Jego numer to <strong>{if isset($dispatch_order)}{$dispatch_order}{/if}</strong> 
		</div>
		<div class='row'>

			<div class='col-sm-12'>
				<ul class='list-group'>
					<li class='list-group-item'>
						<a href="#" class="btn btn-primary btn-block btn-xs" onclick='sensbitgls.printLabelsByDispatchId({$id_dispatch_order});
								return false;'>Pobierz etykiety</a>
						<a href="#" class="btn btn-success btn-block" style='text-transform: uppercase' onclick='sensbitgls.printProtocolByDispatchId({$id_dispatch_order});
								return false;'>Pobierz protokół nadania</a>
					</li>
				</ul>
			</div>

		</div>
	{else}
		{if $packages}
			<div class='sensbitgls-orders-filters' style='margin-bottom:20px;'>
				<div class="row">
					<div class="col-sm-12">
						<div class="filter-group">
							<div class="alert alert-warning">
								Przesyłek z utworzonym potwierdzeniem nadania nie można anulować!
							</div>
						</div>
						{*	<h4>Parametry potwierdzenia nadania</h4>*}
						<div class="filter-group">
							<div class="btn-group">
								<div class="btn btn-primary">
									Opis potwierdzenia (max 40 znaków)
								</div>
								<div style='width:170px;display:inline-block'>
									<input type='text' class='sensbitgls-tip' value="{if isset($order_carrier.description)}{$order_carrier.description}{/if}"  name='description' placeholder='Opis'/>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="filter-group">
					<input class="btn btn-success" type="submit" name="order_carrier" value="Stwórz potwierdzenie nadania"/>
				</div>
			</div>
			{literal}
				<script>
					$(document).ready(function () {
						$(".sensbitgls_shipment input[type=checkbox]").prop('checked', true);
					});
				</script>
			{/literal}
		{else}
			<style>
				.table.sensbitgls_shipment, .bulk-actions {
					display:none !important;
				}
			</style>
			<div class="alert alert-danger">
				Nie ma przesyłek dla których można by utworzyć potwierdzenie nadania. Dodaj nową przesyłkę i sprawdź ponownie.
			</div>
		{/if}
	{/if}
{/block}
