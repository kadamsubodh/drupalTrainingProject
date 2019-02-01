<?php

/* core/themes/stable/templates/content-edit/entity-moderation-form.html.twig */
class __TwigTemplate_debf309809f1d23d411b366b4db3d46eb29184c56fed020a8b9a91cbf35ddf45 extends Twig_Template
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
        $filters = ["without" => 7];
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

        // line 1
        echo "<ul class=\"entity-moderation-form\">
  <li class=\"entity-moderation-form__item\">";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "current", []), "html", null, true));
        echo "</li>
  <li class=\"entity-moderation-form__item\">";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "new_state", []), "html", null, true));
        echo "</li>
  <li class=\"entity-moderation-form__item\">";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "revision_log", []), "html", null, true));
        echo "</li>
  <li class=\"entity-moderation-form__item\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "submit", []), "html", null, true));
        echo "</li>
</ul>
";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["form"] ?? null), "current", "new_state", "revision_log", "submit"), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/content-edit/entity-moderation-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"entity-moderation-form\">
  <li class=\"entity-moderation-form__item\">{{ form.current }}</li>
  <li class=\"entity-moderation-form__item\">{{ form.new_state }}</li>
  <li class=\"entity-moderation-form__item\">{{ form.revision_log }}</li>
  <li class=\"entity-moderation-form__item\">{{ form.submit }}</li>
</ul>
{{ form|without('current', 'new_state', 'revision_log', 'submit') }}
", "core/themes/stable/templates/content-edit/entity-moderation-form.html.twig", "/var/www/html/drupalTrainingProject/core/themes/stable/templates/content-edit/entity-moderation-form.html.twig");
    }
}
