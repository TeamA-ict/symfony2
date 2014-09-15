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
        return array (  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
