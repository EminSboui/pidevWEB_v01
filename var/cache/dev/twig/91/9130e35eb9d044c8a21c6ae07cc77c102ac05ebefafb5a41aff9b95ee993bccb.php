<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_62a88edad2b9ca563171ceb02450a79987ac17fc128042c14ac96b71d83318a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57372135877955202253edb79a66a64622ca5339902f92aa61638165641066a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57372135877955202253edb79a66a64622ca5339902f92aa61638165641066a4->enter($__internal_57372135877955202253edb79a66a64622ca5339902f92aa61638165641066a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_7b75065f8aeba286f9bfaf0cedc7eece3a0df9010106d3e0d0ed1e6e7727e1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b75065f8aeba286f9bfaf0cedc7eece3a0df9010106d3e0d0ed1e6e7727e1fd->enter($__internal_7b75065f8aeba286f9bfaf0cedc7eece3a0df9010106d3e0d0ed1e6e7727e1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_57372135877955202253edb79a66a64622ca5339902f92aa61638165641066a4->leave($__internal_57372135877955202253edb79a66a64622ca5339902f92aa61638165641066a4_prof);

        
        $__internal_7b75065f8aeba286f9bfaf0cedc7eece3a0df9010106d3e0d0ed1e6e7727e1fd->leave($__internal_7b75065f8aeba286f9bfaf0cedc7eece3a0df9010106d3e0d0ed1e6e7727e1fd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
