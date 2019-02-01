<?php

/* themes/custom/stone/templates/page.html.twig */
class __TwigTemplate_0f8abde453b281900cce9479c54a450102ff13dd1332cb368e6d183f59a0296b extends Twig_Template
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
        $tags = ["if" => 55];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['if'],
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

        // line 43
        echo "
<div id=\"page-wrapper\">
  <div id=\"page\">
  <div class=\"\"
    <header id=\"navbar\" role=\"banner\" class=\"site-header navbar navbar-default\">
      <div class=\"header-container\">
          <a class=\"name navbar-brand site-title\" href=\"/drupalTrainingProject\" title=\"Home\">
            <img src=\"/drupalTrainingProject/themes/custom/stone/logo.svg\">
          </a>
          ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", []), "html", null, true));
        echo "
          ";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", []), "html", null, true));
        echo "
          ";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", []), "html", null, true));
        echo "
          ";
        // line 55
        if (($context["is_front"] ?? null)) {
            // line 56
            echo "          ";
        } else {
            // line 57
            echo "          <div id=\"block-yourlocation\">
            <div class=\"content\">
              <a href=\"#\" id=\"your-location\">Your Location <span class=\"location-name\"> ";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["city_name"] ?? null), "html", null, true));
            echo " </span><input type=\"hidden\" id=\"location\" value=\"3\"></a><a id=\"your-location\" href=\"tel:+972.488.5700\">972.488.5700</a>
           </div>
          </div>
          ";
        }
        // line 63
        echo "      </div>
    </header>
    ";
        // line 65
        if (($context["is_front"] ?? null)) {
            // line 66
            echo "    <div class=\"preface-first\">
        ";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface", []), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 70
        echo "    <div id=\"main\" class=\"main-container\">
      <div class=\"bs-row\">
        <section class=\"content\">
        ";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "html", null, true));
        echo "
        
        </section>        
      </div>
      
    </div>
    <div class=\"footer-first\">
      ";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", []), "html", null, true));
        echo "
    </div>

  </div>
\t
  <footer class=\"footer site-footer\">
    <div class=\"footer-second\">
      ";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", []), "html", null, true));
        echo "
    </div>
    <div class=\"copyright\">
      <p>©2019 The Stone Collection. All Rights Reserved</p>
      <p>Site designed by Neosofttech</p>
  </footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/stone/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 87,  112 => 80,  102 => 73,  97 => 70,  91 => 67,  88 => 66,  86 => 65,  82 => 63,  75 => 59,  71 => 57,  68 => 56,  66 => 55,  62 => 54,  58 => 53,  54 => 52,  43 => 43,);
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
 * Stone collection's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.preface: Items for the Preface region(above the main content region).
 * - page.primary_menu: Items for the primary menu region.
 * - page.content: The main content of the current page.
 * - page.footer: Items for the footer column.
 * - page.footer: Items for the copyright column(below footer).
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<div id=\"page-wrapper\">
  <div id=\"page\">
  <div class=\"\"
    <header id=\"navbar\" role=\"banner\" class=\"site-header navbar navbar-default\">
      <div class=\"header-container\">
          <a class=\"name navbar-brand site-title\" href=\"/drupalTrainingProject\" title=\"Home\">
            <img src=\"/drupalTrainingProject/themes/custom/stone/logo.svg\">
          </a>
          {{ page.secondary_menu}}
          {{ page.header }}
          {{ page.primary_menu }}
          {% if is_front %}
          {% else %}
          <div id=\"block-yourlocation\">
            <div class=\"content\">
              <a href=\"#\" id=\"your-location\">Your Location <span class=\"location-name\"> {{ city_name }} </span><input type=\"hidden\" id=\"location\" value=\"3\"></a><a id=\"your-location\" href=\"tel:+972.488.5700\">972.488.5700</a>
           </div>
          </div>
          {% endif %}
      </div>
    </header>
    {% if is_front %}
    <div class=\"preface-first\">
        {{ page.preface }}
    </div>
    {% endif  %}
    <div id=\"main\" class=\"main-container\">
      <div class=\"bs-row\">
        <section class=\"content\">
        {{ page.content }}
        
        </section>        
      </div>
      
    </div>
    <div class=\"footer-first\">
      {{ page.footer_first }}
    </div>

  </div>
\t
  <footer class=\"footer site-footer\">
    <div class=\"footer-second\">
      {{ page.footer }}
    </div>
    <div class=\"copyright\">
      <p>©2019 The Stone Collection. All Rights Reserved</p>
      <p>Site designed by Neosofttech</p>
  </footer>
</div>
", "themes/custom/stone/templates/page.html.twig", "/var/www/html/drupalTrainingProject/themes/custom/stone/templates/page.html.twig");
    }
}
