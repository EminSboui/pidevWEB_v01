<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_f6108b15e95943765293d8d0774bb5df6fac66466b3dcd3a5d3dcab0d17e6929 extends Twig_Template
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
        $__internal_7d2971d5beceb7e82a8e8f861eab82135b88530bdd021048e5f76db8f198b36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2971d5beceb7e82a8e8f861eab82135b88530bdd021048e5f76db8f198b36a->enter($__internal_7d2971d5beceb7e82a8e8f861eab82135b88530bdd021048e5f76db8f198b36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_4770327cfd9c3aa5ab2323af8796a5e044cdbb8e3045971f01f0d36903ad8b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4770327cfd9c3aa5ab2323af8796a5e044cdbb8e3045971f01f0d36903ad8b71->enter($__internal_4770327cfd9c3aa5ab2323af8796a5e044cdbb8e3045971f01f0d36903ad8b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_7d2971d5beceb7e82a8e8f861eab82135b88530bdd021048e5f76db8f198b36a->leave($__internal_7d2971d5beceb7e82a8e8f861eab82135b88530bdd021048e5f76db8f198b36a_prof);

        
        $__internal_4770327cfd9c3aa5ab2323af8796a5e044cdbb8e3045971f01f0d36903ad8b71->leave($__internal_4770327cfd9c3aa5ab2323af8796a5e044cdbb8e3045971f01f0d36903ad8b71_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
