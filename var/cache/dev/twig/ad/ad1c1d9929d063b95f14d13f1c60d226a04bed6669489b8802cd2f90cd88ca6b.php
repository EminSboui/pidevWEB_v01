<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_8554355dbdae929f0d9f172549ecb0d0c7b201a18aef2232468c4c1160817f38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_85c285ee3d56ab305406f08f93ba42c7305fb871fa642cfdad4613e8f731035e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c285ee3d56ab305406f08f93ba42c7305fb871fa642cfdad4613e8f731035e->enter($__internal_85c285ee3d56ab305406f08f93ba42c7305fb871fa642cfdad4613e8f731035e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_ee5573516e44f15431c5c598e53fdcffc3d71abb836ec4b21710c04c89b652aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5573516e44f15431c5c598e53fdcffc3d71abb836ec4b21710c04c89b652aa->enter($__internal_ee5573516e44f15431c5c598e53fdcffc3d71abb836ec4b21710c04c89b652aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85c285ee3d56ab305406f08f93ba42c7305fb871fa642cfdad4613e8f731035e->leave($__internal_85c285ee3d56ab305406f08f93ba42c7305fb871fa642cfdad4613e8f731035e_prof);

        
        $__internal_ee5573516e44f15431c5c598e53fdcffc3d71abb836ec4b21710c04c89b652aa->leave($__internal_ee5573516e44f15431c5c598e53fdcffc3d71abb836ec4b21710c04c89b652aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_faa796f868ea7f7f155dfcaddf43f677093fe9d345d17dcb3e0bf22500c27def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa796f868ea7f7f155dfcaddf43f677093fe9d345d17dcb3e0bf22500c27def->enter($__internal_faa796f868ea7f7f155dfcaddf43f677093fe9d345d17dcb3e0bf22500c27def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c4fa37355c987f697dc0a9eac83cd5cce4c594a8f56e15f45f554cef77cabcae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fa37355c987f697dc0a9eac83cd5cce4c594a8f56e15f45f554cef77cabcae->enter($__internal_c4fa37355c987f697dc0a9eac83cd5cce4c594a8f56e15f45f554cef77cabcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_c4fa37355c987f697dc0a9eac83cd5cce4c594a8f56e15f45f554cef77cabcae->leave($__internal_c4fa37355c987f697dc0a9eac83cd5cce4c594a8f56e15f45f554cef77cabcae_prof);

        
        $__internal_faa796f868ea7f7f155dfcaddf43f677093fe9d345d17dcb3e0bf22500c27def->leave($__internal_faa796f868ea7f7f155dfcaddf43f677093fe9d345d17dcb3e0bf22500c27def_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
