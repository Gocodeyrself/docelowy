<?php
/* Smarty version 4.3.1, created on 2024-10-14 11:00:14
  from 'module:ps_banner_twops_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670cdd9e0e64a6_43631527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '994d4cd74bd81e305097f5126f846902515255c3' => 
    array (
      0 => 'module:ps_banner_twops_banner.tpl',
      1 => 1706875833,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670cdd9e0e64a6_43631527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '184107718670cdd9e0e22b0_94910264';
?>
<a class="banner" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['BANNER_LINK_2']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if ((isset($_smarty_tpl->tpl_vars['BANNER_IMG_2']->value))) {?>
      <div class="card-banner">
        <div class="image-box">
          <img
            class="img-fluid"
            src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['BANNER_IMG_2']->value, ENT_QUOTES, 'UTF-8');?>
"
            alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['BANNER_DESC_2']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['BANNER_DESC_2']->value, ENT_QUOTES, 'UTF-8');?>
"
            width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_width']->value, ENT_QUOTES, 'UTF-8');?>
"
            height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['banner_height']->value, ENT_QUOTES, 'UTF-8');?>
">
        </div>
        <div class="content">
          <h2>CEZOS</h2>
          <p>To przede wszystkim zespół pasjonatów od oświetlenia<br><br><span>Made in Poland -</span> solidne, trwałe i dokosnałe<br><br>20 lat doświadczenia w dziedzinie LED<br>Lokalna produkcja i szeroki asortyment<br>Lider na rynku polskim i europejskim
          </p>
        </div>
      </div>
  <?php } else { ?>
    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['BANNER_DESC_2']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>


<style>
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap");

.banner .card-banner {
  width: 100%;
  height: 393px
  aspect-ratio: 1 / 0.7;
  border-radius: 6px;
  position: relative;
  cursor: pointer;
}
.banner .card-banner .image-box {
  width: 100%;
  height: 100%;
  border-radius: inherit;
}
.banner .card-banner .image-box img {
  width: auto;
  height: auto;
  object-fit: cover;
  object-position: 10% 10%;
  border-radius: inherit;
  transition: 0.5s ease-in-out;
}

.banner .card-banner::after {
  content: "";
  position: absolute;
  inset: 0;
  border: 2px solid white;
  border-radius: inherit;
  opacity: 0;
  transition: 0.4s ease-in-out;
}

.banner .card-banner:hover img {
  filter: grayscale(1) brightness(0.4);
}
.banner .card-banner:hover::after {
  opacity: 1;
  inset: 20px;
}

.banner .content {
  width: 80%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.banner .content h2,
.banner .content p {
  opacity: 0;
  transition: 0.4s 0.2s ease;
}
.banner .content h2 {
  margin-bottom: 30px;
  scale: 0.7;
  
}
.banner .content p {

  font-size: 14px;
  line-height: 1.5;
  color: white;
  transform: translateY(50%);
  

}
.banner .card-banner:hover .content h2 {
  scale: 1;
  opacity: 1;
}
.banner .card-banner:hover .content P {
  opacity: 1;
  transform: translateY(0);
}
.banner span
{
  color: #FF0000;
  background-color: rgba(255, 255, 255, 0.5);
  padding: 5px 10px;
  border-radius: 4px;
 
}
</style><?php }
}
