<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_07620a6e2f468ccb7d65774c0025d4848029e379e68da8cde83bd90ab25b4fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a113750208b2ad8d8b50b40805d5aec210a56f74abcb8f461ea8a15390f608b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a113750208b2ad8d8b50b40805d5aec210a56f74abcb8f461ea8a15390f608b->enter($__internal_2a113750208b2ad8d8b50b40805d5aec210a56f74abcb8f461ea8a15390f608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_1f391907838ceead368c035c24030485f3aaaf5ed2932673fc8ff686ecf26d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f391907838ceead368c035c24030485f3aaaf5ed2932673fc8ff686ecf26d3f->enter($__internal_1f391907838ceead368c035c24030485f3aaaf5ed2932673fc8ff686ecf26d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2a113750208b2ad8d8b50b40805d5aec210a56f74abcb8f461ea8a15390f608b->leave($__internal_2a113750208b2ad8d8b50b40805d5aec210a56f74abcb8f461ea8a15390f608b_prof);

        
        $__internal_1f391907838ceead368c035c24030485f3aaaf5ed2932673fc8ff686ecf26d3f->leave($__internal_1f391907838ceead368c035c24030485f3aaaf5ed2932673fc8ff686ecf26d3f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
