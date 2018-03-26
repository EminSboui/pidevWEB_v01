<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_4f0793fc4b0888fa842a89754f2a0556a272e7f2049a48ce1f0866dae79babcd extends Twig_Template
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
        $__internal_a2c7ad3077885c199bd315ffd7137d93378865078e0e655143234b27e0581ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c7ad3077885c199bd315ffd7137d93378865078e0e655143234b27e0581ac1->enter($__internal_a2c7ad3077885c199bd315ffd7137d93378865078e0e655143234b27e0581ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_1a69ca6629c38b82d16e0aebd97418273d238dc68b900ba8179c1be31e5ca13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a69ca6629c38b82d16e0aebd97418273d238dc68b900ba8179c1be31e5ca13d->enter($__internal_1a69ca6629c38b82d16e0aebd97418273d238dc68b900ba8179c1be31e5ca13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_a2c7ad3077885c199bd315ffd7137d93378865078e0e655143234b27e0581ac1->leave($__internal_a2c7ad3077885c199bd315ffd7137d93378865078e0e655143234b27e0581ac1_prof);

        
        $__internal_1a69ca6629c38b82d16e0aebd97418273d238dc68b900ba8179c1be31e5ca13d->leave($__internal_1a69ca6629c38b82d16e0aebd97418273d238dc68b900ba8179c1be31e5ca13d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
