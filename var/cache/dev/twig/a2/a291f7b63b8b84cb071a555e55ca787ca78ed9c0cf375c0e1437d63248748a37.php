<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e6289e41785ac8db89ea2a6f75286fe9c2b1fe6d7f478261187483f5f2932dcc extends Twig_Template
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
        $__internal_1222430f25d0a7637ae6dd2e4b020bd8227b6bb66c6d70175e53209701f4553f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1222430f25d0a7637ae6dd2e4b020bd8227b6bb66c6d70175e53209701f4553f->enter($__internal_1222430f25d0a7637ae6dd2e4b020bd8227b6bb66c6d70175e53209701f4553f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_704574f3d8249ee0b9103cad10545864c2ce8ed1e02ab6db5f818f3426d42791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704574f3d8249ee0b9103cad10545864c2ce8ed1e02ab6db5f818f3426d42791->enter($__internal_704574f3d8249ee0b9103cad10545864c2ce8ed1e02ab6db5f818f3426d42791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1222430f25d0a7637ae6dd2e4b020bd8227b6bb66c6d70175e53209701f4553f->leave($__internal_1222430f25d0a7637ae6dd2e4b020bd8227b6bb66c6d70175e53209701f4553f_prof);

        
        $__internal_704574f3d8249ee0b9103cad10545864c2ce8ed1e02ab6db5f818f3426d42791->leave($__internal_704574f3d8249ee0b9103cad10545864c2ce8ed1e02ab6db5f818f3426d42791_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
