<?php

/* teamACrudBundle:Default:Sub/Slider.html.twig */
class __TwigTemplate_a95dc9fb512497afb72caa434d70c6b8 extends Twig_Template
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
        echo "<div id=\"wrapper\">

    <div class=\"slider-wrapper theme-default\">
        <div id=\"slider\" class=\"nivoSlider\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/toystory.jpg"), "html", null, true);
        echo "\" data-thumb=\"images/toystory.jpg\" alt=\"\" usemap=\"#Map\"/>
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/walle.jpg"), "html", null, true);
        echo "\" data-thumb=\"images/walle.jpg\" alt=\"\" data-transition=\"slideInLeft\" />
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/nemo.jpg"), "html", null, true);
        echo "\" data-thumb=\"images/nemo.jpg\" alt=\"\" title=\"#htmlcaption\" />
        </div>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "teamACrudBundle:Default:Sub/Slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  29 => 6,  25 => 5,  40 => 14,  22 => 2,  19 => 1,  161 => 54,  154 => 50,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  122 => 34,  117 => 31,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  83 => 16,  72 => 9,  69 => 8,  64 => 6,  58 => 55,  56 => 54,  51 => 34,  47 => 32,  38 => 28,  31 => 6,  24 => 1,  220 => 138,  218 => 137,  215 => 136,  212 => 135,  188 => 115,  184 => 114,  180 => 113,  176 => 112,  172 => 111,  168 => 110,  152 => 97,  125 => 35,  99 => 50,  76 => 30,  55 => 11,  53 => 53,  50 => 9,  48 => 8,  45 => 31,  43 => 6,  39 => 4,  36 => 13,  30 => 2,);
    }
}
