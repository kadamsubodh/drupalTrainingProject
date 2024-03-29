<?php

/* core/themes/seven/templates/image-widget.html.twig */
class __TwigTemplate_f82ae5d33be4c600f2bf255d72eec29fcbda615165384c51aeb8a338b8483ab2 extends Twig_Template
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
        $tags = ["include" => 11];
        $filters = [];
        $functions = ["attach_library" => 12];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['include'],
                [],
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

        // line 11
        $this->loadTemplate("@classy/content-edit/image-widget.html.twig", "core/themes/seven/templates/image-widget.html.twig", 11)->display($context);
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/image-widget"), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/image-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  43 => 11,);
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
 * Theme override for an image field widget.
 *
 * Included from Classy theme.
 *
 * @see template_preprocess_image_widget()
 */
#}
{% include '@classy/content-edit/image-widget.html.twig' %}
{{ attach_library('classy/image-widget') }}
", "core/themes/seven/templates/image-widget.html.twig", "/var/www/html/drupalTrainingProject/core/themes/seven/templates/image-widget.html.twig");
    }
}
