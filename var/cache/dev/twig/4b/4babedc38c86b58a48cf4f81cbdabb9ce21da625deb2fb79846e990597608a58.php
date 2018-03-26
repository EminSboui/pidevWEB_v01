<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7fed83a189ac8ecc4f59499ae3beae955cad5fc3b079652135b129017bf4c7d1 extends Twig_Template
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
        $__internal_ac50b8892e8808aacfd5061de09b346ddcf383ce9e4045b91d8c0814c768c93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac50b8892e8808aacfd5061de09b346ddcf383ce9e4045b91d8c0814c768c93e->enter($__internal_ac50b8892e8808aacfd5061de09b346ddcf383ce9e4045b91d8c0814c768c93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_2a89a4f91283d0fc9a4733602cc7463e21846a59a5ca52c6aa14fef604f77fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a89a4f91283d0fc9a4733602cc7463e21846a59a5ca52c6aa14fef604f77fa5->enter($__internal_2a89a4f91283d0fc9a4733602cc7463e21846a59a5ca52c6aa14fef604f77fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ac50b8892e8808aacfd5061de09b346ddcf383ce9e4045b91d8c0814c768c93e->leave($__internal_ac50b8892e8808aacfd5061de09b346ddcf383ce9e4045b91d8c0814c768c93e_prof);

        
        $__internal_2a89a4f91283d0fc9a4733602cc7463e21846a59a5ca52c6aa14fef604f77fa5->leave($__internal_2a89a4f91283d0fc9a4733602cc7463e21846a59a5ca52c6aa14fef604f77fa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
