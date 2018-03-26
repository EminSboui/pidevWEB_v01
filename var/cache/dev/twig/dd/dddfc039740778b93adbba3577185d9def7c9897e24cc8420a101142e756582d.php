<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7ea2ea09919afd63688539de627ca22ef1c2e92c2c61ee1f9f9610ba67154631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_fe32aaf7bcfb6cc7667b6a2c02ecbe3373b480131962cbb80dd8af933930ab2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe32aaf7bcfb6cc7667b6a2c02ecbe3373b480131962cbb80dd8af933930ab2c->enter($__internal_fe32aaf7bcfb6cc7667b6a2c02ecbe3373b480131962cbb80dd8af933930ab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_2f7ba5111b57f4588c0b257c32994a7b1fbedfde0321576cb38da452ef69bdba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7ba5111b57f4588c0b257c32994a7b1fbedfde0321576cb38da452ef69bdba->enter($__internal_2f7ba5111b57f4588c0b257c32994a7b1fbedfde0321576cb38da452ef69bdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe32aaf7bcfb6cc7667b6a2c02ecbe3373b480131962cbb80dd8af933930ab2c->leave($__internal_fe32aaf7bcfb6cc7667b6a2c02ecbe3373b480131962cbb80dd8af933930ab2c_prof);

        
        $__internal_2f7ba5111b57f4588c0b257c32994a7b1fbedfde0321576cb38da452ef69bdba->leave($__internal_2f7ba5111b57f4588c0b257c32994a7b1fbedfde0321576cb38da452ef69bdba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6ebfa8d5a4c20b667379086d18ec4595320001c6f0bab1699f66075df64efa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ebfa8d5a4c20b667379086d18ec4595320001c6f0bab1699f66075df64efa1->enter($__internal_c6ebfa8d5a4c20b667379086d18ec4595320001c6f0bab1699f66075df64efa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b7b56c525e70c55c2d10648bc3b706833248d4da105ba2377aa1b71e3478de37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b56c525e70c55c2d10648bc3b706833248d4da105ba2377aa1b71e3478de37->enter($__internal_b7b56c525e70c55c2d10648bc3b706833248d4da105ba2377aa1b71e3478de37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b7b56c525e70c55c2d10648bc3b706833248d4da105ba2377aa1b71e3478de37->leave($__internal_b7b56c525e70c55c2d10648bc3b706833248d4da105ba2377aa1b71e3478de37_prof);

        
        $__internal_c6ebfa8d5a4c20b667379086d18ec4595320001c6f0bab1699f66075df64efa1->leave($__internal_c6ebfa8d5a4c20b667379086d18ec4595320001c6f0bab1699f66075df64efa1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
