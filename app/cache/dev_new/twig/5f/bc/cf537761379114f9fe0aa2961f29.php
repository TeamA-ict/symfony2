<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_5fbccf537761379114f9fe0aa2961f29 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_logs_);
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (($this->getAttribute($_log_, "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($_log_, "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "priorityName"), "html", null, true);
            echo " - ";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 39,  88 => 6,  31 => 6,  21 => 1,  50 => 7,  47 => 6,  27 => 3,  250 => 96,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 80,  218 => 79,  215 => 78,  212 => 77,  209 => 76,  200 => 71,  194 => 67,  179 => 61,  173 => 59,  166 => 55,  162 => 54,  157 => 51,  155 => 50,  151 => 48,  145 => 46,  139 => 45,  128 => 43,  118 => 36,  114 => 34,  109 => 31,  84 => 27,  79 => 39,  69 => 24,  65 => 23,  34 => 11,  26 => 4,  24 => 4,  25 => 3,  19 => 1,  63 => 9,  60 => 8,  48 => 14,  46 => 7,  39 => 8,  22 => 2,  184 => 32,  176 => 60,  172 => 49,  169 => 48,  165 => 46,  159 => 45,  148 => 47,  137 => 41,  125 => 39,  120 => 38,  117 => 37,  115 => 36,  110 => 33,  107 => 32,  101 => 29,  90 => 25,  87 => 28,  80 => 22,  67 => 19,  57 => 9,  54 => 6,  51 => 14,  44 => 9,  42 => 12,  38 => 5,  35 => 7,  32 => 4,  29 => 3,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 30,  108 => 29,  105 => 31,  102 => 27,  99 => 26,  95 => 24,  91 => 22,  81 => 40,  70 => 14,  66 => 13,  62 => 22,  59 => 22,  56 => 10,  52 => 6,  49 => 8,  45 => 7,  41 => 15,  37 => 4,  33 => 4,  30 => 3,);
    }
}
