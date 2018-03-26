<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_bad9a10eba2627f9d36f5507c254df035ebdad7a67b9c418cc93bd009dc4e6d3 extends Twig_Template
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
        $__internal_cf9e54150b2b8dd09b4f1805604a5df5ebe17c18642722ce2df91256929e79b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9e54150b2b8dd09b4f1805604a5df5ebe17c18642722ce2df91256929e79b8->enter($__internal_cf9e54150b2b8dd09b4f1805604a5df5ebe17c18642722ce2df91256929e79b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_72e3655b16a0f604e2def12058441711409382af87b343163147229b6e8e117d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e3655b16a0f604e2def12058441711409382af87b343163147229b6e8e117d->enter($__internal_72e3655b16a0f604e2def12058441711409382af87b343163147229b6e8e117d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cf9e54150b2b8dd09b4f1805604a5df5ebe17c18642722ce2df91256929e79b8->leave($__internal_cf9e54150b2b8dd09b4f1805604a5df5ebe17c18642722ce2df91256929e79b8_prof);

        
        $__internal_72e3655b16a0f604e2def12058441711409382af87b343163147229b6e8e117d->leave($__internal_72e3655b16a0f604e2def12058441711409382af87b343163147229b6e8e117d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
