<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e264665c5ffa0bd4847fcdd496abe2526e39ad509e757cc7e5b70add14fa1c46 extends Twig_Template
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
        $__internal_2cacd1f406213c422b5d4d9d2846935adf2baf26a137412968f2c4be7197daed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cacd1f406213c422b5d4d9d2846935adf2baf26a137412968f2c4be7197daed->enter($__internal_2cacd1f406213c422b5d4d9d2846935adf2baf26a137412968f2c4be7197daed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_0fec31d02092d69227357e0b95beb2e5e0b5f639fc728a8253df5dad8fe7748a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fec31d02092d69227357e0b95beb2e5e0b5f639fc728a8253df5dad8fe7748a->enter($__internal_0fec31d02092d69227357e0b95beb2e5e0b5f639fc728a8253df5dad8fe7748a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_2cacd1f406213c422b5d4d9d2846935adf2baf26a137412968f2c4be7197daed->leave($__internal_2cacd1f406213c422b5d4d9d2846935adf2baf26a137412968f2c4be7197daed_prof);

        
        $__internal_0fec31d02092d69227357e0b95beb2e5e0b5f639fc728a8253df5dad8fe7748a->leave($__internal_0fec31d02092d69227357e0b95beb2e5e0b5f639fc728a8253df5dad8fe7748a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
