<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b7660546042f0cf4ad17d0ed89214b815241677f2cba00df07db5b26e3dd4441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6c3dc5a419027d6473faaed6043adcfafff0439689f9fcf544479ed266994e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3dc5a419027d6473faaed6043adcfafff0439689f9fcf544479ed266994e7b->enter($__internal_6c3dc5a419027d6473faaed6043adcfafff0439689f9fcf544479ed266994e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c5860ec1944bdac6e13c7807a6300d2ce7d1db2af7f9b9a73387f72871fd4476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5860ec1944bdac6e13c7807a6300d2ce7d1db2af7f9b9a73387f72871fd4476->enter($__internal_c5860ec1944bdac6e13c7807a6300d2ce7d1db2af7f9b9a73387f72871fd4476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c3dc5a419027d6473faaed6043adcfafff0439689f9fcf544479ed266994e7b->leave($__internal_6c3dc5a419027d6473faaed6043adcfafff0439689f9fcf544479ed266994e7b_prof);

        
        $__internal_c5860ec1944bdac6e13c7807a6300d2ce7d1db2af7f9b9a73387f72871fd4476->leave($__internal_c5860ec1944bdac6e13c7807a6300d2ce7d1db2af7f9b9a73387f72871fd4476_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8406e8fce2566e8ce72a4e0730993b958bc679f03d4ead587c1c91294ae98d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8406e8fce2566e8ce72a4e0730993b958bc679f03d4ead587c1c91294ae98d68->enter($__internal_8406e8fce2566e8ce72a4e0730993b958bc679f03d4ead587c1c91294ae98d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_998db4e1226d9dd11fd245a33341a553de7bcd98ffd753f18d9479b880a55826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998db4e1226d9dd11fd245a33341a553de7bcd98ffd753f18d9479b880a55826->enter($__internal_998db4e1226d9dd11fd245a33341a553de7bcd98ffd753f18d9479b880a55826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_998db4e1226d9dd11fd245a33341a553de7bcd98ffd753f18d9479b880a55826->leave($__internal_998db4e1226d9dd11fd245a33341a553de7bcd98ffd753f18d9479b880a55826_prof);

        
        $__internal_8406e8fce2566e8ce72a4e0730993b958bc679f03d4ead587c1c91294ae98d68->leave($__internal_8406e8fce2566e8ce72a4e0730993b958bc679f03d4ead587c1c91294ae98d68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
