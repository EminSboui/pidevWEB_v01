<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ded63a06244dac38f4caf2e3298ac4a45c5293af9901d6cd75d5abceec7ce429 extends Twig_Template
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
        $__internal_8aa0447ecffafbd9377ac8510cf81582be7f79f11f2a8bf26566aaa9ed61e6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa0447ecffafbd9377ac8510cf81582be7f79f11f2a8bf26566aaa9ed61e6eb->enter($__internal_8aa0447ecffafbd9377ac8510cf81582be7f79f11f2a8bf26566aaa9ed61e6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2f3929e6f05dbbc76313c6a36ed024c3cc3f9aa1ccae1397109402a0e392a858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3929e6f05dbbc76313c6a36ed024c3cc3f9aa1ccae1397109402a0e392a858->enter($__internal_2f3929e6f05dbbc76313c6a36ed024c3cc3f9aa1ccae1397109402a0e392a858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8aa0447ecffafbd9377ac8510cf81582be7f79f11f2a8bf26566aaa9ed61e6eb->leave($__internal_8aa0447ecffafbd9377ac8510cf81582be7f79f11f2a8bf26566aaa9ed61e6eb_prof);

        
        $__internal_2f3929e6f05dbbc76313c6a36ed024c3cc3f9aa1ccae1397109402a0e392a858->leave($__internal_2f3929e6f05dbbc76313c6a36ed024c3cc3f9aa1ccae1397109402a0e392a858_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
