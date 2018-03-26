<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_9f576521e4b13ae2774aeff939f2420d5283424a40b0bf38a30655851eae58fd extends Twig_Template
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
        $__internal_7e2101dc0a18cda8742d75b94b02c9ea98cbe835a6c7cbebb55963cf5d8ec963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2101dc0a18cda8742d75b94b02c9ea98cbe835a6c7cbebb55963cf5d8ec963->enter($__internal_7e2101dc0a18cda8742d75b94b02c9ea98cbe835a6c7cbebb55963cf5d8ec963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_b416a83e8bf020730076dbba25bd55eb0cad3428fb45631ca31aacbb200bae46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b416a83e8bf020730076dbba25bd55eb0cad3428fb45631ca31aacbb200bae46->enter($__internal_b416a83e8bf020730076dbba25bd55eb0cad3428fb45631ca31aacbb200bae46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7e2101dc0a18cda8742d75b94b02c9ea98cbe835a6c7cbebb55963cf5d8ec963->leave($__internal_7e2101dc0a18cda8742d75b94b02c9ea98cbe835a6c7cbebb55963cf5d8ec963_prof);

        
        $__internal_b416a83e8bf020730076dbba25bd55eb0cad3428fb45631ca31aacbb200bae46->leave($__internal_b416a83e8bf020730076dbba25bd55eb0cad3428fb45631ca31aacbb200bae46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
