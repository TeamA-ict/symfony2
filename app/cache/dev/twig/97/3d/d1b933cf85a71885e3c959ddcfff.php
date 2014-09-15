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
        return array (  40 => 14,  36 => 13,  22 => 2,  19 => 1,);
    }
}
