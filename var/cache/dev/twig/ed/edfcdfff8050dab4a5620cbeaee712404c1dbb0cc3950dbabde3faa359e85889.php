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
        $__internal_09201bc9f84be65c1d9f09ce17b8516d9547e773ceb3112d7a78b93023ac05ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09201bc9f84be65c1d9f09ce17b8516d9547e773ceb3112d7a78b93023ac05ab->enter($__internal_09201bc9f84be65c1d9f09ce17b8516d9547e773ceb3112d7a78b93023ac05ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBundle:Default:index.html.twig"));

        $__internal_28c63802319df02101e47e1d5abdab843adf99af24ef9e464d00b50b69f7c1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c63802319df02101e47e1d5abdab843adf99af24ef9e464d00b50b69f7c1af->enter($__internal_28c63802319df02101e47e1d5abdab843adf99af24ef9e464d00b50b69f7c1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09201bc9f84be65c1d9f09ce17b8516d9547e773ceb3112d7a78b93023ac05ab->leave($__internal_09201bc9f84be65c1d9f09ce17b8516d9547e773ceb3112d7a78b93023ac05ab_prof);

        
        $__internal_28c63802319df02101e47e1d5abdab843adf99af24ef9e464d00b50b69f7c1af->leave($__internal_28c63802319df02101e47e1d5abdab843adf99af24ef9e464d00b50b69f7c1af_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c57b0a344f623548d81d6b488911f7e499a52f8616f33485670d234b807e4892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57b0a344f623548d81d6b488911f7e499a52f8616f33485670d234b807e4892->enter($__internal_c57b0a344f623548d81d6b488911f7e499a52f8616f33485670d234b807e4892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a1212c0435642df1a77929e0d03f94e589e0c4d4321c91356fbcc89c347df75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1212c0435642df1a77929e0d03f94e589e0c4d4321c91356fbcc89c347df75->enter($__internal_8a1212c0435642df1a77929e0d03f94e589e0c4d4321c91356fbcc89c347df75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Hello World!
";
        
        $__internal_8a1212c0435642df1a77929e0d03f94e589e0c4d4321c91356fbcc89c347df75->leave($__internal_8a1212c0435642df1a77929e0d03f94e589e0c4d4321c91356fbcc89c347df75_prof);

        
        $__internal_c57b0a344f623548d81d6b488911f7e499a52f8616f33485670d234b807e4892->leave($__internal_c57b0a344f623548d81d6b488911f7e499a52f8616f33485670d234b807e4892_prof);

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
{% endblock %}", "baseBundle:Default:index.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\src\\baseBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
