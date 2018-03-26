<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1acfebf008b50ad1a751666aa2c5603606cb87db7727ff09bdb44dbd99dbed80 extends Twig_Template
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
        $__internal_4f242e78d3975e752186c1a7649e3e9f9722d84c9a7f8adbf5ed8f754fcb285c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f242e78d3975e752186c1a7649e3e9f9722d84c9a7f8adbf5ed8f754fcb285c->enter($__internal_4f242e78d3975e752186c1a7649e3e9f9722d84c9a7f8adbf5ed8f754fcb285c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_e4c97aa713c1ec5d56f32cac109bc6fadd399e5d74a40630a28c8c4a554c8013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c97aa713c1ec5d56f32cac109bc6fadd399e5d74a40630a28c8c4a554c8013->enter($__internal_e4c97aa713c1ec5d56f32cac109bc6fadd399e5d74a40630a28c8c4a554c8013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f242e78d3975e752186c1a7649e3e9f9722d84c9a7f8adbf5ed8f754fcb285c->leave($__internal_4f242e78d3975e752186c1a7649e3e9f9722d84c9a7f8adbf5ed8f754fcb285c_prof);

        
        $__internal_e4c97aa713c1ec5d56f32cac109bc6fadd399e5d74a40630a28c8c4a554c8013->leave($__internal_e4c97aa713c1ec5d56f32cac109bc6fadd399e5d74a40630a28c8c4a554c8013_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ed19efe5c67ee0b07f934de7675b9f6854f13b80ec458e043f45906a6d364bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed19efe5c67ee0b07f934de7675b9f6854f13b80ec458e043f45906a6d364bf->enter($__internal_6ed19efe5c67ee0b07f934de7675b9f6854f13b80ec458e043f45906a6d364bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0295333584493b3904d92513e74c66b377536a0cfe8ca575d4fbfc325d372242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0295333584493b3904d92513e74c66b377536a0cfe8ca575d4fbfc325d372242->enter($__internal_0295333584493b3904d92513e74c66b377536a0cfe8ca575d4fbfc325d372242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0295333584493b3904d92513e74c66b377536a0cfe8ca575d4fbfc325d372242->leave($__internal_0295333584493b3904d92513e74c66b377536a0cfe8ca575d4fbfc325d372242_prof);

        
        $__internal_6ed19efe5c67ee0b07f934de7675b9f6854f13b80ec458e043f45906a6d364bf->leave($__internal_6ed19efe5c67ee0b07f934de7675b9f6854f13b80ec458e043f45906a6d364bf_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
