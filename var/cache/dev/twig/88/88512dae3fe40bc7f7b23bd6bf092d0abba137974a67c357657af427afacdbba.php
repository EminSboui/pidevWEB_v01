<?php

/* baseBundle:Default:index.html.twig */
class __TwigTemplate_dcd3c50ad82528fb9a4a3a9655ab1137b250c0dc087c14603d52d4fc485eba5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "baseBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a194dbf813e4280234c0f691c9042dd7686508f92d7fc830c91b91ac4d9a249f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a194dbf813e4280234c0f691c9042dd7686508f92d7fc830c91b91ac4d9a249f->enter($__internal_a194dbf813e4280234c0f691c9042dd7686508f92d7fc830c91b91ac4d9a249f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBundle:Default:index.html.twig"));

        $__internal_0adde32cb52f1839d867ba5c66996b42c71329d4782a4447036077179788932e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adde32cb52f1839d867ba5c66996b42c71329d4782a4447036077179788932e->enter($__internal_0adde32cb52f1839d867ba5c66996b42c71329d4782a4447036077179788932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a194dbf813e4280234c0f691c9042dd7686508f92d7fc830c91b91ac4d9a249f->leave($__internal_a194dbf813e4280234c0f691c9042dd7686508f92d7fc830c91b91ac4d9a249f_prof);

        
        $__internal_0adde32cb52f1839d867ba5c66996b42c71329d4782a4447036077179788932e->leave($__internal_0adde32cb52f1839d867ba5c66996b42c71329d4782a4447036077179788932e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f4f9b883b2edbaac9dc9860959ac3ee1d4c93feecf18d9f0b47ef0dbb552e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4f9b883b2edbaac9dc9860959ac3ee1d4c93feecf18d9f0b47ef0dbb552e98->enter($__internal_3f4f9b883b2edbaac9dc9860959ac3ee1d4c93feecf18d9f0b47ef0dbb552e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_784af896f0ad7205c25748287909c227b9a4d9e8a2c2894efc2ae8c0c529cee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784af896f0ad7205c25748287909c227b9a4d9e8a2c2894efc2ae8c0c529cee5->enter($__internal_784af896f0ad7205c25748287909c227b9a4d9e8a2c2894efc2ae8c0c529cee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_784af896f0ad7205c25748287909c227b9a4d9e8a2c2894efc2ae8c0c529cee5->leave($__internal_784af896f0ad7205c25748287909c227b9a4d9e8a2c2894efc2ae8c0c529cee5_prof);

        
        $__internal_3f4f9b883b2edbaac9dc9860959ac3ee1d4c93feecf18d9f0b47ef0dbb552e98->leave($__internal_3f4f9b883b2edbaac9dc9860959ac3ee1d4c93feecf18d9f0b47ef0dbb552e98_prof);

    }

    public function getTemplateName()
    {
        return "baseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}
{% block body %}
{% endblock %}", "baseBundle:Default:index.html.twig", "C:\\wamp64\\www\\pidev\\src\\baseBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
