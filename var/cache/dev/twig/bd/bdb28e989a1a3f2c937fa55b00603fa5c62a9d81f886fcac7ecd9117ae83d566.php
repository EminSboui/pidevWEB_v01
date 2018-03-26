<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_dec466c5d18acebf247e34e08811746c77e4e5360f4531985058bfeaa2425141 extends Twig_Template
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
        $__internal_178f2ab0b97c1fdb07c680a457e9d9814bf4c2bfa4f273934a90223ba52007f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178f2ab0b97c1fdb07c680a457e9d9814bf4c2bfa4f273934a90223ba52007f4->enter($__internal_178f2ab0b97c1fdb07c680a457e9d9814bf4c2bfa4f273934a90223ba52007f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_08a51d6e02d4f504de20283500717b7c82d920341c738812882793eb56d8334f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a51d6e02d4f504de20283500717b7c82d920341c738812882793eb56d8334f->enter($__internal_08a51d6e02d4f504de20283500717b7c82d920341c738812882793eb56d8334f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_178f2ab0b97c1fdb07c680a457e9d9814bf4c2bfa4f273934a90223ba52007f4->leave($__internal_178f2ab0b97c1fdb07c680a457e9d9814bf4c2bfa4f273934a90223ba52007f4_prof);

        
        $__internal_08a51d6e02d4f504de20283500717b7c82d920341c738812882793eb56d8334f->leave($__internal_08a51d6e02d4f504de20283500717b7c82d920341c738812882793eb56d8334f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
