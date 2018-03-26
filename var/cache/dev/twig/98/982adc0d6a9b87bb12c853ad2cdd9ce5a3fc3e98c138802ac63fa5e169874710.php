<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_9e2549fa6f761d5d6fb1b80ac056fe2fd256c1ccdaac9a0d24bccb13080fefac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_0a62ee450ae673893606d2dc0c4f26cb435cff3d6448a98c04e994d66421cb74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a62ee450ae673893606d2dc0c4f26cb435cff3d6448a98c04e994d66421cb74->enter($__internal_0a62ee450ae673893606d2dc0c4f26cb435cff3d6448a98c04e994d66421cb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_dbbc2c19da859848bf45d9dd51257ba071da00c52fef3d165a75520107ca9211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbc2c19da859848bf45d9dd51257ba071da00c52fef3d165a75520107ca9211->enter($__internal_dbbc2c19da859848bf45d9dd51257ba071da00c52fef3d165a75520107ca9211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a62ee450ae673893606d2dc0c4f26cb435cff3d6448a98c04e994d66421cb74->leave($__internal_0a62ee450ae673893606d2dc0c4f26cb435cff3d6448a98c04e994d66421cb74_prof);

        
        $__internal_dbbc2c19da859848bf45d9dd51257ba071da00c52fef3d165a75520107ca9211->leave($__internal_dbbc2c19da859848bf45d9dd51257ba071da00c52fef3d165a75520107ca9211_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bef49ae59b1e6e96e72c8e5178ed79922831ad0982b54def95671ea981cb2966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef49ae59b1e6e96e72c8e5178ed79922831ad0982b54def95671ea981cb2966->enter($__internal_bef49ae59b1e6e96e72c8e5178ed79922831ad0982b54def95671ea981cb2966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9894c02ce158c20d613610cb8559e13ea79c762bf24be20d814bb686d3fb8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9894c02ce158c20d613610cb8559e13ea79c762bf24be20d814bb686d3fb8eb->enter($__internal_d9894c02ce158c20d613610cb8559e13ea79c762bf24be20d814bb686d3fb8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d9894c02ce158c20d613610cb8559e13ea79c762bf24be20d814bb686d3fb8eb->leave($__internal_d9894c02ce158c20d613610cb8559e13ea79c762bf24be20d814bb686d3fb8eb_prof);

        
        $__internal_bef49ae59b1e6e96e72c8e5178ed79922831ad0982b54def95671ea981cb2966->leave($__internal_bef49ae59b1e6e96e72c8e5178ed79922831ad0982b54def95671ea981cb2966_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
