{***
 * cs_invisible_recaptcha_v2 front-end module version 1.3.4 for Prestashop 1.6, 1.7
 * Support contact : prestashop@comonsoft.com.
 *
 * NOTICE OF LICENSE
 *
 * This source file is the property of Com'onSoft
 * that is bundled with this package.
 * It is also available through the world-wide-web at this URL:
 * https://boutique.comonsoft.com/
 *
 * @category  front-end
 * @package   cs_invisible_recaptcha_v2
 * @author    Com'onSoft (http://www.comonsoft.com/)
 * @copyright 2016-2020 Com'onSoft and contributors
 * @version   1.3.4
*}
<script type="text/javascript">
  var productCommentPostErrorMessage = '{l s='Sorry, your review cannot be posted.' mod='cs_invisible_recaptcha_v2' js=1}';
</script>

<div id="post-product-comment-modal" class="modal fade product-comment-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form id="post-product-comment-form" method="POST" action="{$module_controller_url}">
          <input type="hidden" value="{$product_shop_id}" name="id_product">
          <div class="row">
            <div class="col-md-3 col-sm-3">
              <label class="form-label" for="customer_name">{l s='Rate' mod='cs_invisible_recaptcha_v2'}</label>
            </div>
            <div class="col-md-9 col-sm-9">
              <label class="form-label" for="customer_name">{l s='Your name' mod='cs_invisible_recaptcha_v2'}<sup class="required">*</sup></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-3">
              <ul id="criterions_list">
                <li>
                  <div class="criterion-rating">
                    <div class="grade-stars" data-grade="5" data-input="criterion">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-md-9 col-sm-9">
              <input name="customer_name" type="text" value="{$customer_name}"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <label class="form-label" for="comment_content">{l s='Review' mod='cs_invisible_recaptcha_v2'}<sup class="required">*</sup></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <textarea name="comment_content"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-sm-6">
              <p class="required"><sup>*</sup> {l s='Required fields' mod='cs_invisible_recaptcha_v2'}</p>
            </div>
            <div class="col-md-6 col-sm-6 post-comment-buttons">
              <button type="button" class="btn btn-comment-inverse btn-comment-big" data-dismiss="modal" aria-label="{l s='Cancel' mod='cs_invisible_recaptcha_v2'}">
                {l s='Cancel' mod='cs_invisible_recaptcha_v2'}
              </button>
              <button type="submit" class="btn btn-comment btn-comment-big" id="send-comment">
                {l s='Send' mod='cs_invisible_recaptcha_v2'}
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

{* Comment posted modal *}
{assign var='comment_posted_message' value={l s='Your comment has been submitted and will be available once approved by a moderator.' mod='cs_invisible_recaptcha_v2'}}
{assign var='modal_id' value='product-comment-posted-modal'}

<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
    const alertModal = $('#{$modal_id}');
    alertModal.on('hidden.bs.modal', function () {
      alertModal.modal('hide');
    });
  });
</script>


<div id="{$modal_id}" class="modal fade product-comment-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2>
          <i class="material-icons check_circle">check_circle</i>
          {l s='Review sent' mod='cs_invisible_recaptcha_v2'}
        </h2>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12  col-sm-12" id="{$modal_id}-message">
            {if isset($modal_message)}{$modal_message}{/if}
          </div>
        </div>
        <div class="row">
          <div class="col-md-12  col-sm-12 post-comment-buttons">
            <button type="button" class="btn btn-comment btn-comment-huge" data-dismiss="modal" aria-label="OK">
              OK
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{* Comment post error modal *}
{assign var='modal_message' value=$modal_message|default:''}
{assign var='modal_id' value='product-comment-post-error'}

<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
    const alertModal = $('#{$modal_id}');
    alertModal.on('hidden.bs.modal', function () {
      alertModal.modal('hide');
    });
  });
</script>


<div id="{$modal_id}" class="modal fade product-comment-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2>
          <i class="material-icons error">error</i>
          {l s='Your review cannot be sent' mod='cs_invisible_recaptcha_v2'}
        </h2>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12  col-sm-12" id="{$modal_id}-message">
            {$modal_message}
          </div>
        </div>
        <div class="row">
          <div class="col-md-12  col-sm-12 post-comment-buttons">
            <button type="button" class="btn btn-comment btn-comment-huge" data-dismiss="modal" aria-label="OK">
              OK
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>