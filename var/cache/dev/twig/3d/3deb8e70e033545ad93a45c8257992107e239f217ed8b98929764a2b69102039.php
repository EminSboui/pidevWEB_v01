<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_2852fcf81bace44c957ad3e7aadf5128cfc009fe63a668e56219d62ef8a58a7e extends Twig_Template
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
        $__internal_295b8932c1bfb5d98cab09d030369d7c666646a789a97f95a1f2ed7f645d3868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295b8932c1bfb5d98cab09d030369d7c666646a789a97f95a1f2ed7f645d3868->enter($__internal_295b8932c1bfb5d98cab09d030369d7c666646a789a97f95a1f2ed7f645d3868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_8dbd5b89396ebaf35fa4da81f6f28618d0384bd6f58debaed014e1d4ccff3306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbd5b89396ebaf35fa4da81f6f28618d0384bd6f58debaed014e1d4ccff3306->enter($__internal_8dbd5b89396ebaf35fa4da81f6f28618d0384bd6f58debaed014e1d4ccff3306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_295b8932c1bfb5d98cab09d030369d7c666646a789a97f95a1f2ed7f645d3868->leave($__internal_295b8932c1bfb5d98cab09d030369d7c666646a789a97f95a1f2ed7f645d3868_prof);

        
        $__internal_8dbd5b89396ebaf35fa4da81f6f28618d0384bd6f58debaed014e1d4ccff3306->leave($__internal_8dbd5b89396ebaf35fa4da81f6f28618d0384bd6f58debaed014e1d4ccff3306_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d0d91d31bba87c4f984e708e6c648942c97c42a83464e16f7d9224b8705e09a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d91d31bba87c4f984e708e6c648942c97c42a83464e16f7d9224b8705e09a4->enter($__internal_d0d91d31bba87c4f984e708e6c648942c97c42a83464e16f7d9224b8705e09a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_6a4b68889d0ea57422ec49fda58e4816f12f1d78c6d19a5fe191d65a37316074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4b68889d0ea57422ec49fda58e4816f12f1d78c6d19a5fe191d65a37316074->enter($__internal_6a4b68889d0ea57422ec49fda58e4816f12f1d78c6d19a5fe191d65a37316074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_6a4b68889d0ea57422ec49fda58e4816f12f1d78c6d19a5fe191d65a37316074->leave($__internal_6a4b68889d0ea57422ec49fda58e4816f12f1d78c6d19a5fe191d65a37316074_prof);

        
        $__internal_d0d91d31bba87c4f984e708e6c648942c97c42a83464e16f7d9224b8705e09a4->leave($__internal_d0d91d31bba87c4f984e708e6c648942c97c42a83464e16f7d9224b8705e09a4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5ec14a75313bf7c64f80fe3f762954576cc38607fd5ead4ad787217f99adc3a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec14a75313bf7c64f80fe3f762954576cc38607fd5ead4ad787217f99adc3a2->enter($__internal_5ec14a75313bf7c64f80fe3f762954576cc38607fd5ead4ad787217f99adc3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c5c6ba9b39f1fad15cff2db019df3b1d231c070917163bd99b687d2e81728265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c6ba9b39f1fad15cff2db019df3b1d231c070917163bd99b687d2e81728265->enter($__internal_c5c6ba9b39f1fad15cff2db019df3b1d231c070917163bd99b687d2e81728265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c5c6ba9b39f1fad15cff2db019df3b1d231c070917163bd99b687d2e81728265->leave($__internal_c5c6ba9b39f1fad15cff2db019df3b1d231c070917163bd99b687d2e81728265_prof);

        
        $__internal_5ec14a75313bf7c64f80fe3f762954576cc38607fd5ead4ad787217f99adc3a2->leave($__internal_5ec14a75313bf7c64f80fe3f762954576cc38607fd5ead4ad787217f99adc3a2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_05d3095c268330bba8885e6e733ef44ef0050dad24dc60b2aee21e297fa62a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d3095c268330bba8885e6e733ef44ef0050dad24dc60b2aee21e297fa62a7a->enter($__internal_05d3095c268330bba8885e6e733ef44ef0050dad24dc60b2aee21e297fa62a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f1fcf0e7ddfbaa260944d07be2732c5579efd797a87ff3bb270c7c7e14804280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fcf0e7ddfbaa260944d07be2732c5579efd797a87ff3bb270c7c7e14804280->enter($__internal_f1fcf0e7ddfbaa260944d07be2732c5579efd797a87ff3bb270c7c7e14804280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f1fcf0e7ddfbaa260944d07be2732c5579efd797a87ff3bb270c7c7e14804280->leave($__internal_f1fcf0e7ddfbaa260944d07be2732c5579efd797a87ff3bb270c7c7e14804280_prof);

        
        $__internal_05d3095c268330bba8885e6e733ef44ef0050dad24dc60b2aee21e297fa62a7a->leave($__internal_05d3095c268330bba8885e6e733ef44ef0050dad24dc60b2aee21e297fa62a7a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
