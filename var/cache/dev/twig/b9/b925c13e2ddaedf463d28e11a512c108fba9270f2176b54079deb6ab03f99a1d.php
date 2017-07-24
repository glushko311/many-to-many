<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_eaa9046141cc5d5f10b3846ed09fd3f466dc1ddd231856ad43ec4bf5a5df504c extends Twig_Template
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
        $__internal_2c59d60f259ef592c19e76be4f46d840de6cead7351727396fb65421e1b9d57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c59d60f259ef592c19e76be4f46d840de6cead7351727396fb65421e1b9d57e->enter($__internal_2c59d60f259ef592c19e76be4f46d840de6cead7351727396fb65421e1b9d57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ff7a9e79cb184734cb69e14c1f005244e15327ae69dedb741a555ee3cb7bd7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7a9e79cb184734cb69e14c1f005244e15327ae69dedb741a555ee3cb7bd7c1->enter($__internal_ff7a9e79cb184734cb69e14c1f005244e15327ae69dedb741a555ee3cb7bd7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c59d60f259ef592c19e76be4f46d840de6cead7351727396fb65421e1b9d57e->leave($__internal_2c59d60f259ef592c19e76be4f46d840de6cead7351727396fb65421e1b9d57e_prof);

        
        $__internal_ff7a9e79cb184734cb69e14c1f005244e15327ae69dedb741a555ee3cb7bd7c1->leave($__internal_ff7a9e79cb184734cb69e14c1f005244e15327ae69dedb741a555ee3cb7bd7c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_054072a19eb699806763ea073c2b3a3d867eae5a5ecdf05187ddfeb2a9fff32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054072a19eb699806763ea073c2b3a3d867eae5a5ecdf05187ddfeb2a9fff32b->enter($__internal_054072a19eb699806763ea073c2b3a3d867eae5a5ecdf05187ddfeb2a9fff32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c712c938c99d0576916bc1b65e6b78d269941102e99f112d037396a0830bfe0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c712c938c99d0576916bc1b65e6b78d269941102e99f112d037396a0830bfe0b->enter($__internal_c712c938c99d0576916bc1b65e6b78d269941102e99f112d037396a0830bfe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c712c938c99d0576916bc1b65e6b78d269941102e99f112d037396a0830bfe0b->leave($__internal_c712c938c99d0576916bc1b65e6b78d269941102e99f112d037396a0830bfe0b_prof);

        
        $__internal_054072a19eb699806763ea073c2b3a3d867eae5a5ecdf05187ddfeb2a9fff32b->leave($__internal_054072a19eb699806763ea073c2b3a3d867eae5a5ecdf05187ddfeb2a9fff32b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_efb2ca8d70ce9d113220b4acf9325c3ec1e4e4a04e494b875ea8b887432caaee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb2ca8d70ce9d113220b4acf9325c3ec1e4e4a04e494b875ea8b887432caaee->enter($__internal_efb2ca8d70ce9d113220b4acf9325c3ec1e4e4a04e494b875ea8b887432caaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_982d9571ba8d9147caada4c7be7fba18877747e8abb1bcc9ec53ce78ab9aa142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982d9571ba8d9147caada4c7be7fba18877747e8abb1bcc9ec53ce78ab9aa142->enter($__internal_982d9571ba8d9147caada4c7be7fba18877747e8abb1bcc9ec53ce78ab9aa142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_982d9571ba8d9147caada4c7be7fba18877747e8abb1bcc9ec53ce78ab9aa142->leave($__internal_982d9571ba8d9147caada4c7be7fba18877747e8abb1bcc9ec53ce78ab9aa142_prof);

        
        $__internal_efb2ca8d70ce9d113220b4acf9325c3ec1e4e4a04e494b875ea8b887432caaee->leave($__internal_efb2ca8d70ce9d113220b4acf9325c3ec1e4e4a04e494b875ea8b887432caaee_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
