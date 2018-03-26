<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_e305e74764a95fdebe096370f0e8a09be754001336d9654205d14fc3c8cf81af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_602089c8e679ae973f4dfc5335a767998c89f237e8e03ab04d506ffd5f9ebc1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602089c8e679ae973f4dfc5335a767998c89f237e8e03ab04d506ffd5f9ebc1c->enter($__internal_602089c8e679ae973f4dfc5335a767998c89f237e8e03ab04d506ffd5f9ebc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_9dbe6bd3b751903ef3b126350b4bd3fda8dd618f9910667561a25b7780240c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbe6bd3b751903ef3b126350b4bd3fda8dd618f9910667561a25b7780240c2a->enter($__internal_9dbe6bd3b751903ef3b126350b4bd3fda8dd618f9910667561a25b7780240c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_602089c8e679ae973f4dfc5335a767998c89f237e8e03ab04d506ffd5f9ebc1c->leave($__internal_602089c8e679ae973f4dfc5335a767998c89f237e8e03ab04d506ffd5f9ebc1c_prof);

        
        $__internal_9dbe6bd3b751903ef3b126350b4bd3fda8dd618f9910667561a25b7780240c2a->leave($__internal_9dbe6bd3b751903ef3b126350b4bd3fda8dd618f9910667561a25b7780240c2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b2c2a1930485fc64b087dc77e2367a519cc4f1f40f7830953c05b46817bd6515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c2a1930485fc64b087dc77e2367a519cc4f1f40f7830953c05b46817bd6515->enter($__internal_b2c2a1930485fc64b087dc77e2367a519cc4f1f40f7830953c05b46817bd6515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_14d42761b8c36d026abff0469e9648630e96e6b00a5366a2580698095a7023ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d42761b8c36d026abff0469e9648630e96e6b00a5366a2580698095a7023ee->enter($__internal_14d42761b8c36d026abff0469e9648630e96e6b00a5366a2580698095a7023ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_14d42761b8c36d026abff0469e9648630e96e6b00a5366a2580698095a7023ee->leave($__internal_14d42761b8c36d026abff0469e9648630e96e6b00a5366a2580698095a7023ee_prof);

        
        $__internal_b2c2a1930485fc64b087dc77e2367a519cc4f1f40f7830953c05b46817bd6515->leave($__internal_b2c2a1930485fc64b087dc77e2367a519cc4f1f40f7830953c05b46817bd6515_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
