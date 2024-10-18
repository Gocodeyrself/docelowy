<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__07d7208348ac4d0e559c77b218cb30bbefcb4bbee2f4878f8d3da6e9f51cf251 */
class __TwigTemplate_102f3e34eca43679bcedb0f4a5e9627606813d9fffd6c85eff568467885baaed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__07d7208348ac4d0e559c77b218cb30bbefcb4bbee2f4878f8d3da6e9f51cf251"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__07d7208348ac4d0e559c77b218cb30bbefcb4bbee2f4878f8d3da6e9f51cf251"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Administracja • Cezos - sklep internetowy sklep@cezos.com</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminAdminPreferences';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '8.1.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = 'b4d1cc7311caf8f027c04414fc5de9ea';
    var currentIndex = 'index.php?controller=AdminAdminPreferences';
    var employee_token = '0faa129d727e925589d632b960a85204';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = 'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/modules/manage';
    var admin_notification_get_link = 'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/common/notifications';
    var admin_notification_push_link = adminNotificationPushLink = 'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/common/notifications/ack';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła się';
    var search_produc";
        // line 43
        echo "t_msg = 'Szukaj produktu';
  </script>



<link
      rel=\"preload\"
      href=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.0dd51c02.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin270jq8jrlc4glrd2ocx/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/sensbitgls/views/css/admin8.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/sensbitgls/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/sensbitgls/views/css/admin1770.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/sensbitgls/views/css/map.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin@latest/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ph_simpleblog/css/simpleblog-admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin270jq8";
        // line 72
        echo "jrlc4glrd2ocx\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https:/";
        // line 91
        echo "/assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin270jq8jrlc4glrd2ocx/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/przelewy24/views/js/admin_common.js?v=1.0.13\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/validate.js\"></script>
<script type=\"text/javascript\" src=\"/modules/sensbitgls/views/js/admin.js\"></script>
<script type=\"text/javascript\" src=\"/modules/sensbitgls/views/js/map.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php?controller=AdminGamification\";
            var current_id_tab = 95;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: 'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/common/notifications',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
                sensbitgls.setOptions({
                    module: 'sensbitgls',
      ";
        // line 125
        echo "              ajax_url_packages: 'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsPackage',
                    validate_fields_length: 0
                });
            </script>

