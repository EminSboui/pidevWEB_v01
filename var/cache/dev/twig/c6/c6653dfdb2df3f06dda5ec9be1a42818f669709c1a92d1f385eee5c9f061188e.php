<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9c839e6962e475e969c71bbadc33b9411369e900382837047407bdd785cd15cb extends Twig_Template
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
        $__internal_5589aa9dcaaf78167f23a12340256c6fb8257f1eeb7932a31f7e877f3db423bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5589aa9dcaaf78167f23a12340256c6fb8257f1eeb7932a31f7e877f3db423bb->enter($__internal_5589aa9dcaaf78167f23a12340256c6fb8257f1eeb7932a31f7e877f3db423bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e65045490e391b1786204d6610ac8f90425eaf7b1144344444e38805429e1115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65045490e391b1786204d6610ac8f90425eaf7b1144344444e38805429e1115->enter($__internal_e65045490e391b1786204d6610ac8f90425eaf7b1144344444e38805429e1115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5589aa9dcaaf78167f23a12340256c6fb8257f1eeb7932a31f7e877f3db423bb->leave($__internal_5589aa9dcaaf78167f23a12340256c6fb8257f1eeb7932a31f7e877f3db423bb_prof);

        
        $__internal_e65045490e391b1786204d6610ac8f90425eaf7b1144344444e38805429e1115->leave($__internal_e65045490e391b1786204d6610ac8f90425eaf7b1144344444e38805429e1115_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
