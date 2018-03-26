<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8b42721c6d63495c3ed30c44c0ebfeb47d1976a128a198b05586dfed7d3f3f4d extends Twig_Template
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
        $__internal_bc1ba7df2fe6ee3630cdb82cb34f68084c6ae338076056dd6b356b7da92137a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1ba7df2fe6ee3630cdb82cb34f68084c6ae338076056dd6b356b7da92137a4->enter($__internal_bc1ba7df2fe6ee3630cdb82cb34f68084c6ae338076056dd6b356b7da92137a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_10543f69f45e95bead843f3e6a61a82c0e57b70639f46a2af0c8d447f99cce52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10543f69f45e95bead843f3e6a61a82c0e57b70639f46a2af0c8d447f99cce52->enter($__internal_10543f69f45e95bead843f3e6a61a82c0e57b70639f46a2af0c8d447f99cce52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_bc1ba7df2fe6ee3630cdb82cb34f68084c6ae338076056dd6b356b7da92137a4->leave($__internal_bc1ba7df2fe6ee3630cdb82cb34f68084c6ae338076056dd6b356b7da92137a4_prof);

        
        $__internal_10543f69f45e95bead843f3e6a61a82c0e57b70639f46a2af0c8d447f99cce52->leave($__internal_10543f69f45e95bead843f3e6a61a82c0e57b70639f46a2af0c8d447f99cce52_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
