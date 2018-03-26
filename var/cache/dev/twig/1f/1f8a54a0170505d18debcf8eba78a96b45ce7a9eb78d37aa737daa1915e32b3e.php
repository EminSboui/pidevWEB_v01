<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_cc4095145c17cefdbfa52adfa8f0a5e641f10e77153f7da8843a16b2a07ab251 extends Twig_Template
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
        $__internal_d5a34437488d147b27485f8434e7fcce455b1546923878c7608b4863341d6972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a34437488d147b27485f8434e7fcce455b1546923878c7608b4863341d6972->enter($__internal_d5a34437488d147b27485f8434e7fcce455b1546923878c7608b4863341d6972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_449e642e15adf4ff6f5d0fd0386835522587ab755b96943cf7ccbc03e0b5b8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449e642e15adf4ff6f5d0fd0386835522587ab755b96943cf7ccbc03e0b5b8e0->enter($__internal_449e642e15adf4ff6f5d0fd0386835522587ab755b96943cf7ccbc03e0b5b8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d5a34437488d147b27485f8434e7fcce455b1546923878c7608b4863341d6972->leave($__internal_d5a34437488d147b27485f8434e7fcce455b1546923878c7608b4863341d6972_prof);

        
        $__internal_449e642e15adf4ff6f5d0fd0386835522587ab755b96943cf7ccbc03e0b5b8e0->leave($__internal_449e642e15adf4ff6f5d0fd0386835522587ab755b96943cf7ccbc03e0b5b8e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
