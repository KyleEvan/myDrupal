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

/* themes/custom/my_mayo/templates/paragraphs/swiper/node--view--swiper-main-slider--block-1.html.twig */
class __TwigTemplate_715c1ca9bbc33b572f27b71e1b4df0b012d2b1a78111c2d629d7040d95bab3bc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 65, "if" => 98];
        $filters = ["clean_class" => 67, "without" => 95];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'without'],
                []
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 65
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 67
($context["node"] ?? null), "bundle", [])))), 2 => (($this->getAttribute(        // line 68
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 69
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 70
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 6 => "clearfix"];
        // line 75
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 77
        echo "    ";
        // line 78
        echo "    ";
        // line 79
        echo "      ";
        // line 80
        echo "        ";
        // line 81
        echo "      ";
        // line 82
        echo "    ";
        // line 83
        echo "    ";
        // line 84
        echo "    ";
        // line 85
        echo "      ";
        // line 86
        echo "        ";
        // line 87
        echo "        ";
        // line 88
        echo "          ";
        // line 89
        echo "        ";
        // line 90
        echo "        ";
        // line 91
        echo "      ";
        // line 92
        echo "    ";
        // line 93
        echo "  ";
        // line 94
        echo "  ";
        // line 95
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "comment", "links"), "html", null, true);
        echo "
  ";
        // line 97
        echo "
  ";
        // line 98
        if ($this->getAttribute(($context["content"] ?? null), "links", [])) {
            // line 99
            echo "    <div class=\"node__links\">
      ";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "links", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 103
        echo "
  ";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
        echo "

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/my_mayo/templates/paragraphs/swiper/node--view--swiper-main-slider--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 104,  122 => 103,  116 => 100,  113 => 99,  111 => 98,  108 => 97,  103 => 95,  101 => 94,  99 => 93,  97 => 92,  95 => 91,  93 => 90,  91 => 89,  89 => 88,  87 => 87,  85 => 86,  83 => 85,  81 => 84,  79 => 83,  77 => 82,  75 => 81,  73 => 80,  71 => 79,  69 => 78,  67 => 77,  62 => 75,  60 => 71,  59 => 70,  58 => 69,  57 => 68,  56 => 67,  55 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Mayo's theme implementation to display a node.
 *
 * Available variables:
 * - node: Full node entity.
 *   - id: The node ID.
 *   - bundle: The type of the node, for example, \"page\" or \"article\".
 *   - authorid: The user ID of the node author.
 *   - createdtime: Time the node was published formatted in Unix timestamp.
 *   - changedtime: Time the node was changed formatted in Unix timestamp.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}
{%
  set classes = [
  'node',
  'node--type-' ~ node.bundle|clean_class,
  node.isPromoted() ? 'node--promoted',
  node.isSticky() ? 'node--sticky',
  not node.isPublished() ? 'node--unpublished',
  view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  'clearfix',
]
%}
<article{{ attributes.addClass(classes) }}>
  {#<header>#}
    {#{{ title_prefix }}#}
    {#{% if not page %}#}
      {#<h2{{ title_attributes.addClass('node__title') }}>#}
        {#<a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>#}
      {#</h2>#}
    {#{% endif %}#}
    {#{{ title_suffix }}#}
    {#{% if display_submitted %}#}
      {#<div class=\"node__meta\">#}
        {#{{ author_picture }}#}
        {#<span{{ author_attributes }}>#}
          {#{% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}#}
        {#</span>#}
        {#{{ metadata }}#}
      {#</div>#}
    {#{% endif %}#}
  {#</header>#}
  {#<div{{ content_attributes.addClass('node__content', 'clearfix') }}>#}
    {{ content|without('comment', 'links') }}
  {#</div>#}

  {% if content.links %}
    <div class=\"node__links\">
      {{ content.links }}
    </div>
  {% endif %}

  {{ content.comment }}

</article>
", "themes/custom/my_mayo/templates/paragraphs/swiper/node--view--swiper-main-slider--block-1.html.twig", "/mnt/c/debian/server/myDrupal/themes/custom/my_mayo/templates/paragraphs/swiper/node--view--swiper-main-slider--block-1.html.twig");
    }
}
