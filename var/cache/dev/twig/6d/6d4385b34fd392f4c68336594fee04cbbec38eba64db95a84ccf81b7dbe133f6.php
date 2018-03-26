<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_e50d063786b996eeb5e3a81fdd191126e20e3a1f4d4369c34d85c139fb13982e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_aa38ca6cd1207c792af7d4b784a6601288ffea636a68217e83bf879e10115863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa38ca6cd1207c792af7d4b784a6601288ffea636a68217e83bf879e10115863->enter($__internal_aa38ca6cd1207c792af7d4b784a6601288ffea636a68217e83bf879e10115863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_cbbb210b30989a380031439b31b78cc708350056e40dddab27b6c3197e1174ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbb210b30989a380031439b31b78cc708350056e40dddab27b6c3197e1174ee->enter($__internal_cbbb210b30989a380031439b31b78cc708350056e40dddab27b6c3197e1174ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa38ca6cd1207c792af7d4b784a6601288ffea636a68217e83bf879e10115863->leave($__internal_aa38ca6cd1207c792af7d4b784a6601288ffea636a68217e83bf879e10115863_prof);

        
        $__internal_cbbb210b30989a380031439b31b78cc708350056e40dddab27b6c3197e1174ee->leave($__internal_cbbb210b30989a380031439b31b78cc708350056e40dddab27b6c3197e1174ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc3758c03e377f61abb824037e6fd81e5116af66165359c10014fe81d3b85cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3758c03e377f61abb824037e6fd81e5116af66165359c10014fe81d3b85cf9->enter($__internal_bc3758c03e377f61abb824037e6fd81e5116af66165359c10014fe81d3b85cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_50e632fecf43b394ab76e1c3ef80a51eb848d7a40d777fe1140cece950e548fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e632fecf43b394ab76e1c3ef80a51eb848d7a40d777fe1140cece950e548fe->enter($__internal_50e632fecf43b394ab76e1c3ef80a51eb848d7a40d777fe1140cece950e548fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_50e632fecf43b394ab76e1c3ef80a51eb848d7a40d777fe1140cece950e548fe->leave($__internal_50e632fecf43b394ab76e1c3ef80a51eb848d7a40d777fe1140cece950e548fe_prof);

        
        $__internal_bc3758c03e377f61abb824037e6fd81e5116af66165359c10014fe81d3b85cf9->leave($__internal_bc3758c03e377f61abb824037e6fd81e5116af66165359c10014fe81d3b85cf9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
