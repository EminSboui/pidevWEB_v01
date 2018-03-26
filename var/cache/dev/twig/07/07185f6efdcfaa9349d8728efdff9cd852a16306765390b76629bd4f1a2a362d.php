<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_47fe85e48b7877cae90b7bc41541ebe4fc5c0d766d0bf2abc739005784095bb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df4d0f187a1b4d5a44bdc0e46d4d9bc8ce3a7b2a85de26902aca808daf9b6c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4d0f187a1b4d5a44bdc0e46d4d9bc8ce3a7b2a85de26902aca808daf9b6c23->enter($__internal_df4d0f187a1b4d5a44bdc0e46d4d9bc8ce3a7b2a85de26902aca808daf9b6c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_4c570274cd62d37822231672e13f760e48719808935fc789de9fc5be780e57e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c570274cd62d37822231672e13f760e48719808935fc789de9fc5be780e57e0->enter($__internal_4c570274cd62d37822231672e13f760e48719808935fc789de9fc5be780e57e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_df4d0f187a1b4d5a44bdc0e46d4d9bc8ce3a7b2a85de26902aca808daf9b6c23->leave($__internal_df4d0f187a1b4d5a44bdc0e46d4d9bc8ce3a7b2a85de26902aca808daf9b6c23_prof);

        
        $__internal_4c570274cd62d37822231672e13f760e48719808935fc789de9fc5be780e57e0->leave($__internal_4c570274cd62d37822231672e13f760e48719808935fc789de9fc5be780e57e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4d70b0c401a7ee714c5517a551ed07ad7a23256fcf829019b7af09670b6e0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d70b0c401a7ee714c5517a551ed07ad7a23256fcf829019b7af09670b6e0c0->enter($__internal_e4d70b0c401a7ee714c5517a551ed07ad7a23256fcf829019b7af09670b6e0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a07ad9535210dcfeb964e3dab5633119c6389f44880389ff693c3770e938ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a07ad9535210dcfeb964e3dab5633119c6389f44880389ff693c3770e938ddc->enter($__internal_3a07ad9535210dcfeb964e3dab5633119c6389f44880389ff693c3770e938ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3a07ad9535210dcfeb964e3dab5633119c6389f44880389ff693c3770e938ddc->leave($__internal_3a07ad9535210dcfeb964e3dab5633119c6389f44880389ff693c3770e938ddc_prof);

        
        $__internal_e4d70b0c401a7ee714c5517a551ed07ad7a23256fcf829019b7af09670b6e0c0->leave($__internal_e4d70b0c401a7ee714c5517a551ed07ad7a23256fcf829019b7af09670b6e0c0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b20cca60979553bd3c136b4496112049061f635994854f1f3cfeda2deea2b2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20cca60979553bd3c136b4496112049061f635994854f1f3cfeda2deea2b2b8->enter($__internal_b20cca60979553bd3c136b4496112049061f635994854f1f3cfeda2deea2b2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a5dd9ca6a1d4753ee2a06a3cb8a9e4ca8b5a1a3a0dda94c01153f6164c5521cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5dd9ca6a1d4753ee2a06a3cb8a9e4ca8b5a1a3a0dda94c01153f6164c5521cf->enter($__internal_a5dd9ca6a1d4753ee2a06a3cb8a9e4ca8b5a1a3a0dda94c01153f6164c5521cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a5dd9ca6a1d4753ee2a06a3cb8a9e4ca8b5a1a3a0dda94c01153f6164c5521cf->leave($__internal_a5dd9ca6a1d4753ee2a06a3cb8a9e4ca8b5a1a3a0dda94c01153f6164c5521cf_prof);

        
        $__internal_b20cca60979553bd3c136b4496112049061f635994854f1f3cfeda2deea2b2b8->leave($__internal_b20cca60979553bd3c136b4496112049061f635994854f1f3cfeda2deea2b2b8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebebe0b4f563555c229f4ba5960e531c7adf5b1935fa765bd524e4317a7b4b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebebe0b4f563555c229f4ba5960e531c7adf5b1935fa765bd524e4317a7b4b10->enter($__internal_ebebe0b4f563555c229f4ba5960e531c7adf5b1935fa765bd524e4317a7b4b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2af66eff37be088e2866f227619ba84e09959f02b411c5a4b22d21896c077073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af66eff37be088e2866f227619ba84e09959f02b411c5a4b22d21896c077073->enter($__internal_2af66eff37be088e2866f227619ba84e09959f02b411c5a4b22d21896c077073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2af66eff37be088e2866f227619ba84e09959f02b411c5a4b22d21896c077073->leave($__internal_2af66eff37be088e2866f227619ba84e09959f02b411c5a4b22d21896c077073_prof);

        
        $__internal_ebebe0b4f563555c229f4ba5960e531c7adf5b1935fa765bd524e4317a7b4b10->leave($__internal_ebebe0b4f563555c229f4ba5960e531c7adf5b1935fa765bd524e4317a7b4b10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
