<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a46878681bbf088ea526b8ae59cab7c8dcd48daad4236878bdc82d6d9f1dbd8c extends Twig_Template
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
        $__internal_9fe59e187d5e1de594df7273e0285e7a128c053c3274506f6da9bb89a87967da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe59e187d5e1de594df7273e0285e7a128c053c3274506f6da9bb89a87967da->enter($__internal_9fe59e187d5e1de594df7273e0285e7a128c053c3274506f6da9bb89a87967da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d2555c6ff0b9d86a4b4344ddbc8dd8cdb9897528fe225b1036b811b5bb9fcacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2555c6ff0b9d86a4b4344ddbc8dd8cdb9897528fe225b1036b811b5bb9fcacb->enter($__internal_d2555c6ff0b9d86a4b4344ddbc8dd8cdb9897528fe225b1036b811b5bb9fcacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9fe59e187d5e1de594df7273e0285e7a128c053c3274506f6da9bb89a87967da->leave($__internal_9fe59e187d5e1de594df7273e0285e7a128c053c3274506f6da9bb89a87967da_prof);

        
        $__internal_d2555c6ff0b9d86a4b4344ddbc8dd8cdb9897528fe225b1036b811b5bb9fcacb->leave($__internal_d2555c6ff0b9d86a4b4344ddbc8dd8cdb9897528fe225b1036b811b5bb9fcacb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
