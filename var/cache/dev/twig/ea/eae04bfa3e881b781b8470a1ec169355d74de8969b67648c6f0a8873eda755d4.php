<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_415d0e69a5c17c2590416579385026468ded59e577b60150c0223daee531a047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_60010ddc92de5d9316d48b3716ad879b4be7373a9a887ea2543b3ec2c0b1d16d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60010ddc92de5d9316d48b3716ad879b4be7373a9a887ea2543b3ec2c0b1d16d->enter($__internal_60010ddc92de5d9316d48b3716ad879b4be7373a9a887ea2543b3ec2c0b1d16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_3d9287046ce574385e85d517fa67e23698a794ab3cfae9c364aae2401efcc47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9287046ce574385e85d517fa67e23698a794ab3cfae9c364aae2401efcc47b->enter($__internal_3d9287046ce574385e85d517fa67e23698a794ab3cfae9c364aae2401efcc47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60010ddc92de5d9316d48b3716ad879b4be7373a9a887ea2543b3ec2c0b1d16d->leave($__internal_60010ddc92de5d9316d48b3716ad879b4be7373a9a887ea2543b3ec2c0b1d16d_prof);

        
        $__internal_3d9287046ce574385e85d517fa67e23698a794ab3cfae9c364aae2401efcc47b->leave($__internal_3d9287046ce574385e85d517fa67e23698a794ab3cfae9c364aae2401efcc47b_prof);

    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        $__internal_2985692659b6c179318295741ae0d46cd60f3072581542be8b7b5136141e4aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2985692659b6c179318295741ae0d46cd60f3072581542be8b7b5136141e4aa6->enter($__internal_2985692659b6c179318295741ae0d46cd60f3072581542be8b7b5136141e4aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_d54a433a667af12b8a18d2ac9d30f05800eca55926e1a3d358e745d20b0464f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54a433a667af12b8a18d2ac9d30f05800eca55926e1a3d358e745d20b0464f8->enter($__internal_d54a433a667af12b8a18d2ac9d30f05800eca55926e1a3d358e745d20b0464f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        echo "        </div>
";
        
        $__internal_d54a433a667af12b8a18d2ac9d30f05800eca55926e1a3d358e745d20b0464f8->leave($__internal_d54a433a667af12b8a18d2ac9d30f05800eca55926e1a3d358e745d20b0464f8_prof);

        
        $__internal_2985692659b6c179318295741ae0d46cd60f3072581542be8b7b5136141e4aa6->leave($__internal_2985692659b6c179318295741ae0d46cd60f3072581542be8b7b5136141e4aa6_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1012d4f3841fd9c15864252e129243672c1d44cfc2795bf76aca012efe6870c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1012d4f3841fd9c15864252e129243672c1d44cfc2795bf76aca012efe6870c->enter($__internal_e1012d4f3841fd9c15864252e129243672c1d44cfc2795bf76aca012efe6870c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_10c25e1429bf0e16b6fdb9853737f896fb9b0d7739c4899a75c56d8ba4d7efb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c25e1429bf0e16b6fdb9853737f896fb9b0d7739c4899a75c56d8ba4d7efb9->enter($__internal_10c25e1429bf0e16b6fdb9853737f896fb9b0d7739c4899a75c56d8ba4d7efb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_10c25e1429bf0e16b6fdb9853737f896fb9b0d7739c4899a75c56d8ba4d7efb9->leave($__internal_10c25e1429bf0e16b6fdb9853737f896fb9b0d7739c4899a75c56d8ba4d7efb9_prof);

        
        $__internal_e1012d4f3841fd9c15864252e129243672c1d44cfc2795bf76aca012efe6870c->leave($__internal_e1012d4f3841fd9c15864252e129243672c1d44cfc2795bf76aca012efe6870c_prof);

    }

    // line 26
    public function block_index($context, array $blocks = array())
    {
        $__internal_16d985dc9b031d856d27ca34df4d9089f0784848836d905a221ee23f507ac21b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d985dc9b031d856d27ca34df4d9089f0784848836d905a221ee23f507ac21b->enter($__internal_16d985dc9b031d856d27ca34df4d9089f0784848836d905a221ee23f507ac21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "index"));

        $__internal_84e7be4087d35e58b877f70e79926a62509836e4f3207d572b45c15b0a94e1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e7be4087d35e58b877f70e79926a62509836e4f3207d572b45c15b0a94e1b0->enter($__internal_84e7be4087d35e58b877f70e79926a62509836e4f3207d572b45c15b0a94e1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "index"));

        
        $__internal_84e7be4087d35e58b877f70e79926a62509836e4f3207d572b45c15b0a94e1b0->leave($__internal_84e7be4087d35e58b877f70e79926a62509836e4f3207d572b45c15b0a94e1b0_prof);

        
        $__internal_16d985dc9b031d856d27ca34df4d9089f0784848836d905a221ee23f507ac21b->leave($__internal_16d985dc9b031d856d27ca34df4d9089f0784848836d905a221ee23f507ac21b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 26,  141 => 23,  132 => 22,  121 => 24,  119 => 22,  115 => 20,  112 => 19,  106 => 18,  97 => 15,  92 => 14,  87 => 13,  82 => 12,  80 => 11,  77 => 10,  69 => 9,  63 => 6,  59 => 5,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
{% endblock index %}", "FOSUserBundle::layout.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
