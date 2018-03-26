<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_b4bceacedbcf26b6dc9cd0fce0bd73bec031cb447fe513f9d85ea717d9b41030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_848a1ba092aba6c3985812e6766ee873ff8620205ff3f0abc12eafa34d579d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848a1ba092aba6c3985812e6766ee873ff8620205ff3f0abc12eafa34d579d4f->enter($__internal_848a1ba092aba6c3985812e6766ee873ff8620205ff3f0abc12eafa34d579d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_3a74a5829c85df17e5bb52efef4b706c9347ec14a2ced578b01a1355d9e01093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a74a5829c85df17e5bb52efef4b706c9347ec14a2ced578b01a1355d9e01093->enter($__internal_3a74a5829c85df17e5bb52efef4b706c9347ec14a2ced578b01a1355d9e01093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848a1ba092aba6c3985812e6766ee873ff8620205ff3f0abc12eafa34d579d4f->leave($__internal_848a1ba092aba6c3985812e6766ee873ff8620205ff3f0abc12eafa34d579d4f_prof);

        
        $__internal_3a74a5829c85df17e5bb52efef4b706c9347ec14a2ced578b01a1355d9e01093->leave($__internal_3a74a5829c85df17e5bb52efef4b706c9347ec14a2ced578b01a1355d9e01093_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8fb90d88c2abe85ff278fe18043d5376918dad25ff7a1845eadbcd12b1f57f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8fb90d88c2abe85ff278fe18043d5376918dad25ff7a1845eadbcd12b1f57f3->enter($__internal_f8fb90d88c2abe85ff278fe18043d5376918dad25ff7a1845eadbcd12b1f57f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c65c99872decf40f0738a45f74e89c3ff8f8db49d0e6d4dfb89181e8334674ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65c99872decf40f0738a45f74e89c3ff8f8db49d0e6d4dfb89181e8334674ea->enter($__internal_c65c99872decf40f0738a45f74e89c3ff8f8db49d0e6d4dfb89181e8334674ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_c65c99872decf40f0738a45f74e89c3ff8f8db49d0e6d4dfb89181e8334674ea->leave($__internal_c65c99872decf40f0738a45f74e89c3ff8f8db49d0e6d4dfb89181e8334674ea_prof);

        
        $__internal_f8fb90d88c2abe85ff278fe18043d5376918dad25ff7a1845eadbcd12b1f57f3->leave($__internal_f8fb90d88c2abe85ff278fe18043d5376918dad25ff7a1845eadbcd12b1f57f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
