<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2e96a93e991558dc3fcbf556d9edfa5a693f0cc9ba3527f85daaaf2f90661ba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b8dbccf4485047a763b439a8639e1709020961b4b2bda2a726bceb4c27c58ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8dbccf4485047a763b439a8639e1709020961b4b2bda2a726bceb4c27c58ef->enter($__internal_9b8dbccf4485047a763b439a8639e1709020961b4b2bda2a726bceb4c27c58ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_196347555c0d30128b290f4d3ec1a56f5899049ec86802fa60ae7be712a3a754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196347555c0d30128b290f4d3ec1a56f5899049ec86802fa60ae7be712a3a754->enter($__internal_196347555c0d30128b290f4d3ec1a56f5899049ec86802fa60ae7be712a3a754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9b8dbccf4485047a763b439a8639e1709020961b4b2bda2a726bceb4c27c58ef->leave($__internal_9b8dbccf4485047a763b439a8639e1709020961b4b2bda2a726bceb4c27c58ef_prof);

        
        $__internal_196347555c0d30128b290f4d3ec1a56f5899049ec86802fa60ae7be712a3a754->leave($__internal_196347555c0d30128b290f4d3ec1a56f5899049ec86802fa60ae7be712a3a754_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0191263900a7eeedb24e0a584b32bf2177ec894446357d4991c6a67282befa7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0191263900a7eeedb24e0a584b32bf2177ec894446357d4991c6a67282befa7a->enter($__internal_0191263900a7eeedb24e0a584b32bf2177ec894446357d4991c6a67282befa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b4178a34b09a94ba2dbcfc8d04e0d78daae8f11ac22e37738d7977262652e59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4178a34b09a94ba2dbcfc8d04e0d78daae8f11ac22e37738d7977262652e59d->enter($__internal_b4178a34b09a94ba2dbcfc8d04e0d78daae8f11ac22e37738d7977262652e59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_b4178a34b09a94ba2dbcfc8d04e0d78daae8f11ac22e37738d7977262652e59d->leave($__internal_b4178a34b09a94ba2dbcfc8d04e0d78daae8f11ac22e37738d7977262652e59d_prof);

        
        $__internal_0191263900a7eeedb24e0a584b32bf2177ec894446357d4991c6a67282befa7a->leave($__internal_0191263900a7eeedb24e0a584b32bf2177ec894446357d4991c6a67282befa7a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b91dce3cbf228a6ced4e68eb061f953be6547ea6a7bf8c768dee5d8f9900566f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91dce3cbf228a6ced4e68eb061f953be6547ea6a7bf8c768dee5d8f9900566f->enter($__internal_b91dce3cbf228a6ced4e68eb061f953be6547ea6a7bf8c768dee5d8f9900566f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ac3a05dc71c604c4370a1831ac2fa3b1c869d03d2a3531b98d2e247d54708bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3a05dc71c604c4370a1831ac2fa3b1c869d03d2a3531b98d2e247d54708bab->enter($__internal_ac3a05dc71c604c4370a1831ac2fa3b1c869d03d2a3531b98d2e247d54708bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ac3a05dc71c604c4370a1831ac2fa3b1c869d03d2a3531b98d2e247d54708bab->leave($__internal_ac3a05dc71c604c4370a1831ac2fa3b1c869d03d2a3531b98d2e247d54708bab_prof);

        
        $__internal_b91dce3cbf228a6ced4e68eb061f953be6547ea6a7bf8c768dee5d8f9900566f->leave($__internal_b91dce3cbf228a6ced4e68eb061f953be6547ea6a7bf8c768dee5d8f9900566f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c354bd0d9b43ad90895b317c20bfad77154d739f5d8d00aabfeda8c5043dbdde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c354bd0d9b43ad90895b317c20bfad77154d739f5d8d00aabfeda8c5043dbdde->enter($__internal_c354bd0d9b43ad90895b317c20bfad77154d739f5d8d00aabfeda8c5043dbdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e74fe5f31f19d4ad085c4de9a7fc188cb043d2818c4078df825d1b86da8ac1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74fe5f31f19d4ad085c4de9a7fc188cb043d2818c4078df825d1b86da8ac1b3->enter($__internal_e74fe5f31f19d4ad085c4de9a7fc188cb043d2818c4078df825d1b86da8ac1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e74fe5f31f19d4ad085c4de9a7fc188cb043d2818c4078df825d1b86da8ac1b3->leave($__internal_e74fe5f31f19d4ad085c4de9a7fc188cb043d2818c4078df825d1b86da8ac1b3_prof);

        
        $__internal_c354bd0d9b43ad90895b317c20bfad77154d739f5d8d00aabfeda8c5043dbdde->leave($__internal_c354bd0d9b43ad90895b317c20bfad77154d739f5d8d00aabfeda8c5043dbdde_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
