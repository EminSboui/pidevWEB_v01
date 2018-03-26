<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce5e298ea7c566ba912d0cb4d5695f690b63e95c6189996a45de6c3ac1516709 extends Twig_Template
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
        $__internal_ce83d85cba23701fef8ffd777ce8ed8c3e34ccb47dfdc37610bd2d175623efa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce83d85cba23701fef8ffd777ce8ed8c3e34ccb47dfdc37610bd2d175623efa7->enter($__internal_ce83d85cba23701fef8ffd777ce8ed8c3e34ccb47dfdc37610bd2d175623efa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e440ba48225a0cc48b060d42d31624b7d49ef04e46553d3f44ef4df9378acc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e440ba48225a0cc48b060d42d31624b7d49ef04e46553d3f44ef4df9378acc62->enter($__internal_e440ba48225a0cc48b060d42d31624b7d49ef04e46553d3f44ef4df9378acc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce83d85cba23701fef8ffd777ce8ed8c3e34ccb47dfdc37610bd2d175623efa7->leave($__internal_ce83d85cba23701fef8ffd777ce8ed8c3e34ccb47dfdc37610bd2d175623efa7_prof);

        
        $__internal_e440ba48225a0cc48b060d42d31624b7d49ef04e46553d3f44ef4df9378acc62->leave($__internal_e440ba48225a0cc48b060d42d31624b7d49ef04e46553d3f44ef4df9378acc62_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2164cd02d94088ea2e94ad3f40e5f2b10d70c9075eb3d6cef73d0173a3ea945d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2164cd02d94088ea2e94ad3f40e5f2b10d70c9075eb3d6cef73d0173a3ea945d->enter($__internal_2164cd02d94088ea2e94ad3f40e5f2b10d70c9075eb3d6cef73d0173a3ea945d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49d05ebeea64acb815dd20a26799b2b4f446c6fe7b2d0655706449d4d9327c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d05ebeea64acb815dd20a26799b2b4f446c6fe7b2d0655706449d4d9327c90->enter($__internal_49d05ebeea64acb815dd20a26799b2b4f446c6fe7b2d0655706449d4d9327c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_49d05ebeea64acb815dd20a26799b2b4f446c6fe7b2d0655706449d4d9327c90->leave($__internal_49d05ebeea64acb815dd20a26799b2b4f446c6fe7b2d0655706449d4d9327c90_prof);

        
        $__internal_2164cd02d94088ea2e94ad3f40e5f2b10d70c9075eb3d6cef73d0173a3ea945d->leave($__internal_2164cd02d94088ea2e94ad3f40e5f2b10d70c9075eb3d6cef73d0173a3ea945d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82b35c83e9a2ddef10b98ea3266d270cbcd1bb7834c2b047cc21f53101122c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b35c83e9a2ddef10b98ea3266d270cbcd1bb7834c2b047cc21f53101122c2a->enter($__internal_82b35c83e9a2ddef10b98ea3266d270cbcd1bb7834c2b047cc21f53101122c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9abb437957a6c87a4cc91f64cd06843d46c0bf30488fab27ae0c37f2388951ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abb437957a6c87a4cc91f64cd06843d46c0bf30488fab27ae0c37f2388951ca->enter($__internal_9abb437957a6c87a4cc91f64cd06843d46c0bf30488fab27ae0c37f2388951ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9abb437957a6c87a4cc91f64cd06843d46c0bf30488fab27ae0c37f2388951ca->leave($__internal_9abb437957a6c87a4cc91f64cd06843d46c0bf30488fab27ae0c37f2388951ca_prof);

        
        $__internal_82b35c83e9a2ddef10b98ea3266d270cbcd1bb7834c2b047cc21f53101122c2a->leave($__internal_82b35c83e9a2ddef10b98ea3266d270cbcd1bb7834c2b047cc21f53101122c2a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e329579b341c6a259ac7aa24c4a981c1d8903e8bbfdefb50c1e172f6241bb929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e329579b341c6a259ac7aa24c4a981c1d8903e8bbfdefb50c1e172f6241bb929->enter($__internal_e329579b341c6a259ac7aa24c4a981c1d8903e8bbfdefb50c1e172f6241bb929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fddd8e21fd88fe913dc2e2f725eb6b4a99b8b0c4f18329dd22f1255522826dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddd8e21fd88fe913dc2e2f725eb6b4a99b8b0c4f18329dd22f1255522826dcd->enter($__internal_fddd8e21fd88fe913dc2e2f725eb6b4a99b8b0c4f18329dd22f1255522826dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fddd8e21fd88fe913dc2e2f725eb6b4a99b8b0c4f18329dd22f1255522826dcd->leave($__internal_fddd8e21fd88fe913dc2e2f725eb6b4a99b8b0c4f18329dd22f1255522826dcd_prof);

        
        $__internal_e329579b341c6a259ac7aa24c4a981c1d8903e8bbfdefb50c1e172f6241bb929->leave($__internal_e329579b341c6a259ac7aa24c4a981c1d8903e8bbfdefb50c1e172f6241bb929_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
