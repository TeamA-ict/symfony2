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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "

        ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
    ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
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
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/themes/default/default.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/themes/light/light.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/themes/dark/dark.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/themes/bar/bar.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/css/nivo-slider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />



        ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "            <script type=\"text/javascript\">
            jQuery(document).ready(function (\$) {
                \$('#tabs').tab();
            });
        </script>

            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/jquery-1.9.0.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/jquery.nivo.slider.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$(window).load(function() {
                    \$('#slider').nivoSlider();
                });
            </script>
            <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/js/html5shiv.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    // line 54
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
        return array (  161 => 54,  154 => 50,  145 => 44,  137 => 42,  133 => 41,  125 => 35,  122 => 34,  117 => 31,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  88 => 18,  83 => 16,  69 => 8,  64 => 6,  58 => 55,  56 => 54,  53 => 53,  51 => 34,  47 => 32,  45 => 31,  38 => 28,  31 => 6,  24 => 1,  392 => 301,  390 => 300,  387 => 299,  384 => 298,  370 => 288,  366 => 287,  362 => 286,  358 => 285,  354 => 284,  350 => 283,  328 => 264,  302 => 241,  276 => 218,  253 => 198,  190 => 138,  141 => 43,  92 => 19,  74 => 30,  72 => 9,  57 => 17,  43 => 6,  39 => 4,  36 => 8,  30 => 2,);
    }
}
