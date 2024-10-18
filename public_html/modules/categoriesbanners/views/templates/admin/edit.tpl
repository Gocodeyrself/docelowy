<form action="index.php?controller=AdminModules&token={$token|escape:'htmlall':'UTF-8'}
      &configure={$module_name|escape:'htmlall':'UTF-8'}&tab_module=front_office_features&module_name={$module_name|escape:'htmlall':'UTF-8'}
      &action={$action|escape:'htmlall':'UTF-8'}&selected_carrrier_id={$selected_carrrier_id|escape:'htmlall':'UTF-8'}" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="panel">
        <div class="panel-body">

            <input type="hidden" id="token" name="token" class="form-control" value="{$token|escape:'htmlall':'UTF-8'}"/>


            <div class="form-wrapper">
                <div class="form-group">
                    <label class="control-label col-lg-3">{l s='Active' mod='categoriesbanners'}</label>
                    <div class="col-lg-9 ">
                        <span class="switch prestashop-switch fixed-width-lg">
                            <input type="radio" name="active" id="ref_on" value="1" {if $cat_banner.active == '1'} checked="checked" {/if}>
                            <label for="ref_on">Yes</label>
                            <input type="radio" name="active" id="ref_off" value="0" {if $cat_banner.active == '0'} checked="checked" {/if}>
                            <label for="ref_off">No</label>
                            <a class="slide-button btn"></a>
                        </span>
                        <p class="help-block"></p>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for="img" class="col-lg-3 control-label">{l s='Change banner Image' mod='categoriesbanners'}</label>	
                <div class="col-lg-9"><input type="file" id="img" name="img" class="form-control"/>
                    <input type="hidden" id="img" name="oldimg" class="form-control" value="{$cat_banner.image}"/>
                    <img src='../modules/categoriesbanners/views/img/{$cat_banner.image}' height='50px' width='50px'></div>
            </div>

            <div class="form-group">
                <label for="languages" class="col-lg-3 control-label">{l s='Select Language' mod='categoriesbanners'}</label>
                <div class="col-lg-9"><select id="lang" name="lang" class="form-control">							
                        {foreach from=$languages item=lang}
                            <option {if $cat_banner.lang==$lang.id_lang} selected {/if} value="{$lang.id_lang|escape:'htmlall':'UTF-8'}">{$lang.name|escape:'htmlall':'UTF-8'}</option>
                        {/foreach}
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="cateory" class="col-lg-3 control-label">{l s='Select Category' mod='categoriesbanners'}</label>
                <div class="col-lg-9"><select id="zone_id" name="cateory" class="form-control">							
                        {foreach from=$cat item=ca}
                            <option   {if $cat_banner.category==$ca.id_category} selected {/if} value="{$ca.id_category|escape:'htmlall':'UTF-8'}">{$ca.name|escape:'htmlall':'UTF-8'} ( {$ca.id_category|escape:'htmlall':'UTF-8'} )</option>
                        {/foreach}
                    </select></div>							
            </div>


            <div class="form-group">
                <label for="afterproduct" class="col-lg-3 control-label"><span class="label-tooltip" data-toggle="tooltip" data-html="true" title="{l s='Set image show  Beforenumber of products).' mod='categoriesbanners'}">{l s='Beforenumber of products' mod='categoriesbanners'}</span></label>
                <div class="col-lg-9"><input type="number" id="afterproduct" name="afterproduct" class="form-control" value="{$cat_banner.after_nu_product}" /></div>
            </div>



            <div class="form-group">
                <label for="other" class="col-lg-3 control-label">{l s='Banner link' mod='categoriesbanners'}</label>
                <div class="col-lg-9"><input type="text" id="other" name="other" class="form-control" rows="5" cols="50" value="{$cat_banner.other}"></div>
            </div>
            <div class="form-group">
                <label for="comment" class="col-lg-3 control-label">{l s='Image text' mod='categoriesbanners'}</label>
                <div class="col-lg-9"><textarea id="comment" name="comment" class="form-control" rows="5" cols="50">{$cat_banner.comment}</textarea></div>
            </div>

            <div class="form-group">
                <label for="class" class="col-lg-3 control-label">{l s='Class' mod='categoriesbanners'}</label>
                <div class="col-lg-9"><input type="text" id="class" name="class" class="form-control" value="{$cat_banner.class}" size="30" />
                    <p class="help">if no class added default layout show , 
                        if you add col-md-8 doubleimg class 1 product with image banner one row show,<br>
                        Class expample : col-md-6 col-md-12  <br>
                        Screen expample : .col-xs-	.col-sm-	.col-md-	.col-lg-  <br>
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label for="comment" class="col-lg-3 control-label">{l s='Style Css' mod='categoriesbanners'}</label>
                <div class="col-lg-9"><textarea id="css" name="css" class="form-control" rows="5" cols="50">{$cat_banner.css}</textarea></div>
            </div>
        </div>

        <div class="panel-footer">				
            <input type="hidden" id="edit_id" name="edit_id" class="form-control" value="{$edit_id}" />
            <button type="submit" name="btnSubmitSave" value="1" class="btn btn-default pull-right">
                <i class="process-icon-save"></i>{l s='Save' mod='categoriesbanners'}
            </button>
        </div>
    </div>
</form>