<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_774da089d72cbbbf769568ad80b81ee1404ab6c900ed25cd3de12be494e7f1ee extends Twig_Template
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
        $__internal_39ab5ce4d0892f688c9fe445f2c5bcfbf2da55d742e2151bb1f59322651f18c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ab5ce4d0892f688c9fe445f2c5bcfbf2da55d742e2151bb1f59322651f18c4->enter($__internal_39ab5ce4d0892f688c9fe445f2c5bcfbf2da55d742e2151bb1f59322651f18c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_f9e9fac77fefef3584f4aac6004528ea30098a1d30a1a1111cdf0c66a307a74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e9fac77fefef3584f4aac6004528ea30098a1d30a1a1111cdf0c66a307a74f->enter($__internal_f9e9fac77fefef3584f4aac6004528ea30098a1d30a1a1111cdf0c66a307a74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
    <section id=\"hero\" class=\"login\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3\">
                    <div id=\"login\">
                        <div class=\"text-center\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/logi3.png"), "html", null, true);
        echo "\" alt=\"Image\" data-retina=\"true\" ></div>
                        <hr>
                        <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            ";
        // line 15
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 16
            echo "                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                            ";
        }
        // line 18
        echo "                            <div class=\"row\">
                                <div class=\"col-md-6 col-sm-6 login_social\">
                                    <a href=\"#\" class=\"btn btn-primary btn-block\"><i class=\"icon-facebook\"></i> Facebook</a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 login_social\">
                                    <a href=\"#\" class=\"btn btn-info btn-block \"><i class=\"icon-twitter\"></i>Twitter</a>
                                </div>
                            </div> <!-- end row -->
                            <div class=\"login-or\"><hr class=\"hr-or\"><span class=\"span-or\">or</span></div>

                            <div class=\"form-group\">
                                <label for=\"username\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <input type=\"text\" class=\" form-control \" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" placeholder=\"Username\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" class=\" form-control\" placeholder=\"Password\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            </div>
                            ";
        // line 40
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 41
            echo "                                <div class=\"alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 43
        echo "                            <p class=\"small\">
                                <a href=\"#\">Forgot Password?</a>
                            </p>
                            <input type=\"submit\" class=\"btn_full\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                            <a href=\"register.html \" class=\"btn_full_outline\">Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_39ab5ce4d0892f688c9fe445f2c5bcfbf2da55d742e2151bb1f59322651f18c4->leave($__internal_39ab5ce4d0892f688c9fe445f2c5bcfbf2da55d742e2151bb1f59322651f18c4_prof);

        
        $__internal_f9e9fac77fefef3584f4aac6004528ea30098a1d30a1a1111cdf0c66a307a74f->leave($__internal_f9e9fac77fefef3584f4aac6004528ea30098a1d30a1a1111cdf0c66a307a74f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 46,  105 => 43,  99 => 41,  97 => 40,  92 => 38,  84 => 33,  78 => 30,  74 => 29,  61 => 18,  55 => 16,  53 => 15,  49 => 14,  44 => 12,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

    <section id=\"hero\" class=\"login\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3\">
                    <div id=\"login\">
                        <div class=\"text-center\"><img src=\"{{ asset('Assets/img/logi3.png') }}\" alt=\"Image\" data-retina=\"true\" ></div>
                        <hr>
                        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                            {% if csrf_token %}
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                            {% endif %}
                            <div class=\"row\">
                                <div class=\"col-md-6 col-sm-6 login_social\">
                                    <a href=\"#\" class=\"btn btn-primary btn-block\"><i class=\"icon-facebook\"></i> Facebook</a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 login_social\">
                                    <a href=\"#\" class=\"btn btn-info btn-block \"><i class=\"icon-twitter\"></i>Twitter</a>
                                </div>
                            </div> <!-- end row -->
                            <div class=\"login-or\"><hr class=\"hr-or\"><span class=\"span-or\">or</span></div>

                            <div class=\"form-group\">
                                <label for=\"username\">{{  'security.login.username'|trans }}</label>
                                <input type=\"text\" class=\" form-control \" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" placeholder=\"Username\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" class=\" form-control\" placeholder=\"Password\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                            </div>
                            {% if error %}
                                <div class=\"alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}
                            <p class=\"small\">
                                <a href=\"#\">Forgot Password?</a>
                            </p>
                            <input type=\"submit\" class=\"btn_full\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                            <a href=\"register.html \" class=\"btn_full_outline\">Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\pidevWEB_v1.0\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
