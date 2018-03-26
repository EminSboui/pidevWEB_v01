<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5dfd07003a92fcb91b688cdae849a9d47ab6c6db3ae6e063f0549dd64b38e3a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75915e90c98cc68c86b19fbf69eee757b28ac970c2cbde16a8d9dad125fc70aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75915e90c98cc68c86b19fbf69eee757b28ac970c2cbde16a8d9dad125fc70aa->enter($__internal_75915e90c98cc68c86b19fbf69eee757b28ac970c2cbde16a8d9dad125fc70aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_fe97aed6a32f33d35a26b192333d3f6cb4006572b28783d8801da392528ead8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe97aed6a32f33d35a26b192333d3f6cb4006572b28783d8801da392528ead8b->enter($__internal_fe97aed6a32f33d35a26b192333d3f6cb4006572b28783d8801da392528ead8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75915e90c98cc68c86b19fbf69eee757b28ac970c2cbde16a8d9dad125fc70aa->leave($__internal_75915e90c98cc68c86b19fbf69eee757b28ac970c2cbde16a8d9dad125fc70aa_prof);

        
        $__internal_fe97aed6a32f33d35a26b192333d3f6cb4006572b28783d8801da392528ead8b->leave($__internal_fe97aed6a32f33d35a26b192333d3f6cb4006572b28783d8801da392528ead8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b18f5ee6d9c80489610d48bf320a7a7c3984af5d794cb7a3273d478ef0be950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b18f5ee6d9c80489610d48bf320a7a7c3984af5d794cb7a3273d478ef0be950->enter($__internal_0b18f5ee6d9c80489610d48bf320a7a7c3984af5d794cb7a3273d478ef0be950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a4c554aa00a9a19409093819116ac8ae0fffb5ffb226ce61413913470fed51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4c554aa00a9a19409093819116ac8ae0fffb5ffb226ce61413913470fed51a->enter($__internal_4a4c554aa00a9a19409093819116ac8ae0fffb5ffb226ce61413913470fed51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_4a4c554aa00a9a19409093819116ac8ae0fffb5ffb226ce61413913470fed51a->leave($__internal_4a4c554aa00a9a19409093819116ac8ae0fffb5ffb226ce61413913470fed51a_prof);

        
        $__internal_0b18f5ee6d9c80489610d48bf320a7a7c3984af5d794cb7a3273d478ef0be950->leave($__internal_0b18f5ee6d9c80489610d48bf320a7a7c3984af5d794cb7a3273d478ef0be950_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
