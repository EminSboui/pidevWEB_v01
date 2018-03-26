<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6b630d0cc5a1fa07ef2192b4cb0ffb4f437fa58e1edb417d11d22ee443043a7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4971e1c70d521b7e29303d559a18b442ab3c6622e3d88ae82a7470984580425c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4971e1c70d521b7e29303d559a18b442ab3c6622e3d88ae82a7470984580425c->enter($__internal_4971e1c70d521b7e29303d559a18b442ab3c6622e3d88ae82a7470984580425c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_c3580684ae802d58792160466b5c6ba0e3c203b29505cfed978d10fee2f47e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3580684ae802d58792160466b5c6ba0e3c203b29505cfed978d10fee2f47e83->enter($__internal_c3580684ae802d58792160466b5c6ba0e3c203b29505cfed978d10fee2f47e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_4971e1c70d521b7e29303d559a18b442ab3c6622e3d88ae82a7470984580425c->leave($__internal_4971e1c70d521b7e29303d559a18b442ab3c6622e3d88ae82a7470984580425c_prof);

        
        $__internal_c3580684ae802d58792160466b5c6ba0e3c203b29505cfed978d10fee2f47e83->leave($__internal_c3580684ae802d58792160466b5c6ba0e3c203b29505cfed978d10fee2f47e83_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5edd29ef34085708a320d249ceb45aaff8f76a13eafd6fa11d003a4c36e1ea8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5edd29ef34085708a320d249ceb45aaff8f76a13eafd6fa11d003a4c36e1ea8e->enter($__internal_5edd29ef34085708a320d249ceb45aaff8f76a13eafd6fa11d003a4c36e1ea8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1598ae76fadc3655617f64bdaf0a9555b17b25ee4ddfe9b3de73bad50003a057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1598ae76fadc3655617f64bdaf0a9555b17b25ee4ddfe9b3de73bad50003a057->enter($__internal_1598ae76fadc3655617f64bdaf0a9555b17b25ee4ddfe9b3de73bad50003a057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1598ae76fadc3655617f64bdaf0a9555b17b25ee4ddfe9b3de73bad50003a057->leave($__internal_1598ae76fadc3655617f64bdaf0a9555b17b25ee4ddfe9b3de73bad50003a057_prof);

        
        $__internal_5edd29ef34085708a320d249ceb45aaff8f76a13eafd6fa11d003a4c36e1ea8e->leave($__internal_5edd29ef34085708a320d249ceb45aaff8f76a13eafd6fa11d003a4c36e1ea8e_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7828c1db06afa805117ebca8f1ca6333f8b4f2ee70e1f4dd01c448aee6d04e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7828c1db06afa805117ebca8f1ca6333f8b4f2ee70e1f4dd01c448aee6d04e0f->enter($__internal_7828c1db06afa805117ebca8f1ca6333f8b4f2ee70e1f4dd01c448aee6d04e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_906953dfbd324a64754b468ac22511ee29aa88c468869e5bcb2433afc37419c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906953dfbd324a64754b468ac22511ee29aa88c468869e5bcb2433afc37419c1->enter($__internal_906953dfbd324a64754b468ac22511ee29aa88c468869e5bcb2433afc37419c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_906953dfbd324a64754b468ac22511ee29aa88c468869e5bcb2433afc37419c1->leave($__internal_906953dfbd324a64754b468ac22511ee29aa88c468869e5bcb2433afc37419c1_prof);

        
        $__internal_7828c1db06afa805117ebca8f1ca6333f8b4f2ee70e1f4dd01c448aee6d04e0f->leave($__internal_7828c1db06afa805117ebca8f1ca6333f8b4f2ee70e1f4dd01c448aee6d04e0f_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_86b115c86a31b905a32df3a2b263a8e2a63d82f3ddd447e844b4788c5c6840fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b115c86a31b905a32df3a2b263a8e2a63d82f3ddd447e844b4788c5c6840fa->enter($__internal_86b115c86a31b905a32df3a2b263a8e2a63d82f3ddd447e844b4788c5c6840fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_10b5fa01a2ca1607f44d68dd7a58ce5428565b7c5fdbec5976c33af9829d2fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b5fa01a2ca1607f44d68dd7a58ce5428565b7c5fdbec5976c33af9829d2fd2->enter($__internal_10b5fa01a2ca1607f44d68dd7a58ce5428565b7c5fdbec5976c33af9829d2fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_10b5fa01a2ca1607f44d68dd7a58ce5428565b7c5fdbec5976c33af9829d2fd2->leave($__internal_10b5fa01a2ca1607f44d68dd7a58ce5428565b7c5fdbec5976c33af9829d2fd2_prof);

        
        $__internal_86b115c86a31b905a32df3a2b263a8e2a63d82f3ddd447e844b4788c5c6840fa->leave($__internal_86b115c86a31b905a32df3a2b263a8e2a63d82f3ddd447e844b4788c5c6840fa_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a3b366e99c84425bb1df8a96fcb45dad17386a64b610497adba1406487b8ae89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b366e99c84425bb1df8a96fcb45dad17386a64b610497adba1406487b8ae89->enter($__internal_a3b366e99c84425bb1df8a96fcb45dad17386a64b610497adba1406487b8ae89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_407afa23aa129f4f964ca5673d6213fb17668af9ae7ecb4838daf535e06612a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407afa23aa129f4f964ca5673d6213fb17668af9ae7ecb4838daf535e06612a4->enter($__internal_407afa23aa129f4f964ca5673d6213fb17668af9ae7ecb4838daf535e06612a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_3a7544f5c842a060f48531431bedbf1c1eb2aab10e949110a0f9d0f6600302c0 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_5fd28ce9dd9a77b269656fd2766805dd17b0d4addf732534b08be8972decdca1 = "{{") && ('' === $__internal_5fd28ce9dd9a77b269656fd2766805dd17b0d4addf732534b08be8972decdca1 || 0 === strpos($__internal_3a7544f5c842a060f48531431bedbf1c1eb2aab10e949110a0f9d0f6600302c0, $__internal_5fd28ce9dd9a77b269656fd2766805dd17b0d4addf732534b08be8972decdca1)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_63405d423496e4a9e15250b40c488114a11883e1811a3d9ff3125e35f061e81e = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_806d345aabc306fbf22bbe7f9a820bf8fd19088a236a345076008cbd38bd8ea5 = "}}") && ('' === $__internal_806d345aabc306fbf22bbe7f9a820bf8fd19088a236a345076008cbd38bd8ea5 || $__internal_806d345aabc306fbf22bbe7f9a820bf8fd19088a236a345076008cbd38bd8ea5 === substr($__internal_63405d423496e4a9e15250b40c488114a11883e1811a3d9ff3125e35f061e81e, -strlen($__internal_806d345aabc306fbf22bbe7f9a820bf8fd19088a236a345076008cbd38bd8ea5))));
        // line 25
        echo "    ";
        if (((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend")) || (isset($context["append"]) ? $context["append"] : $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_407afa23aa129f4f964ca5673d6213fb17668af9ae7ecb4838daf535e06612a4->leave($__internal_407afa23aa129f4f964ca5673d6213fb17668af9ae7ecb4838daf535e06612a4_prof);

        
        $__internal_a3b366e99c84425bb1df8a96fcb45dad17386a64b610497adba1406487b8ae89->leave($__internal_a3b366e99c84425bb1df8a96fcb45dad17386a64b610497adba1406487b8ae89_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_261367c5e638efe81a7fd0de8288734d25f5a5ab7a6713fe6e35a762f1fbaa48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261367c5e638efe81a7fd0de8288734d25f5a5ab7a6713fe6e35a762f1fbaa48->enter($__internal_261367c5e638efe81a7fd0de8288734d25f5a5ab7a6713fe6e35a762f1fbaa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_2cc76466320cd9b9b7d23ba386c915eed1fe0990bbbffc4b4c00589e3577d86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc76466320cd9b9b7d23ba386c915eed1fe0990bbbffc4b4c00589e3577d86d->enter($__internal_2cc76466320cd9b9b7d23ba386c915eed1fe0990bbbffc4b4c00589e3577d86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_2cc76466320cd9b9b7d23ba386c915eed1fe0990bbbffc4b4c00589e3577d86d->leave($__internal_2cc76466320cd9b9b7d23ba386c915eed1fe0990bbbffc4b4c00589e3577d86d_prof);

        
        $__internal_261367c5e638efe81a7fd0de8288734d25f5a5ab7a6713fe6e35a762f1fbaa48->leave($__internal_261367c5e638efe81a7fd0de8288734d25f5a5ab7a6713fe6e35a762f1fbaa48_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_be5a7148526fa9fe6934e1330d236d76ead7372619a76a242ac2827904c44e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5a7148526fa9fe6934e1330d236d76ead7372619a76a242ac2827904c44e11->enter($__internal_be5a7148526fa9fe6934e1330d236d76ead7372619a76a242ac2827904c44e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_085365efa5615ed374f6434894aefc531a5e87193b2c24baa47c1905b73de828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085365efa5615ed374f6434894aefc531a5e87193b2c24baa47c1905b73de828->enter($__internal_085365efa5615ed374f6434894aefc531a5e87193b2c24baa47c1905b73de828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_085365efa5615ed374f6434894aefc531a5e87193b2c24baa47c1905b73de828->leave($__internal_085365efa5615ed374f6434894aefc531a5e87193b2c24baa47c1905b73de828_prof);

        
        $__internal_be5a7148526fa9fe6934e1330d236d76ead7372619a76a242ac2827904c44e11->leave($__internal_be5a7148526fa9fe6934e1330d236d76ead7372619a76a242ac2827904c44e11_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_8ba5d293fce5f49509b9d5f8b583ac583acfcded0d6a4f044d03481bd79efddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba5d293fce5f49509b9d5f8b583ac583acfcded0d6a4f044d03481bd79efddb->enter($__internal_8ba5d293fce5f49509b9d5f8b583ac583acfcded0d6a4f044d03481bd79efddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_f708375dd02ebc38d13866aec7bcbcdb399f939f3a46284a906cd0b04eeaf798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f708375dd02ebc38d13866aec7bcbcdb399f939f3a46284a906cd0b04eeaf798->enter($__internal_f708375dd02ebc38d13866aec7bcbcdb399f939f3a46284a906cd0b04eeaf798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_f708375dd02ebc38d13866aec7bcbcdb399f939f3a46284a906cd0b04eeaf798->leave($__internal_f708375dd02ebc38d13866aec7bcbcdb399f939f3a46284a906cd0b04eeaf798_prof);

        
        $__internal_8ba5d293fce5f49509b9d5f8b583ac583acfcded0d6a4f044d03481bd79efddb->leave($__internal_8ba5d293fce5f49509b9d5f8b583ac583acfcded0d6a4f044d03481bd79efddb_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_79e33b96e4afe9fb6c2b006784767070fd88ba4e725d98560043bdfc9ce70c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e33b96e4afe9fb6c2b006784767070fd88ba4e725d98560043bdfc9ce70c08->enter($__internal_79e33b96e4afe9fb6c2b006784767070fd88ba4e725d98560043bdfc9ce70c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_09181202c2cf32bd9848dff891735b9d0a66d03f225806889c65c5f403c5a3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09181202c2cf32bd9848dff891735b9d0a66d03f225806889c65c5f403c5a3c8->enter($__internal_09181202c2cf32bd9848dff891735b9d0a66d03f225806889c65c5f403c5a3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_09181202c2cf32bd9848dff891735b9d0a66d03f225806889c65c5f403c5a3c8->leave($__internal_09181202c2cf32bd9848dff891735b9d0a66d03f225806889c65c5f403c5a3c8_prof);

        
        $__internal_79e33b96e4afe9fb6c2b006784767070fd88ba4e725d98560043bdfc9ce70c08->leave($__internal_79e33b96e4afe9fb6c2b006784767070fd88ba4e725d98560043bdfc9ce70c08_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_081aa63d2c8b1291a2655f19da68ace98820c9882a4e145c8f0135183668eb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081aa63d2c8b1291a2655f19da68ace98820c9882a4e145c8f0135183668eb47->enter($__internal_081aa63d2c8b1291a2655f19da68ace98820c9882a4e145c8f0135183668eb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_acc35d20866eb2217e37c1524bb194d74b4b1e595eb07331ac8659e77c42d6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc35d20866eb2217e37c1524bb194d74b4b1e595eb07331ac8659e77c42d6d9->enter($__internal_acc35d20866eb2217e37c1524bb194d74b4b1e595eb07331ac8659e77c42d6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_acc35d20866eb2217e37c1524bb194d74b4b1e595eb07331ac8659e77c42d6d9->leave($__internal_acc35d20866eb2217e37c1524bb194d74b4b1e595eb07331ac8659e77c42d6d9_prof);

        
        $__internal_081aa63d2c8b1291a2655f19da68ace98820c9882a4e145c8f0135183668eb47->leave($__internal_081aa63d2c8b1291a2655f19da68ace98820c9882a4e145c8f0135183668eb47_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_af8688b30a3f3931b4a22e2dc81f75582bdb73d5173bb167de2069e089e1225e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8688b30a3f3931b4a22e2dc81f75582bdb73d5173bb167de2069e089e1225e->enter($__internal_af8688b30a3f3931b4a22e2dc81f75582bdb73d5173bb167de2069e089e1225e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_547e437af03f1677388d49f7db4ac12aa340b2582b196544d22e6fa8729390c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547e437af03f1677388d49f7db4ac12aa340b2582b196544d22e6fa8729390c3->enter($__internal_547e437af03f1677388d49f7db4ac12aa340b2582b196544d22e6fa8729390c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_547e437af03f1677388d49f7db4ac12aa340b2582b196544d22e6fa8729390c3->leave($__internal_547e437af03f1677388d49f7db4ac12aa340b2582b196544d22e6fa8729390c3_prof);

        
        $__internal_af8688b30a3f3931b4a22e2dc81f75582bdb73d5173bb167de2069e089e1225e->leave($__internal_af8688b30a3f3931b4a22e2dc81f75582bdb73d5173bb167de2069e089e1225e_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_3ffc3b1ae558f8f4f587d613daaac89946e17713208260d4a82e7b326e335327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ffc3b1ae558f8f4f587d613daaac89946e17713208260d4a82e7b326e335327->enter($__internal_3ffc3b1ae558f8f4f587d613daaac89946e17713208260d4a82e7b326e335327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_81dc163b422e151e0825f9a1848f7bae965667314af1908a121967b2d0fa2224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81dc163b422e151e0825f9a1848f7bae965667314af1908a121967b2d0fa2224->enter($__internal_81dc163b422e151e0825f9a1848f7bae965667314af1908a121967b2d0fa2224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_81dc163b422e151e0825f9a1848f7bae965667314af1908a121967b2d0fa2224->leave($__internal_81dc163b422e151e0825f9a1848f7bae965667314af1908a121967b2d0fa2224_prof);

        
        $__internal_3ffc3b1ae558f8f4f587d613daaac89946e17713208260d4a82e7b326e335327->leave($__internal_3ffc3b1ae558f8f4f587d613daaac89946e17713208260d4a82e7b326e335327_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6513b92122389a8a2368b992df597564245d945c838273f0819c1d71f9496738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6513b92122389a8a2368b992df597564245d945c838273f0819c1d71f9496738->enter($__internal_6513b92122389a8a2368b992df597564245d945c838273f0819c1d71f9496738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ac676407499fabb57ffff600c84f3c32c9a96e03c1ebd6a4ebf938f6096c2521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac676407499fabb57ffff600c84f3c32c9a96e03c1ebd6a4ebf938f6096c2521->enter($__internal_ac676407499fabb57ffff600c84f3c32c9a96e03c1ebd6a4ebf938f6096c2521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_ac676407499fabb57ffff600c84f3c32c9a96e03c1ebd6a4ebf938f6096c2521->leave($__internal_ac676407499fabb57ffff600c84f3c32c9a96e03c1ebd6a4ebf938f6096c2521_prof);

        
        $__internal_6513b92122389a8a2368b992df597564245d945c838273f0819c1d71f9496738->leave($__internal_6513b92122389a8a2368b992df597564245d945c838273f0819c1d71f9496738_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_867cbc25a38b565e904c7725e1c14a4caedd4bea7086f5d38ee312420a3ab7b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867cbc25a38b565e904c7725e1c14a4caedd4bea7086f5d38ee312420a3ab7b3->enter($__internal_867cbc25a38b565e904c7725e1c14a4caedd4bea7086f5d38ee312420a3ab7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_5670ebc1e9f83bca8b1ba3da1bd1c9b7cf01f13be7d2622e9208070b4a9d0004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5670ebc1e9f83bca8b1ba3da1bd1c9b7cf01f13be7d2622e9208070b4a9d0004->enter($__internal_5670ebc1e9f83bca8b1ba3da1bd1c9b7cf01f13be7d2622e9208070b4a9d0004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_5670ebc1e9f83bca8b1ba3da1bd1c9b7cf01f13be7d2622e9208070b4a9d0004->leave($__internal_5670ebc1e9f83bca8b1ba3da1bd1c9b7cf01f13be7d2622e9208070b4a9d0004_prof);

        
        $__internal_867cbc25a38b565e904c7725e1c14a4caedd4bea7086f5d38ee312420a3ab7b3->leave($__internal_867cbc25a38b565e904c7725e1c14a4caedd4bea7086f5d38ee312420a3ab7b3_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_39d2acaa876ee3d59b3514549659120bdbf540cdc55dca203f213b1368845c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d2acaa876ee3d59b3514549659120bdbf540cdc55dca203f213b1368845c86->enter($__internal_39d2acaa876ee3d59b3514549659120bdbf540cdc55dca203f213b1368845c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3527d28e16ee2f211a4dc4346386cbf9cf18c0326eeae5357388422db62fce3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3527d28e16ee2f211a4dc4346386cbf9cf18c0326eeae5357388422db62fce3b->enter($__internal_3527d28e16ee2f211a4dc4346386cbf9cf18c0326eeae5357388422db62fce3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3527d28e16ee2f211a4dc4346386cbf9cf18c0326eeae5357388422db62fce3b->leave($__internal_3527d28e16ee2f211a4dc4346386cbf9cf18c0326eeae5357388422db62fce3b_prof);

        
        $__internal_39d2acaa876ee3d59b3514549659120bdbf540cdc55dca203f213b1368845c86->leave($__internal_39d2acaa876ee3d59b3514549659120bdbf540cdc55dca203f213b1368845c86_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f8d048dd5c7e0ff153b612881dbe53590104b508a8e3234f7eb1b6b8ae82cc85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d048dd5c7e0ff153b612881dbe53590104b508a8e3234f7eb1b6b8ae82cc85->enter($__internal_f8d048dd5c7e0ff153b612881dbe53590104b508a8e3234f7eb1b6b8ae82cc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_a13ad953bd0707798746abdfce081bea6d5cfee3d7ec7dfa057b1434c4c1d295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13ad953bd0707798746abdfce081bea6d5cfee3d7ec7dfa057b1434c4c1d295->enter($__internal_a13ad953bd0707798746abdfce081bea6d5cfee3d7ec7dfa057b1434c4c1d295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_a13ad953bd0707798746abdfce081bea6d5cfee3d7ec7dfa057b1434c4c1d295->leave($__internal_a13ad953bd0707798746abdfce081bea6d5cfee3d7ec7dfa057b1434c4c1d295_prof);

        
        $__internal_f8d048dd5c7e0ff153b612881dbe53590104b508a8e3234f7eb1b6b8ae82cc85->leave($__internal_f8d048dd5c7e0ff153b612881dbe53590104b508a8e3234f7eb1b6b8ae82cc85_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_78b8178d78ced608ecf16b3b25ad915a21fc24b71ae5802ed15598c546ac3a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b8178d78ced608ecf16b3b25ad915a21fc24b71ae5802ed15598c546ac3a59->enter($__internal_78b8178d78ced608ecf16b3b25ad915a21fc24b71ae5802ed15598c546ac3a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_9f44abdabaa2816e859935a2ddaad876b6baf299c1345da7c2fceb4fbba396bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f44abdabaa2816e859935a2ddaad876b6baf299c1345da7c2fceb4fbba396bc->enter($__internal_9f44abdabaa2816e859935a2ddaad876b6baf299c1345da7c2fceb4fbba396bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9f44abdabaa2816e859935a2ddaad876b6baf299c1345da7c2fceb4fbba396bc->leave($__internal_9f44abdabaa2816e859935a2ddaad876b6baf299c1345da7c2fceb4fbba396bc_prof);

        
        $__internal_78b8178d78ced608ecf16b3b25ad915a21fc24b71ae5802ed15598c546ac3a59->leave($__internal_78b8178d78ced608ecf16b3b25ad915a21fc24b71ae5802ed15598c546ac3a59_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_4b04c956598230be6358f876e03124f3c2dbc1c4b282742438884c6ce9268b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b04c956598230be6358f876e03124f3c2dbc1c4b282742438884c6ce9268b13->enter($__internal_4b04c956598230be6358f876e03124f3c2dbc1c4b282742438884c6ce9268b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_a5c6c0c9820cd530704834f7089ad0771b425ee1a72dd2d1b70cbbdb0128f482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c6c0c9820cd530704834f7089ad0771b425ee1a72dd2d1b70cbbdb0128f482->enter($__internal_a5c6c0c9820cd530704834f7089ad0771b425ee1a72dd2d1b70cbbdb0128f482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a5c6c0c9820cd530704834f7089ad0771b425ee1a72dd2d1b70cbbdb0128f482->leave($__internal_a5c6c0c9820cd530704834f7089ad0771b425ee1a72dd2d1b70cbbdb0128f482_prof);

        
        $__internal_4b04c956598230be6358f876e03124f3c2dbc1c4b282742438884c6ce9268b13->leave($__internal_4b04c956598230be6358f876e03124f3c2dbc1c4b282742438884c6ce9268b13_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_248d9ef810cfc5ba4c26be3e6fa14b753f082b94087f271bf8f90475607911e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248d9ef810cfc5ba4c26be3e6fa14b753f082b94087f271bf8f90475607911e4->enter($__internal_248d9ef810cfc5ba4c26be3e6fa14b753f082b94087f271bf8f90475607911e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_7ce113d5365944c20197b367371754dcda4bfec7ee72cddbed55a5bf77302ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce113d5365944c20197b367371754dcda4bfec7ee72cddbed55a5bf77302ecb->enter($__internal_7ce113d5365944c20197b367371754dcda4bfec7ee72cddbed55a5bf77302ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 218
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
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
            echo ">";
            // line 225
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_7ce113d5365944c20197b367371754dcda4bfec7ee72cddbed55a5bf77302ecb->leave($__internal_7ce113d5365944c20197b367371754dcda4bfec7ee72cddbed55a5bf77302ecb_prof);

        
        $__internal_248d9ef810cfc5ba4c26be3e6fa14b753f082b94087f271bf8f90475607911e4->leave($__internal_248d9ef810cfc5ba4c26be3e6fa14b753f082b94087f271bf8f90475607911e4_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_dff816ad862fef6b5356ca0366954d8827be472bf29c83ed802837a4f109613b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff816ad862fef6b5356ca0366954d8827be472bf29c83ed802837a4f109613b->enter($__internal_dff816ad862fef6b5356ca0366954d8827be472bf29c83ed802837a4f109613b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3e85c9f0fbc44e1464223a0f73f1780cd966115d345dcc2ad49f77c785275119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e85c9f0fbc44e1464223a0f73f1780cd966115d345dcc2ad49f77c785275119->enter($__internal_3e85c9f0fbc44e1464223a0f73f1780cd966115d345dcc2ad49f77c785275119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_3e85c9f0fbc44e1464223a0f73f1780cd966115d345dcc2ad49f77c785275119->leave($__internal_3e85c9f0fbc44e1464223a0f73f1780cd966115d345dcc2ad49f77c785275119_prof);

        
        $__internal_dff816ad862fef6b5356ca0366954d8827be472bf29c83ed802837a4f109613b->leave($__internal_dff816ad862fef6b5356ca0366954d8827be472bf29c83ed802837a4f109613b_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7886fd0606a5e6784a9ebfbf63af301303ba03062f042b92a96033506aa5a4f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7886fd0606a5e6784a9ebfbf63af301303ba03062f042b92a96033506aa5a4f4->enter($__internal_7886fd0606a5e6784a9ebfbf63af301303ba03062f042b92a96033506aa5a4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_93be4456bee9ad0b8f2d34f5599c0f706933802fc9201ea028249d3e7d9387db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93be4456bee9ad0b8f2d34f5599c0f706933802fc9201ea028249d3e7d9387db->enter($__internal_93be4456bee9ad0b8f2d34f5599c0f706933802fc9201ea028249d3e7d9387db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_93be4456bee9ad0b8f2d34f5599c0f706933802fc9201ea028249d3e7d9387db->leave($__internal_93be4456bee9ad0b8f2d34f5599c0f706933802fc9201ea028249d3e7d9387db_prof);

        
        $__internal_7886fd0606a5e6784a9ebfbf63af301303ba03062f042b92a96033506aa5a4f4->leave($__internal_7886fd0606a5e6784a9ebfbf63af301303ba03062f042b92a96033506aa5a4f4_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_39314833649be72a8e3aec1aee7c93d0993e9be6f33e4e640cbf6030a0bb77cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39314833649be72a8e3aec1aee7c93d0993e9be6f33e4e640cbf6030a0bb77cd->enter($__internal_39314833649be72a8e3aec1aee7c93d0993e9be6f33e4e640cbf6030a0bb77cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_5b25969d3dfd37f5d46473a6964381646bb8f1c8e2a5fd7d098ab0005672d071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b25969d3dfd37f5d46473a6964381646bb8f1c8e2a5fd7d098ab0005672d071->enter($__internal_5b25969d3dfd37f5d46473a6964381646bb8f1c8e2a5fd7d098ab0005672d071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5b25969d3dfd37f5d46473a6964381646bb8f1c8e2a5fd7d098ab0005672d071->leave($__internal_5b25969d3dfd37f5d46473a6964381646bb8f1c8e2a5fd7d098ab0005672d071_prof);

        
        $__internal_39314833649be72a8e3aec1aee7c93d0993e9be6f33e4e640cbf6030a0bb77cd->leave($__internal_39314833649be72a8e3aec1aee7c93d0993e9be6f33e4e640cbf6030a0bb77cd_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_847923f574bf97928b0589ff32a8750ecd6e5eab1db05e985b8c8e11f9ac4eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847923f574bf97928b0589ff32a8750ecd6e5eab1db05e985b8c8e11f9ac4eed->enter($__internal_847923f574bf97928b0589ff32a8750ecd6e5eab1db05e985b8c8e11f9ac4eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_50bcfbd67e40b2e63b1b751f8253ae2e5193940df8f2d0156aa58ac90fb3a539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bcfbd67e40b2e63b1b751f8253ae2e5193940df8f2d0156aa58ac90fb3a539->enter($__internal_50bcfbd67e40b2e63b1b751f8253ae2e5193940df8f2d0156aa58ac90fb3a539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_50bcfbd67e40b2e63b1b751f8253ae2e5193940df8f2d0156aa58ac90fb3a539->leave($__internal_50bcfbd67e40b2e63b1b751f8253ae2e5193940df8f2d0156aa58ac90fb3a539_prof);

        
        $__internal_847923f574bf97928b0589ff32a8750ecd6e5eab1db05e985b8c8e11f9ac4eed->leave($__internal_847923f574bf97928b0589ff32a8750ecd6e5eab1db05e985b8c8e11f9ac4eed_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_ba2e65113b0a7897cf92722ab89eb47c69d96cab22d20e955da4425771dff8a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2e65113b0a7897cf92722ab89eb47c69d96cab22d20e955da4425771dff8a8->enter($__internal_ba2e65113b0a7897cf92722ab89eb47c69d96cab22d20e955da4425771dff8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_7c11ff7fc0c7be16cacb61a7c8e1cbd4e9b8f341ef287e8025110867d404a08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c11ff7fc0c7be16cacb61a7c8e1cbd4e9b8f341ef287e8025110867d404a08b->enter($__internal_7c11ff7fc0c7be16cacb61a7c8e1cbd4e9b8f341ef287e8025110867d404a08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7c11ff7fc0c7be16cacb61a7c8e1cbd4e9b8f341ef287e8025110867d404a08b->leave($__internal_7c11ff7fc0c7be16cacb61a7c8e1cbd4e9b8f341ef287e8025110867d404a08b_prof);

        
        $__internal_ba2e65113b0a7897cf92722ab89eb47c69d96cab22d20e955da4425771dff8a8->leave($__internal_ba2e65113b0a7897cf92722ab89eb47c69d96cab22d20e955da4425771dff8a8_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_8a89ff03938cd8dfdf1fd632bf826c19c243a44fd03cf1c2cecc67be469d53ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a89ff03938cd8dfdf1fd632bf826c19c243a44fd03cf1c2cecc67be469d53ed->enter($__internal_8a89ff03938cd8dfdf1fd632bf826c19c243a44fd03cf1c2cecc67be469d53ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_bcd74d0bda175f7b97fb56cab9d30751f6fc5fd63970c0881baca7d821ba0aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd74d0bda175f7b97fb56cab9d30751f6fc5fd63970c0881baca7d821ba0aca->enter($__internal_bcd74d0bda175f7b97fb56cab9d30751f6fc5fd63970c0881baca7d821ba0aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bcd74d0bda175f7b97fb56cab9d30751f6fc5fd63970c0881baca7d821ba0aca->leave($__internal_bcd74d0bda175f7b97fb56cab9d30751f6fc5fd63970c0881baca7d821ba0aca_prof);

        
        $__internal_8a89ff03938cd8dfdf1fd632bf826c19c243a44fd03cf1c2cecc67be469d53ed->leave($__internal_8a89ff03938cd8dfdf1fd632bf826c19c243a44fd03cf1c2cecc67be469d53ed_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_66c7b2840420325d65e533e3d158883f814dcd961b158ffe857249535c06f429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c7b2840420325d65e533e3d158883f814dcd961b158ffe857249535c06f429->enter($__internal_66c7b2840420325d65e533e3d158883f814dcd961b158ffe857249535c06f429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c19134c6212ea8171b46e0a11092a7260a0a71755636b15d720c50a18bead34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19134c6212ea8171b46e0a11092a7260a0a71755636b15d720c50a18bead34d->enter($__internal_c19134c6212ea8171b46e0a11092a7260a0a71755636b15d720c50a18bead34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_c19134c6212ea8171b46e0a11092a7260a0a71755636b15d720c50a18bead34d->leave($__internal_c19134c6212ea8171b46e0a11092a7260a0a71755636b15d720c50a18bead34d_prof);

        
        $__internal_66c7b2840420325d65e533e3d158883f814dcd961b158ffe857249535c06f429->leave($__internal_66c7b2840420325d65e533e3d158883f814dcd961b158ffe857249535c06f429_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_738ed13415c5ccf986caa4ff98ea48306bc1513da1cf9c6ca79e6a9be9d651fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738ed13415c5ccf986caa4ff98ea48306bc1513da1cf9c6ca79e6a9be9d651fd->enter($__internal_738ed13415c5ccf986caa4ff98ea48306bc1513da1cf9c6ca79e6a9be9d651fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6fc892c6d47d9c17f704ca6873c52f04e54677ce2dd4c2f866a2f661908347f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc892c6d47d9c17f704ca6873c52f04e54677ce2dd4c2f866a2f661908347f0->enter($__internal_6fc892c6d47d9c17f704ca6873c52f04e54677ce2dd4c2f866a2f661908347f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_6fc892c6d47d9c17f704ca6873c52f04e54677ce2dd4c2f866a2f661908347f0->leave($__internal_6fc892c6d47d9c17f704ca6873c52f04e54677ce2dd4c2f866a2f661908347f0_prof);

        
        $__internal_738ed13415c5ccf986caa4ff98ea48306bc1513da1cf9c6ca79e6a9be9d651fd->leave($__internal_738ed13415c5ccf986caa4ff98ea48306bc1513da1cf9c6ca79e6a9be9d651fd_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6bda9ca5885fe7cbfa3ec22ff590dceacd791e85dd8afad933b47285fe7e9336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bda9ca5885fe7cbfa3ec22ff590dceacd791e85dd8afad933b47285fe7e9336->enter($__internal_6bda9ca5885fe7cbfa3ec22ff590dceacd791e85dd8afad933b47285fe7e9336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_93943b1ebea0f81da3ded758392f7bcf4a0d027277e79b939ebff4b22bdc6bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93943b1ebea0f81da3ded758392f7bcf4a0d027277e79b939ebff4b22bdc6bc0->enter($__internal_93943b1ebea0f81da3ded758392f7bcf4a0d027277e79b939ebff4b22bdc6bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_93943b1ebea0f81da3ded758392f7bcf4a0d027277e79b939ebff4b22bdc6bc0->leave($__internal_93943b1ebea0f81da3ded758392f7bcf4a0d027277e79b939ebff4b22bdc6bc0_prof);

        
        $__internal_6bda9ca5885fe7cbfa3ec22ff590dceacd791e85dd8afad933b47285fe7e9336->leave($__internal_6bda9ca5885fe7cbfa3ec22ff590dceacd791e85dd8afad933b47285fe7e9336_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
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
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
