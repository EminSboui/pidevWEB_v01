<?php

/* baseBundle:Default:index.html.twig */
class __TwigTemplate_5c1a2810da0a2c00cf83402a49a4236e8020b9650900e398b9be39881a396c11 extends Twig_Template
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
        $__internal_8696d1f0cbe6be1ad398418a57a641ae73235d8c8360a87ae8cc0410d39356b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8696d1f0cbe6be1ad398418a57a641ae73235d8c8360a87ae8cc0410d39356b8->enter($__internal_8696d1f0cbe6be1ad398418a57a641ae73235d8c8360a87ae8cc0410d39356b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBundle:Default:index.html.twig"));

        $__internal_acbc1449a188d52f2fcc5029cfa0eee8122cb4ad09244e9f75c249298a78c065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbc1449a188d52f2fcc5029cfa0eee8122cb4ad09244e9f75c249298a78c065->enter($__internal_acbc1449a188d52f2fcc5029cfa0eee8122cb4ad09244e9f75c249298a78c065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8696d1f0cbe6be1ad398418a57a641ae73235d8c8360a87ae8cc0410d39356b8->leave($__internal_8696d1f0cbe6be1ad398418a57a641ae73235d8c8360a87ae8cc0410d39356b8_prof);

        
        $__internal_acbc1449a188d52f2fcc5029cfa0eee8122cb4ad09244e9f75c249298a78c065->leave($__internal_acbc1449a188d52f2fcc5029cfa0eee8122cb4ad09244e9f75c249298a78c065_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_95abef4bccddf90f10f092452cc680b0799347c2778fdfa68e1708696e8e13a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95abef4bccddf90f10f092452cc680b0799347c2778fdfa68e1708696e8e13a8->enter($__internal_95abef4bccddf90f10f092452cc680b0799347c2778fdfa68e1708696e8e13a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8de8dcd015ae4a45c53b95147d500992647fe6690c8b401592eb2a7d442a196e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de8dcd015ae4a45c53b95147d500992647fe6690c8b401592eb2a7d442a196e->enter($__internal_8de8dcd015ae4a45c53b95147d500992647fe6690c8b401592eb2a7d442a196e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Hello World!
";
        
        $__internal_8de8dcd015ae4a45c53b95147d500992647fe6690c8b401592eb2a7d442a196e->leave($__internal_8de8dcd015ae4a45c53b95147d500992647fe6690c8b401592eb2a7d442a196e_prof);

        
        $__internal_95abef4bccddf90f10f092452cc680b0799347c2778fdfa68e1708696e8e13a8->leave($__internal_95abef4bccddf90f10f092452cc680b0799347c2778fdfa68e1708696e8e13a8_prof);

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
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
Hello World!
{% endblock %}", "baseBundle:Default:index.html.twig", "C:\\wamp64\\www\\pidevWEB_v1.0\\src\\baseBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
