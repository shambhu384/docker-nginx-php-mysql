<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcfd6c934facaff79ceb4716d7be70fc50e9fe7876d6d3b071d3dc0834d90a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfd6c934facaff79ceb4716d7be70fc50e9fe7876d6d3b071d3dc0834d90a89->enter($__internal_dcfd6c934facaff79ceb4716d7be70fc50e9fe7876d6d3b071d3dc0834d90a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_46d215e0a02e9b4020a7fbfefaafdb2e702c989e75972cea9256daaa59e3ff8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d215e0a02e9b4020a7fbfefaafdb2e702c989e75972cea9256daaa59e3ff8f->enter($__internal_46d215e0a02e9b4020a7fbfefaafdb2e702c989e75972cea9256daaa59e3ff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_dcfd6c934facaff79ceb4716d7be70fc50e9fe7876d6d3b071d3dc0834d90a89->leave($__internal_dcfd6c934facaff79ceb4716d7be70fc50e9fe7876d6d3b071d3dc0834d90a89_prof);

        
        $__internal_46d215e0a02e9b4020a7fbfefaafdb2e702c989e75972cea9256daaa59e3ff8f->leave($__internal_46d215e0a02e9b4020a7fbfefaafdb2e702c989e75972cea9256daaa59e3ff8f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d60a5dcf35db3eb91442be9f1cf6efb212fba78dab8ecc62c9230ddd248a996d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60a5dcf35db3eb91442be9f1cf6efb212fba78dab8ecc62c9230ddd248a996d->enter($__internal_d60a5dcf35db3eb91442be9f1cf6efb212fba78dab8ecc62c9230ddd248a996d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06127cc1ac13b2444807bee4afa450c5004cc1dd4b4ff3076b114b751dbe9433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06127cc1ac13b2444807bee4afa450c5004cc1dd4b4ff3076b114b751dbe9433->enter($__internal_06127cc1ac13b2444807bee4afa450c5004cc1dd4b4ff3076b114b751dbe9433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_06127cc1ac13b2444807bee4afa450c5004cc1dd4b4ff3076b114b751dbe9433->leave($__internal_06127cc1ac13b2444807bee4afa450c5004cc1dd4b4ff3076b114b751dbe9433_prof);

        
        $__internal_d60a5dcf35db3eb91442be9f1cf6efb212fba78dab8ecc62c9230ddd248a996d->leave($__internal_d60a5dcf35db3eb91442be9f1cf6efb212fba78dab8ecc62c9230ddd248a996d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f154e8821649dbf553a9a954b538fd415455e312bb2d9224b75e6feae309500d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f154e8821649dbf553a9a954b538fd415455e312bb2d9224b75e6feae309500d->enter($__internal_f154e8821649dbf553a9a954b538fd415455e312bb2d9224b75e6feae309500d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_16e322efc60fda6472907a594c6e81e8bb89903321db0f0b4a8bfa51d644eb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e322efc60fda6472907a594c6e81e8bb89903321db0f0b4a8bfa51d644eb2e->enter($__internal_16e322efc60fda6472907a594c6e81e8bb89903321db0f0b4a8bfa51d644eb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_16e322efc60fda6472907a594c6e81e8bb89903321db0f0b4a8bfa51d644eb2e->leave($__internal_16e322efc60fda6472907a594c6e81e8bb89903321db0f0b4a8bfa51d644eb2e_prof);

        
        $__internal_f154e8821649dbf553a9a954b538fd415455e312bb2d9224b75e6feae309500d->leave($__internal_f154e8821649dbf553a9a954b538fd415455e312bb2d9224b75e6feae309500d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_79139964d14c1c734775d2228de14973ca1e39fe5e7cb244d4d777ce9ba8fde0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79139964d14c1c734775d2228de14973ca1e39fe5e7cb244d4d777ce9ba8fde0->enter($__internal_79139964d14c1c734775d2228de14973ca1e39fe5e7cb244d4d777ce9ba8fde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae5097584098e8f5673fca0dda33d6c6575845adc902e038c36e10013091a20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5097584098e8f5673fca0dda33d6c6575845adc902e038c36e10013091a20b->enter($__internal_ae5097584098e8f5673fca0dda33d6c6575845adc902e038c36e10013091a20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae5097584098e8f5673fca0dda33d6c6575845adc902e038c36e10013091a20b->leave($__internal_ae5097584098e8f5673fca0dda33d6c6575845adc902e038c36e10013091a20b_prof);

        
        $__internal_79139964d14c1c734775d2228de14973ca1e39fe5e7cb244d4d777ce9ba8fde0->leave($__internal_79139964d14c1c734775d2228de14973ca1e39fe5e7cb244d4d777ce9ba8fde0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_116df0e87d45e6ef044d9776f75200948398e9a739696e26fad2be76b30e9bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116df0e87d45e6ef044d9776f75200948398e9a739696e26fad2be76b30e9bf8->enter($__internal_116df0e87d45e6ef044d9776f75200948398e9a739696e26fad2be76b30e9bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_464e1263681411f4bcd50e86a63fb43c4cec62aad8475b4b4eab828dd81137ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464e1263681411f4bcd50e86a63fb43c4cec62aad8475b4b4eab828dd81137ae->enter($__internal_464e1263681411f4bcd50e86a63fb43c4cec62aad8475b4b4eab828dd81137ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_464e1263681411f4bcd50e86a63fb43c4cec62aad8475b4b4eab828dd81137ae->leave($__internal_464e1263681411f4bcd50e86a63fb43c4cec62aad8475b4b4eab828dd81137ae_prof);

        
        $__internal_116df0e87d45e6ef044d9776f75200948398e9a739696e26fad2be76b30e9bf8->leave($__internal_116df0e87d45e6ef044d9776f75200948398e9a739696e26fad2be76b30e9bf8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/code/app/Resources/views/base.html.twig");
    }
}
