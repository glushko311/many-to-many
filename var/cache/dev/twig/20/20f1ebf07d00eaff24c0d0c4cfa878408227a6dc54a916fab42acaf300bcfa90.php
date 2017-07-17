<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_84f985c380c1769d96312b3d7b8374dfb7b97c3e31546356c22591dc213fb49e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a240111a822c38deef96b47f64ef405dc5f98a97092e255779df834c9f26781a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a240111a822c38deef96b47f64ef405dc5f98a97092e255779df834c9f26781a->enter($__internal_a240111a822c38deef96b47f64ef405dc5f98a97092e255779df834c9f26781a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0bfe9c14f739c0066cca6405cf693236ffc6bee02d2e6e194372bf2402f0c9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfe9c14f739c0066cca6405cf693236ffc6bee02d2e6e194372bf2402f0c9ee->enter($__internal_0bfe9c14f739c0066cca6405cf693236ffc6bee02d2e6e194372bf2402f0c9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a240111a822c38deef96b47f64ef405dc5f98a97092e255779df834c9f26781a->leave($__internal_a240111a822c38deef96b47f64ef405dc5f98a97092e255779df834c9f26781a_prof);

        
        $__internal_0bfe9c14f739c0066cca6405cf693236ffc6bee02d2e6e194372bf2402f0c9ee->leave($__internal_0bfe9c14f739c0066cca6405cf693236ffc6bee02d2e6e194372bf2402f0c9ee_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c0c726007b5552ae3fc26ea2fad8d2fad18c25bf54aa96e1976749c74fe2f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0c726007b5552ae3fc26ea2fad8d2fad18c25bf54aa96e1976749c74fe2f75->enter($__internal_5c0c726007b5552ae3fc26ea2fad8d2fad18c25bf54aa96e1976749c74fe2f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05873407aa73b66c0a9fa769f55879e4c939c6d20dba42cde9ec93b9bdadbe20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05873407aa73b66c0a9fa769f55879e4c939c6d20dba42cde9ec93b9bdadbe20->enter($__internal_05873407aa73b66c0a9fa769f55879e4c939c6d20dba42cde9ec93b9bdadbe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_05873407aa73b66c0a9fa769f55879e4c939c6d20dba42cde9ec93b9bdadbe20->leave($__internal_05873407aa73b66c0a9fa769f55879e4c939c6d20dba42cde9ec93b9bdadbe20_prof);

        
        $__internal_5c0c726007b5552ae3fc26ea2fad8d2fad18c25bf54aa96e1976749c74fe2f75->leave($__internal_5c0c726007b5552ae3fc26ea2fad8d2fad18c25bf54aa96e1976749c74fe2f75_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
