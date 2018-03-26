<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_3e9e60fb754f7b5f25fa38a0e960bfe28f66b249100da22b5d85d6117b494337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_416861b01f15241056f4d7d9d423104204b0f0544023ec5f691e3e61c36aeb50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416861b01f15241056f4d7d9d423104204b0f0544023ec5f691e3e61c36aeb50->enter($__internal_416861b01f15241056f4d7d9d423104204b0f0544023ec5f691e3e61c36aeb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_a316b43d5d82a46291be41bb92f8e600abcd701003545c7099a4c0de29a6a590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a316b43d5d82a46291be41bb92f8e600abcd701003545c7099a4c0de29a6a590->enter($__internal_a316b43d5d82a46291be41bb92f8e600abcd701003545c7099a4c0de29a6a590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_416861b01f15241056f4d7d9d423104204b0f0544023ec5f691e3e61c36aeb50->leave($__internal_416861b01f15241056f4d7d9d423104204b0f0544023ec5f691e3e61c36aeb50_prof);

        
        $__internal_a316b43d5d82a46291be41bb92f8e600abcd701003545c7099a4c0de29a6a590->leave($__internal_a316b43d5d82a46291be41bb92f8e600abcd701003545c7099a4c0de29a6a590_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e2b51688f9218ae0d46a1235f8689bd5d175fd5e8010559de41253abe3bfb1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2b51688f9218ae0d46a1235f8689bd5d175fd5e8010559de41253abe3bfb1a->enter($__internal_2e2b51688f9218ae0d46a1235f8689bd5d175fd5e8010559de41253abe3bfb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_90784a8040157a6c8f199f359d1c7631bbe79c3256012d162bda75df4d515a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90784a8040157a6c8f199f359d1c7631bbe79c3256012d162bda75df4d515a5f->enter($__internal_90784a8040157a6c8f199f359d1c7631bbe79c3256012d162bda75df4d515a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_90784a8040157a6c8f199f359d1c7631bbe79c3256012d162bda75df4d515a5f->leave($__internal_90784a8040157a6c8f199f359d1c7631bbe79c3256012d162bda75df4d515a5f_prof);

        
        $__internal_2e2b51688f9218ae0d46a1235f8689bd5d175fd5e8010559de41253abe3bfb1a->leave($__internal_2e2b51688f9218ae0d46a1235f8689bd5d175fd5e8010559de41253abe3bfb1a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
