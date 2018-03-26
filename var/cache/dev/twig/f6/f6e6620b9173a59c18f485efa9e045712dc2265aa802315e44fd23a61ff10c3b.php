<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_6c92e0b42a2a05960cef5d73d386c91ad371492542ec05e25d0fa01206ccd916 extends Twig_Template
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
        $__internal_44895c236f1f9840677beb0f7a54475742cdf52ecef6365a76ab22f549874287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44895c236f1f9840677beb0f7a54475742cdf52ecef6365a76ab22f549874287->enter($__internal_44895c236f1f9840677beb0f7a54475742cdf52ecef6365a76ab22f549874287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6afd29985f009d02c71c5256b9b422ea0c8a0b94b7c2c6f80c5047bd399f3ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afd29985f009d02c71c5256b9b422ea0c8a0b94b7c2c6f80c5047bd399f3ae5->enter($__internal_6afd29985f009d02c71c5256b9b422ea0c8a0b94b7c2c6f80c5047bd399f3ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_44895c236f1f9840677beb0f7a54475742cdf52ecef6365a76ab22f549874287->leave($__internal_44895c236f1f9840677beb0f7a54475742cdf52ecef6365a76ab22f549874287_prof);

        
        $__internal_6afd29985f009d02c71c5256b9b422ea0c8a0b94b7c2c6f80c5047bd399f3ae5->leave($__internal_6afd29985f009d02c71c5256b9b422ea0c8a0b94b7c2c6f80c5047bd399f3ae5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
