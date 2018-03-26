<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e2d81854e0f2b4224b6fa5b73e4718848477fea0e157b9426de63eb5e51e4dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_21baf341a33e3d65e0d3a9b2dd5fcd0609cd490178d76a3226b0766982907dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21baf341a33e3d65e0d3a9b2dd5fcd0609cd490178d76a3226b0766982907dc1->enter($__internal_21baf341a33e3d65e0d3a9b2dd5fcd0609cd490178d76a3226b0766982907dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c40f3431efdbf507e223ec7e421a1fa251af7df9376e226f1d717e1cf3d89031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40f3431efdbf507e223ec7e421a1fa251af7df9376e226f1d717e1cf3d89031->enter($__internal_c40f3431efdbf507e223ec7e421a1fa251af7df9376e226f1d717e1cf3d89031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21baf341a33e3d65e0d3a9b2dd5fcd0609cd490178d76a3226b0766982907dc1->leave($__internal_21baf341a33e3d65e0d3a9b2dd5fcd0609cd490178d76a3226b0766982907dc1_prof);

        
        $__internal_c40f3431efdbf507e223ec7e421a1fa251af7df9376e226f1d717e1cf3d89031->leave($__internal_c40f3431efdbf507e223ec7e421a1fa251af7df9376e226f1d717e1cf3d89031_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a54d34bd3f4c3c97277dccac7f87e3c5395364d4003ff065794cd58853e2de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a54d34bd3f4c3c97277dccac7f87e3c5395364d4003ff065794cd58853e2de6->enter($__internal_4a54d34bd3f4c3c97277dccac7f87e3c5395364d4003ff065794cd58853e2de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a24bf5bd07468888c149e773ad107b53261e02cfd2eb0eb1bae8ca5726a75f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24bf5bd07468888c149e773ad107b53261e02cfd2eb0eb1bae8ca5726a75f0d->enter($__internal_a24bf5bd07468888c149e773ad107b53261e02cfd2eb0eb1bae8ca5726a75f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a24bf5bd07468888c149e773ad107b53261e02cfd2eb0eb1bae8ca5726a75f0d->leave($__internal_a24bf5bd07468888c149e773ad107b53261e02cfd2eb0eb1bae8ca5726a75f0d_prof);

        
        $__internal_4a54d34bd3f4c3c97277dccac7f87e3c5395364d4003ff065794cd58853e2de6->leave($__internal_4a54d34bd3f4c3c97277dccac7f87e3c5395364d4003ff065794cd58853e2de6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f3243761d4a7fdf0cdd35e946aeca8bebf7c91ec5b838c2b51524ec99e2b60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3243761d4a7fdf0cdd35e946aeca8bebf7c91ec5b838c2b51524ec99e2b60e->enter($__internal_2f3243761d4a7fdf0cdd35e946aeca8bebf7c91ec5b838c2b51524ec99e2b60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f98751226884ae3194d7530071fdfa8eecf9aa14f437e82bac2f723b7f43bfe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98751226884ae3194d7530071fdfa8eecf9aa14f437e82bac2f723b7f43bfe0->enter($__internal_f98751226884ae3194d7530071fdfa8eecf9aa14f437e82bac2f723b7f43bfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f98751226884ae3194d7530071fdfa8eecf9aa14f437e82bac2f723b7f43bfe0->leave($__internal_f98751226884ae3194d7530071fdfa8eecf9aa14f437e82bac2f723b7f43bfe0_prof);

        
        $__internal_2f3243761d4a7fdf0cdd35e946aeca8bebf7c91ec5b838c2b51524ec99e2b60e->leave($__internal_2f3243761d4a7fdf0cdd35e946aeca8bebf7c91ec5b838c2b51524ec99e2b60e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c774d7aeeeddf57d7288075289b84fe37bcabd80d760068f877b25138ff187fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c774d7aeeeddf57d7288075289b84fe37bcabd80d760068f877b25138ff187fc->enter($__internal_c774d7aeeeddf57d7288075289b84fe37bcabd80d760068f877b25138ff187fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a46a329ffd1ff4049cebcd07add66b9930327da30598b7cd6935dcf4313574b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a46a329ffd1ff4049cebcd07add66b9930327da30598b7cd6935dcf4313574b->enter($__internal_8a46a329ffd1ff4049cebcd07add66b9930327da30598b7cd6935dcf4313574b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8a46a329ffd1ff4049cebcd07add66b9930327da30598b7cd6935dcf4313574b->leave($__internal_8a46a329ffd1ff4049cebcd07add66b9930327da30598b7cd6935dcf4313574b_prof);

        
        $__internal_c774d7aeeeddf57d7288075289b84fe37bcabd80d760068f877b25138ff187fc->leave($__internal_c774d7aeeeddf57d7288075289b84fe37bcabd80d760068f877b25138ff187fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
