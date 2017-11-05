<?php

/* @bootstrap_barrio/layout/page.html.twig */
class __TwigTemplate_9e62549f34da0a7349de4cfb4d1772f9b1460841acd94864fda6d100bf6e440d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'featured' => array($this, 'block_featured'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 73, "if" => 120);
        $filters = array("t" => 72);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if'),
                array('t'),
                array()
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

        // line 70
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
      ";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 119
        echo "    </header>
    ";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 121
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 122
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 123
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 127
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 128
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 135
            echo "    ";
        }
        // line 136
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 137
        $this->displayBlock('content', $context, $blocks);
        // line 164
        echo "    </div>
    ";
        // line 165
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()))) {
            // line 166
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 167
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " clearfix\" role=\"complementary\">
          ";
            // line 168
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()), "html", null, true));
            echo "
          ";
            // line 169
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array()), "html", null, true));
            echo "
          ";
            // line 170
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 174
        echo "    <footer class=\"site-footer\">
      ";
        // line 175
        $this->displayBlock('footer', $context, $blocks);
        // line 192
        echo "    </footer>
  </div>
</div>
";
    }

    // line 73
    public function block_head($context, array $blocks = array())
    {
        // line 74
        echo "        ";
        if ((($this->getAttribute(($context["page"] ?? null), "secondary_menu", array()) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "page", array()), "top_header", array())) || $this->getAttribute(($context["page"] ?? null), "top_header_form", array()))) {
            // line 75
            echo "          <nav";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["navbar_top_attributes"] ?? null), "html", null, true));
            echo ">
          ";
            // line 76
            if (($context["container_navbar"] ?? null)) {
                // line 77
                echo "          <div class=\"container\">
          ";
            }
            // line 79
            echo "              <div class=\"navbar-nav\">
                ";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
            echo "
                ";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header", array()), "html", null, true));
            echo "
              </div>
              ";
            // line 83
            if ($this->getAttribute(($context["page"] ?? null), "top_header_form", array())) {
                // line 84
                echo "                <div class=\"form-inline navbar-form float-right\">
                  ";
                // line 85
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header_form", array()), "html", null, true));
                echo "
                </div>
              ";
            }
            // line 88
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 89
                echo "          </div>
          ";
            }
            // line 91
            echo "          </nav>
        ";
        }
        // line 93
        echo "        <nav";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["navbar_attributes"] ?? null), "html", null, true));
        echo ">
          ";
        // line 94
        if (($context["container_navbar"] ?? null)) {
            // line 95
            echo "          <div class=\"container\">
          ";
        }
        // line 97
        echo "            <div class=\"navbar-brand\">
              ";
        // line 98
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
            </div>
            ";
        // line 100
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", array()) || $this->getAttribute(($context["page"] ?? null), "header_form", array()))) {
            // line 101
            echo "              <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
                ";
            // line 103
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
                ";
            // line 104
            if ($this->getAttribute(($context["page"] ?? null), "header_form", array())) {
                // line 105
                echo "                  <div class=\"form-inline navbar-form float-right\">
                    ";
                // line 106
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_form", array()), "html", null, true));
                echo "
                  </div>
                ";
            }
            // line 109
            echo "\t          </div>
            ";
        }
        // line 111
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 112
            echo "              <button class=\"navbar-toggler navbar-toggler-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 114
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 115
            echo "          </div>
          ";
        }
        // line 117
        echo "        </nav>
      ";
    }

    // line 128
    public function block_featured($context, array $blocks = array())
    {
        // line 129
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " clearfix\" role=\"complementary\">
            ";
        // line 131
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
        echo "
          </aside>
        </div>
      ";
    }

    // line 137
    public function block_content($context, array $blocks = array())
    {
        // line 138
        echo "        <div id=\"main\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
            ";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
              <main";
        // line 141
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true));
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 144
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                </section>
              </main>
            ";
        // line 147
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 148
            echo "              <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_attributes"] ?? null), "html", null, true));
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 150
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
                </aside>
              </div>
            ";
        }
        // line 154
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 155
            echo "              <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_attributes"] ?? null), "html", null, true));
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 157
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
                </aside>
              </div>
            ";
        }
        // line 161
        echo "          </div>
        </div>
      ";
    }

    // line 175
    public function block_footer($context, array $blocks = array())
    {
        // line 176
        echo "        <div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
          ";
        // line 177
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 178
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 179
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
              ";
            // line 180
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
              ";
            // line 181
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
              ";
            // line 182
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 185
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
            // line 186
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 187
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 190
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "@bootstrap_barrio/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 190,  360 => 187,  357 => 186,  354 => 185,  348 => 182,  344 => 181,  340 => 180,  336 => 179,  333 => 178,  331 => 177,  326 => 176,  323 => 175,  317 => 161,  310 => 157,  304 => 155,  301 => 154,  294 => 150,  288 => 148,  286 => 147,  280 => 144,  274 => 141,  270 => 140,  264 => 138,  261 => 137,  253 => 131,  249 => 130,  246 => 129,  243 => 128,  238 => 117,  234 => 115,  231 => 114,  227 => 112,  224 => 111,  220 => 109,  214 => 106,  211 => 105,  209 => 104,  205 => 103,  201 => 101,  199 => 100,  194 => 98,  191 => 97,  187 => 95,  185 => 94,  180 => 93,  176 => 91,  172 => 89,  169 => 88,  163 => 85,  160 => 84,  158 => 83,  153 => 81,  149 => 80,  146 => 79,  142 => 77,  140 => 76,  135 => 75,  132 => 74,  129 => 73,  122 => 192,  120 => 175,  117 => 174,  110 => 170,  106 => 169,  102 => 168,  98 => 167,  95 => 166,  93 => 165,  90 => 164,  88 => 137,  85 => 136,  82 => 135,  79 => 128,  76 => 127,  69 => 123,  65 => 122,  62 => 121,  60 => 120,  57 => 119,  55 => 73,  51 => 72,  47 => 70,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bootstrap_barrio/layout/page.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\bootstrap_barrio\\templates\\layout\\page.html.twig");
    }
}
