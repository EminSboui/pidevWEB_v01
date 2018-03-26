<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c23d4a10810d59c1f16e479ef1b902c85cffa1db01754808ccda920bea227764 extends Twig_Template
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
        $__internal_ecd237f7acf1c8968c3443111cd80ca0de5118db50d1fb4d80711cb05a4b58bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd237f7acf1c8968c3443111cd80ca0de5118db50d1fb4d80711cb05a4b58bd->enter($__internal_ecd237f7acf1c8968c3443111cd80ca0de5118db50d1fb4d80711cb05a4b58bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_8e5849643bd8da73035b21c342f367315dd173416f5450259f5b4b78eb9cccb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5849643bd8da73035b21c342f367315dd173416f5450259f5b4b78eb9cccb0->enter($__internal_8e5849643bd8da73035b21c342f367315dd173416f5450259f5b4b78eb9cccb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ecd237f7acf1c8968c3443111cd80ca0de5118db50d1fb4d80711cb05a4b58bd->leave($__internal_ecd237f7acf1c8968c3443111cd80ca0de5118db50d1fb4d80711cb05a4b58bd_prof);

        
        $__internal_8e5849643bd8da73035b21c342f367315dd173416f5450259f5b4b78eb9cccb0->leave($__internal_8e5849643bd8da73035b21c342f367315dd173416f5450259f5b4b78eb9cccb0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
