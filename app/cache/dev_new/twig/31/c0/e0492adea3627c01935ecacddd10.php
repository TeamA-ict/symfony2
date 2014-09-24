<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_31c0e0492adea3627c01935ecacddd10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((!$this->getAttribute($_collector_, "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($_collector_, "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 69,  205 => 68,  129 => 51,  68 => 23,  392 => 163,  381 => 160,  376 => 159,  373 => 158,  367 => 157,  356 => 150,  353 => 149,  346 => 145,  338 => 141,  330 => 137,  322 => 133,  314 => 129,  298 => 121,  282 => 109,  274 => 105,  266 => 101,  258 => 97,  248 => 89,  245 => 88,  237 => 83,  234 => 82,  231 => 81,  210 => 72,  177 => 60,  149 => 49,  135 => 52,  132 => 44,  116 => 42,  86 => 33,  78 => 23,  126 => 50,  112 => 42,  96 => 31,  61 => 22,  23 => 1,  82 => 28,  156 => 55,  119 => 40,  103 => 30,  222 => 77,  217 => 74,  214 => 139,  190 => 67,  186 => 66,  182 => 64,  178 => 63,  127 => 45,  55 => 13,  53 => 14,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 156,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 125,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 69,  230 => 71,  188 => 61,  185 => 64,  161 => 58,  154 => 101,  146 => 40,  143 => 47,  134 => 43,  131 => 105,  122 => 41,  76 => 23,  72 => 21,  171 => 58,  163 => 55,  152 => 54,  138 => 53,  123 => 42,  111 => 32,  98 => 33,  83 => 20,  75 => 22,  71 => 24,  64 => 64,  43 => 7,  97 => 18,  92 => 29,  89 => 29,  85 => 28,  28 => 3,  36 => 5,  104 => 35,  58 => 17,  40 => 14,  94 => 35,  88 => 39,  31 => 3,  21 => 1,  50 => 10,  47 => 9,  27 => 3,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 78,  220 => 141,  218 => 67,  215 => 78,  212 => 70,  209 => 76,  200 => 70,  194 => 65,  179 => 59,  173 => 59,  166 => 55,  162 => 53,  157 => 56,  155 => 51,  151 => 48,  145 => 46,  139 => 45,  128 => 42,  118 => 28,  114 => 20,  109 => 39,  84 => 37,  79 => 24,  69 => 20,  65 => 14,  34 => 5,  26 => 9,  24 => 1,  25 => 29,  19 => 1,  63 => 16,  60 => 17,  48 => 9,  46 => 12,  39 => 6,  22 => 2,  184 => 32,  176 => 60,  172 => 65,  169 => 56,  165 => 54,  159 => 52,  148 => 53,  137 => 41,  125 => 43,  120 => 38,  117 => 43,  115 => 33,  110 => 20,  107 => 41,  101 => 54,  90 => 41,  87 => 29,  80 => 19,  67 => 65,  57 => 9,  54 => 14,  51 => 13,  44 => 8,  42 => 8,  38 => 5,  35 => 6,  32 => 5,  29 => 5,  203 => 72,  197 => 69,  189 => 62,  183 => 63,  180 => 57,  174 => 115,  170 => 114,  167 => 62,  158 => 48,  153 => 45,  150 => 55,  147 => 61,  144 => 54,  136 => 31,  133 => 30,  130 => 35,  124 => 30,  121 => 29,  113 => 41,  108 => 31,  105 => 47,  102 => 28,  99 => 36,  95 => 24,  91 => 31,  81 => 32,  70 => 14,  66 => 23,  62 => 16,  59 => 14,  56 => 13,  52 => 12,  49 => 13,  45 => 8,  41 => 10,  37 => 7,  33 => 4,  30 => 3,);
    }
}
