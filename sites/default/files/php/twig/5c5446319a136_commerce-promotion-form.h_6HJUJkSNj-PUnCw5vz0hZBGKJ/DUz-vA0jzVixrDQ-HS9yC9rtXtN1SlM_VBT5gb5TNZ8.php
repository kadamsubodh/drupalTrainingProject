<?php

/* modules/contrib/commerce/modules/promotion/templates/commerce-promotion-form.html.twig */
class __TwigTemplate_28baf51aa04388dfe44cbff31c79956abe68ec749abda976f0e77a3a8923b8ed extends Twig_Template
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
        $filters = ["without" => 14];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                [],
                ['without'],
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

        // line 12
        echo "<div class=\"layout-promotion-form clearfix\">
  <div class=\"layout-region layout-region-promotion-main\">
    ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["form"] ?? null), "advanced", "actions"), "html", null, true));
        echo "
  </div>
  <div class=\"layout-region layout-region-promotion-secondary\">
    ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "advanced", []), "html", null, true));
        echo "
  </div>
  <div class=\"layout-region layout-region-promotion-footer\">
    ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "actions", []), "html", null, true));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/promotion/templates/commerce-promotion-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  53 => 17,  47 => 14,  43 => 12,);
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
 * Template for the promotion add/edit form.
 *
 * Available variables:
 * - form: The form.
 *
 * @ingroup themeable
 */
#}
<div class=\"layout-promotion-form clearfix\">
  <div class=\"layout-region layout-region-promotion-main\">
    {{ form|without('advanced', 'actions') }}
  </div>
  <div class=\"layout-region layout-region-promotion-secondary\">
    {{ form.advanced }}
  </div>
  <div class=\"layout-region layout-region-promotion-footer\">
    {{ form.actions }}
  </div>
</div>
", "modules/contrib/commerce/modules/promotion/templates/commerce-promotion-form.html.twig", "/var/www/html/drupalTrainingProject/modules/contrib/commerce/modules/promotion/templates/commerce-promotion-form.html.twig");
    }
}
