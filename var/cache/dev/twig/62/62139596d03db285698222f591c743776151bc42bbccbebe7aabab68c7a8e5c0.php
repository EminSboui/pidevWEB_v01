<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_0e81b7a2cf66589b48fd353cafcc1d2be6aa545eb6538750df660f9b4f961d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_691e6fad2c72b1713308a268d185a1c983571ac8852d303b9c0cdcbf4bf99084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691e6fad2c72b1713308a268d185a1c983571ac8852d303b9c0cdcbf4bf99084->enter($__internal_691e6fad2c72b1713308a268d185a1c983571ac8852d303b9c0cdcbf4bf99084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_2718a3ba7e5baff32cdf7665cae76deb825daff497c2ff2e24df503e2750a2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2718a3ba7e5baff32cdf7665cae76deb825daff497c2ff2e24df503e2750a2e2->enter($__internal_2718a3ba7e5baff32cdf7665cae76deb825daff497c2ff2e24df503e2750a2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_691e6fad2c72b1713308a268d185a1c983571ac8852d303b9c0cdcbf4bf99084->leave($__internal_691e6fad2c72b1713308a268d185a1c983571ac8852d303b9c0cdcbf4bf99084_prof);

        
        $__internal_2718a3ba7e5baff32cdf7665cae76deb825daff497c2ff2e24df503e2750a2e2->leave($__internal_2718a3ba7e5baff32cdf7665cae76deb825daff497c2ff2e24df503e2750a2e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ad2e7f41b6f07c7203cf1c7566fcb0da0c8dc3c5542566d641f572b4940dcb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad2e7f41b6f07c7203cf1c7566fcb0da0c8dc3c5542566d641f572b4940dcb6->enter($__internal_8ad2e7f41b6f07c7203cf1c7566fcb0da0c8dc3c5542566d641f572b4940dcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c9ba921b2867e1d380c06653fee5907655b1e145317787a44b1de0548a384e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ba921b2867e1d380c06653fee5907655b1e145317787a44b1de0548a384e55->enter($__internal_c9ba921b2867e1d380c06653fee5907655b1e145317787a44b1de0548a384e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_c9ba921b2867e1d380c06653fee5907655b1e145317787a44b1de0548a384e55->leave($__internal_c9ba921b2867e1d380c06653fee5907655b1e145317787a44b1de0548a384e55_prof);

        
        $__internal_8ad2e7f41b6f07c7203cf1c7566fcb0da0c8dc3c5542566d641f572b4940dcb6->leave($__internal_8ad2e7f41b6f07c7203cf1c7566fcb0da0c8dc3c5542566d641f572b4940dcb6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
