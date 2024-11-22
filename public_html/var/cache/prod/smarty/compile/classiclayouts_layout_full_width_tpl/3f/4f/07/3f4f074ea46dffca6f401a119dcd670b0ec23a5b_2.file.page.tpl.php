<?php
/* Smarty version 4.3.1, created on 2024-11-22 08:31:25
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740334d345ad0_62423849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f4f074ea46dffca6f401a119dcd670b0ec23a5b' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/page.tpl',
      1 => 1727344276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740334d345ad0_62423849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18781884956740334d343b99_66546796', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15468769766740334d343fd6_32879605 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_15754384456740334d343d89_12299191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15468769766740334d343fd6_32879605', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6116031046740334d344c21_34541250 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_19215605596740334d344ea7_90929044 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Zawartość strony kontaktu -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11920468976740334d344a65_64736897 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6116031046740334d344c21_34541250', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19215605596740334d344ea7_90929044', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_2691960786740334d3453d8_77386870 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2917044596740334d345231_86192462 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2691960786740334d3453d8_77386870', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'google_reviews_section'} */
class Block_10523142256740334d345747_59417372 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Oddzielny blok dla opinii Google -->
    <section id="google-reviews" class="reviews-section">
      <div class="google-reviews-content">
        <iframe src="https://1569f588ae1d4fa6bca2dbef90cfc749.elf.site/" width="100%" height="410" style="position: relative; display: block; background-color: #fff !important; border-radius: 10px; border: 1px solid rgba(0, 0, 0, .125); box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.1);"></iframe>
      </div>
    </section>
  <?php
}
}
/* {/block 'google_reviews_section'} */
/* {block 'content'} */
class Block_18781884956740334d343b99_66546796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18781884956740334d343b99_66546796',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_15754384456740334d343d89_12299191',
  ),
  'page_title' => 
  array (
    0 => 'Block_15468769766740334d343fd6_32879605',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11920468976740334d344a65_64736897',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6116031046740334d344c21_34541250',
  ),
  'page_content' => 
  array (
    0 => 'Block_19215605596740334d344ea7_90929044',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2917044596740334d345231_86192462',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2691960786740334d3453d8_77386870',
  ),
  'google_reviews_section' => 
  array (
    0 => 'Block_10523142256740334d345747_59417372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15754384456740334d343d89_12299191', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11920468976740334d344a65_64736897', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2917044596740334d345231_86192462', 'page_footer_container', $this->tplIndex);
?>


  </section>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10523142256740334d345747_59417372', 'google_reviews_section', $this->tplIndex);
?>


<?php
}
}
/* {/block 'content'} */
}
