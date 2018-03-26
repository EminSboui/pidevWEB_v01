<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5c359386d10922da4b1c698a5e0415b34d7fa3942220f59727cc760fac09a9cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_eced6e491f1c2e683c779966fefa3ca75e3ce993b958eb5be64fe94f4c081803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eced6e491f1c2e683c779966fefa3ca75e3ce993b958eb5be64fe94f4c081803->enter($__internal_eced6e491f1c2e683c779966fefa3ca75e3ce993b958eb5be64fe94f4c081803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_40f31b45a6574833f40da2f1db954cf9de355dc892e6a2248ab03c204cfc5b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f31b45a6574833f40da2f1db954cf9de355dc892e6a2248ab03c204cfc5b19->enter($__internal_40f31b45a6574833f40da2f1db954cf9de355dc892e6a2248ab03c204cfc5b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eced6e491f1c2e683c779966fefa3ca75e3ce993b958eb5be64fe94f4c081803->leave($__internal_eced6e491f1c2e683c779966fefa3ca75e3ce993b958eb5be64fe94f4c081803_prof);

        
        $__internal_40f31b45a6574833f40da2f1db954cf9de355dc892e6a2248ab03c204cfc5b19->leave($__internal_40f31b45a6574833f40da2f1db954cf9de355dc892e6a2248ab03c204cfc5b19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06ff8e605635f854e7b1b4c30e86d3e2624c458cbbed70c72147702ee4acdf1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ff8e605635f854e7b1b4c30e86d3e2624c458cbbed70c72147702ee4acdf1c->enter($__internal_06ff8e605635f854e7b1b4c30e86d3e2624c458cbbed70c72147702ee4acdf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8aba8f9addc14c6a5978f7f0af28291a2edb4264359bb289264f38c793a89abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aba8f9addc14c6a5978f7f0af28291a2edb4264359bb289264f38c793a89abc->enter($__internal_8aba8f9addc14c6a5978f7f0af28291a2edb4264359bb289264f38c793a89abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8aba8f9addc14c6a5978f7f0af28291a2edb4264359bb289264f38c793a89abc->leave($__internal_8aba8f9addc14c6a5978f7f0af28291a2edb4264359bb289264f38c793a89abc_prof);

        
        $__internal_06ff8e605635f854e7b1b4c30e86d3e2624c458cbbed70c72147702ee4acdf1c->leave($__internal_06ff8e605635f854e7b1b4c30e86d3e2624c458cbbed70c72147702ee4acdf1c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
