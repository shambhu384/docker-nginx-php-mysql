<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8abe0ae5b6aef413c88647ac1e127df4ea1269facf242d75a9d4c56e48b4d47e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abe0ae5b6aef413c88647ac1e127df4ea1269facf242d75a9d4c56e48b4d47e->enter($__internal_8abe0ae5b6aef413c88647ac1e127df4ea1269facf242d75a9d4c56e48b4d47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0765ce3342c9f4108593a59771996307646d90eb798b0628384e33b937e40cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0765ce3342c9f4108593a59771996307646d90eb798b0628384e33b937e40cf8->enter($__internal_0765ce3342c9f4108593a59771996307646d90eb798b0628384e33b937e40cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abe0ae5b6aef413c88647ac1e127df4ea1269facf242d75a9d4c56e48b4d47e->leave($__internal_8abe0ae5b6aef413c88647ac1e127df4ea1269facf242d75a9d4c56e48b4d47e_prof);

        
        $__internal_0765ce3342c9f4108593a59771996307646d90eb798b0628384e33b937e40cf8->leave($__internal_0765ce3342c9f4108593a59771996307646d90eb798b0628384e33b937e40cf8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1705f49b404ec8140d2b4cc9fc76ecdcd6b5ea6539a3780f371360d90ddb66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1705f49b404ec8140d2b4cc9fc76ecdcd6b5ea6539a3780f371360d90ddb66c->enter($__internal_f1705f49b404ec8140d2b4cc9fc76ecdcd6b5ea6539a3780f371360d90ddb66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7d4a0b2be948feaa2098c2011f9200199d06f809ff4eb5747ce381f285da6b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4a0b2be948feaa2098c2011f9200199d06f809ff4eb5747ce381f285da6b41->enter($__internal_7d4a0b2be948feaa2098c2011f9200199d06f809ff4eb5747ce381f285da6b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7d4a0b2be948feaa2098c2011f9200199d06f809ff4eb5747ce381f285da6b41->leave($__internal_7d4a0b2be948feaa2098c2011f9200199d06f809ff4eb5747ce381f285da6b41_prof);

        
        $__internal_f1705f49b404ec8140d2b4cc9fc76ecdcd6b5ea6539a3780f371360d90ddb66c->leave($__internal_f1705f49b404ec8140d2b4cc9fc76ecdcd6b5ea6539a3780f371360d90ddb66c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2b8369c419de5a90592a60fb161602983abf81ed1034266f3a1bf9d9341a038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b8369c419de5a90592a60fb161602983abf81ed1034266f3a1bf9d9341a038->enter($__internal_b2b8369c419de5a90592a60fb161602983abf81ed1034266f3a1bf9d9341a038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2b59925a3818bed2b10a87572245a7e059d50ae5a43a7ea5ad51c630b28c2508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b59925a3818bed2b10a87572245a7e059d50ae5a43a7ea5ad51c630b28c2508->enter($__internal_2b59925a3818bed2b10a87572245a7e059d50ae5a43a7ea5ad51c630b28c2508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2b59925a3818bed2b10a87572245a7e059d50ae5a43a7ea5ad51c630b28c2508->leave($__internal_2b59925a3818bed2b10a87572245a7e059d50ae5a43a7ea5ad51c630b28c2508_prof);

        
        $__internal_b2b8369c419de5a90592a60fb161602983abf81ed1034266f3a1bf9d9341a038->leave($__internal_b2b8369c419de5a90592a60fb161602983abf81ed1034266f3a1bf9d9341a038_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_214546b50f586bc0f25bb5b7412319da09d4e58349d29da1a488c32d87320b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214546b50f586bc0f25bb5b7412319da09d4e58349d29da1a488c32d87320b75->enter($__internal_214546b50f586bc0f25bb5b7412319da09d4e58349d29da1a488c32d87320b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a1f85143631aad85efdff28699ba8ae56ffc4a29e976c008c9e7f75f515b347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1f85143631aad85efdff28699ba8ae56ffc4a29e976c008c9e7f75f515b347->enter($__internal_6a1f85143631aad85efdff28699ba8ae56ffc4a29e976c008c9e7f75f515b347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6a1f85143631aad85efdff28699ba8ae56ffc4a29e976c008c9e7f75f515b347->leave($__internal_6a1f85143631aad85efdff28699ba8ae56ffc4a29e976c008c9e7f75f515b347_prof);

        
        $__internal_214546b50f586bc0f25bb5b7412319da09d4e58349d29da1a488c32d87320b75->leave($__internal_214546b50f586bc0f25bb5b7412319da09d4e58349d29da1a488c32d87320b75_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/code/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
