<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3b718acfa007d3872018d56cf8d1f76f57f875fc8625743800a82002c105f80a extends Twig_Template
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
        $__internal_4f39d43759cfffe315965024db6c8074e58cae87d413ac20a4ca56a1d317911b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f39d43759cfffe315965024db6c8074e58cae87d413ac20a4ca56a1d317911b->enter($__internal_4f39d43759cfffe315965024db6c8074e58cae87d413ac20a4ca56a1d317911b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b62f79cc0245db1dd464d6e9af3a2a5f71a8214beb1d7e1fb1d0a782b7e62c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62f79cc0245db1dd464d6e9af3a2a5f71a8214beb1d7e1fb1d0a782b7e62c08->enter($__internal_b62f79cc0245db1dd464d6e9af3a2a5f71a8214beb1d7e1fb1d0a782b7e62c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4f39d43759cfffe315965024db6c8074e58cae87d413ac20a4ca56a1d317911b->leave($__internal_4f39d43759cfffe315965024db6c8074e58cae87d413ac20a4ca56a1d317911b_prof);

        
        $__internal_b62f79cc0245db1dd464d6e9af3a2a5f71a8214beb1d7e1fb1d0a782b7e62c08->leave($__internal_b62f79cc0245db1dd464d6e9af3a2a5f71a8214beb1d7e1fb1d0a782b7e62c08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
