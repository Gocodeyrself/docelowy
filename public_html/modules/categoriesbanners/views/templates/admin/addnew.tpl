
<div class="modal fade bs-example-modal-lg" id="modaladdnewrate" tabindex="-1" role="dialog" aria-labelledby="modaladdnewratelabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">{l s='Close' mod='categoriesbanners'}</span>
				</button>
				<h4 class="modal-title" id="modaladdnewratelabel"></h4>
			</div>
			<form action="index.php?controller=AdminModules&token={$token|escape:'htmlall':'UTF-8'}
			&configure={$module_name|escape:'htmlall':'UTF-8'}&tab_module=front_office_features&module_name={$module_name|escape:'htmlall':'UTF-8'}
			&action={$action|escape:'htmlall':'UTF-8'}&selected_carrrier_id={$selected_carrrier_id|escape:'htmlall':'UTF-8'}" method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="panel">
					<div class="panel-body">
						
							<div class="form-group">
							<label for="img" class="col-lg-3 Before-label">{l s='Upload image' mod='categoriesbanners'}</label>
							<div class="col-lg-9"><input type="file" id="img" name="img" class="form-Before"/></div>
						</div>
						
						<div class="form-group">
							<label for="languages" class="col-lg-3 Before-label">{l s='Select Language' mod='categoriesbanners'}</label>
							<div class="col-lg-9"><select id="lang" name="lang" class="form-Before">							
							{foreach from=$languages item=lang}
							<option value="{$lang.id_lang|escape:'htmlall':'UTF-8'}">{$lang.name|escape:'htmlall':'UTF-8'}</option>
							{/foreach}
							</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="cateory" class="col-lg-3 Before-label">{l s='Select Category' mod='categoriesbanners'}</label>
							<div class="col-lg-9"><select id="zone_id" name="cateory" class="form-Before">							
							{foreach from=$cat item=ca}
							<option value="{$ca.id_category|escape:'htmlall':'UTF-8'}">{$ca.name|escape:'htmlall':'UTF-8'} - ( {$ca.id_category|escape:'htmlall':'UTF-8'} )</option>
							{/foreach}
							</select></div>							
						</div>
						
						
						<div class="form-group">
							<label for="afterproduct" class="col-lg-3 Before-label"><span class="label-tooltip" data-toggle="tooltip" data-html="true" title="{l s='Set image show  after number of products).' mod='categoriesbanners'}">{l s='After number of products' mod='categoriesbanners'}</span></label>
							<div class="col-lg-9"><input type="number" id="afterproduct" name="afterproduct" class="form-Before" value="" value='2'/></div>
						</div>
						
						
						<div class="form-group">
							<label for="other" class="col-lg-3 Before-label">{l s='Banner link' mod='categoriesbanners'}</label>
							<div class="col-lg-9"><input type="text" id="other" name="other" class="form-Before" rows="5" cols="50"></div>
						</div>
						<div class="form-group">
							<label for="comment" class="col-lg-3 Before-label">{l s='Image text' mod='categoriesbanners'}</label>
							<div class="col-lg-9"><textarea id="comment" name="comment" class="form-Before" rows="5" cols="50"></textarea></div>
						</div>
						
						<div class="form-group">
							<label for="class" class="col-lg-3 Before-label">{l s='Class' mod='categoriesbanners'}</label>
							<div class="col-lg-9"><input type="text" id="class" name="class" class="form-Before" value="" size="30" />
							<p class="help">if no class added default layout show , 
							if you add col-md-8 class 1 product with image banner one row show,<br>
							Class expample : col-md-6 col-md-12  <br>
							Screen expample : .col-xs-	.col-sm-	.col-md-	.col-lg-  <br>
							</p>
							</div>
							
						</div>
						
						<div class="form-group">
							<label for="comment" class="col-lg-3 Before-label">{l s='Style Css' mod='categoriesbanners'}</label>
							<div class="col-lg-9"><textarea id="css" name="css" class="form-Before" rows="5" cols="50"></textarea></div>
						</div>
					</div>
					
					<div class="panel-footer">						
						<button type="submit" name="btnSubmitSave" value="1" class="btn btn-default pull-right">
							<i class="process-icon-save"></i>{l s='Save' mod='categoriesbanners'}
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>





