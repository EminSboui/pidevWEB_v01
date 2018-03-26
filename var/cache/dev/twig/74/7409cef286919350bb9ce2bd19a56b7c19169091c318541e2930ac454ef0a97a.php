<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_83dde948bc44ddd84f9a8315a82dc1d0c2ae935fc5a0a052da887ea098dc05ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_a4dcca8fbaf3063ad1cbfe335e676dcd6a6ad8f07965b0c0faa6f2f48127409f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4dcca8fbaf3063ad1cbfe335e676dcd6a6ad8f07965b0c0faa6f2f48127409f->enter($__internal_a4dcca8fbaf3063ad1cbfe335e676dcd6a6ad8f07965b0c0faa6f2f48127409f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_d6ac2b046ee9f901fd6d13087cbb99a8efe8f493ab6a262fc2ce302d5258a417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ac2b046ee9f901fd6d13087cbb99a8efe8f493ab6a262fc2ce302d5258a417->enter($__internal_d6ac2b046ee9f901fd6d13087cbb99a8efe8f493ab6a262fc2ce302d5258a417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4dcca8fbaf3063ad1cbfe335e676dcd6a6ad8f07965b0c0faa6f2f48127409f->leave($__internal_a4dcca8fbaf3063ad1cbfe335e676dcd6a6ad8f07965b0c0faa6f2f48127409f_prof);

        
        $__internal_d6ac2b046ee9f901fd6d13087cbb99a8efe8f493ab6a262fc2ce302d5258a417->leave($__internal_d6ac2b046ee9f901fd6d13087cbb99a8efe8f493ab6a262fc2ce302d5258a417_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a5289bac279fe3f49bd126270911b33bc7e66429abb348ec3d8b1b68c965b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5289bac279fe3f49bd126270911b33bc7e66429abb348ec3d8b1b68c965b72->enter($__internal_8a5289bac279fe3f49bd126270911b33bc7e66429abb348ec3d8b1b68c965b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4fd8a89ff595929a545ebf3dc34bd1f19cc53abe85c9c3c2e364544a530b608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fd8a89ff595929a545ebf3dc34bd1f19cc53abe85c9c3c2e364544a530b608->enter($__internal_a4fd8a89ff595929a545ebf3dc34bd1f19cc53abe85c9c3c2e364544a530b608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_a4fd8a89ff595929a545ebf3dc34bd1f19cc53abe85c9c3c2e364544a530b608->leave($__internal_a4fd8a89ff595929a545ebf3dc34bd1f19cc53abe85c9c3c2e364544a530b608_prof);

        
        $__internal_8a5289bac279fe3f49bd126270911b33bc7e66429abb348ec3d8b1b68c965b72->leave($__internal_8a5289bac279fe3f49bd126270911b33bc7e66429abb348ec3d8b1b68c965b72_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
