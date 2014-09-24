<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bea106b4166d46216e637d73ec76e48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_exception_, "message"), "html", null, true);
        echo " (";
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  47 => 6,  27 => 2,  250 => 96,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 80,  218 => 79,  215 => 78,  212 => 77,  209 => 76,  200 => 71,  194 => 67,  179 => 61,  173 => 59,  166 => 55,  162 => 54,  157 => 51,  155 => 50,  151 => 48,  145 => 46,  139 => 45,  128 => 43,  118 => 36,  114 => 34,  109 => 31,  84 => 27,  79 => 26,  69 => 24,  65 => 23,  34 => 11,  26 => 6,  24 => 4,  25 => 3,  19 => 1,  63 => 9,  60 => 8,  48 => 15,  46 => 7,  39 => 11,  22 => 2,  184 => 32,  176 => 60,  172 => 49,  169 => 48,  165 => 46,  159 => 45,  148 => 47,  137 => 41,  125 => 39,  120 => 38,  117 => 37,  115 => 36,  110 => 33,  107 => 32,  101 => 29,  90 => 25,  87 => 28,  80 => 22,  67 => 19,  57 => 9,  54 => 6,  51 => 14,  44 => 9,  42 => 12,  38 => 5,  35 => 5,  32 => 4,  29 => 3,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 30,  108 => 29,  105 => 31,  102 => 27,  99 => 26,  95 => 24,  91 => 22,  81 => 19,  70 => 14,  66 => 13,  62 => 22,  59 => 11,  56 => 10,  52 => 6,  49 => 8,  45 => 7,  41 => 15,  37 => 4,  33 => 4,  30 => 3,);
    }
}
