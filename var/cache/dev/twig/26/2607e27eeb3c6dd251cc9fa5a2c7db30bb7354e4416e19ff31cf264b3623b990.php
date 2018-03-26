<?php

/* baseBundle:Default:index.html.twig */
class __TwigTemplate_b7f584dd71bbe7c48f61bf295161cfcc74d5f2563874e2157c7a8a118c47f9fb extends Twig_Template
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
        $__internal_dc7a3b272f8b94c8f6c9aff03545437229006c52ba7f78401ae4f933b6b666f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7a3b272f8b94c8f6c9aff03545437229006c52ba7f78401ae4f933b6b666f5->enter($__internal_dc7a3b272f8b94c8f6c9aff03545437229006c52ba7f78401ae4f933b6b666f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBundle:Default:index.html.twig"));

        $__internal_041941bbbc993ddb8771952d0a9dd36f05a0f0aecede58ba6aab0963c37d18d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041941bbbc993ddb8771952d0a9dd36f05a0f0aecede58ba6aab0963c37d18d0->enter($__internal_041941bbbc993ddb8771952d0a9dd36f05a0f0aecede58ba6aab0963c37d18d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_dc7a3b272f8b94c8f6c9aff03545437229006c52ba7f78401ae4f933b6b666f5->leave($__internal_dc7a3b272f8b94c8f6c9aff03545437229006c52ba7f78401ae4f933b6b666f5_prof);

        
        $__internal_041941bbbc993ddb8771952d0a9dd36f05a0f0aecede58ba6aab0963c37d18d0->leave($__internal_041941bbbc993ddb8771952d0a9dd36f05a0f0aecede58ba6aab0963c37d18d0_prof);

    }

    public function getTemplateName()
    {
        return "baseBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "baseBundle:Default:index.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\src\\baseBundle/Resources/views/Default/index.html.twig");
    }
}
