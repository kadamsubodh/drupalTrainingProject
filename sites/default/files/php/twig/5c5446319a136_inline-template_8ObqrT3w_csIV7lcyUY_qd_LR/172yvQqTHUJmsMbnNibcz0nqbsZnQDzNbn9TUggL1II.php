<?php

/* {# inline_template_start #}destination=/drupalTrainingProject/views/ajax%3Forder%3Dchanged%26sort%3Ddesc */
class __TwigTemplate_326ab01fe29bb36347314b3a3e77740e6890577521626830653d235568d152d4 extends Twig_Template
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

        // line 1
        echo "destination=/drupalTrainingProject/views/ajax%3Forder%3Dchanged%26sort%3Ddesc";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}destination=/drupalTrainingProject/views/ajax%3Forder%3Dchanged%26sort%3Ddesc";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}destination=/drupalTrainingProject/views/ajax%3Forder%3Dchanged%26sort%3Ddesc", "{# inline_template_start #}destination=/drupalTrainingProject/views/ajax%3Forder%3Dchanged%26sort%3Ddesc", "");
    }
}
