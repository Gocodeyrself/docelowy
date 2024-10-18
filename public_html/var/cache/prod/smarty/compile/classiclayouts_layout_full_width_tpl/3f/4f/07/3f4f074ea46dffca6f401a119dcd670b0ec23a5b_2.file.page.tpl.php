<?php
/* Smarty version 4.3.1, created on 2024-10-14 11:00:13
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670cdd9d645794_04465753',
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
function content_670cdd9d645794_04465753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1381015395670cdd9d63c071_93950185', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_573424872670cdd9d63cee9_30860553 extends Smarty_Internal_Block
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
class Block_526570879670cdd9d63c727_33848632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_573424872670cdd9d63cee9_30860553', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_403474374670cdd9d642064_39733038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1937530971670cdd9d6429d5_16555933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Zawartość strony kontaktu -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1203651799670cdd9d641a23_83335219 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_403474374670cdd9d642064_39733038', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1937530971670cdd9d6429d5_16555933', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1783335979670cdd9d643d22_76996585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1380715178670cdd9d643774_28710758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1783335979670cdd9d643d22_76996585', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'google_reviews_section'} */
class Block_300810449670cdd9d644a28_10672653 extends Smarty_Internal_Block
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
class Block_1381015395670cdd9d63c071_93950185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1381015395670cdd9d63c071_93950185',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_526570879670cdd9d63c727_33848632',
  ),
  'page_title' => 
  array (
    0 => 'Block_573424872670cdd9d63cee9_30860553',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1203651799670cdd9d641a23_83335219',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_403474374670cdd9d642064_39733038',
  ),
  'page_content' => 
  array (
    0 => 'Block_1937530971670cdd9d6429d5_16555933',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1380715178670cdd9d643774_28710758',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1783335979670cdd9d643d22_76996585',
  ),
  'google_reviews_section' => 
  array (
    0 => 'Block_300810449670cdd9d644a28_10672653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_526570879670cdd9d63c727_33848632', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1203651799670cdd9d641a23_83335219', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1380715178670cdd9d643774_28710758', 'page_footer_container', $this->tplIndex);
?>


  </section>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_300810449670cdd9d644a28_10672653', 'google_reviews_section', $this->tplIndex);
?>


<?php
}
}
/* {/block 'content'} */
}
