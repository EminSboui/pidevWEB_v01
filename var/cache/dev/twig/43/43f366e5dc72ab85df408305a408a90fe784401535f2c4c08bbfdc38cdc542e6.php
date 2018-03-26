<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_03f16f7935efc3b1571bcde34bde9ba802edc11a2c7439350b6aca1ef39ef8a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb4189dc678c7f3def8bf3ceeb0092970a6738eb510a3369c58bdb3981cb0383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4189dc678c7f3def8bf3ceeb0092970a6738eb510a3369c58bdb3981cb0383->enter($__internal_cb4189dc678c7f3def8bf3ceeb0092970a6738eb510a3369c58bdb3981cb0383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f2d4b0908887f7655b1502d926be644995374d867e9fbda57130f6452f61119f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d4b0908887f7655b1502d926be644995374d867e9fbda57130f6452f61119f->enter($__internal_f2d4b0908887f7655b1502d926be644995374d867e9fbda57130f6452f61119f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb4189dc678c7f3def8bf3ceeb0092970a6738eb510a3369c58bdb3981cb0383->leave($__internal_cb4189dc678c7f3def8bf3ceeb0092970a6738eb510a3369c58bdb3981cb0383_prof);

        
        $__internal_f2d4b0908887f7655b1502d926be644995374d867e9fbda57130f6452f61119f->leave($__internal_f2d4b0908887f7655b1502d926be644995374d867e9fbda57130f6452f61119f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c0ea77b36de412cbe3fc4d9a5309f15e85d72c4105fe3ea9cdd222730354c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0ea77b36de412cbe3fc4d9a5309f15e85d72c4105fe3ea9cdd222730354c72->enter($__internal_7c0ea77b36de412cbe3fc4d9a5309f15e85d72c4105fe3ea9cdd222730354c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e7081550f75483f88553789aad8a8eed76e89a0c3f3514de450a3e9f94313f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7081550f75483f88553789aad8a8eed76e89a0c3f3514de450a3e9f94313f68->enter($__internal_e7081550f75483f88553789aad8a8eed76e89a0c3f3514de450a3e9f94313f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e7081550f75483f88553789aad8a8eed76e89a0c3f3514de450a3e9f94313f68->leave($__internal_e7081550f75483f88553789aad8a8eed76e89a0c3f3514de450a3e9f94313f68_prof);

        
        $__internal_7c0ea77b36de412cbe3fc4d9a5309f15e85d72c4105fe3ea9cdd222730354c72->leave($__internal_7c0ea77b36de412cbe3fc4d9a5309f15e85d72c4105fe3ea9cdd222730354c72_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe364d4602a8bda09f6d5c9be4d20cc31ae843005233a07f46de7010c46b4805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe364d4602a8bda09f6d5c9be4d20cc31ae843005233a07f46de7010c46b4805->enter($__internal_fe364d4602a8bda09f6d5c9be4d20cc31ae843005233a07f46de7010c46b4805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d512b221cfc2305dd56b0be17876e0f60cde0259b7eaa14b45284ad87a1f1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d512b221cfc2305dd56b0be17876e0f60cde0259b7eaa14b45284ad87a1f1af->enter($__internal_1d512b221cfc2305dd56b0be17876e0f60cde0259b7eaa14b45284ad87a1f1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1d512b221cfc2305dd56b0be17876e0f60cde0259b7eaa14b45284ad87a1f1af->leave($__internal_1d512b221cfc2305dd56b0be17876e0f60cde0259b7eaa14b45284ad87a1f1af_prof);

        
        $__internal_fe364d4602a8bda09f6d5c9be4d20cc31ae843005233a07f46de7010c46b4805->leave($__internal_fe364d4602a8bda09f6d5c9be4d20cc31ae843005233a07f46de7010c46b4805_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
