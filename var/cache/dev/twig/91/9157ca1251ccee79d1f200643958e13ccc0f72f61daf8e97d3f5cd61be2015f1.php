<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3cf07b3540b740ac919bd8306c042c1230d6ddf535736c922c5d6b397fa57510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_531d2247dd8ea609eba1ed9fa6ee00e77de0b2eae36bf4c521609f5722b98446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531d2247dd8ea609eba1ed9fa6ee00e77de0b2eae36bf4c521609f5722b98446->enter($__internal_531d2247dd8ea609eba1ed9fa6ee00e77de0b2eae36bf4c521609f5722b98446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_2592db037b7681e4c2db56e4ce4aaf6534a78851b0016f806846451ccffca643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2592db037b7681e4c2db56e4ce4aaf6534a78851b0016f806846451ccffca643->enter($__internal_2592db037b7681e4c2db56e4ce4aaf6534a78851b0016f806846451ccffca643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_531d2247dd8ea609eba1ed9fa6ee00e77de0b2eae36bf4c521609f5722b98446->leave($__internal_531d2247dd8ea609eba1ed9fa6ee00e77de0b2eae36bf4c521609f5722b98446_prof);

        
        $__internal_2592db037b7681e4c2db56e4ce4aaf6534a78851b0016f806846451ccffca643->leave($__internal_2592db037b7681e4c2db56e4ce4aaf6534a78851b0016f806846451ccffca643_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcd648cd66a4662cc4c3d00634aaafcb1cee3c06b9676585d99ea035f86fc130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd648cd66a4662cc4c3d00634aaafcb1cee3c06b9676585d99ea035f86fc130->enter($__internal_fcd648cd66a4662cc4c3d00634aaafcb1cee3c06b9676585d99ea035f86fc130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_83eb181de0963f966c405453a4508f785f6897c54d66a4c22e531019887182c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83eb181de0963f966c405453a4508f785f6897c54d66a4c22e531019887182c3->enter($__internal_83eb181de0963f966c405453a4508f785f6897c54d66a4c22e531019887182c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_83eb181de0963f966c405453a4508f785f6897c54d66a4c22e531019887182c3->leave($__internal_83eb181de0963f966c405453a4508f785f6897c54d66a4c22e531019887182c3_prof);

        
        $__internal_fcd648cd66a4662cc4c3d00634aaafcb1cee3c06b9676585d99ea035f86fc130->leave($__internal_fcd648cd66a4662cc4c3d00634aaafcb1cee3c06b9676585d99ea035f86fc130_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
