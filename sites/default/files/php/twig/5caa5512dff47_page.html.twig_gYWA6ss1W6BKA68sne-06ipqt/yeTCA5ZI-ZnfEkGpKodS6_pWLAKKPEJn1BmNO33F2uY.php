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

/* themes/contrib/mayo/templates/page.html.twig */
class __TwigTemplate_46492fbbace7882624c702fea62e1b85615216ebb0df18b9341a100370fa9a33 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 85];
        $filters = ["t" => 86];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t'],
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
        // line 84
        echo "<div id=\"page-wrapper\" style=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_wrapper_style"] ?? null)), "html", null, true);
        echo "\">
<div id=\"page\"";
        // line 85
        if (($context["page_style"] ?? null)) {
            echo " style=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_style"] ?? null)), "html", null, true);
            echo "\"";
        }
        echo ">
    <header id=\"header\" role=\"banner\" style=\"";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_style"] ?? null)), "html", null, true);
        echo "\" aria-label=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
    <div class=\"section clearfix\">
    <div id=\"header-watermark\"";
        // line 88
        if (($context["header_watermark_style"] ?? null)) {
            echo " style=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_watermark_style"] ?? null)), "html", null, true);
            echo "\" ";
        }
        echo ">
    <div class=\"section clearfix\">

      ";
        // line 91
        if (($context["header_searchbox"] ?? null)) {
            // line 92
            echo "        <div id=\"header-searchbox\">
       ";
            // line 93
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["output_form"] ?? null)), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 96
        echo "
      ";
        // line 97
        if (($context["header_fontsizer"] ?? null)) {
            // line 98
            echo "        <div id=\"header-fontsizer\">
        <a href=\"#\" class=\"decreaseFont\" title=\"Decrease text size\"></a>
        <a href=\"#\" class=\"resetFont\"    title=\"Restore default text size\"></a>
        <a href=\"#\" class=\"increaseFont\" title=\"Increase text size\"></a>
        </div>
      ";
        }
        // line 104
        echo "
    ";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "

    </div> <!-- /.section -->
    </div> <!-- /#header-watermark -->
    </div></header> <!-- /#header -->

    <div class=\"clearfix cfie\"></div>

    <!-- for nice_menus, superfish -->
    ";
        // line 114
        if ($this->getAttribute(($context["page"] ?? null), "menubar", [])) {
            // line 115
            echo "    <div id=\"menubar\" class=\"menubar clearfix\"
      ";
            // line 116
            if (($context["menubar_background"] ?? null)) {
                // line 117
                echo "        style=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menubar_bg_value"] ?? null)), "html", null, true);
                echo "\"
        ";
            }
            // line 118
            echo ">

      ";
            // line 120
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menubar", [])), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 123
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 124
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    ";
        }
        // line 126
        echo "
    <!-- space between menus and contents -->
    <div class=\"spacer clearfix cfie\"></div>

    <div id=\"main-wrapper\">
    <div id=\"main\" class=\"clearfix\"
      ";
        // line 132
        if (($context["main_style"] ?? null)) {
            // line 133
            echo "        style=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_style"] ?? null)), "html", null, true);
            echo "\"
        ";
        }
        // line 134
        echo ">

      ";
        // line 136
        if ($this->getAttribute(($context["page"] ?? null), "banner_top", [])) {
            // line 137
            echo "      <div id=\"banner-top\" class=\"banner clearfix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner_top", [])), "html", null, true);
            echo "</div>
      <div class=\"spacer clearfix cfie\"></div>
      ";
        }
        // line 140
        echo "

     ";
        // line 142
        if (((($this->getAttribute(($context["page"] ?? null), "top_column_first", []) || $this->getAttribute(($context["page"] ?? null), "top_column_second", [])) || $this->getAttribute(        // line 143
($context["page"] ?? null), "top_column_third", [])) || $this->getAttribute(($context["page"] ?? null), "top_column_fourth", []))) {
            // line 144
            echo "      <div id=\"top-wrapper\">
        <div id=\"top-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                ";
            // line 148
            if ($this->getAttribute(($context["page"] ?? null), "top_column_first", [])) {
                // line 149
                echo "                  <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_columns_width"] ?? null)), "html", null, true);
                echo "\">
                    <div class=\"column-block clearfix\">
                      ";
                // line 151
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_column_first", [])), "html", null, true);
                echo "
                    </div>
                  </div>
                ";
            }
            // line 155
            echo "
                ";
            // line 156
            if ($this->getAttribute(($context["page"] ?? null), "top_column_second", [])) {
                // line 157
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_columns_width"] ?? null)), "html", null, true);
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 159
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_column_second", [])), "html", null, true);
                echo "
                      </div>
                    </div>
                ";
            }
            // line 163
            echo "
                ";
            // line 164
            if ($this->getAttribute(($context["page"] ?? null), "top_column_third", [])) {
                // line 165
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_columns_width"] ?? null)), "html", null, true);
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 167
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_column_third", [])), "html", null, true);
                echo "
                      </div>
                    </div>
                ";
            }
            // line 171
            echo "
                ";
            // line 172
            if ($this->getAttribute(($context["page"] ?? null), "top_column_fourth", [])) {
                // line 173
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_columns_width"] ?? null)), "html", null, true);
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 175
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_column_fourth", [])), "html", null, true);
                echo "
                      </div>
                    </div>
                ";
            }
            // line 179
            echo "          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>
        </div> <!--/#top-columns -->
      </div> <!-- /#top-wrapper -->
      ";
        }
        // line 184
        echo "

      <div class=\"clearfix cfie\"></div>


      <!-- main content -->
      <main id=\"content\" class=\"column\"><section class=\"section\">

        ";
        // line 192
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 193
            echo "          <div id=\"breadcrumb\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
        ";
        }
        // line 195
        echo "
        <a id=\"main-content\"></a>
        ";
        // line 197
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
        ";
        // line 198
        if (($context["title"] ?? null)) {
            echo "<h1 class=\"title\" id=\"page-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1>";
        }
        // line 199
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
        ";
        // line 200
        if (($context["tabs"] ?? null)) {
            // line 201
            echo "          <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tabs"));
            echo "\">
            ";
            // line 202
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
            echo "
          </nav>
        ";
        }
        // line 205
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
        ";
        // line 206
        if (($context["action_links"] ?? null)) {
            echo "<ul class=\"action-links\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
            echo "</ul>";
        }
        // line 207
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "


      </section></main> <!-- /.section, /#content -->


      <!-- sidebar (first) -->
      ";
        // line 214
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 215
            echo "        <div id=\"sidebar-first\" class=\"column sidebar\"><div class=\"section\">
          ";
            // line 216
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </div></div> <!-- /.section, /#sidebar-first -->
      ";
        }
        // line 219
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 220
            echo "        <div id=\"sidebar-second\" class=\"column sidebar\"><div class=\"section\">
          ";
            // line 221
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        </div></div> <!-- /.section, /#sidebar-second -->
      ";
        }
        // line 224
        echo "

      <div class=\"clearfix cfie\"></div>

     ";
        // line 228
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_column_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_column_second", [])) || $this->getAttribute(        // line 229
($context["page"] ?? null), "bottom_column_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_column_fourth", []))) {
            // line 230
            echo "      <div id=\"bottom-wrapper\">
        <div id=\"bottom-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                ";
            // line 234
            if ($this->getAttribute(($context["page"] ?? null), "bottom_column_first", [])) {
                // line 235
                echo "                  <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_columns_width"] ?? null)), "html", null, true);
                echo "\">
                    <div class=\"column-block clearfix\">
                      ";
                // line 237
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_column_first", [])), "html", null, true);
                echo "
                    </div>
                  </div>
                ";
            }
            // line 241
            echo "
                ";
            // line 242
            if ($this->getAttribute(($context["page"] ?? null), "bottom_column_second", [])) {
                // line 243
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_columns_width"] ?? null)), "html", null, true);
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 245
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_column_second", [])), "html", null, true);
                echo "
                      </div>
                    </div>
                ";
            }
            // line 249
            echo "
                ";
            // line 250
            if ($this->getAttribute(($context["page"] ?? null), "bottom_column_third", [])) {
                // line 251
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_columns_width"] ?? null)), "html", null, true);
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 253
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_column_third", [])), "html", null, true);
                echo "
                      </div>
                    </div>
                ";
            }
            // line 257
            echo "
                ";
            // line 258
            if ($this->getAttribute(($context["page"] ?? null), "bottom_column_fourth", [])) {
                // line 259
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_columns_width"] ?? null)), "html", null, true);
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 261
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_column_fourth", [])), "html", null, true);
                echo "
                      </div>
                    </div>
                ";
            }
            // line 265
            echo "          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>


        </div> <!--/#bottom-columns -->
      </div> <!-- /#bottom-wrapper -->
      ";
        }
        // line 272
        echo "
      <div class=\"clearfix cfie\"></div>


      ";
        // line 276
        if ($this->getAttribute(($context["page"] ?? null), "banner_bottom", [])) {
            // line 277
            echo "      <div id=\"spacer\" class=\"clearfix cfie\"></div>
      <div id=\"banner-bottom\" class=\"banner clearfix\">";
            // line 278
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner_bottom", [])), "html", null, true);
            echo "</div>
      ";
        }
        // line 280
        echo "
    </div> <!-- /#main -->
    </div> <!-- /#main-wrapper -->

    <!-- space between contents and footer -->
    <div id=\"spacer\" class=\"clearfix cfie\"></div>

    <div id=\"footer-wrapper\">
     ";
        // line 288
        if (((($this->getAttribute(($context["page"] ?? null), "footer_column_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_column_second", [])) || $this->getAttribute(        // line 289
($context["page"] ?? null), "footer_column_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_column_fourth", []))) {
            // line 290
            echo "      <div id=\"footer-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                ";
            // line 293
            if ($this->getAttribute(($context["page"] ?? null), "footer_column_first", [])) {
                // line 294
                echo "                  <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_columns_width"] ?? null)), "html", null, true);
                echo "\">
                    <div class=\"column-block clearfix\">
                      ";
                // line 296
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_column_first", [])), "html", null, true);
                echo "
                    </div>
                  </div>
                ";
            }
            // line 300
            echo "
                ";
            // line 301
            if ($this->getAttribute(($context["page"] ?? null), "footer_column_second", [])) {
                // line 302
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_columns_width"] ?? null)), "html", null, true);
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 304
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_column_second", [])), "html", null, true);
                echo "
                      </div>
                    </div>
                ";
            }
            // line 308
            echo "
                ";
            // line 309
            if ($this->getAttribute(($context["page"] ?? null), "footer_column_third", [])) {
                // line 310
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_columns_width"] ?? null)), "html", null, true);
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 312
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_column_third", [])), "html", null, true);
                echo "
                      </div>
                    </div>
                ";
            }
            // line 316
            echo "
                ";
            // line 317
            if ($this->getAttribute(($context["page"] ?? null), "footer_column_fourth", [])) {
                // line 318
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_columns_width"] ?? null)), "html", null, true);
                echo "\">
                      <div class=\"column-block clearfix\">
                        ";
                // line 320
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_column_fourth", [])), "html", null, true);
                echo "
                      </div>
                    </div>
                ";
            }
            // line 324
            echo "          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>

      </div> <!--/#footer-columns -->
      ";
        }
        // line 329
        echo "
      ";
        // line 330
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 331
            echo "      <div id=\"footer\"><div class=\"section\">
        ";
            // line 332
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div></div> <!-- /.section, /#footer -->
      ";
        }
        // line 335
        echo "
    </div> <!-- /#footer-wrapper -->


  </div> <!-- /#page -->
