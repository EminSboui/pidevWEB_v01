<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_7002e88c4e7dc8cc55a7e16d91f7b9e1a0a4c0b6ee167aa868a2e747f08d59e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_e343dad836cea93b11458baadf3113f133340d26f6de8c4b979247f27572d6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e343dad836cea93b11458baadf3113f133340d26f6de8c4b979247f27572d6ff->enter($__internal_e343dad836cea93b11458baadf3113f133340d26f6de8c4b979247f27572d6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_4e5c01719c92e76850b21c2dbe1dd037d1d524b18c90a67943ab4f64e20d5f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5c01719c92e76850b21c2dbe1dd037d1d524b18c90a67943ab4f64e20d5f74->enter($__internal_4e5c01719c92e76850b21c2dbe1dd037d1d524b18c90a67943ab4f64e20d5f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e343dad836cea93b11458baadf3113f133340d26f6de8c4b979247f27572d6ff->leave($__internal_e343dad836cea93b11458baadf3113f133340d26f6de8c4b979247f27572d6ff_prof);

        
        $__internal_4e5c01719c92e76850b21c2dbe1dd037d1d524b18c90a67943ab4f64e20d5f74->leave($__internal_4e5c01719c92e76850b21c2dbe1dd037d1d524b18c90a67943ab4f64e20d5f74_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcf788782a7fdd7641ffc60548cca13f1b828c170d205785b0f8010dbadaf986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf788782a7fdd7641ffc60548cca13f1b828c170d205785b0f8010dbadaf986->enter($__internal_bcf788782a7fdd7641ffc60548cca13f1b828c170d205785b0f8010dbadaf986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e911dccf4dbfb2679818bd28eb807094732eb9a73dc3170967d511233d69fa3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e911dccf4dbfb2679818bd28eb807094732eb9a73dc3170967d511233d69fa3c->enter($__internal_e911dccf4dbfb2679818bd28eb807094732eb9a73dc3170967d511233d69fa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e911dccf4dbfb2679818bd28eb807094732eb9a73dc3170967d511233d69fa3c->leave($__internal_e911dccf4dbfb2679818bd28eb807094732eb9a73dc3170967d511233d69fa3c_prof);

        
        $__internal_bcf788782a7fdd7641ffc60548cca13f1b828c170d205785b0f8010dbadaf986->leave($__internal_bcf788782a7fdd7641ffc60548cca13f1b828c170d205785b0f8010dbadaf986_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
