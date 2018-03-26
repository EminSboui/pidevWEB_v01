<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d547fad0deeda39c521fdfaa7901bbb200b18e123bf57b0818ce44cec12bb378 extends Twig_Template
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
        $__internal_3f8ee46a45fb652a3b8fa975791bf3a8ad196ef2dfb2b4aeedf36149a0d85551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8ee46a45fb652a3b8fa975791bf3a8ad196ef2dfb2b4aeedf36149a0d85551->enter($__internal_3f8ee46a45fb652a3b8fa975791bf3a8ad196ef2dfb2b4aeedf36149a0d85551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_962f9fd85a23f751c7718ce2fb2e69ebbba1a8a99bb2a4f21ce994f716347a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962f9fd85a23f751c7718ce2fb2e69ebbba1a8a99bb2a4f21ce994f716347a46->enter($__internal_962f9fd85a23f751c7718ce2fb2e69ebbba1a8a99bb2a4f21ce994f716347a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3f8ee46a45fb652a3b8fa975791bf3a8ad196ef2dfb2b4aeedf36149a0d85551->leave($__internal_3f8ee46a45fb652a3b8fa975791bf3a8ad196ef2dfb2b4aeedf36149a0d85551_prof);

        
        $__internal_962f9fd85a23f751c7718ce2fb2e69ebbba1a8a99bb2a4f21ce994f716347a46->leave($__internal_962f9fd85a23f751c7718ce2fb2e69ebbba1a8a99bb2a4f21ce994f716347a46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
