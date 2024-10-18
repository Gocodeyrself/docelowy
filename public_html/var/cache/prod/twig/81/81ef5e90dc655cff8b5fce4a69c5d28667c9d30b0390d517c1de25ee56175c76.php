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

/* __string_template__9f6b9699a58026120d5916f25524811ab58661bf12346dd23018c0e587023423 */
class __TwigTemplate_bbca92ef049c6e384b7472ffa95e02b8709645a13035557dd279a19ef6744759 extends Template
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

<title>Moduły • sklep.cezos.com</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '8.1.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Nowe zamówienie zostało złożone w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'W twoim sklepie zarejestrował się nowy klient.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'W twoim sklepie została opublikowana nowa wiadomość.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = '68d675a771ce6b57ed9bb74be63ca6f2';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '0faa129d727e925589d632b960a85204';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = 'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/modules/manage';
    var admin_notification_get_link = 'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/common/notifications';
    var admin_notification_push_link = adminNotificationPushLink = 'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/common/notifications/ack';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła się';
    var search_product_ms";
        // line 43
        echo "g = 'Szukaj produktu';
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
      <link href=\"/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin270jq8jrlc4glrd2ocx/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/sensbitgls/views/css/admin8.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/sensbitgls/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/sensbitgls/views/css/admin1770.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/sensbitgls/views/css/map.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gformbuilderpro/views/css/admin/tab_style.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin@latest/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=";
        // line 70
        echo "\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ph_simpleblog/css/simpleblog-admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var ad = \"\";
var baseAdminDir = \"\\/admin270jq8jrlc4glrd2ocx\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language\";
var copyToClipboard_success = \"Copy to clipboard successfully\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var gdefault_language = 1;
var gformbuilderpro_module_url = \"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php?controller=AdminGformrequest\";
var gtitleform = \"Form Title\";
var iso = \"pl\";
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psversion15 = 1;
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<scri";
        // line 95
        echo "pt type=\"text/javascript\" src=\"/js/admin.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/admin270jq8jrlc4glrd2ocx/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/connection-toolbar.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
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
<script type=\"text/javascript\" src=\"/modules/gformbuilderpro/views/js/admin/unreadreceived.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/";
        // line 116
        echo "ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php?controller=AdminGamification\";
            var current_id_tab = 40;
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
                    ajax_url_packages: 'https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsPackage',
                    validate_fields_length: 0
                });
            </script>

