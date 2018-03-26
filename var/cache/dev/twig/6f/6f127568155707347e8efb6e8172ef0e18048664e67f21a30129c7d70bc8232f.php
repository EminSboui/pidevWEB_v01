<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_9d1c9610f663e05de541bd3b1f06a9292f387c21ca5fe209f9f7594874c32715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e02b660a7d35a0e2c3af5aa5613dac168d769409a4b0e3b412f5d950ef4ac75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02b660a7d35a0e2c3af5aa5613dac168d769409a4b0e3b412f5d950ef4ac75e->enter($__internal_e02b660a7d35a0e2c3af5aa5613dac168d769409a4b0e3b412f5d950ef4ac75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_fd7ff9faeb89a183d888746bba249281ad4ffbb725b2eb0eb7867df985cfa505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7ff9faeb89a183d888746bba249281ad4ffbb725b2eb0eb7867df985cfa505->enter($__internal_fd7ff9faeb89a183d888746bba249281ad4ffbb725b2eb0eb7867df985cfa505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e02b660a7d35a0e2c3af5aa5613dac168d769409a4b0e3b412f5d950ef4ac75e->leave($__internal_e02b660a7d35a0e2c3af5aa5613dac168d769409a4b0e3b412f5d950ef4ac75e_prof);

        
        $__internal_fd7ff9faeb89a183d888746bba249281ad4ffbb725b2eb0eb7867df985cfa505->leave($__internal_fd7ff9faeb89a183d888746bba249281ad4ffbb725b2eb0eb7867df985cfa505_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a08da396e07c513b277b9f1d8ca63aec4a5d3a94b9472376cc4d64d0d8198fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08da396e07c513b277b9f1d8ca63aec4a5d3a94b9472376cc4d64d0d8198fa6->enter($__internal_a08da396e07c513b277b9f1d8ca63aec4a5d3a94b9472376cc4d64d0d8198fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c202de9e29abd67fa89c4c1399e735bce38d120831ddbc43f5075a7e36ab9b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c202de9e29abd67fa89c4c1399e735bce38d120831ddbc43f5075a7e36ab9b4c->enter($__internal_c202de9e29abd67fa89c4c1399e735bce38d120831ddbc43f5075a7e36ab9b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_c202de9e29abd67fa89c4c1399e735bce38d120831ddbc43f5075a7e36ab9b4c->leave($__internal_c202de9e29abd67fa89c4c1399e735bce38d120831ddbc43f5075a7e36ab9b4c_prof);

        
        $__internal_a08da396e07c513b277b9f1d8ca63aec4a5d3a94b9472376cc4d64d0d8198fa6->leave($__internal_a08da396e07c513b277b9f1d8ca63aec4a5d3a94b9472376cc4d64d0d8198fa6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
