<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3a9b015d9bac6065cec79bd972bc36a29f8140d77aa36df53fb75a32c7bc6ac8 extends Twig_Template
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
        $__internal_7c55b00cd5599c3f608456c0f3763855a06f4b8d57b065ef8b3c6c09fd2e2020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c55b00cd5599c3f608456c0f3763855a06f4b8d57b065ef8b3c6c09fd2e2020->enter($__internal_7c55b00cd5599c3f608456c0f3763855a06f4b8d57b065ef8b3c6c09fd2e2020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b78ed625927a714c37140931166b39f939244b803375c46bf7eb4bd2919e408b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78ed625927a714c37140931166b39f939244b803375c46bf7eb4bd2919e408b->enter($__internal_b78ed625927a714c37140931166b39f939244b803375c46bf7eb4bd2919e408b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7c55b00cd5599c3f608456c0f3763855a06f4b8d57b065ef8b3c6c09fd2e2020->leave($__internal_7c55b00cd5599c3f608456c0f3763855a06f4b8d57b065ef8b3c6c09fd2e2020_prof);

        
        $__internal_b78ed625927a714c37140931166b39f939244b803375c46bf7eb4bd2919e408b->leave($__internal_b78ed625927a714c37140931166b39f939244b803375c46bf7eb4bd2919e408b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
