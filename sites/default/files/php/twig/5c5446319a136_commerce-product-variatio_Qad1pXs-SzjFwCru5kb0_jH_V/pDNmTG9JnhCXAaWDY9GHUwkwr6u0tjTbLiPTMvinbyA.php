<?php

/* modules/contrib/commerce/modules/product/templates/commerce-product-variation.html.twig */
class __TwigTemplate_d3eb9cb4b5a5d494daf9a3193edc270417bcb7bda968af14471caf31cf3affa5 extends Twig_Template
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
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                [],
                [],
                []
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

        // line 22
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["product_variation"] ?? null), "html", null, true));
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/product/templates/commerce-product-variation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 24,  47 => 23,  43 => 22,);
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
 *
 * Default template for product variations.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - product_variation: The rendered product variation fields.
 *   Use 'product_variation' to print them all, or print a subset such as
 *   'product_variation.title'. Use the following code to exclude the
 *   printing of a given field:
 *   @code
 *   {{ product_variation|without('title') }}
 *   @endcode
 * - product_variation_entity: The product variation entity.
 * - product_url: The product URL.
 *
 * @ingroup themeable
 */
#}
<div{{ attributes }}>
  {{- product_variation -}}
</div>
", "modules/contrib/commerce/modules/product/templates/commerce-product-variation.html.twig", "/var/www/html/drupalTrainingProject/modules/contrib/commerce/modules/product/templates/commerce-product-variation.html.twig");
    }
}
