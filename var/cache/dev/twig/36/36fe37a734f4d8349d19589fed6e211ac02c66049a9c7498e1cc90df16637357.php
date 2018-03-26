<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5f766dc1ba623aa00771436ea30ac7826055479f6629570edd362d5ce775847d extends Twig_Template
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
        $__internal_405007b10ce1d740f5f30bcc76ad96e7d0affc2347a3d3b310e1150f78cfe956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405007b10ce1d740f5f30bcc76ad96e7d0affc2347a3d3b310e1150f78cfe956->enter($__internal_405007b10ce1d740f5f30bcc76ad96e7d0affc2347a3d3b310e1150f78cfe956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_463fabad4bb057b9bcaa9b225c941f696b34b5d459fadfaee64dcaa9659f930b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463fabad4bb057b9bcaa9b225c941f696b34b5d459fadfaee64dcaa9659f930b->enter($__internal_463fabad4bb057b9bcaa9b225c941f696b34b5d459fadfaee64dcaa9659f930b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_405007b10ce1d740f5f30bcc76ad96e7d0affc2347a3d3b310e1150f78cfe956->leave($__internal_405007b10ce1d740f5f30bcc76ad96e7d0affc2347a3d3b310e1150f78cfe956_prof);

        
        $__internal_463fabad4bb057b9bcaa9b225c941f696b34b5d459fadfaee64dcaa9659f930b->leave($__internal_463fabad4bb057b9bcaa9b225c941f696b34b5d459fadfaee64dcaa9659f930b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
