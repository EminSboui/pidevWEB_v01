<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_62cfe270d0ab74f4ededfa675130c0cf85d52452cfc091181ac197ab0a0efa99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbf5c580670e96469a08b0f52872d348d05c4a7daf4f13fdcdad725c4054f0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf5c580670e96469a08b0f52872d348d05c4a7daf4f13fdcdad725c4054f0d4->enter($__internal_dbf5c580670e96469a08b0f52872d348d05c4a7daf4f13fdcdad725c4054f0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_6f468f6e27e62d623df11801e1431f3cb118925a2630890b58a9edbc26d6a879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f468f6e27e62d623df11801e1431f3cb118925a2630890b58a9edbc26d6a879->enter($__internal_6f468f6e27e62d623df11801e1431f3cb118925a2630890b58a9edbc26d6a879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf5c580670e96469a08b0f52872d348d05c4a7daf4f13fdcdad725c4054f0d4->leave($__internal_dbf5c580670e96469a08b0f52872d348d05c4a7daf4f13fdcdad725c4054f0d4_prof);

        
        $__internal_6f468f6e27e62d623df11801e1431f3cb118925a2630890b58a9edbc26d6a879->leave($__internal_6f468f6e27e62d623df11801e1431f3cb118925a2630890b58a9edbc26d6a879_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_120f827ac17baa5678c7bf77b6bb8c740423aba663a160cfa3e70e0106e742f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120f827ac17baa5678c7bf77b6bb8c740423aba663a160cfa3e70e0106e742f5->enter($__internal_120f827ac17baa5678c7bf77b6bb8c740423aba663a160cfa3e70e0106e742f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac852aebd8a9a7365f39f0d0ea2fc21e63ae3ce992469f02196f258a82625a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac852aebd8a9a7365f39f0d0ea2fc21e63ae3ce992469f02196f258a82625a74->enter($__internal_ac852aebd8a9a7365f39f0d0ea2fc21e63ae3ce992469f02196f258a82625a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ac852aebd8a9a7365f39f0d0ea2fc21e63ae3ce992469f02196f258a82625a74->leave($__internal_ac852aebd8a9a7365f39f0d0ea2fc21e63ae3ce992469f02196f258a82625a74_prof);

        
        $__internal_120f827ac17baa5678c7bf77b6bb8c740423aba663a160cfa3e70e0106e742f5->leave($__internal_120f827ac17baa5678c7bf77b6bb8c740423aba663a160cfa3e70e0106e742f5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_827c3df6fc9678e248ba57ae8c5fca846f902ed882a67ea645395cdbe7c5575a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827c3df6fc9678e248ba57ae8c5fca846f902ed882a67ea645395cdbe7c5575a->enter($__internal_827c3df6fc9678e248ba57ae8c5fca846f902ed882a67ea645395cdbe7c5575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93ca4c8e0d4ff1bdd485f072ec9f49a4491a77d4b165c4639973fcb66729235b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ca4c8e0d4ff1bdd485f072ec9f49a4491a77d4b165c4639973fcb66729235b->enter($__internal_93ca4c8e0d4ff1bdd485f072ec9f49a4491a77d4b165c4639973fcb66729235b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93ca4c8e0d4ff1bdd485f072ec9f49a4491a77d4b165c4639973fcb66729235b->leave($__internal_93ca4c8e0d4ff1bdd485f072ec9f49a4491a77d4b165c4639973fcb66729235b_prof);

        
        $__internal_827c3df6fc9678e248ba57ae8c5fca846f902ed882a67ea645395cdbe7c5575a->leave($__internal_827c3df6fc9678e248ba57ae8c5fca846f902ed882a67ea645395cdbe7c5575a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a2b08f96aef0f99b4e7c5c5e7c8cfcddb98f91890154d9bdfc614ea0370c8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2b08f96aef0f99b4e7c5c5e7c8cfcddb98f91890154d9bdfc614ea0370c8ee->enter($__internal_2a2b08f96aef0f99b4e7c5c5e7c8cfcddb98f91890154d9bdfc614ea0370c8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9bdfeecd6d867d5177e84cac936de48a517452778bd1a5caa41a6edb316e6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bdfeecd6d867d5177e84cac936de48a517452778bd1a5caa41a6edb316e6bf->enter($__internal_c9bdfeecd6d867d5177e84cac936de48a517452778bd1a5caa41a6edb316e6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c9bdfeecd6d867d5177e84cac936de48a517452778bd1a5caa41a6edb316e6bf->leave($__internal_c9bdfeecd6d867d5177e84cac936de48a517452778bd1a5caa41a6edb316e6bf_prof);

        
        $__internal_2a2b08f96aef0f99b4e7c5c5e7c8cfcddb98f91890154d9bdfc614ea0370c8ee->leave($__internal_2a2b08f96aef0f99b4e7c5c5e7c8cfcddb98f91890154d9bdfc614ea0370c8ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
