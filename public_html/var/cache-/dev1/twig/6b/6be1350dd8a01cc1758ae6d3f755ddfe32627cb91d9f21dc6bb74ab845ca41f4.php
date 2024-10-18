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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig */
class __TwigTemplate_bac50b6bd542b9b4d2caa36792eb9e10d1ba748828605df28fabb40e5a4ed9e2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig"));

        // line 25
        echo "<div class=\"mt-2 info-block\">
  <div class=\"row\">
    ";
        // line 27
        $context["isNoteOpen"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 27, $this->source); })()), "note", [], "any", false, false, false, 27));
        // line 28
        echo "
    <div class=\"col-md-6\">
      <h3 class=\"mb-0";
        // line 30
        echo (( !(isset($context["isNoteOpen"]) || array_key_exists("isNoteOpen", $context) ? $context["isNoteOpen"] : (function () { throw new RuntimeError('Variable "isNoteOpen" does not exist.', 30, $this->source); })())) ? (" d-print-none") : (""));
        echo "\">
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </h3>
    </div>

    <div class=\"col-md-6 text-right d-print-none\">
      <a href=\"#\"
         class=\"float-right tooltip-link js-order-notes-toggle-btn";
        // line 37
        if ((isset($context["isNoteOpen"]) || array_key_exists("isNoteOpen", $context) ? $context["isNoteOpen"] : (function () { throw new RuntimeError('Variable "isNoteOpen" does not exist.', 37, $this->source); })())) {
            echo " is-opened";
        }
        echo "\"
      >
        <i class=\"material-icons\">";
        // line 39
        if ((isset($context["isNoteOpen"]) || array_key_exists("isNoteOpen", $context) ? $context["isNoteOpen"] : (function () { throw new RuntimeError('Variable "isNoteOpen" does not exist.', 39, $this->source); })())) {
            echo "remove";
        } else {
            echo "add";
        }
        echo "</i>
      </a>
    </div>

    <div class=\"col-md-12 mt-3 js-order-notes-block";
        // line 43
        if ( !(isset($context["isNoteOpen"]) || array_key_exists("isNoteOpen", $context) ? $context["isNoteOpen"] : (function () { throw new RuntimeError('Variable "isNoteOpen" does not exist.', 43, $this->source); })())) {
            echo " d-none";
        }
        echo "\">
      ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["internalNoteForm"]) || array_key_exists("internalNoteForm", $context) ? $context["internalNoteForm"] : (function () { throw new RuntimeError('Variable "internalNoteForm" does not exist.', 44, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_set_internal_note", ["orderId" => twig_get_attribute($this->env, $this->source,         // line 45
(isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 45, $this->source); })()), "getId", [], "method", false, false, false, 45)])]);
        // line 46
        echo "
      ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["internalNoteForm"]) || array_key_exists("internalNoteForm", $context) ? $context["internalNoteForm"] : (function () { throw new RuntimeError('Variable "internalNoteForm" does not exist.', 47, $this->source); })()), "note", [], "any", false, false, false, 47), 'widget');
        echo "
      <div class=\"d-none\">
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["internalNoteForm"]) || array_key_exists("internalNoteForm", $context) ? $context["internalNoteForm"] : (function () { throw new RuntimeError('Variable "internalNoteForm" does not exist.', 49, $this->source); })()), 'rest');
        echo "
      </div>

      <div class=\"mt-2 text-right\">
        <button type=\"submit\"
                class=\"btn btn-primary btn-sm js-order-notes-btn\"
                ";
        // line 55
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 55, $this->source); })()), "note", [], "any", false, false, false, 55))) {
            echo "disabled";
        }
        // line 56
        echo "        >
          ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
      ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["internalNoteForm"]) || array_key_exists("internalNoteForm", $context) ? $context["internalNoteForm"] : (function () { throw new RuntimeError('Variable "internalNoteForm" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 60,  117 => 57,  114 => 56,  110 => 55,  101 => 49,  96 => 47,  93 => 46,  91 => 45,  90 => 44,  84 => 43,  73 => 39,  66 => 37,  57 => 31,  53 => 30,  49 => 28,  47 => 27,  43 => 25,);
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
<div class=\"mt-2 info-block\">
  <div class=\"row\">
    {% set isNoteOpen = not orderForViewing.note is empty %}

    <div class=\"col-md-6\">
      <h3 class=\"mb-0{{ not isNoteOpen ? ' d-print-none': '' }}\">
        {{ 'Order note'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </h3>
    </div>

    <div class=\"col-md-6 text-right d-print-none\">
      <a href=\"#\"
         class=\"float-right tooltip-link js-order-notes-toggle-btn{% if isNoteOpen %} is-opened{% endif %}\"
      >
        <i class=\"material-icons\">{% if isNoteOpen %}remove{% else %}add{% endif %}</i>
      </a>
    </div>

    <div class=\"col-md-12 mt-3 js-order-notes-block{% if not isNoteOpen %} d-none{% endif %}\">
      {{ form_start(internalNoteForm, {
        'action': path('admin_orders_set_internal_note', {'orderId': orderForViewing.getId()})
      }) }}
      {{ form_widget(internalNoteForm.note) }}
      <div class=\"d-none\">
        {{ form_rest(internalNoteForm) }}
      </div>

      <div class=\"mt-2 text-right\">
        <button type=\"submit\"
                class=\"btn btn-primary btn-sm js-order-notes-btn\"
                {% if orderForViewing.note is empty %}disabled{% endif %}
        >
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
      {{ form_end(internalNoteForm)}}
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig", "/home/qisogexqbz/domains/cezos.exis24.pl/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig");
    }
}
