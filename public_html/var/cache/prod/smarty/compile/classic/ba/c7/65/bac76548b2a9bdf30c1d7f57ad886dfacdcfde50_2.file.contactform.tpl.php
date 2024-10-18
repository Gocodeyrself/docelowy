<?php
/* Smarty version 4.3.1, created on 2024-10-14 11:01:31
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/modules/contactform/views/templates/widget/contactform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670cddebf26a47_26006858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bac76548b2a9bdf30c1d7f57ad886dfacdcfde50' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/modules/contactform/views/templates/widget/contactform.tpl',
      1 => 1718874142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670cddebf26a47_26006858 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="contact-form" id="contact-data">
  <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>enctype="multipart/form-data"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value) {?>
      <div class="col-xs-12 alert <?php if ($_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['messages'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
            <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['notifications']->value || $_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?>
      <section class="form-fields">        
        <div class="row">
          <div class="col-md-3">
          
            <div class="row">
              <div class="col-md-12 p-0">
                <input
                  id="name"
                  class="input"
                  name="first-last-name"
                  type="text"
                  required=""
                  value="<?php if ((isset($_SESSION['firstLastName']))) {
echo htmlspecialchars((string) $_SESSION['firstLastName'], ENT_QUOTES, 'UTF-8');
}?>"
                >
                <label class="label" for="first-last-name">
                  <i class="fa-regular fa-user"></i>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Full name','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                </label>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12 p-0">
                <input
                  id="email"
                  class="input"
                  name="from"
                  type="email"
                  required=""
                  value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact']->value['email'], ENT_QUOTES, 'UTF-8');?>
"
                >
                <label class="label" for="from">
                  <i class="fa-regular fa-envelope"></i>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

                </label>
              </div>
            </div>

            <div class="row">
                            <div class="col-md-12 p-0">
                <input
                  id="phone"
                  class="input"
                  name="phone-number"
                  type="tel"
                  required=""
                  value="<?php if ((isset($_SESSION['phoneNumber']))) {
echo htmlspecialchars((string) $_SESSION['phoneNumber'], ENT_QUOTES, 'UTF-8');
}?>"
                >
                <label class="label" for="phone-number">
                  <i class="fa-solid fa-phone"></i>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

                </label>
              </div>
            </div>

            <div class="row">
                            <div class="col-md-12 p-0">
                <input
                  id="companyName"
                  class="input"
                  name="company-name"
                  type="text"
                  required=""
                  value="<?php if ((isset($_SESSION['companyName']))) {
echo htmlspecialchars((string) $_SESSION['companyName'], ENT_QUOTES, 'UTF-8');
}?>"
                >
                <label class="label" for="company-name">
                  <i class="far fa-building"></i>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                </label>
              </div>
            </div>

            <div class="row hidden">
              <label class="col-md-12 p-0 form-control-label" for="id_contact"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subject','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
              <div class="col-md-12 p-0">
                <select name="id_contact" id="id_contact" class="form-control form-control-select">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['contacts'], 'contact_elt');
$_smarty_tpl->tpl_vars['contact_elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact_elt']->value) {
$_smarty_tpl->tpl_vars['contact_elt']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_elt']->value['id_contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_elt']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
              </div>
            </div>
        
            <?php if ($_smarty_tpl->tpl_vars['contact']->value['orders']) {?>
              <div class="row">
                <label class="col-md-12 p-0 form-control-label" for="id-order"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
                <div class="col-md-12 p-0">
                  <select id="id-order" name="id_order" class="form-control form-control-select">
                    <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select reference','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['orders'], 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                      <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['id_order'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
                <span class="col-md-12 form-control-comment">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optional','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>

                </span>
              </div>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>
              <div class="row file-upload-container">
                <label class="col-md-12 p-0 form-control-label" for="file-upload"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachment','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
                <div class="col-md-12 p-0">
                  <input id="file-upload" type="file" name="fileUpload" class="filestyle" data-buttonText="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                </div>
                <span class="col-md-12 form-control-comment">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optional','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
 </br>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maximum file size 20 MB','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                </span>
              </div>
            <?php }?>
            </div>
            <div class="col-md-9">
                            <div class="col-md-12 p-0">
                <textarea
                  id="contactform-message"
                  class="input"
                  name="message"
                                    rows="3"
                  required=""
                ><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == "product") {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Witam,

Jestem zainteresowany zakupem większej ilości produktu %indeks%, %name%, w większej ilości.

Pozdrawiam','d'=>'Shop.Theme.Exis','sprintf'=>array('%indeks%'=>$_smarty_tpl->tpl_vars['product']->value['reference'],'%name%'=>$_smarty_tpl->tpl_vars['product']->value['name'])),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['contact']->value['message']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact']->value['message'], ENT_QUOTES, 'UTF-8');
}?></textarea>
              <label class="label" for="message">
                  <i class="far fa-building"></i>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

                </label>
              </div>
            </div>
          
          </div>


<div class="row" style="margin-top: 15px;">
    <div id="contactRules" class="col-md-6 hidden">
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat eros. Pellentesque quis finibus odio. Nulla ut nisi vel ligula mollis dapibus id at dui. Vivamus imperdiet lacus leo, eget vehicula enim accumsan nec. Vivamus commodo tempor mauris, viverra scelerisque lorem aliquam et. Nunc sed ullamcorper mauris, nec porttitor eros. Integer interdum sapien ac lectus ornare, sed eleifend ante vulputate. Cras ipsum nibh, molestie at mattis nec, congue malesuada felis. Donec convallis, felis vel efficitur vehicula, eros elit mollis massa, nec commodo risus arcu at lorem. Donec lectus arcu, viverra a tellus in, semper hendrerit felis. In nisl nisl, dapibus eget turpis quis, egestas rhoncus orci. Aenean in velit maximus, blandit ex id, efficitur ex. Nulla et porttitor nulla. Etiam feugiat pharetra libero, ut commodo arcu laoreet eget.
       
            </p>
    </div>
    <div class="col-md-12">
        <div class="form-group row checkbox">
            <div style="height:22px;"></div>
            <div class="col-xs-12">
                <input id="rulesPolicyOfPrivate" name="chk1" type="checkbox">
                <span class="checkmark"></span>
                <label for="rulesPolicyOfPrivate" name="rulesLabel" class="checkbox_label">
                    <?php echo $_smarty_tpl->tpl_vars['oswiadczam']->value;?>

                </label>
                <div class="checkbox_label_hidden">
                    <input name="rules-label"
                        value="<?php echo $_smarty_tpl->tpl_vars['oswiadczam']->value;?>
">
                </div>
            </div>
        </div>

        <div class="form-group row checkbox">
            <div class="col-xs-12">
                <input id="personalData" name="chk2" type="checkbox">
                <span class="checkmark"></span>
                <label for="personalData" name="personalDataLabel" class="checkbox_label">
                    <?php echo $_smarty_tpl->tpl_vars['po_zapoznaniu']->value;?>

                </label>
                <div class="checkbox_label_hidden">
                    <input name="personal-data-label"
                        value="<?php echo $_smarty_tpl->tpl_vars['po_zapoznaniu']->value;?>
">
                </div>
            </div>
        </div>

        <div class="form-group row checkbox">
            <div class="col-xs-12">
                <input id="newsletter" name="chk3" type="checkbox">
                <span class="checkmark"></span>
                <label for="newsletter" class="checkbox_label">
                    <?php echo $_smarty_tpl->tpl_vars['akceptuje_regulamin']->value;?>

                </label>
                <div class="checkbox_label_hidden">
                    <input name="newsletter-label"
                        value="<?php echo $_smarty_tpl->tpl_vars['akceptuje_regulamin']->value;?>
">
                </div>
            </div>
        </div>
        
    </div>
</div>
        <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
          <div class="form-group row">
            <div class="offset-md-3">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

            </div>
          </div>
        <?php }?>

      </section>

      <footer class="form-footer text-sm-left">
        <style>
          input[name=url] {
            display: none !important;
          }
        </style>
        <input type="text" name="url" value=""/>
        <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input class="btn btn-primary" type="submit" name="submitMessage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
      </footer>
    <?php }?>

  </form>
</section>
<?php }
}
