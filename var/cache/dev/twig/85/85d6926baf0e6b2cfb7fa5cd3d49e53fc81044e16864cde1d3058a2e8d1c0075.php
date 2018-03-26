<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c40a4471ffb33781106e144e5f763040aae3214c8a5fe29f57e27b719ba8467d extends Twig_Template
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
        $__internal_c87db40c3b8a4a51c6d0d28c7c658cdffdc87b9a15800b7b581a951e55e9309e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87db40c3b8a4a51c6d0d28c7c658cdffdc87b9a15800b7b581a951e55e9309e->enter($__internal_c87db40c3b8a4a51c6d0d28c7c658cdffdc87b9a15800b7b581a951e55e9309e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_73aad7cc4b78a7d61484e5faa169d27ed79fc5eb6e9d9fca88ae812f15aac654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73aad7cc4b78a7d61484e5faa169d27ed79fc5eb6e9d9fca88ae812f15aac654->enter($__internal_73aad7cc4b78a7d61484e5faa169d27ed79fc5eb6e9d9fca88ae812f15aac654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c87db40c3b8a4a51c6d0d28c7c658cdffdc87b9a15800b7b581a951e55e9309e->leave($__internal_c87db40c3b8a4a51c6d0d28c7c658cdffdc87b9a15800b7b581a951e55e9309e_prof);

        
        $__internal_73aad7cc4b78a7d61484e5faa169d27ed79fc5eb6e9d9fca88ae812f15aac654->leave($__internal_73aad7cc4b78a7d61484e5faa169d27ed79fc5eb6e9d9fca88ae812f15aac654_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
