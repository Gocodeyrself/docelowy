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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig */
class __TwigTemplate_35a224d7648272f5995e39867aec07505b079c319f1a88e04c09ab00c965be6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig"));

        // line 25
        echo "
<div class=\"title-content\">
  <h1 class=\"d-inline\">
    <strong class=\"text-muted\" data-role=\"order-id\">#";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "</strong>
    <strong data-role=\"order-reference\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 29, $this->source); })()), "reference", [], "any", false, false, false, 29), "html", null, true);
        echo "</strong>
  </h1>

  <p class=\"lead d-inline\">
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("from", [], "Admin.Global"), "html", null, true);
        echo "

    ";
        // line 35
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 35, $this->source); })()), "customer", [], "any", false, false, false, 35)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 35, $this->source); })()), "customer", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), 0)))) {
            // line 36
            echo "      ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 36, $this->source); })()), "customer", [], "any", false, false, false, 36), "firstName", [], "any", false, false, false, 36), "html", null, true);
            echo "
      ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 37, $this->source); })()), "customer", [], "any", false, false, false, 37), "lastName", [], "any", false, false, false, 37), "html", null, true);
            echo "
    ";
        } else {
            // line 39
            echo "      ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleted customer", [], "Admin.Global"), "html", null, true);
            echo "
    ";
        }
        // line 41
        echo "  </p>

  <span class=\"badge rounded badge-dark ml-2 mr-2 font-size-100\">
    ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 44, $this->source); })()), "prices", [], "any", false, false, false, 44), "totalAmountFormatted", [], "any", false, false, false, 44), "html", null, true);
        echo "
  </span>

  <p class=\"lead d-inline\">
    ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->dateFormatLite(twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 48, $this->source); })()), "createdAt", [], "any", false, false, false, 48)), "html", null, true);
        echo "
    <span class=\"text-muted\">
      ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("at", [], "Admin.Global"), "html", null, true);
        echo "

      ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 52, $this->source); })()), "createdAt", [], "any", false, false, false, 52), "H:i:s"), "html", null, true);
        echo "
    </span>
  </p>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 52,  99 => 50,  94 => 48,  87 => 44,  82 => 41,  76 => 39,  71 => 37,  66 => 36,  64 => 35,  59 => 33,  52 => 29,  48 => 28,  43 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

<div class=\"title-content\">
  <h1 class=\"d-inline\">
    <strong class=\"text-muted\" data-role=\"order-id\">#{{ orderForViewing.id }}</strong>
    <strong data-role=\"order-reference\">{{ orderForViewing.reference }}</strong>
  </h1>

  <p class=\"lead d-inline\">
    {{ 'from'|trans({}, 'Admin.Global') }}

    {% if orderForViewing.customer is not null and orderForViewing.customer.id != 0 %}
      {{ orderForViewing.customer.firstName }}
      {{ orderForViewing.customer.lastName }}
    {% else %}
      {{ 'Deleted customer'|trans({}, 'Admin.Global') }}
    {% endif %}
  </p>

  <span class=\"badge rounded badge-dark ml-2 mr-2 font-size-100\">
    {{ orderForViewing.prices.totalAmountFormatted }}
  </span>

  <p class=\"lead d-inline\">
    {{ orderForViewing.createdAt|date_format_lite }}
    <span class=\"text-muted\">
      {{ 'at'|trans({}, 'Admin.Global') }}

      {{ orderForViewing.createdAt|date('H:i:s') }}
    </span>
  </p>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig", "/home/qisogexqbz/domains/cezos.exis24.pl/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/header.html.twig");
    }
}
