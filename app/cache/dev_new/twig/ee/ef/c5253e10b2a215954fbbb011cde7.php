<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_eeefc5253e10b2a215954fbbb011cde7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_9fbaf4e629cd0d20cb22ae074ee7a6b598cf586b"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/events.png"), "html", null, true);
        echo "\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Priority</th>
            <th>Listener</th>
        </tr>
        ";
        // line 32
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 33
            echo "            <tr>
                <td><code>";
            // line 34
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 35
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "priority"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 36
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            echo $context["__internal_9fbaf4e629cd0d20cb22ae074ee7a6b598cf586b"]->getdisplay_listener($_listener_);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "    </table>

    ";
        // line 41
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "notcalledlisteners")) {
            // line 42
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Priority</th>
                <th>Listener</th>
            </tr>
            ";
            // line 50
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["listeners"] = $this->getAttribute($_collector_, "notcalledlisteners");
            // line 51
            echo "            ";
            if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($_listeners_)));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 52
                echo "                <tr>
                    <td><code>";
                // line 53
                if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_listeners_, $_listener_, array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 54
                if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_listeners_, $_listener_, array(), "array"), "priority"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 55
                if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo $context["__internal_9fbaf4e629cd0d20cb22ae074ee7a6b598cf586b"]->getdisplay_listener($this->getAttribute($_listeners_, $_listener_, array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "        </table>
    ";
        }
    }

    // line 62
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 63
            echo "    ";
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            if (($this->getAttribute($_listener_, "type") == "Closure")) {
                // line 64
                echo "        Closure
    ";
            } elseif (($this->getAttribute($_listener_, "type") == "Function")) {
                // line 66
                echo "        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($_listener_, "file"), $this->getAttribute($_listener_, "line"));
                // line 67
                echo "        ";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ($_link_) {
                    echo "<a href=\"";
                    if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                    echo twig_escape_filter($this->env, $_link_, "html", null, true);
                    echo "\">";
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "function"), "html", null, true);
                    echo "</a>";
                } else {
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "function"), "html", null, true);
                }
                // line 68
                echo "    ";
            } elseif (($this->getAttribute($_listener_, "type") == "Method")) {
                // line 69
                echo "        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($_listener_, "file"), $this->getAttribute($_listener_, "line"));
                // line 70
                echo "        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($_listener_, "class"));
                echo "::";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ($_link_) {
                    echo "<a href=\"";
                    if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                    echo twig_escape_filter($this->env, $_link_, "html", null, true);
                    echo "\">";
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "method"), "html", null, true);
                    echo "</a>";
                } else {
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "method"), "html", null, true);
                }
                // line 71
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 69,  205 => 68,  129 => 51,  68 => 23,  392 => 163,  381 => 160,  376 => 159,  373 => 158,  367 => 157,  356 => 150,  353 => 149,  346 => 145,  338 => 141,  330 => 137,  322 => 133,  314 => 129,  298 => 121,  282 => 109,  274 => 105,  266 => 101,  258 => 97,  248 => 89,  245 => 88,  237 => 83,  234 => 82,  231 => 81,  210 => 72,  177 => 60,  149 => 49,  135 => 52,  132 => 44,  116 => 42,  86 => 33,  78 => 23,  126 => 50,  112 => 42,  96 => 31,  61 => 22,  23 => 1,  82 => 28,  156 => 55,  119 => 40,  103 => 30,  222 => 77,  217 => 74,  214 => 139,  190 => 67,  186 => 66,  182 => 64,  178 => 63,  127 => 45,  55 => 13,  53 => 14,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 105,  389 => 103,  374 => 101,  364 => 156,  361 => 98,  358 => 97,  354 => 95,  347 => 91,  343 => 90,  329 => 89,  326 => 88,  320 => 86,  306 => 125,  301 => 84,  294 => 81,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 70,  238 => 69,  230 => 71,  188 => 61,  185 => 64,  161 => 58,  154 => 101,  146 => 40,  143 => 47,  134 => 43,  131 => 105,  122 => 41,  76 => 24,  72 => 20,  171 => 58,  163 => 55,  152 => 54,  138 => 53,  123 => 42,  111 => 32,  98 => 33,  83 => 20,  75 => 22,  71 => 24,  64 => 64,  43 => 7,  97 => 18,  92 => 29,  89 => 34,  85 => 14,  28 => 3,  36 => 5,  104 => 35,  58 => 17,  40 => 14,  94 => 35,  88 => 39,  31 => 3,  21 => 1,  50 => 11,  47 => 19,  27 => 3,  250 => 71,  240 => 90,  236 => 88,  229 => 84,  225 => 78,  220 => 141,  218 => 67,  215 => 78,  212 => 70,  209 => 76,  200 => 70,  194 => 65,  179 => 59,  173 => 59,  166 => 55,  162 => 53,  157 => 56,  155 => 51,  151 => 48,  145 => 46,  139 => 45,  128 => 42,  118 => 28,  114 => 20,  109 => 39,  84 => 37,  79 => 27,  69 => 19,  65 => 14,  34 => 5,  26 => 9,  24 => 1,  25 => 29,  19 => 1,  63 => 19,  60 => 17,  48 => 9,  46 => 12,  39 => 6,  22 => 2,  184 => 32,  176 => 60,  172 => 65,  169 => 56,  165 => 54,  159 => 52,  148 => 53,  137 => 41,  125 => 43,  120 => 38,  117 => 43,  115 => 33,  110 => 20,  107 => 41,  101 => 54,  90 => 41,  87 => 29,  80 => 19,  67 => 65,  57 => 9,  54 => 14,  51 => 13,  44 => 11,  42 => 8,  38 => 7,  35 => 6,  32 => 5,  29 => 5,  203 => 72,  197 => 69,  189 => 62,  183 => 63,  180 => 57,  174 => 115,  170 => 114,  167 => 62,  158 => 48,  153 => 45,  150 => 55,  147 => 61,  144 => 54,  136 => 31,  133 => 30,  130 => 35,  124 => 30,  121 => 29,  113 => 41,  108 => 31,  105 => 47,  102 => 28,  99 => 36,  95 => 24,  91 => 31,  81 => 32,  70 => 14,  66 => 23,  62 => 16,  59 => 16,  56 => 42,  52 => 12,  49 => 13,  45 => 8,  41 => 10,  37 => 7,  33 => 4,  30 => 3,);
    }
}
