<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_cbf07d95accc74b1960671a7eaa16acea95e237e24ab76a5840895f4b974ff32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a579d4099ef3357a1ca041609ab95ed9b62875c098961a5177d19f467abc0c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a579d4099ef3357a1ca041609ab95ed9b62875c098961a5177d19f467abc0c1f->enter($__internal_a579d4099ef3357a1ca041609ab95ed9b62875c098961a5177d19f467abc0c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_1efa16eac8e9445ba243b4acf7b9a019fe43fa0091efbcb9e95e6fa6b58567f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efa16eac8e9445ba243b4acf7b9a019fe43fa0091efbcb9e95e6fa6b58567f9->enter($__internal_1efa16eac8e9445ba243b4acf7b9a019fe43fa0091efbcb9e95e6fa6b58567f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_a579d4099ef3357a1ca041609ab95ed9b62875c098961a5177d19f467abc0c1f->leave($__internal_a579d4099ef3357a1ca041609ab95ed9b62875c098961a5177d19f467abc0c1f_prof);

        
        $__internal_1efa16eac8e9445ba243b4acf7b9a019fe43fa0091efbcb9e95e6fa6b58567f9->leave($__internal_1efa16eac8e9445ba243b4acf7b9a019fe43fa0091efbcb9e95e6fa6b58567f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
