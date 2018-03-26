<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_68f76abea6118cea5736d0f52a0fd202a265b257092251a30bf572abe1978c33 extends Twig_Template
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
        $__internal_bbe65a6f6c63323b2a1bcea5e9a17bc9aed43f8025715f046240bfb03d98f518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe65a6f6c63323b2a1bcea5e9a17bc9aed43f8025715f046240bfb03d98f518->enter($__internal_bbe65a6f6c63323b2a1bcea5e9a17bc9aed43f8025715f046240bfb03d98f518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_4d2f2503ad9754bb328a1ca7546c4c54241ad9c3af7333dc5d8de9cfd1764513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2f2503ad9754bb328a1ca7546c4c54241ad9c3af7333dc5d8de9cfd1764513->enter($__internal_4d2f2503ad9754bb328a1ca7546c4c54241ad9c3af7333dc5d8de9cfd1764513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bbe65a6f6c63323b2a1bcea5e9a17bc9aed43f8025715f046240bfb03d98f518->leave($__internal_bbe65a6f6c63323b2a1bcea5e9a17bc9aed43f8025715f046240bfb03d98f518_prof);

        
        $__internal_4d2f2503ad9754bb328a1ca7546c4c54241ad9c3af7333dc5d8de9cfd1764513->leave($__internal_4d2f2503ad9754bb328a1ca7546c4c54241ad9c3af7333dc5d8de9cfd1764513_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
