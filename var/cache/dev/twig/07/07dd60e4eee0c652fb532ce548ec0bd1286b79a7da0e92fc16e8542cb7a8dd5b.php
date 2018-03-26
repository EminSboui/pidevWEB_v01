<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_5079ce74593c5b0279b3b5f461cc420181d0419358c523c28c4460b69b1962e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_140ce3d3e51e5bf7af799e117f02317daf688e269ddb83ce87047c706dc9c6e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140ce3d3e51e5bf7af799e117f02317daf688e269ddb83ce87047c706dc9c6e3->enter($__internal_140ce3d3e51e5bf7af799e117f02317daf688e269ddb83ce87047c706dc9c6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_69d43c6fa6f1fa9459926ada9da5788ac2a9ea594194f19e7d8ed329be9d46d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d43c6fa6f1fa9459926ada9da5788ac2a9ea594194f19e7d8ed329be9d46d9->enter($__internal_69d43c6fa6f1fa9459926ada9da5788ac2a9ea594194f19e7d8ed329be9d46d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

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
                    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "


                    <table class=\"table-responsive\" id=\"tab\" hidden>
                        <tr>
                            <td>";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "</td>
                            <td>";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Last Name :</td>
                            <td>";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Username :</td>
                            <td>";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr id=\"pastryname\">

                        </tr>
                        <tr>
                            <td>Email :</td>
                            <td>";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Password :</td>
                            <td>";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Retype Password :</td>
                            <td>";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Phone :</td>
                            <td>";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Town :</td>
                            <td>";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "town", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Picture :</td>
                            <td>";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Address :</td>
                            <td>";
        // line 114
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
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postalcode", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Website :</td>
                            <td>";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <td>Facebook :</td>
                            <td>";
        // line 138
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
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                    </div>
                    ";
        // line 152
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_140ce3d3e51e5bf7af799e117f02317daf688e269ddb83ce87047c706dc9c6e3->leave($__internal_140ce3d3e51e5bf7af799e117f02317daf688e269ddb83ce87047c706dc9c6e3_prof);

        
        $__internal_69d43c6fa6f1fa9459926ada9da5788ac2a9ea594194f19e7d8ed329be9d46d9->leave($__internal_69d43c6fa6f1fa9459926ada9da5788ac2a9ea594194f19e7d8ed329be9d46d9_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_306cae345da55f8302c98c3dbc4644964bc38547634d29d9e61758760ad8efa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306cae345da55f8302c98c3dbc4644964bc38547634d29d9e61758760ad8efa7->enter($__internal_306cae345da55f8302c98c3dbc4644964bc38547634d29d9e61758760ad8efa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bda2644e18be04c6ba9e1a058cad1baeedbe39b6b67323296d955d208e83c9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda2644e18be04c6ba9e1a058cad1baeedbe39b6b67323296d955d208e83c9d1->enter($__internal_bda2644e18be04c6ba9e1a058cad1baeedbe39b6b67323296d955d208e83c9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "                    <script>
                        \$(document).ready(function () {
                            \$('input:radio[name=\"type\"]').change(
                                function () {
                                    if (\$(this).is(':checked') && \$(this).val() == 'Pastry') {
                                        \$('#tab').show();
                                        \$('#pastryname').append('                        <td>Pastry Name :</td>\\n' +
                                            '                            <td>";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pastryname", array()), 'widget');
        echo "</td>');
                                        \$('#worktime').append('                            <td>Work Time :</td>\\n' +
                                            '                            <td>";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "worktime", array()), 'widget');
        echo "</td>');
                                        \$('#dayoff').append('                            <td>Day Off :</td>\\n' +
                                            '                            <td>";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dayoff", array()), 'widget');
        echo "</td>');
                                        \$('#specialty').append('                            <td>Speciality :</td>\\n' +
                                            '                            <td>";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialty", array()), 'widget');
        echo "</td>');
                                        \$('#service').append('                            <td>Service :</td>\\n' +
                                            '                            <td>";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "service", array()), 'widget');
        echo "</td>');
                                        \$('#mop').append('                            <td>Means Of Payment :</td>\\n' +
                                            '                            <td>";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meansofpayment", array()), 'widget');
        echo "</td>');
                                        \$('#req').append('                            <td>Requirement :</td>\\n' +
                                            '                            <td>";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "requirement", array()), 'widget');
        echo "</td>');
                                    }
                                    else if (\$(this).is(':checked') && \$(this).val() == 'Client') {
                                        \$('#tab').show();
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
        
        $__internal_bda2644e18be04c6ba9e1a058cad1baeedbe39b6b67323296d955d208e83c9d1->leave($__internal_bda2644e18be04c6ba9e1a058cad1baeedbe39b6b67323296d955d208e83c9d1_prof);

        
        $__internal_306cae345da55f8302c98c3dbc4644964bc38547634d29d9e61758760ad8efa7->leave($__internal_306cae345da55f8302c98c3dbc4644964bc38547634d29d9e61758760ad8efa7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 51,  256 => 49,  251 => 47,  246 => 45,  241 => 43,  236 => 41,  231 => 39,  222 => 32,  213 => 31,  197 => 152,  192 => 150,  177 => 138,  170 => 134,  163 => 130,  144 => 114,  137 => 110,  130 => 106,  123 => 102,  116 => 98,  109 => 94,  102 => 90,  92 => 83,  85 => 79,  78 => 75,  74 => 74,  65 => 69,  63 => 31,  59 => 30,  33 => 7,  26 => 2,);
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
                    {% block javascripts %}
                    <script>
                        \$(document).ready(function () {
                            \$('input:radio[name=\"type\"]').change(
                                function () {
                                    if (\$(this).is(':checked') && \$(this).val() == 'Pastry') {
                                        \$('#tab').show();
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
                                        \$('#tab').show();
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
                    {% endblock javascripts %}
                    {{ form_start(form, {'method': 'post', 'action': path('register'), 'attr': {'class': 'fos_user_registration_register'}}) }}


                    <table class=\"table-responsive\" id=\"tab\" hidden>
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
</section>", "@FOSUser/Registration/register_content.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
