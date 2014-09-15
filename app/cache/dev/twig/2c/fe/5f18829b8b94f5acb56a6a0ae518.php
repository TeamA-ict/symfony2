<?php

/* teamACrudBundle:Default:index.html.twig */
class __TwigTemplate_2cfe5f18829b8b94f5acb56a6a0ae518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Team A ICT";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">

    ";
        // line 6
        $this->env->loadTemplate("teamACrudBundle:Default:Sub/Header.html.twig")->display($context);
        // line 7
        echo "
    ";
        // line 8
        $this->env->loadTemplate("teamACrudBundle:Default:Sub/Slider.html.twig")->display($context);
        // line 9
        echo "
    ";
        // line 10
        $this->env->loadTemplate("teamACrudBundle:Default:Sub/Tab.html.twig")->display($context);
        // line 11
        echo "





           <br><br>

        <div class=\"container\" style=\"text-align:center;\">

            <div class=\"span3\" style=\" background-color:background: rgb(60, 187, 250);
background: -moz-linear-gradient(90deg, rgb(60, 187, 250) 39%, rgb(21, 72, 134) 100%);
background: -webkit-linear-gradient(90deg, rgb(60, 187, 250) 39%, rgb(21, 72, 134) 100%);
background: -o-linear-gradient(90deg, rgb(60, 187, 250) 39%, rgb(21, 72, 134) 100%);
background: -ms-linear-gradient(90deg, rgb(60, 187, 250) 39%, rgb(21, 72, 134) 100%);
background: linear-gradient(180deg, rgb(60, 187, 250) 39%, rgb(21, 72, 134) 100%);
border-radius:10px; height:275px;\">
                <h3 class=\"whiteFont\">Videos</h3>

                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Videos.png"), "html", null, true);
        echo "\" alt=\"Video\">
                <br><br>
                <ul style=\"list-style:none;\">
                    <li><a href=\"#\">Women in ICT field >></a></li>
                    <li><a href=\"#\">Transition to IT >></a></li>
                </ul>

                <p style=\"color:#3cbbfa\">Read More >></p>

            </div>


            <div class=\"span3\" style=\" background-color:background: rgb(237, 100, 2);
background: -moz-linear-gradient(90deg, rgb(237, 100, 2) 39%, rgb(140, 0, 3) 100%);
background: -webkit-linear-gradient(90deg, rgb(237, 100, 2) 39%, rgb(140, 0, 3) 100%);
background: -o-linear-gradient(90deg, rgb(237, 100, 2) 39%, rgb(140, 0, 3) 100%);
background: -ms-linear-gradient(90deg, rgb(237, 100, 2) 39%, rgb(140, 0, 3) 100%);
background: linear-gradient(180deg, rgb(237, 100, 2) 39%, rgb(140, 0, 3) 100%); border-radius:10px; height:275px;\">
                <h3 class=\"whiteFont\">Learning Guide</h3>

                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/ebooks.png"), "html", null, true);
        echo "\" alt=\"Books\">
                <br><br>
                <ul style=\"list-style:none;\">
                    <li><a href=\"http://www.lifehacker.com.au/2014/02/it-salaries-how-much-youll-earn-state-by-state/\">ICT Education >></a></li>
                    <li><a href=\"#\">Transition to ICT >></a></li>
                </ul>

                <p style=\"color:#ee6601;\">Read More >></p>
            </div>



            <div class=\"span3\" style=\" background: #ffb408;
background: -moz-linear-gradient(top,  #ffb408 0%, #fe5907 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffb408), color-stop(100%,#fe5907));
background: -webkit-linear-gradient(top,  #ffb408 0%,#fe5907 100%);
background: -o-linear-gradient(top,  #ffb408 0%,#fe5907 100%);
background: -ms-linear-gradient(top,  #ffb408 0%,#fe5907 100%);
background: linear-gradient(to bottom,  #ffb408 0%,#fe5907 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffb408', endColorstr='#fe5907',GradientType=0 );
 border-radius:10px; height:275px;\">
                <h3 class=\"whiteFont\">News & Events</h3>

                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/news.png"), "html", null, true);
        echo "\" alt=\"Books\">
                <br><br>
                <ul style=\"list-style:none;\">
                    <li><a href=\"https://www.wgea.gov.au/content/lessons-success-attracting-women-ict\">Success Stories</a></li>
                    <li><a href=\"http://au.gradconnection.com/internships/information-technology/\">New Internships</a></li>
                </ul>

                <p style=\"color:#fdd99b;\">Read More >></p>

            </div>


            <div class=\"span3\" style=\" background: #c2d402;
background: -moz-linear-gradient(top,  #c2d402 0%, #5e8a00 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#c2d402), color-stop(100%,#5e8a00));
background: -webkit-linear-gradient(top,  #c2d402 0%,#5e8a00 100%);
background: -o-linear-gradient(top,  #c2d402 0%,#5e8a00 100%);
background: -ms-linear-gradient(top,  #c2d402 0%,#5e8a00 100%);
background: linear-gradient(to bottom,  #c2d402 0%,#5e8a00 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c2d402', endColorstr='#5e8a00',GradientType=0 );

 border-radius:10px; height:275px;\">
                <h3 class=\"whiteFont\">Educational Games</h3>

                <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/games.png"), "html", null, true);
        echo "\" alt=\"Books\">
                <br><br>
                <ul style=\"list-style:none;\">
                    <li><a href=\"http://primarygamesarena.com/6th-Grade#Computers\">Year 5-7</a></li>
                    <li><a href=\"http://www.helpteaching.com/questions/Technology/Grade_8\">Year 8-10</a></li>
                </ul>

                <p style=\"color:#c2d503\">Read More >></p>
            </div>
        </div>


        <div class=\"span12\">
            <div class=\"span2\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo1.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
            <div class=\"span2\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo2.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
            <div class=\"span2\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo3.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
            <div class=\"span2\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo4.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
            <div class=\"span2\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo5.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
            <div class=\"span2\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo6.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>

        </div>


        </div>


        <br><br>









    <!-- /container -->
";
    }

    // line 135
    public function block_footer($context, array $blocks = array())
    {
        // line 136
        echo "
    ";
        // line 137
        $this->env->loadTemplate("teamACrudBundle:Default:Sub/Footer.html.twig")->display($context);
        // line 138
        echo "
";
    }

    public function getTemplateName()
    {
        return "teamACrudBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 138,  218 => 137,  215 => 136,  212 => 135,  188 => 115,  184 => 114,  180 => 113,  176 => 112,  172 => 111,  168 => 110,  152 => 97,  125 => 73,  99 => 50,  76 => 30,  55 => 11,  53 => 10,  50 => 9,  48 => 8,  45 => 7,  43 => 6,  39 => 4,  36 => 3,  30 => 2,);
    }
}
