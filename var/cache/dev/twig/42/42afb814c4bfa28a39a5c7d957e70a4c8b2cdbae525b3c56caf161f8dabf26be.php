<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a45ee52b07c68062bb7c1d25b901ce3826b0aedfe8d86f29e84a4567016cd32e extends Twig_Template
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
        $__internal_f979547c142005fd5f709590cabfda1febc7bad8fc28e75d5d14cba088bb8e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f979547c142005fd5f709590cabfda1febc7bad8fc28e75d5d14cba088bb8e82->enter($__internal_f979547c142005fd5f709590cabfda1febc7bad8fc28e75d5d14cba088bb8e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e96bd10eb250928e8461a82d4ba9d3aff2164fe03de0a2480319490ba6a0bc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96bd10eb250928e8461a82d4ba9d3aff2164fe03de0a2480319490ba6a0bc97->enter($__internal_e96bd10eb250928e8461a82d4ba9d3aff2164fe03de0a2480319490ba6a0bc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f979547c142005fd5f709590cabfda1febc7bad8fc28e75d5d14cba088bb8e82->leave($__internal_f979547c142005fd5f709590cabfda1febc7bad8fc28e75d5d14cba088bb8e82_prof);

        
        $__internal_e96bd10eb250928e8461a82d4ba9d3aff2164fe03de0a2480319490ba6a0bc97->leave($__internal_e96bd10eb250928e8461a82d4ba9d3aff2164fe03de0a2480319490ba6a0bc97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
