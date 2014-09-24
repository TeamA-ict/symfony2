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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">

    ";
        // line 8
        $this->env->loadTemplate("teamACrudBundle:Default:Sub/Header.html.twig")->display($context);
        // line 9
        echo "
    ";
        // line 10
        $this->env->loadTemplate("teamACrudBundle:Default:Sub/Slider.html.twig")->display($context);
        // line 11
        echo "
    ";
        // line 12
        $this->env->loadTemplate("teamACrudBundle:Default:Sub/Tab.html.twig")->display($context);
        // line 13
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
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Videos.png"), "html", null, true);
        echo "\" alt=\"Video\">
                <br><br>
                <ul style=\"list-style:none;\">


                    <li><a href=\"/parents\">Women in ICT field >></a></li>
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
        // line 54
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
        // line 77
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
        // line 101
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
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo1.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
            <div class=\"span2\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo2.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
            <div class=\"span2\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo3.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
            <div class=\"span2\"><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo4.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
            <div class=\"span2\"><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo5.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>
            <div class=\"span2\"><img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/teamacrud/images/Logo6.png"), "html", null, true);
        echo "\" alt=\"logo1\"></div>

        </div>


        </div>


        <br><br>









    <!-- /container -->
";
    }

    // line 139
    public function block_footer($context, array $blocks = array())
    {
        // line 140
        echo "
    ";
        // line 141
        $this->env->loadTemplate("teamACrudBundle:Default:Sub/Footer.html.twig")->display($context);
        // line 142
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
        return array (  222 => 142,  217 => 140,  214 => 139,  190 => 119,  186 => 118,  182 => 117,  178 => 116,  127 => 77,  55 => 13,  53 => 12,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 99,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 85,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 69,  230 => 68,  188 => 61,  185 => 60,  161 => 58,  154 => 101,  146 => 51,  143 => 50,  134 => 43,  131 => 42,  122 => 37,  76 => 32,  72 => 15,  171 => 58,  163 => 55,  152 => 50,  138 => 44,  123 => 42,  111 => 32,  98 => 33,  83 => 24,  75 => 20,  71 => 19,  64 => 16,  43 => 8,  97 => 18,  92 => 25,  89 => 28,  85 => 14,  28 => 4,  36 => 5,  104 => 19,  58 => 10,  40 => 6,  94 => 39,  88 => 6,  31 => 7,  21 => 1,  50 => 11,  47 => 7,  27 => 3,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 141,  218 => 67,  215 => 78,  212 => 77,  209 => 76,  200 => 66,  194 => 65,  179 => 59,  173 => 59,  166 => 55,  162 => 54,  157 => 56,  155 => 51,  151 => 48,  145 => 46,  139 => 45,  128 => 43,  118 => 22,  114 => 20,  109 => 31,  84 => 21,  79 => 39,  69 => 17,  65 => 14,  34 => 5,  26 => 6,  24 => 4,  25 => 3,  19 => 1,  63 => 13,  60 => 8,  48 => 10,  46 => 12,  39 => 6,  22 => 2,  184 => 32,  176 => 60,  172 => 49,  169 => 48,  165 => 46,  159 => 53,  148 => 47,  137 => 41,  125 => 24,  120 => 38,  117 => 36,  115 => 36,  110 => 20,  107 => 32,  101 => 54,  90 => 25,  87 => 28,  80 => 23,  67 => 19,  57 => 9,  54 => 14,  51 => 13,  44 => 9,  42 => 12,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 115,  170 => 114,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 21,  108 => 31,  105 => 19,  102 => 28,  99 => 26,  95 => 24,  91 => 16,  81 => 12,  70 => 14,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 10,  49 => 9,  45 => 9,  41 => 9,  37 => 5,  33 => 4,  30 => 2,);
    }
}
