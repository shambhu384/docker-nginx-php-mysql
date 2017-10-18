<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_9bad312f9b4cd48a38c41c6b7b11d1fcd27b75809740868316885d3c6bfd652a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bad312f9b4cd48a38c41c6b7b11d1fcd27b75809740868316885d3c6bfd652a->enter($__internal_9bad312f9b4cd48a38c41c6b7b11d1fcd27b75809740868316885d3c6bfd652a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_23680d5863f8370b3b55987436dc75471ea56ae7a8214689f6b6a65c4a636a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23680d5863f8370b3b55987436dc75471ea56ae7a8214689f6b6a65c4a636a01->enter($__internal_23680d5863f8370b3b55987436dc75471ea56ae7a8214689f6b6a65c4a636a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bad312f9b4cd48a38c41c6b7b11d1fcd27b75809740868316885d3c6bfd652a->leave($__internal_9bad312f9b4cd48a38c41c6b7b11d1fcd27b75809740868316885d3c6bfd652a_prof);

        
        $__internal_23680d5863f8370b3b55987436dc75471ea56ae7a8214689f6b6a65c4a636a01->leave($__internal_23680d5863f8370b3b55987436dc75471ea56ae7a8214689f6b6a65c4a636a01_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ac2873972d6e2c96724bb3b7b36d521ad4fc8dd496574a207b376c31094ba0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac2873972d6e2c96724bb3b7b36d521ad4fc8dd496574a207b376c31094ba0d->enter($__internal_2ac2873972d6e2c96724bb3b7b36d521ad4fc8dd496574a207b376c31094ba0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a9cf4f51887f76c8254dc3d8be7a4d7147350ec475fbd40ef384e235f0b5b4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9cf4f51887f76c8254dc3d8be7a4d7147350ec475fbd40ef384e235f0b5b4bc->enter($__internal_a9cf4f51887f76c8254dc3d8be7a4d7147350ec475fbd40ef384e235f0b5b4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a9cf4f51887f76c8254dc3d8be7a4d7147350ec475fbd40ef384e235f0b5b4bc->leave($__internal_a9cf4f51887f76c8254dc3d8be7a4d7147350ec475fbd40ef384e235f0b5b4bc_prof);

        
        $__internal_2ac2873972d6e2c96724bb3b7b36d521ad4fc8dd496574a207b376c31094ba0d->leave($__internal_2ac2873972d6e2c96724bb3b7b36d521ad4fc8dd496574a207b376c31094ba0d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92919b835abf2f9cd7b3038635bc4fb4a03191bcba186a6039ebf625a2bab29b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92919b835abf2f9cd7b3038635bc4fb4a03191bcba186a6039ebf625a2bab29b->enter($__internal_92919b835abf2f9cd7b3038635bc4fb4a03191bcba186a6039ebf625a2bab29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_02ff7533c40d52fef36ea1cb679ca497d5004ea7d0ed71be7ede1f084e577083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ff7533c40d52fef36ea1cb679ca497d5004ea7d0ed71be7ede1f084e577083->enter($__internal_02ff7533c40d52fef36ea1cb679ca497d5004ea7d0ed71be7ede1f084e577083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_02ff7533c40d52fef36ea1cb679ca497d5004ea7d0ed71be7ede1f084e577083->leave($__internal_02ff7533c40d52fef36ea1cb679ca497d5004ea7d0ed71be7ede1f084e577083_prof);

        
        $__internal_92919b835abf2f9cd7b3038635bc4fb4a03191bcba186a6039ebf625a2bab29b->leave($__internal_92919b835abf2f9cd7b3038635bc4fb4a03191bcba186a6039ebf625a2bab29b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f57cb30cf6b739a7a16fbd93c76ed2272d4bf12960a9adb01f6faab3318ac9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57cb30cf6b739a7a16fbd93c76ed2272d4bf12960a9adb01f6faab3318ac9eb->enter($__internal_f57cb30cf6b739a7a16fbd93c76ed2272d4bf12960a9adb01f6faab3318ac9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b9977f3430f0e130d5f7ee54f3936284a0e9e5feeebe8a33f619644efffdde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9977f3430f0e130d5f7ee54f3936284a0e9e5feeebe8a33f619644efffdde1->enter($__internal_6b9977f3430f0e130d5f7ee54f3936284a0e9e5feeebe8a33f619644efffdde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b9977f3430f0e130d5f7ee54f3936284a0e9e5feeebe8a33f619644efffdde1->leave($__internal_6b9977f3430f0e130d5f7ee54f3936284a0e9e5feeebe8a33f619644efffdde1_prof);

        
        $__internal_f57cb30cf6b739a7a16fbd93c76ed2272d4bf12960a9adb01f6faab3318ac9eb->leave($__internal_f57cb30cf6b739a7a16fbd93c76ed2272d4bf12960a9adb01f6faab3318ac9eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/code/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
