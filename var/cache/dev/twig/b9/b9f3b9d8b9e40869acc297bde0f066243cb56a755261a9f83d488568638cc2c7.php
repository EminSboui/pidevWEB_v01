<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e3ed5c2c098b8ccca625018a53a10d9f2c1936203c88ea0aa75a8bde50dbc910 extends Twig_Template
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
        $__internal_152bc8a0a47ec982126e90695248d2f4efff5fe64c232a286b70c8a095479efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152bc8a0a47ec982126e90695248d2f4efff5fe64c232a286b70c8a095479efe->enter($__internal_152bc8a0a47ec982126e90695248d2f4efff5fe64c232a286b70c8a095479efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_e7ccdd6995a83b9fa070702b79e66a536d38e4162f501b13b6586187c79755ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ccdd6995a83b9fa070702b79e66a536d38e4162f501b13b6586187c79755ac->enter($__internal_e7ccdd6995a83b9fa070702b79e66a536d38e4162f501b13b6586187c79755ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_152bc8a0a47ec982126e90695248d2f4efff5fe64c232a286b70c8a095479efe->leave($__internal_152bc8a0a47ec982126e90695248d2f4efff5fe64c232a286b70c8a095479efe_prof);

        
        $__internal_e7ccdd6995a83b9fa070702b79e66a536d38e4162f501b13b6586187c79755ac->leave($__internal_e7ccdd6995a83b9fa070702b79e66a536d38e4162f501b13b6586187c79755ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