";
        // line 142
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl adminmodulesmanage\"
  data-base-url=\"/admin270jq8jrlc4glrd2ocx/index.php\"  data-token=\"hGYBj4RDXiC4-l3VGOaYQgC_aIOUdF320G6embN9N34\">

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
         href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminGformdashboard&amp;token=ab36a937f835f0a55ebbf16422ab1d6d\"
                 data-item=\"Kreator formularzy\"
      >Kreator formularzy</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminModules&amp;conf";
        // line 176
        echo "igure=ps_facetedsearch&amp;token=64b61f9246d35dae2a5b5807611d3d13\"
                 data-item=\"Odbudowa indeksów\"
      >Odbudowa indeksów</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"74\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminQuickAccesses\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Moduły - Lista\"
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
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </but";
        // line 215
        echo "ton>
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
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeCl";
        // line 235
        echo "ass('collapsed');
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
       href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminGformdashboard&amp;token=ab36a937f835f0a55ebbf16422ab1d6d\"
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
      data-rand=\"109\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/manage\"
      data-post-link=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminQuickAccesses\"
      data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
      data-link=\"Moduły - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Dodaj aktualną stronę do Szybkiego dostępu
   ";
        // line 274
        echo " </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminQuickAccesses\">
    <i class=\"material-icons\">settings</i>
    Zarządzaj Szybkiem dostępem
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
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
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
           ";
        // line 327
        echo " </a>
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
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong ";
        // line 375
        echo "class=\"float-sm-right\">_total_paid_</strong>
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

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=sklep.cezos.com&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Zarządzaj swoim kontem PrestaShop
    ";
        // line 417
        echo "    </a>
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
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class";
        // line 444
        echo "=\"menu-collapse\" data-toggle-url=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/employees/toggle-navigation\">
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
                                                                    keyboard_arrow_down
                                                         ";
        // line 487
        echo "   </i>
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

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/sell/orders";
        // line 518
        echo "/delivery-slips/\" class=\"link\"> Druk wysyłki
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
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin270jq8jrlc4glrd2ocx/index.php/sell/catalog/products\" class=\"link";
        // line 551
        echo "\"> Produkty
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

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx";
        // line 583
        echo "/index.php/sell/catalog/brands/\" class=\"link\"> Marki &amp; Dostawcy
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
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCu";
        // line 617
        echo "stomer\">
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
                                              
                  
                                                      
                  
                  <li class=";
        // line 650
        echo "\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
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
        // line 680
        echo "        <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
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
        // line 712
        echo "                                           
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminMetricsController\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/metrics\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/modules/catalog/\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" da";
        // line 748
        echo "ta-submenu=\"138\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/modules/catalog/\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
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
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/design/th";
        // line 776
        echo "emes/\" class=\"link\">
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
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/design/mail_theme/\" class=\"link\"> Sz";
        // line 806
        echo "ablon maila
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
                                <a href=\"/admin270jq8jrlc4glrd2ocx/index.php/modules/link-widget/list\" class=\"link\"> Lista li";
        // line 838
        echo "nków
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
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/inde";
        // line 871
        echo "x.php/improve/shipping/preferences/\" class=\"link\"> Preferencje
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
        // line 903
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
        // line 934
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
        // line 965
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
                                              <ul id=\"collapse-151\" class=\"s";
        // line 997
        echo "ubmenu panel-collapse\">
                                                      
                              
                                                            
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
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogPosts\" class=\"li";
        // line 1027
        echo "nk\"> Wpisy
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
                                <a href=\"https://sklep.cezos.com/admin270j";
        // line 1059
        echo "q8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogAuthors\" class=\"link\"> Autorzy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-AdminSimpleBlogSettings\">
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSimpleBlogSettings\" class=\"link\"> Ustawienia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
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
                                              <ul id=\"collapse-71\" clas";
        // line 1097
        echo "s=\"submenu panel-collapse\">
                                                      
                              
                                                            
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
                                <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/shop/customer-preferences/\" class=\"li";
        // line 1126
        echo "nk\"> Klienci
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
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a hre";
        // line 1161
        echo "f=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/system-information/\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
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

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
          ";
        // line 1191
        echo "                      <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/configure/advanced/administration/\" class=\"link\"> Administracja
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

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-Admi";
        // line 1222
        echo "nParentRequestSql\">
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
                                </a>
                              </li>

                                                  ";
        // line 1251
        echo "                                
                              
                                                            
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

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"186\" id=\"subtab-AdminSensbitGlsOrder\">
   ";
        // line 1291
        echo "                 <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsOrder\" class=\"link\">
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
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminSensbitGlsOrderCarrier\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
            ";
        // line 1323
        echo "          <span>
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
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                       ";
        // line 1357
        echo "                                             keyboard_arrow_down
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
                                                            </i>
                                            </a>
                                        </li>
              ";
        // line 1391
        echo "                                
                  
                                                      
                  
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
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"204\" id=\"tab-AdminGformbuilderpro\">
                <span class=\"title\">Form Builder Pro</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"205\" id=\"subtab-AdminGformdashboard\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminGformdashboard\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Pulpit
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
      ";
        // line 1430
        echo "                                  </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"206\" id=\"subtab-AdminGformconfig\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminGformconfig\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"207\" id=\"subtab-AdminGformmanager\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminGformmanager\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Forms
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"208\" id=\"subtab-Admin";
        // line 1465
        echo "Gformrequest\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminGformrequest\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Received Data
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"209\" id=\"subtab-AdminGformrequestexport\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminGformrequestexport\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      CSV Export
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"210\" id=\"subtab-AdminGformanalytics\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php?controller=AdminGformanalytics\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
         ";
        // line 1498
        echo "             <span>
                      Analytics
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
                      <li class=\"breadcrumb-item\">Menedżer modułów</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/modules/manage\" aria-current=\"page\">Moduły</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Moduły          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Załaduj moduł\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Załaduj moduł
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin270jq8jrlc4glrd2";
        // line 1552
        echo "ocx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dpl/Pomoc\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/modules/manage\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Moduły
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/modules/alerts\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Powiadomienia
                      <span class=\"notification-container\">
 ";
        // line 1579
        echo "                       <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://sklep.cezos.com/admin270jq8jrlc4glrd2ocx/index.php/improve/modules/updates\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Aktualizacje
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ";
        // line 1591
        echo "                                                                                                                                                                                                                                                                                                                                      </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Załaduj moduł\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Załaduj moduł
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin270jq8jrlc4glrd2ocx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D8.1.0%2526country%253Dpl/Pomoc\"
            >
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        <script>
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"EUR\",\"iso_lang\":\"pl\",\"iso_code\":\"pl\",\"shop_version\":\"8.1.0\",\"shop_url\":\"https:\\/\\/sklep.cezos.com\",\"shop_u";
        // line 1630
        echo "uid\":\"382f9b10-a0f5-4eac-8a7b-16048c14b7ad\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHBzOi8vc2tsZXAuY2V6b3MuY29tIiwic2hvcF91dWlkIjoiMzgyZjliMTAtYTBmNS00ZWFjLThhN2ItMTYwNDhjMTRiN2FkIn0.oXwRgyAjxyZwGIGOt-_RogwbG9ob8Ka4O1qtS5hC9AM\",\"mbo_version\":\"4.11.3\",\"mbo_reset_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/ps_mbo\",\"user_id\":\"7\",\"admin_token\":false,\"refresh_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php?controller=apiSecurityPsMbo\",\"installed_modules\":[{\"id\":0,\"name\":\"inpostshipping\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.7.1\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/inpostshipping\"},{\"id\":0,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.0\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gsitemap\"},{\"id\":0,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"ph_simpleblog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.8.0\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ph_simpleblog\"},{\"id\":0,\"name\":\"klaviyopsautomation\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.3.1\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/klaviyopsautomation\"},{\"id\":0,\"name\":\"ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_wirepayment\"},{\"id\":0,\"name\":\"ps_viewedproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/c";
        echo "onfigure\\/ps_viewedproduct\"},{\"id\":0,\"name\":\"gmomni\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gmomni\"},{\"id\":0,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.4\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_metrics\"},{\"id\":0,\"name\":\"mbeshipping\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.8\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/mbeshipping\"},{\"id\":0,\"name\":\"ps_imageslider\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.1.4\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_imageslider\"},{\"id\":0,\"name\":\"price_alert\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/price_alert\"},{\"id\":0,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_crossselling\"},{\"id\":0,\"name\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_edition_basic\",\"status\":\"enabled__mobile_enabled\",\"version\":\"0.2.0\",\"config_url\":null},{\"id\":0,\"name\":\"glogin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.7.3\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/glogin\"},{\"id\":0,\"name\":\"ps_googleanalytics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_googleanalytics\"},{\"id\":0";
        echo ",\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"ps_newproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.4\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_newproducts\"},{\"id\":0,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.11.3\",\"config_url\":null},{\"id\":0,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"gamification\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.0\",\"config_url\":null},{\"id\":0,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psgdpr\"},{\"id\":0,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_dataprivacy\"},{\"id\":0,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsdata\"},{\"id\":0,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"phblogrecentposts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/phblogrecentposts\"},{\"id\":0,\"name\":\"ps_linklist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.3\",\"con";
        echo "fig_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_linklist\"},{\"id\":0,\"name\":\"fblogin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.9.9\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/fblogin\"},{\"id\":0,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"trustedshopseasyintegration\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.5\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/trustedshopseasyintegration\"},{\"id\":0,\"name\":\"sensbitgls\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.1.0\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/sensbitgls\"},{\"id\":0,\"name\":\"ps_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.2.5\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_accounts\"},{\"id\":0,\"name\":\"seigicookie\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.4.9\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/seigicookie\"},{\"id\":0,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.7\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_shoppingcart\"},{\"id\":0,\"name\":\"ps_featuredproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.5\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_featuredproducts\"},{\"id\":0,\"name\":\"arlg\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/actio";
        echo "n\\/configure\\/arlg\"},{\"id\":0,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.3\",\"config_url\":null},{\"id\":0,\"name\":\"blockreassurance\",\"status\":\"disabled__mobile_disabled\",\"version\":\"5.1.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockreassurance\"},{\"id\":0,\"name\":\"statsbestmanufacturers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"smartargetsocialfollowbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.1\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/smartargetsocialfollowbar\"},{\"id\":0,\"name\":\"ps_checkout\",\"status\":\"uninstalled\",\"version\":\"8.3.4.0\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkout\"},{\"id\":0,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.60.1\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psxmarketingwithgoogle\"},{\"id\":0,\"name\":\"ets_megamenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.5.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ets_megamenu\"},{\"id\":0,\"name\":\"ps_mainmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.4\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_mainmenu\"},{\"id\":0,\"name\":\"ps_banner\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner\"},{\"id\":0,\"name\":\"ps_specials\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/ma";
        echo "nage\\/action\\/configure\\/ps_specials\"},{\"id\":0,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_brandlist\",\"status\":\"disabled__mobile_disabled\",\"version\":\"1.0.3\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_brandlist\"},{\"id\":0,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_distributionapiclient\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"blog_images\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blog_images\"},{\"id\":0,\"name\":\"ps_banner_two\",\"status\":\"enabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner_two\"},{\"id\":0,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_supplierlist\",\"status\":\"disabled__mobile_disabled\",\"version\":\"1.0.6\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_supplierlist\"},{\"id\":0,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.7.1\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailsubscription\"},{\"id\":0,\"name\":\"przelewy24\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.13\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/przelewy24\"},{\"id\":0,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"versio";
        echo "n\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"blockwishlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.1\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockwishlist\"},{\"id\":0,\"name\":\"ps_eventbus\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"cs_invisible_recaptcha_v2\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.0\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/cs_invisible_recaptcha_v2\"},{\"id\":0,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categorytree\"},{\"id\":0,\"name\":\"ps_cashondelivery\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":0,\"name\":\"categoriesbanners\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.2.4\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/categoriesbanners\"},{\"id\":0,\"name\":\"ps_facebook\",\"status\":\"disabled__mobile_disabled\",\"version\":\"1.31.0\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facebook\"},{\"id\":0,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"gformbuilderpro\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gformbuilderpro\"},{\"id\":0,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version";
        echo "\":\"2.0.4\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsforecast\"},{\"id\":0,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_faviconnotificationbo\"},{\"id\":0,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.1\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/contactform\"},{\"id\":0,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_currencyselector\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"productcomments\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/productcomments\"},{\"id\":0,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":null},{\"id\":0,\"name\":\"ps_emailalerts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.4.1\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailalerts\"},{\"id\":0,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_contactinfo\"},{\"id\":0,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"smartsupp\",\"status\":\"uninstalled\",\"version\":\"2.2.0\",\"confi";
        echo "g_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/smartsupp\"},{\"id\":0,\"name\":\"ps_socialfollow\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.3.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_socialfollow\"},{\"id\":0,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_sharebuttons\"},{\"id\":0,\"name\":\"pi_gusloader\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.12.1\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facetedsearch\"},{\"id\":0,\"name\":\"ps_categoryproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.7\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categoryproducts\"},{\"id\":0,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":0,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_bestsellers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_bestsellers\"},{\"id\":0,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customtext\",\"status\":\"disabled__mobile_disabled\",\"version\":\"4.2.1\",\"config_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure";
        echo "\\/ps_customtext\"},{\"id\":0,\"name\":\"autoupgrade\",\"status\":\"uninstalled\",\"version\":\"6.2.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_checkpayment\",\"status\":\"uninstalled\",\"version\":\"2.1.0\",\"config_url\":null}],\"upgradable_modules\":[\"klaviyopsautomation\",\"ps_wirepayment\",\"ps_metrics\",\"mbeshipping\",\"ps_imageslider\",\"ps_edition_basic\",\"ps_googleanalytics\",\"statscheckup\",\"dashactivity\",\"pagesnotfound\",\"dashproducts\",\"ps_linklist\",\"statsproduct\",\"trustedshopseasyintegration\",\"ps_accounts\",\"ps_shoppingcart\",\"ps_themecusto\",\"blockreassurance\",\"psxmarketingwithgoogle\",\"statscatalog\",\"ps_distributionapiclient\",\"ps_emailsubscription\",\"blockwishlist\",\"ps_eventbus\",\"ps_categorytree\",\"ps_facebook\",\"contactform\",\"productcomments\",\"dashtrends\",\"ps_emailalerts\",\"ps_facetedsearch\"],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_manager_updates_tab_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/improve\\/modules\\/updates\",\"module_catalog_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/modules\\/mbo\\/modules\\/catalog\\/\",\"theme_catalog_url\":\"https:\\/\\/sklep.cezos.com\\/admin270jq8jrlc4glrd2ocx\\/index.php\\/modules\\/mbo\\/themes\\/catalog\\/\",\"php_version\":\"7.4.33\",\"shop_creation_date\":\"2023-07-17\",\"shop_business_sector_id\":null,\"shop_business_sector\":null,\"prestaShop_controller_class_name\":\"AdminModulesManage\"};

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
</script>
<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"/admin270jq8jrlc4glrd2ocx/index.php/modules/mbo/modules/catalog/cdc_error\"></div>


                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1643
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
        // line 1677
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 142
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1643
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1677
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__9f6b9699a58026120d5916f25524811ab58661bf12346dd23018c0e587023423";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1881 => 1677,  1860 => 1643,  1849 => 142,  1840 => 1677,  1800 => 1643,  1776 => 1630,  1735 => 1591,  1721 => 1579,  1692 => 1552,  1636 => 1498,  1601 => 1465,  1564 => 1430,  1523 => 1391,  1487 => 1357,  1451 => 1323,  1417 => 1291,  1375 => 1251,  1344 => 1222,  1311 => 1191,  1279 => 1161,  1242 => 1126,  1211 => 1097,  1171 => 1059,  1137 => 1027,  1105 => 997,  1071 => 965,  1038 => 934,  1005 => 903,  971 => 871,  936 => 838,  902 => 806,  870 => 776,  840 => 748,  802 => 712,  768 => 680,  736 => 650,  701 => 617,  665 => 583,  631 => 551,  596 => 518,  563 => 487,  518 => 444,  489 => 417,  445 => 375,  395 => 327,  340 => 274,  299 => 235,  277 => 215,  236 => 176,  197 => 142,  169 => 116,  146 => 95,  119 => 70,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9f6b9699a58026120d5916f25524811ab58661bf12346dd23018c0e587023423", "");
    }
}
