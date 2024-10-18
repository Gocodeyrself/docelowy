<div class="module-text">{$display_name|escape:'htmlall':'UTF-8'} (v{$version|escape:'htmlall':'UTF-8'})</div>
<script type="text/javascript">
$(function()
{
	
	$("#actionaddnew").click(function()
	{
		$("#modaladdnewrate").find(".modal-title").html(
			"<img src=\"../img/admin/add.gif\" /> <span>{l s='Add New ' mod='categoriesbanners'}</span>"
		);
		$("#modaladdnewrate").modal("show");
		
	});
	
	$("#configuration").click(function()
	{
		$("#configurationmodal").find(".modal-title").html(
			"<span>{l s='Configuration' mod='categoriesbanners'}</span>"
		);
		$("#configurationmodal").modal("show");
		
	});
	

	
});


</script>

</div>