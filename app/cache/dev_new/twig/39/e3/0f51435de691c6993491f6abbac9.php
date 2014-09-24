<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_39e30f51435de691c6993491f6abbac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear_fix\">
                <div class=\"header_logo\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/logo_symfony.png"), "html", null, true);
        echo "\" alt=\"Symfony\" />
                </div>

                <div class=\"search\">
                  <form method=\"get\" action=\"http://symfony.com/search\">
                    <div class=\"form_row\">

                      <label for=\"search_id\">
                          <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/grey_magnifier.png"), "html", null, true);
        echo "\" alt=\"Search on Symfony website\" />
                      </label>

                      <input name=\"q\" id=\"search_id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                      <button type=\"submit\">
                        <span class=\"border_l\">
                          <span class=\"border_r\">
                            <span class=\"btn_bg\">OK</span>
                          </span>
                        </span>
                      </button>
                    </div>
                   </form>
                </div>
            </div>

            ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 39,  88 => 6,  31 => 6,  21 => 1,  50 => 7,  47 => 6,  27 => 2,  250 => 96,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 80,  218 => 79,  215 => 78,  212 => 77,  209 => 76,  200 => 71,  194 => 67,  179 => 61,  173 => 59,  166 => 55,  162 => 54,  157 => 51,  155 => 50,  151 => 48,  145 => 46,  139 => 45,  128 => 43,  118 => 36,  114 => 34,  109 => 31,  84 => 27,  79 => 39,  69 => 24,  65 => 23,  34 => 11,  26 => 4,  24 => 4,  25 => 3,  19 => 1,  63 => 9,  60 => 8,  48 => 14,  46 => 7,  39 => 8,  22 => 2,  184 => 32,  176 => 60,  172 => 49,  169 => 48,  165 => 46,  159 => 45,  148 => 47,  137 => 41,  125 => 39,  120 => 38,  117 => 37,  115 => 36,  110 => 33,  107 => 32,  101 => 29,  90 => 25,  87 => 28,  80 => 22,  67 => 19,  57 => 9,  54 => 6,  51 => 14,  44 => 9,  42 => 12,  38 => 5,  35 => 7,  32 => 4,  29 => 3,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 30,  108 => 29,  105 => 31,  102 => 27,  99 => 26,  95 => 24,  91 => 22,  81 => 40,  70 => 14,  66 => 13,  62 => 22,  59 => 22,  56 => 10,  52 => 6,  49 => 8,  45 => 7,  41 => 15,  37 => 4,  33 => 4,  30 => 3,);
    }
}
