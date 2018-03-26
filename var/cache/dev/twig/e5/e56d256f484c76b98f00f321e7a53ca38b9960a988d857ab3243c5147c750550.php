<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_4ee01a4f25b96ff2ee39239a675c216b5167a8c4c594031827a66f98b0e20f1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_241c29efb66241a0bee147f7acfa599a53e3e21a0f519d9df30bde1347401385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241c29efb66241a0bee147f7acfa599a53e3e21a0f519d9df30bde1347401385->enter($__internal_241c29efb66241a0bee147f7acfa599a53e3e21a0f519d9df30bde1347401385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_e1ebbe132b4f9dd90bf0e4cda9662d499a47d85002f074a423e35e42181c48ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ebbe132b4f9dd90bf0e4cda9662d499a47d85002f074a423e35e42181c48ae->enter($__internal_e1ebbe132b4f9dd90bf0e4cda9662d499a47d85002f074a423e35e42181c48ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_241c29efb66241a0bee147f7acfa599a53e3e21a0f519d9df30bde1347401385->leave($__internal_241c29efb66241a0bee147f7acfa599a53e3e21a0f519d9df30bde1347401385_prof);

        
        $__internal_e1ebbe132b4f9dd90bf0e4cda9662d499a47d85002f074a423e35e42181c48ae->leave($__internal_e1ebbe132b4f9dd90bf0e4cda9662d499a47d85002f074a423e35e42181c48ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ceb8e7f9bcd350d205ba576ed84dce80fd6b8c1dba1f5a65b1f1034081c0b5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb8e7f9bcd350d205ba576ed84dce80fd6b8c1dba1f5a65b1f1034081c0b5a7->enter($__internal_ceb8e7f9bcd350d205ba576ed84dce80fd6b8c1dba1f5a65b1f1034081c0b5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_69823e52133104694afe6262f9ef42f44422ae3b961197694254492ff37cb8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69823e52133104694afe6262f9ef42f44422ae3b961197694254492ff37cb8c9->enter($__internal_69823e52133104694afe6262f9ef42f44422ae3b961197694254492ff37cb8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_69823e52133104694afe6262f9ef42f44422ae3b961197694254492ff37cb8c9->leave($__internal_69823e52133104694afe6262f9ef42f44422ae3b961197694254492ff37cb8c9_prof);

        
        $__internal_ceb8e7f9bcd350d205ba576ed84dce80fd6b8c1dba1f5a65b1f1034081c0b5a7->leave($__internal_ceb8e7f9bcd350d205ba576ed84dce80fd6b8c1dba1f5a65b1f1034081c0b5a7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
