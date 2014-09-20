<?php

/* teamACrudBundle:Default:Sub/Header.html.twig */
class __TwigTemplate_973dd1b933cf85a71885e3c959ddcfff extends Twig_Template
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
        echo "<div class=\"masthead\">
    <div class=\"span6\"><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></div>
    <br><br><br><br>
    <div class=\"offset8\"><form class=\"form-search\">
            <input type=\"text\" class=\"input-medium search-query\">
            <button type=\"submit\" class=\"btn\">Search</button>
        </form></div>
    <div class=\"offset9\"></div>
    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <ul class=\"nav\">
                    <li class=\"active\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_page"), "html", null, true);
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parents_page"), "html", null, true);
        echo "\"> Students</a></li>
                    <li><a href=\"#\">Parents</a></li>
                    <li><a href=\"#\">Teachers</a></li>
                    <li><a href=\"#\">Career Advisor</a></li>
                    <li><a href=\"#\">About Us</a></li>
                </ul>
            </div>
        </div>
    </div><!-- /.navbar -->
</div>";
    }

    public function getTemplateName()
    {
        return "teamACrudBundle:Default:Sub/Header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  22 => 2,  19 => 1,  161 => 54,  154 => 50,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  122 => 34,  117 => 31,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  83 => 16,  72 => 9,  69 => 8,  64 => 6,  58 => 55,  56 => 54,  51 => 34,  47 => 32,  38 => 28,  31 => 6,  24 => 1,  220 => 138,  218 => 137,  215 => 136,  212 => 135,  188 => 115,  184 => 114,  180 => 113,  176 => 112,  172 => 111,  168 => 110,  152 => 97,  125 => 35,  99 => 50,  76 => 30,  55 => 11,  53 => 53,  50 => 9,  48 => 8,  45 => 31,  43 => 6,  39 => 4,  36 => 13,  30 => 2,);
    }
}
