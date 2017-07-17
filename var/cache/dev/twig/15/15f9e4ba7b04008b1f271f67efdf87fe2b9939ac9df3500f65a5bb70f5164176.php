<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_590f22820d7b2553c588b320f9195b95e3ea174547f82b5ff3453c27407177fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c377cd93a4bfc09a104812bc1b2127ecbb89b28bae981fb088ecd53110a24034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c377cd93a4bfc09a104812bc1b2127ecbb89b28bae981fb088ecd53110a24034->enter($__internal_c377cd93a4bfc09a104812bc1b2127ecbb89b28bae981fb088ecd53110a24034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_685c3e030ac0130c644787169a4ca60f727b365aebc0a0c1b4c8a6bb3abb7fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685c3e030ac0130c644787169a4ca60f727b365aebc0a0c1b4c8a6bb3abb7fdc->enter($__internal_685c3e030ac0130c644787169a4ca60f727b365aebc0a0c1b4c8a6bb3abb7fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c377cd93a4bfc09a104812bc1b2127ecbb89b28bae981fb088ecd53110a24034->leave($__internal_c377cd93a4bfc09a104812bc1b2127ecbb89b28bae981fb088ecd53110a24034_prof);

        
        $__internal_685c3e030ac0130c644787169a4ca60f727b365aebc0a0c1b4c8a6bb3abb7fdc->leave($__internal_685c3e030ac0130c644787169a4ca60f727b365aebc0a0c1b4c8a6bb3abb7fdc_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7f051e5a2cabf2860fe17c3d257dfdb369267017b1e3c87cd2bfd491623e67ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f051e5a2cabf2860fe17c3d257dfdb369267017b1e3c87cd2bfd491623e67ff->enter($__internal_7f051e5a2cabf2860fe17c3d257dfdb369267017b1e3c87cd2bfd491623e67ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ef0ef52445e888ba03bdcd8db6eab020e072f845ae7976e84b2d30122dfc1aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0ef52445e888ba03bdcd8db6eab020e072f845ae7976e84b2d30122dfc1aa4->enter($__internal_ef0ef52445e888ba03bdcd8db6eab020e072f845ae7976e84b2d30122dfc1aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ef0ef52445e888ba03bdcd8db6eab020e072f845ae7976e84b2d30122dfc1aa4->leave($__internal_ef0ef52445e888ba03bdcd8db6eab020e072f845ae7976e84b2d30122dfc1aa4_prof);

        
        $__internal_7f051e5a2cabf2860fe17c3d257dfdb369267017b1e3c87cd2bfd491623e67ff->leave($__internal_7f051e5a2cabf2860fe17c3d257dfdb369267017b1e3c87cd2bfd491623e67ff_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5c05732bfd499a0bd39a3a096d713faa77a814347efb848db7dcb20a7400137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c05732bfd499a0bd39a3a096d713faa77a814347efb848db7dcb20a7400137->enter($__internal_c5c05732bfd499a0bd39a3a096d713faa77a814347efb848db7dcb20a7400137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c6aaeac1190379e8cab0b4a6a074ffc0433b8d019f483a199fb16e3326d3f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6aaeac1190379e8cab0b4a6a074ffc0433b8d019f483a199fb16e3326d3f64->enter($__internal_0c6aaeac1190379e8cab0b4a6a074ffc0433b8d019f483a199fb16e3326d3f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0c6aaeac1190379e8cab0b4a6a074ffc0433b8d019f483a199fb16e3326d3f64->leave($__internal_0c6aaeac1190379e8cab0b4a6a074ffc0433b8d019f483a199fb16e3326d3f64_prof);

        
        $__internal_c5c05732bfd499a0bd39a3a096d713faa77a814347efb848db7dcb20a7400137->leave($__internal_c5c05732bfd499a0bd39a3a096d713faa77a814347efb848db7dcb20a7400137_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
