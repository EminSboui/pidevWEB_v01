<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e6107c594a189d6b8ada6562ec3c829755c8935da09fd9105103934cacac9bca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_88d0dcf8e777d3bdd12fd363393757c9c91369e7145a97b263fda5fb09b1653e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d0dcf8e777d3bdd12fd363393757c9c91369e7145a97b263fda5fb09b1653e->enter($__internal_88d0dcf8e777d3bdd12fd363393757c9c91369e7145a97b263fda5fb09b1653e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_dbfebefb68da7eb5579cad966dc4b04a9d7d994c1c760d70547e69e1a0ecef0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfebefb68da7eb5579cad966dc4b04a9d7d994c1c760d70547e69e1a0ecef0b->enter($__internal_dbfebefb68da7eb5579cad966dc4b04a9d7d994c1c760d70547e69e1a0ecef0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88d0dcf8e777d3bdd12fd363393757c9c91369e7145a97b263fda5fb09b1653e->leave($__internal_88d0dcf8e777d3bdd12fd363393757c9c91369e7145a97b263fda5fb09b1653e_prof);

        
        $__internal_dbfebefb68da7eb5579cad966dc4b04a9d7d994c1c760d70547e69e1a0ecef0b->leave($__internal_dbfebefb68da7eb5579cad966dc4b04a9d7d994c1c760d70547e69e1a0ecef0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_772021e05109eb292dfa976b8312453afb572cc2a41bba2ed8e6f26305dd7af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772021e05109eb292dfa976b8312453afb572cc2a41bba2ed8e6f26305dd7af2->enter($__internal_772021e05109eb292dfa976b8312453afb572cc2a41bba2ed8e6f26305dd7af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2e6a818d1ec6396f15e5f55eefa64c6d8c47a306ca9c07c1a00c700fcf10ed4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6a818d1ec6396f15e5f55eefa64c6d8c47a306ca9c07c1a00c700fcf10ed4c->enter($__internal_2e6a818d1ec6396f15e5f55eefa64c6d8c47a306ca9c07c1a00c700fcf10ed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2e6a818d1ec6396f15e5f55eefa64c6d8c47a306ca9c07c1a00c700fcf10ed4c->leave($__internal_2e6a818d1ec6396f15e5f55eefa64c6d8c47a306ca9c07c1a00c700fcf10ed4c_prof);

        
        $__internal_772021e05109eb292dfa976b8312453afb572cc2a41bba2ed8e6f26305dd7af2->leave($__internal_772021e05109eb292dfa976b8312453afb572cc2a41bba2ed8e6f26305dd7af2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
