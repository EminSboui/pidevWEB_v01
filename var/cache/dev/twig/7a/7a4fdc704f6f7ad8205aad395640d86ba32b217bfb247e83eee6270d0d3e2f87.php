<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d3e7f3e20c37d8e0875f013100a41064bd469efd8b232cfd89924093d3d65924 extends Twig_Template
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
        $__internal_e85457b086dc3dbc046756be6b5e31ea4168b3d1ad3f5af6b31fc20dd08e83ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85457b086dc3dbc046756be6b5e31ea4168b3d1ad3f5af6b31fc20dd08e83ba->enter($__internal_e85457b086dc3dbc046756be6b5e31ea4168b3d1ad3f5af6b31fc20dd08e83ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f1ef032b99c9b43b3db963f1596e5b9c3393da25c256a299073290fa883da758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ef032b99c9b43b3db963f1596e5b9c3393da25c256a299073290fa883da758->enter($__internal_f1ef032b99c9b43b3db963f1596e5b9c3393da25c256a299073290fa883da758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e85457b086dc3dbc046756be6b5e31ea4168b3d1ad3f5af6b31fc20dd08e83ba->leave($__internal_e85457b086dc3dbc046756be6b5e31ea4168b3d1ad3f5af6b31fc20dd08e83ba_prof);

        
        $__internal_f1ef032b99c9b43b3db963f1596e5b9c3393da25c256a299073290fa883da758->leave($__internal_f1ef032b99c9b43b3db963f1596e5b9c3393da25c256a299073290fa883da758_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
