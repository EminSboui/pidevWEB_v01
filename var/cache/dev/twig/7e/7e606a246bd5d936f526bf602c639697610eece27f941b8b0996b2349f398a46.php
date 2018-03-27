<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c0f22ddf826890995c19beac597d7b00b016908833b85e2e330d2b31c404d2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_28352944e76c636455ea246dfb33828b1c54862950ab2b99337dacc0dc2eacef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28352944e76c636455ea246dfb33828b1c54862950ab2b99337dacc0dc2eacef->enter($__internal_28352944e76c636455ea246dfb33828b1c54862950ab2b99337dacc0dc2eacef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2f4925de1677a2992ea8b4fa6e85499cfe7e6d8c2ea5be84ea55f2c8318e8f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4925de1677a2992ea8b4fa6e85499cfe7e6d8c2ea5be84ea55f2c8318e8f49->enter($__internal_2f4925de1677a2992ea8b4fa6e85499cfe7e6d8c2ea5be84ea55f2c8318e8f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28352944e76c636455ea246dfb33828b1c54862950ab2b99337dacc0dc2eacef->leave($__internal_28352944e76c636455ea246dfb33828b1c54862950ab2b99337dacc0dc2eacef_prof);

        
        $__internal_2f4925de1677a2992ea8b4fa6e85499cfe7e6d8c2ea5be84ea55f2c8318e8f49->leave($__internal_2f4925de1677a2992ea8b4fa6e85499cfe7e6d8c2ea5be84ea55f2c8318e8f49_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea190b53d42c82dfe42f7ab81d1f8db1e24dfa23ca78c224a8d15ce7d6233f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea190b53d42c82dfe42f7ab81d1f8db1e24dfa23ca78c224a8d15ce7d6233f7d->enter($__internal_ea190b53d42c82dfe42f7ab81d1f8db1e24dfa23ca78c224a8d15ce7d6233f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_50d86c1cdf81bcdf8735fb4cb90d7b78e8879332c521eacf25a7a4301dde4b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d86c1cdf81bcdf8735fb4cb90d7b78e8879332c521eacf25a7a4301dde4b6c->enter($__internal_50d86c1cdf81bcdf8735fb4cb90d7b78e8879332c521eacf25a7a4301dde4b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_50d86c1cdf81bcdf8735fb4cb90d7b78e8879332c521eacf25a7a4301dde4b6c->leave($__internal_50d86c1cdf81bcdf8735fb4cb90d7b78e8879332c521eacf25a7a4301dde4b6c_prof);

        
        $__internal_ea190b53d42c82dfe42f7ab81d1f8db1e24dfa23ca78c224a8d15ce7d6233f7d->leave($__internal_ea190b53d42c82dfe42f7ab81d1f8db1e24dfa23ca78c224a8d15ce7d6233f7d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce423f0178c3502aa735e08a218a57543c485f8aa5498f036823ce540ce82aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce423f0178c3502aa735e08a218a57543c485f8aa5498f036823ce540ce82aae->enter($__internal_ce423f0178c3502aa735e08a218a57543c485f8aa5498f036823ce540ce82aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c5c546d0207a56127cf6e8f422c2e78129890c492ab2849bb7162de2509fdb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5c546d0207a56127cf6e8f422c2e78129890c492ab2849bb7162de2509fdb0->enter($__internal_6c5c546d0207a56127cf6e8f422c2e78129890c492ab2849bb7162de2509fdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6c5c546d0207a56127cf6e8f422c2e78129890c492ab2849bb7162de2509fdb0->leave($__internal_6c5c546d0207a56127cf6e8f422c2e78129890c492ab2849bb7162de2509fdb0_prof);

        
        $__internal_ce423f0178c3502aa735e08a218a57543c485f8aa5498f036823ce540ce82aae->leave($__internal_ce423f0178c3502aa735e08a218a57543c485f8aa5498f036823ce540ce82aae_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d92760a85d9b260b6454210d2cb4eafcb38bdeb78b226f53a110ca122d066416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92760a85d9b260b6454210d2cb4eafcb38bdeb78b226f53a110ca122d066416->enter($__internal_d92760a85d9b260b6454210d2cb4eafcb38bdeb78b226f53a110ca122d066416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d9a26d263c6ebe37eaa20a9316aef4df7551da0738739fd2ce16de2ec5e29e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a26d263c6ebe37eaa20a9316aef4df7551da0738739fd2ce16de2ec5e29e17->enter($__internal_d9a26d263c6ebe37eaa20a9316aef4df7551da0738739fd2ce16de2ec5e29e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d9a26d263c6ebe37eaa20a9316aef4df7551da0738739fd2ce16de2ec5e29e17->leave($__internal_d9a26d263c6ebe37eaa20a9316aef4df7551da0738739fd2ce16de2ec5e29e17_prof);

        
        $__internal_d92760a85d9b260b6454210d2cb4eafcb38bdeb78b226f53a110ca122d066416->leave($__internal_d92760a85d9b260b6454210d2cb4eafcb38bdeb78b226f53a110ca122d066416_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
