<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_4c0ea9e65a545ba4ec24350eec1dc9d0dff6ad6f65c75d061de07391cb72e82a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_15acf389b68cbed15c61a6e927496befa7717229012e77f9fe4f9039ac26b937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15acf389b68cbed15c61a6e927496befa7717229012e77f9fe4f9039ac26b937->enter($__internal_15acf389b68cbed15c61a6e927496befa7717229012e77f9fe4f9039ac26b937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_04a7e012e91b9fa9553a4e6230547ebe222031f3cf22636d358838e40eaf60cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a7e012e91b9fa9553a4e6230547ebe222031f3cf22636d358838e40eaf60cf->enter($__internal_04a7e012e91b9fa9553a4e6230547ebe222031f3cf22636d358838e40eaf60cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15acf389b68cbed15c61a6e927496befa7717229012e77f9fe4f9039ac26b937->leave($__internal_15acf389b68cbed15c61a6e927496befa7717229012e77f9fe4f9039ac26b937_prof);

        
        $__internal_04a7e012e91b9fa9553a4e6230547ebe222031f3cf22636d358838e40eaf60cf->leave($__internal_04a7e012e91b9fa9553a4e6230547ebe222031f3cf22636d358838e40eaf60cf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86cc18dae2c2c0f99e5fa1eb54b0d71932cfab6fb1a2377d45f6bf195865f599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86cc18dae2c2c0f99e5fa1eb54b0d71932cfab6fb1a2377d45f6bf195865f599->enter($__internal_86cc18dae2c2c0f99e5fa1eb54b0d71932cfab6fb1a2377d45f6bf195865f599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e162d8cd661102d49aeb995df29eb5ff1b47203fb137b40e3b082cd4ef5d9514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e162d8cd661102d49aeb995df29eb5ff1b47203fb137b40e3b082cd4ef5d9514->enter($__internal_e162d8cd661102d49aeb995df29eb5ff1b47203fb137b40e3b082cd4ef5d9514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e162d8cd661102d49aeb995df29eb5ff1b47203fb137b40e3b082cd4ef5d9514->leave($__internal_e162d8cd661102d49aeb995df29eb5ff1b47203fb137b40e3b082cd4ef5d9514_prof);

        
        $__internal_86cc18dae2c2c0f99e5fa1eb54b0d71932cfab6fb1a2377d45f6bf195865f599->leave($__internal_86cc18dae2c2c0f99e5fa1eb54b0d71932cfab6fb1a2377d45f6bf195865f599_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\pidevWEB_v1.0\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