";
        // line 130
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl adminadminpreferences developer-mode\"
  data-base-url=\"/admin270jq8jrlc4glrd2ocx/index.php\"  data-token=\"rtoFu0HKsQuVxR-trPfntzK1f0A1Fu2wNjyKS6W-7eA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminDashboard\"></a>
      <span id=\"shop_version\">8.1.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/currencies/?-s-Jqz1pJbgIAL_lAlJDOUG92lt6c&amp;token=cf8be3ca1998d7c2061a18fe25d4af11\"
                 data-item=\"Aktualizacja Waluty\"
      >Aktualizacja Waluty</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/performance/?-s-Jqz1pJbgIAL_lAlJDOUG92lt6c&amp;token=cf8be3ca1998d7c2061a18fe25d4af11\"
                 data-item=\"Czyszczenie pamięci podręcznej\"
      >Czyszczenie pamięci podręcznej</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminGformdashboard&amp;token=1c8721feee4b4edd3d870c5ddd079b50\"
                 data-item=\"Kreator formularzy\"
      >Kreator formularzy</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=Adm";
        // line 164
        echo "inModules&amp;configure=ps_facetedsearch&amp;token=64b61f9246d35dae2a5b5807611d3d13\"
                 data-item=\"Odbudowa indeksów\"
      >Odbudowa indeksów</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"37\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/administration\"
        data-post-link=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminQuickAccesses\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Administracja - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminQuickAccesses\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSearch&amp;token=1ffa1333bd0f13d8635d959ca7dc0bfe\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-exp";
        // line 201
        echo "anded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', funct";
        // line 222
        echo "ion() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Anuluj</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Szybki dostęp</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/currencies/?-s-Jqz1pJbgIAL_lAlJDOUG92lt6c&amp;token=cf8be3ca1998d7c2061a18fe25d4af11\"
             data-item=\"Aktualizacja Waluty\"
    >Aktualizacja Waluty</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/performance/?-s-Jqz1pJbgIAL_lAlJDOUG92lt6c&amp;token=cf8be3ca1998d7c2061a18fe25d4af11\"
             data-item=\"Czyszczenie pamięci podręcznej\"
    >Czyszczenie pamięci podręcznej</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminGformdashboard&amp;token=1c8721feee4b4edd3d870c5ddd079b50\"
             data-item=\"Kreator formularzy\"
    >Kreator formularzy</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminModules&amp;configure=ps_facetedsearch&amp;token=64b61f9246d35dae2a5b5807611d3d13\"
             data-item=\"Odbudowa indeksów\"
    >Odbudowa indeksów</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"36\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/administration\"
      data-post-link=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminQuickAccesses\"
      data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
      data-link=\"Administracja - Lista\"
    >
      <i class=\"material-icons\">a";
        // line 260
        echo "dd_circle</i>
      Dodaj aktualną stronę do Szybkiego dostępu
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminQuickAccesses\">
    <i class=\"material-icons\">settings</i>
    Zarządzaj Szybkiem dostępem
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>Wyświetlane są wszystkie błędy i komunikaty PHP. Gdy nie jest już potrzebny, &lt;strong&gt;wyłącz&lt;/strong&gt; ten tryb.</p>\"
             href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/performance/\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Tryb debugowania</span>
          </a>
        </div>
      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
               ";
        // line 302
        echo "       &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/maintenance/\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Przerwa techniczna</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://sklep.cezos.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Pokaż sklep Cezos</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-noti";
        // line 351
        echo "fications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"not";
        // line 400
        echo "if\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://www.gravatar.com/avatar/3c380bc8127011f99b43c170533d7246?d=https%3A%2F%2Fsklep.cezos.com%2Fimg%2Fpr%2Fdefault.jpg\" alt=\"Marcin\" /></span>
        <span class=\"employee_profile\">Witaj ponownie Marcin</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/employees/7/edit\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=sklep.cezos.com&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noop";
        // line 443
        echo "ener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Zarządzaj swoim kontem PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-pl&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Szkolenie
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/pl/eksperci?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-pl&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-pl&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-pl&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centrum Pomocy
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminLogin&amp;logout=1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
        ";
        // line 466
        echo "</div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/employees/toggle-navigation\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminDashboard\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminDashboard\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzedaż</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/orders/\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                         ";
        // line 514
        echo "                                           keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/orders/\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/orders/invoices/\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/orders/credit-slips/\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDelive";
        // line 545
        echo "rySlip\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/orders/delivery-slips/\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCarts\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin270jq8jrlc4glrd2ocx/index.php/sell/catalog/products\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminPr";
        // line 578
        echo "oducts\">
                                <a href=\"/admin270jq8jrlc4glrd2ocx/index.php/sell/catalog/products\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/catalog/categories\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/catalog/monitoring/\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminAttributesGroups\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"sub";
        // line 610
        echo "tab-AdminParentManufacturers\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/catalog/brands/\" class=\"link\"> Marki &amp; Dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/attachments/\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCartRules\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/stocks/\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                    ";
        // line 643
        echo "  
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/customers/\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/customers/\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/addresses/\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
 ";
        // line 675
        echo "                 
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCustomerThreads\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obsługa klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCustomerThreads\" class=\"link\"> Obsługa klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/customer-service/order-messages/\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                             ";
        // line 705
        echo "     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminReturn\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/metrics/legacy/stats\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/metrics/legacy/stats\" class=\"link\"> Statystyki
                                </a>
                              </li>

           ";
        // line 738
        echo "                                                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminMetricsController\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/metrics\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/modules/catalog/\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
             ";
        // line 776
        echo "                 <li class=\"link-leveltwo\" data-submenu=\"138\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/modules/catalog/\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/modules/manage\" class=\"link\"> Menedżer modułów
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"196\" id=\"subtab-AdminSmartargetSocialFollowBar\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSmartargetSocialFollowBar\" class=\"link\"> Smartarget Social Follow Bar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glr";
        // line 804
        echo "d2ocx/index.php/improve/design/themes/\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygląd
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminThemesParent\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/design/themes/\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/themes/catalog/\" class=\"link\"> Katalog szablonów
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/des";
        // line 834
        echo "ign/mail_theme/\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/design/cms-pages/\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/design/modules/positions/\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminImages\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin270jq8jrlc4glrd2ocx/index.php/modules/link-wi";
        // line 866
        echo "dget/list\" class=\"link\"> Lista linków
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCarriers\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysyłka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCarriers\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"https://sklep.cezos.";
        // line 899
        echo "com/admin270jq8jrlc4glrd2ocx/index.php/improve/shipping/preferences/\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminMbeConfiguration\" class=\"link\"> MBE - Konfiguracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminMbeShipping\" class=\"link\"> MBE - Przesyłki
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminParentInPostShipments\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminInPostConfirmedShipments\" class=\"link\"> Przesyłki InPost
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
  ";
        // line 931
        echo "                                                    
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/payment/payment_methods\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Płatność
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/payment/payment_methods\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/payment/preferences\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
   ";
        // line 962
        echo "                                           
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/localization/\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Międzynarodowy
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/localization/\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/zones/\" class=\"link\"> Położenie
                                </a>
                              </li>

                                             ";
        // line 993
        echo "                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/taxes/\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/translations/settings\" class=\"link\"> Tłumaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"151\" id=\"subtab-Marketing\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminPsxMktgWithGoogleModule\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                           ";
        // line 1025
        echo "   <ul id=\"collapse-151\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminPsxMktgWithGoogleModule\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"175\" id=\"subtab-AdminBlogForPrestaShop\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogPosts\" class=\"link\">
                      <i class=\"material-icons mi-note\">note</i>
                      <span>
                      Blog dla PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-175\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminSimpleBlogPosts\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controlle";
        // line 1055
        echo "r=AdminSimpleBlogPosts\" class=\"link\"> Wpisy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"177\" id=\"subtab-AdminSimpleBlogCategories\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogCategories\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"178\" id=\"subtab-AdminSimpleBlogComments\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogComments\" class=\"link\"> Komentarze
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"179\" id=\"subtab-AdminSimpleBlogTags\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogTags\" class=\"link\"> Tagi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-AdminSimpleBlogAuthors\">
                                <a href=\"";
        // line 1087
        echo "https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogAuthors\" class=\"link\"> Autorzy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-AdminSimpleBlogSettings\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogSettings\" class=\"link\"> Ustawienia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/preferences/preferences\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                          ";
        // line 1125
        echo "                    <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/preferences/preferences\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/order-preferences/\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/product-preferences/\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/co";
        // line 1154
        echo "nfigure/shop/customer-preferences/\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/contacts/\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/seo-urls/\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSearchConf\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_subme";
        // line 1188
        echo "nu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/system-information/\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/system-information/\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/performance/\" class=\"link\"> Wydajność
                                </a>
                              </li>

                                                                                  
                              
                                                            
           ";
        // line 1218
        echo "                   <li class=\"link-leveltwo link-active\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/administration/\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/emails/\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/import/\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/employees/\" class=\"link\"> Zespół
                                </a>
                              </li>

                                                                                  
                              
                               ";
        // line 1249
        echo "                             
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/sql-requests/\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/logs/\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/webservice-keys/\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/feature-flags/\" class=\"link\"> Nowe i eksperymentalne funkcje
    ";
        // line 1276
        echo "                            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/security/\" class=\"link\"> Bezpieczeństwo
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"125\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminKlaviyoPsConfig\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"185\" id=\"tab-AdminSensbitGls\">
                <span class=\"title\">GLS</span>
            </li>

                              
                  
                                                      ";
        // line 1316
        echo "
                  
                  <li class=\"link-levelone\" data-submenu=\"186\" id=\"subtab-AdminSensbitGlsOrder\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsOrder\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"187\" id=\"subtab-AdminSensbitGlsPackage\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsPackage\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Przesyłki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"188\" id=\"subtab-AdminSensbitGlsOrderCarrier\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensb";
        // line 1349
        echo "itGlsOrderCarrier\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Przesyłki do nadania
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"189\" id=\"subtab-AdminSensbitGlsTemplate\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsTemplate\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Szablony przesyłek
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"190\" id=\"subtab-AdminSensbitGlsPoint\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsPoint\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Punkty odbioru przesyłek
                      </spa";
        // line 1383
        echo "n>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"191\" id=\"subtab-AdminSensbitGlsStatus\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsStatus\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Statusy przesyłek
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"192\" id=\"subtab-AdminSensbitGlsApi\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsApi\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      API
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                      ";
        // line 1416
        echo "      </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"193\" id=\"subtab-AdminSensbitGlsSettings\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsSettings\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Ustawienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Zaawansowane</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/administration/\" aria-current=\"page\">Administracja</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Administracja          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
   ";
        // line 1473
        echo "                data-target=\"#right-sidebar\"
                   data-url=\"/admin270jq8jrlc4glrd2ocx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminAdminPreferences%253Fversion%253D8.1.0%2526country%253Dpl/Pomoc\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin270jq8jrlc4glrd2ocx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminAdminPreferences%253Fversion%253D8.1.0%2526country%253Dpl/Pomoc\"
            >
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  <!-- begin /home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Uprość zarządzanie sklepem',
        'Close': 'Zamknij',
      },
      recommendedModulesUrl: '/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/modules/recommended/?tabClassName=AdminAdminPreferences&recommendation_format=modal',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end /home/qisogexqbz/domains/cezos.exis24.pl/public_h";
        // line 1522
        echo "tml/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1536
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminDashboard\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1570
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 130
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1536
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1570
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__07d7208348ac4d0e559c77b218cb30bbefcb4bbee2f4878f8d3da6e9f51cf251";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1841 => 1570,  1772 => 1536,  1737 => 130,  1722 => 1570,  1682 => 1536,  1666 => 1522,  1615 => 1473,  1556 => 1416,  1521 => 1383,  1485 => 1349,  1450 => 1316,  1408 => 1276,  1379 => 1249,  1346 => 1218,  1314 => 1188,  1278 => 1154,  1247 => 1125,  1207 => 1087,  1173 => 1055,  1141 => 1025,  1107 => 993,  1074 => 962,  1041 => 931,  1007 => 899,  972 => 866,  938 => 834,  906 => 804,  876 => 776,  836 => 738,  801 => 705,  769 => 675,  735 => 643,  700 => 610,  666 => 578,  631 => 545,  598 => 514,  548 => 466,  523 => 443,  478 => 400,  427 => 351,  376 => 302,  332 => 260,  292 => 222,  269 => 201,  230 => 164,  191 => 130,  184 => 125,  148 => 91,  127 => 72,  96 => 43,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Administracja • Cezos - sklep internetowy sklep@cezos.com</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminAdminPreferences\\';
    var iso_user = \\'pl\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'pl\\';
    var full_cldr_language_code = \\'pl-PL\\';
    var country_iso_code = \\'PL\\';
    var _PS_VERSION_ = \\'8.1.0\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your store.\\';
    var order_number_msg = \\'Numer zamówienia: \\';
    var total_msg = \\'Razem: \\';
    var from_msg = \\'Od: \\';
    var see_order_msg = \\'Zobacz to zamówienie\\';
    var new_customer_msg = \\'A new customer registered on your store.\\';
    var customer_name_msg = \\'Nazwa klienta: \\';
    var new_msg = \\'A new message was posted on your store.\\';
    var see_msg = \\'Przeczytaj tą wiadomość\\';
    var token = \\'b4d1cc7311caf8f027c04414fc5de9ea\\';
    var currentIndex = \\'index.php?controller=AdminAdminPreferences\\';
    var employee_token = \\'0faa129d727e925589d632b960a85204\\';
    var choose_language_translate = \\'Wybierz język:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/modules/manage\\';
    var admin_notification_get_link = \\'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/common/notifications\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/common/notifications/ack\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Aktualizacja powiodła się\\';
    var search_produc' | raw }}{{ 't_msg = \\'Szukaj produktu\\';
  </script>



