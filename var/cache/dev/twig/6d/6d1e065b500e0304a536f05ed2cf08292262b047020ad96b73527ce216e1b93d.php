<?php

/* ::base.html.twig */
class __TwigTemplate_f26296c38a436925b47db7e16faab5d777f1d4b8d38a5c7c756130acd737287c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7450cef9dac6eacaa9ae4154d5c8c8eaf398f8e4d83267b078e934de1459df28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7450cef9dac6eacaa9ae4154d5c8c8eaf398f8e4d83267b078e934de1459df28->enter($__internal_7450cef9dac6eacaa9ae4154d5c8c8eaf398f8e4d83267b078e934de1459df28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_96310b46a15b5513f552e60f863eb4ae7a06cad7d273da1aac8b86494210769c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96310b46a15b5513f552e60f863eb4ae7a06cad7d273da1aac8b86494210769c->enter($__internal_96310b46a15b5513f552e60f863eb4ae7a06cad7d273da1aac8b86494210769c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7450cef9dac6eacaa9ae4154d5c8c8eaf398f8e4d83267b078e934de1459df28->leave($__internal_7450cef9dac6eacaa9ae4154d5c8c8eaf398f8e4d83267b078e934de1459df28_prof);

        
        $__internal_96310b46a15b5513f552e60f863eb4ae7a06cad7d273da1aac8b86494210769c->leave($__internal_96310b46a15b5513f552e60f863eb4ae7a06cad7d273da1aac8b86494210769c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2aeca1c73523d24fa12c43eaf0c207185ccb23a93f9975ef7d80112529fcee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2aeca1c73523d24fa12c43eaf0c207185ccb23a93f9975ef7d80112529fcee8->enter($__internal_f2aeca1c73523d24fa12c43eaf0c207185ccb23a93f9975ef7d80112529fcee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_135639558338a684a6178dd79ad29d6c1f9efdb34fb01172c8d4f482ade75ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135639558338a684a6178dd79ad29d6c1f9efdb34fb01172c8d4f482ade75ca7->enter($__internal_135639558338a684a6178dd79ad29d6c1f9efdb34fb01172c8d4f482ade75ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_135639558338a684a6178dd79ad29d6c1f9efdb34fb01172c8d4f482ade75ca7->leave($__internal_135639558338a684a6178dd79ad29d6c1f9efdb34fb01172c8d4f482ade75ca7_prof);

        
        $__internal_f2aeca1c73523d24fa12c43eaf0c207185ccb23a93f9975ef7d80112529fcee8->leave($__internal_f2aeca1c73523d24fa12c43eaf0c207185ccb23a93f9975ef7d80112529fcee8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f58941bacca90a35766726d61488b03da0d87776418970408d919d06e301d6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58941bacca90a35766726d61488b03da0d87776418970408d919d06e301d6be->enter($__internal_f58941bacca90a35766726d61488b03da0d87776418970408d919d06e301d6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_29c156f62a86dfa59ec29a46048364a1f14f10adb4e79026072a0a78391d55d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c156f62a86dfa59ec29a46048364a1f14f10adb4e79026072a0a78391d55d0->enter($__internal_29c156f62a86dfa59ec29a46048364a1f14f10adb4e79026072a0a78391d55d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_29c156f62a86dfa59ec29a46048364a1f14f10adb4e79026072a0a78391d55d0->leave($__internal_29c156f62a86dfa59ec29a46048364a1f14f10adb4e79026072a0a78391d55d0_prof);

        
        $__internal_f58941bacca90a35766726d61488b03da0d87776418970408d919d06e301d6be->leave($__internal_f58941bacca90a35766726d61488b03da0d87776418970408d919d06e301d6be_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ee3c09edd32c3b4cb0b319b335eb34890870b36617cd01a578b3a673d9e5381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee3c09edd32c3b4cb0b319b335eb34890870b36617cd01a578b3a673d9e5381->enter($__internal_9ee3c09edd32c3b4cb0b319b335eb34890870b36617cd01a578b3a673d9e5381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_299a0a4160d929940f12e2f78dd505a8f24a6385379fa23ed191f9d681191a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299a0a4160d929940f12e2f78dd505a8f24a6385379fa23ed191f9d681191a7a->enter($__internal_299a0a4160d929940f12e2f78dd505a8f24a6385379fa23ed191f9d681191a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_299a0a4160d929940f12e2f78dd505a8f24a6385379fa23ed191f9d681191a7a->leave($__internal_299a0a4160d929940f12e2f78dd505a8f24a6385379fa23ed191f9d681191a7a_prof);

        
        $__internal_9ee3c09edd32c3b4cb0b319b335eb34890870b36617cd01a578b3a673d9e5381->leave($__internal_9ee3c09edd32c3b4cb0b319b335eb34890870b36617cd01a578b3a673d9e5381_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b05a2014fcf7277a7b5ac3f7bf2be9e9fe5a40fe3ffe7a7754b7a8f94c4f52ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05a2014fcf7277a7b5ac3f7bf2be9e9fe5a40fe3ffe7a7754b7a8f94c4f52ae->enter($__internal_b05a2014fcf7277a7b5ac3f7bf2be9e9fe5a40fe3ffe7a7754b7a8f94c4f52ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_172e93978d23769df3b37831cf80b55cd0e5daed2a89c17b99b296e710962bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172e93978d23769df3b37831cf80b55cd0e5daed2a89c17b99b296e710962bf5->enter($__internal_172e93978d23769df3b37831cf80b55cd0e5daed2a89c17b99b296e710962bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_172e93978d23769df3b37831cf80b55cd0e5daed2a89c17b99b296e710962bf5->leave($__internal_172e93978d23769df3b37831cf80b55cd0e5daed2a89c17b99b296e710962bf5_prof);

        
        $__internal_b05a2014fcf7277a7b5ac3f7bf2be9e9fe5a40fe3ffe7a7754b7a8f94c4f52ae->leave($__internal_b05a2014fcf7277a7b5ac3f7bf2be9e9fe5a40fe3ffe7a7754b7a8f94c4f52ae_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources\\views/base.html.twig");
    }
}
