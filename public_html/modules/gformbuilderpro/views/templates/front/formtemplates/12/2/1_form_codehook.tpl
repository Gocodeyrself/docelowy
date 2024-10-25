{if isset($ispopup) && $ispopup} <a href="#gformbuilderpro_form_12" rel="12"
        class="btn btn-primary gformbuilderpro_openform">{$popup_label|escape:'html':'UTF-8'}</a>
{/if}<input type="hidden" id="gformbuilderpro_formValidity" value="{$required_warrning}" />
<div id="gformbuilderpro_form_12"
    class="gformbuilderpro_form gformbuilderpro_form_12 {if isset($ispopup) && $ispopup} ispopup_form ghidden_form {/if}">
    {if isset($_errors)} <div class="alert alert-danger" id="create_account_error">
            <ol>{foreach $_errors as $_error} <li>{$_error|escape:'html':'UTF-8'}</li> {/foreach}</ol>
    </div> {/if} <form action="{$actionUrl|escape:'html':'UTF-8'}" method="POST" class="form_using_ajax row"><input
            type="hidden" name="usingajax" value="1" /><input type="hidden" name="idform" value="12" /><input
            type="hidden" name="id_lang" value="2" /><input type="hidden" name="id_shop" value="1" /><input
            type="hidden" name="Conditions" value="{$Conditions|escape:'html':'UTF-8'}" /><input type="hidden"
            name="ConditionsHide" value="" /><input type="hidden" name="gSubmitForm" value="1" />
        <div class="gformbuilderpro_content">
            <div class="formbuilder_group">
                <div class="formbuilder_column col-md-6 col-sm-12 col-xs-12">
                    <div class="itemfield_wp">
                        <div id="gformbuilderpro_486" class="itemfield">
                            <div class="form-group input_box"><label for="input_52965" class="required_label">Full
                                    Name</label><input type="text" value="{$customername}"
                                    class="form-control input_52965 " id="input_52965" placeholder="Name and Surname"
                                    name="input_52965" required="required" /></div>
                        </div>
                        <div id="gformbuilderpro_487" class="itemfield">
                            <div class="form-group input_box"><label for="input_77575"
                                    class="required_label">E-mail</label><input type="text" value="{$customeremail}"
                                    class="form-control input_52965 " id="input_77575" placeholder="E-mail"
                                    name="input_77575" required="required" /></div>
                        </div>
                        <div id="gformbuilderpro_488" class="itemfield">
                            <div class="form-group input_box"><label for="input_8883">Phone number</label><input
                                    type="text" value="{$customer_phone}" class="form-control input_52965 "
                                    id="input_8883" placeholder="Phone number" name="input_8883" /></div>
                        </div>
                        <div id="gformbuilderpro_489" class="itemfield">
                            <div class="form-group input_box"><label for="input_32954">Company name</label><input
                                    type="text" value="{$customercompany}" class="form-control input_52965 "
                                    id="input_32954" placeholder="Company name" name="input_32954" /></div>
                        </div>
                        <div id="gformbuilderpro_490" class="itemfield">{hook h="displayGorderreference" id="490"}</div>
                        <div id="gformbuilderpro_491" class="itemfield">
                            <div class="form-group checkbox_box"><label for="checkbox_checkbox_82631" class="" style="display: none;">Checkbox
                                    Input</label>
                                <div class="checkbox_item_wp">
                                    <div class="row">
                                        <p class="col-xs-12 col-md-12"><input id="checkbox_checkbox_82631_0"
                                                type="checkbox" name="checkbox_82631[]" class="checkbox_82631"
                                                value="I declare that I have read the above Information Clause and accept the content of the Regulations and Privacy Policy of Cezos.*." /><label
                                                for="checkbox_checkbox_82631_0">I declare that I have read the above
                                                Information Clause and accept the content of the <a
                                                href="https://sklep.cezos.pl/en/content/1-terms-and-conditions-store">Regulations</a> and <a
                                                href="https://sklep.cezos.pl/en/content/2-legal-notice">Privacy Policy</a>
                                                 of Cezos.*.</label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="gformbuilderpro_492" class="itemfield">
                            <div class="form-group checkbox_box"><label for="checkbox_42880" class="" style="display: none;">Checkbox
                                    Input</label>
                                <div class="checkbox_item_wp">
                                    <div class="row">
                                        <p class="col-xs-12 col-md-12"><input id="checkbox_checkbox_42880_0"
                                                type="checkbox" name="checkbox_42880[]" class="checkbox_82631"
                                                value="Having read the above information clause, I declare that I agree to the processing of the personal data provided in the form, including my e-mail address, for the purpose of sending commercial offers electronically.*" /><label
                                                for="checkbox_checkbox_42880_0">Having read the above information
                                                clause, I declare that I agree to the processing of the personal data
                                                provided in the form, including my e-mail address, for the purpose of
                                                sending commercial offers electronically.*</label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formbuilder_column col-md-6 col-sm-12 col-xs-12">
                    <div class="itemfield_wp">
                        <div id="gformbuilderpro_493" class="itemfield">
                            <div class="form-group input_box"><label for="textarea_84599">Message</label><textarea class="form-control textarea_84599 "
                                    name="textarea_84599" id="textarea_84599" placeholder="Enter your message" rows="7"
                                    style="min-height: 350px;"></textarea></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="formbuilder_group">
                <div class="formbuilder_column col-md-12 col-sm-12 col-xs-12">
                    <div class="itemfield_wp">
                        <div id="gformbuilderpro_494" class="itemfield">
                            <div class="submit_btn_left"><button type="button" name="submitForm" id="submitForm"
                                    class="button btn btn-default button-medium btn-primary"><span>Send</span></button>
                            </div>
                        </div>
                        <div id="gformbuilderpro_495" class="itemfield">
                            <div class="hidden_box"><input type="hidden" value="Hidden Field" name="hidden_17795"
                                    id="hidden_17795" class=" hidden_17795" /></div>
                        </div>
                    </div>
                </div>
            </div> {if isset($id_module_gformbuilderpro) && $id_module_gformbuilderpro > 0}
                {hook h='displayGDPRConsent' id_module=$id_module_gformbuilderpro}
            {/if}
        </div>
        <div style="clear:both;"></div>
    </form>
    <div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>