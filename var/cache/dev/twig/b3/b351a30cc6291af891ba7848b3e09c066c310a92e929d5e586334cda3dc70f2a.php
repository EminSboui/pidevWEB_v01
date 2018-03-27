<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_71769263d1e363eaaf23a7cbd2636f2264c54500a7dc8201e45fa87f75afaf53 extends Twig_Template
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
        $__internal_9c3539e312d56105deead8cc2482f43ec27dc9447c37b68646af11ee21552960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3539e312d56105deead8cc2482f43ec27dc9447c37b68646af11ee21552960->enter($__internal_9c3539e312d56105deead8cc2482f43ec27dc9447c37b68646af11ee21552960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_47625cad170c69cf3dbdc3f71fe2fa7d5b5513147fecc69954233b4c2033652d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47625cad170c69cf3dbdc3f71fe2fa7d5b5513147fecc69954233b4c2033652d->enter($__internal_47625cad170c69cf3dbdc3f71fe2fa7d5b5513147fecc69954233b4c2033652d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c3539e312d56105deead8cc2482f43ec27dc9447c37b68646af11ee21552960->leave($__internal_9c3539e312d56105deead8cc2482f43ec27dc9447c37b68646af11ee21552960_prof);

        
        $__internal_47625cad170c69cf3dbdc3f71fe2fa7d5b5513147fecc69954233b4c2033652d->leave($__internal_47625cad170c69cf3dbdc3f71fe2fa7d5b5513147fecc69954233b4c2033652d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6d1eea68357bc6c6c029c7d68c8c9fa9bfdccccc3a04cdf79446363276ce399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d1eea68357bc6c6c029c7d68c8c9fa9bfdccccc3a04cdf79446363276ce399->enter($__internal_d6d1eea68357bc6c6c029c7d68c8c9fa9bfdccccc3a04cdf79446363276ce399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4e95dee10080d4ae9d2b3c867fea0b09199adbdacf602f2e252c36e76d073d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e95dee10080d4ae9d2b3c867fea0b09199adbdacf602f2e252c36e76d073d2b->enter($__internal_4e95dee10080d4ae9d2b3c867fea0b09199adbdacf602f2e252c36e76d073d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e95dee10080d4ae9d2b3c867fea0b09199adbdacf602f2e252c36e76d073d2b->leave($__internal_4e95dee10080d4ae9d2b3c867fea0b09199adbdacf602f2e252c36e76d073d2b_prof);

        
        $__internal_d6d1eea68357bc6c6c029c7d68c8c9fa9bfdccccc3a04cdf79446363276ce399->leave($__internal_d6d1eea68357bc6c6c029c7d68c8c9fa9bfdccccc3a04cdf79446363276ce399_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d029b309cf5d76055e20bc19bb7aa2b74e4326ba93adc5d4ec67a624fb15ab34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d029b309cf5d76055e20bc19bb7aa2b74e4326ba93adc5d4ec67a624fb15ab34->enter($__internal_d029b309cf5d76055e20bc19bb7aa2b74e4326ba93adc5d4ec67a624fb15ab34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bd4854d6ba7a36b3dcb25dc8552e6782600ada29180e57c15bcb73b6df9d79df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4854d6ba7a36b3dcb25dc8552e6782600ada29180e57c15bcb73b6df9d79df->enter($__internal_bd4854d6ba7a36b3dcb25dc8552e6782600ada29180e57c15bcb73b6df9d79df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd4854d6ba7a36b3dcb25dc8552e6782600ada29180e57c15bcb73b6df9d79df->leave($__internal_bd4854d6ba7a36b3dcb25dc8552e6782600ada29180e57c15bcb73b6df9d79df_prof);

        
        $__internal_d029b309cf5d76055e20bc19bb7aa2b74e4326ba93adc5d4ec67a624fb15ab34->leave($__internal_d029b309cf5d76055e20bc19bb7aa2b74e4326ba93adc5d4ec67a624fb15ab34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d99243d406ab691cac087c3c47cc03087cd5fed5e71286ad75c660e25123db20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99243d406ab691cac087c3c47cc03087cd5fed5e71286ad75c660e25123db20->enter($__internal_d99243d406ab691cac087c3c47cc03087cd5fed5e71286ad75c660e25123db20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6765a1ad88834f84fb995d45c090f3ad4d4913bfd99e2851f6f4699749173bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6765a1ad88834f84fb995d45c090f3ad4d4913bfd99e2851f6f4699749173bb1->enter($__internal_6765a1ad88834f84fb995d45c090f3ad4d4913bfd99e2851f6f4699749173bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6765a1ad88834f84fb995d45c090f3ad4d4913bfd99e2851f6f4699749173bb1->leave($__internal_6765a1ad88834f84fb995d45c090f3ad4d4913bfd99e2851f6f4699749173bb1_prof);

        
        $__internal_d99243d406ab691cac087c3c47cc03087cd5fed5e71286ad75c660e25123db20->leave($__internal_d99243d406ab691cac087c3c47cc03087cd5fed5e71286ad75c660e25123db20_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