<link
      rel=\"preload\"
      href=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.0dd51c02.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin270jq8jrlc4glrd2ocx/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/sensbitgls/views/css/admin8.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/sensbitgls/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/sensbitgls/views/css/admin1770.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/sensbitgls/views/css/map.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin@latest/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ph_simpleblog/css/simpleblog-admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/admin270jq8' | raw }}{{ 'jrlc4glrd2ocx\\\\/\";
var baseDir = \"\\\\/\";
var changeFormLanguageUrl = \"https:\\\\/\\\\/sklep.cezos.com\\\\/admin270jq8jrlc4glrd2ocx\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\\\u0142\",\"name\":\"Z\\\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\\\u0142\",\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https:/' | raw }}{{ '/assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin270jq8jrlc4glrd2ocx/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/przelewy24/views/js/admin_common.js?v=1.0.13\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/validate.js\"></script>
<script type=\"text/javascript\" src=\"/modules/sensbitgls/views/js/admin.js\"></script>
<script type=\"text/javascript\" src=\"/modules/sensbitgls/views/js/map.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"https:\\\\/\\\\/sklep.cezos.com\\\\/admin270jq8jrlc4glrd2ocx\\\\/index.php?controller=AdminGamification\";
            var current_id_tab = 95;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/common/notifications\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
                sensbitgls.setOptions({
                    module: \\'sensbitgls\\',
      ' | raw }}{{ '              ajax_url_packages: \\'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsPackage\\',
                    validate_fields_length: 0
                });
            </script>

' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-pl adminadminpreferences developer-mode\"
  data-base-url=\"/admin270jq8jrlc4glrd2ocx/index.php\"  data-token=\"rtoFu0HKsQuVxR-trPfntzK1f0A1Fu2wNjyKS6W-7eA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminDashboard\"></a>
      <span id=\"shop_version\">8.1.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/currencies/?-s-Jqz1pJbgIAL_lAlJDOUG92lt6c&amp;token=cf8be3ca1998d7c2061a18fe25d4af11\"
                 data-item=\"Aktualizacja Waluty\"
      >Aktualizacja Waluty</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/performance/?-s-Jqz1pJbgIAL_lAlJDOUG92lt6c&amp;token=cf8be3ca1998d7c2061a18fe25d4af11\"
                 data-item=\"Czyszczenie pamięci podręcznej\"
      >Czyszczenie pamięci podręcznej</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminGformdashboard&amp;token=1c8721feee4b4edd3d870c5ddd079b50\"
                 data-item=\"Kreator formularzy\"
      >Kreator formularzy</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=Adm' | raw }}{{ 'inModules&amp;configure=ps_facetedsearch&amp;token=64b61f9246d35dae2a5b5807611d3d13\"
                 data-item=\"Odbudowa indeksów\"
      >Odbudowa indeksów</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"37\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/administration\"
        data-post-link=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminQuickAccesses\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Administracja - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminQuickAccesses\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSearch&amp;token=1ffa1333bd0f13d8635d959ca7dc0bfe\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-exp' | raw }}{{ 'anded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', funct' | raw }}{{ 'ion() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Anuluj</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Szybki dostęp</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/currencies/?-s-Jqz1pJbgIAL_lAlJDOUG92lt6c&amp;token=cf8be3ca1998d7c2061a18fe25d4af11\"
             data-item=\"Aktualizacja Waluty\"
    >Aktualizacja Waluty</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/performance/?-s-Jqz1pJbgIAL_lAlJDOUG92lt6c&amp;token=cf8be3ca1998d7c2061a18fe25d4af11\"
             data-item=\"Czyszczenie pamięci podręcznej\"
    >Czyszczenie pamięci podręcznej</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminGformdashboard&amp;token=1c8721feee4b4edd3d870c5ddd079b50\"
             data-item=\"Kreator formularzy\"
    >Kreator formularzy</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminModules&amp;configure=ps_facetedsearch&amp;token=64b61f9246d35dae2a5b5807611d3d13\"
             data-item=\"Odbudowa indeksów\"
    >Odbudowa indeksów</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"36\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/administration\"
      data-post-link=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminQuickAccesses\"
      data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
      data-link=\"Administracja - Lista\"
    >
      <i class=\"material-icons\">a' | raw }}{{ 'dd_circle</i>
      Dodaj aktualną stronę do Szybkiego dostępu
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminQuickAccesses\">
    <i class=\"material-icons\">settings</i>
    Zarządzaj Szybkiem dostępem
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>Wyświetlane są wszystkie błędy i komunikaty PHP. Gdy nie jest już potrzebny, &lt;strong&gt;wyłącz&lt;/strong&gt; ten tryb.</p>\"
             href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/performance/\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Tryb debugowania</span>
          </a>
        </div>
      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
               ' | raw }}{{ '       &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/maintenance/\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Przerwa techniczna</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://sklep.cezos.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Pokaż sklep Cezos</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-noti' | raw }}{{ 'fications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"not' | raw }}{{ 'if\" href=\\'order_url\\'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://www.gravatar.com/avatar/3c380bc8127011f99b43c170533d7246?d=https%3A%2F%2Fsklep.cezos.com%2Fimg%2Fpr%2Fdefault.jpg\" alt=\"Marcin\" /></span>
        <span class=\"employee_profile\">Witaj ponownie Marcin</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/employees/7/edit\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=sklep.cezos.com&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noop' | raw }}{{ 'ener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Zarządzaj swoim kontem PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-pl&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Szkolenie
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/pl/eksperci?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-pl&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-pl&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-pl&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centrum Pomocy
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminLogin&amp;logout=1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
        ' | raw }}{{ '</div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/employees/toggle-navigation\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminDashboard\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminDashboard\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzedaż</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/orders/\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                         ' | raw }}{{ '                                           keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/orders/\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/orders/invoices/\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/orders/credit-slips/\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDelive' | raw }}{{ 'rySlip\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/orders/delivery-slips/\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCarts\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin270jq8jrlc4glrd2ocx/index.php/sell/catalog/products\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminPr' | raw }}{{ 'oducts\">
                                <a href=\"/admin270jq8jrlc4glrd2ocx/index.php/sell/catalog/products\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/catalog/categories\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/catalog/monitoring/\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminAttributesGroups\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"sub' | raw }}{{ 'tab-AdminParentManufacturers\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/catalog/brands/\" class=\"link\"> Marki &amp; Dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/attachments/\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCartRules\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/stocks/\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                    ' | raw }}{{ '  
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/customers/\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/customers/\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/addresses/\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
 ' | raw }}{{ '                 
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCustomerThreads\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obsługa klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCustomerThreads\" class=\"link\"> Obsługa klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/customer-service/order-messages/\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                             ' | raw }}{{ '     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminReturn\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/metrics/legacy/stats\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/metrics/legacy/stats\" class=\"link\"> Statystyki
                                </a>
                              </li>

           ' | raw }}{{ '                                                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminMetricsController\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/metrics\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/modules/catalog/\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
             ' | raw }}{{ '                 <li class=\"link-leveltwo\" data-submenu=\"138\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/modules/catalog/\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/modules/manage\" class=\"link\"> Menedżer modułów
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"196\" id=\"subtab-AdminSmartargetSocialFollowBar\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSmartargetSocialFollowBar\" class=\"link\"> Smartarget Social Follow Bar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glr' | raw }}{{ 'd2ocx/index.php/improve/design/themes/\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygląd
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminThemesParent\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/design/themes/\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/themes/catalog/\" class=\"link\"> Katalog szablonów
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/des' | raw }}{{ 'ign/mail_theme/\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/design/cms-pages/\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/design/modules/positions/\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminImages\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin270jq8jrlc4glrd2ocx/index.php/modules/link-wi' | raw }}{{ 'dget/list\" class=\"link\"> Lista linków
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCarriers\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysyłka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminCarriers\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"https://sklep.cezos.' | raw }}{{ 'com/admin270jq8jrlc4glrd2ocx/index.php/improve/shipping/preferences/\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminMbeConfiguration\" class=\"link\"> MBE - Konfiguracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminMbeShipping\" class=\"link\"> MBE - Przesyłki
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminParentInPostShipments\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminInPostConfirmedShipments\" class=\"link\"> Przesyłki InPost
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
  ' | raw }}{{ '                                                    
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/payment/payment_methods\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Płatność
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/payment/payment_methods\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/payment/preferences\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
   ' | raw }}{{ '                                           
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/localization/\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Międzynarodowy
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/localization/\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/zones/\" class=\"link\"> Położenie
                                </a>
                              </li>

                                             ' | raw }}{{ '                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/taxes/\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/international/translations/settings\" class=\"link\"> Tłumaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"151\" id=\"subtab-Marketing\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminPsxMktgWithGoogleModule\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                           ' | raw }}{{ '   <ul id=\"collapse-151\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminPsxMktgWithGoogleModule\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"175\" id=\"subtab-AdminBlogForPrestaShop\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogPosts\" class=\"link\">
                      <i class=\"material-icons mi-note\">note</i>
                      <span>
                      Blog dla PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-175\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminSimpleBlogPosts\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controlle' | raw }}{{ 'r=AdminSimpleBlogPosts\" class=\"link\"> Wpisy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"177\" id=\"subtab-AdminSimpleBlogCategories\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogCategories\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"178\" id=\"subtab-AdminSimpleBlogComments\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogComments\" class=\"link\"> Komentarze
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"179\" id=\"subtab-AdminSimpleBlogTags\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogTags\" class=\"link\"> Tagi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-AdminSimpleBlogAuthors\">
                                <a href=\"' | raw }}{{ 'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogAuthors\" class=\"link\"> Autorzy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-AdminSimpleBlogSettings\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogSettings\" class=\"link\"> Ustawienia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/preferences/preferences\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                          ' | raw }}{{ '                    <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/preferences/preferences\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/order-preferences/\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/product-preferences/\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/co' | raw }}{{ 'nfigure/shop/customer-preferences/\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/contacts/\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/seo-urls/\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSearchConf\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_subme' | raw }}{{ 'nu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/system-information/\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/system-information/\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/performance/\" class=\"link\"> Wydajność
                                </a>
                              </li>

                                                                                  
                              
                                                            
           ' | raw }}{{ '                   <li class=\"link-leveltwo link-active\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/administration/\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/emails/\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/import/\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/employees/\" class=\"link\"> Zespół
                                </a>
                              </li>

                                                                                  
                              
                               ' | raw }}{{ '                             
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/sql-requests/\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/logs/\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/webservice-keys/\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/feature-flags/\" class=\"link\"> Nowe i eksperymentalne funkcje
    ' | raw }}{{ '                            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/security/\" class=\"link\"> Bezpieczeństwo
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"125\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminKlaviyoPsConfig\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"185\" id=\"tab-AdminSensbitGls\">
                <span class=\"title\">GLS</span>
            </li>

                              
                  
                                                      ' | raw }}{{ '
                  
                  <li class=\"link-levelone\" data-submenu=\"186\" id=\"subtab-AdminSensbitGlsOrder\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsOrder\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"187\" id=\"subtab-AdminSensbitGlsPackage\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsPackage\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Przesyłki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"188\" id=\"subtab-AdminSensbitGlsOrderCarrier\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensb' | raw }}{{ 'itGlsOrderCarrier\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Przesyłki do nadania
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"189\" id=\"subtab-AdminSensbitGlsTemplate\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsTemplate\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Szablony przesyłek
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"190\" id=\"subtab-AdminSensbitGlsPoint\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsPoint\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Punkty odbioru przesyłek
                      </spa' | raw }}{{ 'n>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"191\" id=\"subtab-AdminSensbitGlsStatus\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsStatus\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Statusy przesyłek
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"192\" id=\"subtab-AdminSensbitGlsApi\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsApi\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      API
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                      ' | raw }}{{ '      </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"193\" id=\"subtab-AdminSensbitGlsSettings\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsSettings\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Ustawienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Zaawansowane</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/administration/\" aria-current=\"page\">Administracja</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Administracja          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
   ' | raw }}{{ '                data-target=\"#right-sidebar\"
                   data-url=\"/admin270jq8jrlc4glrd2ocx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminAdminPreferences%253Fversion%253D8.1.0%2526country%253Dpl/Pomoc\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin270jq8jrlc4glrd2ocx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminAdminPreferences%253Fversion%253D8.1.0%2526country%253Dpl/Pomoc\"
            >
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  <!-- begin /home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        \\'Recommended Modules and Services\\': \\'Uprość zarządzanie sklepem\\',
        \\'Close\\': \\'Zamknij\\',
      },
      recommendedModulesUrl: \\'/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/modules/recommended/?tabClassName=AdminAdminPreferences&recommendation_format=modal\\',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end /home/qisogexqbz/domains/cezos.exis24.pl/public_h' | raw }}{{ 'tml/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminDashboard\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__07d7208348ac4d0e559c77b218cb30bbefcb4bbee2f4878f8d3da6e9f51cf251", "");
    }
}
