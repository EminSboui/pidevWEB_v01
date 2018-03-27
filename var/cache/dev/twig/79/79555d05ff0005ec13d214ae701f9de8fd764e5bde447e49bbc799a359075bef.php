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
        $__internal_4394f8c0a2aff38cea8a98e4bda7511adab71e92c1f7eab1569b682af0dc8275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4394f8c0a2aff38cea8a98e4bda7511adab71e92c1f7eab1569b682af0dc8275->enter($__internal_4394f8c0a2aff38cea8a98e4bda7511adab71e92c1f7eab1569b682af0dc8275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cf3da1eab6dd75cf2cee5a58c8b9b16185067e1493b63fcb0a66dd3f9bab96fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3da1eab6dd75cf2cee5a58c8b9b16185067e1493b63fcb0a66dd3f9bab96fd->enter($__internal_cf3da1eab6dd75cf2cee5a58c8b9b16185067e1493b63fcb0a66dd3f9bab96fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4394f8c0a2aff38cea8a98e4bda7511adab71e92c1f7eab1569b682af0dc8275->leave($__internal_4394f8c0a2aff38cea8a98e4bda7511adab71e92c1f7eab1569b682af0dc8275_prof);

        
        $__internal_cf3da1eab6dd75cf2cee5a58c8b9b16185067e1493b63fcb0a66dd3f9bab96fd->leave($__internal_cf3da1eab6dd75cf2cee5a58c8b9b16185067e1493b63fcb0a66dd3f9bab96fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_145d5e3ab44bf98f4a6c3fa98378e9754799dd16be64fafeb4d3d4506513aeff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145d5e3ab44bf98f4a6c3fa98378e9754799dd16be64fafeb4d3d4506513aeff->enter($__internal_145d5e3ab44bf98f4a6c3fa98378e9754799dd16be64fafeb4d3d4506513aeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a25b64518d780cac25909f349ac661ae5fb7b213126a7ea817a4c74cbd40dfde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25b64518d780cac25909f349ac661ae5fb7b213126a7ea817a4c74cbd40dfde->enter($__internal_a25b64518d780cac25909f349ac661ae5fb7b213126a7ea817a4c74cbd40dfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a25b64518d780cac25909f349ac661ae5fb7b213126a7ea817a4c74cbd40dfde->leave($__internal_a25b64518d780cac25909f349ac661ae5fb7b213126a7ea817a4c74cbd40dfde_prof);

        
        $__internal_145d5e3ab44bf98f4a6c3fa98378e9754799dd16be64fafeb4d3d4506513aeff->leave($__internal_145d5e3ab44bf98f4a6c3fa98378e9754799dd16be64fafeb4d3d4506513aeff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1d56ccbca0d57c3b39c01be468905c78b16db11699abdf578f95968c4af88c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d56ccbca0d57c3b39c01be468905c78b16db11699abdf578f95968c4af88c0->enter($__internal_e1d56ccbca0d57c3b39c01be468905c78b16db11699abdf578f95968c4af88c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b94b2438da934c11b76af1198b7c99547efe62a43fbf57c2adfe2effe706d60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94b2438da934c11b76af1198b7c99547efe62a43fbf57c2adfe2effe706d60b->enter($__internal_b94b2438da934c11b76af1198b7c99547efe62a43fbf57c2adfe2effe706d60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b94b2438da934c11b76af1198b7c99547efe62a43fbf57c2adfe2effe706d60b->leave($__internal_b94b2438da934c11b76af1198b7c99547efe62a43fbf57c2adfe2effe706d60b_prof);

        
        $__internal_e1d56ccbca0d57c3b39c01be468905c78b16db11699abdf578f95968c4af88c0->leave($__internal_e1d56ccbca0d57c3b39c01be468905c78b16db11699abdf578f95968c4af88c0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa9068e7083329fd18b1c6ca8819fda768f4fd7105fb2049471c4ab6e24e9abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9068e7083329fd18b1c6ca8819fda768f4fd7105fb2049471c4ab6e24e9abc->enter($__internal_aa9068e7083329fd18b1c6ca8819fda768f4fd7105fb2049471c4ab6e24e9abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8bc7958c56ee516aa6590068db3a976a1be555313f4d25fa3bf4aeefaf27fccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc7958c56ee516aa6590068db3a976a1be555313f4d25fa3bf4aeefaf27fccf->enter($__internal_8bc7958c56ee516aa6590068db3a976a1be555313f4d25fa3bf4aeefaf27fccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8bc7958c56ee516aa6590068db3a976a1be555313f4d25fa3bf4aeefaf27fccf->leave($__internal_8bc7958c56ee516aa6590068db3a976a1be555313f4d25fa3bf4aeefaf27fccf_prof);

        
        $__internal_aa9068e7083329fd18b1c6ca8819fda768f4fd7105fb2049471c4ab6e24e9abc->leave($__internal_aa9068e7083329fd18b1c6ca8819fda768f4fd7105fb2049471c4ab6e24e9abc_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\pidevWEB_v1.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
