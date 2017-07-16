<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_63b080093155691b6bf4fcb354cc50d77239d6158af7e01631d08c7994605ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcf9f31c1d72b4da51d5372d2f9ac73d9ac7e9a9f833b69e0ed9edef20aec793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf9f31c1d72b4da51d5372d2f9ac73d9ac7e9a9f833b69e0ed9edef20aec793->enter($__internal_fcf9f31c1d72b4da51d5372d2f9ac73d9ac7e9a9f833b69e0ed9edef20aec793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ef7934ef44d6d1d54992f272a1084f1de941bc67f6dad0eb5cdf6b9a18befa89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7934ef44d6d1d54992f272a1084f1de941bc67f6dad0eb5cdf6b9a18befa89->enter($__internal_ef7934ef44d6d1d54992f272a1084f1de941bc67f6dad0eb5cdf6b9a18befa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcf9f31c1d72b4da51d5372d2f9ac73d9ac7e9a9f833b69e0ed9edef20aec793->leave($__internal_fcf9f31c1d72b4da51d5372d2f9ac73d9ac7e9a9f833b69e0ed9edef20aec793_prof);

        
        $__internal_ef7934ef44d6d1d54992f272a1084f1de941bc67f6dad0eb5cdf6b9a18befa89->leave($__internal_ef7934ef44d6d1d54992f272a1084f1de941bc67f6dad0eb5cdf6b9a18befa89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e2f44dd43298f6c3f30af8a9429db4205f747de4812f290e6c33e42ca9d8cf17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f44dd43298f6c3f30af8a9429db4205f747de4812f290e6c33e42ca9d8cf17->enter($__internal_e2f44dd43298f6c3f30af8a9429db4205f747de4812f290e6c33e42ca9d8cf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_66beaf922090da70fcb7c156d97113d0e4ac2a919f7280a56b3f267bf153e692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66beaf922090da70fcb7c156d97113d0e4ac2a919f7280a56b3f267bf153e692->enter($__internal_66beaf922090da70fcb7c156d97113d0e4ac2a919f7280a56b3f267bf153e692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_66beaf922090da70fcb7c156d97113d0e4ac2a919f7280a56b3f267bf153e692->leave($__internal_66beaf922090da70fcb7c156d97113d0e4ac2a919f7280a56b3f267bf153e692_prof);

        
        $__internal_e2f44dd43298f6c3f30af8a9429db4205f747de4812f290e6c33e42ca9d8cf17->leave($__internal_e2f44dd43298f6c3f30af8a9429db4205f747de4812f290e6c33e42ca9d8cf17_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
