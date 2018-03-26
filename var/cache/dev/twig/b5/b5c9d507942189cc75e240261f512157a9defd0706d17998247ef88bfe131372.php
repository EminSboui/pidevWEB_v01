<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a9176dd160aec8e1de333faee3904b041a2b8330e7a830cb611afa27ae1af28b extends Twig_Template
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
        $__internal_0e5cd2bc381f94b9510dd20a56c4a022588a7a1d71b6770c95be1756e1f86ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5cd2bc381f94b9510dd20a56c4a022588a7a1d71b6770c95be1756e1f86ad6->enter($__internal_0e5cd2bc381f94b9510dd20a56c4a022588a7a1d71b6770c95be1756e1f86ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c4d47ae7a2e8c8c238123cdc6b1448dec133f901bc6f879baeeb24f3e9f169e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d47ae7a2e8c8c238123cdc6b1448dec133f901bc6f879baeeb24f3e9f169e5->enter($__internal_c4d47ae7a2e8c8c238123cdc6b1448dec133f901bc6f879baeeb24f3e9f169e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0e5cd2bc381f94b9510dd20a56c4a022588a7a1d71b6770c95be1756e1f86ad6->leave($__internal_0e5cd2bc381f94b9510dd20a56c4a022588a7a1d71b6770c95be1756e1f86ad6_prof);

        
        $__internal_c4d47ae7a2e8c8c238123cdc6b1448dec133f901bc6f879baeeb24f3e9f169e5->leave($__internal_c4d47ae7a2e8c8c238123cdc6b1448dec133f901bc6f879baeeb24f3e9f169e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
