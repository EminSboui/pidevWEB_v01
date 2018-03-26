<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8dec9c0b97fb699b82dce6b9533d4a69599b781c87f13690cfdb39277b72e8ab extends Twig_Template
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
        $__internal_283ac7b737036121037aff9498416489f8ad9181879292ad1cfcbd714720bb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283ac7b737036121037aff9498416489f8ad9181879292ad1cfcbd714720bb2b->enter($__internal_283ac7b737036121037aff9498416489f8ad9181879292ad1cfcbd714720bb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e893820470ab4fc4d9f77df1f9e1e5a6eb889fd03e09416815929ce778772ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e893820470ab4fc4d9f77df1f9e1e5a6eb889fd03e09416815929ce778772ea5->enter($__internal_e893820470ab4fc4d9f77df1f9e1e5a6eb889fd03e09416815929ce778772ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_283ac7b737036121037aff9498416489f8ad9181879292ad1cfcbd714720bb2b->leave($__internal_283ac7b737036121037aff9498416489f8ad9181879292ad1cfcbd714720bb2b_prof);

        
        $__internal_e893820470ab4fc4d9f77df1f9e1e5a6eb889fd03e09416815929ce778772ea5->leave($__internal_e893820470ab4fc4d9f77df1f9e1e5a6eb889fd03e09416815929ce778772ea5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
