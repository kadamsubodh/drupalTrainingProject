<?php

/* modules/contrib/commerce/modules/order/templates/commerce-order-total-summary.html.twig */
class __TwigTemplate_53ea56f1a54092c9aad0abd6247ff19239523f875b890a01e1dd637b34d039aa extends Twig_Template
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
        $tags = ["for" => 25];
        $filters = ["t" => 23, "commerce_price_format" => 23];
        $functions = ["attach_library" => 20];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['for'],
                ['t', 'commerce_price_format'],
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("commerce_order/total_summary"), "html", null, true));
        echo "
<div";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  <div class=\"order-total-line order-total-line__subtotal\">
    <span class=\"order-total-line-label\">";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Subtotal")));
        echo " </span><span class=\"order-total-line-value\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->getAttribute(($context["totals"] ?? null), "subtotal", [])), "html", null, true));
        echo "</span>
  </div>
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["totals"] ?? null), "adjustments", []));
        foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
            // line 26
            echo "    <div class=\"order-total-line order-total-line__adjustment\">
      <span class=\"order-total-line-label\">";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["adjustment"], "label", []), "html", null, true));
            echo " </span><span class=\"order-total-line-value\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->getAttribute($context["adjustment"], "amount", [])), "html", null, true));
            echo "</span>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  <div class=\"order-total-line order-total-line__total\">
    <span class=\"order-total-line-label\">";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total")));
        echo " </span><span class=\"order-total-line-value\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->getAttribute(($context["totals"] ?? null), "total", [])), "html", null, true));
        echo "</span>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/order/templates/commerce-order-total-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  77 => 30,  66 => 27,  63 => 26,  59 => 25,  52 => 23,  47 => 21,  43 => 20,);
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
 * Default order total summary template.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - totals: An array of order totals values with the following keys:
 *   - subtotal: The order subtotal price.
 *   - adjustments: The adjustments:
 *     - type: The adjustment type.
 *     - label: The adjustment label.
 *     - amount: The adjustment amount.
 *     - percentage: The decimal adjustment percentage, when available. For example, \"0.2\" for a 20% adjustment.
 *   - total: The order total price.
 *
 * @ingroup themeable
 */
#}
{{ attach_library('commerce_order/total_summary') }}
<div{{ attributes }}>
  <div class=\"order-total-line order-total-line__subtotal\">
    <span class=\"order-total-line-label\">{{ 'Subtotal'|t }} </span><span class=\"order-total-line-value\">{{ totals.subtotal|commerce_price_format }}</span>
  </div>
  {% for adjustment in totals.adjustments %}
    <div class=\"order-total-line order-total-line__adjustment\">
      <span class=\"order-total-line-label\">{{ adjustment.label }} </span><span class=\"order-total-line-value\">{{ adjustment.amount|commerce_price_format }}</span>
    </div>
  {% endfor %}
  <div class=\"order-total-line order-total-line__total\">
    <span class=\"order-total-line-label\">{{ 'Total'|t }} </span><span class=\"order-total-line-value\">{{ totals.total|commerce_price_format }}</span>
  </div>
</div>
", "modules/contrib/commerce/modules/order/templates/commerce-order-total-summary.html.twig", "/var/www/html/drupalTrainingProject/modules/contrib/commerce/modules/order/templates/commerce-order-total-summary.html.twig");
    }
}
