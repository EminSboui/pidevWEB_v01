<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_31921a778c2d69716c12892e3066a675698d7b08735a99118bfc8e4a67c2c459 extends Twig_Template
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
        $__internal_cfea06dc7eb362d57c4f5eeb250edf32ac05def7aec54d988017d8700b75b0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfea06dc7eb362d57c4f5eeb250edf32ac05def7aec54d988017d8700b75b0db->enter($__internal_cfea06dc7eb362d57c4f5eeb250edf32ac05def7aec54d988017d8700b75b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_40a7cdc18441e12f276fcf17371ed3f6ae40ed6f729bbab8f57dafa7a58fef1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a7cdc18441e12f276fcf17371ed3f6ae40ed6f729bbab8f57dafa7a58fef1c->enter($__internal_40a7cdc18441e12f276fcf17371ed3f6ae40ed6f729bbab8f57dafa7a58fef1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cfea06dc7eb362d57c4f5eeb250edf32ac05def7aec54d988017d8700b75b0db->leave($__internal_cfea06dc7eb362d57c4f5eeb250edf32ac05def7aec54d988017d8700b75b0db_prof);

        
        $__internal_40a7cdc18441e12f276fcf17371ed3f6ae40ed6f729bbab8f57dafa7a58fef1c->leave($__internal_40a7cdc18441e12f276fcf17371ed3f6ae40ed6f729bbab8f57dafa7a58fef1c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
