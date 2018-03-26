<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_73131677b958473c4a9a1fc4dba1d761a759e1098b7b9d9c5cef22c4bf8fd032 extends Twig_Template
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
        $__internal_099d72596579dab43f692073058dec5c7d4fbc4a862d61831ca0b79ab629dd12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099d72596579dab43f692073058dec5c7d4fbc4a862d61831ca0b79ab629dd12->enter($__internal_099d72596579dab43f692073058dec5c7d4fbc4a862d61831ca0b79ab629dd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_865204c40064cb44909caa72009634ff8fe0cad1457838010bdef3271daec9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865204c40064cb44909caa72009634ff8fe0cad1457838010bdef3271daec9ed->enter($__internal_865204c40064cb44909caa72009634ff8fe0cad1457838010bdef3271daec9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_099d72596579dab43f692073058dec5c7d4fbc4a862d61831ca0b79ab629dd12->leave($__internal_099d72596579dab43f692073058dec5c7d4fbc4a862d61831ca0b79ab629dd12_prof);

        
        $__internal_865204c40064cb44909caa72009634ff8fe0cad1457838010bdef3271daec9ed->leave($__internal_865204c40064cb44909caa72009634ff8fe0cad1457838010bdef3271daec9ed_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a2871909e2b2bbba539491ae65adf027b30133e1eefbc46b0f06cecce07d9a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2871909e2b2bbba539491ae65adf027b30133e1eefbc46b0f06cecce07d9a54->enter($__internal_a2871909e2b2bbba539491ae65adf027b30133e1eefbc46b0f06cecce07d9a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_95108f4bc6c4b74f9999ab5f6b4a1044eaa6f03eb5c0b569f09423eca22ecc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95108f4bc6c4b74f9999ab5f6b4a1044eaa6f03eb5c0b569f09423eca22ecc86->enter($__internal_95108f4bc6c4b74f9999ab5f6b4a1044eaa6f03eb5c0b569f09423eca22ecc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_95108f4bc6c4b74f9999ab5f6b4a1044eaa6f03eb5c0b569f09423eca22ecc86->leave($__internal_95108f4bc6c4b74f9999ab5f6b4a1044eaa6f03eb5c0b569f09423eca22ecc86_prof);

        
        $__internal_a2871909e2b2bbba539491ae65adf027b30133e1eefbc46b0f06cecce07d9a54->leave($__internal_a2871909e2b2bbba539491ae65adf027b30133e1eefbc46b0f06cecce07d9a54_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_729b0271b8a45fd0ea6888e036f4404ea28110109629ad1eca8542ee52a531c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729b0271b8a45fd0ea6888e036f4404ea28110109629ad1eca8542ee52a531c6->enter($__internal_729b0271b8a45fd0ea6888e036f4404ea28110109629ad1eca8542ee52a531c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_711851473ae060d8ec2585054ea22be2fb5cbf7bd8796986cc633bd11ef2e838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711851473ae060d8ec2585054ea22be2fb5cbf7bd8796986cc633bd11ef2e838->enter($__internal_711851473ae060d8ec2585054ea22be2fb5cbf7bd8796986cc633bd11ef2e838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_711851473ae060d8ec2585054ea22be2fb5cbf7bd8796986cc633bd11ef2e838->leave($__internal_711851473ae060d8ec2585054ea22be2fb5cbf7bd8796986cc633bd11ef2e838_prof);

        
        $__internal_729b0271b8a45fd0ea6888e036f4404ea28110109629ad1eca8542ee52a531c6->leave($__internal_729b0271b8a45fd0ea6888e036f4404ea28110109629ad1eca8542ee52a531c6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5d5926ec6f30386283872ddf3795946f1900b203496438f96dbbcac05567af3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5926ec6f30386283872ddf3795946f1900b203496438f96dbbcac05567af3a->enter($__internal_5d5926ec6f30386283872ddf3795946f1900b203496438f96dbbcac05567af3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0ec3daa788f977930b4a9fb00eaab09a7135eba211d1c09d86ec990e30682d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec3daa788f977930b4a9fb00eaab09a7135eba211d1c09d86ec990e30682d4b->enter($__internal_0ec3daa788f977930b4a9fb00eaab09a7135eba211d1c09d86ec990e30682d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0ec3daa788f977930b4a9fb00eaab09a7135eba211d1c09d86ec990e30682d4b->leave($__internal_0ec3daa788f977930b4a9fb00eaab09a7135eba211d1c09d86ec990e30682d4b_prof);

        
        $__internal_5d5926ec6f30386283872ddf3795946f1900b203496438f96dbbcac05567af3a->leave($__internal_5d5926ec6f30386283872ddf3795946f1900b203496438f96dbbcac05567af3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
