<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_9c89f10cb6bf51da95570ca3bd60a41f7ad1521ff9b1c997966bb939d5b6447e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_283cb9b00f937db2ed3f283ddef763133b5a777ffd4b516e6542cc94ffa3cad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283cb9b00f937db2ed3f283ddef763133b5a777ffd4b516e6542cc94ffa3cad4->enter($__internal_283cb9b00f937db2ed3f283ddef763133b5a777ffd4b516e6542cc94ffa3cad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9620ee52de13f5d8768354d98dc1e065199bc210539619e42f5b991c46012bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9620ee52de13f5d8768354d98dc1e065199bc210539619e42f5b991c46012bb4->enter($__internal_9620ee52de13f5d8768354d98dc1e065199bc210539619e42f5b991c46012bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_283cb9b00f937db2ed3f283ddef763133b5a777ffd4b516e6542cc94ffa3cad4->leave($__internal_283cb9b00f937db2ed3f283ddef763133b5a777ffd4b516e6542cc94ffa3cad4_prof);

        
        $__internal_9620ee52de13f5d8768354d98dc1e065199bc210539619e42f5b991c46012bb4->leave($__internal_9620ee52de13f5d8768354d98dc1e065199bc210539619e42f5b991c46012bb4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c2584ee4c359b7c11cd39cbb8fcea63a719bad3ca5d3ca2d17c23911702583f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2584ee4c359b7c11cd39cbb8fcea63a719bad3ca5d3ca2d17c23911702583f->enter($__internal_5c2584ee4c359b7c11cd39cbb8fcea63a719bad3ca5d3ca2d17c23911702583f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e2736e6d1a1063b512599543672018421da0a417d4647cbc8347e6875ab333fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2736e6d1a1063b512599543672018421da0a417d4647cbc8347e6875ab333fd->enter($__internal_e2736e6d1a1063b512599543672018421da0a417d4647cbc8347e6875ab333fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e2736e6d1a1063b512599543672018421da0a417d4647cbc8347e6875ab333fd->leave($__internal_e2736e6d1a1063b512599543672018421da0a417d4647cbc8347e6875ab333fd_prof);

        
        $__internal_5c2584ee4c359b7c11cd39cbb8fcea63a719bad3ca5d3ca2d17c23911702583f->leave($__internal_5c2584ee4c359b7c11cd39cbb8fcea63a719bad3ca5d3ca2d17c23911702583f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
