<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1150906dbea88cad3c73edad53f454f977691b3cf296008d3800b990fb93a975 extends Twig_Template
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
        $__internal_fba32b9af8901e14d75a9f4bc2710a73c5b53a51c0b7475a528c6fc375e07cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba32b9af8901e14d75a9f4bc2710a73c5b53a51c0b7475a528c6fc375e07cca->enter($__internal_fba32b9af8901e14d75a9f4bc2710a73c5b53a51c0b7475a528c6fc375e07cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_10002aca8e0f8d5d4b014c20986b4871b20b4e6a2e1b95776a4eb26ddfe4e7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10002aca8e0f8d5d4b014c20986b4871b20b4e6a2e1b95776a4eb26ddfe4e7e0->enter($__internal_10002aca8e0f8d5d4b014c20986b4871b20b4e6a2e1b95776a4eb26ddfe4e7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fba32b9af8901e14d75a9f4bc2710a73c5b53a51c0b7475a528c6fc375e07cca->leave($__internal_fba32b9af8901e14d75a9f4bc2710a73c5b53a51c0b7475a528c6fc375e07cca_prof);

        
        $__internal_10002aca8e0f8d5d4b014c20986b4871b20b4e6a2e1b95776a4eb26ddfe4e7e0->leave($__internal_10002aca8e0f8d5d4b014c20986b4871b20b4e6a2e1b95776a4eb26ddfe4e7e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
