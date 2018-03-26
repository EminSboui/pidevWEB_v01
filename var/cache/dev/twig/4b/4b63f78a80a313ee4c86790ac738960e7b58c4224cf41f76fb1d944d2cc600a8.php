<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_228e8ac46aaaa0126db04bb93c2a70e5dc7b0abefc42b49737269282dc917e0d extends Twig_Template
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
        $__internal_54c82c158a4006ec1eea499b62ec0f93f5970f5dd174bcf98a6e4d8cd93a7dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c82c158a4006ec1eea499b62ec0f93f5970f5dd174bcf98a6e4d8cd93a7dfb->enter($__internal_54c82c158a4006ec1eea499b62ec0f93f5970f5dd174bcf98a6e4d8cd93a7dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_279fe18f240a1b4d2c9c915d4c666280db16f86b0244b186249c65bce0b07f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279fe18f240a1b4d2c9c915d4c666280db16f86b0244b186249c65bce0b07f62->enter($__internal_279fe18f240a1b4d2c9c915d4c666280db16f86b0244b186249c65bce0b07f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_54c82c158a4006ec1eea499b62ec0f93f5970f5dd174bcf98a6e4d8cd93a7dfb->leave($__internal_54c82c158a4006ec1eea499b62ec0f93f5970f5dd174bcf98a6e4d8cd93a7dfb_prof);

        
        $__internal_279fe18f240a1b4d2c9c915d4c666280db16f86b0244b186249c65bce0b07f62->leave($__internal_279fe18f240a1b4d2c9c915d4c666280db16f86b0244b186249c65bce0b07f62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
