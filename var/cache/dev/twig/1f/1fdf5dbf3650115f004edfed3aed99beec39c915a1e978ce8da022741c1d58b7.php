<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_262ceef6ac578e954b4e82e169626eeee8cd2d56b5516dc3fd0eb9b62da15f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_1995404313809d69f08a08370f14e5d43e58c5d34a717ffd4022fd3555ad13f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1995404313809d69f08a08370f14e5d43e58c5d34a717ffd4022fd3555ad13f3->enter($__internal_1995404313809d69f08a08370f14e5d43e58c5d34a717ffd4022fd3555ad13f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ed29a395e726be3d30fc861729cb482da7a6274bd661b4f2f96a917226a3b4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed29a395e726be3d30fc861729cb482da7a6274bd661b4f2f96a917226a3b4cf->enter($__internal_ed29a395e726be3d30fc861729cb482da7a6274bd661b4f2f96a917226a3b4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1995404313809d69f08a08370f14e5d43e58c5d34a717ffd4022fd3555ad13f3->leave($__internal_1995404313809d69f08a08370f14e5d43e58c5d34a717ffd4022fd3555ad13f3_prof);

        
        $__internal_ed29a395e726be3d30fc861729cb482da7a6274bd661b4f2f96a917226a3b4cf->leave($__internal_ed29a395e726be3d30fc861729cb482da7a6274bd661b4f2f96a917226a3b4cf_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_86b1ff17fc03737f4a409b099e64ef920744ed11ed5a9cae6fb6c794bfc99606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b1ff17fc03737f4a409b099e64ef920744ed11ed5a9cae6fb6c794bfc99606->enter($__internal_86b1ff17fc03737f4a409b099e64ef920744ed11ed5a9cae6fb6c794bfc99606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ad511712c6d97f49a9bf6a8c83eb557a1043fc3db3ada68e791dd6df859208a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad511712c6d97f49a9bf6a8c83eb557a1043fc3db3ada68e791dd6df859208a0->enter($__internal_ad511712c6d97f49a9bf6a8c83eb557a1043fc3db3ada68e791dd6df859208a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ad511712c6d97f49a9bf6a8c83eb557a1043fc3db3ada68e791dd6df859208a0->leave($__internal_ad511712c6d97f49a9bf6a8c83eb557a1043fc3db3ada68e791dd6df859208a0_prof);

        
        $__internal_86b1ff17fc03737f4a409b099e64ef920744ed11ed5a9cae6fb6c794bfc99606->leave($__internal_86b1ff17fc03737f4a409b099e64ef920744ed11ed5a9cae6fb6c794bfc99606_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d224c5043c32201cb4be4e69c899ced623d487ff1a5991cb8571f072ba273610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d224c5043c32201cb4be4e69c899ced623d487ff1a5991cb8571f072ba273610->enter($__internal_d224c5043c32201cb4be4e69c899ced623d487ff1a5991cb8571f072ba273610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_559ee8104040875683c8f43384c64c6ba0df430f08bb1fe9723b4932456fe74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559ee8104040875683c8f43384c64c6ba0df430f08bb1fe9723b4932456fe74a->enter($__internal_559ee8104040875683c8f43384c64c6ba0df430f08bb1fe9723b4932456fe74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_559ee8104040875683c8f43384c64c6ba0df430f08bb1fe9723b4932456fe74a->leave($__internal_559ee8104040875683c8f43384c64c6ba0df430f08bb1fe9723b4932456fe74a_prof);

        
        $__internal_d224c5043c32201cb4be4e69c899ced623d487ff1a5991cb8571f072ba273610->leave($__internal_d224c5043c32201cb4be4e69c899ced623d487ff1a5991cb8571f072ba273610_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
