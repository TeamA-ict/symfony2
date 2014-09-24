<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_33f072d18a9e3a0660c081ad41889531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 96,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 80,  218 => 79,  215 => 78,  212 => 77,  209 => 76,  200 => 71,  194 => 67,  179 => 61,  173 => 59,  166 => 55,  162 => 54,  157 => 51,  155 => 50,  151 => 48,  145 => 46,  139 => 45,  128 => 43,  118 => 36,  114 => 34,  109 => 31,  84 => 27,  79 => 26,  69 => 24,  65 => 23,  34 => 11,  26 => 6,  24 => 4,  25 => 3,  19 => 1,  63 => 9,  60 => 8,  48 => 15,  46 => 14,  39 => 11,  22 => 2,  184 => 32,  176 => 60,  172 => 49,  169 => 48,  165 => 46,  159 => 45,  148 => 47,  137 => 41,  125 => 39,  120 => 38,  117 => 37,  115 => 36,  110 => 33,  107 => 32,  101 => 29,  90 => 25,  87 => 28,  80 => 22,  67 => 19,  57 => 16,  54 => 6,  51 => 14,  44 => 9,  42 => 12,  38 => 6,  35 => 5,  32 => 4,  29 => 6,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 30,  108 => 29,  105 => 31,  102 => 27,  99 => 26,  95 => 24,  91 => 22,  81 => 19,  70 => 14,  66 => 13,  62 => 22,  59 => 11,  56 => 10,  52 => 9,  49 => 19,  45 => 7,  41 => 15,  37 => 8,  33 => 9,  30 => 3,);
    }
}
