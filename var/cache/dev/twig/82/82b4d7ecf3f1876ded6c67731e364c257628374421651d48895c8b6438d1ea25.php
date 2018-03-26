<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6dd5fde8c04f95064acde6414427ce19f673a4f093528a1d70952c8ae57addfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_196de8cf012f6abb0eef571934a527904ea0461c3d00ce3800b6242c92da249d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196de8cf012f6abb0eef571934a527904ea0461c3d00ce3800b6242c92da249d->enter($__internal_196de8cf012f6abb0eef571934a527904ea0461c3d00ce3800b6242c92da249d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_8328ae8c3559cc91ccfc80ac4da30d61fdc48a46f6a95a5762b0957b4a92a2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8328ae8c3559cc91ccfc80ac4da30d61fdc48a46f6a95a5762b0957b4a92a2c7->enter($__internal_8328ae8c3559cc91ccfc80ac4da30d61fdc48a46f6a95a5762b0957b4a92a2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_196de8cf012f6abb0eef571934a527904ea0461c3d00ce3800b6242c92da249d->leave($__internal_196de8cf012f6abb0eef571934a527904ea0461c3d00ce3800b6242c92da249d_prof);

        
        $__internal_8328ae8c3559cc91ccfc80ac4da30d61fdc48a46f6a95a5762b0957b4a92a2c7->leave($__internal_8328ae8c3559cc91ccfc80ac4da30d61fdc48a46f6a95a5762b0957b4a92a2c7_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_62fa684b7546ddaca59d77ceaeb369c197b4d53547856b1dd69744856df8562c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62fa684b7546ddaca59d77ceaeb369c197b4d53547856b1dd69744856df8562c->enter($__internal_62fa684b7546ddaca59d77ceaeb369c197b4d53547856b1dd69744856df8562c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_af20a7d7e17696bc7c9582abcb42aaa5894dcae7bf656b66aa3924c2f2ce79c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af20a7d7e17696bc7c9582abcb42aaa5894dcae7bf656b66aa3924c2f2ce79c1->enter($__internal_af20a7d7e17696bc7c9582abcb42aaa5894dcae7bf656b66aa3924c2f2ce79c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_af20a7d7e17696bc7c9582abcb42aaa5894dcae7bf656b66aa3924c2f2ce79c1->leave($__internal_af20a7d7e17696bc7c9582abcb42aaa5894dcae7bf656b66aa3924c2f2ce79c1_prof);

        
        $__internal_62fa684b7546ddaca59d77ceaeb369c197b4d53547856b1dd69744856df8562c->leave($__internal_62fa684b7546ddaca59d77ceaeb369c197b4d53547856b1dd69744856df8562c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7bc687d2934f92f2ecf20f8ccd5d19b9622f1718aa769dcc6b784ccfdf5b1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7bc687d2934f92f2ecf20f8ccd5d19b9622f1718aa769dcc6b784ccfdf5b1f7->enter($__internal_d7bc687d2934f92f2ecf20f8ccd5d19b9622f1718aa769dcc6b784ccfdf5b1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_36eab98af02b68ec5cbea3b8a82d40134f75da916ae3be1b0a62cfec0ffb0e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36eab98af02b68ec5cbea3b8a82d40134f75da916ae3be1b0a62cfec0ffb0e9f->enter($__internal_36eab98af02b68ec5cbea3b8a82d40134f75da916ae3be1b0a62cfec0ffb0e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_36eab98af02b68ec5cbea3b8a82d40134f75da916ae3be1b0a62cfec0ffb0e9f->leave($__internal_36eab98af02b68ec5cbea3b8a82d40134f75da916ae3be1b0a62cfec0ffb0e9f_prof);

        
        $__internal_d7bc687d2934f92f2ecf20f8ccd5d19b9622f1718aa769dcc6b784ccfdf5b1f7->leave($__internal_d7bc687d2934f92f2ecf20f8ccd5d19b9622f1718aa769dcc6b784ccfdf5b1f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
