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
        $__internal_ad4df21226ce11f3464db9a40ee690bd04a2d85a5128c2a9f98ffb2fbe251f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4df21226ce11f3464db9a40ee690bd04a2d85a5128c2a9f98ffb2fbe251f83->enter($__internal_ad4df21226ce11f3464db9a40ee690bd04a2d85a5128c2a9f98ffb2fbe251f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_06555ac738ce69dd5762827ebeb52e76f0d3b037201b19f83d9efcc811d4de1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06555ac738ce69dd5762827ebeb52e76f0d3b037201b19f83d9efcc811d4de1d->enter($__internal_06555ac738ce69dd5762827ebeb52e76f0d3b037201b19f83d9efcc811d4de1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad4df21226ce11f3464db9a40ee690bd04a2d85a5128c2a9f98ffb2fbe251f83->leave($__internal_ad4df21226ce11f3464db9a40ee690bd04a2d85a5128c2a9f98ffb2fbe251f83_prof);

        
        $__internal_06555ac738ce69dd5762827ebeb52e76f0d3b037201b19f83d9efcc811d4de1d->leave($__internal_06555ac738ce69dd5762827ebeb52e76f0d3b037201b19f83d9efcc811d4de1d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f018cd9460ff88c1911b279f1eb9e1975c78edee55ac3a228774119c13c8ceab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f018cd9460ff88c1911b279f1eb9e1975c78edee55ac3a228774119c13c8ceab->enter($__internal_f018cd9460ff88c1911b279f1eb9e1975c78edee55ac3a228774119c13c8ceab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a54c7884a3f1d51f1dcd277d4b8d4196432cfb20c1b1681a2eb85d0374b7151d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54c7884a3f1d51f1dcd277d4b8d4196432cfb20c1b1681a2eb85d0374b7151d->enter($__internal_a54c7884a3f1d51f1dcd277d4b8d4196432cfb20c1b1681a2eb85d0374b7151d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a54c7884a3f1d51f1dcd277d4b8d4196432cfb20c1b1681a2eb85d0374b7151d->leave($__internal_a54c7884a3f1d51f1dcd277d4b8d4196432cfb20c1b1681a2eb85d0374b7151d_prof);

        
        $__internal_f018cd9460ff88c1911b279f1eb9e1975c78edee55ac3a228774119c13c8ceab->leave($__internal_f018cd9460ff88c1911b279f1eb9e1975c78edee55ac3a228774119c13c8ceab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_50c4418e4815c19f6ee793a1ad75bb66e708e9593865962f21f279a325c67285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c4418e4815c19f6ee793a1ad75bb66e708e9593865962f21f279a325c67285->enter($__internal_50c4418e4815c19f6ee793a1ad75bb66e708e9593865962f21f279a325c67285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c8323d765d948507e421317483e8b17e6292abe309a923ea01ee07fb6470f982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8323d765d948507e421317483e8b17e6292abe309a923ea01ee07fb6470f982->enter($__internal_c8323d765d948507e421317483e8b17e6292abe309a923ea01ee07fb6470f982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c8323d765d948507e421317483e8b17e6292abe309a923ea01ee07fb6470f982->leave($__internal_c8323d765d948507e421317483e8b17e6292abe309a923ea01ee07fb6470f982_prof);

        
        $__internal_50c4418e4815c19f6ee793a1ad75bb66e708e9593865962f21f279a325c67285->leave($__internal_50c4418e4815c19f6ee793a1ad75bb66e708e9593865962f21f279a325c67285_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1778b6e33813d5ae823612532833a5ebf1e6fb68fc5a380e312a8858957862e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1778b6e33813d5ae823612532833a5ebf1e6fb68fc5a380e312a8858957862e->enter($__internal_c1778b6e33813d5ae823612532833a5ebf1e6fb68fc5a380e312a8858957862e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e2674ae8caf0de6858ea275ebe35ba92c1d8a271a7e44db4d01675307b7c004d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2674ae8caf0de6858ea275ebe35ba92c1d8a271a7e44db4d01675307b7c004d->enter($__internal_e2674ae8caf0de6858ea275ebe35ba92c1d8a271a7e44db4d01675307b7c004d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e2674ae8caf0de6858ea275ebe35ba92c1d8a271a7e44db4d01675307b7c004d->leave($__internal_e2674ae8caf0de6858ea275ebe35ba92c1d8a271a7e44db4d01675307b7c004d_prof);

        
        $__internal_c1778b6e33813d5ae823612532833a5ebf1e6fb68fc5a380e312a8858957862e->leave($__internal_c1778b6e33813d5ae823612532833a5ebf1e6fb68fc5a380e312a8858957862e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
