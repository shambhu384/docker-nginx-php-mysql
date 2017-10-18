<?php

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_779fd2c97f4992051b26812b9c7204af98d668e2a71ce3d9dfdcfbd472fee355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bad1454fb3cef049a174aacc0178792fea903b42c73df12b23aad6edff8e3b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad1454fb3cef049a174aacc0178792fea903b42c73df12b23aad6edff8e3b0b->enter($__internal_bad1454fb3cef049a174aacc0178792fea903b42c73df12b23aad6edff8e3b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $__internal_c8e1ba72a7dcfad02b8761087321ee8da479bbc6ea3805cc481b6efc811c7ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e1ba72a7dcfad02b8761087321ee8da479bbc6ea3805cc481b6efc811c7ab6->enter($__internal_c8e1ba72a7dcfad02b8761087321ee8da479bbc6ea3805cc481b6efc811c7ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bad1454fb3cef049a174aacc0178792fea903b42c73df12b23aad6edff8e3b0b->leave($__internal_bad1454fb3cef049a174aacc0178792fea903b42c73df12b23aad6edff8e3b0b_prof);

        
        $__internal_c8e1ba72a7dcfad02b8761087321ee8da479bbc6ea3805cc481b6efc811c7ab6->leave($__internal_c8e1ba72a7dcfad02b8761087321ee8da479bbc6ea3805cc481b6efc811c7ab6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e653374ac016598f81e8a66db7a528e3b8944130584bdaa1db3fe2dcfcb5933a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e653374ac016598f81e8a66db7a528e3b8944130584bdaa1db3fe2dcfcb5933a->enter($__internal_e653374ac016598f81e8a66db7a528e3b8944130584bdaa1db3fe2dcfcb5933a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b79434e4e51054fcccb642c94a2ee09a9c0e048729dfd7e92e3ac0059a2e91c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79434e4e51054fcccb642c94a2ee09a9c0e048729dfd7e92e3ac0059a2e91c5->enter($__internal_b79434e4e51054fcccb642c94a2ee09a9c0e048729dfd7e92e3ac0059a2e91c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["helper"] = $this;
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo $context["helper"]->getset_handler($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "controller", array()));
        echo "
    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array())) {
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "            ";
            echo $context["helper"]->getset_handler($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "controller", array()), $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "route", array()), ((("GET" != $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "method", array()))) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "method", array())) : ("")));
            echo "
        ";
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ((($this->getAttribute(($context["collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "forward", array()), false)) : (false))) {
            // line 16
            echo "        ";
            ob_start();
            // line 17
            echo "            ";
            echo $context["helper"]->getset_handler($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "forward", array()), "controller", array()));
            echo "
        ";
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        $context["request_status_code_color"] = ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statuscode", array()) >= 400)) ? ("red") : (((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statuscode", array()) >= 300)) ? ("yellow") : ("green"))));
        // line 22
        echo "
    ";
        // line 23
        ob_start();
        // line 24
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, ($context["request_status_code_color"] ?? $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statuscode", array()), "html", null, true);
        echo "</span>
        ";
        // line 25
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "route", array())) {
            // line 26
            echo "            ";
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array())) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/redirect.svg");
            }
            // line 27
            echo "            ";
            if ((($this->getAttribute(($context["collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "forward", array()), false)) : (false))) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/forward.svg");
            }
            // line 28
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, ((("GET" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "method", array()))) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "method", array())) : ("")), "html", null, true);
            echo " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "route", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 31
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statuscode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statustext", array()), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 40
        if (("GET" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "method", array()))) {
            // line 41
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "method", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 46
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
        // line 49
        echo twig_escape_filter($this->env, ($context["request_handler"] ?? $this->getContext($context, "request_handler")), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 52
        if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 53
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Controller class</b>
                    <span>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "controller", array()), "class", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 58
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 61
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "route", array()), "NONE")) : ("NONE")), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionmetadata", array()))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        </div>

        ";
        // line 70
        if (array_key_exists("redirect_handler", $context)) {
            // line 71
            echo "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "status_code", array()), "html", null, true);
            echo "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
            // line 78
            echo twig_escape_filter($this->env, ($context["redirect_handler"] ?? $this->getContext($context, "redirect_handler")), "html", null, true);
            echo "
                        (<a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "token", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "token", array()), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 84
        echo "
        ";
        // line 85
        if (array_key_exists("forward_handler", $context)) {
            // line 86
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
            // line 90
            echo twig_escape_filter($this->env, ($context["forward_handler"] ?? $this->getContext($context, "forward_handler")), "html", null, true);
            echo "
                        (<a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "forward", array()), "token", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "forward", array()), "token", array()), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 96
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 97
        echo "
    ";
        // line 98
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))));
        echo "
