<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ad3fa144b1bf2eb634e7bba0fe3de7bc5b7f81b32c15336c2bd01fda66383bff extends Twig_Template
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
        $__internal_eeba189418ff5547a98cdc86a0eaa44c0ee4c32ae5954002eb34770d91a2034b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeba189418ff5547a98cdc86a0eaa44c0ee4c32ae5954002eb34770d91a2034b->enter($__internal_eeba189418ff5547a98cdc86a0eaa44c0ee4c32ae5954002eb34770d91a2034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_11f9eb51697cfc62a8276e535eac90d24378468293d87bbc6628b91bb437224c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f9eb51697cfc62a8276e535eac90d24378468293d87bbc6628b91bb437224c->enter($__internal_11f9eb51697cfc62a8276e535eac90d24378468293d87bbc6628b91bb437224c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_eeba189418ff5547a98cdc86a0eaa44c0ee4c32ae5954002eb34770d91a2034b->leave($__internal_eeba189418ff5547a98cdc86a0eaa44c0ee4c32ae5954002eb34770d91a2034b_prof);

        
        $__internal_11f9eb51697cfc62a8276e535eac90d24378468293d87bbc6628b91bb437224c->leave($__internal_11f9eb51697cfc62a8276e535eac90d24378468293d87bbc6628b91bb437224c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
