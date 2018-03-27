<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_540d7bd5d73dbd8cbd39b6cbfaca33b8c7205530a4205dd59717846f1bbf0ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540d7bd5d73dbd8cbd39b6cbfaca33b8c7205530a4205dd59717846f1bbf0ede->enter($__internal_540d7bd5d73dbd8cbd39b6cbfaca33b8c7205530a4205dd59717846f1bbf0ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_721e71d4205cc4f7ae3641934907fcb3d76ed99f91ac828b05c8b4a98beb3c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721e71d4205cc4f7ae3641934907fcb3d76ed99f91ac828b05c8b4a98beb3c50->enter($__internal_721e71d4205cc4f7ae3641934907fcb3d76ed99f91ac828b05c8b4a98beb3c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_540d7bd5d73dbd8cbd39b6cbfaca33b8c7205530a4205dd59717846f1bbf0ede->leave($__internal_540d7bd5d73dbd8cbd39b6cbfaca33b8c7205530a4205dd59717846f1bbf0ede_prof);

        
        $__internal_721e71d4205cc4f7ae3641934907fcb3d76ed99f91ac828b05c8b4a98beb3c50->leave($__internal_721e71d4205cc4f7ae3641934907fcb3d76ed99f91ac828b05c8b4a98beb3c50_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff81439c254cc87b7f6a02686d54f24837ff03b7d2b29f95ca54a383e7394d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff81439c254cc87b7f6a02686d54f24837ff03b7d2b29f95ca54a383e7394d06->enter($__internal_ff81439c254cc87b7f6a02686d54f24837ff03b7d2b29f95ca54a383e7394d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ddbfac1cb822429b632171531347d760ff1be1a76c8b2f7d7af643d405e710dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbfac1cb822429b632171531347d760ff1be1a76c8b2f7d7af643d405e710dd->enter($__internal_ddbfac1cb822429b632171531347d760ff1be1a76c8b2f7d7af643d405e710dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ddbfac1cb822429b632171531347d760ff1be1a76c8b2f7d7af643d405e710dd->leave($__internal_ddbfac1cb822429b632171531347d760ff1be1a76c8b2f7d7af643d405e710dd_prof);

        
        $__internal_ff81439c254cc87b7f6a02686d54f24837ff03b7d2b29f95ca54a383e7394d06->leave($__internal_ff81439c254cc87b7f6a02686d54f24837ff03b7d2b29f95ca54a383e7394d06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22961b575a32d908ee09c9ebfeb57aa717f10108b9731a9f6054c825bdc234a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22961b575a32d908ee09c9ebfeb57aa717f10108b9731a9f6054c825bdc234a5->enter($__internal_22961b575a32d908ee09c9ebfeb57aa717f10108b9731a9f6054c825bdc234a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9b4fad6d426b5a2306ab00dbff2d565f8555c8b836b9e4e244057ca9992729cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4fad6d426b5a2306ab00dbff2d565f8555c8b836b9e4e244057ca9992729cf->enter($__internal_9b4fad6d426b5a2306ab00dbff2d565f8555c8b836b9e4e244057ca9992729cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9b4fad6d426b5a2306ab00dbff2d565f8555c8b836b9e4e244057ca9992729cf->leave($__internal_9b4fad6d426b5a2306ab00dbff2d565f8555c8b836b9e4e244057ca9992729cf_prof);

        
        $__internal_22961b575a32d908ee09c9ebfeb57aa717f10108b9731a9f6054c825bdc234a5->leave($__internal_22961b575a32d908ee09c9ebfeb57aa717f10108b9731a9f6054c825bdc234a5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cee033008bc61b99354129e3b90491ce12017b3d2f208825429a9d249be8102b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee033008bc61b99354129e3b90491ce12017b3d2f208825429a9d249be8102b->enter($__internal_cee033008bc61b99354129e3b90491ce12017b3d2f208825429a9d249be8102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_271707051bba4192ac5fe8db036e7df9497fe0dd15c521a1b72bb7ad2a4e168f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271707051bba4192ac5fe8db036e7df9497fe0dd15c521a1b72bb7ad2a4e168f->enter($__internal_271707051bba4192ac5fe8db036e7df9497fe0dd15c521a1b72bb7ad2a4e168f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_271707051bba4192ac5fe8db036e7df9497fe0dd15c521a1b72bb7ad2a4e168f->leave($__internal_271707051bba4192ac5fe8db036e7df9497fe0dd15c521a1b72bb7ad2a4e168f_prof);

        
        $__internal_cee033008bc61b99354129e3b90491ce12017b3d2f208825429a9d249be8102b->leave($__internal_cee033008bc61b99354129e3b90491ce12017b3d2f208825429a9d249be8102b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\pidevWEB_v1.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
