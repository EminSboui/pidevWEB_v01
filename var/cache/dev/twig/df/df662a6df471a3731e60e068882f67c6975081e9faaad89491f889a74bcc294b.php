<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5bbf62872a324e4d3c772b5a37634c0fdd3a83d3f812c3f5a6845483d8c23e6d extends Twig_Template
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
        $__internal_a5b4a1f2a87aa1f022b9a895b970befad9638db6d4cb68c21af11b891c3698a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b4a1f2a87aa1f022b9a895b970befad9638db6d4cb68c21af11b891c3698a0->enter($__internal_a5b4a1f2a87aa1f022b9a895b970befad9638db6d4cb68c21af11b891c3698a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_7700bddc14d4bf19220c6d489ac8827be0e1f678868ffe5c75f7e8740b3da2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7700bddc14d4bf19220c6d489ac8827be0e1f678868ffe5c75f7e8740b3da2cf->enter($__internal_7700bddc14d4bf19220c6d489ac8827be0e1f678868ffe5c75f7e8740b3da2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a5b4a1f2a87aa1f022b9a895b970befad9638db6d4cb68c21af11b891c3698a0->leave($__internal_a5b4a1f2a87aa1f022b9a895b970befad9638db6d4cb68c21af11b891c3698a0_prof);

        
        $__internal_7700bddc14d4bf19220c6d489ac8827be0e1f678868ffe5c75f7e8740b3da2cf->leave($__internal_7700bddc14d4bf19220c6d489ac8827be0e1f678868ffe5c75f7e8740b3da2cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
