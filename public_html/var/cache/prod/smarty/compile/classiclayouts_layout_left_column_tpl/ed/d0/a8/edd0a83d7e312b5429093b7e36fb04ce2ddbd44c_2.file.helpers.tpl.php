<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:08
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740333c02e115_67925999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edd0a83d7e312b5429093b7e36fb04ce2ddbd44c' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/_partials/helpers.tpl',
      1 => 1689594775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740333c02e115_67925999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/var/cache/prod/smarty/compile/classiclayouts_layout_left_column_tpl/ed/d0/a8/edd0a83d7e312b5429093b7e36fb04ce2ddbd44c_2.file.helpers.tpl.php',
    'uid' => 'edd0a83d7e312b5429093b7e36fb04ce2ddbd44c',
    'call_name' => 'smarty_template_function_renderLogo_11323843006740333c02c3c5_99843043',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_11323843006740333c02c3c5_99843043 */
if (!function_exists('smarty_template_function_renderLogo_11323843006740333c02c3c5_99843043')) {
function smarty_template_function_renderLogo_11323843006740333c02c3c5_99843043(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_11323843006740333c02c3c5_99843043 */
}
