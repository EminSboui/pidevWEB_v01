<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ec8e3b4337260dd07fba98884e41cbda3df81b9db5dd5d42afe5a6548a9f2a25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e610f6991e0ad2226cd44b37a5dc87c4ee34cb328332c30b6d1971aac504d9fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e610f6991e0ad2226cd44b37a5dc87c4ee34cb328332c30b6d1971aac504d9fd->enter($__internal_e610f6991e0ad2226cd44b37a5dc87c4ee34cb328332c30b6d1971aac504d9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_67cde272ed3e8c299533fd1b88c2e297684d327a1bcf7c8026201ca6b79029a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cde272ed3e8c299533fd1b88c2e297684d327a1bcf7c8026201ca6b79029a7->enter($__internal_67cde272ed3e8c299533fd1b88c2e297684d327a1bcf7c8026201ca6b79029a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e610f6991e0ad2226cd44b37a5dc87c4ee34cb328332c30b6d1971aac504d9fd->leave($__internal_e610f6991e0ad2226cd44b37a5dc87c4ee34cb328332c30b6d1971aac504d9fd_prof);

        
        $__internal_67cde272ed3e8c299533fd1b88c2e297684d327a1bcf7c8026201ca6b79029a7->leave($__internal_67cde272ed3e8c299533fd1b88c2e297684d327a1bcf7c8026201ca6b79029a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e47d60336b4c5ed851249999a37a1a129756a14439f09e3eaa5ac2ca5a108df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e47d60336b4c5ed851249999a37a1a129756a14439f09e3eaa5ac2ca5a108df->enter($__internal_4e47d60336b4c5ed851249999a37a1a129756a14439f09e3eaa5ac2ca5a108df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_281ac8bb7c80622055996578cb7a212e615410504e9c90906d6b3fe3eceb977d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281ac8bb7c80622055996578cb7a212e615410504e9c90906d6b3fe3eceb977d->enter($__internal_281ac8bb7c80622055996578cb7a212e615410504e9c90906d6b3fe3eceb977d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_281ac8bb7c80622055996578cb7a212e615410504e9c90906d6b3fe3eceb977d->leave($__internal_281ac8bb7c80622055996578cb7a212e615410504e9c90906d6b3fe3eceb977d_prof);

        
        $__internal_4e47d60336b4c5ed851249999a37a1a129756a14439f09e3eaa5ac2ca5a108df->leave($__internal_4e47d60336b4c5ed851249999a37a1a129756a14439f09e3eaa5ac2ca5a108df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
