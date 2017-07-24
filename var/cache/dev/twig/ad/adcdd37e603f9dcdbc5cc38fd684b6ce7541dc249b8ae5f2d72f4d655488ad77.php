<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_8b4989f0a2dab924d32dbeca1eced3d036cc2161f6659d8439d04c49475c8383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ad36175f140ebf849aaac66a3232afc50d651ceb1b4b75149649809f33693aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad36175f140ebf849aaac66a3232afc50d651ceb1b4b75149649809f33693aa->enter($__internal_6ad36175f140ebf849aaac66a3232afc50d651ceb1b4b75149649809f33693aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_9fa208016188a9c2cdf8568b9e4c97660a2fffee4928e264bf13678d3cfd6d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa208016188a9c2cdf8568b9e4c97660a2fffee4928e264bf13678d3cfd6d06->enter($__internal_9fa208016188a9c2cdf8568b9e4c97660a2fffee4928e264bf13678d3cfd6d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_6ad36175f140ebf849aaac66a3232afc50d651ceb1b4b75149649809f33693aa->leave($__internal_6ad36175f140ebf849aaac66a3232afc50d651ceb1b4b75149649809f33693aa_prof);

        
        $__internal_9fa208016188a9c2cdf8568b9e4c97660a2fffee4928e264bf13678d3cfd6d06->leave($__internal_9fa208016188a9c2cdf8568b9e4c97660a2fffee4928e264bf13678d3cfd6d06_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_c318b6eee883c5a6b171746b126dc9d81abbd2f7bade2df42ca889a8d0cf103e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c318b6eee883c5a6b171746b126dc9d81abbd2f7bade2df42ca889a8d0cf103e->enter($__internal_c318b6eee883c5a6b171746b126dc9d81abbd2f7bade2df42ca889a8d0cf103e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_9a67e80f5760696aa03b0b4b5ca2b957f6ef2dd334c735fecb1f2f85b80d15b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a67e80f5760696aa03b0b4b5ca2b957f6ef2dd334c735fecb1f2f85b80d15b9->enter($__internal_9a67e80f5760696aa03b0b4b5ca2b957f6ef2dd334c735fecb1f2f85b80d15b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9a67e80f5760696aa03b0b4b5ca2b957f6ef2dd334c735fecb1f2f85b80d15b9->leave($__internal_9a67e80f5760696aa03b0b4b5ca2b957f6ef2dd334c735fecb1f2f85b80d15b9_prof);

        
        $__internal_c318b6eee883c5a6b171746b126dc9d81abbd2f7bade2df42ca889a8d0cf103e->leave($__internal_c318b6eee883c5a6b171746b126dc9d81abbd2f7bade2df42ca889a8d0cf103e_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_99fffa53fff940fe7bf50d07f3e6db63c97836cd7e818518153327047c350cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99fffa53fff940fe7bf50d07f3e6db63c97836cd7e818518153327047c350cb2->enter($__internal_99fffa53fff940fe7bf50d07f3e6db63c97836cd7e818518153327047c350cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_5356b760a7849c406898510b9e832abe158741652101e6ce631db700fed3f3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5356b760a7849c406898510b9e832abe158741652101e6ce631db700fed3f3c1->enter($__internal_5356b760a7849c406898510b9e832abe158741652101e6ce631db700fed3f3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5356b760a7849c406898510b9e832abe158741652101e6ce631db700fed3f3c1->leave($__internal_5356b760a7849c406898510b9e832abe158741652101e6ce631db700fed3f3c1_prof);

        
        $__internal_99fffa53fff940fe7bf50d07f3e6db63c97836cd7e818518153327047c350cb2->leave($__internal_99fffa53fff940fe7bf50d07f3e6db63c97836cd7e818518153327047c350cb2_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_ca1eeb1416570f663bc39696a4df08d9c484e268b12b7c9cc5f0855b350ccd76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1eeb1416570f663bc39696a4df08d9c484e268b12b7c9cc5f0855b350ccd76->enter($__internal_ca1eeb1416570f663bc39696a4df08d9c484e268b12b7c9cc5f0855b350ccd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_257368630a471048f5f4e78099a67d79194d2cc550b8c8a1ca2b87ba95d75f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257368630a471048f5f4e78099a67d79194d2cc550b8c8a1ca2b87ba95d75f95->enter($__internal_257368630a471048f5f4e78099a67d79194d2cc550b8c8a1ca2b87ba95d75f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_257368630a471048f5f4e78099a67d79194d2cc550b8c8a1ca2b87ba95d75f95->leave($__internal_257368630a471048f5f4e78099a67d79194d2cc550b8c8a1ca2b87ba95d75f95_prof);

        
        $__internal_ca1eeb1416570f663bc39696a4df08d9c484e268b12b7c9cc5f0855b350ccd76->leave($__internal_ca1eeb1416570f663bc39696a4df08d9c484e268b12b7c9cc5f0855b350ccd76_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_c33f639f10f77403b17184c9eadff8b093e79bd80eccc4e5a2631bb9ba3b29e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33f639f10f77403b17184c9eadff8b093e79bd80eccc4e5a2631bb9ba3b29e3->enter($__internal_c33f639f10f77403b17184c9eadff8b093e79bd80eccc4e5a2631bb9ba3b29e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_36923168de8695b7d7201858e2eb4fdb7a66c5e8233fe644ebdce836cf562e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36923168de8695b7d7201858e2eb4fdb7a66c5e8233fe644ebdce836cf562e72->enter($__internal_36923168de8695b7d7201858e2eb4fdb7a66c5e8233fe644ebdce836cf562e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_36923168de8695b7d7201858e2eb4fdb7a66c5e8233fe644ebdce836cf562e72->leave($__internal_36923168de8695b7d7201858e2eb4fdb7a66c5e8233fe644ebdce836cf562e72_prof);

        
        $__internal_c33f639f10f77403b17184c9eadff8b093e79bd80eccc4e5a2631bb9ba3b29e3->leave($__internal_c33f639f10f77403b17184c9eadff8b093e79bd80eccc4e5a2631bb9ba3b29e3_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "/var/www/html/many-to-many/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
