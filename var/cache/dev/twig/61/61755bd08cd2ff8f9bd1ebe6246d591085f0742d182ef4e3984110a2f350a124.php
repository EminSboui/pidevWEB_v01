<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_d8bbf82a64c75f31028b970d0e833c49f0bb3447e90cbbdf8e7b2f9ce14e40e4 extends Twig_Template
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
        $__internal_ae2d129be72c89225a6504504cc011477fa0320fe622066c557ab81469081dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2d129be72c89225a6504504cc011477fa0320fe622066c557ab81469081dbe->enter($__internal_ae2d129be72c89225a6504504cc011477fa0320fe622066c557ab81469081dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f21077b2d4b313f0afb3f5df9a995db16132cb6d4522680c08e05672b5028106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21077b2d4b313f0afb3f5df9a995db16132cb6d4522680c08e05672b5028106->enter($__internal_f21077b2d4b313f0afb3f5df9a995db16132cb6d4522680c08e05672b5028106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ae2d129be72c89225a6504504cc011477fa0320fe622066c557ab81469081dbe->leave($__internal_ae2d129be72c89225a6504504cc011477fa0320fe622066c557ab81469081dbe_prof);

        
        $__internal_f21077b2d4b313f0afb3f5df9a995db16132cb6d4522680c08e05672b5028106->leave($__internal_f21077b2d4b313f0afb3f5df9a995db16132cb6d4522680c08e05672b5028106_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
