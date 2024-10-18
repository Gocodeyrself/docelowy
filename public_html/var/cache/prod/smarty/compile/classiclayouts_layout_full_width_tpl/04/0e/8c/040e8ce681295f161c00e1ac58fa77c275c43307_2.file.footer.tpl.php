<?php
/* Smarty version 4.3.1, created on 2024-10-14 11:00:14
  from '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670cdd9e17c730_31390664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '040e8ce681295f161c00e1ac58fa77c275c43307' => 
    array (
      0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/themes/classic/templates/_partials/footer.tpl',
      1 => 1722946810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/blog.tpl' => 1,
  ),
),false)) {
function content_670cdd9e17c730_31390664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container p-c">
    <?php if ((isset($_smarty_tpl->tpl_vars['blog']->value))) {?>
    <div class="blog-container">
        <h5><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blog']->value->name[1], ENT_QUOTES, 'UTF-8');?>
</h5>               
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['blogItems']->value), 0, false);
?>
    </div>
    <?php }?>
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1553847460670cdd9e172188_26289733', 'hook_footer_before');
?>

    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] === "index") {?>
        <?php echo $_smarty_tpl->tpl_vars['yourPartner']->value;?>

    <?php }?>
  </div>
</div>
<div class="footer-container">
  <div class="container p-c">
    <div class="row">
        <?php echo $_smarty_tpl->tpl_vars['footerLeft']->value;?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_262305113670cdd9e174761_02532123', 'hook_footer');
?>

        <?php echo $_smarty_tpl->tpl_vars['footerCenterRight']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['footerRight']->value;?>

    </div>
  </div>
</div>
<div class="container p-c" id="totalFooter">
    <?php echo $_smarty_tpl->tpl_vars['totalFooter']->value;?>

</div>
<div class="exis text-right mt-4 p-c">
    <a href="https://exis.pl/" target="_blank">e-commerce solutions Exis Interactive</a>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
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



<?php echo '</script'; ?>
>
<?php }
/* {block 'hook_footer_before'} */
class Block_1553847460670cdd9e172188_26289733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_1553847460670cdd9e172188_26289733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_262305113670cdd9e174761_02532123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_262305113670cdd9e174761_02532123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_footer'} */
}
