<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_14bae57fee0168dc272b2f329aa2f8e855fe6bf589515a40894d1d5500cea9df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_0ade7f5f5d37196d88397d0fdce73d0d63bab114271a70c3b019328d1a2b533e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ade7f5f5d37196d88397d0fdce73d0d63bab114271a70c3b019328d1a2b533e->enter($__internal_0ade7f5f5d37196d88397d0fdce73d0d63bab114271a70c3b019328d1a2b533e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_507fcb15246e8f6de38d3ba45e54d0e5265391b8caffb9053254abf3ae840093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507fcb15246e8f6de38d3ba45e54d0e5265391b8caffb9053254abf3ae840093->enter($__internal_507fcb15246e8f6de38d3ba45e54d0e5265391b8caffb9053254abf3ae840093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ade7f5f5d37196d88397d0fdce73d0d63bab114271a70c3b019328d1a2b533e->leave($__internal_0ade7f5f5d37196d88397d0fdce73d0d63bab114271a70c3b019328d1a2b533e_prof);

        
        $__internal_507fcb15246e8f6de38d3ba45e54d0e5265391b8caffb9053254abf3ae840093->leave($__internal_507fcb15246e8f6de38d3ba45e54d0e5265391b8caffb9053254abf3ae840093_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f61d387e63f937e2d4be97c088f982eade40c931bfc2652a7106f040b3b25d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f61d387e63f937e2d4be97c088f982eade40c931bfc2652a7106f040b3b25d0->enter($__internal_1f61d387e63f937e2d4be97c088f982eade40c931bfc2652a7106f040b3b25d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f641eeed83680a28f29c129c6de7b985f1ea6b35ddc823cb2be4903c09e517f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f641eeed83680a28f29c129c6de7b985f1ea6b35ddc823cb2be4903c09e517f1->enter($__internal_f641eeed83680a28f29c129c6de7b985f1ea6b35ddc823cb2be4903c09e517f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f641eeed83680a28f29c129c6de7b985f1ea6b35ddc823cb2be4903c09e517f1->leave($__internal_f641eeed83680a28f29c129c6de7b985f1ea6b35ddc823cb2be4903c09e517f1_prof);

        
        $__internal_1f61d387e63f937e2d4be97c088f982eade40c931bfc2652a7106f040b3b25d0->leave($__internal_1f61d387e63f937e2d4be97c088f982eade40c931bfc2652a7106f040b3b25d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
