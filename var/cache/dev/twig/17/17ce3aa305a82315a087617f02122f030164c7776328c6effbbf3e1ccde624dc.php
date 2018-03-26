<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_80ad8cc3115ab5e6b37bdf968cca3160b83fb067ebb30427bb22387485243f49 extends Twig_Template
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
        $__internal_a828efc2daaccf7fdb0f915bfd53d626fe0410f18416aa554e4e0e30fee9395b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a828efc2daaccf7fdb0f915bfd53d626fe0410f18416aa554e4e0e30fee9395b->enter($__internal_a828efc2daaccf7fdb0f915bfd53d626fe0410f18416aa554e4e0e30fee9395b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a3cf1859830672f5bed5a516aebd6aae6e07c2c9169d8e6dd5dc5829ae2b6811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3cf1859830672f5bed5a516aebd6aae6e07c2c9169d8e6dd5dc5829ae2b6811->enter($__internal_a3cf1859830672f5bed5a516aebd6aae6e07c2c9169d8e6dd5dc5829ae2b6811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a828efc2daaccf7fdb0f915bfd53d626fe0410f18416aa554e4e0e30fee9395b->leave($__internal_a828efc2daaccf7fdb0f915bfd53d626fe0410f18416aa554e4e0e30fee9395b_prof);

        
        $__internal_a3cf1859830672f5bed5a516aebd6aae6e07c2c9169d8e6dd5dc5829ae2b6811->leave($__internal_a3cf1859830672f5bed5a516aebd6aae6e07c2c9169d8e6dd5dc5829ae2b6811_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
