<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e7e3f000a6803b2d77d7a424f64c56f1a881cb209eb003adabfb1c11146895a5 extends Twig_Template
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
        $__internal_c7aa35aa17c58da0b05e2927004de463f8964c296aa3645976e674f1497eef8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7aa35aa17c58da0b05e2927004de463f8964c296aa3645976e674f1497eef8d->enter($__internal_c7aa35aa17c58da0b05e2927004de463f8964c296aa3645976e674f1497eef8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fb614556a67b8144625157a2b8d844ba660f10dbad4f994014ed59ec3cbaa730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb614556a67b8144625157a2b8d844ba660f10dbad4f994014ed59ec3cbaa730->enter($__internal_fb614556a67b8144625157a2b8d844ba660f10dbad4f994014ed59ec3cbaa730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c7aa35aa17c58da0b05e2927004de463f8964c296aa3645976e674f1497eef8d->leave($__internal_c7aa35aa17c58da0b05e2927004de463f8964c296aa3645976e674f1497eef8d_prof);

        
        $__internal_fb614556a67b8144625157a2b8d844ba660f10dbad4f994014ed59ec3cbaa730->leave($__internal_fb614556a67b8144625157a2b8d844ba660f10dbad4f994014ed59ec3cbaa730_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
