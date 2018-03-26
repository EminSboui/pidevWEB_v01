<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e8f8063ac6bd260ef6c0a28aa3322274ca59c2982db7b9d4765d55e558ca1d60 extends Twig_Template
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
        $__internal_924179fa90faa2df5270c52215c5bc34a96713bffd63c2e1818b397efd485654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924179fa90faa2df5270c52215c5bc34a96713bffd63c2e1818b397efd485654->enter($__internal_924179fa90faa2df5270c52215c5bc34a96713bffd63c2e1818b397efd485654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_84972cc6d4788fd7979708b07a209aa6542dd2cec4c15d45855284d267bd6f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84972cc6d4788fd7979708b07a209aa6542dd2cec4c15d45855284d267bd6f79->enter($__internal_84972cc6d4788fd7979708b07a209aa6542dd2cec4c15d45855284d267bd6f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_924179fa90faa2df5270c52215c5bc34a96713bffd63c2e1818b397efd485654->leave($__internal_924179fa90faa2df5270c52215c5bc34a96713bffd63c2e1818b397efd485654_prof);

        
        $__internal_84972cc6d4788fd7979708b07a209aa6542dd2cec4c15d45855284d267bd6f79->leave($__internal_84972cc6d4788fd7979708b07a209aa6542dd2cec4c15d45855284d267bd6f79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
