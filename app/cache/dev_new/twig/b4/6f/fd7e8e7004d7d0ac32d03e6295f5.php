<?php

/* WebProfilerBundle:Profiler:base.html.twig */
class __TwigTemplate_b46ffd7e8e7004d7d0ac32d03e6295f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "        ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_style.html.twig")->display(array_merge($context, array("position" => "top", "floatable" => false)));
        // line 12
        echo "    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Profiler";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/css/profiler.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  60 => 8,  48 => 15,  46 => 14,  39 => 11,  22 => 1,  184 => 32,  176 => 50,  172 => 49,  169 => 48,  165 => 46,  159 => 45,  148 => 42,  137 => 41,  125 => 39,  120 => 38,  117 => 37,  115 => 36,  110 => 33,  107 => 32,  101 => 29,  90 => 25,  87 => 24,  80 => 22,  67 => 19,  57 => 16,  54 => 6,  51 => 14,  44 => 9,  42 => 12,  38 => 6,  35 => 5,  32 => 4,  29 => 6,  203 => 70,  197 => 66,  189 => 62,  183 => 58,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 40,  130 => 35,  124 => 32,  121 => 31,  113 => 30,  108 => 29,  105 => 31,  102 => 27,  99 => 26,  95 => 24,  91 => 22,  81 => 19,  70 => 14,  66 => 13,  62 => 18,  59 => 11,  56 => 10,  52 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 8,  33 => 7,  30 => 3,);
    }
}
