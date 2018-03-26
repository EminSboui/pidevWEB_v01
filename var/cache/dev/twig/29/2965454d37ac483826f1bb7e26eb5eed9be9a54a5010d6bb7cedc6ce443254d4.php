<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_091f12fae68396494ab15e639d7bc3c31d66940779c9232e08298119a8694d9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f784735a55dca3d9d1ebaccf33c2a72721ffd75afde14fdd0ee6d5e6bc4a6272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f784735a55dca3d9d1ebaccf33c2a72721ffd75afde14fdd0ee6d5e6bc4a6272->enter($__internal_f784735a55dca3d9d1ebaccf33c2a72721ffd75afde14fdd0ee6d5e6bc4a6272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4cb45c52ed11d31a711f7f7cd43f1133376d11d185ce0b51ab08e08706c639ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb45c52ed11d31a711f7f7cd43f1133376d11d185ce0b51ab08e08706c639ce->enter($__internal_4cb45c52ed11d31a711f7f7cd43f1133376d11d185ce0b51ab08e08706c639ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f784735a55dca3d9d1ebaccf33c2a72721ffd75afde14fdd0ee6d5e6bc4a6272->leave($__internal_f784735a55dca3d9d1ebaccf33c2a72721ffd75afde14fdd0ee6d5e6bc4a6272_prof);

        
        $__internal_4cb45c52ed11d31a711f7f7cd43f1133376d11d185ce0b51ab08e08706c639ce->leave($__internal_4cb45c52ed11d31a711f7f7cd43f1133376d11d185ce0b51ab08e08706c639ce_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_682082d5502e6362fcbc951403da39ead411c3bcc956c6ef83ada2d70426e567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682082d5502e6362fcbc951403da39ead411c3bcc956c6ef83ada2d70426e567->enter($__internal_682082d5502e6362fcbc951403da39ead411c3bcc956c6ef83ada2d70426e567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f262227c8de91183378a7f5394bf5ef7f85198a012c69dd3679f41e2f520fa10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f262227c8de91183378a7f5394bf5ef7f85198a012c69dd3679f41e2f520fa10->enter($__internal_f262227c8de91183378a7f5394bf5ef7f85198a012c69dd3679f41e2f520fa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f262227c8de91183378a7f5394bf5ef7f85198a012c69dd3679f41e2f520fa10->leave($__internal_f262227c8de91183378a7f5394bf5ef7f85198a012c69dd3679f41e2f520fa10_prof);

        
        $__internal_682082d5502e6362fcbc951403da39ead411c3bcc956c6ef83ada2d70426e567->leave($__internal_682082d5502e6362fcbc951403da39ead411c3bcc956c6ef83ada2d70426e567_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
