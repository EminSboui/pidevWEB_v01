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
        $__internal_9531d10e085b01105f4cb32d986b8fad36d6f351e4383cca8d3f3be3df3e6b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9531d10e085b01105f4cb32d986b8fad36d6f351e4383cca8d3f3be3df3e6b94->enter($__internal_9531d10e085b01105f4cb32d986b8fad36d6f351e4383cca8d3f3be3df3e6b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_f88ad2256b2ece4856b188c45327ba1585c9a6500cafbc97b730b85715c7e263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88ad2256b2ece4856b188c45327ba1585c9a6500cafbc97b730b85715c7e263->enter($__internal_f88ad2256b2ece4856b188c45327ba1585c9a6500cafbc97b730b85715c7e263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9531d10e085b01105f4cb32d986b8fad36d6f351e4383cca8d3f3be3df3e6b94->leave($__internal_9531d10e085b01105f4cb32d986b8fad36d6f351e4383cca8d3f3be3df3e6b94_prof);

        
        $__internal_f88ad2256b2ece4856b188c45327ba1585c9a6500cafbc97b730b85715c7e263->leave($__internal_f88ad2256b2ece4856b188c45327ba1585c9a6500cafbc97b730b85715c7e263_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bdb138b020a145d2c8349ca0cc150900eba617af35085827e7aafc850d65575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bdb138b020a145d2c8349ca0cc150900eba617af35085827e7aafc850d65575->enter($__internal_0bdb138b020a145d2c8349ca0cc150900eba617af35085827e7aafc850d65575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_275a4095bd40209664ff102936a4f58c06fa373739b98c63f173fc5016ab1d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275a4095bd40209664ff102936a4f58c06fa373739b98c63f173fc5016ab1d96->enter($__internal_275a4095bd40209664ff102936a4f58c06fa373739b98c63f173fc5016ab1d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_275a4095bd40209664ff102936a4f58c06fa373739b98c63f173fc5016ab1d96->leave($__internal_275a4095bd40209664ff102936a4f58c06fa373739b98c63f173fc5016ab1d96_prof);

        
        $__internal_0bdb138b020a145d2c8349ca0cc150900eba617af35085827e7aafc850d65575->leave($__internal_0bdb138b020a145d2c8349ca0cc150900eba617af35085827e7aafc850d65575_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\pidevWEB_v1.0\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
