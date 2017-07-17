<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_295f4e87b601bf84949128071bf32ed72272794e58de2e6575275fb503553e66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_f1ffe3014e82bf443457e7e4c54033a51eb788c58b2c71cdb61f108c1ac79742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ffe3014e82bf443457e7e4c54033a51eb788c58b2c71cdb61f108c1ac79742->enter($__internal_f1ffe3014e82bf443457e7e4c54033a51eb788c58b2c71cdb61f108c1ac79742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0952b44099fba862e569300447076e5e683106d9721256f5452b10141ad8b919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0952b44099fba862e569300447076e5e683106d9721256f5452b10141ad8b919->enter($__internal_0952b44099fba862e569300447076e5e683106d9721256f5452b10141ad8b919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ffe3014e82bf443457e7e4c54033a51eb788c58b2c71cdb61f108c1ac79742->leave($__internal_f1ffe3014e82bf443457e7e4c54033a51eb788c58b2c71cdb61f108c1ac79742_prof);

        
        $__internal_0952b44099fba862e569300447076e5e683106d9721256f5452b10141ad8b919->leave($__internal_0952b44099fba862e569300447076e5e683106d9721256f5452b10141ad8b919_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b491064c7a7650a63c5c53fdf4fde7e940bcc8ab8a1dab65e7d2ac90d7cdff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b491064c7a7650a63c5c53fdf4fde7e940bcc8ab8a1dab65e7d2ac90d7cdff0->enter($__internal_7b491064c7a7650a63c5c53fdf4fde7e940bcc8ab8a1dab65e7d2ac90d7cdff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be994df4ae8e6efc6efb82c4eba4a8d269beb461b4553c2001a7a36c708561be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be994df4ae8e6efc6efb82c4eba4a8d269beb461b4553c2001a7a36c708561be->enter($__internal_be994df4ae8e6efc6efb82c4eba4a8d269beb461b4553c2001a7a36c708561be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_be994df4ae8e6efc6efb82c4eba4a8d269beb461b4553c2001a7a36c708561be->leave($__internal_be994df4ae8e6efc6efb82c4eba4a8d269beb461b4553c2001a7a36c708561be_prof);

        
        $__internal_7b491064c7a7650a63c5c53fdf4fde7e940bcc8ab8a1dab65e7d2ac90d7cdff0->leave($__internal_7b491064c7a7650a63c5c53fdf4fde7e940bcc8ab8a1dab65e7d2ac90d7cdff0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0af6b4ab72fdf4e33f2cbd6022f124fcc2aa450e6e659b177d21bfda071c9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0af6b4ab72fdf4e33f2cbd6022f124fcc2aa450e6e659b177d21bfda071c9f0->enter($__internal_d0af6b4ab72fdf4e33f2cbd6022f124fcc2aa450e6e659b177d21bfda071c9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7939ae21f2e2790db0b92fa00f643a36c0a1a072a49b9382aca4f40956a0e1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7939ae21f2e2790db0b92fa00f643a36c0a1a072a49b9382aca4f40956a0e1d9->enter($__internal_7939ae21f2e2790db0b92fa00f643a36c0a1a072a49b9382aca4f40956a0e1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7939ae21f2e2790db0b92fa00f643a36c0a1a072a49b9382aca4f40956a0e1d9->leave($__internal_7939ae21f2e2790db0b92fa00f643a36c0a1a072a49b9382aca4f40956a0e1d9_prof);

        
        $__internal_d0af6b4ab72fdf4e33f2cbd6022f124fcc2aa450e6e659b177d21bfda071c9f0->leave($__internal_d0af6b4ab72fdf4e33f2cbd6022f124fcc2aa450e6e659b177d21bfda071c9f0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
