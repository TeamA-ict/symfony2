<?php

/* WebProfilerBundle:Collector:request.html.twig */
class __TwigTemplate_7691d99c0b8a974f9d70b1fcdfec6203 extends Twig_Template
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
        ob_start();
        // line 5
        echo "        ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($this->getAttribute($_collector_, "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 6
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getAttribute($_collector_, "controller"), "file"), $this->getAttribute($this->getAttribute($_collector_, "controller"), "line"));
            // line 7
            echo "            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getAttribute($_collector_, "controller"), "class"));
            echo "</span>
            <span class=\"sf-toolbar-info-method\" onclick=\"";
            // line 8
            if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
            if ($_link_) {
                echo "window.location='";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $_link_, "html", null, true);
                echo "';window.event.stopPropagation();return false;";
            }
            echo "\">
                ";
            // line 9
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "controller"), "method"), "html", null, true);
            echo "
            </span>
        ";
        } else {
            // line 12
            echo "            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "controller"), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context["request_status_code_color"] = (((400 > $this->getAttribute($_collector_, "statuscode"))) ? ((((200 == $this->getAttribute($_collector_, "statuscode"))) ? ("green") : ("yellow"))) : ("red"));
        // line 16
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context["request_route"] = (($this->getAttribute($_collector_, "route")) ? ($this->getAttribute($_collector_, "route")) : ("NONE"));
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\"/>
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 19
        if (isset($context["request_status_code_color"])) { $_request_status_code_color_ = $context["request_status_code_color"]; } else { $_request_status_code_color_ = null; }
        echo twig_escape_filter($this->env, $_request_status_code_color_, "html", null, true);
        echo "\">";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "statuscode"), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
        // line 20
        if (isset($context["request_handler"])) { $_request_handler_ = $context["request_handler"]; } else { $_request_handler_ = null; }
        echo twig_escape_filter($this->env, $_request_handler_, "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>";
        // line 21
        if (isset($context["request_route"])) { $_request_route_ = $context["request_route"]; } else { $_request_route_ = null; }
        echo twig_escape_filter($this->env, $_request_route_, "html", null, true);
        echo "</i></span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        ob_start();
        // line 25
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Status Code</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 27
        if (isset($context["request_status_code_color"])) { $_request_status_code_color_ = $context["request_status_code_color"]; } else { $_request_status_code_color_ = null; }
        echo twig_escape_filter($this->env, $_request_status_code_color_, "html", null, true);
        echo "\">";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "statuscode"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                ";
        // line 31
        if (isset($context["request_handler"])) { $_request_handler_ = $context["request_handler"]; } else { $_request_handler_ = null; }
        echo twig_escape_filter($this->env, $_request_handler_, "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 35
        if (isset($context["request_route"])) { $_request_route_ = $context["request_route"]; } else { $_request_route_ = null; }
        echo twig_escape_filter($this->env, $_request_route_, "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 39
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "sessionmetadata"))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 42
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "    ";
        if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
    }

    // line 46
    public function block_menu($context, array $blocks = array())
    {
        // line 47
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/request.png"), "html", null, true);
        echo "\" alt=\"Request\" /></span>
    <strong>Request</strong>
</span>
";
    }

    // line 53
    public function block_panel($context, array $blocks = array())
    {
        // line 54
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 56
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "requestquery"), "all"))) {
            // line 57
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "requestquery")));
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 63
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 66
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "requestrequest"), "all"))) {
            // line 67
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "requestrequest")));
            // line 68
            echo "    ";
        } else {
            // line 69
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 73
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 76
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "requestattributes"), "all"))) {
            // line 77
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "requestattributes")));
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 83
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 86
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "requestcookies"), "all"))) {
            // line 87
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "requestcookies")));
            // line 88
            echo "    ";
        } else {
            // line 89
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 93
        echo "
    <h2>Request Headers</h2>

    ";
        // line 96
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "requestheaders")));
        // line 97
        echo "
    <h2>Request Content</h2>

    ";
        // line 100
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (($this->getAttribute($_collector_, "content") == false)) {
            // line 101
            echo "        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    ";
        } elseif ($this->getAttribute($_collector_, "content")) {
            // line 103
            echo "        <pre>";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "content"), "html", null, true);
            echo "</pre>
    ";
        } else {
            // line 105
            echo "        <p><em>No content</em></p>
    ";
        }
        // line 107
        echo "
    <h2>Request Server Parameters</h2>

    ";
        // line 110
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "requestserver")));
        // line 111
        echo "
    <h2>Response Headers</h2>

    ";
        // line 114
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($_collector_, "responseheaders")));
        // line 115
        echo "
    <h2>Session Metadata</h2>

    ";
        // line 118
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "sessionmetadata"))) {
            // line 119
            echo "    ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($_collector_, "sessionmetadata")));
            // line 120
            echo "    ";
        } else {
            // line 121
            echo "    <p>
        <em>No session metadata</em>
    </p>
    ";
        }
        // line 125
        echo "
    <h2>Session Attributes</h2>

    ";
        // line 128
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "sessionattributes"))) {
            // line 129
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($_collector_, "sessionattributes")));
            // line 130
            echo "    ";
        } else {
            // line 131
            echo "        <p>
            <em>No session attributes</em>
        </p>
    ";
        }
        // line 135
        echo "
    <h2>Flashes</h2>

    ";
        // line 138
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "flashes"))) {
            // line 139
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($_collector_, "flashes")));
            // line 140
            echo "    ";
        } else {
            // line 141
            echo "        <p>
            <em>No flashes</em>
        </p>
    ";
        }
        // line 145
        echo "
    ";
        // line 146
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if ($this->getAttribute($_profile_, "parent")) {
            // line 147
            echo "        <h2><a href=\"";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute($_profile_, "parent"), "token"))), "html", null, true);
            echo "\">Parent request: ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_profile_, "parent"), "token"), "html", null, true);
            echo "</a></h2>

        ";
            // line 149
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute($_profile_, "parent"), "getcollector", array(0 => "request"), "method"), "requestattributes")));
            // line 150
            echo "    ";
        }
        // line 151
        echo "
    ";
        // line 152
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_profile_, "children"))) {
            // line 153
            echo "        <h2>Sub requests</h2>

        ";
            // line 155
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_profile_, "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo "            <h3><a href=\"";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($_child_, "token"))), "html", null, true);
                echo "\">";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_child_, "token"), "html", null, true);
                echo "</a></h3>
            ";
                // line 157
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute($_child_, "getcollector", array(0 => "request"), "method"), "requestattributes")));
                // line 158
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 159
            echo "    ";
        }
        // line 160
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 160,  432 => 159,  426 => 158,  423 => 157,  414 => 156,  409 => 155,  405 => 153,  402 => 152,  399 => 151,  396 => 150,  383 => 147,  380 => 146,  377 => 145,  371 => 141,  368 => 140,  350 => 131,  340 => 128,  335 => 125,  319 => 118,  311 => 114,  303 => 110,  287 => 103,  283 => 101,  280 => 100,  275 => 97,  272 => 96,  267 => 93,  261 => 89,  254 => 87,  251 => 86,  233 => 77,  216 => 68,  204 => 63,  191 => 57,  181 => 53,  77 => 15,  74 => 14,  226 => 71,  219 => 69,  202 => 64,  198 => 59,  195 => 58,  187 => 60,  175 => 59,  160 => 58,  208 => 69,  205 => 68,  129 => 51,  68 => 23,  392 => 163,  381 => 160,  376 => 159,  373 => 158,  367 => 157,  356 => 135,  353 => 149,  346 => 145,  338 => 141,  330 => 137,  322 => 119,  314 => 115,  298 => 107,  282 => 109,  274 => 105,  266 => 101,  258 => 88,  248 => 89,  245 => 88,  237 => 78,  234 => 82,  231 => 81,  210 => 72,  177 => 60,  149 => 49,  135 => 52,  132 => 44,  116 => 25,  86 => 24,  78 => 21,  126 => 45,  112 => 42,  96 => 28,  61 => 22,  23 => 1,  82 => 28,  156 => 55,  119 => 40,  103 => 30,  222 => 77,  217 => 74,  214 => 139,  190 => 67,  186 => 66,  182 => 64,  178 => 63,  127 => 45,  55 => 13,  53 => 14,  548 => 162,  542 => 161,  537 => 158,  529 => 155,  525 => 153,  521 => 151,  511 => 149,  504 => 148,  501 => 147,  496 => 146,  490 => 144,  487 => 143,  482 => 142,  472 => 134,  468 => 132,  465 => 131,  459 => 130,  454 => 129,  449 => 126,  443 => 122,  440 => 121,  436 => 120,  433 => 119,  428 => 116,  422 => 112,  419 => 111,  415 => 110,  412 => 109,  407 => 106,  393 => 149,  389 => 103,  374 => 101,  364 => 139,  361 => 138,  358 => 97,  354 => 95,  347 => 130,  343 => 129,  329 => 121,  326 => 120,  320 => 86,  306 => 111,  301 => 84,  294 => 105,  286 => 80,  278 => 78,  270 => 77,  263 => 74,  255 => 73,  246 => 83,  238 => 69,  230 => 76,  188 => 56,  185 => 64,  161 => 43,  154 => 56,  146 => 40,  143 => 47,  134 => 43,  131 => 31,  122 => 44,  76 => 23,  72 => 19,  171 => 58,  163 => 55,  152 => 54,  138 => 53,  123 => 42,  111 => 35,  98 => 33,  83 => 23,  75 => 20,  71 => 24,  64 => 64,  43 => 7,  97 => 18,  92 => 29,  89 => 25,  85 => 17,  28 => 3,  36 => 5,  104 => 21,  58 => 17,  40 => 6,  94 => 35,  88 => 18,  31 => 4,  21 => 1,  50 => 8,  47 => 9,  27 => 3,  250 => 71,  240 => 79,  236 => 88,  229 => 84,  225 => 73,  220 => 141,  218 => 67,  215 => 78,  212 => 67,  209 => 66,  200 => 70,  194 => 65,  179 => 59,  173 => 48,  166 => 55,  162 => 53,  157 => 57,  155 => 51,  151 => 48,  145 => 46,  139 => 35,  128 => 42,  118 => 28,  114 => 20,  109 => 39,  84 => 37,  79 => 24,  69 => 20,  65 => 14,  34 => 5,  26 => 9,  24 => 1,  25 => 29,  19 => 1,  63 => 15,  60 => 9,  48 => 11,  46 => 12,  39 => 6,  22 => 2,  184 => 54,  176 => 60,  172 => 65,  169 => 56,  165 => 54,  159 => 52,  148 => 53,  137 => 41,  125 => 43,  120 => 27,  117 => 43,  115 => 33,  110 => 23,  107 => 41,  101 => 31,  90 => 41,  87 => 29,  80 => 19,  67 => 12,  57 => 9,  54 => 14,  51 => 13,  44 => 7,  42 => 8,  38 => 7,  35 => 6,  32 => 5,  29 => 5,  203 => 72,  197 => 69,  189 => 62,  183 => 63,  180 => 57,  174 => 115,  170 => 47,  167 => 46,  158 => 42,  153 => 45,  150 => 55,  147 => 39,  144 => 54,  136 => 31,  133 => 30,  130 => 35,  124 => 30,  121 => 29,  113 => 24,  108 => 34,  105 => 47,  102 => 28,  99 => 20,  95 => 24,  91 => 19,  81 => 16,  70 => 14,  66 => 23,  62 => 16,  59 => 16,  56 => 12,  52 => 13,  49 => 9,  45 => 10,  41 => 10,  37 => 5,  33 => 4,  30 => 3,);
    }
}
