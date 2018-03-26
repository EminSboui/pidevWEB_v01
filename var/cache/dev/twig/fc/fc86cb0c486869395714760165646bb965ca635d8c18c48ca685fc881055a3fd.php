<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_95d2666dfcf4911c73788ab6d3ea37c50361150e4bed5e5495c50692d4ea08aa extends Twig_Template
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
        $__internal_205d58ba0b3d1ead3158eca36017008f772795fe2e59533ea33dd8b0b7591887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205d58ba0b3d1ead3158eca36017008f772795fe2e59533ea33dd8b0b7591887->enter($__internal_205d58ba0b3d1ead3158eca36017008f772795fe2e59533ea33dd8b0b7591887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_c423952aebb0c1c1dc2af8a9469d3cae0440a364693dae462fa5bd595031f71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c423952aebb0c1c1dc2af8a9469d3cae0440a364693dae462fa5bd595031f71c->enter($__internal_c423952aebb0c1c1dc2af8a9469d3cae0440a364693dae462fa5bd595031f71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_205d58ba0b3d1ead3158eca36017008f772795fe2e59533ea33dd8b0b7591887->leave($__internal_205d58ba0b3d1ead3158eca36017008f772795fe2e59533ea33dd8b0b7591887_prof);

        
        $__internal_c423952aebb0c1c1dc2af8a9469d3cae0440a364693dae462fa5bd595031f71c->leave($__internal_c423952aebb0c1c1dc2af8a9469d3cae0440a364693dae462fa5bd595031f71c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
