<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_5352f6f4019617798caeae15eaec1bcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Symfony logo\" />
                </a>
                <form id=\"symfony-search\" method=\"GET\" action=\"http://symfony.com/search\">
                    <label for=\"symfony-search-field\"><span>Search on Symfony Website</span></label>
                    <input name=\"q\" id=\"symfony-search-field\" type=\"search\" placeholder=\"Search on Symfony website\" class=\"medium_txt\" />
                    <input type=\"submit\" class=\"symfony-button-grey\" value=\"OK\" />
                </form>
            </div>

            ";
        // line 22
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 24
            if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
            echo twig_escape_filter($this->env, $_flashMessage_, "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "
            ";
        // line 28
        $this->displayBlock('content_header', $context, $blocks);
        // line 37
        echo "
            <div class=\"symfony-content\">
                ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "            </div>

            ";
        // line 43
        if (array_key_exists("code", $context)) {
            // line 44
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 45
            if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
            echo $_code_;
            echo "</div>
            ";
        }
        // line 47
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 28
    public function block_content_header($context, array $blocks = array())
    {
        // line 29
        echo "                <ul id=\"menu\">
                    ";
        // line 30
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 33
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 30
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 31
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Demo Home</a></li>
                    ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  112 => 5,  96 => 44,  61 => 22,  23 => 1,  82 => 28,  156 => 55,  119 => 34,  103 => 30,  222 => 142,  217 => 140,  214 => 139,  190 => 119,  186 => 118,  182 => 117,  178 => 116,  127 => 77,  55 => 13,  53 => 12,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 99,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 85,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 69,  230 => 68,  188 => 61,  185 => 60,  161 => 58,  154 => 101,  146 => 40,  143 => 39,  134 => 43,  131 => 105,  122 => 37,  76 => 32,  72 => 15,  171 => 58,  163 => 55,  152 => 54,  138 => 44,  123 => 42,  111 => 32,  98 => 33,  83 => 20,  75 => 6,  71 => 19,  64 => 64,  43 => 7,  97 => 18,  92 => 25,  89 => 28,  85 => 14,  28 => 4,  36 => 13,  104 => 19,  58 => 43,  40 => 14,  94 => 43,  88 => 39,  31 => 6,  21 => 1,  50 => 11,  47 => 19,  27 => 3,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 141,  218 => 67,  215 => 78,  212 => 77,  209 => 76,  200 => 66,  194 => 65,  179 => 59,  173 => 59,  166 => 55,  162 => 54,  157 => 56,  155 => 51,  151 => 48,  145 => 46,  139 => 45,  128 => 42,  118 => 28,  114 => 20,  109 => 31,  84 => 37,  79 => 27,  69 => 24,  65 => 14,  34 => 5,  26 => 6,  24 => 1,  25 => 5,  19 => 1,  63 => 13,  60 => 12,  48 => 10,  46 => 12,  39 => 6,  22 => 2,  184 => 32,  176 => 60,  172 => 65,  169 => 48,  165 => 61,  159 => 53,  148 => 53,  137 => 41,  125 => 24,  120 => 38,  117 => 36,  115 => 33,  110 => 20,  107 => 31,  101 => 54,  90 => 41,  87 => 28,  80 => 19,  67 => 65,  57 => 9,  54 => 10,  51 => 13,  44 => 9,  42 => 12,  38 => 6,  35 => 5,  32 => 4,  29 => 5,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 115,  170 => 114,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 52,  136 => 31,  133 => 30,  130 => 35,  124 => 30,  121 => 29,  113 => 21,  108 => 31,  105 => 47,  102 => 28,  99 => 45,  95 => 24,  91 => 16,  81 => 12,  70 => 14,  66 => 23,  62 => 45,  59 => 15,  56 => 42,  52 => 10,  49 => 13,  45 => 12,  41 => 9,  37 => 7,  33 => 6,  30 => 2,);
    }
}
