<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_ee961520822962a123d7fa39a3d4dd018bcd762f9f0c907a7edf516c3dbf2d49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d2988d7b6a21ba1455da8300b73425cc98916b8d3793ddaff72fe85421afa1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2988d7b6a21ba1455da8300b73425cc98916b8d3793ddaff72fe85421afa1d->enter($__internal_4d2988d7b6a21ba1455da8300b73425cc98916b8d3793ddaff72fe85421afa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8957638693d9044a86baf527dc3761ac748478d9de9b0d58e147898430892834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8957638693d9044a86baf527dc3761ac748478d9de9b0d58e147898430892834->enter($__internal_8957638693d9044a86baf527dc3761ac748478d9de9b0d58e147898430892834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d2988d7b6a21ba1455da8300b73425cc98916b8d3793ddaff72fe85421afa1d->leave($__internal_4d2988d7b6a21ba1455da8300b73425cc98916b8d3793ddaff72fe85421afa1d_prof);

        
        $__internal_8957638693d9044a86baf527dc3761ac748478d9de9b0d58e147898430892834->leave($__internal_8957638693d9044a86baf527dc3761ac748478d9de9b0d58e147898430892834_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e430eb3680b6a730e1d2f6c1321930dc8950e17a72986ac69646ed54c1cb82b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e430eb3680b6a730e1d2f6c1321930dc8950e17a72986ac69646ed54c1cb82b5->enter($__internal_e430eb3680b6a730e1d2f6c1321930dc8950e17a72986ac69646ed54c1cb82b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2bdfd0e310ba263635111c9be0a2aec068dac247991fb8be05b6dbe4added1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdfd0e310ba263635111c9be0a2aec068dac247991fb8be05b6dbe4added1d3->enter($__internal_2bdfd0e310ba263635111c9be0a2aec068dac247991fb8be05b6dbe4added1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2bdfd0e310ba263635111c9be0a2aec068dac247991fb8be05b6dbe4added1d3->leave($__internal_2bdfd0e310ba263635111c9be0a2aec068dac247991fb8be05b6dbe4added1d3_prof);

        
        $__internal_e430eb3680b6a730e1d2f6c1321930dc8950e17a72986ac69646ed54c1cb82b5->leave($__internal_e430eb3680b6a730e1d2f6c1321930dc8950e17a72986ac69646ed54c1cb82b5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_05696692ce14337a0c0a6105bd420266663bd2b9ed7904d0d1422f561e428924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05696692ce14337a0c0a6105bd420266663bd2b9ed7904d0d1422f561e428924->enter($__internal_05696692ce14337a0c0a6105bd420266663bd2b9ed7904d0d1422f561e428924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df0d3feb320b8edf52e9e6b64f6c91db5ff078cf1dbe2766fd708cd46d7469c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0d3feb320b8edf52e9e6b64f6c91db5ff078cf1dbe2766fd708cd46d7469c3->enter($__internal_df0d3feb320b8edf52e9e6b64f6c91db5ff078cf1dbe2766fd708cd46d7469c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_df0d3feb320b8edf52e9e6b64f6c91db5ff078cf1dbe2766fd708cd46d7469c3->leave($__internal_df0d3feb320b8edf52e9e6b64f6c91db5ff078cf1dbe2766fd708cd46d7469c3_prof);

        
        $__internal_05696692ce14337a0c0a6105bd420266663bd2b9ed7904d0d1422f561e428924->leave($__internal_05696692ce14337a0c0a6105bd420266663bd2b9ed7904d0d1422f561e428924_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
