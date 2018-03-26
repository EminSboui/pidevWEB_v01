<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_14c5c3e2a8d2238710b24b953a2a526855ac3efc3e3818fe88e685307d0e4a18 extends Twig_Template
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
        $__internal_b0a39101326dcc229f598fe14a0b76f9f8fa3b20fc82d4ff9c9bf65172e7efad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a39101326dcc229f598fe14a0b76f9f8fa3b20fc82d4ff9c9bf65172e7efad->enter($__internal_b0a39101326dcc229f598fe14a0b76f9f8fa3b20fc82d4ff9c9bf65172e7efad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a5ae9f68876fb9a8dcd77610bafe73febe4db0fa5cc8c1259638d6d1cd2188eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ae9f68876fb9a8dcd77610bafe73febe4db0fa5cc8c1259638d6d1cd2188eb->enter($__internal_a5ae9f68876fb9a8dcd77610bafe73febe4db0fa5cc8c1259638d6d1cd2188eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b0a39101326dcc229f598fe14a0b76f9f8fa3b20fc82d4ff9c9bf65172e7efad->leave($__internal_b0a39101326dcc229f598fe14a0b76f9f8fa3b20fc82d4ff9c9bf65172e7efad_prof);

        
        $__internal_a5ae9f68876fb9a8dcd77610bafe73febe4db0fa5cc8c1259638d6d1cd2188eb->leave($__internal_a5ae9f68876fb9a8dcd77610bafe73febe4db0fa5cc8c1259638d6d1cd2188eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
