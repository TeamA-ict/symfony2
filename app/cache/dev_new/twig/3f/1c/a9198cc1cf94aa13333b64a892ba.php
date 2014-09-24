<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_3f1ca9198cc1cf94aa13333b64a892ba extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
        if (("normal" != $_position_)) {
            // line 3
            echo "    ";
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_style.html.twig")->display(array_merge($context, array("position" => $_position_, "floatable" => true)));
            // line 4
            echo "    <div style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 6
        echo "
<div class=\"sf-toolbarreset\">
    ";
        // line 8
        if (isset($context["templates"])) { $_templates_ = $context["templates"]; } else { $_templates_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_templates_);
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 9
            echo "        ";
            if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_template_, "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute($_profile_, "getcollector", array(0 => $_name_), "method"), "profiler_url" => $_profiler_url_, "token" => $this->getAttribute($_profile_, "token"), "name" => $_name_)), "method"), "html", null, true);
            // line 15
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "
    ";
        // line 18
        if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
        if (("normal" != $_position_)) {
            // line 19
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
        \"></a>
    ";
        }
        // line 25
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  844 => 469,  841 => 468,  828 => 466,  823 => 465,  819 => 463,  806 => 462,  779 => 457,  776 => 456,  754 => 454,  736 => 453,  731 => 451,  726 => 450,  721 => 449,  716 => 448,  711 => 447,  706 => 446,  703 => 445,  700 => 444,  682 => 443,  671 => 442,  655 => 437,  648 => 435,  643 => 434,  640 => 433,  638 => 432,  624 => 431,  592 => 401,  571 => 398,  553 => 397,  550 => 396,  547 => 395,  539 => 393,  533 => 391,  276 => 138,  228 => 94,  199 => 87,  106 => 45,  100 => 43,  435 => 160,  432 => 159,  426 => 158,  423 => 157,  414 => 156,  409 => 155,  405 => 153,  402 => 152,  399 => 151,  396 => 150,  383 => 147,  380 => 146,  377 => 145,  371 => 141,  368 => 140,  350 => 131,  340 => 128,  335 => 125,  319 => 118,  311 => 114,  303 => 110,  287 => 103,  283 => 101,  280 => 100,  275 => 97,  272 => 96,  267 => 93,  261 => 89,  254 => 87,  251 => 86,  233 => 77,  216 => 68,  204 => 63,  191 => 57,  181 => 53,  77 => 23,  74 => 14,  226 => 71,  219 => 69,  202 => 88,  198 => 59,  195 => 86,  187 => 60,  175 => 81,  160 => 75,  208 => 69,  205 => 68,  129 => 51,  68 => 23,  392 => 163,  381 => 160,  376 => 159,  373 => 158,  367 => 157,  356 => 135,  353 => 149,  346 => 145,  338 => 141,  330 => 137,  322 => 119,  314 => 115,  298 => 107,  282 => 109,  274 => 105,  266 => 101,  258 => 88,  248 => 89,  245 => 88,  237 => 78,  234 => 82,  231 => 95,  210 => 89,  177 => 60,  149 => 49,  135 => 52,  132 => 61,  116 => 25,  86 => 24,  78 => 18,  126 => 45,  112 => 42,  96 => 30,  61 => 22,  23 => 3,  82 => 24,  156 => 55,  119 => 40,  103 => 34,  222 => 77,  217 => 92,  214 => 139,  190 => 67,  186 => 84,  182 => 64,  178 => 82,  127 => 45,  55 => 13,  53 => 38,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 149,  389 => 103,  374 => 101,  364 => 139,  361 => 138,  358 => 97,  354 => 95,  347 => 130,  343 => 129,  329 => 121,  326 => 120,  320 => 86,  306 => 111,  301 => 84,  294 => 105,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 83,  238 => 69,  230 => 76,  188 => 56,  185 => 64,  161 => 43,  154 => 56,  146 => 71,  143 => 47,  134 => 43,  131 => 31,  122 => 44,  76 => 23,  72 => 21,  171 => 58,  163 => 55,  152 => 73,  138 => 53,  123 => 42,  111 => 35,  98 => 28,  83 => 35,  75 => 20,  71 => 13,  64 => 11,  43 => 7,  97 => 30,  92 => 27,  89 => 25,  85 => 23,  28 => 3,  36 => 9,  104 => 21,  58 => 17,  40 => 10,  94 => 41,  88 => 18,  31 => 4,  21 => 1,  50 => 8,  47 => 13,  27 => 3,  250 => 71,  240 => 79,  236 => 88,  229 => 84,  225 => 73,  220 => 141,  218 => 67,  215 => 78,  212 => 67,  209 => 66,  200 => 70,  194 => 65,  179 => 59,  173 => 48,  166 => 55,  162 => 53,  157 => 74,  155 => 51,  151 => 48,  145 => 46,  139 => 35,  128 => 42,  118 => 28,  114 => 51,  109 => 39,  84 => 26,  79 => 24,  69 => 20,  65 => 18,  34 => 8,  26 => 9,  24 => 1,  25 => 3,  19 => 1,  63 => 15,  60 => 15,  48 => 21,  46 => 13,  39 => 6,  22 => 2,  184 => 54,  176 => 60,  172 => 80,  169 => 56,  165 => 54,  159 => 52,  148 => 53,  137 => 41,  125 => 43,  120 => 27,  117 => 52,  115 => 33,  110 => 23,  107 => 41,  101 => 31,  90 => 41,  87 => 29,  80 => 25,  67 => 21,  57 => 24,  54 => 16,  51 => 18,  44 => 11,  42 => 9,  38 => 7,  35 => 6,  32 => 4,  29 => 4,  203 => 72,  197 => 69,  189 => 85,  183 => 63,  180 => 57,  174 => 115,  170 => 47,  167 => 77,  158 => 42,  153 => 45,  150 => 55,  147 => 39,  144 => 54,  136 => 31,  133 => 30,  130 => 35,  124 => 57,  121 => 29,  113 => 24,  108 => 34,  105 => 47,  102 => 28,  99 => 20,  95 => 24,  91 => 40,  81 => 16,  70 => 25,  66 => 23,  62 => 19,  59 => 18,  56 => 17,  52 => 14,  49 => 15,  45 => 20,  41 => 10,  37 => 8,  33 => 6,  30 => 7,);
    }
}
