<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2ce888abc8756bc87448f14ec3223a891a7272800ed0cdaaf8468d599b636a4c extends Twig_Template
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
        $__internal_6f326df687a2dfcc151cf4cf25301bc64b5d4989c79f560eace296b4657df63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f326df687a2dfcc151cf4cf25301bc64b5d4989c79f560eace296b4657df63e->enter($__internal_6f326df687a2dfcc151cf4cf25301bc64b5d4989c79f560eace296b4657df63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1cac2564c875705eb0571fa0094aed82b40f2aa3df4ecbab500b4ef2859d17bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cac2564c875705eb0571fa0094aed82b40f2aa3df4ecbab500b4ef2859d17bc->enter($__internal_1cac2564c875705eb0571fa0094aed82b40f2aa3df4ecbab500b4ef2859d17bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6f326df687a2dfcc151cf4cf25301bc64b5d4989c79f560eace296b4657df63e->leave($__internal_6f326df687a2dfcc151cf4cf25301bc64b5d4989c79f560eace296b4657df63e_prof);

        
        $__internal_1cac2564c875705eb0571fa0094aed82b40f2aa3df4ecbab500b4ef2859d17bc->leave($__internal_1cac2564c875705eb0571fa0094aed82b40f2aa3df4ecbab500b4ef2859d17bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
