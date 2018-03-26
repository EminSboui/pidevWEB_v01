<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_1fe37e7333fa2302574a681f9e5e027d2256d8d096a297ce8f660b3bf5fbc0d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34f1403975cd8b54562e1dc4652ae47ecc35df7c3d7b398e923dd740ba05346b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f1403975cd8b54562e1dc4652ae47ecc35df7c3d7b398e923dd740ba05346b->enter($__internal_34f1403975cd8b54562e1dc4652ae47ecc35df7c3d7b398e923dd740ba05346b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e50bd6db6ff8326c8342899ae3e0cb5a9bf3d6a2f097a8a5dcd6b358e8ea6388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50bd6db6ff8326c8342899ae3e0cb5a9bf3d6a2f097a8a5dcd6b358e8ea6388->enter($__internal_e50bd6db6ff8326c8342899ae3e0cb5a9bf3d6a2f097a8a5dcd6b358e8ea6388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34f1403975cd8b54562e1dc4652ae47ecc35df7c3d7b398e923dd740ba05346b->leave($__internal_34f1403975cd8b54562e1dc4652ae47ecc35df7c3d7b398e923dd740ba05346b_prof);

        
        $__internal_e50bd6db6ff8326c8342899ae3e0cb5a9bf3d6a2f097a8a5dcd6b358e8ea6388->leave($__internal_e50bd6db6ff8326c8342899ae3e0cb5a9bf3d6a2f097a8a5dcd6b358e8ea6388_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0020e1d092809202fbdfddee0bc44c12b04ef111f68abe58c123bf459a438831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0020e1d092809202fbdfddee0bc44c12b04ef111f68abe58c123bf459a438831->enter($__internal_0020e1d092809202fbdfddee0bc44c12b04ef111f68abe58c123bf459a438831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_205cd88fa242d344d77a2fa240f2ee3e677dc82b49e1fc7b158bdd65834eba57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205cd88fa242d344d77a2fa240f2ee3e677dc82b49e1fc7b158bdd65834eba57->enter($__internal_205cd88fa242d344d77a2fa240f2ee3e677dc82b49e1fc7b158bdd65834eba57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_205cd88fa242d344d77a2fa240f2ee3e677dc82b49e1fc7b158bdd65834eba57->leave($__internal_205cd88fa242d344d77a2fa240f2ee3e677dc82b49e1fc7b158bdd65834eba57_prof);

        
        $__internal_0020e1d092809202fbdfddee0bc44c12b04ef111f68abe58c123bf459a438831->leave($__internal_0020e1d092809202fbdfddee0bc44c12b04ef111f68abe58c123bf459a438831_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_549e0f2006ed0b20818d88a4f5f56f4605ebdbb998324dbe5990e87863e077a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549e0f2006ed0b20818d88a4f5f56f4605ebdbb998324dbe5990e87863e077a7->enter($__internal_549e0f2006ed0b20818d88a4f5f56f4605ebdbb998324dbe5990e87863e077a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8680afd2d6cafee4e62b2b10db81344d7cd0f604bda891778c139033918003c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8680afd2d6cafee4e62b2b10db81344d7cd0f604bda891778c139033918003c->enter($__internal_d8680afd2d6cafee4e62b2b10db81344d7cd0f604bda891778c139033918003c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d8680afd2d6cafee4e62b2b10db81344d7cd0f604bda891778c139033918003c->leave($__internal_d8680afd2d6cafee4e62b2b10db81344d7cd0f604bda891778c139033918003c_prof);

        
        $__internal_549e0f2006ed0b20818d88a4f5f56f4605ebdbb998324dbe5990e87863e077a7->leave($__internal_549e0f2006ed0b20818d88a4f5f56f4605ebdbb998324dbe5990e87863e077a7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