<div class="modal fade bs-example-modal-lg" id="configurationmodal" tabindex="-1" role="dialog" aria-labelledby="modaladdnewratelabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">{l s='Close' mod='categoriesbanners'}</span>
				</button>
				<h4 class="modal-title" id="modaladdnewratelabel"></h4>
			</div>
			<form action="index.php?controller=AdminModules&token={$token|escape:'htmlall':'UTF-8'}
			&configure={$module_name|escape:'htmlall':'UTF-8'}&tab_module=front_office_features&module_name={$module_name|escape:'htmlall':'UTF-8'}
			&action={$action|escape:'htmlall':'UTF-8'}&selected_carrrier_id={$selected_carrrier_id|escape:'htmlall':'UTF-8'}" method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="panel">
					<div class="panel-body">
						
												
												
						<div class="form-group">
							<label for="category_banners_id" class="col-lg-3 Before-label"><span class="label-tooltip" data-toggle="tooltip" data-html="true" title="{l s='Products list div id/class' mod='categoriesbanners'}">{l s='Products list div id/class' mod='categoriesbanners'}</span></label>
							<div class="col-lg-9">
							<input type="text" id="category_banners_id" name="category_banners_id" class="form-Before" value="{$category_banners_id}" />
							<p class="help">
							if not see banner in category page first clear cache and check
							elese check product div id or class example ( products , products-list ) add 
							like here 
							<input type="text" disabled value=".products">
							<input type="text" disabled value=" #products">
							
							</p>
							</div>
						
						</div>
						
						
						<div class="form-group">
							<label for="category_banners_product_tag" class="col-lg-3 Before-label"><span class="label-tooltip" data-toggle="tooltip" data-html="true" title="{l s='Product div Class' mod='categoriesbanners'}">{l s='Product div class' mod='categoriesbanners'}</span></label>
							<div class="col-lg-9">
							<input type="text" id="category_banners_product_tag" name="category_banners_product_class" class="form-Before" value="{$category_banners_product_class}" />
							<p class="help"> Product div start tag add in like ( 
							<input type="text" disabled value=" .product-miniature">
							<input type="text" disabled value=" .ajax">							
						
							</p>
							</div>
						
						</div>
						
						
						<div class="form-group">
							<label for="category_banners_product_tag" class="col-lg-3 Before-label"><span class="label-tooltip" data-toggle="tooltip" data-html="true" title="{l s='Product div start tag' mod='categoriesbanners'}">{l s='Product div start tag' mod='categoriesbanners'}</span></label>
							<div class="col-lg-9">
							<input type="text" id="category_banners_product_tag" name="category_banners_product_tag" class="form-Before" value="{$category_banners_product_tag}" />
							<p class="help"> Product div start tag add in like ( 
							<input type="text" disabled value=" article">
							<input type="text" disabled value=" li">
							<input type="text" disabled value=" div">
						
							</p>
							</div>
						
						</div>
						
						
						
						
						
						{*<div class="form-group">
							<label for="category_banners_id" class="col-lg-3 Before-label"><span class="label-tooltip" data-toggle="tooltip" data-html="true" title="{l s='Products list div id/class' mod='categoriesbanners'}">{l s='After number of products' mod='categoriesbanners'}</span></label>
							<div class="col-lg-9">
							<input type="text" id="category_banners_id" name="category_banners_id" class="form-Before" value="{$category_banners_id}" value='2'/>
							<p class="help">
							if not see banner in category page first clear cache and check
							elese check product div id or class example ( .products , #products ) add like ( .products > article , .products > li , .products article ) 
							</p>
							</div>
						
						</div>*}
						
						
					</div>
					
					<div class="panel-footer">						
						<button type="submit" name="submitcategoriesbanners" value="1" class="btn btn-default pull-right">
							<i class="process-icon-save"></i>{l s='Save' mod='categoriesbanners'}
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>











