<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_8fab399dcc054966c95b59bcba163a94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, ("Hello " . $_name_), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => $_name_)), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  112 => 5,  96 => 44,  61 => 22,  23 => 1,  82 => 28,  156 => 55,  119 => 34,  103 => 30,  222 => 142,  217 => 140,  214 => 139,  190 => 119,  186 => 118,  182 => 117,  178 => 116,  127 => 77,  55 => 13,  53 => 11,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 99,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 85,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 69,  230 => 68,  188 => 61,  185 => 60,  161 => 58,  154 => 101,  146 => 40,  143 => 39,  134 => 43,  131 => 105,  122 => 37,  76 => 32,  72 => 15,  171 => 58,  163 => 55,  152 => 54,  138 => 44,  123 => 42,  111 => 32,  98 => 33,  83 => 20,  75 => 6,  71 => 19,  64 => 64,  43 => 7,  97 => 18,  92 => 25,  89 => 28,  85 => 14,  28 => 4,  36 => 5,  104 => 19,  58 => 43,  40 => 14,  94 => 43,  88 => 39,  31 => 3,  21 => 1,  50 => 11,  47 => 19,  27 => 3,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 141,  218 => 67,  215 => 78,  212 => 77,  209 => 76,  200 => 66,  194 => 65,  179 => 59,  173 => 59,  166 => 55,  162 => 54,  157 => 56,  155 => 51,  151 => 48,  145 => 46,  139 => 45,  128 => 42,  118 => 28,  114 => 20,  109 => 31,  84 => 37,  79 => 27,  69 => 24,  65 => 14,  34 => 5,  26 => 11,  24 => 1,  25 => 5,  19 => 1,  63 => 13,  60 => 12,  48 => 8,  46 => 12,  39 => 6,  22 => 2,  184 => 32,  176 => 60,  172 => 65,  169 => 48,  165 => 61,  159 => 53,  148 => 53,  137 => 41,  125 => 24,  120 => 38,  117 => 36,  115 => 33,  110 => 20,  107 => 31,  101 => 54,  90 => 41,  87 => 28,  80 => 19,  67 => 65,  57 => 9,  54 => 10,  51 => 13,  44 => 9,  42 => 7,  38 => 5,  35 => 5,  32 => 4,  29 => 5,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 115,  170 => 114,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 52,  136 => 31,  133 => 30,  130 => 35,  124 => 30,  121 => 29,  113 => 21,  108 => 31,  105 => 47,  102 => 28,  99 => 45,  95 => 24,  91 => 16,  81 => 12,  70 => 14,  66 => 23,  62 => 45,  59 => 13,  56 => 42,  52 => 10,  49 => 10,  45 => 8,  41 => 6,  37 => 7,  33 => 6,  30 => 3,);
    }
}
