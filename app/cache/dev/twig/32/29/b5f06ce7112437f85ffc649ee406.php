<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_3229b5f06ce7112437f85ffc649ee406 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  131 => 105,  82 => 59,  33 => 13,  29 => 6,  25 => 5,  40 => 14,  22 => 2,  19 => 1,  161 => 54,  154 => 50,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  122 => 34,  117 => 31,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  83 => 16,  72 => 9,  69 => 8,  64 => 6,  58 => 55,  56 => 54,  51 => 34,  47 => 32,  38 => 28,  31 => 6,  24 => 2,  220 => 138,  218 => 137,  215 => 136,  212 => 135,  188 => 115,  184 => 114,  180 => 113,  176 => 112,  172 => 111,  168 => 110,  152 => 97,  125 => 35,  99 => 50,  76 => 30,  55 => 11,  53 => 53,  50 => 15,  48 => 8,  45 => 31,  43 => 6,  39 => 4,  36 => 13,  30 => 5,);
    }
}
