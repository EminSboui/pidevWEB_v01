<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_c00d31d1deae9319bcc36b9aed717f814b25e360889bca79261d7d4ea8f639ca extends Twig_Template
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
        $__internal_56866770f6f38fce1fa5d28c7aaf32b745bc0014fd3ac4d1a9d71fa1ba64649d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56866770f6f38fce1fa5d28c7aaf32b745bc0014fd3ac4d1a9d71fa1ba64649d->enter($__internal_56866770f6f38fce1fa5d28c7aaf32b745bc0014fd3ac4d1a9d71fa1ba64649d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_78e8f49854a481e735e45e2693f18340e770ebd5116f0f75f9cd43c83654d6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e8f49854a481e735e45e2693f18340e770ebd5116f0f75f9cd43c83654d6c3->enter($__internal_78e8f49854a481e735e45e2693f18340e770ebd5116f0f75f9cd43c83654d6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_56866770f6f38fce1fa5d28c7aaf32b745bc0014fd3ac4d1a9d71fa1ba64649d->leave($__internal_56866770f6f38fce1fa5d28c7aaf32b745bc0014fd3ac4d1a9d71fa1ba64649d_prof);

        
        $__internal_78e8f49854a481e735e45e2693f18340e770ebd5116f0f75f9cd43c83654d6c3->leave($__internal_78e8f49854a481e735e45e2693f18340e770ebd5116f0f75f9cd43c83654d6c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
