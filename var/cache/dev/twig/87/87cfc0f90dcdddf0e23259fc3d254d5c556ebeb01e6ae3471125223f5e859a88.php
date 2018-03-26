<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_4fb23e4842cc64723ac50eeee191fd155986ba0250898ac28031fe2be44628c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_2e6938e8edfc2b88322990575800da7ee6575ad8d54bf080430cae69a8929d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6938e8edfc2b88322990575800da7ee6575ad8d54bf080430cae69a8929d60->enter($__internal_2e6938e8edfc2b88322990575800da7ee6575ad8d54bf080430cae69a8929d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_a53338ae82bbefd06f850d67e5495fb62242090fb9d6e44b8be35afb436bdfd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53338ae82bbefd06f850d67e5495fb62242090fb9d6e44b8be35afb436bdfd8->enter($__internal_a53338ae82bbefd06f850d67e5495fb62242090fb9d6e44b8be35afb436bdfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e6938e8edfc2b88322990575800da7ee6575ad8d54bf080430cae69a8929d60->leave($__internal_2e6938e8edfc2b88322990575800da7ee6575ad8d54bf080430cae69a8929d60_prof);

        
        $__internal_a53338ae82bbefd06f850d67e5495fb62242090fb9d6e44b8be35afb436bdfd8->leave($__internal_a53338ae82bbefd06f850d67e5495fb62242090fb9d6e44b8be35afb436bdfd8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51bb57a2a2e526a31cc573cbaa3859eca38e7ca13af4d9325573b6b1c4aeed26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bb57a2a2e526a31cc573cbaa3859eca38e7ca13af4d9325573b6b1c4aeed26->enter($__internal_51bb57a2a2e526a31cc573cbaa3859eca38e7ca13af4d9325573b6b1c4aeed26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_82e4cf7403f800061f9f355d034ce2babbdad6a06baa6fcc63d5a3eb23459cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e4cf7403f800061f9f355d034ce2babbdad6a06baa6fcc63d5a3eb23459cb7->enter($__internal_82e4cf7403f800061f9f355d034ce2babbdad6a06baa6fcc63d5a3eb23459cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_82e4cf7403f800061f9f355d034ce2babbdad6a06baa6fcc63d5a3eb23459cb7->leave($__internal_82e4cf7403f800061f9f355d034ce2babbdad6a06baa6fcc63d5a3eb23459cb7_prof);

        
        $__internal_51bb57a2a2e526a31cc573cbaa3859eca38e7ca13af4d9325573b6b1c4aeed26->leave($__internal_51bb57a2a2e526a31cc573cbaa3859eca38e7ca13af4d9325573b6b1c4aeed26_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
