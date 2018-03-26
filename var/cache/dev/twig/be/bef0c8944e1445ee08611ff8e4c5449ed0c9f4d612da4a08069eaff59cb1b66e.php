<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ce92e9ff632d23a8124d6f3c9913552e588320e10026530b34f962ac1d8df186 extends Twig_Template
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
        $__internal_0323c5b23f08d9cfbe1c43a0d232b718b07203834928f272779a248c0a1612a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0323c5b23f08d9cfbe1c43a0d232b718b07203834928f272779a248c0a1612a0->enter($__internal_0323c5b23f08d9cfbe1c43a0d232b718b07203834928f272779a248c0a1612a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_74a587fc2e5b222d0a10e0eb850d2bf06cafddf1f88879e190ae228eb1082fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a587fc2e5b222d0a10e0eb850d2bf06cafddf1f88879e190ae228eb1082fa0->enter($__internal_74a587fc2e5b222d0a10e0eb850d2bf06cafddf1f88879e190ae228eb1082fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0323c5b23f08d9cfbe1c43a0d232b718b07203834928f272779a248c0a1612a0->leave($__internal_0323c5b23f08d9cfbe1c43a0d232b718b07203834928f272779a248c0a1612a0_prof);

        
        $__internal_74a587fc2e5b222d0a10e0eb850d2bf06cafddf1f88879e190ae228eb1082fa0->leave($__internal_74a587fc2e5b222d0a10e0eb850d2bf06cafddf1f88879e190ae228eb1082fa0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
