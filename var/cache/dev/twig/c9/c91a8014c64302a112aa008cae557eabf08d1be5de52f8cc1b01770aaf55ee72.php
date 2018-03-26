<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0ec15115cbc7bccd896f1b1f70dd7ad14850ab40a967e402d122caa980a41ea8 extends Twig_Template
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
        $__internal_ccaed7fc2037fb56ea82617642e5985ccd747253815dea102ad620a1f1458391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccaed7fc2037fb56ea82617642e5985ccd747253815dea102ad620a1f1458391->enter($__internal_ccaed7fc2037fb56ea82617642e5985ccd747253815dea102ad620a1f1458391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_04b02f7819fbd89c1b7fa4349e857a980ca86199f699d04b38ca0b56016776ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b02f7819fbd89c1b7fa4349e857a980ca86199f699d04b38ca0b56016776ca->enter($__internal_04b02f7819fbd89c1b7fa4349e857a980ca86199f699d04b38ca0b56016776ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ccaed7fc2037fb56ea82617642e5985ccd747253815dea102ad620a1f1458391->leave($__internal_ccaed7fc2037fb56ea82617642e5985ccd747253815dea102ad620a1f1458391_prof);

        
        $__internal_04b02f7819fbd89c1b7fa4349e857a980ca86199f699d04b38ca0b56016776ca->leave($__internal_04b02f7819fbd89c1b7fa4349e857a980ca86199f699d04b38ca0b56016776ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
