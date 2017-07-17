<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_5ba2cb4b4871e706c5f44ec1fcf1a6201a6c2013df0f7b71e369a0c9b37ab7dc extends Twig_Template
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
        $__internal_909ea38ed685a3919f855d7a5a6567a6e76f69312bbb2ec17c025fb4d2df8734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909ea38ed685a3919f855d7a5a6567a6e76f69312bbb2ec17c025fb4d2df8734->enter($__internal_909ea38ed685a3919f855d7a5a6567a6e76f69312bbb2ec17c025fb4d2df8734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_58de3239f07454339bec933fb097e765c9749c7a120dcfe435d16b2cd0029203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58de3239f07454339bec933fb097e765c9749c7a120dcfe435d16b2cd0029203->enter($__internal_58de3239f07454339bec933fb097e765c9749c7a120dcfe435d16b2cd0029203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_909ea38ed685a3919f855d7a5a6567a6e76f69312bbb2ec17c025fb4d2df8734->leave($__internal_909ea38ed685a3919f855d7a5a6567a6e76f69312bbb2ec17c025fb4d2df8734_prof);

        
        $__internal_58de3239f07454339bec933fb097e765c9749c7a120dcfe435d16b2cd0029203->leave($__internal_58de3239f07454339bec933fb097e765c9749c7a120dcfe435d16b2cd0029203_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d2e2ac1bbb0bb684d057c55987e1d6bf7cda0ce93fe6e098c1cbae0978065b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2e2ac1bbb0bb684d057c55987e1d6bf7cda0ce93fe6e098c1cbae0978065b3->enter($__internal_9d2e2ac1bbb0bb684d057c55987e1d6bf7cda0ce93fe6e098c1cbae0978065b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c3db8aaaecb467d7825aa3477b72599f159d1556eb3fffe2e8b58cb8394d6bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3db8aaaecb467d7825aa3477b72599f159d1556eb3fffe2e8b58cb8394d6bac->enter($__internal_c3db8aaaecb467d7825aa3477b72599f159d1556eb3fffe2e8b58cb8394d6bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c3db8aaaecb467d7825aa3477b72599f159d1556eb3fffe2e8b58cb8394d6bac->leave($__internal_c3db8aaaecb467d7825aa3477b72599f159d1556eb3fffe2e8b58cb8394d6bac_prof);

        
        $__internal_9d2e2ac1bbb0bb684d057c55987e1d6bf7cda0ce93fe6e098c1cbae0978065b3->leave($__internal_9d2e2ac1bbb0bb684d057c55987e1d6bf7cda0ce93fe6e098c1cbae0978065b3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f55f673d498618848883018d5e6337c2cc7297c8c7e2af6575a9fb3ebd86d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f55f673d498618848883018d5e6337c2cc7297c8c7e2af6575a9fb3ebd86d5a->enter($__internal_2f55f673d498618848883018d5e6337c2cc7297c8c7e2af6575a9fb3ebd86d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_952ed2d13ccb71d737ba884846f81f14afd3544357d4234ba3833eedaf408484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952ed2d13ccb71d737ba884846f81f14afd3544357d4234ba3833eedaf408484->enter($__internal_952ed2d13ccb71d737ba884846f81f14afd3544357d4234ba3833eedaf408484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_952ed2d13ccb71d737ba884846f81f14afd3544357d4234ba3833eedaf408484->leave($__internal_952ed2d13ccb71d737ba884846f81f14afd3544357d4234ba3833eedaf408484_prof);

        
        $__internal_2f55f673d498618848883018d5e6337c2cc7297c8c7e2af6575a9fb3ebd86d5a->leave($__internal_2f55f673d498618848883018d5e6337c2cc7297c8c7e2af6575a9fb3ebd86d5a_prof);

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
