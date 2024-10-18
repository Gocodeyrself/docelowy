<div class="row">
	<a name="anchorratetable" id="anchorratetable"></a>
	<div class="col-md-12" id="block-ratetable">
		<form action="index.php?controller=AdminModules&token={$token|escape:'htmlall':'UTF-8'}
			&configure={$module_name|escape:'htmlall':'UTF-8'}&tab_module=shipping_logistics&module_name={$module_name|escape:'htmlall':'UTF-8'}" method="post" class="form-horizontal">
			<div class="panel panel-default">
				<div class="panel-heading"> <span>{l s='Category banners management' mod='categoriesbanners'}
				</span></div>
				<div class="panel-body">
					<div class="action_buttons">
						

						<div class="btn-group" style='float:right'>
						<a id="configuration" class="btn btn-default" href="javascript:void(0);">{l s='Configuration' mod='categoriesbanners'}</a>			
						</div>
						
						<div class="btn-group" style='float:right'>
<a id="actionaddnew" class="btn btn-default" href="javascript:void(0);">{l s='Add new' mod='categoriesbanners'}</a>	&nbsp;					
						</div>
						
					</div>
					<div class="table-responsive">
						<table id="tabletablerate" class="table table-hover">
							<colgroup>
								<col width="3%">
								
								<col width="10%">
								<col width="10%">
								<col width="10%">
								<col width="10%">
								
								<col width="13%">
								<col width="13%">
								
								<col width="8%">
								<col width="8%">
								<col width="8%">
								
								<col width="7%">
							</colgroup>
							<thead>
								<tr class="nodrag nodrop" style="height:40px">									
									<th><span class="title_box">{l s='Banner' mod='categoriesbanners'}</th>
									<th><span class="title_box">{l s='Language - (id)' mod='categoriesbanners'}</th>
									<th><span class="title_box">{l s='Category - (id) ' mod='categoriesbanners'}</th>									
									<th><span class="title_box">{l s='After number of products' mod='categoriesbanners'}</span></th>									
									<th><span class="title_box">{l s='Image text' mod='categoriesbanners'}</span></th>
									<th><span class="title_box">{l s='Class' mod='categoriesbanners'}</span></th>
									<th><span class="title_box">{l s='Active' mod='categoriesbanners'}</span></th>
									<th class="center">{l s='Actions' mod='categoriesbanners'}</th>
								</tr>
							</thead>
							<tbody>
							
								{foreach from=$data item=banner}
								<tr id="tr-">
									<td><img src='../modules/categoriesbanners/views/img/{$banner.image}' height='20px' width='20px'></td>
									<td>{$banner.lang}</td>		
									<td>{$banner.category}</td>		
									<td>{$banner.after_nu_product}</td>		
									<td>{$banner.comment}</td>		
									<td>{$banner.class}</td>
                                                                        <td>{if $banner.active=='1'} Yes {else}No{/if}</td>	
									<td>
									<a href='index.php?controller=AdminModules&token={$token|escape:'htmlall':'UTF-8'}
			&configure={$module_name|escape:'htmlall':'UTF-8'}&tab_module=front_office_features&module_name={$module_name|escape:'htmlall':'UTF-8'}
			&action={$action|escape:'htmlall':'UTF-8'}&del_id={$banner.id|escape:'htmlall':'UTF-8'}'>{l s='Delete' mod='categoriesbanners'}</a>
			
			| <a href='index.php?controller=AdminModules&token={$token|escape:'htmlall':'UTF-8'}
			&configure={$module_name|escape:'htmlall':'UTF-8'}&tab_module=front_office_features&module_name={$module_name|escape:'htmlall':'UTF-8'}
			&action={$action|escape:'htmlall':'UTF-8'}&edit_id={$banner.id|escape:'htmlall':'UTF-8'}&edit=2'>{l s='Edit' mod='categoriesbanners'}</a>
			</td>		
										
									
								</tr>
								{/foreach}
						
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel-footer">
					
				</div>
			</div>
		</form>
	</div>
</div>





