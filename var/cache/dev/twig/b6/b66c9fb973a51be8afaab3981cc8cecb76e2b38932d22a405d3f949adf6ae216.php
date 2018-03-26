<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e22e3af53fc7c2d9c5ca576798121fd8b33fefbfe2a169b716247adddb525434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_ce91bc935158f36e361c23c93b1b1877ab15689931d6377c79bbc22df79005dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce91bc935158f36e361c23c93b1b1877ab15689931d6377c79bbc22df79005dc->enter($__internal_ce91bc935158f36e361c23c93b1b1877ab15689931d6377c79bbc22df79005dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a7d868ed5633ea58e129ff08cae3822e758139993563ce38bb43ef80ae208c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d868ed5633ea58e129ff08cae3822e758139993563ce38bb43ef80ae208c36->enter($__internal_a7d868ed5633ea58e129ff08cae3822e758139993563ce38bb43ef80ae208c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce91bc935158f36e361c23c93b1b1877ab15689931d6377c79bbc22df79005dc->leave($__internal_ce91bc935158f36e361c23c93b1b1877ab15689931d6377c79bbc22df79005dc_prof);

        
        $__internal_a7d868ed5633ea58e129ff08cae3822e758139993563ce38bb43ef80ae208c36->leave($__internal_a7d868ed5633ea58e129ff08cae3822e758139993563ce38bb43ef80ae208c36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d5bcc5e7bb58a6eba4fddb95ac65004f80f73692e9fe945420925a6efd932725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5bcc5e7bb58a6eba4fddb95ac65004f80f73692e9fe945420925a6efd932725->enter($__internal_d5bcc5e7bb58a6eba4fddb95ac65004f80f73692e9fe945420925a6efd932725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7beb1a4229ef4f8b2763e88b299410f1ae47bfd8e30f48598381480f411bf828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7beb1a4229ef4f8b2763e88b299410f1ae47bfd8e30f48598381480f411bf828->enter($__internal_7beb1a4229ef4f8b2763e88b299410f1ae47bfd8e30f48598381480f411bf828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7beb1a4229ef4f8b2763e88b299410f1ae47bfd8e30f48598381480f411bf828->leave($__internal_7beb1a4229ef4f8b2763e88b299410f1ae47bfd8e30f48598381480f411bf828_prof);

        
        $__internal_d5bcc5e7bb58a6eba4fddb95ac65004f80f73692e9fe945420925a6efd932725->leave($__internal_d5bcc5e7bb58a6eba4fddb95ac65004f80f73692e9fe945420925a6efd932725_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_420c70eefd8898739374063538b8f015041a012508b10ef461efbe6dc78d2b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420c70eefd8898739374063538b8f015041a012508b10ef461efbe6dc78d2b83->enter($__internal_420c70eefd8898739374063538b8f015041a012508b10ef461efbe6dc78d2b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_10e9055e5452e373bdf16eb191f569a039dd61f2f186440182d7ddbf7255cca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e9055e5452e373bdf16eb191f569a039dd61f2f186440182d7ddbf7255cca4->enter($__internal_10e9055e5452e373bdf16eb191f569a039dd61f2f186440182d7ddbf7255cca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_10e9055e5452e373bdf16eb191f569a039dd61f2f186440182d7ddbf7255cca4->leave($__internal_10e9055e5452e373bdf16eb191f569a039dd61f2f186440182d7ddbf7255cca4_prof);

        
        $__internal_420c70eefd8898739374063538b8f015041a012508b10ef461efbe6dc78d2b83->leave($__internal_420c70eefd8898739374063538b8f015041a012508b10ef461efbe6dc78d2b83_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab6be2a740658b2da9c8d828f3ab1b268bdc5d4dc812d62aa4b423544c2371fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6be2a740658b2da9c8d828f3ab1b268bdc5d4dc812d62aa4b423544c2371fc->enter($__internal_ab6be2a740658b2da9c8d828f3ab1b268bdc5d4dc812d62aa4b423544c2371fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fdddf8946d4b9105abe622971531478aaa3565eeed472d0143f074186750d8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdddf8946d4b9105abe622971531478aaa3565eeed472d0143f074186750d8bb->enter($__internal_fdddf8946d4b9105abe622971531478aaa3565eeed472d0143f074186750d8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fdddf8946d4b9105abe622971531478aaa3565eeed472d0143f074186750d8bb->leave($__internal_fdddf8946d4b9105abe622971531478aaa3565eeed472d0143f074186750d8bb_prof);

        
        $__internal_ab6be2a740658b2da9c8d828f3ab1b268bdc5d4dc812d62aa4b423544c2371fc->leave($__internal_ab6be2a740658b2da9c8d828f3ab1b268bdc5d4dc812d62aa4b423544c2371fc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
