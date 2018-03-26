<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a32a2300229e65097bb9c052c2988d133c1507631ac9bb906f431e2ec968fcfa extends Twig_Template
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
        $__internal_40fa7182d77a71e096f7dc51665e06f63c8f0dea5e503f78b025be8a5f48f123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40fa7182d77a71e096f7dc51665e06f63c8f0dea5e503f78b025be8a5f48f123->enter($__internal_40fa7182d77a71e096f7dc51665e06f63c8f0dea5e503f78b025be8a5f48f123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e03946410fa8e7a5b663c7fde4e2df89a3d38602bf62447f31eb168f1eeb76fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03946410fa8e7a5b663c7fde4e2df89a3d38602bf62447f31eb168f1eeb76fa->enter($__internal_e03946410fa8e7a5b663c7fde4e2df89a3d38602bf62447f31eb168f1eeb76fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_40fa7182d77a71e096f7dc51665e06f63c8f0dea5e503f78b025be8a5f48f123->leave($__internal_40fa7182d77a71e096f7dc51665e06f63c8f0dea5e503f78b025be8a5f48f123_prof);

        
        $__internal_e03946410fa8e7a5b663c7fde4e2df89a3d38602bf62447f31eb168f1eeb76fa->leave($__internal_e03946410fa8e7a5b663c7fde4e2df89a3d38602bf62447f31eb168f1eeb76fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
