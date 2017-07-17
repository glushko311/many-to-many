<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ccaf765351e82a0c0e18630603e47a4ae8541352678e7326594b709f77991c23 extends Twig_Template
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
        $__internal_b97b2b8de9f591919407ec3bd258d79a2f8b950b1ec95bfdc63c5079072bd67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97b2b8de9f591919407ec3bd258d79a2f8b950b1ec95bfdc63c5079072bd67a->enter($__internal_b97b2b8de9f591919407ec3bd258d79a2f8b950b1ec95bfdc63c5079072bd67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3faaf719eb0d32143df12d31468f4c8aefaa1424caf219decea1960f41f13cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3faaf719eb0d32143df12d31468f4c8aefaa1424caf219decea1960f41f13cc2->enter($__internal_3faaf719eb0d32143df12d31468f4c8aefaa1424caf219decea1960f41f13cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b97b2b8de9f591919407ec3bd258d79a2f8b950b1ec95bfdc63c5079072bd67a->leave($__internal_b97b2b8de9f591919407ec3bd258d79a2f8b950b1ec95bfdc63c5079072bd67a_prof);

        
        $__internal_3faaf719eb0d32143df12d31468f4c8aefaa1424caf219decea1960f41f13cc2->leave($__internal_3faaf719eb0d32143df12d31468f4c8aefaa1424caf219decea1960f41f13cc2_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_018b9f792172fb967106553d7caf37008ffd4e8f7a0eb85b7f8859a5ef21c241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018b9f792172fb967106553d7caf37008ffd4e8f7a0eb85b7f8859a5ef21c241->enter($__internal_018b9f792172fb967106553d7caf37008ffd4e8f7a0eb85b7f8859a5ef21c241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6cbe2b0cd08127209c9abe657e03338630bfba68c4ba96f3b2ea680d331a5f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbe2b0cd08127209c9abe657e03338630bfba68c4ba96f3b2ea680d331a5f28->enter($__internal_6cbe2b0cd08127209c9abe657e03338630bfba68c4ba96f3b2ea680d331a5f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_6cbe2b0cd08127209c9abe657e03338630bfba68c4ba96f3b2ea680d331a5f28->leave($__internal_6cbe2b0cd08127209c9abe657e03338630bfba68c4ba96f3b2ea680d331a5f28_prof);

        
        $__internal_018b9f792172fb967106553d7caf37008ffd4e8f7a0eb85b7f8859a5ef21c241->leave($__internal_018b9f792172fb967106553d7caf37008ffd4e8f7a0eb85b7f8859a5ef21c241_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f91c07a5a1c7975ac3c273692bdd886b46d19c06c2182f6615282008032d40bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91c07a5a1c7975ac3c273692bdd886b46d19c06c2182f6615282008032d40bf->enter($__internal_f91c07a5a1c7975ac3c273692bdd886b46d19c06c2182f6615282008032d40bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_71446407693c0433ceebe6c973e48452dc0246b6e79683298e674e154aff901b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71446407693c0433ceebe6c973e48452dc0246b6e79683298e674e154aff901b->enter($__internal_71446407693c0433ceebe6c973e48452dc0246b6e79683298e674e154aff901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_71446407693c0433ceebe6c973e48452dc0246b6e79683298e674e154aff901b->leave($__internal_71446407693c0433ceebe6c973e48452dc0246b6e79683298e674e154aff901b_prof);

        
        $__internal_f91c07a5a1c7975ac3c273692bdd886b46d19c06c2182f6615282008032d40bf->leave($__internal_f91c07a5a1c7975ac3c273692bdd886b46d19c06c2182f6615282008032d40bf_prof);

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
