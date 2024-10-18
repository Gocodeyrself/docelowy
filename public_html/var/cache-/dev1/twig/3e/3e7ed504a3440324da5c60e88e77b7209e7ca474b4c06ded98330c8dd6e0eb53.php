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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig */
class __TwigTemplate_a5f50928ea45f628e5e8c19fd8cf9399f5ad8972bfa831ba0f8d7fa7c08f583d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig"));

        // line 25
        if ((twig_get_attribute($this->env, $this->source, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 25, $this->source); })()), "amountToPay", [], "any", false, false, false, 25) && twig_get_attribute($this->env, $this->source, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 25, $this->source); })()), "paidAmount", [], "any", false, false, false, 25))) {
            // line 26
            echo "    <div class=\"alert alert-danger mb-0 js-view-order-payments-alert\" role=\"alert\">
        <p class=\"alert-text\">
            ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning", [], "Admin.Global"), "html", null, true);
            echo "
            <strong>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 29, $this->source); })()), "paidAmount", [], "any", false, false, false, 29), "html", null, true);
            echo "</strong>
            ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paid instead of", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
            <strong>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 31, $this->source); })()), "amountToPay", [], "any", false, false, false, 31), "html", null, true);
            echo "</strong>

            ";
            // line 33
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["linkedOrders"]) || array_key_exists("linkedOrders", $context) ? $context["linkedOrders"] : (function () { throw new RuntimeError('Variable "linkedOrders" does not exist.', 33, $this->source); })()), "linkedOrders", [], "any", false, false, false, 33))) {
                // line 34
                echo "                ";
                if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["linkedOrders"]) || array_key_exists("linkedOrders", $context) ? $context["linkedOrders"] : (function () { throw new RuntimeError('Variable "linkedOrders" does not exist.', 34, $this->source); })()), "linkedOrders", [], "any", false, false, false, 34)), 1))) {
                    // line 35
                    echo "                    <br/>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This warning also concerns order:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 37
                    echo "                    <br/>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This warning also concerns the following orders:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                    echo "
                ";
                }
                // line 39
                echo "
                ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["linkedOrders"]) || array_key_exists("linkedOrders", $context) ? $context["linkedOrders"] : (function () { throw new RuntimeError('Variable "linkedOrders" does not exist.', 40, $this->source); })()), "linkedOrders", [], "any", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["linkedOrder"]) {
                    // line 41
                    echo "                    <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_view", ["orderId" => twig_get_attribute($this->env, $this->source, $context["linkedOrder"], "orderId", [], "any", false, false, false, 41)]), "html", null, true);
                    echo "\">
                        #";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linkedOrder"], "orderId", [], "any", false, false, false, 42), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkedOrder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            ";
            }
            // line 46
            echo "        </p>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  104 => 45,  95 => 42,  90 => 41,  86 => 40,  83 => 39,  77 => 37,  71 => 35,  68 => 34,  66 => 33,  61 => 31,  57 => 30,  53 => 29,  49 => 28,  45 => 26,  43 => 25,);
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
{% if payments.amountToPay and payments.paidAmount %}
    <div class=\"alert alert-danger mb-0 js-view-order-payments-alert\" role=\"alert\">
        <p class=\"alert-text\">
            {{ 'Warning'|trans({}, 'Admin.Global') }}
            <strong>{{ payments.paidAmount }}</strong>
            {{ 'paid instead of'|trans({}, 'Admin.Orderscustomers.Notification') }}
            <strong>{{ payments.amountToPay }}</strong>

            {% if linkedOrders.linkedOrders is not empty %}
                {% if linkedOrders.linkedOrders|length == 1 %}
                    <br/>{{ 'This warning also concerns order:'|trans({}, 'Admin.Orderscustomers.Notification') }}
                {% else %}
                    <br/>{{ 'This warning also concerns the following orders:'|trans({}, 'Admin.Orderscustomers.Notification') }}
                {% endif %}

                {% for linkedOrder in linkedOrders.linkedOrders %}
                    <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"{{ path('admin_orders_view', {'orderId': linkedOrder.orderId}) }}\">
                        #{{ linkedOrder.orderId }}
                    </a>
                {% endfor %}
            {% endif %}
        </p>
    </div>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig", "/home/qisogexqbz/domains/cezos.exis24.pl/public_html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig");
    }
}
