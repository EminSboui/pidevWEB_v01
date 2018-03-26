<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f1d6269abd2ce297877521bbbaac1e0e569422c7077c75c1e4e5392401ca9974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_1b1f4ba2331c285a4b9a62a8f9b7d31f4859a37ed1d50fac40de106d633fa92e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1f4ba2331c285a4b9a62a8f9b7d31f4859a37ed1d50fac40de106d633fa92e->enter($__internal_1b1f4ba2331c285a4b9a62a8f9b7d31f4859a37ed1d50fac40de106d633fa92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_e6cf6da606eda9bec20a0d57f0f35857912c9812a59cb34d53788071665a1f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cf6da606eda9bec20a0d57f0f35857912c9812a59cb34d53788071665a1f9b->enter($__internal_e6cf6da606eda9bec20a0d57f0f35857912c9812a59cb34d53788071665a1f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b1f4ba2331c285a4b9a62a8f9b7d31f4859a37ed1d50fac40de106d633fa92e->leave($__internal_1b1f4ba2331c285a4b9a62a8f9b7d31f4859a37ed1d50fac40de106d633fa92e_prof);

        
        $__internal_e6cf6da606eda9bec20a0d57f0f35857912c9812a59cb34d53788071665a1f9b->leave($__internal_e6cf6da606eda9bec20a0d57f0f35857912c9812a59cb34d53788071665a1f9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_046be66daaa15b8e5719b1921d5a2284598d180a937e772d7ca96a1ff56eb1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046be66daaa15b8e5719b1921d5a2284598d180a937e772d7ca96a1ff56eb1cb->enter($__internal_046be66daaa15b8e5719b1921d5a2284598d180a937e772d7ca96a1ff56eb1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_03d03247b8f56e062518484714ef7e72d06138c3610f9d6d541ed9f3b7f895ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d03247b8f56e062518484714ef7e72d06138c3610f9d6d541ed9f3b7f895ba->enter($__internal_03d03247b8f56e062518484714ef7e72d06138c3610f9d6d541ed9f3b7f895ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_03d03247b8f56e062518484714ef7e72d06138c3610f9d6d541ed9f3b7f895ba->leave($__internal_03d03247b8f56e062518484714ef7e72d06138c3610f9d6d541ed9f3b7f895ba_prof);

        
        $__internal_046be66daaa15b8e5719b1921d5a2284598d180a937e772d7ca96a1ff56eb1cb->leave($__internal_046be66daaa15b8e5719b1921d5a2284598d180a937e772d7ca96a1ff56eb1cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
