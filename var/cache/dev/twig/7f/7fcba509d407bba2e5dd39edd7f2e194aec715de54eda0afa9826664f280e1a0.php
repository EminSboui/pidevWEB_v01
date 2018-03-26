<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ec3ac6b739e785c8aef676a8943024fd86c75767a041f0f1b05816b8d359aa2f extends Twig_Template
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
        $__internal_7140c36f1a7b888ad48ca036087a6f8c2d2f0fa291127882a907b303ce187d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7140c36f1a7b888ad48ca036087a6f8c2d2f0fa291127882a907b303ce187d16->enter($__internal_7140c36f1a7b888ad48ca036087a6f8c2d2f0fa291127882a907b303ce187d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8d4a6a421ab4ed62eafaf3afbeb78bd515ff2608969eb31390a766ba612205e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4a6a421ab4ed62eafaf3afbeb78bd515ff2608969eb31390a766ba612205e2->enter($__internal_8d4a6a421ab4ed62eafaf3afbeb78bd515ff2608969eb31390a766ba612205e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7140c36f1a7b888ad48ca036087a6f8c2d2f0fa291127882a907b303ce187d16->leave($__internal_7140c36f1a7b888ad48ca036087a6f8c2d2f0fa291127882a907b303ce187d16_prof);

        
        $__internal_8d4a6a421ab4ed62eafaf3afbeb78bd515ff2608969eb31390a766ba612205e2->leave($__internal_8d4a6a421ab4ed62eafaf3afbeb78bd515ff2608969eb31390a766ba612205e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
