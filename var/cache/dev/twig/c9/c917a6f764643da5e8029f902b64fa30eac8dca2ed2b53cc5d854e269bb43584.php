<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_30fbfa0eebcbaf63faaaf4393d0733c5e8182cd913dc2b5df4e7ff06d45c3529 extends Twig_Template
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
        $__internal_4763d81c27f68a049c48d6f17ff22606a889ae95a40016bbf20a6e01085b7659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4763d81c27f68a049c48d6f17ff22606a889ae95a40016bbf20a6e01085b7659->enter($__internal_4763d81c27f68a049c48d6f17ff22606a889ae95a40016bbf20a6e01085b7659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5d62e0f85560d29989bfd07fe12ecaf18bfad5bd6fee70ba14af1ba7e6c2a37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d62e0f85560d29989bfd07fe12ecaf18bfad5bd6fee70ba14af1ba7e6c2a37b->enter($__internal_5d62e0f85560d29989bfd07fe12ecaf18bfad5bd6fee70ba14af1ba7e6c2a37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4763d81c27f68a049c48d6f17ff22606a889ae95a40016bbf20a6e01085b7659->leave($__internal_4763d81c27f68a049c48d6f17ff22606a889ae95a40016bbf20a6e01085b7659_prof);

        
        $__internal_5d62e0f85560d29989bfd07fe12ecaf18bfad5bd6fee70ba14af1ba7e6c2a37b->leave($__internal_5d62e0f85560d29989bfd07fe12ecaf18bfad5bd6fee70ba14af1ba7e6c2a37b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
