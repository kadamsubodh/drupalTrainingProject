<?php

/* modules/contrib/commerce/modules/order/templates/commerce-order--admin.html.twig */
class __TwigTemplate_69ccb0c04c89ad8aa164b6320ecd4dd43afdf3ebdf43897d8580ce8a180e934d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["set" => 22, "if" => 29, "trans" => 30, "for" => 40];
        $filters = ["t" => 50];
        $functions = ["attach_library" => 21];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'if', 'trans', 'for'],
                ['t'],
                ['attach_library']
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 20
        echo "
";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("commerce_order/form"), "html", null, true));
        echo "
";
        // line 22
        $context["order_state"] = $this->getAttribute($this->getAttribute(($context["order_entity"] ?? null), "getState", []), "getLabel", []);
        // line 23
        echo "
<div class=\"layout-order-form clearfix\">
  <div class=\"layout-region layout-region-order-main\">
    ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), "order_items", []), "html", null, true));
        echo "
    ";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), "total_price", []), "html", null, true));
        echo "

    ";
        // line 29
        if ($this->getAttribute(($context["order"] ?? null), "activity", [])) {
            // line 30
            echo "      <h2>";
            echo t("Order activity", array());
            echo "</h2>
      ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), "activity", []), "html", null, true));
            echo "
    ";
        }
        // line 33
        echo "  </div>
  <div class=\"layout-region layout-region-order-secondary\">
    <div class=\"entity-meta\">
      <div class=\"entity-meta__header\">
        <h3 class=\"entity-meta__title\">
          ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["order_state"] ?? null), "html", null, true));
        echo "
        </h3>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "completed", 1 => "placed", 2 => "changed"]);
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 41
            echo "          ";
            if ($this->getAttribute(($context["order"] ?? null), $context["key"], [], "array")) {
                // line 42
                echo "            <div class=\"form-item\">
              ";
                // line 43
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), $context["key"], [], "array"), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 46
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "      </div>
      <details open class=\"seven-details\">
        <summary role=\"button\" class=\"seven-details__summary\">
          ";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Customer Information")));
        echo "
        </summary>
        <div class=\"details-wrapper seven-details__wrapper\">
          ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "uid", 1 => "mail", 2 => "ip_address"]);
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 54
            echo "            ";
            if ($this->getAttribute(($context["order"] ?? null), $context["key"], [], "array")) {
                // line 55
                echo "              <div class=\"form-item\">
                ";
                // line 56
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), $context["key"], [], "array"), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 59
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </div>
      </details>
      ";
        // line 62
        if ($this->getAttribute(($context["order"] ?? null), "billing_information", [])) {
            // line 63
            echo "        <details open class=\"seven-details\">
          <summary role=\"button\" class=\"seven-details__summary\">
            ";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Billing information")));
            echo "
          </summary>
          <div class=\"details-wrapper seven-details__wrapper\">
            ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), "billing_information", []), "html", null, true));
            echo "
          </div>
        </details>
      ";
        }
        // line 72
        echo "      ";
        if ($this->getAttribute(($context["order"] ?? null), "shipping_information", [])) {
            // line 73
            echo "        <details open class=\"seven-details\">
          <summary role=\"button\" class=\"seven-details__summary\">
            ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping information")));
            echo "
          </summary>
          <div class=\"details-wrapper seven-details__wrapper\">
            ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), "shipping_information", []), "html", null, true));
            echo "
          </div>
        </details>
      ";
        }
        // line 82
        echo "      ";
        // line 83
        echo "      ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["order_entity"] ?? null), "getState", []), "getTransitions", []))) {
            // line 84
            echo "        <div class=\"entity-meta__header\">
          ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["order"] ?? null), "state", []), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 88
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/order/templates/commerce-order--admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 88,  196 => 85,  193 => 84,  190 => 83,  188 => 82,  181 => 78,  175 => 75,  171 => 73,  168 => 72,  161 => 68,  155 => 65,  151 => 63,  149 => 62,  145 => 60,  139 => 59,  133 => 56,  130 => 55,  127 => 54,  123 => 53,  117 => 50,  112 => 47,  106 => 46,  100 => 43,  97 => 42,  94 => 41,  90 => 40,  85 => 38,  78 => 33,  73 => 31,  68 => 30,  66 => 29,  61 => 27,  57 => 26,  52 => 23,  50 => 22,  46 => 21,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Order template used on the admin order page.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - order: The rendered order fields.
 *   Use 'order' to print them all, or print a subset such as
 *   'order.order_number'. Use the following code to exclude the
 *   printing of a given field:
 *   @code
 *   {{ order|without('order_number') }}
 *   @endcode
 * - order_entity: The order entity.
 *
 * @ingroup themeable
 */
#}

{{ attach_library('commerce_order/form') }}
{% set order_state = order_entity.getState.getLabel %}

<div class=\"layout-order-form clearfix\">
  <div class=\"layout-region layout-region-order-main\">
    {{ order.order_items }}
    {{ order.total_price }}

    {% if order.activity %}
      <h2>{% trans %}Order activity{% endtrans %}</h2>
      {{ order.activity }}
    {% endif %}
  </div>
  <div class=\"layout-region layout-region-order-secondary\">
    <div class=\"entity-meta\">
      <div class=\"entity-meta__header\">
        <h3 class=\"entity-meta__title\">
          {{ order_state }}
        </h3>
        {% for key in ['completed', 'placed', 'changed'] %}
          {% if order[key] %}
            <div class=\"form-item\">
              {{ order[key] }}
            </div>
          {% endif %}
        {% endfor %}
      </div>
      <details open class=\"seven-details\">
        <summary role=\"button\" class=\"seven-details__summary\">
          {{ 'Customer Information'|t }}
        </summary>
        <div class=\"details-wrapper seven-details__wrapper\">
          {% for key in ['uid', 'mail', 'ip_address'] %}
            {% if order[key] %}
              <div class=\"form-item\">
                {{ order[key] }}
              </div>
            {% endif %}
          {% endfor %}
        </div>
      </details>
      {% if order.billing_information %}
        <details open class=\"seven-details\">
          <summary role=\"button\" class=\"seven-details__summary\">
            {{ 'Billing information'|t }}
          </summary>
          <div class=\"details-wrapper seven-details__wrapper\">
            {{ order.billing_information }}
          </div>
        </details>
      {% endif %}
      {% if order.shipping_information %}
        <details open class=\"seven-details\">
          <summary role=\"button\" class=\"seven-details__summary\">
            {{ 'Shipping information'|t }}
          </summary>
          <div class=\"details-wrapper seven-details__wrapper\">
            {{ order.shipping_information }}
          </div>
        </details>
      {% endif %}
      {# If the order has possible transitions, render the field for transition buttons. #}
      {% if order_entity.getState.getTransitions is not empty %}
        <div class=\"entity-meta__header\">
          {{ order.state }}
        </div>
      {% endif %}
    </div>
  </div>
</div>
", "modules/contrib/commerce/modules/order/templates/commerce-order--admin.html.twig", "/var/www/html/drupalTrainingProject/modules/contrib/commerce/modules/order/templates/commerce-order--admin.html.twig");
    }
}
