<?php

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_ce4f074faa8fe29a8d7b0a2d7a16709c extends Twig_Template
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
        echo "<div class=\"block\">
    ";
        // line 2
        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
        if (($_count_ > 0)) {
            // line 3
            echo "        <h2>
            <span><small>[";
            // line 4
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, (($_count_ - $_position_) + 1), "html", null, true);
            echo "/";
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            echo twig_escape_filter($this->env, ($_count_ + 1), "html", null, true);
            echo "]</small></span>
            ";
            // line 5
            if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute($_exception_, "class"));
            echo ": ";
            if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
            echo $this->env->getExtension('code')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute($_exception_, "message"), "html", null, true)));
            echo "&nbsp;
            ";
            // line 6
            ob_start();
            // line 7
            echo "            <a href=\"#\" onclick=\"toggle('traces_";
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, $_position_, "html", null, true);
            echo "', 'traces'); switchIcons('icon_traces_";
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, $_position_, "html", null, true);
            echo "_open', 'icon_traces_";
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, $_position_, "html", null, true);
            echo "_close'); return false;\">
                <img class=\"toggle\" id=\"icon_traces_";
            // line 8
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, $_position_, "html", null, true);
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            echo (((0 == $_count_)) ? ("visible") : ("hidden"));
            echo "\" />
                <img class=\"toggle\" id=\"icon_traces_";
            // line 9
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            echo twig_escape_filter($this->env, $_position_, "html", null, true);
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
            echo (((0 == $_count_)) ? ("hidden") : ("visible"));
            echo "; margin-left: -18px\" />
            </a>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "        </h2>
    ";
        } else {
            // line 14
            echo "        <h2>Stack Trace</h2>
    ";
        }
        // line 16
        echo "
    <a id=\"traces_link_";
        // line 17
        if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
        echo twig_escape_filter($this->env, $_position_, "html", null, true);
        echo "\"></a>
    <ol class=\"traces list_exception\" id=\"traces_";
        // line 18
        if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
        echo twig_escape_filter($this->env, $_position_, "html", null, true);
        echo "\" style=\"display: ";
        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
        echo (((0 == $_count_)) ? ("block") : ("none"));
        echo "\">
        ";
        // line 19
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_exception_, "trace"));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            $this->env->loadTemplate("TwigBundle:Exception:trace.html.twig")->display(array("prefix" => $_position_, "i" => $_i_, "trace" => $_trace_));
            // line 22
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    </ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 18,  92 => 17,  89 => 16,  85 => 14,  28 => 4,  36 => 6,  104 => 19,  58 => 12,  40 => 7,  94 => 39,  88 => 6,  31 => 6,  21 => 1,  50 => 7,  47 => 7,  27 => 3,  250 => 96,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 80,  218 => 79,  215 => 78,  212 => 77,  209 => 76,  200 => 71,  194 => 67,  179 => 61,  173 => 59,  166 => 55,  162 => 54,  157 => 51,  155 => 50,  151 => 48,  145 => 46,  139 => 45,  128 => 43,  118 => 22,  114 => 20,  109 => 31,  84 => 27,  79 => 39,  69 => 9,  65 => 14,  34 => 5,  26 => 4,  24 => 4,  25 => 3,  19 => 1,  63 => 13,  60 => 8,  48 => 14,  46 => 9,  39 => 7,  22 => 2,  184 => 32,  176 => 60,  172 => 49,  169 => 48,  165 => 46,  159 => 45,  148 => 47,  137 => 41,  125 => 24,  120 => 38,  117 => 37,  115 => 36,  110 => 20,  107 => 32,  101 => 29,  90 => 25,  87 => 28,  80 => 15,  67 => 19,  57 => 9,  54 => 6,  51 => 14,  44 => 9,  42 => 12,  38 => 5,  35 => 7,  32 => 4,  29 => 3,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 21,  108 => 29,  105 => 19,  102 => 27,  99 => 26,  95 => 24,  91 => 16,  81 => 12,  70 => 14,  66 => 13,  62 => 22,  59 => 8,  56 => 10,  52 => 11,  49 => 10,  45 => 6,  41 => 15,  37 => 5,  33 => 4,  30 => 3,);
    }
}
