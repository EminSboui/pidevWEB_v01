<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3a14654ba20886865bfb4fc268dccda008689c6f7cc12fd9bb3482afc47e917d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_ff75f4fade3288e62c2e32d6ff5d83ff5f845264f40dfd7541eabc166735ccdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff75f4fade3288e62c2e32d6ff5d83ff5f845264f40dfd7541eabc166735ccdf->enter($__internal_ff75f4fade3288e62c2e32d6ff5d83ff5f845264f40dfd7541eabc166735ccdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f360bedad4b46ffd423b8ef3926010b954a47bd08c2802677f9093aaa872b4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f360bedad4b46ffd423b8ef3926010b954a47bd08c2802677f9093aaa872b4f1->enter($__internal_f360bedad4b46ffd423b8ef3926010b954a47bd08c2802677f9093aaa872b4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff75f4fade3288e62c2e32d6ff5d83ff5f845264f40dfd7541eabc166735ccdf->leave($__internal_ff75f4fade3288e62c2e32d6ff5d83ff5f845264f40dfd7541eabc166735ccdf_prof);

        
        $__internal_f360bedad4b46ffd423b8ef3926010b954a47bd08c2802677f9093aaa872b4f1->leave($__internal_f360bedad4b46ffd423b8ef3926010b954a47bd08c2802677f9093aaa872b4f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f5467b29349f98892d9c72807b88b4d71e4750e334416c993f78e99d413dcd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5467b29349f98892d9c72807b88b4d71e4750e334416c993f78e99d413dcd5->enter($__internal_5f5467b29349f98892d9c72807b88b4d71e4750e334416c993f78e99d413dcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_264bcfa7de9932cb1efd384656281d0fb11da058c66fc45aef73e49580b2764f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264bcfa7de9932cb1efd384656281d0fb11da058c66fc45aef73e49580b2764f->enter($__internal_264bcfa7de9932cb1efd384656281d0fb11da058c66fc45aef73e49580b2764f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_264bcfa7de9932cb1efd384656281d0fb11da058c66fc45aef73e49580b2764f->leave($__internal_264bcfa7de9932cb1efd384656281d0fb11da058c66fc45aef73e49580b2764f_prof);

        
        $__internal_5f5467b29349f98892d9c72807b88b4d71e4750e334416c993f78e99d413dcd5->leave($__internal_5f5467b29349f98892d9c72807b88b4d71e4750e334416c993f78e99d413dcd5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e99fd012694a26ac083d42e81b331ede71e3c31a8dfdb82bfff7d3f3d1600d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e99fd012694a26ac083d42e81b331ede71e3c31a8dfdb82bfff7d3f3d1600d6->enter($__internal_2e99fd012694a26ac083d42e81b331ede71e3c31a8dfdb82bfff7d3f3d1600d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8741da26dd277ad6a7068608f7dae8e3d0f7ba5f9eb2ee0789de8557880a4106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8741da26dd277ad6a7068608f7dae8e3d0f7ba5f9eb2ee0789de8557880a4106->enter($__internal_8741da26dd277ad6a7068608f7dae8e3d0f7ba5f9eb2ee0789de8557880a4106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8741da26dd277ad6a7068608f7dae8e3d0f7ba5f9eb2ee0789de8557880a4106->leave($__internal_8741da26dd277ad6a7068608f7dae8e3d0f7ba5f9eb2ee0789de8557880a4106_prof);

        
        $__internal_2e99fd012694a26ac083d42e81b331ede71e3c31a8dfdb82bfff7d3f3d1600d6->leave($__internal_2e99fd012694a26ac083d42e81b331ede71e3c31a8dfdb82bfff7d3f3d1600d6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