";
        
        $__internal_b79434e4e51054fcccb642c94a2ee09a9c0e048729dfd7e92e3ac0059a2e91c5->leave($__internal_b79434e4e51054fcccb642c94a2ee09a9c0e048729dfd7e92e3ac0059a2e91c5_prof);

        
        $__internal_e653374ac016598f81e8a66db7a528e3b8944130584bdaa1db3fe2dcfcb5933a->leave($__internal_e653374ac016598f81e8a66db7a528e3b8944130584bdaa1db3fe2dcfcb5933a_prof);

    }

    // line 101
    public function block_menu($context, array $blocks = array())
    {
        $__internal_177315540b80a1aeeed46eef467fcc76530304568d1f1fbb490b972017a5ba32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177315540b80a1aeeed46eef467fcc76530304568d1f1fbb490b972017a5ba32->enter($__internal_177315540b80a1aeeed46eef467fcc76530304568d1f1fbb490b972017a5ba32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_522707a9822391bce22773b4f6337384d3549448ccfe43e11c7e2c8573bf56f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522707a9822391bce22773b4f6337384d3549448ccfe43e11c7e2c8573bf56f6->enter($__internal_522707a9822391bce22773b4f6337384d3549448ccfe43e11c7e2c8573bf56f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 102
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 103
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_522707a9822391bce22773b4f6337384d3549448ccfe43e11c7e2c8573bf56f6->leave($__internal_522707a9822391bce22773b4f6337384d3549448ccfe43e11c7e2c8573bf56f6_prof);

        
        $__internal_177315540b80a1aeeed46eef467fcc76530304568d1f1fbb490b972017a5ba32->leave($__internal_177315540b80a1aeeed46eef467fcc76530304568d1f1fbb490b972017a5ba32_prof);

    }

    // line 108
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7297a673b0856eef762e3f73c80000fd538a9e56a82ad2ba7e6eec2a274eaa0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7297a673b0856eef762e3f73c80000fd538a9e56a82ad2ba7e6eec2a274eaa0c->enter($__internal_7297a673b0856eef762e3f73c80000fd538a9e56a82ad2ba7e6eec2a274eaa0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ce2b294ca94d21dfa6ffdf172c32c8d164171bc56128c62b293c6b7bf7add36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce2b294ca94d21dfa6ffdf172c32c8d164171bc56128c62b293c6b7bf7add36->enter($__internal_6ce2b294ca94d21dfa6ffdf172c32c8d164171bc56128c62b293c6b7bf7add36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 109
        echo "    ";
        $context["helper"] = $this;
        // line 110
        echo "
    <h2>
        ";
        // line 112
        echo $context["helper"]->getset_handler($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "controller", array()));
        echo "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                ";
        // line 122
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestquery", array()), "all", array()))) {
            // line 123
            echo "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                ";
        } else {
            // line 127
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestquery", array()), "maxDepth" => 1), false);
            echo "
                ";
        }
        // line 129
        echo "
                <h3>POST Parameters</h3>

                ";
        // line 132
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestrequest", array()), "all", array()))) {
            // line 133
            echo "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                ";
        } else {
            // line 137
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestrequest", array()), "maxDepth" => 1), false);
            echo "
                ";
        }
        // line 139
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 142
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestattributes", array()), "all", array()))) {
            // line 143
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 147
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestattributes", array())), false);
            echo "
                ";
        }
        // line 149
        echo "
                <h3>Request Headers</h3>
                ";
        // line 151
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestheaders", array()), "labels" => array(0 => "Header", 1 => "Value"), "maxDepth" => 1), false);
        echo "

                <h3>Request Content</h3>

                ";
        // line 155
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "content", array()) == false)) {
            // line 156
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif ($this->getAttribute(        // line 159
($context["collector"] ?? $this->getContext($context, "collector")), "content", array())) {
            // line 160
            echo "                    <div class=\"card\">
                        <pre class=\"break-long-words\">";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "content", array()), "html", null, true);
            echo "</pre>
                    </div>
                ";
        } else {
            // line 164
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 168
        echo "
                <h3>Server Parameters</h3>
                ";
        // line 170
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestserver", array())), false);
        echo "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 180
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "responseheaders", array()), "labels" => array(0 => "Header", 1 => "Value"), "maxDepth" => 1), false);
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 184
        echo (((twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestcookies", array()), "all", array())) && twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "responsecookies", array()), "all", array())))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 190
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestcookies", array()), "all", array()))) {
            // line 191
            echo "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 195
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestcookies", array())), false);
            echo "
                ";
        }
        // line 197
        echo "
                <h3>Response Cookies</h3>

                ";
        // line 200
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "responsecookies", array()), "all", array()))) {
            // line 201
            echo "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 205
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "responsecookies", array())), true);
            echo "
                ";
        }
        // line 207
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 210
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionmetadata", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 216
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionmetadata", array()))) {
            // line 217
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 221
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionmetadata", array())), false);
            echo "
                ";
        }
        // line 223
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 226
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionattributes", array()))) {
            // line 227
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 231
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionattributes", array()), "labels" => array(0 => "Attribute", 1 => "Value")), false);
            echo "
                ";
        }
        // line 233
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 236
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "flashes", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 242
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "flashes", array()))) {
            // line 243
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 247
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "flashes", array())), false);
            echo "
                ";
        }
        // line 249
        echo "            </div>
        </div>

        ";
        // line 252
        if ($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array())) {
            // line 253
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array()), "token", array()))), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array()), "token", array()), "html", null, true);
            echo ")</small>
                </h3>

                ";
            // line 262
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array()), "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
            echo "
            </div>
        </div>
        ";
        }
        // line 266
        echo "
        ";
        // line 267
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()))) {
            // line 268
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 269
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 273
                echo "                    <h3>
                        <a href=\"";
                // line 274
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()))), "html", null, true);
                echo "\">
                            ";
                // line 275
                echo $context["helper"]->getset_handler($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "controller", array()));
                echo "
                        </a>
                        <small>(token = <a href=\"";
                // line 277
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "token", array()), "html", null, true);
                echo "</a>)</small>
                    </h3>

                    ";
                // line 280
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "            </div>
        </div>
        ";
        }
        // line 285
        echo "    </div>
