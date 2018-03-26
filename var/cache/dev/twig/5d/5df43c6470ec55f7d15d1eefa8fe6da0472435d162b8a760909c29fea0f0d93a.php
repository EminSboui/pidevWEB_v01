<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7777822de53ec48cde1e6b1498729b3ec5f3b2a103f56987a7f61b6302817298 extends Twig_Template
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
        $__internal_fedfc82f047edbeb6b97f473b140ac565b3396ccf280160fae9e7a15ad58a155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fedfc82f047edbeb6b97f473b140ac565b3396ccf280160fae9e7a15ad58a155->enter($__internal_fedfc82f047edbeb6b97f473b140ac565b3396ccf280160fae9e7a15ad58a155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_a949dac0fdc7dd6e299ff31eeb12259abe2de5a0786469a30ffb476a83dad5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a949dac0fdc7dd6e299ff31eeb12259abe2de5a0786469a30ffb476a83dad5ee->enter($__internal_a949dac0fdc7dd6e299ff31eeb12259abe2de5a0786469a30ffb476a83dad5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fedfc82f047edbeb6b97f473b140ac565b3396ccf280160fae9e7a15ad58a155->leave($__internal_fedfc82f047edbeb6b97f473b140ac565b3396ccf280160fae9e7a15ad58a155_prof);

        
        $__internal_a949dac0fdc7dd6e299ff31eeb12259abe2de5a0786469a30ffb476a83dad5ee->leave($__internal_a949dac0fdc7dd6e299ff31eeb12259abe2de5a0786469a30ffb476a83dad5ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
