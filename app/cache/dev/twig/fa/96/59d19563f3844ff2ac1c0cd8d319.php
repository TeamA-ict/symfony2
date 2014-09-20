<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_fa9659d19563f3844ff2ac1c0cd8d319 extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },
            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },
            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },
            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
            request: request,
            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },
            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }

        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  131 => 105,  82 => 59,  33 => 13,  29 => 6,  25 => 5,  40 => 14,  22 => 2,  19 => 1,  161 => 54,  154 => 50,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  122 => 34,  117 => 31,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  83 => 16,  72 => 9,  69 => 8,  64 => 6,  58 => 55,  56 => 54,  51 => 34,  47 => 32,  38 => 28,  31 => 6,  24 => 2,  220 => 138,  218 => 137,  215 => 136,  212 => 135,  188 => 115,  184 => 114,  180 => 113,  176 => 112,  172 => 111,  168 => 110,  152 => 97,  125 => 35,  99 => 50,  76 => 30,  55 => 11,  53 => 53,  50 => 15,  48 => 8,  45 => 31,  43 => 6,  39 => 4,  36 => 13,  30 => 5,);
    }
}