";
        
        $__internal_6ce2b294ca94d21dfa6ffdf172c32c8d164171bc56128c62b293c6b7bf7add36->leave($__internal_6ce2b294ca94d21dfa6ffdf172c32c8d164171bc56128c62b293c6b7bf7add36_prof);

        
        $__internal_7297a673b0856eef762e3f73c80000fd538a9e56a82ad2ba7e6eec2a274eaa0c->leave($__internal_7297a673b0856eef762e3f73c80000fd538a9e56a82ad2ba7e6eec2a274eaa0c_prof);

    }

    // line 288
    public function getset_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d4fa561f6b1937568f98da7b94c7dd4f976be19e5aafbcec8937304d0d93f891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d4fa561f6b1937568f98da7b94c7dd4f976be19e5aafbcec8937304d0d93f891->enter($__internal_d4fa561f6b1937568f98da7b94c7dd4f976be19e5aafbcec8937304d0d93f891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "set_handler"));

            $__internal_2d314fb3f9fd3bfe1e2383207d713aacd59757d572d0f9cced617e36ad790c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2d314fb3f9fd3bfe1e2383207d713aacd59757d572d0f9cced617e36ad790c5b->enter($__internal_2d314fb3f9fd3bfe1e2383207d713aacd59757d572d0f9cced617e36ad790c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 289
            echo "    ";
            if ($this->getAttribute(($context["controller"] ?? null), "class", array(), "any", true, true)) {
                // line 290
                if (((array_key_exists("method", $context)) ? (_twig_default_filter(($context["method"] ?? $this->getContext($context, "method")), false)) : (false))) {
                    echo "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
                    echo "</span>";
                }
                // line 291
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "file", array()), $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "line", array()));
                // line 292
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "file", array()), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span>";
                }
                // line 294
                if (((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? $this->getContext($context, "route")), false)) : (false))) {
                    // line 295
                    echo "@";
                    echo twig_escape_filter($this->env, ($context["route"] ?? $this->getContext($context, "route")), "html", null, true);
                } else {
                    // line 297
                    echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "class", array()))), "html", null, true);
                    // line 298
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "method", array())) ? ((" :: " . $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "method", array()))) : ("")), "html", null, true);
                }
                // line 301
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 303
                echo "<span>";
                echo twig_escape_filter($this->env, ((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? $this->getContext($context, "route")), ($context["controller"] ?? $this->getContext($context, "controller")))) : (($context["controller"] ?? $this->getContext($context, "controller")))), "html", null, true);
                echo "</span>";
            }
            
            $__internal_2d314fb3f9fd3bfe1e2383207d713aacd59757d572d0f9cced617e36ad790c5b->leave($__internal_2d314fb3f9fd3bfe1e2383207d713aacd59757d572d0f9cced617e36ad790c5b_prof);

            
            $__internal_d4fa561f6b1937568f98da7b94c7dd4f976be19e5aafbcec8937304d0d93f891->leave($__internal_d4fa561f6b1937568f98da7b94c7dd4f976be19e5aafbcec8937304d0d93f891_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  720 => 303,  713 => 301,  710 => 298,  708 => 297,  704 => 295,  702 => 294,  692 => 292,  690 => 291,  684 => 290,  681 => 289,  661 => 288,  650 => 285,  645 => 282,  637 => 280,  629 => 277,  624 => 275,  620 => 274,  617 => 273,  613 => 272,  607 => 269,  604 => 268,  602 => 267,  599 => 266,  592 => 262,  586 => 259,  582 => 258,  575 => 253,  573 => 252,  568 => 249,  562 => 247,  556 => 243,  554 => 242,  545 => 236,  540 => 233,  534 => 231,  528 => 227,  526 => 226,  521 => 223,  515 => 221,  509 => 217,  507 => 216,  498 => 210,  493 => 207,  487 => 205,  481 => 201,  479 => 200,  474 => 197,  468 => 195,  462 => 191,  460 => 190,  451 => 184,  444 => 180,  431 => 170,  427 => 168,  421 => 164,  415 => 161,  412 => 160,  410 => 159,  405 => 156,  403 => 155,  396 => 151,  392 => 149,  386 => 147,  380 => 143,  378 => 142,  373 => 139,  367 => 137,  361 => 133,  359 => 132,  354 => 129,  348 => 127,  342 => 123,  340 => 122,  327 => 112,  323 => 110,  320 => 109,  311 => 108,  297 => 103,  294 => 102,  285 => 101,  273 => 98,  270 => 97,  267 => 96,  257 => 91,  253 => 90,  247 => 86,  245 => 85,  242 => 84,  232 => 79,  228 => 78,  221 => 74,  216 => 71,  214 => 70,  203 => 66,  195 => 61,  190 => 58,  185 => 55,  181 => 53,  179 => 52,  173 => 49,  168 => 46,  163 => 43,  159 => 41,  157 => 40,  149 => 37,  144 => 34,  142 => 33,  139 => 32,  136 => 31,  131 => 29,  126 => 28,  121 => 27,  116 => 26,  114 => 25,  107 => 24,  105 => 23,  102 => 22,  100 => 21,  97 => 20,  94 => 19,  88 => 17,  85 => 16,  83 => 15,  80 => 14,  77 => 13,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% import _self as helper %}
    {% set request_handler %}
        {{ helper.set_handler(collector.controller) }}
    {% endset %}

    {% if collector.redirect %}
        {% set redirect_handler %}
            {{ helper.set_handler(collector.redirect.controller, collector.redirect.route, 'GET' != collector.redirect.method ? collector.redirect.method) }}
        {% endset %}
    {% endif %}

    {% if collector.forward|default(false) %}
        {% set forward_handler %}
            {{ helper.set_handler(collector.forward.controller) }}
        {% endset %}
    {% endif %}

    {% set request_status_code_color = (collector.statuscode >= 400) ? 'red' : (collector.statuscode >= 300) ? 'yellow' : 'green' %}

    {% set icon %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span>
        {% if collector.route %}
            {% if collector.redirect %}{{ include('@WebProfiler/Icon/redirect.svg') }}{% endif %}
            {% if collector.forward|default(false) %}{{ include('@WebProfiler/Icon/forward.svg') }}{% endif %}
            <span class=\"sf-toolbar-label\">{{ 'GET' != collector.method ? collector.method }} @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">{{ collector.route }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>{{ collector.statuscode }} {{ collector.statustext }}</span>
            </div>

            {% if 'GET' != collector.method -%}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>{{ collector.method }}</span>
                </div>
            {%- endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>{{ request_handler }}</span>
            </div>

            {% if collector.controller.class is defined -%}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Controller class</b>
                    <span>{{ collector.controller.class }}</span>
                </div>
            {%- endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>{{ collector.route|default('NONE') }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>
            </div>
        </div>

        {% if redirect_handler is defined -%}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">{{ collector.redirect.status_code }}</span>
                        Redirect from
                    </b>
                    <span>
                        {{ redirect_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.redirect.token }) }}\">{{ collector.redirect.token }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}

        {% if forward_handler is defined %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        {{ forward_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.forward.token }) }}\">{{ collector.forward.token }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/request.svg') }}</span>
        <strong>Request / Response</strong>
    </span>
{% endblock %}

{% block panel %}
    {% import _self as helper %}

    <h2>
        {{ helper.set_handler(collector.controller) }}
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                {% if collector.requestquery.all is empty %}
                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestquery, maxDepth: 1 }, with_context = false) }}
                {% endif %}

                <h3>POST Parameters</h3>

                {% if collector.requestrequest.all is empty %}
                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestrequest, maxDepth: 1 }, with_context = false) }}
                {% endif %}

                <h3>Request Attributes</h3>

                {% if collector.requestattributes.all is empty %}
                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestattributes }, with_context = false) }}
                {% endif %}

                <h3>Request Headers</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}

                <h3>Request Content</h3>

                {% if collector.content == false %}
                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                {% elseif collector.content %}
                    <div class=\"card\">
                        <pre class=\"break-long-words\">{{ collector.content }}</pre>
                    </div>
                {% else %}
                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                {% endif %}

                <h3>Server Parameters</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestserver }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responseheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab {{ collector.requestcookies.all is empty and collector.responsecookies.all is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                {% if collector.requestcookies.all is empty %}
                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestcookies }, with_context = false) }}
                {% endif %}

                <h3>Response Cookies</h3>

                {% if collector.responsecookies.all is empty %}
                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responsecookies }, with_context = true) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.sessionmetadata is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                {% if collector.sessionmetadata is empty %}
                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionmetadata }, with_context = false) }}
                {% endif %}

                <h3>Session Attributes</h3>

                {% if collector.sessionattributes is empty %}
                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionattributes, labels: ['Attribute', 'Value'] }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.flashes is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                {% if collector.flashes is empty %}
                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.flashes }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        {% if profile.parent %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"{{ path('_profiler', { token: profile.parent.token }) }}\">Return to parent request</a>
                    <small>(token = {{ profile.parent.token }})</small>
                </h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: profile.parent.getcollector('request').requestattributes }, with_context = false) }}
            </div>
        </div>
        {% endif %}

        {% if profile.children|length %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">{{ profile.children|length }}</span></h3>

            <div class=\"tab-content\">
                {% for child in profile.children %}
                    <h3>
                        <a href=\"{{ path('_profiler', { token: child.token }) }}\">
                            {{ helper.set_handler(child.getcollector('request').controller) }}
                        </a>
                        <small>(token = <a href=\"{{ path('_profiler', { token: child.token }) }}\">{{ child.token }}</a>)</small>
                    </h3>

                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: child.getcollector('request').requestattributes }, with_context = false) }}
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{% endblock %}

{% macro set_handler(controller, route, method) %}
    {% if controller.class is defined -%}
        {%- if method|default(false) %}<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">{{ method }}</span>{% endif -%}
        {%- set link = controller.file|file_link(controller.line) %}
        {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% else %}<span>{% endif %}

            {%- if route|default(false) -%}
                @{{ route }}
            {%- else -%}
                {{- controller.class|abbr_class|striptags -}}
                {{- controller.method ? ' :: ' ~ controller.method -}}
            {%- endif -%}

        {%- if link %}</a>{% else %}</span>{% endif %}
    {%- else -%}
        <span>{{ route|default(controller) }}</span>
    {%- endif %}
{% endmacro %}
", "@WebProfiler/Collector/request.html.twig", "/code/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/request.html.twig");
    }
}
