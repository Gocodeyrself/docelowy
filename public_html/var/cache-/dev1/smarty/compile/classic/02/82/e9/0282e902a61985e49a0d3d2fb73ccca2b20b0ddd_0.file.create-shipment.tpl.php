<?php
/* Smarty version 4.3.1, created on 2024-08-08 13:32:32
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/modal/create-shipment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66b4acd0dbbf71_63493454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0282e902a61985e49a0d3d2fb73ccca2b20b0ddd' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/views/templates/hook/modal/create-shipment.tpl',
      1 => 1709029526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b4acd0dbbf71_63493454 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="inpost-shipment-form"
      class="defaultForm form-horizontal"
      enctype="multipart/form-data"
      action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shipmentAction']->value,'html','UTF-8' ));?>
"
      autocomplete="off"
>
  <div class="panel-body">
    <div id="inpost-shipment-form-errors"></div>

    <div class="form-wrapper">
      <input type="hidden" name="id_order" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_order']->value ));?>
">

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="customer_email" class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Receiver email','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <input
                    class="form-control" type="text" name="email" id="customer_email"
                    value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customerEmail']->value,'html','UTF-8' ));?>
"
            >
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="customer_phone" class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Receiver phone','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <input class="form-control" type="text" name="phone" id="customer_phone" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customerPhone']->value,'html','UTF-8' ));?>
">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="service" class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping service','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <select name="service" id="service" class="custom-select">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['serviceChoices']->value, 'choice');
$_smarty_tpl->tpl_vars['choice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['choice']->value) {
$_smarty_tpl->tpl_vars['choice']->do_else = false;
?>
                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['value'],'html','UTF-8' ));?>
"
                        <?php if ($_smarty_tpl->tpl_vars['choice']->value['disabled']) {?>disabled="disabled"<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['choice']->value['value'] == $_smarty_tpl->tpl_vars['selectedService']->value) {?>selected="selected"<?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['defaultTemplates']->value[$_smarty_tpl->tpl_vars['choice']->value['value']]))) {?>
                          data-default-template="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultTemplates']->value[$_smarty_tpl->tpl_vars['choice']->value['value']],'html','UTF-8' ));?>
"
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['choice']->value['availableTemplates']) {?>
                          data-templates='["<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( implode('","',$_smarty_tpl->tpl_vars['choice']->value['availableTemplates']),'html','UTF-8' ));?>
"]'
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['defaultSendingMethods']->value[$_smarty_tpl->tpl_vars['choice']->value['value']]))) {?>
                          data-default-sending-method="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultSendingMethods']->value[$_smarty_tpl->tpl_vars['choice']->value['value']],'html','UTF-8' ));?>
"
                        <?php }?>
                        data-sending-methods='["<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( implode('","',$_smarty_tpl->tpl_vars['choice']->value['availableSendingMethods']),'html','UTF-8' ));?>
"]'
                >
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['text'],'html','UTF-8' ));?>

                </option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>
      </div>

      <div id="js-inpost-commercial-product-identifier-wrapper">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="commercial_product_identifier" class="form-control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Variant code','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </label>
              <input type="text"
                     name="commercial_product_identifier"
                     id="commercial_product_identifier"
                     value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['commercialProductIdentifier']->value,'html','UTF-8' ));?>
"
                     class="form-control"
              >
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="sending_method" class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sending method','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <select name="sending_method" id="sending_method" class="custom-select">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sendingMethodChoices']->value, 'choice');
$_smarty_tpl->tpl_vars['choice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['choice']->value) {
$_smarty_tpl->tpl_vars['choice']->do_else = false;
?>
                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['value'],'html','UTF-8' ));?>
"
                        <?php if ($_smarty_tpl->tpl_vars['choice']->value['value'] == $_smarty_tpl->tpl_vars['defaultSendingMethod']->value) {?>selected="selected"<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['choice']->value['unavailableTemplates']) {?>
                          data-unavailable-templates='["<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( implode('","',$_smarty_tpl->tpl_vars['choice']->value['unavailableTemplates']),'html','UTF-8' ));?>
"]'
                        <?php }?>
                >
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['text'],'html','UTF-8' ));?>

                </option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="dropoff_pop" class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sending point','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <div class="input-group">
              <input type="text"
                     name="dropoff_pop"
                     id="dropoff_pop"
                     value="<?php if ($_smarty_tpl->tpl_vars['defaultPop']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultPop']->value['name'],'html','UTF-8' ));
}?>"
                     class="form-control"
                     data-type="pop"
                     data-function="parcel_send"
                     data-point="<?php if ($_smarty_tpl->tpl_vars['defaultPop']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultPop']->value['name'],'html','UTF-8' ));
}?>"
              >
              <div class="input-group-append">
                <button class="btn btn-outline-secondary js-inpost-show-map-input" data-target-input="#dropoff_pop">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open map','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="dropoff_locker" class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sending point','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <div class="input-group">
              <input type="text"
                     name="dropoff_locker"
                     id="dropoff_locker"
                     value="<?php if ($_smarty_tpl->tpl_vars['defaultLocker']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultLocker']->value['name'],'html','UTF-8' ));
}?>"
                     class="form-control"
                     data-type="parcel_locker"
                     data-function="parcel_send"
                     data-point="<?php if ($_smarty_tpl->tpl_vars['defaultLocker']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultLocker']->value['name'],'html','UTF-8' ));
}?>"
              >
              <div class="input-group-append">
                <button class="btn btn-outline-secondary js-inpost-show-map-input" data-target-input="#dropoff_locker">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open map','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="js-inpost-target-point-wrapper">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="sending_locker" class="form-control-label required">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Target point','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </label>
              <div class="input-group">
                <input type="text"
                       name="target_point"
                       id="target_point"
                       value="<?php if ($_smarty_tpl->tpl_vars['selectedPoint']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectedPoint']->value,'html','UTF-8' ));
}?>"
                       class="form-control"
                       data-payment="1"
                       data-type="parcel_locker"
                       data-function="parcel_collect"
                       data-point="<?php if ($_smarty_tpl->tpl_vars['selectedPoint']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectedPoint']->value,'html','UTF-8' ));
}?>"
                >
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary js-inpost-show-map-input" data-target-input="#target_point">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open map','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="js-inpost-weekend-delivery-wrapper">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label class="form-control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weekend delivery','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </label>
              <div class="input-group">
                <span class="ps-switch">
                  <input type="radio"
                         name="weekend_delivery"
                         id="weekend_delivery_off"
                         value="0"
                         <?php if (!$_smarty_tpl->tpl_vars['weekendDelivery']->value) {?>checked="checked"<?php }?>
                  >
                  <label for="weekend_delivery_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</label>
                  <input type="radio"
                         name="weekend_delivery"
                         id="weekend_delivery_on"
                         value="1"
                         <?php if ($_smarty_tpl->tpl_vars['weekendDelivery']->value) {?>checked="checked"<?php }?>
                  >
                  <label for="weekend_delivery_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</label>
                  <a class="slide-button btn"></a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="reference" class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <input
                    class="form-control" type="text" name="reference" id="reference"
                    value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shipmentReference']->value,'html','UTF-8' ));?>
"
            >
          </div>
        </div>
      </div>

      <div id="js-inpost-dimension-template-content-wrapper">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label class="form-control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use a predefined dimension template','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </label>
              <div class="input-group">
                <span class="ps-switch">
                  <input type="radio" name="use_template" id="template_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['useTemplate']->value) {?> checked="checked"<?php }?>>
                  <label for="template_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</label>
                  <input type="radio" name="use_template" id="template_on" value="1"<?php if ($_smarty_tpl->tpl_vars['useTemplate']->value) {?> checked="checked"<?php }?>>
                  <label for="template_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</label>
                  <a class="slide-button btn"></a>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group"<?php if (!$_smarty_tpl->tpl_vars['useTemplate']->value) {?> style="display: none"<?php }?>>
              <label for="template" class="form-control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Dimension template','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </label>
              <select name="template" id="template" class="custom-select">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dimensionTemplateChoices']->value, 'choice');
$_smarty_tpl->tpl_vars['choice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['choice']->value) {
$_smarty_tpl->tpl_vars['choice']->do_else = false;
?>
                  <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['value'],'html','UTF-8' ));?>
"<?php if ($_smarty_tpl->tpl_vars['choice']->value['value'] == $_smarty_tpl->tpl_vars['template']->value) {?> selected="selected"<?php }?>>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['choice']->value['text'],'html','UTF-8' ));?>

                  </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div id="js-inpost-package-dimensions"<?php if ($_smarty_tpl->tpl_vars['useTemplate']->value) {?> style="display: none"<?php }?>>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="length" class="form-control-label required">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Length','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">mm</div>
                </div>
                <input type="text" name="dimensions[length]" id="length" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'floatval' ][ 0 ], array( $_smarty_tpl->tpl_vars['length']->value ));?>
" class="form-control">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="width" class="form-control-label required">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">mm</div>
                </div>
                <input type="text" name="dimensions[width]" id="width" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'floatval' ][ 0 ], array( $_smarty_tpl->tpl_vars['width']->value ));?>
" class="form-control">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="height" class="form-control-label required">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">mm</div>
                </div>
                <input type="text" name="dimensions[height]" id="height" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'floatval' ][ 0 ], array( $_smarty_tpl->tpl_vars['height']->value ));?>
" class="form-control">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="weight" class="form-control-label required">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

              </label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">kg</div>
                </div>
                <input type="text" name="weight" id="weight" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'floatval' ][ 0 ], array( $_smarty_tpl->tpl_vars['weight']->value ));?>
" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cash on delivery','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <div class="input-group">
              <span class="ps-switch">
                <input type="radio" name="cod" id="cod_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['cashOnDelivery']->value) {?> checked="checked"<?php }?>>
                <label for="cod_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</label>
                <input type="radio" name="cod" id="cod_on" value="1" <?php if ($_smarty_tpl->tpl_vars['cashOnDelivery']->value) {?> checked="checked"<?php }?>>
                <label for="cod_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</label>
                <a class="slide-button btn"></a>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="cod_amount" class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cash on delivery amount','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currencySign']->value,'html','UTF-8' ));?>
</div>
              </div>
              <input type="text" name="cod_amount" id="cod_amount" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'floatval' ][ 0 ], array( $_smarty_tpl->tpl_vars['orderTotal']->value ));?>
" class="form-control">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Insurance','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <div class="input-group">
              <span class="ps-switch">
                <input type="radio" name="insurance" id="insurance_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['insurance']->value) {?> checked="checked"<?php }?>>
                <label for="insurance_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</label>
                <input type="radio" name="insurance" id="insurance_on" value="1"<?php if ($_smarty_tpl->tpl_vars['insurance']->value) {?> checked="checked"<?php }?>>
                <label for="insurance_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'inpostshipping'),$_smarty_tpl ) );?>
</label>
                <a class="slide-button btn"></a>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group"<?php if (!$_smarty_tpl->tpl_vars['insurance']->value) {?> style="display: none"<?php }?>>
            <label for="insurance_amount" class="form-control-label">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Insurance amount','mod'=>'inpostshipping'),$_smarty_tpl ) );?>

            </label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currencySign']->value,'html','UTF-8' ));?>
</div>
              </div>
              <input type="text" name="insurance_amount" id="insurance_amount" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'floatval' ][ 0 ], array( $_smarty_tpl->tpl_vars['insuranceAmount']->value ));?>
" class="form-control">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</form>
<?php }
}
