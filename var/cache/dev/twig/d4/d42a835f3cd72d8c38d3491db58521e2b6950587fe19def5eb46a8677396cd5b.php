<?php

/* RecepieBundle:Default:index.html.twig */
class __TwigTemplate_1ff40558f7679483830daa2ba632d1a6c7481b2a9c3648207997209fd1de43f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "RecepieBundle:Default:index.html.twig", 1);
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
        $__internal_8495ff9195939408e316f6f50066045ed6ecac08a899a9c45f3521f5a7d6543f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8495ff9195939408e316f6f50066045ed6ecac08a899a9c45f3521f5a7d6543f->enter($__internal_8495ff9195939408e316f6f50066045ed6ecac08a899a9c45f3521f5a7d6543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RecepieBundle:Default:index.html.twig"));

        $__internal_7141d6add98e168825e6e54a9bb9caa202db7a99f32138694c199e40fc88098d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7141d6add98e168825e6e54a9bb9caa202db7a99f32138694c199e40fc88098d->enter($__internal_7141d6add98e168825e6e54a9bb9caa202db7a99f32138694c199e40fc88098d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RecepieBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8495ff9195939408e316f6f50066045ed6ecac08a899a9c45f3521f5a7d6543f->leave($__internal_8495ff9195939408e316f6f50066045ed6ecac08a899a9c45f3521f5a7d6543f_prof);

        
        $__internal_7141d6add98e168825e6e54a9bb9caa202db7a99f32138694c199e40fc88098d->leave($__internal_7141d6add98e168825e6e54a9bb9caa202db7a99f32138694c199e40fc88098d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_901d6aa78b44a52222a75c7479c01cb5bd0f8d4a5dbfd5e2fb951d09c0d27d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901d6aa78b44a52222a75c7479c01cb5bd0f8d4a5dbfd5e2fb951d09c0d27d6d->enter($__internal_901d6aa78b44a52222a75c7479c01cb5bd0f8d4a5dbfd5e2fb951d09c0d27d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_590551c5eaf59c54a44fa5ac3c38fc320ccf62101066ee9ca308cf6e3baaf2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590551c5eaf59c54a44fa5ac3c38fc320ccf62101066ee9ca308cf6e3baaf2b8->enter($__internal_590551c5eaf59c54a44fa5ac3c38fc320ccf62101066ee9ca308cf6e3baaf2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_590551c5eaf59c54a44fa5ac3c38fc320ccf62101066ee9ca308cf6e3baaf2b8->leave($__internal_590551c5eaf59c54a44fa5ac3c38fc320ccf62101066ee9ca308cf6e3baaf2b8_prof);

        
        $__internal_901d6aa78b44a52222a75c7479c01cb5bd0f8d4a5dbfd5e2fb951d09c0d27d6d->leave($__internal_901d6aa78b44a52222a75c7479c01cb5bd0f8d4a5dbfd5e2fb951d09c0d27d6d_prof);

    }

    public function getTemplateName()
    {
        return "RecepieBundle:Default:index.html.twig";
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
{% endblock %}", "RecepieBundle:Default:index.html.twig", "C:\\wamp64\\www\\pidev\\src\\RecepieBundle/Resources/views/Default/index.html.twig");
    }
}
