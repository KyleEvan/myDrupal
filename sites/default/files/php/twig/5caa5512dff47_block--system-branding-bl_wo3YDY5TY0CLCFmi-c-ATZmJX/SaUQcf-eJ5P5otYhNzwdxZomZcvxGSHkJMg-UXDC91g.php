<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/mayo/templates/block--system-branding-block.html.twig */
class __TwigTemplate_1aad4791f5b93eea24a2e23feace042c1d1323f3de1d7776217f9a3a247e3214 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/contrib/mayo/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "if" => 18];
        $filters = ["t" => 20];
        $functions = ["path" => 20];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 16
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "site-branding"], "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        // line 18
        echo "      ";
        if (($context["site_logo"] ?? null)) {
            // line 19
            echo "        <div id=\"site_logo\">
        <a href=\"";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\">
          <img src=\"";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" />
        </a>
        </div> <!-- /#logo -->
      ";
        }
        // line 25
        echo "
      ";
        // line 26
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 27
            echo "        <div id=\"name-and-slogan\" ";
            if ((($context["hide_site_name"] ?? null) && ($context["hide_site_slogan"] ?? null))) {
                echo " class=\"visually-hidden\"";
            }
            echo ">
          ";
            // line 28
            if (($context["site_name"] ?? null)) {
                // line 29
                echo "            ";
                if (($context["title"] ?? null)) {
                    // line 30
                    echo "            <div id=\"site-name\"";
                    if (($context["hide_site_name"] ?? null)) {
                        echo " class=\"visually-hidden\"";
                    }
                    echo ">
              <strong>
                <a href=\"";
                    // line 32
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                    echo "\" title=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                    echo "</span></a>
              </strong>
            </div>
          ";
                    // line 36
                    echo "          ";
                } else {
                    // line 37
                    echo "            <h1 id=\"site-name\"";
                    if (($context["hide_site_name"] ?? null)) {
                        echo " class=\"visually-hidden\" ";
                    }
                    echo ">
                <a href=\"";
                    // line 38
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                    echo "\" title=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                    echo "</span></a>
              </h1>
            ";
                }
                // line 41
                echo "          ";
            }
            // line 42
            echo "                    ";
            if (($context["site_slogan"] ?? null)) {
                // line 43
                echo "            <div id=\"site-slogan\"";
                if (($context["hide_site_slogan"] ?? null)) {
                    echo " class=\"visually-hidden\"";
                }
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</div>
          ";
            }
            // line 45
            echo "        </div> <!-- /#name-and-slogan -->
      ";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/mayo/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 45,  152 => 43,  149 => 42,  146 => 41,  136 => 38,  129 => 37,  126 => 36,  116 => 32,  108 => 30,  105 => 29,  103 => 28,  96 => 27,  94 => 26,  91 => 25,  82 => 21,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  63 => 1,  61 => 16,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Mayo's theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% set attributes = attributes.addClass('site-branding') %}
{% block content %}
      {% if site_logo %}
        <div id=\"site_logo\">
        <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
          <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
        </a>
        </div> <!-- /#logo -->
      {% endif %}

      {% if site_name or site_slogan %}
        <div id=\"name-and-slogan\" {% if hide_site_name and hide_site_slogan %} class=\"visually-hidden\"{% endif %}>
          {% if site_name %}
            {% if title %}
            <div id=\"site-name\"{% if hide_site_name %} class=\"visually-hidden\"{% endif %}>
              <strong>
                <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\"><span>{{ site_name }}</span></a>
              </strong>
            </div>
          {# Use h1 when the content title is empty #}
          {% else %}
            <h1 id=\"site-name\"{% if hide_site_name %} class=\"visually-hidden\" {% endif %}>
                <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\"><span>{{ site_name }}</span></a>
              </h1>
            {% endif %}
          {% endif %}
                    {% if site_slogan %}
            <div id=\"site-slogan\"{% if hide_site_slogan %} class=\"visually-hidden\"{% endif %}>{{ site_slogan }}</div>
          {% endif %}
        </div> <!-- /#name-and-slogan -->
      {% endif %}
{% endblock %}
", "themes/contrib/mayo/templates/block--system-branding-block.html.twig", "/mnt/c/debian/server/myDrupal/themes/contrib/mayo/templates/block--system-branding-block.html.twig");
    }
}
