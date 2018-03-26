<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_73291bcae944ac67d22c6a2acfa91d465663bc34485bb7456728039ca12bdf64 extends Twig_Template
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
        $__internal_1e70dd0be704d975e6925e79f729adc51377cb5bc4e6500dcfb16a4f370aafb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e70dd0be704d975e6925e79f729adc51377cb5bc4e6500dcfb16a4f370aafb6->enter($__internal_1e70dd0be704d975e6925e79f729adc51377cb5bc4e6500dcfb16a4f370aafb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_bed1cd5cf07184b4ba0a9780c42d57ab7425e36ac4684b58b03f99decca30e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed1cd5cf07184b4ba0a9780c42d57ab7425e36ac4684b58b03f99decca30e3a->enter($__internal_bed1cd5cf07184b4ba0a9780c42d57ab7425e36ac4684b58b03f99decca30e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_1e70dd0be704d975e6925e79f729adc51377cb5bc4e6500dcfb16a4f370aafb6->leave($__internal_1e70dd0be704d975e6925e79f729adc51377cb5bc4e6500dcfb16a4f370aafb6_prof);

        
        $__internal_bed1cd5cf07184b4ba0a9780c42d57ab7425e36ac4684b58b03f99decca30e3a->leave($__internal_bed1cd5cf07184b4ba0a9780c42d57ab7425e36ac4684b58b03f99decca30e3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
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
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
