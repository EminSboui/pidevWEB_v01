<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_bcc2518aea8cb9ab80d94fdf8c1fb361d7b01c3da59b314863ad98fc79d6f4b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fe33bd3002ffbb8177043272c6b389b68c793ac5bb956f61049b6d522ba98b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe33bd3002ffbb8177043272c6b389b68c793ac5bb956f61049b6d522ba98b7->enter($__internal_4fe33bd3002ffbb8177043272c6b389b68c793ac5bb956f61049b6d522ba98b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_df15342c63d459d0ab20b26ecde4ab536d01b4ba6581f61ee2dc3989b3bba028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df15342c63d459d0ab20b26ecde4ab536d01b4ba6581f61ee2dc3989b3bba028->enter($__internal_df15342c63d459d0ab20b26ecde4ab536d01b4ba6581f61ee2dc3989b3bba028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe33bd3002ffbb8177043272c6b389b68c793ac5bb956f61049b6d522ba98b7->leave($__internal_4fe33bd3002ffbb8177043272c6b389b68c793ac5bb956f61049b6d522ba98b7_prof);

        
        $__internal_df15342c63d459d0ab20b26ecde4ab536d01b4ba6581f61ee2dc3989b3bba028->leave($__internal_df15342c63d459d0ab20b26ecde4ab536d01b4ba6581f61ee2dc3989b3bba028_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_252708cc7a4f7c18d61a2d476eba252dcb10e0688a350b679c7d9edd1eceaa2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252708cc7a4f7c18d61a2d476eba252dcb10e0688a350b679c7d9edd1eceaa2f->enter($__internal_252708cc7a4f7c18d61a2d476eba252dcb10e0688a350b679c7d9edd1eceaa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8f4a74754e93767c09dbbb80488d5992129d9e12f1526932e4206cee0290032d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4a74754e93767c09dbbb80488d5992129d9e12f1526932e4206cee0290032d->enter($__internal_8f4a74754e93767c09dbbb80488d5992129d9e12f1526932e4206cee0290032d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_8f4a74754e93767c09dbbb80488d5992129d9e12f1526932e4206cee0290032d->leave($__internal_8f4a74754e93767c09dbbb80488d5992129d9e12f1526932e4206cee0290032d_prof);

        
        $__internal_252708cc7a4f7c18d61a2d476eba252dcb10e0688a350b679c7d9edd1eceaa2f->leave($__internal_252708cc7a4f7c18d61a2d476eba252dcb10e0688a350b679c7d9edd1eceaa2f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_43c3e41e4750dc2befa44f7b1f3160ca6b15ae59719826f341bd833e6cefdacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c3e41e4750dc2befa44f7b1f3160ca6b15ae59719826f341bd833e6cefdacd->enter($__internal_43c3e41e4750dc2befa44f7b1f3160ca6b15ae59719826f341bd833e6cefdacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8295b8dbadc3b88f8ee2ae10356b6d707c7551f27941d1aef7a4f3b7ca98b56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8295b8dbadc3b88f8ee2ae10356b6d707c7551f27941d1aef7a4f3b7ca98b56a->enter($__internal_8295b8dbadc3b88f8ee2ae10356b6d707c7551f27941d1aef7a4f3b7ca98b56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8295b8dbadc3b88f8ee2ae10356b6d707c7551f27941d1aef7a4f3b7ca98b56a->leave($__internal_8295b8dbadc3b88f8ee2ae10356b6d707c7551f27941d1aef7a4f3b7ca98b56a_prof);

        
        $__internal_43c3e41e4750dc2befa44f7b1f3160ca6b15ae59719826f341bd833e6cefdacd->leave($__internal_43c3e41e4750dc2befa44f7b1f3160ca6b15ae59719826f341bd833e6cefdacd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
