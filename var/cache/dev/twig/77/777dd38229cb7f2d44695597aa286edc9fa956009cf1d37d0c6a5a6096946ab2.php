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
        $__internal_b93fed6344d7428c4716ac5e122e20d4597995fe630a8d5e0d347e302272c0c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93fed6344d7428c4716ac5e122e20d4597995fe630a8d5e0d347e302272c0c2->enter($__internal_b93fed6344d7428c4716ac5e122e20d4597995fe630a8d5e0d347e302272c0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_1dc77f9e02447dd53412406af4fa5a853e2a1967696b124ee380b3ff697c1975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc77f9e02447dd53412406af4fa5a853e2a1967696b124ee380b3ff697c1975->enter($__internal_1dc77f9e02447dd53412406af4fa5a853e2a1967696b124ee380b3ff697c1975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b93fed6344d7428c4716ac5e122e20d4597995fe630a8d5e0d347e302272c0c2->leave($__internal_b93fed6344d7428c4716ac5e122e20d4597995fe630a8d5e0d347e302272c0c2_prof);

        
        $__internal_1dc77f9e02447dd53412406af4fa5a853e2a1967696b124ee380b3ff697c1975->leave($__internal_1dc77f9e02447dd53412406af4fa5a853e2a1967696b124ee380b3ff697c1975_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_c5c2787491c6a80c96d44c82072557c49bf0e069c1eb321d6b5a625b23cd549c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c2787491c6a80c96d44c82072557c49bf0e069c1eb321d6b5a625b23cd549c->enter($__internal_c5c2787491c6a80c96d44c82072557c49bf0e069c1eb321d6b5a625b23cd549c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_1b31dbe35a77404777eca0d30ec1f507fb10d9ca86f39fe6832fd552bf2c347d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b31dbe35a77404777eca0d30ec1f507fb10d9ca86f39fe6832fd552bf2c347d->enter($__internal_1b31dbe35a77404777eca0d30ec1f507fb10d9ca86f39fe6832fd552bf2c347d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_1b31dbe35a77404777eca0d30ec1f507fb10d9ca86f39fe6832fd552bf2c347d->leave($__internal_1b31dbe35a77404777eca0d30ec1f507fb10d9ca86f39fe6832fd552bf2c347d_prof);

        
        $__internal_c5c2787491c6a80c96d44c82072557c49bf0e069c1eb321d6b5a625b23cd549c->leave($__internal_c5c2787491c6a80c96d44c82072557c49bf0e069c1eb321d6b5a625b23cd549c_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67ffd93e5bde7f5a266026a1289957af77c70c727c339a85cb143022613e7b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ffd93e5bde7f5a266026a1289957af77c70c727c339a85cb143022613e7b76->enter($__internal_67ffd93e5bde7f5a266026a1289957af77c70c727c339a85cb143022613e7b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_220e67743f15ef46783ad135bdd6b75f76cabbeadc27992856d0bb1b7b7da018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220e67743f15ef46783ad135bdd6b75f76cabbeadc27992856d0bb1b7b7da018->enter($__internal_220e67743f15ef46783ad135bdd6b75f76cabbeadc27992856d0bb1b7b7da018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_220e67743f15ef46783ad135bdd6b75f76cabbeadc27992856d0bb1b7b7da018->leave($__internal_220e67743f15ef46783ad135bdd6b75f76cabbeadc27992856d0bb1b7b7da018_prof);

        
        $__internal_67ffd93e5bde7f5a266026a1289957af77c70c727c339a85cb143022613e7b76->leave($__internal_67ffd93e5bde7f5a266026a1289957af77c70c727c339a85cb143022613e7b76_prof);

    }

    // line 27
    public function block_index($context, array $blocks = array())
    {
        $__internal_ca0bf8e4f54777358180197790dc51df848aeeda9b9b9e2167ed412874e17230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0bf8e4f54777358180197790dc51df848aeeda9b9b9e2167ed412874e17230->enter($__internal_ca0bf8e4f54777358180197790dc51df848aeeda9b9b9e2167ed412874e17230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "index"));

        $__internal_9b575527c95237d536171af574486ab4ba0e8c56f6ee11f7209b606ba01ccfb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b575527c95237d536171af574486ab4ba0e8c56f6ee11f7209b606ba01ccfb9->enter($__internal_9b575527c95237d536171af574486ab4ba0e8c56f6ee11f7209b606ba01ccfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "index"));

        
        $__internal_9b575527c95237d536171af574486ab4ba0e8c56f6ee11f7209b606ba01ccfb9->leave($__internal_9b575527c95237d536171af574486ab4ba0e8c56f6ee11f7209b606ba01ccfb9_prof);

        
        $__internal_ca0bf8e4f54777358180197790dc51df848aeeda9b9b9e2167ed412874e17230->leave($__internal_ca0bf8e4f54777358180197790dc51df848aeeda9b9b9e2167ed412874e17230_prof);

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
{% endblock index %}", "@FOSUser/layout.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