</div> <!-- /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/mayo/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 335,  580 => 332,  577 => 331,  575 => 330,  572 => 329,  565 => 324,  558 => 320,  552 => 318,  550 => 317,  547 => 316,  540 => 312,  534 => 310,  532 => 309,  529 => 308,  522 => 304,  516 => 302,  514 => 301,  511 => 300,  504 => 296,  498 => 294,  496 => 293,  491 => 290,  489 => 289,  488 => 288,  478 => 280,  473 => 278,  470 => 277,  468 => 276,  462 => 272,  453 => 265,  446 => 261,  440 => 259,  438 => 258,  435 => 257,  428 => 253,  422 => 251,  420 => 250,  417 => 249,  410 => 245,  404 => 243,  402 => 242,  399 => 241,  392 => 237,  386 => 235,  384 => 234,  378 => 230,  376 => 229,  375 => 228,  369 => 224,  363 => 221,  360 => 220,  357 => 219,  351 => 216,  348 => 215,  346 => 214,  335 => 207,  329 => 206,  324 => 205,  318 => 202,  313 => 201,  311 => 200,  306 => 199,  300 => 198,  296 => 197,  292 => 195,  286 => 193,  284 => 192,  274 => 184,  267 => 179,  260 => 175,  254 => 173,  252 => 172,  249 => 171,  242 => 167,  236 => 165,  234 => 164,  231 => 163,  224 => 159,  218 => 157,  216 => 156,  213 => 155,  206 => 151,  200 => 149,  198 => 148,  192 => 144,  190 => 143,  189 => 142,  185 => 140,  178 => 137,  176 => 136,  172 => 134,  166 => 133,  164 => 132,  156 => 126,  150 => 124,  147 => 123,  141 => 120,  137 => 118,  131 => 117,  129 => 116,  126 => 115,  124 => 114,  112 => 105,  109 => 104,  101 => 98,  99 => 97,  96 => 96,  90 => 93,  87 => 92,  85 => 91,  75 => 88,  68 => 86,  60 => 85,  55 => 84,);
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
 * Mayo's theme implementation to display a single page.
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
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 * - hide_site_name: A flag indicating if the site name has been toggled off on
 *   the theme settings page. If hidden, the \"visually-hidden\" class is added
 *   to make the site name visually hidden, but still accessible.
 * - hide_site_slogan: A flag indicating if the site slogan has been toggled off
 *   on the theme settings page. If hidden, the \"visually-hidden\" class is
 *   added to make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.menubar: Items for the menubar region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.banner_top: Items for the banner top region.
 * - page.top_column_first: Items for the top first column.
 * - page.top_column_second: Items for the top second column.
 * - page.top_column_third: Items for the top third column.
 * - page.top_column_fourth: Items for the top fourth column.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.bottom_column_first: Items for the bottom first column.
 * - page.bottom_column_second: Items for the bottom second column.
 * - page.bottom_column_third: Items for the bottom third column.
 * - page.bottom_column_fourth: Items for the bottom fourth column.
 * - page.banner_bottom: Items for the bottom banner region.
 * - page.footer_column_first: Items for the first footer column.
 * - page.footer_column_second: Items for the second footer column.
 * - page.footer_column_third: Items for the third footer column.
 * - page.footer_column_forth: Items for the fourth footer column.
 * - page.footer: Items for the footer region.
 *
 * @see template_preprocess_page()
 * @see mayo_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"page-wrapper\" style=\"{{ page_wrapper_style }}\">
