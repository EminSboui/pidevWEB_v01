<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_aa4138cc0284e49baf2724a009ba8610ae6b75591093ba70d7adee077df64ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_77f73d23277bce62f7efe3d945e82a51a8574b98fee9cd3a0f5b0c39bb15139e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f73d23277bce62f7efe3d945e82a51a8574b98fee9cd3a0f5b0c39bb15139e->enter($__internal_77f73d23277bce62f7efe3d945e82a51a8574b98fee9cd3a0f5b0c39bb15139e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_d2b5fed050b4defbc4c7273b49c512335a56158d2aaa29b32836ffe8ec7f4db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b5fed050b4defbc4c7273b49c512335a56158d2aaa29b32836ffe8ec7f4db1->enter($__internal_d2b5fed050b4defbc4c7273b49c512335a56158d2aaa29b32836ffe8ec7f4db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77f73d23277bce62f7efe3d945e82a51a8574b98fee9cd3a0f5b0c39bb15139e->leave($__internal_77f73d23277bce62f7efe3d945e82a51a8574b98fee9cd3a0f5b0c39bb15139e_prof);

        
        $__internal_d2b5fed050b4defbc4c7273b49c512335a56158d2aaa29b32836ffe8ec7f4db1->leave($__internal_d2b5fed050b4defbc4c7273b49c512335a56158d2aaa29b32836ffe8ec7f4db1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3895e7e0a303d32adc913f881c82246480c8baad7de5817493bb70824f2de520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3895e7e0a303d32adc913f881c82246480c8baad7de5817493bb70824f2de520->enter($__internal_3895e7e0a303d32adc913f881c82246480c8baad7de5817493bb70824f2de520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c56fd2af67eb5d828dc3d8d9c809a61ea24b36c9131c20f1906f977570a4d2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56fd2af67eb5d828dc3d8d9c809a61ea24b36c9131c20f1906f977570a4d2bd->enter($__internal_c56fd2af67eb5d828dc3d8d9c809a61ea24b36c9131c20f1906f977570a4d2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c56fd2af67eb5d828dc3d8d9c809a61ea24b36c9131c20f1906f977570a4d2bd->leave($__internal_c56fd2af67eb5d828dc3d8d9c809a61ea24b36c9131c20f1906f977570a4d2bd_prof);

        
        $__internal_3895e7e0a303d32adc913f881c82246480c8baad7de5817493bb70824f2de520->leave($__internal_3895e7e0a303d32adc913f881c82246480c8baad7de5817493bb70824f2de520_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
