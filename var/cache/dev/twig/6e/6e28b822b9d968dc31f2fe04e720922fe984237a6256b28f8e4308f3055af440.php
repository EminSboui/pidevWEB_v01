<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_5df10bae75a4d8f5b8e4cfdc98a4139ecc84ccd24eba53f497d7d3b3a6e97b0e extends Twig_Template
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
        $__internal_7cbdccfbcacde2d53d53ede947144c081ba65cb904a139433a926f886c5b5178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cbdccfbcacde2d53d53ede947144c081ba65cb904a139433a926f886c5b5178->enter($__internal_7cbdccfbcacde2d53d53ede947144c081ba65cb904a139433a926f886c5b5178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_c50b9281a6aca289bb75b2b659a672724cb0b2568c9c67107ff43f51cf31c51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50b9281a6aca289bb75b2b659a672724cb0b2568c9c67107ff43f51cf31c51c->enter($__internal_c50b9281a6aca289bb75b2b659a672724cb0b2568c9c67107ff43f51cf31c51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7cbdccfbcacde2d53d53ede947144c081ba65cb904a139433a926f886c5b5178->leave($__internal_7cbdccfbcacde2d53d53ede947144c081ba65cb904a139433a926f886c5b5178_prof);

        
        $__internal_c50b9281a6aca289bb75b2b659a672724cb0b2568c9c67107ff43f51cf31c51c->leave($__internal_c50b9281a6aca289bb75b2b659a672724cb0b2568c9c67107ff43f51cf31c51c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_63ca2e37954aa9916477a6856a3bc026df00dc00a4631b411d71f9ef10301cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ca2e37954aa9916477a6856a3bc026df00dc00a4631b411d71f9ef10301cc3->enter($__internal_63ca2e37954aa9916477a6856a3bc026df00dc00a4631b411d71f9ef10301cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_fbd29a5ed2018a381d833d85b52870991d03345c2dfd361d151dd5a5a4c5ac06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd29a5ed2018a381d833d85b52870991d03345c2dfd361d151dd5a5a4c5ac06->enter($__internal_fbd29a5ed2018a381d833d85b52870991d03345c2dfd361d151dd5a5a4c5ac06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_fbd29a5ed2018a381d833d85b52870991d03345c2dfd361d151dd5a5a4c5ac06->leave($__internal_fbd29a5ed2018a381d833d85b52870991d03345c2dfd361d151dd5a5a4c5ac06_prof);

        
        $__internal_63ca2e37954aa9916477a6856a3bc026df00dc00a4631b411d71f9ef10301cc3->leave($__internal_63ca2e37954aa9916477a6856a3bc026df00dc00a4631b411d71f9ef10301cc3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_94bbf2c979361aca859730a61aff066a41984af62e1c72e3cbff56a0bdac9950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bbf2c979361aca859730a61aff066a41984af62e1c72e3cbff56a0bdac9950->enter($__internal_94bbf2c979361aca859730a61aff066a41984af62e1c72e3cbff56a0bdac9950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ea8c72202c924e96b8a954fc1547f1f18633ef4fc17d1e16eed39c301ff9d54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8c72202c924e96b8a954fc1547f1f18633ef4fc17d1e16eed39c301ff9d54c->enter($__internal_ea8c72202c924e96b8a954fc1547f1f18633ef4fc17d1e16eed39c301ff9d54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ea8c72202c924e96b8a954fc1547f1f18633ef4fc17d1e16eed39c301ff9d54c->leave($__internal_ea8c72202c924e96b8a954fc1547f1f18633ef4fc17d1e16eed39c301ff9d54c_prof);

        
        $__internal_94bbf2c979361aca859730a61aff066a41984af62e1c72e3cbff56a0bdac9950->leave($__internal_94bbf2c979361aca859730a61aff066a41984af62e1c72e3cbff56a0bdac9950_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_382459c1cef2b5b6a722ecaea702733977310322f31ad94d01591f072acd7109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382459c1cef2b5b6a722ecaea702733977310322f31ad94d01591f072acd7109->enter($__internal_382459c1cef2b5b6a722ecaea702733977310322f31ad94d01591f072acd7109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3709fd99ce96246e8795467f0fec60f2281633bb4d026cf603bd0c5f50d68e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3709fd99ce96246e8795467f0fec60f2281633bb4d026cf603bd0c5f50d68e8f->enter($__internal_3709fd99ce96246e8795467f0fec60f2281633bb4d026cf603bd0c5f50d68e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3709fd99ce96246e8795467f0fec60f2281633bb4d026cf603bd0c5f50d68e8f->leave($__internal_3709fd99ce96246e8795467f0fec60f2281633bb4d026cf603bd0c5f50d68e8f_prof);

        
        $__internal_382459c1cef2b5b6a722ecaea702733977310322f31ad94d01591f072acd7109->leave($__internal_382459c1cef2b5b6a722ecaea702733977310322f31ad94d01591f072acd7109_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
