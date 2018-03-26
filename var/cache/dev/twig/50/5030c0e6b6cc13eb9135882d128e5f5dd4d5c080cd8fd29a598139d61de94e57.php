<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_182aa7846139bc73fdbc600175f625ff2424b83970898f794688d9be8b44d6cc extends Twig_Template
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
        $__internal_b1f247739505ef8293cd0fba451625d09b081b0ca3b38d86bb7e2b53bcf930cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f247739505ef8293cd0fba451625d09b081b0ca3b38d86bb7e2b53bcf930cd->enter($__internal_b1f247739505ef8293cd0fba451625d09b081b0ca3b38d86bb7e2b53bcf930cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_292d38455bf05facc59bd20b380e148b1f1fdda0925a88ad1f35dc4153f5d4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292d38455bf05facc59bd20b380e148b1f1fdda0925a88ad1f35dc4153f5d4bb->enter($__internal_292d38455bf05facc59bd20b380e148b1f1fdda0925a88ad1f35dc4153f5d4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<section id=\"hero\" class=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3\">
                <div id=\"login\">
                    <div class=\"text-center\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/logi3.png"), "html", null, true);
        echo "\" alt=\"Image\"
                                                  data-retina=\"true\"></div>
                    <hr>
                    <table class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 table-responsive\">
                        <tbody>
                        <tr>
                            <td>
                                <div class=\"radio\">
                                    <label> <input type=\"radio\" name=\"type\" id=\"type\" class=\"checkbox\" value=\"Client\">Client</label>
                                </div>

                            </td>
                            <td>
                                <div class=\"radio\">
                                    <label> <input type=\"radio\" name=\"type\" id=\"typee\" class=\"checkbox\" value=\"Pastry\">Pastry</label>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div id=\"selected\">

                    </div>
                    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
                    <script>
                        \$(document).ready(function () {
                            \$('input:radio[name=\"type\"]').change(
                                function () {
                                    if (\$(this).is(':checked') && \$(this).val() == 'Pastry') {
                                        \$('#pastryname').append('                        <td>Pastry Name :</td>\\n' +
                                            '                            <td>";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pastryname", array()), 'widget');
        echo "</td>');
                                        \$('#worktime').append('                            <td>Work Time :</td>\\n' +
                                            '                            <td>";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "worktime", array()), 'widget');
        echo "</td>');
                                        \$('#dayoff').append('                            <td>Day Off :</td>\\n' +
                                            '                            <td>";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dayoff", array()), 'widget');
        echo "</td>');
                                        \$('#specialty').append('                            <td>Speciality :</td>\\n' +
                                            '                            <td>";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialty", array()), 'widget');
        echo "</td>');
                                        \$('#service').append('                            <td>Service :</td>\\n' +
                                            '                            <td>";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "service", array()), 'widget');
        echo "</td>');
                                        \$('#mop').append('                            <td>Means Of Payment :</td>\\n' +
                                            '                            <td>";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meansofpayment", array()), 'widget');
        echo "</td>');
                                        \$('#req').append('                            <td>Requirement :</td>\\n' +
                                            '                            <td>";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "requirement", array()), 'widget');
        echo "</td>');
                                    }
                                    else if (\$(this).is(':checked') && \$(this).val() == 'Client') {
                                        \$('#pastryname').empty();
                                        \$('#worktime').empty();
                                        \$('#dayoff').empty();
                                        \$('#specialty').empty();
                                        \$('#service').empty();
                                        \$('#mop').empty();
                                        \$('#req').empty();
                                    }
                                });
                        })


                    </script>
                    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "


                    <table class=\"table-responsive\">
                        <tr>
                            <td>";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "</td>
                            <td>";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Last Name :</td>
                            <td>";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Username :</td>
                            <td>";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr id=\"pastryname\">

                        </tr>
                        <tr>
                            <td>Email :</td>
                            <td>";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Password :</td>
                            <td>";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Retype Password :</td>
                            <td>";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Phone :</td>
                            <td>";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Town :</td>
                            <td>";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "town", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Picture :</td>
                            <td>";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Address :</td>
                            <td>";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr id=\"worktime\">

                        </tr>
                        <tr id=\"dayoff\">

                        </tr>
                        <tr id=\"specialty\">

                        </tr>
                        <tr id=\"service\">

                        </tr>
                        <tr>
                            <td>Postal Code :</td>
                            <td>";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postalcode", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Website :</td>
                            <td>";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Facebook :</td>
                            <td>";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facebook", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr id=\"mop\">

                        </tr>
                        <tr id=\"req\">

                        </tr>

                    </table>

                    <div>
                        <input type=\"submit\" class=\"btn_full\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                    </div>
                    ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_b1f247739505ef8293cd0fba451625d09b081b0ca3b38d86bb7e2b53bcf930cd->leave($__internal_b1f247739505ef8293cd0fba451625d09b081b0ca3b38d86bb7e2b53bcf930cd_prof);

        
        $__internal_292d38455bf05facc59bd20b380e148b1f1fdda0925a88ad1f35dc4153f5d4bb->leave($__internal_292d38455bf05facc59bd20b380e148b1f1fdda0925a88ad1f35dc4153f5d4bb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 148,  243 => 146,  228 => 134,  221 => 130,  214 => 126,  195 => 110,  188 => 106,  181 => 102,  174 => 98,  167 => 94,  160 => 90,  153 => 86,  143 => 79,  136 => 75,  129 => 71,  125 => 70,  117 => 65,  98 => 49,  93 => 47,  88 => 45,  83 => 43,  78 => 41,  73 => 39,  68 => 37,  58 => 30,  32 => 7,  25 => 2,);
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
<section id=\"hero\" class=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3\">
                <div id=\"login\">
                    <div class=\"text-center\"><img src=\"{{ asset('Assets/img/logi3.png') }}\" alt=\"Image\"
                                                  data-retina=\"true\"></div>
                    <hr>
                    <table class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 table-responsive\">
                        <tbody>
                        <tr>
                            <td>
                                <div class=\"radio\">
                                    <label> <input type=\"radio\" name=\"type\" id=\"type\" class=\"checkbox\" value=\"Client\">Client</label>
                                </div>

                            </td>
                            <td>
                                <div class=\"radio\">
                                    <label> <input type=\"radio\" name=\"type\" id=\"typee\" class=\"checkbox\" value=\"Pastry\">Pastry</label>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div id=\"selected\">

                    </div>
                    <script src=\"{{ asset('Assets/js/jquery-1.11.2.min.js') }}\"></script>
                    <script>
                        \$(document).ready(function () {
                            \$('input:radio[name=\"type\"]').change(
                                function () {
                                    if (\$(this).is(':checked') && \$(this).val() == 'Pastry') {
                                        \$('#pastryname').append('                        <td>Pastry Name :</td>\\n' +
                                            '                            <td>{{ form_widget(form.pastryname) }}</td>');
                                        \$('#worktime').append('                            <td>Work Time :</td>\\n' +
                                            '                            <td>{{ form_widget(form.worktime) }}</td>');
                                        \$('#dayoff').append('                            <td>Day Off :</td>\\n' +
                                            '                            <td>{{ form_widget(form.dayoff) }}</td>');
                                        \$('#specialty').append('                            <td>Speciality :</td>\\n' +
                                            '                            <td>{{ form_widget(form.specialty) }}</td>');
                                        \$('#service').append('                            <td>Service :</td>\\n' +
                                            '                            <td>{{ form_widget(form.service) }}</td>');
                                        \$('#mop').append('                            <td>Means Of Payment :</td>\\n' +
                                            '                            <td>{{ form_widget(form.meansofpayment) }}</td>');
                                        \$('#req').append('                            <td>Requirement :</td>\\n' +
                                            '                            <td>{{ form_widget(form.requirement) }}</td>');
                                    }
                                    else if (\$(this).is(':checked') && \$(this).val() == 'Client') {
                                        \$('#pastryname').empty();
                                        \$('#worktime').empty();
                                        \$('#dayoff').empty();
                                        \$('#specialty').empty();
                                        \$('#service').empty();
                                        \$('#mop').empty();
                                        \$('#req').empty();
                                    }
                                });
                        })


                    </script>
                    {{ form_start(form, {'method': 'post', 'action': path('register'), 'attr': {'class': 'fos_user_registration_register'}}) }}


                    <table class=\"table-responsive\">
                        <tr>
                            <td>{{ form_label(form.firstname) }}</td>
                            <td>{{ form_widget(form.firstname) }}</td>
                        </tr>
                        <tr>
                            <td>Last Name :</td>
                            <td>{{ form_widget(form.lastname) }}</td>
                        </tr>
                        <tr>
                            <td>Username :</td>
                            <td>{{ form_widget(form.username) }}</td>
                        </tr>
                        <tr id=\"pastryname\">

                        </tr>
                        <tr>
                            <td>Email :</td>
                            <td>{{ form_widget(form.email) }}</td>
                        </tr>
                        <tr>
                            <td>Password :</td>
                            <td>{{ form_widget(form.plainPassword.first) }}</td>
                        </tr>
                        <tr>
                            <td>Retype Password :</td>
                            <td>{{ form_widget(form.plainPassword.second) }}</td>
                        </tr>
                        <tr>
                            <td>Phone :</td>
                            <td>{{ form_widget(form.phone) }}</td>
                        </tr>
                        <tr>
                            <td>Town :</td>
                            <td>{{ form_widget(form.town) }}</td>
                        </tr>
                        <tr>
                            <td>Picture :</td>
                            <td>{{ form_widget(form.picture) }}</td>
                        </tr>
                        <tr>
                            <td>Address :</td>
                            <td>{{ form_widget(form.address) }}</td>
                        </tr>
                        <tr id=\"worktime\">

                        </tr>
                        <tr id=\"dayoff\">

                        </tr>
                        <tr id=\"specialty\">

                        </tr>
                        <tr id=\"service\">

                        </tr>
                        <tr>
                            <td>Postal Code :</td>
                            <td>{{ form_widget(form.postalcode) }}</td>
                        </tr>
                        <tr>
                            <td>Website :</td>
                            <td>{{ form_widget(form.website) }}</td>
                        </tr>
                        <tr>
                            <td>Facebook :</td>
                            <td>{{ form_widget(form.facebook) }}</td>
                        </tr>
                        <tr id=\"mop\">

                        </tr>
                        <tr id=\"req\">

                        </tr>

                    </table>

                    <div>
                        <input type=\"submit\" class=\"btn_full\" value=\"{{ 'registration.submit'|trans }}\"/>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</section>", "FOSUserBundle:Registration:register_content.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
