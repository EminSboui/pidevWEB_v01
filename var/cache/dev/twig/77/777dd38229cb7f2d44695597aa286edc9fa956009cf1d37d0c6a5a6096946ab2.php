<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_ad4ce385a8390ee0a1be7b2a5a0b324e5220a25e1f9884110e716005d48dd42c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'index' => array($this, 'block_index'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bf1593c44d2def3cf806ea3851ecc78fc67e8e9bf94eab5314efd3c69286955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf1593c44d2def3cf806ea3851ecc78fc67e8e9bf94eab5314efd3c69286955->enter($__internal_1bf1593c44d2def3cf806ea3851ecc78fc67e8e9bf94eab5314efd3c69286955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_9e020815980a980ca8174d6c7817a4f2b3ce5f529e5c9fdab146fef8a419d769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e020815980a980ca8174d6c7817a4f2b3ce5f529e5c9fdab146fef8a419d769->enter($__internal_9e020815980a980ca8174d6c7817a4f2b3ce5f529e5c9fdab146fef8a419d769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bf1593c44d2def3cf806ea3851ecc78fc67e8e9bf94eab5314efd3c69286955->leave($__internal_1bf1593c44d2def3cf806ea3851ecc78fc67e8e9bf94eab5314efd3c69286955_prof);

        
        $__internal_9e020815980a980ca8174d6c7817a4f2b3ce5f529e5c9fdab146fef8a419d769->leave($__internal_9e020815980a980ca8174d6c7817a4f2b3ce5f529e5c9fdab146fef8a419d769_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_c73046597557ad173dbbfe33d188426408e7f3ab040a748feb740c7efc998c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73046597557ad173dbbfe33d188426408e7f3ab040a748feb740c7efc998c3f->enter($__internal_c73046597557ad173dbbfe33d188426408e7f3ab040a748feb740c7efc998c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_8c53d0cb95e92842a15cc1153e6b764d8ed4ae429f1d2ded0bbc6dde208be2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c53d0cb95e92842a15cc1153e6b764d8ed4ae429f1d2ded0bbc6dde208be2d9->enter($__internal_8c53d0cb95e92842a15cc1153e6b764d8ed4ae429f1d2ded0bbc6dde208be2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 3
        echo "          <!--  ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 9
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 10
        echo "-->
        ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 13
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 14
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 15
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        ";
        }
        // line 20
        echo "
        <div>
            ";
        // line 22
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "
        </div>
";
        
        $__internal_8c53d0cb95e92842a15cc1153e6b764d8ed4ae429f1d2ded0bbc6dde208be2d9->leave($__internal_8c53d0cb95e92842a15cc1153e6b764d8ed4ae429f1d2ded0bbc6dde208be2d9_prof);

        
        $__internal_c73046597557ad173dbbfe33d188426408e7f3ab040a748feb740c7efc998c3f->leave($__internal_c73046597557ad173dbbfe33d188426408e7f3ab040a748feb740c7efc998c3f_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c51e818086702fc9d1c7d39102e64ffa94e02d4d30a6247c001648dd5b6c7e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51e818086702fc9d1c7d39102e64ffa94e02d4d30a6247c001648dd5b6c7e80->enter($__internal_c51e818086702fc9d1c7d39102e64ffa94e02d4d30a6247c001648dd5b6c7e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce68a97338a5decc3c1bf2034ae0a6b05fa19354d7306062b27edf567d9f4c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce68a97338a5decc3c1bf2034ae0a6b05fa19354d7306062b27edf567d9f4c43->enter($__internal_ce68a97338a5decc3c1bf2034ae0a6b05fa19354d7306062b27edf567d9f4c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_ce68a97338a5decc3c1bf2034ae0a6b05fa19354d7306062b27edf567d9f4c43->leave($__internal_ce68a97338a5decc3c1bf2034ae0a6b05fa19354d7306062b27edf567d9f4c43_prof);

        
        $__internal_c51e818086702fc9d1c7d39102e64ffa94e02d4d30a6247c001648dd5b6c7e80->leave($__internal_c51e818086702fc9d1c7d39102e64ffa94e02d4d30a6247c001648dd5b6c7e80_prof);

    }

    // line 27
    public function block_index($context, array $blocks = array())
    {
        $__internal_87a90081be8740816c5c254ac8e6cafe2847585d249790ca83e86d9ff09853f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a90081be8740816c5c254ac8e6cafe2847585d249790ca83e86d9ff09853f2->enter($__internal_87a90081be8740816c5c254ac8e6cafe2847585d249790ca83e86d9ff09853f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "index"));

        $__internal_ce8c46f1219fa420f2ffa130b370e98bfaf57bc75d224cde21ab2983b44f5ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8c46f1219fa420f2ffa130b370e98bfaf57bc75d224cde21ab2983b44f5ca1->enter($__internal_ce8c46f1219fa420f2ffa130b370e98bfaf57bc75d224cde21ab2983b44f5ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "index"));

        
        $__internal_ce8c46f1219fa420f2ffa130b370e98bfaf57bc75d224cde21ab2983b44f5ca1->leave($__internal_ce8c46f1219fa420f2ffa130b370e98bfaf57bc75d224cde21ab2983b44f5ca1_prof);

        
        $__internal_87a90081be8740816c5c254ac8e6cafe2847585d249790ca83e86d9ff09853f2->leave($__internal_87a90081be8740816c5c254ac8e6cafe2847585d249790ca83e86d9ff09853f2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 27,  142 => 23,  133 => 22,  121 => 24,  119 => 22,  115 => 20,  112 => 19,  106 => 18,  97 => 15,  92 => 14,  87 => 13,  82 => 12,  80 => 11,  77 => 10,  69 => 9,  63 => 6,  59 => 5,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}
{% block login %}
          <!--  {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}-->
        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}

        </div>
{% endblock login %}
{% block index %}
{% endblock index %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\pidevWEB_v1.0\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
