<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d3afc29d157b6d6dbdafe5bee47b4fc34fd39e214e43486a07b61d94362a0e09 extends Twig_Template
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
        $__internal_54ef5386845fe27fa278634ddc37faf50574866ece4f17aeee7e66db48b50409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ef5386845fe27fa278634ddc37faf50574866ece4f17aeee7e66db48b50409->enter($__internal_54ef5386845fe27fa278634ddc37faf50574866ece4f17aeee7e66db48b50409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_51c42081c7380ea81d932b36f880bd5e3592feccc8f9e323b2ed45589cad7f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c42081c7380ea81d932b36f880bd5e3592feccc8f9e323b2ed45589cad7f93->enter($__internal_51c42081c7380ea81d932b36f880bd5e3592feccc8f9e323b2ed45589cad7f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_54ef5386845fe27fa278634ddc37faf50574866ece4f17aeee7e66db48b50409->leave($__internal_54ef5386845fe27fa278634ddc37faf50574866ece4f17aeee7e66db48b50409_prof);

        
        $__internal_51c42081c7380ea81d932b36f880bd5e3592feccc8f9e323b2ed45589cad7f93->leave($__internal_51c42081c7380ea81d932b36f880bd5e3592feccc8f9e323b2ed45589cad7f93_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}