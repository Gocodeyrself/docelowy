<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:25
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/recaptcharegistration/views/templates/hook/recaptcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740334d47c764_04152588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e6cae03b2676a133f42206898eebf9a70c8de7d' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/recaptcharegistration/views/templates/hook/recaptcha.tpl',
      1 => 1732259187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740334d47c764_04152588 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
/* Wyśrodkowanie kontenera reCAPTCHA */
.recaptcha-container {
    display: flex;
    flex-direction: column; /* Układ pionowy (napisy i widget w jednej kolumnie) */
    align-items: center; /* Wyśrodkowanie poziome */
    justify-content: center; /* Wyśrodkowanie pionowe */
    width: 100%; /* Dopasowanie do szerokości formularza */
    margin: 0 auto;
    padding-top: 10px; /* Odstęp od góry */
}

/* Ukrycie dodatkowego napisu generowanego przez Google (jeśli istnieje) */
.g-recaptcha iframe + div {
    display: none;
}
</style>

<div class="form-group recaptcha-container">
    <div class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['site_key']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
</div>
<?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?hl=pl" async defer><?php echo '</script'; ?>
>
<?php }
}
