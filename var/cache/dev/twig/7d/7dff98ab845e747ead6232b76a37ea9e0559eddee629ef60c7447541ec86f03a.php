<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_949c6db43035da21050db8890a5a242787e70444486f04b42c60c2417402f879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_26679602bbfc2bc661fc4bea936d4d31979315cdf303dab45bc9717ca5fcd80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26679602bbfc2bc661fc4bea936d4d31979315cdf303dab45bc9717ca5fcd80a->enter($__internal_26679602bbfc2bc661fc4bea936d4d31979315cdf303dab45bc9717ca5fcd80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_30e164b35fe6709a9404cea33e60684570b55190f068692fac6da3b6c14a56bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e164b35fe6709a9404cea33e60684570b55190f068692fac6da3b6c14a56bc->enter($__internal_30e164b35fe6709a9404cea33e60684570b55190f068692fac6da3b6c14a56bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26679602bbfc2bc661fc4bea936d4d31979315cdf303dab45bc9717ca5fcd80a->leave($__internal_26679602bbfc2bc661fc4bea936d4d31979315cdf303dab45bc9717ca5fcd80a_prof);

        
        $__internal_30e164b35fe6709a9404cea33e60684570b55190f068692fac6da3b6c14a56bc->leave($__internal_30e164b35fe6709a9404cea33e60684570b55190f068692fac6da3b6c14a56bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f409db6d319266c5b1b4fc21154d270f1d933380f113ce6e2dd538bce568815d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f409db6d319266c5b1b4fc21154d270f1d933380f113ce6e2dd538bce568815d->enter($__internal_f409db6d319266c5b1b4fc21154d270f1d933380f113ce6e2dd538bce568815d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c9c05fb41d30b7f70ef6ae7dfe77b0dd01226f9d367d10af925f396e05713daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c05fb41d30b7f70ef6ae7dfe77b0dd01226f9d367d10af925f396e05713daf->enter($__internal_c9c05fb41d30b7f70ef6ae7dfe77b0dd01226f9d367d10af925f396e05713daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c9c05fb41d30b7f70ef6ae7dfe77b0dd01226f9d367d10af925f396e05713daf->leave($__internal_c9c05fb41d30b7f70ef6ae7dfe77b0dd01226f9d367d10af925f396e05713daf_prof);

        
        $__internal_f409db6d319266c5b1b4fc21154d270f1d933380f113ce6e2dd538bce568815d->leave($__internal_f409db6d319266c5b1b4fc21154d270f1d933380f113ce6e2dd538bce568815d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
