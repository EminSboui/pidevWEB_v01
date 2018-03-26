<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_0b43bc2f70c3d7d549a460a79aa9aeb6b9215ff127425cf85d9174c9d075d778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dc9f5d30950b2a3ad227d5629a3102cc4e5cddbc93c5fe494a787c49f53009b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc9f5d30950b2a3ad227d5629a3102cc4e5cddbc93c5fe494a787c49f53009b->enter($__internal_8dc9f5d30950b2a3ad227d5629a3102cc4e5cddbc93c5fe494a787c49f53009b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_40c8aad9197c45856b374a2b5461fe037b3f39e95eef438311bac6be3434baf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c8aad9197c45856b374a2b5461fe037b3f39e95eef438311bac6be3434baf3->enter($__internal_40c8aad9197c45856b374a2b5461fe037b3f39e95eef438311bac6be3434baf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dc9f5d30950b2a3ad227d5629a3102cc4e5cddbc93c5fe494a787c49f53009b->leave($__internal_8dc9f5d30950b2a3ad227d5629a3102cc4e5cddbc93c5fe494a787c49f53009b_prof);

        
        $__internal_40c8aad9197c45856b374a2b5461fe037b3f39e95eef438311bac6be3434baf3->leave($__internal_40c8aad9197c45856b374a2b5461fe037b3f39e95eef438311bac6be3434baf3_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_04f8cb467ae61157964ec1aa4849d9ef1b2ec34d5634827154f2599a32fd5438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f8cb467ae61157964ec1aa4849d9ef1b2ec34d5634827154f2599a32fd5438->enter($__internal_04f8cb467ae61157964ec1aa4849d9ef1b2ec34d5634827154f2599a32fd5438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a847f434836d52234119fcc370a947e6f70a3afd4a0a0575eaa7ad845caed4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a847f434836d52234119fcc370a947e6f70a3afd4a0a0575eaa7ad845caed4e8->enter($__internal_a847f434836d52234119fcc370a947e6f70a3afd4a0a0575eaa7ad845caed4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a847f434836d52234119fcc370a947e6f70a3afd4a0a0575eaa7ad845caed4e8->leave($__internal_a847f434836d52234119fcc370a947e6f70a3afd4a0a0575eaa7ad845caed4e8_prof);

        
        $__internal_04f8cb467ae61157964ec1aa4849d9ef1b2ec34d5634827154f2599a32fd5438->leave($__internal_04f8cb467ae61157964ec1aa4849d9ef1b2ec34d5634827154f2599a32fd5438_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_58d70417ce05ca5faf08404871da3b03e36e610253fb1689ca4821b630666751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d70417ce05ca5faf08404871da3b03e36e610253fb1689ca4821b630666751->enter($__internal_58d70417ce05ca5faf08404871da3b03e36e610253fb1689ca4821b630666751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_568a6c7eada65bd1cd95aeb7b864c7335de844f9f6ab4e0f5779c64eb5e15752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568a6c7eada65bd1cd95aeb7b864c7335de844f9f6ab4e0f5779c64eb5e15752->enter($__internal_568a6c7eada65bd1cd95aeb7b864c7335de844f9f6ab4e0f5779c64eb5e15752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_568a6c7eada65bd1cd95aeb7b864c7335de844f9f6ab4e0f5779c64eb5e15752->leave($__internal_568a6c7eada65bd1cd95aeb7b864c7335de844f9f6ab4e0f5779c64eb5e15752_prof);

        
        $__internal_58d70417ce05ca5faf08404871da3b03e36e610253fb1689ca4821b630666751->leave($__internal_58d70417ce05ca5faf08404871da3b03e36e610253fb1689ca4821b630666751_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ff87f3db4fe887da4abc3ea2a8c59de597b451015e705c603cb3d4ec8f2a5133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff87f3db4fe887da4abc3ea2a8c59de597b451015e705c603cb3d4ec8f2a5133->enter($__internal_ff87f3db4fe887da4abc3ea2a8c59de597b451015e705c603cb3d4ec8f2a5133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ee425ed50a21f76fd4e0eb327016f86c0d10a6249e49afd10f5b0e585fc408e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee425ed50a21f76fd4e0eb327016f86c0d10a6249e49afd10f5b0e585fc408e5->enter($__internal_ee425ed50a21f76fd4e0eb327016f86c0d10a6249e49afd10f5b0e585fc408e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ee425ed50a21f76fd4e0eb327016f86c0d10a6249e49afd10f5b0e585fc408e5->leave($__internal_ee425ed50a21f76fd4e0eb327016f86c0d10a6249e49afd10f5b0e585fc408e5_prof);

        
        $__internal_ff87f3db4fe887da4abc3ea2a8c59de597b451015e705c603cb3d4ec8f2a5133->leave($__internal_ff87f3db4fe887da4abc3ea2a8c59de597b451015e705c603cb3d4ec8f2a5133_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_07a5bcc729e2fbb11c78bee7436c5188a0747de71bafbcdc3cee134b8feb552b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a5bcc729e2fbb11c78bee7436c5188a0747de71bafbcdc3cee134b8feb552b->enter($__internal_07a5bcc729e2fbb11c78bee7436c5188a0747de71bafbcdc3cee134b8feb552b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_89c2ad0278db3a99979a82f65923cd93612cac7237f724bc9c644a449f28ebaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c2ad0278db3a99979a82f65923cd93612cac7237f724bc9c644a449f28ebaf->enter($__internal_89c2ad0278db3a99979a82f65923cd93612cac7237f724bc9c644a449f28ebaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_89c2ad0278db3a99979a82f65923cd93612cac7237f724bc9c644a449f28ebaf->leave($__internal_89c2ad0278db3a99979a82f65923cd93612cac7237f724bc9c644a449f28ebaf_prof);

        
        $__internal_07a5bcc729e2fbb11c78bee7436c5188a0747de71bafbcdc3cee134b8feb552b->leave($__internal_07a5bcc729e2fbb11c78bee7436c5188a0747de71bafbcdc3cee134b8feb552b_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_b5ba78be97a36fd28a4fe72ce02c7dbd657d57e5ec92f4b0bba8717c243c35f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ba78be97a36fd28a4fe72ce02c7dbd657d57e5ec92f4b0bba8717c243c35f2->enter($__internal_b5ba78be97a36fd28a4fe72ce02c7dbd657d57e5ec92f4b0bba8717c243c35f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_c19670c38a61bf25617fe4b27070db752372a751ae1c96ac77c4eadf4ad2c37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19670c38a61bf25617fe4b27070db752372a751ae1c96ac77c4eadf4ad2c37d->enter($__internal_c19670c38a61bf25617fe4b27070db752372a751ae1c96ac77c4eadf4ad2c37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_c19670c38a61bf25617fe4b27070db752372a751ae1c96ac77c4eadf4ad2c37d->leave($__internal_c19670c38a61bf25617fe4b27070db752372a751ae1c96ac77c4eadf4ad2c37d_prof);

        
        $__internal_b5ba78be97a36fd28a4fe72ce02c7dbd657d57e5ec92f4b0bba8717c243c35f2->leave($__internal_b5ba78be97a36fd28a4fe72ce02c7dbd657d57e5ec92f4b0bba8717c243c35f2_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_cd4d2a33cfdb0f9ed226e99c61064ddefc52e92d302157d0b6d676d7c7be7840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4d2a33cfdb0f9ed226e99c61064ddefc52e92d302157d0b6d676d7c7be7840->enter($__internal_cd4d2a33cfdb0f9ed226e99c61064ddefc52e92d302157d0b6d676d7c7be7840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_aef11f6bbd076a605c9ae20a66716db9835f2b923b2767e6a3cf4b8ad185e570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef11f6bbd076a605c9ae20a66716db9835f2b923b2767e6a3cf4b8ad185e570->enter($__internal_aef11f6bbd076a605c9ae20a66716db9835f2b923b2767e6a3cf4b8ad185e570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_aef11f6bbd076a605c9ae20a66716db9835f2b923b2767e6a3cf4b8ad185e570->leave($__internal_aef11f6bbd076a605c9ae20a66716db9835f2b923b2767e6a3cf4b8ad185e570_prof);

        
        $__internal_cd4d2a33cfdb0f9ed226e99c61064ddefc52e92d302157d0b6d676d7c7be7840->leave($__internal_cd4d2a33cfdb0f9ed226e99c61064ddefc52e92d302157d0b6d676d7c7be7840_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_27fb2dbaa870b8effd89ead2be8998550c666fbf018dc36a13ea031f1d56fa75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27fb2dbaa870b8effd89ead2be8998550c666fbf018dc36a13ea031f1d56fa75->enter($__internal_27fb2dbaa870b8effd89ead2be8998550c666fbf018dc36a13ea031f1d56fa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ba794929d96a316e60bb847f6912b97381242cebbbdf7088144abd1e958ae866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba794929d96a316e60bb847f6912b97381242cebbbdf7088144abd1e958ae866->enter($__internal_ba794929d96a316e60bb847f6912b97381242cebbbdf7088144abd1e958ae866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_ba794929d96a316e60bb847f6912b97381242cebbbdf7088144abd1e958ae866->leave($__internal_ba794929d96a316e60bb847f6912b97381242cebbbdf7088144abd1e958ae866_prof);

        
        $__internal_27fb2dbaa870b8effd89ead2be8998550c666fbf018dc36a13ea031f1d56fa75->leave($__internal_27fb2dbaa870b8effd89ead2be8998550c666fbf018dc36a13ea031f1d56fa75_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_14692a598108af6e8667decb836e6bc725c3f3fe6a4d62bb5c41c6ab298a5a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14692a598108af6e8667decb836e6bc725c3f3fe6a4d62bb5c41c6ab298a5a4c->enter($__internal_14692a598108af6e8667decb836e6bc725c3f3fe6a4d62bb5c41c6ab298a5a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_dcff328af7c8f72d3d982774b163119418666adf463314f0f653d24c1aec5202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcff328af7c8f72d3d982774b163119418666adf463314f0f653d24c1aec5202->enter($__internal_dcff328af7c8f72d3d982774b163119418666adf463314f0f653d24c1aec5202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_dcff328af7c8f72d3d982774b163119418666adf463314f0f653d24c1aec5202->leave($__internal_dcff328af7c8f72d3d982774b163119418666adf463314f0f653d24c1aec5202_prof);

        
        $__internal_14692a598108af6e8667decb836e6bc725c3f3fe6a4d62bb5c41c6ab298a5a4c->leave($__internal_14692a598108af6e8667decb836e6bc725c3f3fe6a4d62bb5c41c6ab298a5a4c_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8b2a9912f3a631d0f919ee26a68dce70b7edc6e305db912c0d97872a2e036320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2a9912f3a631d0f919ee26a68dce70b7edc6e305db912c0d97872a2e036320->enter($__internal_8b2a9912f3a631d0f919ee26a68dce70b7edc6e305db912c0d97872a2e036320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2e3f4b8c712d82ead3a2370189b150727491b32eb3095aafca165769aba4d2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3f4b8c712d82ead3a2370189b150727491b32eb3095aafca165769aba4d2c7->enter($__internal_2e3f4b8c712d82ead3a2370189b150727491b32eb3095aafca165769aba4d2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_2e3f4b8c712d82ead3a2370189b150727491b32eb3095aafca165769aba4d2c7->leave($__internal_2e3f4b8c712d82ead3a2370189b150727491b32eb3095aafca165769aba4d2c7_prof);

        
        $__internal_8b2a9912f3a631d0f919ee26a68dce70b7edc6e305db912c0d97872a2e036320->leave($__internal_8b2a9912f3a631d0f919ee26a68dce70b7edc6e305db912c0d97872a2e036320_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_0e694da81e7b539e65ba870e115b030775f89c148cae4f2865ca2899b9a4a2d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e694da81e7b539e65ba870e115b030775f89c148cae4f2865ca2899b9a4a2d4->enter($__internal_0e694da81e7b539e65ba870e115b030775f89c148cae4f2865ca2899b9a4a2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_82b94342ca0a0fa0b95c3f5982a0a6b0ecb0d9fb18577a0c3fefa036b915cbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b94342ca0a0fa0b95c3f5982a0a6b0ecb0d9fb18577a0c3fefa036b915cbcc->enter($__internal_82b94342ca0a0fa0b95c3f5982a0a6b0ecb0d9fb18577a0c3fefa036b915cbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_82b94342ca0a0fa0b95c3f5982a0a6b0ecb0d9fb18577a0c3fefa036b915cbcc->leave($__internal_82b94342ca0a0fa0b95c3f5982a0a6b0ecb0d9fb18577a0c3fefa036b915cbcc_prof);

        
        $__internal_0e694da81e7b539e65ba870e115b030775f89c148cae4f2865ca2899b9a4a2d4->leave($__internal_0e694da81e7b539e65ba870e115b030775f89c148cae4f2865ca2899b9a4a2d4_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_472509009fdae06ae0c7d9980ebebccc01d975ce2b0b377ab84c91de26a8cb22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472509009fdae06ae0c7d9980ebebccc01d975ce2b0b377ab84c91de26a8cb22->enter($__internal_472509009fdae06ae0c7d9980ebebccc01d975ce2b0b377ab84c91de26a8cb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_67420d443e011be224c9c5f02217a561d24bfbb3ce7bea33738aa0f4006c05ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67420d443e011be224c9c5f02217a561d24bfbb3ce7bea33738aa0f4006c05ba->enter($__internal_67420d443e011be224c9c5f02217a561d24bfbb3ce7bea33738aa0f4006c05ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_67420d443e011be224c9c5f02217a561d24bfbb3ce7bea33738aa0f4006c05ba->leave($__internal_67420d443e011be224c9c5f02217a561d24bfbb3ce7bea33738aa0f4006c05ba_prof);

        
        $__internal_472509009fdae06ae0c7d9980ebebccc01d975ce2b0b377ab84c91de26a8cb22->leave($__internal_472509009fdae06ae0c7d9980ebebccc01d975ce2b0b377ab84c91de26a8cb22_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_16c8a2dc55b8793a75ed41f16d0235e5852a1e935c423f06d17e3fa9c47d2c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c8a2dc55b8793a75ed41f16d0235e5852a1e935c423f06d17e3fa9c47d2c55->enter($__internal_16c8a2dc55b8793a75ed41f16d0235e5852a1e935c423f06d17e3fa9c47d2c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_368b1a82dd5d6ec5da44b1e147879772e7cf6381fded830877c247649b2ce686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368b1a82dd5d6ec5da44b1e147879772e7cf6381fded830877c247649b2ce686->enter($__internal_368b1a82dd5d6ec5da44b1e147879772e7cf6381fded830877c247649b2ce686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_368b1a82dd5d6ec5da44b1e147879772e7cf6381fded830877c247649b2ce686->leave($__internal_368b1a82dd5d6ec5da44b1e147879772e7cf6381fded830877c247649b2ce686_prof);

        
        $__internal_16c8a2dc55b8793a75ed41f16d0235e5852a1e935c423f06d17e3fa9c47d2c55->leave($__internal_16c8a2dc55b8793a75ed41f16d0235e5852a1e935c423f06d17e3fa9c47d2c55_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_843673b2333c95a5d006ef853ff23cba845d5a16c4ea844b41f3af233f72e091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843673b2333c95a5d006ef853ff23cba845d5a16c4ea844b41f3af233f72e091->enter($__internal_843673b2333c95a5d006ef853ff23cba845d5a16c4ea844b41f3af233f72e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a5fc1b729fc3811338cf7579d5680c0af90e33c6a21ebde1b73761b705168475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5fc1b729fc3811338cf7579d5680c0af90e33c6a21ebde1b73761b705168475->enter($__internal_a5fc1b729fc3811338cf7579d5680c0af90e33c6a21ebde1b73761b705168475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a5fc1b729fc3811338cf7579d5680c0af90e33c6a21ebde1b73761b705168475->leave($__internal_a5fc1b729fc3811338cf7579d5680c0af90e33c6a21ebde1b73761b705168475_prof);

        
        $__internal_843673b2333c95a5d006ef853ff23cba845d5a16c4ea844b41f3af233f72e091->leave($__internal_843673b2333c95a5d006ef853ff23cba845d5a16c4ea844b41f3af233f72e091_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_de0cd7e0fd5dd34c83b7ed5ef20f71ddaae47565acd1d933fad79d67a06ddc5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0cd7e0fd5dd34c83b7ed5ef20f71ddaae47565acd1d933fad79d67a06ddc5a->enter($__internal_de0cd7e0fd5dd34c83b7ed5ef20f71ddaae47565acd1d933fad79d67a06ddc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_7239fac2b33bdf37b16e722ed16d229c91e2b305465c8533a74de567adae72af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7239fac2b33bdf37b16e722ed16d229c91e2b305465c8533a74de567adae72af->enter($__internal_7239fac2b33bdf37b16e722ed16d229c91e2b305465c8533a74de567adae72af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_7239fac2b33bdf37b16e722ed16d229c91e2b305465c8533a74de567adae72af->leave($__internal_7239fac2b33bdf37b16e722ed16d229c91e2b305465c8533a74de567adae72af_prof);

        
        $__internal_de0cd7e0fd5dd34c83b7ed5ef20f71ddaae47565acd1d933fad79d67a06ddc5a->leave($__internal_de0cd7e0fd5dd34c83b7ed5ef20f71ddaae47565acd1d933fad79d67a06ddc5a_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_9fa0c0173a64cf8b2157c3b36d44f63d725c0b5e481969019e39f87fe2b47c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa0c0173a64cf8b2157c3b36d44f63d725c0b5e481969019e39f87fe2b47c14->enter($__internal_9fa0c0173a64cf8b2157c3b36d44f63d725c0b5e481969019e39f87fe2b47c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_bae8f6d7bf0a7e975d21112cab46a0f5013ac411965ba43f903d3bca94b8224a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae8f6d7bf0a7e975d21112cab46a0f5013ac411965ba43f903d3bca94b8224a->enter($__internal_bae8f6d7bf0a7e975d21112cab46a0f5013ac411965ba43f903d3bca94b8224a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bae8f6d7bf0a7e975d21112cab46a0f5013ac411965ba43f903d3bca94b8224a->leave($__internal_bae8f6d7bf0a7e975d21112cab46a0f5013ac411965ba43f903d3bca94b8224a_prof);

        
        $__internal_9fa0c0173a64cf8b2157c3b36d44f63d725c0b5e481969019e39f87fe2b47c14->leave($__internal_9fa0c0173a64cf8b2157c3b36d44f63d725c0b5e481969019e39f87fe2b47c14_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_bfa8f45fd3ee4d37cbc1b18b5b3363e484dc07c24d380bf87ecd0b736bf0f24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa8f45fd3ee4d37cbc1b18b5b3363e484dc07c24d380bf87ecd0b736bf0f24c->enter($__internal_bfa8f45fd3ee4d37cbc1b18b5b3363e484dc07c24d380bf87ecd0b736bf0f24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_cb0b822048f756fb2eaed09624c561665f5c08f6ff0d2f01853674f9d5b563ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0b822048f756fb2eaed09624c561665f5c08f6ff0d2f01853674f9d5b563ae->enter($__internal_cb0b822048f756fb2eaed09624c561665f5c08f6ff0d2f01853674f9d5b563ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_cb0b822048f756fb2eaed09624c561665f5c08f6ff0d2f01853674f9d5b563ae->leave($__internal_cb0b822048f756fb2eaed09624c561665f5c08f6ff0d2f01853674f9d5b563ae_prof);

        
        $__internal_bfa8f45fd3ee4d37cbc1b18b5b3363e484dc07c24d380bf87ecd0b736bf0f24c->leave($__internal_bfa8f45fd3ee4d37cbc1b18b5b3363e484dc07c24d380bf87ecd0b736bf0f24c_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a54e1572f0556d0a9e7f8659e7eefce5163e95e3bb02f9fc853fb4a197b8784c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54e1572f0556d0a9e7f8659e7eefce5163e95e3bb02f9fc853fb4a197b8784c->enter($__internal_a54e1572f0556d0a9e7f8659e7eefce5163e95e3bb02f9fc853fb4a197b8784c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_7b90ce5413249c94a5462db5a9111b7389984f5c2dc4058042a27f01ee18bc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b90ce5413249c94a5462db5a9111b7389984f5c2dc4058042a27f01ee18bc29->enter($__internal_7b90ce5413249c94a5462db5a9111b7389984f5c2dc4058042a27f01ee18bc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 255
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_7b90ce5413249c94a5462db5a9111b7389984f5c2dc4058042a27f01ee18bc29->leave($__internal_7b90ce5413249c94a5462db5a9111b7389984f5c2dc4058042a27f01ee18bc29_prof);

        
        $__internal_a54e1572f0556d0a9e7f8659e7eefce5163e95e3bb02f9fc853fb4a197b8784c->leave($__internal_a54e1572f0556d0a9e7f8659e7eefce5163e95e3bb02f9fc853fb4a197b8784c_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5ac57f7abc00f6c62faf92b7c1ab168d3f9fcf8f3a3cee27ae16340e5b3c6980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac57f7abc00f6c62faf92b7c1ab168d3f9fcf8f3a3cee27ae16340e5b3c6980->enter($__internal_5ac57f7abc00f6c62faf92b7c1ab168d3f9fcf8f3a3cee27ae16340e5b3c6980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ce71cd7142c9ddab8ec71e7924273da623490bf81f334082f774848dd8e41f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce71cd7142c9ddab8ec71e7924273da623490bf81f334082f774848dd8e41f4d->enter($__internal_ce71cd7142c9ddab8ec71e7924273da623490bf81f334082f774848dd8e41f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_ce71cd7142c9ddab8ec71e7924273da623490bf81f334082f774848dd8e41f4d->leave($__internal_ce71cd7142c9ddab8ec71e7924273da623490bf81f334082f774848dd8e41f4d_prof);

        
        $__internal_5ac57f7abc00f6c62faf92b7c1ab168d3f9fcf8f3a3cee27ae16340e5b3c6980->leave($__internal_5ac57f7abc00f6c62faf92b7c1ab168d3f9fcf8f3a3cee27ae16340e5b3c6980_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_6cd2ebd1d7dd9a5183f4382a7b108b06a4bf391e14e783bbe4538323a9a1675b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd2ebd1d7dd9a5183f4382a7b108b06a4bf391e14e783bbe4538323a9a1675b->enter($__internal_6cd2ebd1d7dd9a5183f4382a7b108b06a4bf391e14e783bbe4538323a9a1675b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_137b26967963664cfd128707ac01caa4a3d69c5b481f90e3f7e28eb0378e4a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137b26967963664cfd128707ac01caa4a3d69c5b481f90e3f7e28eb0378e4a0f->enter($__internal_137b26967963664cfd128707ac01caa4a3d69c5b481f90e3f7e28eb0378e4a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_137b26967963664cfd128707ac01caa4a3d69c5b481f90e3f7e28eb0378e4a0f->leave($__internal_137b26967963664cfd128707ac01caa4a3d69c5b481f90e3f7e28eb0378e4a0f_prof);

        
        $__internal_6cd2ebd1d7dd9a5183f4382a7b108b06a4bf391e14e783bbe4538323a9a1675b->leave($__internal_6cd2ebd1d7dd9a5183f4382a7b108b06a4bf391e14e783bbe4538323a9a1675b_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8a3eee33137ef9397e402164461d61146dedfe3a718164871e46e7647f6d8c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3eee33137ef9397e402164461d61146dedfe3a718164871e46e7647f6d8c5d->enter($__internal_8a3eee33137ef9397e402164461d61146dedfe3a718164871e46e7647f6d8c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_778ad03e9056882fdc4266ff77b7c54be9d72b131b56ec0dc51518fc1204c205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778ad03e9056882fdc4266ff77b7c54be9d72b131b56ec0dc51518fc1204c205->enter($__internal_778ad03e9056882fdc4266ff77b7c54be9d72b131b56ec0dc51518fc1204c205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_778ad03e9056882fdc4266ff77b7c54be9d72b131b56ec0dc51518fc1204c205->leave($__internal_778ad03e9056882fdc4266ff77b7c54be9d72b131b56ec0dc51518fc1204c205_prof);

        
        $__internal_8a3eee33137ef9397e402164461d61146dedfe3a718164871e46e7647f6d8c5d->leave($__internal_8a3eee33137ef9397e402164461d61146dedfe3a718164871e46e7647f6d8c5d_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_26aff5a30f076291b8587e204eaeb9f8abd7965728a5d58be01d1c73e8857563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26aff5a30f076291b8587e204eaeb9f8abd7965728a5d58be01d1c73e8857563->enter($__internal_26aff5a30f076291b8587e204eaeb9f8abd7965728a5d58be01d1c73e8857563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6e85413862e0dbc4d51535b6c6c6bd8c11d2a32f8e8828b15e593e16f7cf28b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e85413862e0dbc4d51535b6c6c6bd8c11d2a32f8e8828b15e593e16f7cf28b3->enter($__internal_6e85413862e0dbc4d51535b6c6c6bd8c11d2a32f8e8828b15e593e16f7cf28b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6e85413862e0dbc4d51535b6c6c6bd8c11d2a32f8e8828b15e593e16f7cf28b3->leave($__internal_6e85413862e0dbc4d51535b6c6c6bd8c11d2a32f8e8828b15e593e16f7cf28b3_prof);

        
        $__internal_26aff5a30f076291b8587e204eaeb9f8abd7965728a5d58be01d1c73e8857563->leave($__internal_26aff5a30f076291b8587e204eaeb9f8abd7965728a5d58be01d1c73e8857563_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1bac5998233e6eca43431fefe866a97fac517fae64074b703fcea4edcf6626de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bac5998233e6eca43431fefe866a97fac517fae64074b703fcea4edcf6626de->enter($__internal_1bac5998233e6eca43431fefe866a97fac517fae64074b703fcea4edcf6626de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_a6a509e86720c713badb0aca87bf061ea690d6b290f7232fc391e7bfde75447d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a509e86720c713badb0aca87bf061ea690d6b290f7232fc391e7bfde75447d->enter($__internal_a6a509e86720c713badb0aca87bf061ea690d6b290f7232fc391e7bfde75447d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a6a509e86720c713badb0aca87bf061ea690d6b290f7232fc391e7bfde75447d->leave($__internal_a6a509e86720c713badb0aca87bf061ea690d6b290f7232fc391e7bfde75447d_prof);

        
        $__internal_1bac5998233e6eca43431fefe866a97fac517fae64074b703fcea4edcf6626de->leave($__internal_1bac5998233e6eca43431fefe866a97fac517fae64074b703fcea4edcf6626de_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f85a6fd1bbb84855f27b5e59247df919ced9d19237811135a70acb21b42afe3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85a6fd1bbb84855f27b5e59247df919ced9d19237811135a70acb21b42afe3f->enter($__internal_f85a6fd1bbb84855f27b5e59247df919ced9d19237811135a70acb21b42afe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_efa41a76f3f3ae4bd56e14bc9db36fa975d5805d21f14678e21bac6bc0e9634e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa41a76f3f3ae4bd56e14bc9db36fa975d5805d21f14678e21bac6bc0e9634e->enter($__internal_efa41a76f3f3ae4bd56e14bc9db36fa975d5805d21f14678e21bac6bc0e9634e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_efa41a76f3f3ae4bd56e14bc9db36fa975d5805d21f14678e21bac6bc0e9634e->leave($__internal_efa41a76f3f3ae4bd56e14bc9db36fa975d5805d21f14678e21bac6bc0e9634e_prof);

        
        $__internal_f85a6fd1bbb84855f27b5e59247df919ced9d19237811135a70acb21b42afe3f->leave($__internal_f85a6fd1bbb84855f27b5e59247df919ced9d19237811135a70acb21b42afe3f_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8b17e50af6a0d8af0c8129b86fd5fa5263c1af1b1a57ae7c630a746ef8b02ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b17e50af6a0d8af0c8129b86fd5fa5263c1af1b1a57ae7c630a746ef8b02ff6->enter($__internal_8b17e50af6a0d8af0c8129b86fd5fa5263c1af1b1a57ae7c630a746ef8b02ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_362f93ec849b2f636d205e5cf96bd987d2563ee827ee3357dac31a22290662dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362f93ec849b2f636d205e5cf96bd987d2563ee827ee3357dac31a22290662dd->enter($__internal_362f93ec849b2f636d205e5cf96bd987d2563ee827ee3357dac31a22290662dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_362f93ec849b2f636d205e5cf96bd987d2563ee827ee3357dac31a22290662dd->leave($__internal_362f93ec849b2f636d205e5cf96bd987d2563ee827ee3357dac31a22290662dd_prof);

        
        $__internal_8b17e50af6a0d8af0c8129b86fd5fa5263c1af1b1a57ae7c630a746ef8b02ff6->leave($__internal_8b17e50af6a0d8af0c8129b86fd5fa5263c1af1b1a57ae7c630a746ef8b02ff6_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f511b018e4b7059c9db657cd4ca3ad1c966a85b62c5d17fc0ddf443cdea699b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f511b018e4b7059c9db657cd4ca3ad1c966a85b62c5d17fc0ddf443cdea699b7->enter($__internal_f511b018e4b7059c9db657cd4ca3ad1c966a85b62c5d17fc0ddf443cdea699b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6c647cd32270374ae69808af29067dbcf0e59c7f484ef77cfc7ea855a3da168c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c647cd32270374ae69808af29067dbcf0e59c7f484ef77cfc7ea855a3da168c->enter($__internal_6c647cd32270374ae69808af29067dbcf0e59c7f484ef77cfc7ea855a3da168c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_6c647cd32270374ae69808af29067dbcf0e59c7f484ef77cfc7ea855a3da168c->leave($__internal_6c647cd32270374ae69808af29067dbcf0e59c7f484ef77cfc7ea855a3da168c_prof);

        
        $__internal_f511b018e4b7059c9db657cd4ca3ad1c966a85b62c5d17fc0ddf443cdea699b7->leave($__internal_f511b018e4b7059c9db657cd4ca3ad1c966a85b62c5d17fc0ddf443cdea699b7_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
