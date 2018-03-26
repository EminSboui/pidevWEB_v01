<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b92b510ad15e43217efec13c3d5adc9a9cb2aaddff263dde4ff37c7cf648f6aa extends Twig_Template
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
        $__internal_06dffd829b956d6ba72b25187ea4735546bfaf9821968159b4842180d91977fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06dffd829b956d6ba72b25187ea4735546bfaf9821968159b4842180d91977fa->enter($__internal_06dffd829b956d6ba72b25187ea4735546bfaf9821968159b4842180d91977fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4836b3f3c719c41cec3dc274f602309f2848c06f03111a87dd4cd0138c9ddfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4836b3f3c719c41cec3dc274f602309f2848c06f03111a87dd4cd0138c9ddfdc->enter($__internal_4836b3f3c719c41cec3dc274f602309f2848c06f03111a87dd4cd0138c9ddfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_06dffd829b956d6ba72b25187ea4735546bfaf9821968159b4842180d91977fa->leave($__internal_06dffd829b956d6ba72b25187ea4735546bfaf9821968159b4842180d91977fa_prof);

        
        $__internal_4836b3f3c719c41cec3dc274f602309f2848c06f03111a87dd4cd0138c9ddfdc->leave($__internal_4836b3f3c719c41cec3dc274f602309f2848c06f03111a87dd4cd0138c9ddfdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
