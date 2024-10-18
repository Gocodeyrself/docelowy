<?php
/* Smarty version 4.3.1, created on 2024-10-14 11:00:14
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/categoriesbanners/views/templates/front/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670cdd9e256770_71031995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '006aa3d321df890c611e078d80dc8f320a02b6e2' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/categoriesbanners/views/templates/front/footer.tpl',
      1 => 1716547618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670cdd9e256770_71031995 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cat_banner']->value) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['img_url']->value, ENT_QUOTES, 'UTF-8');?>
themes/core.js" ><?php echo '</script'; ?>
>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_banner']->value, 'banner');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
echo '<script'; ?>
 type="text/javascript">  

function displaySingleBanner() {
var banner_html='<div class="banner-wrapper">';
banner_html += '<div class="banner-content">';
banner_html += '<div class="thumbnail-container">';
banner_html += '<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['other'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['category_banners_product_tag']->value) {
}?>><img class="banner-img" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['img_url']->value, ENT_QUOTES, 'UTF-8');?>
modules/categoriesbanners/views/img/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['comment'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['comment'], ENT_QUOTES, 'UTF-8');?>
"></a>';
banner_html += '</div>';
banner_html += '<div class="banner-text">';
banner_html += '<p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['comment'], ENT_QUOTES, 'UTF-8');?>
</p>';
banner_html += '</div>';
banner_html += '</div>';
banner_html += '</div>';


var after_product=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['after_nu_product'], ENT_QUOTES, 'UTF-8');?>
;
var col_class='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['class'], ENT_QUOTES, 'UTF-8');?>
';

<?php if ($_smarty_tpl->tpl_vars['category_banners_id']->value) {?>
var rowsc=$( "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category_banners_id']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category_banners_product_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
").eq(after_product - 1);
<?php } else { ?>
var rowsc=$( "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['parent_id_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_div_tag']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
").eq(after_product - 1);;
<?php }?>

rowsc.before( banner_html );
}


<?php echo '</script'; ?>
>

<style>
    .bannerimg_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['id'], ENT_QUOTES, 'UTF-8');?>
{
<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner']->value['css'], ENT_QUOTES, 'UTF-8');?>

    }
</style>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<!-- categorybannermodule-->

<style>
article.product-miniature.js-product-miniature {
    overflow: hidden;
    display: block;
}


.first-in-line {
    clear: none !important;
}

@media (min-width: 320px) and (max-width: 1020px) {
.doubleimg {
    width: 100%;
}
.doubleimg img {
    width: 100% !important;
}
}



.banner-wrapper {
  display: flex;
  justify-content: center; /* Centrowanie baneru */
  margin-bottom: 20px; /* Dostosuj według potrzeb */
}

.banner-content {
  display: flex;
  align-items: center;
  background-color: white;
  border-radius: 10px; /* Zaokrąglone rogi */
  padding: 15px; /* Wewnętrzne odstępy */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtelny cień */
  max-width: 100%;
  margin: 15px;
}

.thumbnail-container {
  flex: 0 0 auto; /* Zapobiega rozciąganiu obrazu */
  margin-right: 20px; /* Odstęp między obrazem a tekstem */
}

.banner-img {
  max-width: 100%;
  height: auto;
  border-radius: 10px; /* Zaokrąglone rogi obrazu */
}

.banner-text {
  flex: 1; /* Pozwala tekstowi zająć pozostałą przestrzeń */
}

.banner-text p {
  font-size: 14px; /* Dostosuj rozmiar czcionki według potrzeb */
  margin: 0; /* Dostosuj margines według potrzeb */
}
</style>

<?php }
}
}
