<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6a8b7593055a920f37ab6b5939b56fb34fda55f9d45f73e95a353fa58e55e832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7e5d45e67190e26057d6b92af867a7bc4e7a76105f02b81978c6bf5fee7e322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e5d45e67190e26057d6b92af867a7bc4e7a76105f02b81978c6bf5fee7e322->enter($__internal_e7e5d45e67190e26057d6b92af867a7bc4e7a76105f02b81978c6bf5fee7e322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_576b253e71c710f89481be53a48c2eb43efec6ec77d5c0dc876d8a95a2ae7f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576b253e71c710f89481be53a48c2eb43efec6ec77d5c0dc876d8a95a2ae7f09->enter($__internal_576b253e71c710f89481be53a48c2eb43efec6ec77d5c0dc876d8a95a2ae7f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7e5d45e67190e26057d6b92af867a7bc4e7a76105f02b81978c6bf5fee7e322->leave($__internal_e7e5d45e67190e26057d6b92af867a7bc4e7a76105f02b81978c6bf5fee7e322_prof);

        
        $__internal_576b253e71c710f89481be53a48c2eb43efec6ec77d5c0dc876d8a95a2ae7f09->leave($__internal_576b253e71c710f89481be53a48c2eb43efec6ec77d5c0dc876d8a95a2ae7f09_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d0752450204283893c71422f83124915c5110d59737c817e6ee5de30600863c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0752450204283893c71422f83124915c5110d59737c817e6ee5de30600863c->enter($__internal_1d0752450204283893c71422f83124915c5110d59737c817e6ee5de30600863c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6522a7af5eac5cff9e4c6b25f01dcc5455c835f92aff622b40eebe96c403f422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6522a7af5eac5cff9e4c6b25f01dcc5455c835f92aff622b40eebe96c403f422->enter($__internal_6522a7af5eac5cff9e4c6b25f01dcc5455c835f92aff622b40eebe96c403f422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6522a7af5eac5cff9e4c6b25f01dcc5455c835f92aff622b40eebe96c403f422->leave($__internal_6522a7af5eac5cff9e4c6b25f01dcc5455c835f92aff622b40eebe96c403f422_prof);

        
        $__internal_1d0752450204283893c71422f83124915c5110d59737c817e6ee5de30600863c->leave($__internal_1d0752450204283893c71422f83124915c5110d59737c817e6ee5de30600863c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_13916c973f9996c7edc3430b3dd5ae4a762730f82ed588ee2209e8cf5a130d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13916c973f9996c7edc3430b3dd5ae4a762730f82ed588ee2209e8cf5a130d52->enter($__internal_13916c973f9996c7edc3430b3dd5ae4a762730f82ed588ee2209e8cf5a130d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_46630c0c37c2ec19ab8a90f3bbe2d8ba3b4ef60249e7652a4b64eed072485064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46630c0c37c2ec19ab8a90f3bbe2d8ba3b4ef60249e7652a4b64eed072485064->enter($__internal_46630c0c37c2ec19ab8a90f3bbe2d8ba3b4ef60249e7652a4b64eed072485064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_46630c0c37c2ec19ab8a90f3bbe2d8ba3b4ef60249e7652a4b64eed072485064->leave($__internal_46630c0c37c2ec19ab8a90f3bbe2d8ba3b4ef60249e7652a4b64eed072485064_prof);

        
        $__internal_13916c973f9996c7edc3430b3dd5ae4a762730f82ed588ee2209e8cf5a130d52->leave($__internal_13916c973f9996c7edc3430b3dd5ae4a762730f82ed588ee2209e8cf5a130d52_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a48d596f0b7da5da77b4d730c551c38fc185ff400b5981facd782352bcb684bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48d596f0b7da5da77b4d730c551c38fc185ff400b5981facd782352bcb684bb->enter($__internal_a48d596f0b7da5da77b4d730c551c38fc185ff400b5981facd782352bcb684bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5caa5ff78a142b9d3e7e2b220c29015c7d7d5b2d691ef0d6ebb69c3f1f5c9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5caa5ff78a142b9d3e7e2b220c29015c7d7d5b2d691ef0d6ebb69c3f1f5c9b0->enter($__internal_e5caa5ff78a142b9d3e7e2b220c29015c7d7d5b2d691ef0d6ebb69c3f1f5c9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e5caa5ff78a142b9d3e7e2b220c29015c7d7d5b2d691ef0d6ebb69c3f1f5c9b0->leave($__internal_e5caa5ff78a142b9d3e7e2b220c29015c7d7d5b2d691ef0d6ebb69c3f1f5c9b0_prof);

        
        $__internal_a48d596f0b7da5da77b4d730c551c38fc185ff400b5981facd782352bcb684bb->leave($__internal_a48d596f0b7da5da77b4d730c551c38fc185ff400b5981facd782352bcb684bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
