<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_dd6ebd89034d1c3f86f53ca3e7659773a9bfc1a75b1f34a8cd1ce4ab9635447f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_5c8c236463dadf5ed5090bea12d46418d4cfe9a73d52c2897e189212f4aa79e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c8c236463dadf5ed5090bea12d46418d4cfe9a73d52c2897e189212f4aa79e5->enter($__internal_5c8c236463dadf5ed5090bea12d46418d4cfe9a73d52c2897e189212f4aa79e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_5197c744b3df6b4df99b4536a5f2cd620c6ef5447e2e0538e434f2bccb9f03f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5197c744b3df6b4df99b4536a5f2cd620c6ef5447e2e0538e434f2bccb9f03f2->enter($__internal_5197c744b3df6b4df99b4536a5f2cd620c6ef5447e2e0538e434f2bccb9f03f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c8c236463dadf5ed5090bea12d46418d4cfe9a73d52c2897e189212f4aa79e5->leave($__internal_5c8c236463dadf5ed5090bea12d46418d4cfe9a73d52c2897e189212f4aa79e5_prof);

        
        $__internal_5197c744b3df6b4df99b4536a5f2cd620c6ef5447e2e0538e434f2bccb9f03f2->leave($__internal_5197c744b3df6b4df99b4536a5f2cd620c6ef5447e2e0538e434f2bccb9f03f2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f70ce7f39864854d1857d4787d6fac7064ba21e2a0397394b3fb26bd1de7de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f70ce7f39864854d1857d4787d6fac7064ba21e2a0397394b3fb26bd1de7de2->enter($__internal_4f70ce7f39864854d1857d4787d6fac7064ba21e2a0397394b3fb26bd1de7de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21f874ba7a30234b4d0de56460d50b3b277570e40e80afb9ae41e576f225d9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f874ba7a30234b4d0de56460d50b3b277570e40e80afb9ae41e576f225d9cb->enter($__internal_21f874ba7a30234b4d0de56460d50b3b277570e40e80afb9ae41e576f225d9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_21f874ba7a30234b4d0de56460d50b3b277570e40e80afb9ae41e576f225d9cb->leave($__internal_21f874ba7a30234b4d0de56460d50b3b277570e40e80afb9ae41e576f225d9cb_prof);

        
        $__internal_4f70ce7f39864854d1857d4787d6fac7064ba21e2a0397394b3fb26bd1de7de2->leave($__internal_4f70ce7f39864854d1857d4787d6fac7064ba21e2a0397394b3fb26bd1de7de2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
