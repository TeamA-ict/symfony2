<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_c6cfaac9fb61940ae887e9ac3cb1eb8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        $this->env->getExtension('form')->renderer->setTheme($_form_, array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "    ";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $_index_, "count" => $_count_)));
        // line 8
        echo "
    <h1>Configure your Database</h1>
    <p>If your website needs a database connection, please configure it here.</p>

    ";
        // line 12
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
    <form action=\"";
        // line 13
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $_index_)), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"symfony-form-column\">
            ";
        // line 15
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "driver"), 'row');
        echo "
            ";
        // line 16
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "host"), 'row');
        echo "
            ";
        // line 17
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "name"), 'row');
        echo "
        </div>
        <div class=\"symfony-form-column\">
            ";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "user"), 'row');
        echo "
            ";
        // line 21
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "password"), 'row');
        echo "
        </div>

        ";
        // line 24
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "

        <div class=\"symfony-form-footer\">
            <p><input type=\"submit\" value=\"Next Step\" class=\"symfony-button-grey\" /></p>
            <p>* mandatory fields</p>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 24,  1283 => 331,  1277 => 330,  1271 => 329,  1265 => 328,  1259 => 327,  1253 => 326,  1247 => 325,  1241 => 324,  1235 => 323,  1216 => 317,  1207 => 316,  1205 => 315,  1202 => 314,  1172 => 310,  1138 => 309,  1136 => 308,  1133 => 307,  1120 => 302,  1114 => 301,  1112 => 300,  1109 => 299,  1100 => 293,  1093 => 291,  1089 => 290,  1083 => 289,  1081 => 288,  1078 => 287,  1071 => 282,  1064 => 280,  1060 => 276,  1055 => 275,  1052 => 274,  1048 => 273,  1046 => 272,  1043 => 271,  1034 => 267,  1032 => 266,  1029 => 265,  1021 => 260,  1018 => 259,  1009 => 254,  1004 => 253,  999 => 252,  996 => 251,  994 => 250,  991 => 249,  983 => 245,  981 => 241,  979 => 240,  976 => 239,  950 => 233,  947 => 232,  943 => 231,  939 => 230,  936 => 229,  932 => 228,  928 => 227,  925 => 226,  920 => 225,  916 => 224,  914 => 223,  911 => 222,  903 => 216,  899 => 215,  897 => 214,  894 => 213,  886 => 209,  882 => 208,  880 => 207,  877 => 206,  869 => 202,  865 => 201,  863 => 200,  860 => 199,  852 => 195,  848 => 194,  846 => 193,  843 => 192,  835 => 188,  831 => 187,  829 => 186,  826 => 185,  818 => 181,  814 => 180,  812 => 179,  809 => 178,  800 => 174,  798 => 173,  795 => 172,  787 => 168,  783 => 167,  781 => 166,  778 => 165,  770 => 161,  766 => 160,  764 => 159,  762 => 158,  759 => 157,  752 => 152,  740 => 151,  735 => 150,  729 => 148,  725 => 147,  723 => 146,  720 => 145,  712 => 139,  710 => 138,  709 => 137,  708 => 136,  705 => 135,  694 => 132,  690 => 131,  688 => 130,  685 => 129,  675 => 123,  670 => 122,  665 => 121,  660 => 120,  649 => 117,  645 => 116,  622 => 110,  620 => 109,  617 => 108,  599 => 104,  597 => 103,  594 => 102,  577 => 98,  560 => 96,  543 => 91,  520 => 89,  518 => 88,  515 => 87,  506 => 82,  502 => 81,  499 => 80,  492 => 78,  488 => 77,  483 => 76,  479 => 75,  475 => 74,  467 => 72,  464 => 71,  455 => 70,  453 => 69,  450 => 68,  444 => 64,  429 => 61,  424 => 60,  417 => 58,  395 => 49,  390 => 47,  379 => 43,  366 => 37,  363 => 36,  355 => 34,  341 => 27,  336 => 26,  321 => 22,  316 => 20,  297 => 16,  293 => 15,  291 => 14,  288 => 13,  279 => 8,  273 => 6,  269 => 5,  260 => 331,  256 => 329,  252 => 327,  244 => 323,  223 => 298,  213 => 271,  192 => 248,  164 => 199,  141 => 171,  73 => 18,  264 => 3,  241 => 322,  20 => 1,  844 => 469,  841 => 468,  828 => 466,  823 => 465,  819 => 463,  806 => 462,  779 => 457,  776 => 456,  754 => 454,  736 => 453,  731 => 451,  726 => 450,  721 => 449,  716 => 448,  711 => 447,  706 => 446,  703 => 445,  700 => 134,  682 => 443,  671 => 442,  655 => 119,  648 => 435,  643 => 115,  640 => 114,  638 => 432,  624 => 431,  592 => 401,  571 => 398,  553 => 93,  550 => 92,  547 => 395,  539 => 90,  533 => 391,  276 => 138,  228 => 306,  199 => 87,  106 => 101,  100 => 43,  435 => 62,  432 => 159,  426 => 158,  423 => 157,  414 => 57,  409 => 155,  405 => 52,  402 => 152,  399 => 50,  396 => 150,  383 => 147,  380 => 146,  377 => 42,  371 => 141,  368 => 140,  350 => 32,  340 => 128,  335 => 125,  319 => 21,  311 => 114,  303 => 110,  287 => 103,  283 => 101,  280 => 100,  275 => 97,  272 => 96,  267 => 4,  261 => 235,  254 => 328,  251 => 86,  233 => 313,  216 => 68,  204 => 63,  191 => 57,  181 => 53,  77 => 18,  74 => 17,  226 => 299,  219 => 69,  202 => 262,  198 => 59,  195 => 249,  187 => 238,  175 => 81,  160 => 75,  208 => 265,  205 => 264,  129 => 145,  68 => 21,  392 => 163,  381 => 160,  376 => 159,  373 => 158,  367 => 157,  356 => 135,  353 => 33,  346 => 145,  338 => 141,  330 => 137,  322 => 119,  314 => 115,  298 => 107,  282 => 109,  274 => 105,  266 => 101,  258 => 330,  248 => 325,  245 => 88,  237 => 78,  234 => 82,  231 => 307,  210 => 270,  177 => 60,  149 => 178,  135 => 52,  132 => 61,  116 => 113,  86 => 21,  78 => 21,  126 => 144,  112 => 30,  96 => 67,  61 => 2,  23 => 3,  82 => 23,  156 => 191,  119 => 114,  103 => 34,  222 => 77,  217 => 92,  214 => 139,  190 => 239,  186 => 84,  182 => 222,  178 => 82,  127 => 40,  55 => 16,  53 => 12,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 59,  415 => 110,  412 => 109,  407 => 106,  393 => 48,  389 => 103,  374 => 41,  364 => 139,  361 => 138,  358 => 35,  354 => 95,  347 => 130,  343 => 129,  329 => 24,  326 => 23,  320 => 86,  306 => 111,  301 => 84,  294 => 105,  286 => 80,  278 => 248,  270 => 77,  263 => 74,  255 => 73,  246 => 324,  238 => 320,  230 => 76,  188 => 56,  185 => 64,  161 => 198,  154 => 185,  146 => 177,  143 => 47,  134 => 157,  131 => 156,  122 => 44,  76 => 31,  72 => 18,  171 => 212,  163 => 55,  152 => 73,  138 => 53,  123 => 42,  111 => 107,  98 => 27,  83 => 35,  75 => 20,  71 => 19,  64 => 15,  43 => 12,  97 => 30,  92 => 27,  89 => 47,  85 => 23,  28 => 3,  36 => 5,  104 => 87,  58 => 13,  40 => 7,  94 => 57,  88 => 26,  31 => 6,  21 => 1,  50 => 8,  47 => 8,  27 => 5,  250 => 326,  240 => 79,  236 => 314,  229 => 84,  225 => 73,  220 => 296,  218 => 287,  215 => 286,  212 => 67,  209 => 66,  200 => 259,  194 => 65,  179 => 221,  173 => 48,  166 => 205,  162 => 53,  157 => 74,  155 => 51,  151 => 184,  145 => 46,  139 => 165,  128 => 42,  118 => 38,  114 => 108,  109 => 102,  84 => 41,  79 => 32,  69 => 16,  65 => 14,  34 => 6,  26 => 9,  24 => 1,  25 => 2,  19 => 1,  63 => 15,  60 => 15,  48 => 9,  46 => 13,  39 => 7,  22 => 2,  184 => 236,  176 => 219,  172 => 80,  169 => 206,  165 => 54,  159 => 192,  148 => 53,  137 => 41,  125 => 43,  120 => 27,  117 => 37,  115 => 31,  110 => 23,  107 => 29,  101 => 86,  90 => 25,  87 => 24,  80 => 22,  67 => 21,  57 => 24,  54 => 17,  51 => 16,  44 => 7,  42 => 7,  38 => 6,  35 => 5,  32 => 7,  29 => 3,  203 => 72,  197 => 258,  189 => 85,  183 => 63,  180 => 57,  174 => 213,  170 => 47,  167 => 77,  158 => 42,  153 => 45,  150 => 55,  147 => 39,  144 => 172,  136 => 164,  133 => 30,  130 => 35,  124 => 129,  121 => 128,  113 => 24,  108 => 34,  105 => 47,  102 => 28,  99 => 68,  95 => 24,  91 => 56,  81 => 20,  70 => 15,  66 => 12,  62 => 13,  59 => 12,  56 => 13,  52 => 11,  49 => 15,  45 => 12,  41 => 6,  37 => 6,  33 => 4,  30 => 3,);
    }
}
