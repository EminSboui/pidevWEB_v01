<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7ea2ea09919afd63688539de627ca22ef1c2e92c2c61ee1f9f9610ba67154631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_406fad27cf0783fd0d31b2738b7f167aba1eae8db1f66a609c6ef29aac29ad4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406fad27cf0783fd0d31b2738b7f167aba1eae8db1f66a609c6ef29aac29ad4a->enter($__internal_406fad27cf0783fd0d31b2738b7f167aba1eae8db1f66a609c6ef29aac29ad4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_83a5ebf10d8f9bb896f8cb89575af7674dad5bd7ad1bbf7aa791a88b76924e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a5ebf10d8f9bb896f8cb89575af7674dad5bd7ad1bbf7aa791a88b76924e85->enter($__internal_83a5ebf10d8f9bb896f8cb89575af7674dad5bd7ad1bbf7aa791a88b76924e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_406fad27cf0783fd0d31b2738b7f167aba1eae8db1f66a609c6ef29aac29ad4a->leave($__internal_406fad27cf0783fd0d31b2738b7f167aba1eae8db1f66a609c6ef29aac29ad4a_prof);

        
        $__internal_83a5ebf10d8f9bb896f8cb89575af7674dad5bd7ad1bbf7aa791a88b76924e85->leave($__internal_83a5ebf10d8f9bb896f8cb89575af7674dad5bd7ad1bbf7aa791a88b76924e85_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3dbdc46b35fd74c4577e455d3e0bfa9350d24e0192110ea9dec540c88e883d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbdc46b35fd74c4577e455d3e0bfa9350d24e0192110ea9dec540c88e883d00->enter($__internal_3dbdc46b35fd74c4577e455d3e0bfa9350d24e0192110ea9dec540c88e883d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_585bc5dfcc65eed57a258447f2d506364e576e9a4cb2bd4217efd03f8a445160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585bc5dfcc65eed57a258447f2d506364e576e9a4cb2bd4217efd03f8a445160->enter($__internal_585bc5dfcc65eed57a258447f2d506364e576e9a4cb2bd4217efd03f8a445160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_585bc5dfcc65eed57a258447f2d506364e576e9a4cb2bd4217efd03f8a445160->leave($__internal_585bc5dfcc65eed57a258447f2d506364e576e9a4cb2bd4217efd03f8a445160_prof);

        
        $__internal_3dbdc46b35fd74c4577e455d3e0bfa9350d24e0192110ea9dec540c88e883d00->leave($__internal_3dbdc46b35fd74c4577e455d3e0bfa9350d24e0192110ea9dec540c88e883d00_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\pidevWEB_v1.0\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
