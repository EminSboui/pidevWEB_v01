<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_cfae3f4bc99048f3bd3d7920417b5fa9a9d34283b47bd6c11907e737f5bc99a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_2ab322acb9f8e2cc7bcd7590968ea17b2ec4daa3d636b639d71dc0e047c9dc54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab322acb9f8e2cc7bcd7590968ea17b2ec4daa3d636b639d71dc0e047c9dc54->enter($__internal_2ab322acb9f8e2cc7bcd7590968ea17b2ec4daa3d636b639d71dc0e047c9dc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_83432fbb5a982f72c324f0258c2571719867b5218727d5c6c039ba73c2c7cb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83432fbb5a982f72c324f0258c2571719867b5218727d5c6c039ba73c2c7cb1f->enter($__internal_83432fbb5a982f72c324f0258c2571719867b5218727d5c6c039ba73c2c7cb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ab322acb9f8e2cc7bcd7590968ea17b2ec4daa3d636b639d71dc0e047c9dc54->leave($__internal_2ab322acb9f8e2cc7bcd7590968ea17b2ec4daa3d636b639d71dc0e047c9dc54_prof);

        
        $__internal_83432fbb5a982f72c324f0258c2571719867b5218727d5c6c039ba73c2c7cb1f->leave($__internal_83432fbb5a982f72c324f0258c2571719867b5218727d5c6c039ba73c2c7cb1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_029477d3a623f497ec94fdbe0a1c2d3a77d1cd8683b18fcec021ff1196278c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_029477d3a623f497ec94fdbe0a1c2d3a77d1cd8683b18fcec021ff1196278c3a->enter($__internal_029477d3a623f497ec94fdbe0a1c2d3a77d1cd8683b18fcec021ff1196278c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5322c12416d67f4966afd478af31bcd0447dac65cc4c4230eb07c77a6b96c384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5322c12416d67f4966afd478af31bcd0447dac65cc4c4230eb07c77a6b96c384->enter($__internal_5322c12416d67f4966afd478af31bcd0447dac65cc4c4230eb07c77a6b96c384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5322c12416d67f4966afd478af31bcd0447dac65cc4c4230eb07c77a6b96c384->leave($__internal_5322c12416d67f4966afd478af31bcd0447dac65cc4c4230eb07c77a6b96c384_prof);

        
        $__internal_029477d3a623f497ec94fdbe0a1c2d3a77d1cd8683b18fcec021ff1196278c3a->leave($__internal_029477d3a623f497ec94fdbe0a1c2d3a77d1cd8683b18fcec021ff1196278c3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
