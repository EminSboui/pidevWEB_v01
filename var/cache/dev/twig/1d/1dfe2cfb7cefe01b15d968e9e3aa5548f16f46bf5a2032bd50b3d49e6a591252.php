<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b121a95cff9753905148ec33a6863f30f11e3b018a766539049058e288c83d55 extends Twig_Template
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
        $__internal_7fea01f90be2fce84d19fe9c4fa8204c04c11a75cb45ee9615948c13760bf567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fea01f90be2fce84d19fe9c4fa8204c04c11a75cb45ee9615948c13760bf567->enter($__internal_7fea01f90be2fce84d19fe9c4fa8204c04c11a75cb45ee9615948c13760bf567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_994944ea007504351d9b22c986b4d5c5df5e2f84d93d789c159bd9211c30ce6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994944ea007504351d9b22c986b4d5c5df5e2f84d93d789c159bd9211c30ce6c->enter($__internal_994944ea007504351d9b22c986b4d5c5df5e2f84d93d789c159bd9211c30ce6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7fea01f90be2fce84d19fe9c4fa8204c04c11a75cb45ee9615948c13760bf567->leave($__internal_7fea01f90be2fce84d19fe9c4fa8204c04c11a75cb45ee9615948c13760bf567_prof);

        
        $__internal_994944ea007504351d9b22c986b4d5c5df5e2f84d93d789c159bd9211c30ce6c->leave($__internal_994944ea007504351d9b22c986b4d5c5df5e2f84d93d789c159bd9211c30ce6c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e41813a17633cac85185ac5b5f2f64c4eedfcb36c7ee3b227b4133b3d573d608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41813a17633cac85185ac5b5f2f64c4eedfcb36c7ee3b227b4133b3d573d608->enter($__internal_e41813a17633cac85185ac5b5f2f64c4eedfcb36c7ee3b227b4133b3d573d608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99889f2f930a02644ea67f1ab984f34a04ccad31fa5bd6c61dda5a2df8e151bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99889f2f930a02644ea67f1ab984f34a04ccad31fa5bd6c61dda5a2df8e151bd->enter($__internal_99889f2f930a02644ea67f1ab984f34a04ccad31fa5bd6c61dda5a2df8e151bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_99889f2f930a02644ea67f1ab984f34a04ccad31fa5bd6c61dda5a2df8e151bd->leave($__internal_99889f2f930a02644ea67f1ab984f34a04ccad31fa5bd6c61dda5a2df8e151bd_prof);

        
        $__internal_e41813a17633cac85185ac5b5f2f64c4eedfcb36c7ee3b227b4133b3d573d608->leave($__internal_e41813a17633cac85185ac5b5f2f64c4eedfcb36c7ee3b227b4133b3d573d608_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_91802aecc24378c59f64eaea9dd29ce89032457e9ebc1fa2fa6dc4d15b771f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91802aecc24378c59f64eaea9dd29ce89032457e9ebc1fa2fa6dc4d15b771f9f->enter($__internal_91802aecc24378c59f64eaea9dd29ce89032457e9ebc1fa2fa6dc4d15b771f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_afb0565d356391b0edff631c72f60b3ed01683b6d8b0498dbffbb6c679712dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb0565d356391b0edff631c72f60b3ed01683b6d8b0498dbffbb6c679712dd1->enter($__internal_afb0565d356391b0edff631c72f60b3ed01683b6d8b0498dbffbb6c679712dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_afb0565d356391b0edff631c72f60b3ed01683b6d8b0498dbffbb6c679712dd1->leave($__internal_afb0565d356391b0edff631c72f60b3ed01683b6d8b0498dbffbb6c679712dd1_prof);

        
        $__internal_91802aecc24378c59f64eaea9dd29ce89032457e9ebc1fa2fa6dc4d15b771f9f->leave($__internal_91802aecc24378c59f64eaea9dd29ce89032457e9ebc1fa2fa6dc4d15b771f9f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_67b12623e06cedaafe61dd3b22a8072e6b25ce6472633bfad433d67cc6b7a43e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b12623e06cedaafe61dd3b22a8072e6b25ce6472633bfad433d67cc6b7a43e->enter($__internal_67b12623e06cedaafe61dd3b22a8072e6b25ce6472633bfad433d67cc6b7a43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f91567d4d7e018a72cb54c4e6e1d6f3c3dd5bc588cc53ae3f8ec00b9c4a88cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f91567d4d7e018a72cb54c4e6e1d6f3c3dd5bc588cc53ae3f8ec00b9c4a88cf->enter($__internal_1f91567d4d7e018a72cb54c4e6e1d6f3c3dd5bc588cc53ae3f8ec00b9c4a88cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f91567d4d7e018a72cb54c4e6e1d6f3c3dd5bc588cc53ae3f8ec00b9c4a88cf->leave($__internal_1f91567d4d7e018a72cb54c4e6e1d6f3c3dd5bc588cc53ae3f8ec00b9c4a88cf_prof);

        
        $__internal_67b12623e06cedaafe61dd3b22a8072e6b25ce6472633bfad433d67cc6b7a43e->leave($__internal_67b12623e06cedaafe61dd3b22a8072e6b25ce6472633bfad433d67cc6b7a43e_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\pidev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
