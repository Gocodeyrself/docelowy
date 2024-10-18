{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
<a class="banner" href="{$BANNER_LINK_2}">
  {if isset($BANNER_IMG_2)}
      <div class="card-banner">
        <div class="image-box">
          <img
            class="img-fluid"
            src="{$BANNER_IMG_2}"
            alt="{$BANNER_DESC_2}"
            title="{$BANNER_DESC_2}"
            width="{$banner_width}"
            height="{$banner_height}">
        </div>
        <div class="content">
          <h2>CEZOS</h2>
          <p>To przede wszystkim zespół pasjonatów od oświetlenia<br><br><span>Made in Poland -</span> solidne, trwałe i dokosnałe<br><br>20 lat doświadczenia w dziedzinie LED<br>Lokalna produkcja i szeroki asortyment<br>Lider na rynku polskim i europejskim
          </p>
        </div>
      </div>
  {else}
    <span>{$BANNER_DESC_2}</span>
  {/if}
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
</style>