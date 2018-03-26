<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_0714226eb598172c6df150972fc839567e21a75121d37690b60d95aa14468277 extends Twig_Template
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
        $__internal_18bc341ddd52358bf4e0f2d68e5613c1706bed8dd179a52e18110ae81612cd9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18bc341ddd52358bf4e0f2d68e5613c1706bed8dd179a52e18110ae81612cd9b->enter($__internal_18bc341ddd52358bf4e0f2d68e5613c1706bed8dd179a52e18110ae81612cd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f01a12797d8276cac831a27023dcb9508d7694132f9d62cd0260e3244b6bbf26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01a12797d8276cac831a27023dcb9508d7694132f9d62cd0260e3244b6bbf26->enter($__internal_f01a12797d8276cac831a27023dcb9508d7694132f9d62cd0260e3244b6bbf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_18bc341ddd52358bf4e0f2d68e5613c1706bed8dd179a52e18110ae81612cd9b->leave($__internal_18bc341ddd52358bf4e0f2d68e5613c1706bed8dd179a52e18110ae81612cd9b_prof);

        
        $__internal_f01a12797d8276cac831a27023dcb9508d7694132f9d62cd0260e3244b6bbf26->leave($__internal_f01a12797d8276cac831a27023dcb9508d7694132f9d62cd0260e3244b6bbf26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
