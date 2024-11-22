<?php
/* Smarty version 4.3.1, created on 2024-11-22 10:05:34
  from 'module:ps_banner_twops_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6740495e072837_88182769',
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
  'cache_lifetime' => 31536000,
),true)) {
function content_6740495e072837_88182769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/ed/d0/a8/edd0a83d7e312b5429093b7e36fb04ce2ddbd44c_2.file.helpers.tpl.php',
    'uid' => 'edd0a83d7e312b5429093b7e36fb04ce2ddbd44c',
    'call_name' => 'smarty_template_function_renderLogo_5626056336740334d357ac1_70770946',
  ),
));
?><a class="banner" href="https://cezos.com/en/">
        <div class="card-banner">
        <div class="image-box">
          <img
            class="img-fluid"
            src="https://cezos.com/modules/ps_banner_two/img/3b716956c54aca9fe8b6b75bd18ddd7d.jpg"
            alt=""
            title=""
            width="1200"
            height="1200">
        </div>
        <div class="content">
          <h2>CEZOS</h2>
          <p>To przede wszystkim zespół pasjonatów od oświetlenia<br><br><span>Made in Poland -</span> solidne, trwałe i dokosnałe<br><br>20 lat doświadczenia w dziedzinie LED<br>Lokalna produkcja i szeroki asortyment<br>Lider na rynku polskim i europejskim
          </p>
        </div>
      </div>
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