<div id=\"page\"{% if page_style %} style=\"{{ page_style }}\"{% endif %}>
    <header id=\"header\" role=\"banner\" style=\"{{ header_style }}\" aria-label=\"{{ 'Site header'|t}}\">
    <div class=\"section clearfix\">
    <div id=\"header-watermark\"{% if header_watermark_style %} style=\"{{ header_watermark_style }}\" {% endif %}>
    <div class=\"section clearfix\">

      {% if header_searchbox %}
        <div id=\"header-searchbox\">
       {{ output_form }}
        </div>
      {% endif %}

      {% if header_fontsizer %}
        <div id=\"header-fontsizer\">
        <a href=\"#\" class=\"decreaseFont\" title=\"Decrease text size\"></a>
        <a href=\"#\" class=\"resetFont\"    title=\"Restore default text size\"></a>
        <a href=\"#\" class=\"increaseFont\" title=\"Increase text size\"></a>
        </div>
      {% endif %}

    {{ page.header }}

    </div> <!-- /.section -->
    </div> <!-- /#header-watermark -->
    </div></header> <!-- /#header -->

    <div class=\"clearfix cfie\"></div>

    <!-- for nice_menus, superfish -->
    {% if page.menubar %}
    <div id=\"menubar\" class=\"menubar clearfix\"
      {%  if menubar_background %}
        style=\"{{ menubar_bg_value }}\"
        {% endif %}>

      {{ page.menubar }}
    </div>
    {% endif %}
    {% if page.highlighted %}
      {{ page.highlighted }}
    {% endif %}

    <!-- space between menus and contents -->
    <div class=\"spacer clearfix cfie\"></div>

    <div id=\"main-wrapper\">
    <div id=\"main\" class=\"clearfix\"
      {%  if main_style %}
        style=\"{{ main_style }}\"
        {% endif %}>

      {% if page.banner_top %}
      <div id=\"banner-top\" class=\"banner clearfix\">{{ page.banner_top }}</div>
      <div class=\"spacer clearfix cfie\"></div>
      {% endif %}


     {% if page.top_column_first or page.top_column_second or
              page.top_column_third or page.top_column_fourth %}
      <div id=\"top-wrapper\">
        <div id=\"top-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                {% if page.top_column_first %}
                  <div class=\"column-block-wrapper clearfix\" style=\"width: {{ top_columns_width }}\">
                    <div class=\"column-block clearfix\">
                      {{ page.top_column_first }}
                    </div>
                  </div>
                {% endif %}

                {% if page.top_column_second %}
                    <div class=\"column-block-wrapper clearfix\" style=\"width: {{ top_columns_width }}\">
                      <div class=\"column-block clearfix\">
                        {{ page.top_column_second }}
                      </div>
                    </div>
                {% endif %}

                {% if page.top_column_third %}
                    <div class=\"column-block-wrapper clearfix\" style=\"width: {{ top_columns_width }}\">
                      <div class=\"column-block clearfix\">
                        {{ page.top_column_third }}
                      </div>
                    </div>
                {% endif %}

                {% if page.top_column_fourth %}
                    <div class=\"column-block-wrapper clearfix\" style=\"width: {{ top_columns_width }}\">
                      <div class=\"column-block clearfix\">
                        {{ page.top_column_fourth }}
                      </div>
                    </div>
                {% endif %}
          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>
        </div> <!--/#top-columns -->
      </div> <!-- /#top-wrapper -->
      {% endif %}


      <div class=\"clearfix cfie\"></div>


      <!-- main content -->
      <main id=\"content\" class=\"column\"><section class=\"section\">

        {% if page.breadcrumb %}
          <div id=\"breadcrumb\">{{ page.breadcrumb }}</div>
        {% endif %}

        <a id=\"main-content\"></a>
        {{ title_prefix }}
        {% if title %}<h1 class=\"title\" id=\"page-title\">{{ title }}</h1>{% endif %}
        {{ title_suffix }}
        {% if tabs %}
          <nav class=\"tabs\" role=\"navigation\" aria-label=\"{{ 'Tabs'|t }}\">
            {{ tabs }}
          </nav>
        {% endif %}
        {{ page.help }}
        {% if action_links %}<ul class=\"action-links\">{{ action_links }}</ul>{% endif %}
        {{ page.content }}


      </section></main> <!-- /.section, /#content -->


      <!-- sidebar (first) -->
      {% if (page.sidebar_first) %}
        <div id=\"sidebar-first\" class=\"column sidebar\"><div class=\"section\">
          {{ page.sidebar_first }}
        </div></div> <!-- /.section, /#sidebar-first -->
      {% endif %}
      {% if (page.sidebar_second) %}
        <div id=\"sidebar-second\" class=\"column sidebar\"><div class=\"section\">
          {{ page.sidebar_second }}
        </div></div> <!-- /.section, /#sidebar-second -->
      {% endif %}


      <div class=\"clearfix cfie\"></div>

     {% if page.bottom_column_first or page.bottom_column_second or
              page.bottom_column_third or page.bottom_column_fourth %}
      <div id=\"bottom-wrapper\">
        <div id=\"bottom-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                {% if page.bottom_column_first %}
                  <div class=\"column-block-wrapper clearfix\" style=\"width: {{ bottom_columns_width }}\">
                    <div class=\"column-block clearfix\">
                      {{ page.bottom_column_first }}
                    </div>
                  </div>
                {% endif %}

                {% if page.bottom_column_second %}
                    <div class=\"column-block-wrapper clearfix\" style=\"width: {{ bottom_columns_width }}\">
                      <div class=\"column-block clearfix\">
                        {{ page.bottom_column_second }}
                      </div>
                    </div>
                {% endif %}

                {% if page.bottom_column_third %}
                    <div class=\"column-block-wrapper clearfix\" style=\"width: {{ bottom_columns_width }}\">
                      <div class=\"column-block clearfix\">
                        {{ page.bottom_column_third }}
                      </div>
                    </div>
                {% endif %}

                {% if page.bottom_column_fourth %}
                    <div class=\"column-block-wrapper clearfix\" style=\"width: {{ bottom_columns_width }}\">
                      <div class=\"column-block clearfix\">
                        {{ page.bottom_column_fourth }}
                      </div>
                    </div>
                {% endif %}
          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>


        </div> <!--/#bottom-columns -->
      </div> <!-- /#bottom-wrapper -->
      {% endif %}

      <div class=\"clearfix cfie\"></div>


      {% if page.banner_bottom %}
      <div id=\"spacer\" class=\"clearfix cfie\"></div>
      <div id=\"banner-bottom\" class=\"banner clearfix\">{{ page.banner_bottom }}</div>
      {% endif %}

    </div> <!-- /#main -->
    </div> <!-- /#main-wrapper -->

    <!-- space between contents and footer -->
    <div id=\"spacer\" class=\"clearfix cfie\"></div>

    <div id=\"footer-wrapper\">
     {% if page.footer_column_first or page.footer_column_second or
              page.footer_column_third or page.footer_column_fourth %}
      <div id=\"footer-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                {% if page.footer_column_first %}
                  <div class=\"column-block-wrapper clearfix\" style=\"width: {{ footer_columns_width }}\">
                    <div class=\"column-block clearfix\">
                      {{ page.footer_column_first }}
                    </div>
                  </div>
                {% endif %}

                {% if page.footer_column_second %}
                    <div class=\"column-block-wrapper clearfix\" style=\"width: {{ footer_columns_width }}\">
                      <div class=\"column-block clearfix\">
                        {{ page.footer_column_second }}
                      </div>
                    </div>
                {% endif %}

                {% if page.footer_column_third %}
                    <div class=\"column-block-wrapper clearfix\" style=\"width: {{ footer_columns_width }}\">
                      <div class=\"column-block clearfix\">
                        {{ page.footer_column_third }}
                      </div>
                    </div>
                {% endif %}

                {% if page.footer_column_fourth %}
                    <div class=\"column-block-wrapper clearfix\" style=\"width: {{ footer_columns_width }}\">
                      <div class=\"column-block clearfix\">
                        {{ page.footer_column_fourth }}
                      </div>
                    </div>
                {% endif %}
          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>

      </div> <!--/#footer-columns -->
      {% endif %}

      {% if page.footer %}
      <div id=\"footer\"><div class=\"section\">
        {{ page.footer }}
      </div></div> <!-- /.section, /#footer -->
      {% endif %}

    </div> <!-- /#footer-wrapper -->


  </div> <!-- /#page -->
</div> <!-- /#page-wrapper -->
", "themes/contrib/mayo/templates/page.html.twig", "/mnt/c/debian/server/myDrupal/themes/contrib/mayo/templates/page.html.twig");
    }
}
