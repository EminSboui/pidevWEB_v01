<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6bdf9b39a6b88486f44de228d2c1505520296a8297e7b1f4bd9d5136c9b3fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39c351b2f4065b6a3a02c9f8aa71c0e16e73602fe6e01da009f2961782703056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c351b2f4065b6a3a02c9f8aa71c0e16e73602fe6e01da009f2961782703056->enter($__internal_39c351b2f4065b6a3a02c9f8aa71c0e16e73602fe6e01da009f2961782703056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_976a2d394b82f820f524e49f02902acf934d53d99230fc0cc81bb193b1ae3fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976a2d394b82f820f524e49f02902acf934d53d99230fc0cc81bb193b1ae3fa7->enter($__internal_976a2d394b82f820f524e49f02902acf934d53d99230fc0cc81bb193b1ae3fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c351b2f4065b6a3a02c9f8aa71c0e16e73602fe6e01da009f2961782703056->leave($__internal_39c351b2f4065b6a3a02c9f8aa71c0e16e73602fe6e01da009f2961782703056_prof);

        
        $__internal_976a2d394b82f820f524e49f02902acf934d53d99230fc0cc81bb193b1ae3fa7->leave($__internal_976a2d394b82f820f524e49f02902acf934d53d99230fc0cc81bb193b1ae3fa7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01b94361bca6097d2740e9d7b8acb1dfe2bcce2c026903786cbc018737c7677c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b94361bca6097d2740e9d7b8acb1dfe2bcce2c026903786cbc018737c7677c->enter($__internal_01b94361bca6097d2740e9d7b8acb1dfe2bcce2c026903786cbc018737c7677c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4fd69fb3a4614299cd978debfdb5b2895a88781a2a2407a20459bf936a57af1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd69fb3a4614299cd978debfdb5b2895a88781a2a2407a20459bf936a57af1f->enter($__internal_4fd69fb3a4614299cd978debfdb5b2895a88781a2a2407a20459bf936a57af1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4fd69fb3a4614299cd978debfdb5b2895a88781a2a2407a20459bf936a57af1f->leave($__internal_4fd69fb3a4614299cd978debfdb5b2895a88781a2a2407a20459bf936a57af1f_prof);

        
        $__internal_01b94361bca6097d2740e9d7b8acb1dfe2bcce2c026903786cbc018737c7677c->leave($__internal_01b94361bca6097d2740e9d7b8acb1dfe2bcce2c026903786cbc018737c7677c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2da9d32f90ab0901d1536be4b720eea07e2adb73447e5b989eeb6683a3f2053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2da9d32f90ab0901d1536be4b720eea07e2adb73447e5b989eeb6683a3f2053->enter($__internal_e2da9d32f90ab0901d1536be4b720eea07e2adb73447e5b989eeb6683a3f2053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_05d7981733b7e2384d8724ee241d486a2908135987db09913bb368b7e5eb7876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d7981733b7e2384d8724ee241d486a2908135987db09913bb368b7e5eb7876->enter($__internal_05d7981733b7e2384d8724ee241d486a2908135987db09913bb368b7e5eb7876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_05d7981733b7e2384d8724ee241d486a2908135987db09913bb368b7e5eb7876->leave($__internal_05d7981733b7e2384d8724ee241d486a2908135987db09913bb368b7e5eb7876_prof);

        
        $__internal_e2da9d32f90ab0901d1536be4b720eea07e2adb73447e5b989eeb6683a3f2053->leave($__internal_e2da9d32f90ab0901d1536be4b720eea07e2adb73447e5b989eeb6683a3f2053_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02e07d0fe8f698a9e7a9bb1c3ce908a2ce096f8b231d21e9af2237580cd91219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e07d0fe8f698a9e7a9bb1c3ce908a2ce096f8b231d21e9af2237580cd91219->enter($__internal_02e07d0fe8f698a9e7a9bb1c3ce908a2ce096f8b231d21e9af2237580cd91219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_356b6ff4c00190f1f5313a4bffc5338fe9042d3cdf5bff8edea3958bc0d7d803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356b6ff4c00190f1f5313a4bffc5338fe9042d3cdf5bff8edea3958bc0d7d803->enter($__internal_356b6ff4c00190f1f5313a4bffc5338fe9042d3cdf5bff8edea3958bc0d7d803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_356b6ff4c00190f1f5313a4bffc5338fe9042d3cdf5bff8edea3958bc0d7d803->leave($__internal_356b6ff4c00190f1f5313a4bffc5338fe9042d3cdf5bff8edea3958bc0d7d803_prof);

        
        $__internal_02e07d0fe8f698a9e7a9bb1c3ce908a2ce096f8b231d21e9af2237580cd91219->leave($__internal_02e07d0fe8f698a9e7a9bb1c3ce908a2ce096f8b231d21e9af2237580cd91219_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
