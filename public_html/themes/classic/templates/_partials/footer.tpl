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
<div class="container p-c">
    {if isset($blog)}
    <div class="blog-container">
        <h5>{$blog->name[1]}</h5>               
        {include file="catalog/_partials/blog.tpl" items=$blogItems}
    </div>
    {/if}
  <div class="row">
    {block name='hook_footer_before'}
      {hook h='displayFooterBefore'}
    {/block}
    {if $page.page_name==="index"}
        {$yourPartner nofilter}
    {/if}
  </div>
</div>
<div class="footer-container">
  <div class="container p-c">
    <div class="row">
        {$footerLeft nofilter}
        {block name='hook_footer'}
            {hook h='displayFooter'}
        {/block}
        {$footerCenterRight nofilter}
        {$footerRight nofilter}
    </div>
  </div>
</div>
<div class="container p-c" id="totalFooter">
    {$totalFooter nofilter}
</div>


<script type="text/javascript">
$('#yourPartner .owl-carousel').owlCarousel({
      loop:true,
      margin:0,
      dots:true,
      nav:true,
      items: 1
  });
 $('.cms-slider').owlCarousel({
      loop:true,
      margin:0,
      dots:true,
      nav:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:2
          },
          992:{
              items:3,
          },
          1500:{
              items:4,
          }
      }
  });

 $('.blog-index-container').owlCarousel({
      loop:true,
      margin:50,
      dots:true,
      nav:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              margin:10,
          },
          600:{
              items:2,
          },
          992:{
              items:3,
          },
          1500:{
              items:4,
          }
      }
  });
 $('#tilesCategories').owlCarousel({
      loop:true,
      margin:20,
      dots:true,
      nav:true,
      responsiveClass:true,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
      responsive:{
          0:{
            dots:false,
             nav:false,
            items:2
          },
          992:{
              items:4,
          },
          1500:{
              items:5,
          }
      }
  });
  
 $('#tilesCategoriesTwo').owlCarousel({
      loop:true,
      margin:20,
      dots:false,
      nav:true,
      responsiveClass:true,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
      responsive:{
        0: {
            items: 2 // Poniżej 700
        },
        700: {
            items: 3 // Od 700 do 991
        },
        992: {
            items: 4 // Powyżej 991
        }
      }
  });

  $('.featured-products#newProducts .owl-carousel').owlCarousel({
      loop:true,
      margin:15,
      dots:false,
      nav:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
          },
          500:{
              items:2,
          },
          768:{
              items:3
          },
          992:{
              items:4,
          },
          1200:{
              items:5,
          },
          1500:{
              items:6,
          }
      }
  });
{* STRONA PRODUKTU *}
  $('.product-container .featured-products .owl-carousel').owlCarousel({
      loop:true,
      margin:15,
      dots:false,
      nav:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
          },
          500:{
              items:2,
          },
          768:{
              items:2
          },
          992:{
              items:3,
          },
          1200:{
              items:3,
          },
          1500:{
              items:4,
          }
      }
  });

  $('.featured-products .owl-carousel').owlCarousel({
      loop:true,
      margin:15,
      dots:false,
      nav:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
          },
          500:{
              items:2,
          },
          768:{
              items:3
          },
          992:{
              items:4,
          },
          1200:{
              items:5,
          },
          1500:{
              items:6,
          }
      }
  });

  $('body#product .featured-products .owl-carousel').owlCarousel({
      loop:true,
      margin:15,
      dots:false,
      nav:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
          },
          500:{
              items:2,
          },
          768:{
              items:3
          },
          992:{
              items:4,
          },
          1200:{
              items:5,
          },
          1500:{
              items:6,
          }
      }
  });

 $('.discover-container').owlCarousel({
      loop:true,
      margin:50,
      dots:true,
      nav:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:2,
              autoplay: true,
                autoplayTimeout: 7000,
                autoplayHoverPause: true,
                margin:10,
          },
          500:{
              items:3,
              autoplay: true,
                autoplayTimeout: 7000,
                autoplayHoverPause: true,
                margin:10,
          },
          750:{
              items:4,
              autoplay: true,
                autoplayTimeout: 7000,
                autoplayHoverPause: true,
                margin:10,
          },
          992:{
              items:5,
              autoplay: true,
                autoplayTimeout: 7000,
                autoplayHoverPause: true,
                margin:10,
          },
          1400:{
                dots:false,
                nav:false,
              items:7,
          }
      }
  });

  // dla podobnych
$('.similar .owl-carousel').owlCarousel({
        loop:true,
      margin:15,
      dots:false,
      nav:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
          },
          500:{
              items:2,
          },
          768:{
              items:3,
          },
          992:{
              items:3,
          },
          1200:{
              items:3,
          },
          1500:{
              items:3,
    }
  }
});
$('#discover.new1').owlCarousel({
    loop: true,  // Wyłącz pętlę
    margin: 10,  // Marginesy można ustawić na stałe
    dots: false,  // Wyłącz kropki nawigacji
    nav: false,  // Wyłącz strzałki nawigacji
    responsiveClass: false,
    responsive: {
        0: {
            items: 4  // Zawsze wyświetlaj 4 elementy
        },
        500: {
            items: 4  // Zawsze wyświetlaj 4 elementy
        },
        750: {
            items: 4  // Zawsze wyświetlaj 4 elementy
        },
        992: {
            items: 4  // Zawsze wyświetlaj 4 elementy
        },
        1400: {
            items: 4  // Zawsze wyświetlaj 4 elementy
        }
    }
});



</script>
