<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_85a93e19f67d12f8c7447de94512f13e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($_collector_, "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($_collector_, "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 71,  219 => 69,  202 => 64,  198 => 62,  195 => 61,  187 => 60,  175 => 59,  160 => 58,  208 => 69,  205 => 68,  129 => 51,  68 => 23,  392 => 163,  381 => 160,  376 => 159,  373 => 158,  367 => 157,  356 => 150,  353 => 149,  346 => 145,  338 => 141,  330 => 137,  322 => 133,  314 => 129,  298 => 121,  282 => 109,  274 => 105,  266 => 101,  258 => 97,  248 => 89,  245 => 88,  237 => 83,  234 => 82,  231 => 81,  210 => 72,  177 => 60,  149 => 49,  135 => 52,  132 => 44,  116 => 42,  86 => 24,  78 => 21,  126 => 45,  112 => 42,  96 => 28,  61 => 22,  23 => 1,  82 => 28,  156 => 55,  119 => 40,  103 => 30,  222 => 77,  217 => 74,  214 => 139,  190 => 67,  186 => 66,  182 => 64,  178 => 63,  127 => 45,  55 => 13,  53 => 14,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 156,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 125,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 69,  230 => 73,  188 => 61,  185 => 64,  161 => 58,  154 => 56,  146 => 40,  143 => 47,  134 => 43,  131 => 105,  122 => 44,  76 => 23,  72 => 19,  171 => 58,  163 => 55,  152 => 54,  138 => 53,  123 => 42,  111 => 35,  98 => 33,  83 => 23,  75 => 20,  71 => 24,  64 => 64,  43 => 7,  97 => 18,  92 => 29,  89 => 25,  85 => 28,  28 => 3,  36 => 5,  104 => 32,  58 => 17,  40 => 6,  94 => 35,  88 => 39,  31 => 4,  21 => 1,  50 => 10,  47 => 9,  27 => 3,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 78,  220 => 141,  218 => 67,  215 => 78,  212 => 70,  209 => 67,  200 => 70,  194 => 65,  179 => 59,  173 => 59,  166 => 55,  162 => 53,  157 => 57,  155 => 51,  151 => 48,  145 => 46,  139 => 45,  128 => 42,  118 => 28,  114 => 20,  109 => 39,  84 => 37,  79 => 24,  69 => 20,  65 => 14,  34 => 5,  26 => 9,  24 => 1,  25 => 29,  19 => 1,  63 => 15,  60 => 17,  48 => 11,  46 => 12,  39 => 6,  22 => 2,  184 => 32,  176 => 60,  172 => 65,  169 => 56,  165 => 54,  159 => 52,  148 => 53,  137 => 41,  125 => 43,  120 => 38,  117 => 43,  115 => 33,  110 => 20,  107 => 41,  101 => 31,  90 => 41,  87 => 29,  80 => 19,  67 => 16,  57 => 9,  54 => 14,  51 => 13,  44 => 8,  42 => 8,  38 => 7,  35 => 6,  32 => 5,  29 => 5,  203 => 72,  197 => 69,  189 => 62,  183 => 63,  180 => 57,  174 => 115,  170 => 114,  167 => 62,  158 => 48,  153 => 45,  150 => 55,  147 => 61,  144 => 54,  136 => 31,  133 => 30,  130 => 35,  124 => 30,  121 => 29,  113 => 41,  108 => 34,  105 => 47,  102 => 28,  99 => 36,  95 => 24,  91 => 31,  81 => 32,  70 => 14,  66 => 23,  62 => 16,  59 => 16,  56 => 12,  52 => 13,  49 => 9,  45 => 10,  41 => 10,  37 => 5,  33 => 4,  30 => 3,);
    }
}
