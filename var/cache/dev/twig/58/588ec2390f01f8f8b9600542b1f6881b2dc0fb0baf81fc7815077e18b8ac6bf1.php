<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2867206b76ebf5b7bfb8b1a11c64c11726dde62a2420441a86e55cdda0040bc7 extends Twig_Template
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
        $__internal_7a7a6f6b2f10659c89cc0f5014db4047bbb12354f8caaa0af57e3e67c3f13fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7a6f6b2f10659c89cc0f5014db4047bbb12354f8caaa0af57e3e67c3f13fc6->enter($__internal_7a7a6f6b2f10659c89cc0f5014db4047bbb12354f8caaa0af57e3e67c3f13fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3d2682464ab49710a7fa1d63ba5c324fe9449bdb8543c6d643162ec918b3d48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2682464ab49710a7fa1d63ba5c324fe9449bdb8543c6d643162ec918b3d48a->enter($__internal_3d2682464ab49710a7fa1d63ba5c324fe9449bdb8543c6d643162ec918b3d48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7a7a6f6b2f10659c89cc0f5014db4047bbb12354f8caaa0af57e3e67c3f13fc6->leave($__internal_7a7a6f6b2f10659c89cc0f5014db4047bbb12354f8caaa0af57e3e67c3f13fc6_prof);

        
        $__internal_3d2682464ab49710a7fa1d63ba5c324fe9449bdb8543c6d643162ec918b3d48a->leave($__internal_3d2682464ab49710a7fa1d63ba5c324fe9449bdb8543c6d643162ec918b3d48a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
