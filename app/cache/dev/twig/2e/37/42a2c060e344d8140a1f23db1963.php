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
        return array (  172 => 65,  165 => 61,  156 => 55,  152 => 54,  148 => 53,  144 => 52,  136 => 46,  133 => 45,  128 => 42,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  94 => 27,  83 => 20,  80 => 19,  75 => 6,  69 => 66,  67 => 65,  64 => 64,  62 => 45,  58 => 43,  56 => 42,  49 => 39,  47 => 19,  31 => 6,  24 => 1,  222 => 142,  220 => 141,  217 => 140,  214 => 139,  190 => 119,  186 => 118,  182 => 117,  178 => 116,  174 => 115,  170 => 114,  154 => 101,  127 => 77,  101 => 54,  76 => 32,  55 => 13,  53 => 12,  50 => 11,  48 => 10,  45 => 9,  43 => 8,  39 => 6,  36 => 5,  30 => 2,);
    }
}
