<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_76dcacc524de205289d96bd25bc8abd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Well done!</h1>
    ";
        // line 6
        if (isset($context["is_writable"])) { $_is_writable_ = $context["is_writable"]; } else { $_is_writable_ = null; }
        if ($_is_writable_) {
            // line 7
            echo "    <h2>Your distribution is configured!</h2>
    ";
        } else {
            // line 9
            echo "    <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
    ";
        }
        // line 11
        echo "    <h3>
        <span>
            ";
        // line 13
        if (isset($context["is_writable"])) { $_is_writable_ = $context["is_writable"]; } else { $_is_writable_ = null; }
        if ($_is_writable_) {
            // line 14
            echo "                Your parameters.yml file has been overwritten with these parameters (in <em>";
            if (isset($context["yml_path"])) { $_yml_path_ = $context["yml_path"]; } else { $_yml_path_ = null; }
            echo twig_escape_filter($this->env, $_yml_path_, "html", null, true);
            echo "</em>):
            ";
        } else {
            // line 16
            echo "                Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            if (isset($context["yml_path"])) { $_yml_path_ = $context["yml_path"]; } else { $_yml_path_ = null; }
            echo twig_escape_filter($this->env, $_yml_path_, "html", null, true);
            echo "</em>:
            ";
        }
        // line 18
        echo "        </span>
    </h3>

    <textarea class=\"symfony-configuration\">";
        // line 21
        if (isset($context["parameters"])) { $_parameters_ = $context["parameters"]; } else { $_parameters_ = null; }
        echo twig_escape_filter($this->env, $_parameters_, "html", null, true);
        echo "</textarea>

    ";
        // line 23
        if (isset($context["welcome_url"])) { $_welcome_url_ = $context["welcome_url"]; } else { $_welcome_url_ = null; }
        if ($_welcome_url_) {
            // line 24
            echo "        <ul>
            <li><a href=\"";
            // line 25
            if (isset($context["welcome_url"])) { $_welcome_url_ = $context["welcome_url"]; } else { $_welcome_url_ = null; }
            echo twig_escape_filter($this->env, $_welcome_url_, "html", null, true);
            echo "\">Go to the Welcome page</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  264 => 236,  241 => 219,  20 => 1,  844 => 469,  841 => 468,  828 => 466,  823 => 465,  819 => 463,  806 => 462,  779 => 457,  776 => 456,  754 => 454,  736 => 453,  731 => 451,  726 => 450,  721 => 449,  716 => 448,  711 => 447,  706 => 446,  703 => 445,  700 => 444,  682 => 443,  671 => 442,  655 => 437,  648 => 435,  643 => 434,  640 => 433,  638 => 432,  624 => 431,  592 => 401,  571 => 398,  553 => 397,  550 => 396,  547 => 395,  539 => 393,  533 => 391,  276 => 138,  228 => 94,  199 => 87,  106 => 45,  100 => 43,  435 => 160,  432 => 159,  426 => 158,  423 => 157,  414 => 156,  409 => 155,  405 => 153,  402 => 152,  399 => 151,  396 => 150,  383 => 147,  380 => 146,  377 => 145,  371 => 141,  368 => 140,  350 => 131,  340 => 128,  335 => 125,  319 => 118,  311 => 114,  303 => 110,  287 => 103,  283 => 101,  280 => 100,  275 => 97,  272 => 96,  267 => 93,  261 => 235,  254 => 87,  251 => 86,  233 => 77,  216 => 68,  204 => 63,  191 => 57,  181 => 53,  77 => 21,  74 => 14,  226 => 71,  219 => 69,  202 => 88,  198 => 59,  195 => 86,  187 => 60,  175 => 81,  160 => 75,  208 => 69,  205 => 68,  129 => 51,  68 => 21,  392 => 163,  381 => 160,  376 => 159,  373 => 158,  367 => 157,  356 => 135,  353 => 149,  346 => 145,  338 => 141,  330 => 137,  322 => 119,  314 => 115,  298 => 107,  282 => 109,  274 => 105,  266 => 101,  258 => 234,  248 => 89,  245 => 88,  237 => 78,  234 => 82,  231 => 95,  210 => 89,  177 => 60,  149 => 49,  135 => 52,  132 => 61,  116 => 25,  86 => 25,  78 => 21,  126 => 45,  112 => 36,  96 => 33,  61 => 22,  23 => 3,  82 => 23,  156 => 55,  119 => 40,  103 => 34,  222 => 77,  217 => 92,  214 => 139,  190 => 67,  186 => 84,  182 => 64,  178 => 82,  127 => 40,  55 => 16,  53 => 38,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 149,  389 => 103,  374 => 101,  364 => 139,  361 => 138,  358 => 97,  354 => 95,  347 => 130,  343 => 129,  329 => 121,  326 => 120,  320 => 86,  306 => 111,  301 => 84,  294 => 105,  286 => 80,  278 => 248,  270 => 77,  263 => 74,  255 => 73,  246 => 83,  238 => 218,  230 => 76,  188 => 56,  185 => 64,  161 => 43,  154 => 56,  146 => 71,  143 => 47,  134 => 43,  131 => 31,  122 => 44,  76 => 23,  72 => 18,  171 => 58,  163 => 55,  152 => 73,  138 => 53,  123 => 42,  111 => 35,  98 => 28,  83 => 35,  75 => 20,  71 => 22,  64 => 6,  43 => 12,  97 => 30,  92 => 27,  89 => 25,  85 => 23,  28 => 3,  36 => 9,  104 => 21,  58 => 17,  40 => 7,  94 => 30,  88 => 26,  31 => 6,  21 => 1,  50 => 8,  47 => 11,  27 => 5,  250 => 71,  240 => 79,  236 => 88,  229 => 84,  225 => 73,  220 => 141,  218 => 67,  215 => 78,  212 => 67,  209 => 66,  200 => 70,  194 => 65,  179 => 59,  173 => 48,  166 => 55,  162 => 53,  157 => 74,  155 => 51,  151 => 48,  145 => 46,  139 => 35,  128 => 42,  118 => 38,  114 => 51,  109 => 33,  84 => 23,  79 => 24,  69 => 17,  65 => 20,  34 => 6,  26 => 9,  24 => 1,  25 => 2,  19 => 1,  63 => 15,  60 => 15,  48 => 9,  46 => 13,  39 => 7,  22 => 2,  184 => 54,  176 => 60,  172 => 80,  169 => 56,  165 => 54,  159 => 52,  148 => 53,  137 => 41,  125 => 43,  120 => 27,  117 => 37,  115 => 37,  110 => 23,  107 => 35,  101 => 34,  90 => 25,  87 => 24,  80 => 22,  67 => 21,  57 => 24,  54 => 17,  51 => 16,  44 => 7,  42 => 8,  38 => 5,  35 => 4,  32 => 7,  29 => 3,  203 => 72,  197 => 69,  189 => 85,  183 => 63,  180 => 57,  174 => 115,  170 => 47,  167 => 77,  158 => 42,  153 => 45,  150 => 55,  147 => 39,  144 => 54,  136 => 31,  133 => 30,  130 => 35,  124 => 40,  121 => 39,  113 => 24,  108 => 34,  105 => 47,  102 => 28,  99 => 31,  95 => 24,  91 => 40,  81 => 16,  70 => 15,  66 => 16,  62 => 14,  59 => 14,  56 => 13,  52 => 11,  49 => 15,  45 => 12,  41 => 6,  37 => 6,  33 => 6,  30 => 7,);
    }
}
