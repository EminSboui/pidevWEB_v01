<?php

/* form_table_layout.html.twig */
class __TwigTemplate_4c7c579ffaf263d349b109fe83f2224a9e01ec67b0e37386703b3cceac8c8b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab07eec8f432f81d5bec3606f219aa7593602d2713d1dba34e6abaacd0068624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab07eec8f432f81d5bec3606f219aa7593602d2713d1dba34e6abaacd0068624->enter($__internal_ab07eec8f432f81d5bec3606f219aa7593602d2713d1dba34e6abaacd0068624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_80cabb13808b3981848ca3a6e2b0dbcff881e32e8191aafd6b4ca61c78696b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80cabb13808b3981848ca3a6e2b0dbcff881e32e8191aafd6b4ca61c78696b99->enter($__internal_80cabb13808b3981848ca3a6e2b0dbcff881e32e8191aafd6b4ca61c78696b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_ab07eec8f432f81d5bec3606f219aa7593602d2713d1dba34e6abaacd0068624->leave($__internal_ab07eec8f432f81d5bec3606f219aa7593602d2713d1dba34e6abaacd0068624_prof);

        
        $__internal_80cabb13808b3981848ca3a6e2b0dbcff881e32e8191aafd6b4ca61c78696b99->leave($__internal_80cabb13808b3981848ca3a6e2b0dbcff881e32e8191aafd6b4ca61c78696b99_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5e52f78b948c5f1a78a52acd7c281f9296c0f3a5d42e6bbeab2e03271a82dffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e52f78b948c5f1a78a52acd7c281f9296c0f3a5d42e6bbeab2e03271a82dffd->enter($__internal_5e52f78b948c5f1a78a52acd7c281f9296c0f3a5d42e6bbeab2e03271a82dffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_79979dcbb6a87df51489a1af754fb0ecbe48bcf602c331295d8c794a55cd9cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79979dcbb6a87df51489a1af754fb0ecbe48bcf602c331295d8c794a55cd9cf6->enter($__internal_79979dcbb6a87df51489a1af754fb0ecbe48bcf602c331295d8c794a55cd9cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_79979dcbb6a87df51489a1af754fb0ecbe48bcf602c331295d8c794a55cd9cf6->leave($__internal_79979dcbb6a87df51489a1af754fb0ecbe48bcf602c331295d8c794a55cd9cf6_prof);

        
        $__internal_5e52f78b948c5f1a78a52acd7c281f9296c0f3a5d42e6bbeab2e03271a82dffd->leave($__internal_5e52f78b948c5f1a78a52acd7c281f9296c0f3a5d42e6bbeab2e03271a82dffd_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_bde8fb3bd42100eb1d70bfb46b31e0c47fd263660bc5c2858d259d6bc2183263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde8fb3bd42100eb1d70bfb46b31e0c47fd263660bc5c2858d259d6bc2183263->enter($__internal_bde8fb3bd42100eb1d70bfb46b31e0c47fd263660bc5c2858d259d6bc2183263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_e89b7787e9433d054e58aa9f1049b7a17eed16d8bf972120cf7b91b0bb2d84f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89b7787e9433d054e58aa9f1049b7a17eed16d8bf972120cf7b91b0bb2d84f0->enter($__internal_e89b7787e9433d054e58aa9f1049b7a17eed16d8bf972120cf7b91b0bb2d84f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_e89b7787e9433d054e58aa9f1049b7a17eed16d8bf972120cf7b91b0bb2d84f0->leave($__internal_e89b7787e9433d054e58aa9f1049b7a17eed16d8bf972120cf7b91b0bb2d84f0_prof);

        
        $__internal_bde8fb3bd42100eb1d70bfb46b31e0c47fd263660bc5c2858d259d6bc2183263->leave($__internal_bde8fb3bd42100eb1d70bfb46b31e0c47fd263660bc5c2858d259d6bc2183263_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_ebdfe7ae4c7983fd87d334dfa79e76ede2a12c241b43d8011d38fb624da035af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebdfe7ae4c7983fd87d334dfa79e76ede2a12c241b43d8011d38fb624da035af->enter($__internal_ebdfe7ae4c7983fd87d334dfa79e76ede2a12c241b43d8011d38fb624da035af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_8630fba749b57a37884f89b8745e871068098d914b03f03a76d01772c410736e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8630fba749b57a37884f89b8745e871068098d914b03f03a76d01772c410736e->enter($__internal_8630fba749b57a37884f89b8745e871068098d914b03f03a76d01772c410736e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_8630fba749b57a37884f89b8745e871068098d914b03f03a76d01772c410736e->leave($__internal_8630fba749b57a37884f89b8745e871068098d914b03f03a76d01772c410736e_prof);

        
        $__internal_ebdfe7ae4c7983fd87d334dfa79e76ede2a12c241b43d8011d38fb624da035af->leave($__internal_ebdfe7ae4c7983fd87d334dfa79e76ede2a12c241b43d8011d38fb624da035af_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_aeacfc7c76dd323ea310467e772c5baf92d63a270320be596d22c2e7bb531302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeacfc7c76dd323ea310467e772c5baf92d63a270320be596d22c2e7bb531302->enter($__internal_aeacfc7c76dd323ea310467e772c5baf92d63a270320be596d22c2e7bb531302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_663a34f613ca9498e0037de5cf82df5ab53c1b5c7c4068b17c9bc8e982ee5dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663a34f613ca9498e0037de5cf82df5ab53c1b5c7c4068b17c9bc8e982ee5dfd->enter($__internal_663a34f613ca9498e0037de5cf82df5ab53c1b5c7c4068b17c9bc8e982ee5dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_663a34f613ca9498e0037de5cf82df5ab53c1b5c7c4068b17c9bc8e982ee5dfd->leave($__internal_663a34f613ca9498e0037de5cf82df5ab53c1b5c7c4068b17c9bc8e982ee5dfd_prof);

        
        $__internal_aeacfc7c76dd323ea310467e772c5baf92d63a270320be596d22c2e7bb531302->leave($__internal_aeacfc7c76dd323ea310467e772c5baf92d63a270320be596d22c2e7bb531302_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
