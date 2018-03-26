<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_a9dfd92a24db13471c2a0bf1a801ec8c321a5758b281f21ab6f56ee9645453cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_6530d1d1979191fcb6ccf363f44abc3a5019e424a9382a21d78f0f1f7ecadb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6530d1d1979191fcb6ccf363f44abc3a5019e424a9382a21d78f0f1f7ecadb64->enter($__internal_6530d1d1979191fcb6ccf363f44abc3a5019e424a9382a21d78f0f1f7ecadb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_5aeddc40e204d296e9bf51a20f699915942d81e5769039f9df1a6e5066c43a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aeddc40e204d296e9bf51a20f699915942d81e5769039f9df1a6e5066c43a9d->enter($__internal_5aeddc40e204d296e9bf51a20f699915942d81e5769039f9df1a6e5066c43a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6530d1d1979191fcb6ccf363f44abc3a5019e424a9382a21d78f0f1f7ecadb64->leave($__internal_6530d1d1979191fcb6ccf363f44abc3a5019e424a9382a21d78f0f1f7ecadb64_prof);

        
        $__internal_5aeddc40e204d296e9bf51a20f699915942d81e5769039f9df1a6e5066c43a9d->leave($__internal_5aeddc40e204d296e9bf51a20f699915942d81e5769039f9df1a6e5066c43a9d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d53b7c3438ee25ff0f0773d348c5b38f009fd408ea1c0bc7ed1311dd9ef88c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53b7c3438ee25ff0f0773d348c5b38f009fd408ea1c0bc7ed1311dd9ef88c88->enter($__internal_d53b7c3438ee25ff0f0773d348c5b38f009fd408ea1c0bc7ed1311dd9ef88c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fba974369eaec64ec6062d93277cbd3130a8dd314395434683e7b0c6af99f7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba974369eaec64ec6062d93277cbd3130a8dd314395434683e7b0c6af99f7e6->enter($__internal_fba974369eaec64ec6062d93277cbd3130a8dd314395434683e7b0c6af99f7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_fba974369eaec64ec6062d93277cbd3130a8dd314395434683e7b0c6af99f7e6->leave($__internal_fba974369eaec64ec6062d93277cbd3130a8dd314395434683e7b0c6af99f7e6_prof);

        
        $__internal_d53b7c3438ee25ff0f0773d348c5b38f009fd408ea1c0bc7ed1311dd9ef88c88->leave($__internal_d53b7c3438ee25ff0f0773d348c5b38f009fd408ea1c0bc7ed1311dd9ef88c88_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
