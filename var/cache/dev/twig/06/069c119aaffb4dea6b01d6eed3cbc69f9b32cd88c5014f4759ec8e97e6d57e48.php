<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_48eb526192d59b3112913dd3a48b80a620500a786d4b6fdca59793cff2de7449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_e05cd0c9ce07c6ad5c2b2b873c6baf30aa7b37f13a5f5dc14bb3e2848061bc43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05cd0c9ce07c6ad5c2b2b873c6baf30aa7b37f13a5f5dc14bb3e2848061bc43->enter($__internal_e05cd0c9ce07c6ad5c2b2b873c6baf30aa7b37f13a5f5dc14bb3e2848061bc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_2d91a99e37146f86e03df883fc206565542e15ee0b876f0b6f243ba6e2c6240c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d91a99e37146f86e03df883fc206565542e15ee0b876f0b6f243ba6e2c6240c->enter($__internal_2d91a99e37146f86e03df883fc206565542e15ee0b876f0b6f243ba6e2c6240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e05cd0c9ce07c6ad5c2b2b873c6baf30aa7b37f13a5f5dc14bb3e2848061bc43->leave($__internal_e05cd0c9ce07c6ad5c2b2b873c6baf30aa7b37f13a5f5dc14bb3e2848061bc43_prof);

        
        $__internal_2d91a99e37146f86e03df883fc206565542e15ee0b876f0b6f243ba6e2c6240c->leave($__internal_2d91a99e37146f86e03df883fc206565542e15ee0b876f0b6f243ba6e2c6240c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2b7b429709a830b4eaa92f9e228405eee4c815ac922759c494c3e35d78b7f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b7b429709a830b4eaa92f9e228405eee4c815ac922759c494c3e35d78b7f6d->enter($__internal_d2b7b429709a830b4eaa92f9e228405eee4c815ac922759c494c3e35d78b7f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c80070a7decdbef5e9cb345e07fd8b06b75ded73c7e54e8eb2d72d7c99921085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80070a7decdbef5e9cb345e07fd8b06b75ded73c7e54e8eb2d72d7c99921085->enter($__internal_c80070a7decdbef5e9cb345e07fd8b06b75ded73c7e54e8eb2d72d7c99921085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c80070a7decdbef5e9cb345e07fd8b06b75ded73c7e54e8eb2d72d7c99921085->leave($__internal_c80070a7decdbef5e9cb345e07fd8b06b75ded73c7e54e8eb2d72d7c99921085_prof);

        
        $__internal_d2b7b429709a830b4eaa92f9e228405eee4c815ac922759c494c3e35d78b7f6d->leave($__internal_d2b7b429709a830b4eaa92f9e228405eee4c815ac922759c494c3e35d78b7f6d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
