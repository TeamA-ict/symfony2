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
                    <li><a href=\"/parents\">Parents</a></li>
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
        return array (  40 => 14,  22 => 2,  19 => 1,  172 => 65,  165 => 61,  156 => 55,  152 => 54,  148 => 53,  144 => 52,  136 => 46,  133 => 45,  128 => 42,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  94 => 27,  83 => 20,  80 => 19,  75 => 6,  69 => 66,  67 => 65,  64 => 64,  62 => 45,  58 => 43,  56 => 42,  49 => 39,  47 => 19,  31 => 6,  24 => 1,  222 => 142,  220 => 141,  217 => 140,  214 => 139,  190 => 119,  186 => 118,  182 => 117,  178 => 116,  174 => 115,  170 => 114,  154 => 101,  127 => 77,  101 => 54,  76 => 32,  55 => 13,  53 => 12,  50 => 11,  48 => 10,  45 => 9,  43 => 8,  39 => 6,  36 => 13,  30 => 2,);
    }
}
