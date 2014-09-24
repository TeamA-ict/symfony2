<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fc79604fc6d6bc54cebe17737a8e45b5 extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  63 => 9,  60 => 8,  48 => 15,  46 => 14,  39 => 11,  22 => 1,  184 => 32,  176 => 50,  172 => 49,  169 => 48,  165 => 46,  159 => 45,  148 => 42,  137 => 41,  125 => 39,  120 => 38,  117 => 37,  115 => 36,  110 => 33,  107 => 32,  101 => 29,  90 => 25,  87 => 24,  80 => 22,  67 => 19,  57 => 16,  54 => 6,  51 => 14,  44 => 9,  42 => 12,  38 => 6,  35 => 5,  32 => 4,  29 => 6,  203 => 70,  197 => 66,  189 => 62,  183 => 58,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 40,  130 => 35,  124 => 32,  121 => 31,  113 => 30,  108 => 29,  105 => 31,  102 => 27,  99 => 26,  95 => 24,  91 => 22,  81 => 19,  70 => 14,  66 => 13,  62 => 18,  59 => 11,  56 => 10,  52 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 8,  33 => 7,  30 => 3,);
    }
}
