<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_412930169cab5812e4c6f9ba98c814a7b0977534048d3ddfcdd45ed6e523db62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c7caf820e6fed4d6b19fa4d96487716aafd38dbf977b84512bc607db9380ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7caf820e6fed4d6b19fa4d96487716aafd38dbf977b84512bc607db9380ff6->enter($__internal_8c7caf820e6fed4d6b19fa4d96487716aafd38dbf977b84512bc607db9380ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d0fd585713ad0ce6b6b58f5953cd3a0dc12ea6ce3519ed4f14e43fc3d87bea40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fd585713ad0ce6b6b58f5953cd3a0dc12ea6ce3519ed4f14e43fc3d87bea40->enter($__internal_d0fd585713ad0ce6b6b58f5953cd3a0dc12ea6ce3519ed4f14e43fc3d87bea40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8c7caf820e6fed4d6b19fa4d96487716aafd38dbf977b84512bc607db9380ff6->leave($__internal_8c7caf820e6fed4d6b19fa4d96487716aafd38dbf977b84512bc607db9380ff6_prof);

        
        $__internal_d0fd585713ad0ce6b6b58f5953cd3a0dc12ea6ce3519ed4f14e43fc3d87bea40->leave($__internal_d0fd585713ad0ce6b6b58f5953cd3a0dc12ea6ce3519ed4f14e43fc3d87bea40_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_760f044dee1eefe68fe545ad2a20329be696272780e855e463bbea2e40816c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760f044dee1eefe68fe545ad2a20329be696272780e855e463bbea2e40816c21->enter($__internal_760f044dee1eefe68fe545ad2a20329be696272780e855e463bbea2e40816c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_188ab22a2dd867299585fa4a268ecfa2902d0692e79f9350f1246848b0e65a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188ab22a2dd867299585fa4a268ecfa2902d0692e79f9350f1246848b0e65a62->enter($__internal_188ab22a2dd867299585fa4a268ecfa2902d0692e79f9350f1246848b0e65a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_188ab22a2dd867299585fa4a268ecfa2902d0692e79f9350f1246848b0e65a62->leave($__internal_188ab22a2dd867299585fa4a268ecfa2902d0692e79f9350f1246848b0e65a62_prof);

        
        $__internal_760f044dee1eefe68fe545ad2a20329be696272780e855e463bbea2e40816c21->leave($__internal_760f044dee1eefe68fe545ad2a20329be696272780e855e463bbea2e40816c21_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4fcfc2e4defeb23e598d415c6ef3a4f82a5989494c5aa0a66e5f4e2789e10fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcfc2e4defeb23e598d415c6ef3a4f82a5989494c5aa0a66e5f4e2789e10fec->enter($__internal_4fcfc2e4defeb23e598d415c6ef3a4f82a5989494c5aa0a66e5f4e2789e10fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eb08921178c37d233598241834711a796f4306da0aa7ab1ab14d95fe893b8b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb08921178c37d233598241834711a796f4306da0aa7ab1ab14d95fe893b8b02->enter($__internal_eb08921178c37d233598241834711a796f4306da0aa7ab1ab14d95fe893b8b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_eb08921178c37d233598241834711a796f4306da0aa7ab1ab14d95fe893b8b02->leave($__internal_eb08921178c37d233598241834711a796f4306da0aa7ab1ab14d95fe893b8b02_prof);

        
        $__internal_4fcfc2e4defeb23e598d415c6ef3a4f82a5989494c5aa0a66e5f4e2789e10fec->leave($__internal_4fcfc2e4defeb23e598d415c6ef3a4f82a5989494c5aa0a66e5f4e2789e10fec_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1847b96a7841b6e7a882de635bbc0cc37d656c03bb8d9254cbc34ea20fdd5dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1847b96a7841b6e7a882de635bbc0cc37d656c03bb8d9254cbc34ea20fdd5dad->enter($__internal_1847b96a7841b6e7a882de635bbc0cc37d656c03bb8d9254cbc34ea20fdd5dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e57b7b893adc4032201b1c14e20385e69b60ccba03b72d986445d03c4718bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e57b7b893adc4032201b1c14e20385e69b60ccba03b72d986445d03c4718bce->enter($__internal_6e57b7b893adc4032201b1c14e20385e69b60ccba03b72d986445d03c4718bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6e57b7b893adc4032201b1c14e20385e69b60ccba03b72d986445d03c4718bce->leave($__internal_6e57b7b893adc4032201b1c14e20385e69b60ccba03b72d986445d03c4718bce_prof);

        
        $__internal_1847b96a7841b6e7a882de635bbc0cc37d656c03bb8d9254cbc34ea20fdd5dad->leave($__internal_1847b96a7841b6e7a882de635bbc0cc37d656c03bb8d9254cbc34ea20fdd5dad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
