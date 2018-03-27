<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_412930169cab5812e4c6f9ba98c814a7b0977534048d3ddfcdd45ed6e523db62 extends Twig_Template
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
        $__internal_906310b6491433572ce864f0f4da6484b58f7cc01211f7fa781c3003135ba4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906310b6491433572ce864f0f4da6484b58f7cc01211f7fa781c3003135ba4e4->enter($__internal_906310b6491433572ce864f0f4da6484b58f7cc01211f7fa781c3003135ba4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_dfe8d5bc165c52b0225b75171554a970e2f1d970fa122424c87d34d8237e0637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe8d5bc165c52b0225b75171554a970e2f1d970fa122424c87d34d8237e0637->enter($__internal_dfe8d5bc165c52b0225b75171554a970e2f1d970fa122424c87d34d8237e0637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_906310b6491433572ce864f0f4da6484b58f7cc01211f7fa781c3003135ba4e4->leave($__internal_906310b6491433572ce864f0f4da6484b58f7cc01211f7fa781c3003135ba4e4_prof);

        
        $__internal_dfe8d5bc165c52b0225b75171554a970e2f1d970fa122424c87d34d8237e0637->leave($__internal_dfe8d5bc165c52b0225b75171554a970e2f1d970fa122424c87d34d8237e0637_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2169d449dc98a26a04cdd005683dd5eb9742d71d44f4681cf8129ecd359216dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2169d449dc98a26a04cdd005683dd5eb9742d71d44f4681cf8129ecd359216dc->enter($__internal_2169d449dc98a26a04cdd005683dd5eb9742d71d44f4681cf8129ecd359216dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90b421f1d78d27771e3fccc497eddeae5e2fef47cb0a99aea913f6afc939c34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b421f1d78d27771e3fccc497eddeae5e2fef47cb0a99aea913f6afc939c34e->enter($__internal_90b421f1d78d27771e3fccc497eddeae5e2fef47cb0a99aea913f6afc939c34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_90b421f1d78d27771e3fccc497eddeae5e2fef47cb0a99aea913f6afc939c34e->leave($__internal_90b421f1d78d27771e3fccc497eddeae5e2fef47cb0a99aea913f6afc939c34e_prof);

        
        $__internal_2169d449dc98a26a04cdd005683dd5eb9742d71d44f4681cf8129ecd359216dc->leave($__internal_2169d449dc98a26a04cdd005683dd5eb9742d71d44f4681cf8129ecd359216dc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_83fe7b68226d40aefe11c06ce78521fdca64e22e0f0efd41fa98526741b1c34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83fe7b68226d40aefe11c06ce78521fdca64e22e0f0efd41fa98526741b1c34f->enter($__internal_83fe7b68226d40aefe11c06ce78521fdca64e22e0f0efd41fa98526741b1c34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_08a4a0df3f847efc96945d4f531706c48c4b1b6961cbd4c7f80c24edd1a26b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a4a0df3f847efc96945d4f531706c48c4b1b6961cbd4c7f80c24edd1a26b82->enter($__internal_08a4a0df3f847efc96945d4f531706c48c4b1b6961cbd4c7f80c24edd1a26b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_08a4a0df3f847efc96945d4f531706c48c4b1b6961cbd4c7f80c24edd1a26b82->leave($__internal_08a4a0df3f847efc96945d4f531706c48c4b1b6961cbd4c7f80c24edd1a26b82_prof);

        
        $__internal_83fe7b68226d40aefe11c06ce78521fdca64e22e0f0efd41fa98526741b1c34f->leave($__internal_83fe7b68226d40aefe11c06ce78521fdca64e22e0f0efd41fa98526741b1c34f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_673311c99342390eccac92f632422b6dda7cbab761881d3150b53e02fffd7763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673311c99342390eccac92f632422b6dda7cbab761881d3150b53e02fffd7763->enter($__internal_673311c99342390eccac92f632422b6dda7cbab761881d3150b53e02fffd7763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cd49aae5369a03780877cd1644a0eecd71af4f7f67bcee15a64cd77aeeffe1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd49aae5369a03780877cd1644a0eecd71af4f7f67bcee15a64cd77aeeffe1f->enter($__internal_3cd49aae5369a03780877cd1644a0eecd71af4f7f67bcee15a64cd77aeeffe1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3cd49aae5369a03780877cd1644a0eecd71af4f7f67bcee15a64cd77aeeffe1f->leave($__internal_3cd49aae5369a03780877cd1644a0eecd71af4f7f67bcee15a64cd77aeeffe1f_prof);

        
        $__internal_673311c99342390eccac92f632422b6dda7cbab761881d3150b53e02fffd7763->leave($__internal_673311c99342390eccac92f632422b6dda7cbab761881d3150b53e02fffd7763_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\pidevWEB_v1.0\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
