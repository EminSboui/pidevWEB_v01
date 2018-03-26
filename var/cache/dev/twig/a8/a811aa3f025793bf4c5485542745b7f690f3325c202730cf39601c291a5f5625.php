<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a0654b23622c230108bc66893b5ef160399ded2c68b732315054e9936a0f07fe extends Twig_Template
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
        $__internal_9dc96edc16e4d449cb0028aab5570bb2b339b9b5032cc5c3e143c5d6cdc7b03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc96edc16e4d449cb0028aab5570bb2b339b9b5032cc5c3e143c5d6cdc7b03a->enter($__internal_9dc96edc16e4d449cb0028aab5570bb2b339b9b5032cc5c3e143c5d6cdc7b03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_eb9cfcbdbfc2fa92058e9a49f18edea6516b2b16ab85d9aaab305c0fa152d148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9cfcbdbfc2fa92058e9a49f18edea6516b2b16ab85d9aaab305c0fa152d148->enter($__internal_eb9cfcbdbfc2fa92058e9a49f18edea6516b2b16ab85d9aaab305c0fa152d148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9dc96edc16e4d449cb0028aab5570bb2b339b9b5032cc5c3e143c5d6cdc7b03a->leave($__internal_9dc96edc16e4d449cb0028aab5570bb2b339b9b5032cc5c3e143c5d6cdc7b03a_prof);

        
        $__internal_eb9cfcbdbfc2fa92058e9a49f18edea6516b2b16ab85d9aaab305c0fa152d148->leave($__internal_eb9cfcbdbfc2fa92058e9a49f18edea6516b2b16ab85d9aaab305c0fa152d148_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
