<?php

/* ::base.html.twig */
class __TwigTemplate_2e3742a2c060e344d8140a1f23db1963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!--[if lte IE 7]> <html class=\"ie7\"> <![endif]-->
    <!--[if IE 8]>     <html class=\"ie8\"> <![endif]-->
    <!--[if IE 9]>     <html class=\"ie9\"> <![endif]-->
    <!--[if !IE]><!-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "
    ";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <style type=\"text/css\">
                body {
                    padding-top: 5px;
                    padding-bottom: 40px;
                }
            </style>
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/themes/default/default.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/themes/light/light.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/themes/dark/dark.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/themes/bar/bar.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/css/nivo-slider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
            <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />



        ";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "            <script type=\"text/javascript\">
            jQuery(document).ready(function (\$) {
                \$('#tabs').tab();
            });
        </script>

            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/jquery-1.9.0.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/jquery.nivo.slider.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$(window).load(function() {
                    \$('#slider').nivoSlider();
                });
            </script>
            <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/html5shiv.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 61,  156 => 55,  119 => 34,  115 => 33,  107 => 31,  103 => 30,  67 => 65,  184 => 116,  172 => 65,  168 => 112,  55 => 13,  53 => 12,  54 => 14,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 99,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 85,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 69,  230 => 68,  188 => 117,  185 => 60,  161 => 58,  154 => 55,  146 => 51,  143 => 50,  134 => 43,  131 => 42,  122 => 37,  76 => 32,  72 => 15,  51 => 13,  171 => 58,  163 => 55,  159 => 53,  152 => 54,  138 => 44,  123 => 42,  117 => 36,  111 => 32,  101 => 34,  98 => 33,  83 => 20,  75 => 6,  71 => 19,  64 => 64,  43 => 8,  125 => 75,  110 => 20,  97 => 18,  92 => 25,  89 => 28,  85 => 14,  28 => 4,  36 => 5,  104 => 19,  80 => 19,  63 => 13,  58 => 43,  40 => 6,  94 => 27,  88 => 6,  48 => 10,  39 => 6,  35 => 5,  31 => 6,  21 => 1,  46 => 12,  29 => 3,  57 => 9,  50 => 11,  47 => 19,  38 => 6,  32 => 4,  27 => 3,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 140,  218 => 139,  215 => 138,  212 => 137,  209 => 76,  200 => 66,  194 => 65,  179 => 59,  176 => 114,  173 => 59,  166 => 55,  162 => 54,  157 => 56,  155 => 51,  151 => 48,  148 => 53,  145 => 46,  139 => 45,  128 => 42,  118 => 22,  114 => 20,  109 => 31,  87 => 28,  84 => 21,  79 => 39,  69 => 66,  65 => 14,  34 => 5,  26 => 6,  24 => 1,  25 => 3,  22 => 2,  19 => 1,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 115,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 52,  136 => 46,  133 => 45,  130 => 35,  124 => 32,  121 => 31,  113 => 21,  108 => 31,  105 => 19,  102 => 28,  99 => 29,  95 => 24,  91 => 16,  81 => 12,  70 => 15,  66 => 13,  62 => 45,  59 => 15,  56 => 42,  52 => 10,  49 => 39,  45 => 9,  41 => 9,  37 => 5,  33 => 4,  30 => 2,);
    }
}
