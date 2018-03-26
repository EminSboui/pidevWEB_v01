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
        $__internal_1b7d892eb952e6246b74e5329642168f7621aaa06c35af5a73fafd5a3ce05e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7d892eb952e6246b74e5329642168f7621aaa06c35af5a73fafd5a3ce05e09->enter($__internal_1b7d892eb952e6246b74e5329642168f7621aaa06c35af5a73fafd5a3ce05e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_3b5cdfb382ff48a9cab278a7eb613e298683afebb6e2fbbdf7f489fc96d1336d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5cdfb382ff48a9cab278a7eb613e298683afebb6e2fbbdf7f489fc96d1336d->enter($__internal_3b5cdfb382ff48a9cab278a7eb613e298683afebb6e2fbbdf7f489fc96d1336d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b7d892eb952e6246b74e5329642168f7621aaa06c35af5a73fafd5a3ce05e09->leave($__internal_1b7d892eb952e6246b74e5329642168f7621aaa06c35af5a73fafd5a3ce05e09_prof);

        
        $__internal_3b5cdfb382ff48a9cab278a7eb613e298683afebb6e2fbbdf7f489fc96d1336d->leave($__internal_3b5cdfb382ff48a9cab278a7eb613e298683afebb6e2fbbdf7f489fc96d1336d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5477c15faef409c9e89198ecf2fef2f73fbffbfff080bfefd9cad7e03a9e129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5477c15faef409c9e89198ecf2fef2f73fbffbfff080bfefd9cad7e03a9e129->enter($__internal_a5477c15faef409c9e89198ecf2fef2f73fbffbfff080bfefd9cad7e03a9e129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ba162f6b0b53d69f5767752342127c889ba876909f63f6f5a7853ecd940f8772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba162f6b0b53d69f5767752342127c889ba876909f63f6f5a7853ecd940f8772->enter($__internal_ba162f6b0b53d69f5767752342127c889ba876909f63f6f5a7853ecd940f8772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ba162f6b0b53d69f5767752342127c889ba876909f63f6f5a7853ecd940f8772->leave($__internal_ba162f6b0b53d69f5767752342127c889ba876909f63f6f5a7853ecd940f8772_prof);

        
        $__internal_a5477c15faef409c9e89198ecf2fef2f73fbffbfff080bfefd9cad7e03a9e129->leave($__internal_a5477c15faef409c9e89198ecf2fef2f73fbffbfff080bfefd9cad7e03a9e129_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
