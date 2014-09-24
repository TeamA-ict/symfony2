<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_8f99733acb64b3c915786726907f3396 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "counterrors")) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\"/>
            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 7
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "counterrors"), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Exception</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 12
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "counterrors"), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 15
            echo "        ";
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
            // line 16
            echo "    ";
        }
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/logger.png"), "html", null, true);
        echo "\" alt=\"Logger\" /></span>
    <strong>Logs</strong>
    ";
        // line 23
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "counterrors")) {
            // line 24
            echo "        <span class=\"count\">
            <span>";
            // line 25
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "counterrors"), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 28
        echo "</span>
";
    }

    // line 31
    public function block_panel($context, array $blocks = array())
    {
        // line 32
        echo "    <h2>Logs</h2>

    ";
        // line 34
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context["priority"] = $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 35
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\" />
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY"));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 45
            echo "                        <option value=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
            echo ((($_value_ == $_priority_)) ? (" selected") : (""));
            echo ">";
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            echo twig_escape_filter($this->env, $_text_, "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\" />
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 56
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "logs")) {
            // line 57
            echo "        <ul class=\"alt\">
            ";
            // line 58
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
                if (($this->getAttribute($_log_, "priority") >= $_priority_)) {
                    // line 59
                    echo "                <li class=\"";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($_loop_, "index")), "html", null, true);
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    if (($this->getAttribute($_log_, "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute($_log_, "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 60
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_log_, "priorityName"), "html", null, true);
                    echo " - ";
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                    echo "
                    ";
                    // line 61
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    if (($this->getAttribute($_log_, "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($_log_, "context"))))) {
                        // line 62
                        echo "                        <br />
                        <small>
                            <strong>Context</strong>: ";
                        // line 64
                        if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($_log_, "context")), "html", null, true);
                        echo "
                        </small>
                    ";
                    }
                    // line 67
                    echo "                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 69
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 71
            echo "        </ul>
    ";
        } else {
            // line 73
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 71,  219 => 69,  202 => 64,  198 => 62,  195 => 61,  187 => 60,  175 => 59,  160 => 58,  208 => 69,  205 => 68,  129 => 51,  68 => 23,  392 => 163,  381 => 160,  376 => 159,  373 => 158,  367 => 157,  356 => 150,  353 => 149,  346 => 145,  338 => 141,  330 => 137,  322 => 133,  314 => 129,  298 => 121,  282 => 109,  274 => 105,  266 => 101,  258 => 97,  248 => 89,  245 => 88,  237 => 83,  234 => 82,  231 => 81,  210 => 72,  177 => 60,  149 => 49,  135 => 52,  132 => 44,  116 => 42,  86 => 24,  78 => 21,  126 => 45,  112 => 42,  96 => 28,  61 => 22,  23 => 1,  82 => 28,  156 => 55,  119 => 40,  103 => 30,  222 => 77,  217 => 74,  214 => 139,  190 => 67,  186 => 66,  182 => 64,  178 => 63,  127 => 45,  55 => 13,  53 => 14,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 156,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 125,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 69,  230 => 73,  188 => 61,  185 => 64,  161 => 58,  154 => 56,  146 => 40,  143 => 47,  134 => 43,  131 => 105,  122 => 44,  76 => 23,  72 => 19,  171 => 58,  163 => 55,  152 => 54,  138 => 53,  123 => 42,  111 => 35,  98 => 33,  83 => 23,  75 => 20,  71 => 24,  64 => 64,  43 => 7,  97 => 18,  92 => 29,  89 => 25,  85 => 28,  28 => 3,  36 => 5,  104 => 32,  58 => 17,  40 => 6,  94 => 35,  88 => 39,  31 => 3,  21 => 1,  50 => 10,  47 => 9,  27 => 3,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 78,  220 => 141,  218 => 67,  215 => 78,  212 => 70,  209 => 67,  200 => 70,  194 => 65,  179 => 59,  173 => 59,  166 => 55,  162 => 53,  157 => 57,  155 => 51,  151 => 48,  145 => 46,  139 => 45,  128 => 42,  118 => 28,  114 => 20,  109 => 39,  84 => 37,  79 => 24,  69 => 20,  65 => 14,  34 => 5,  26 => 9,  24 => 1,  25 => 29,  19 => 1,  63 => 15,  60 => 17,  48 => 9,  46 => 12,  39 => 6,  22 => 2,  184 => 32,  176 => 60,  172 => 65,  169 => 56,  165 => 54,  159 => 52,  148 => 53,  137 => 41,  125 => 43,  120 => 38,  117 => 43,  115 => 33,  110 => 20,  107 => 41,  101 => 31,  90 => 41,  87 => 29,  80 => 19,  67 => 16,  57 => 9,  54 => 14,  51 => 13,  44 => 8,  42 => 8,  38 => 5,  35 => 6,  32 => 5,  29 => 5,  203 => 72,  197 => 69,  189 => 62,  183 => 63,  180 => 57,  174 => 115,  170 => 114,  167 => 62,  158 => 48,  153 => 45,  150 => 55,  147 => 61,  144 => 54,  136 => 31,  133 => 30,  130 => 35,  124 => 30,  121 => 29,  113 => 41,  108 => 34,  105 => 47,  102 => 28,  99 => 36,  95 => 24,  91 => 31,  81 => 32,  70 => 14,  66 => 23,  62 => 16,  59 => 14,  56 => 12,  52 => 10,  49 => 9,  45 => 8,  41 => 10,  37 => 5,  33 => 4,  30 => 3,);
    }
}
