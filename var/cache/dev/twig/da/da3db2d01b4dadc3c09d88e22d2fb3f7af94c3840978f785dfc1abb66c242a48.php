<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_44b814acee18a20fa813f5b47a7edc272c237f0d3094c8f2c37c3ba7b1319eb3 extends Twig_Template
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
        $__internal_fafc20e77aef7c50a3acd0f44b40223ae5530b9281722867914350bb015bf4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fafc20e77aef7c50a3acd0f44b40223ae5530b9281722867914350bb015bf4cf->enter($__internal_fafc20e77aef7c50a3acd0f44b40223ae5530b9281722867914350bb015bf4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_31c0a0f404dd858da1d5e8c62fc5fcf51c6fd90d363612ef0792d6220935e610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c0a0f404dd858da1d5e8c62fc5fcf51c6fd90d363612ef0792d6220935e610->enter($__internal_31c0a0f404dd858da1d5e8c62fc5fcf51c6fd90d363612ef0792d6220935e610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fafc20e77aef7c50a3acd0f44b40223ae5530b9281722867914350bb015bf4cf->leave($__internal_fafc20e77aef7c50a3acd0f44b40223ae5530b9281722867914350bb015bf4cf_prof);

        
        $__internal_31c0a0f404dd858da1d5e8c62fc5fcf51c6fd90d363612ef0792d6220935e610->leave($__internal_31c0a0f404dd858da1d5e8c62fc5fcf51c6fd90d363612ef0792d6220935e610_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ecd7a954ead7de81a4524263e71e2882849cb7be0f7b2c7e5c6d598c7540dc56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd7a954ead7de81a4524263e71e2882849cb7be0f7b2c7e5c6d598c7540dc56->enter($__internal_ecd7a954ead7de81a4524263e71e2882849cb7be0f7b2c7e5c6d598c7540dc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1e4f079a68056aacf175cebcbe82e199f25424a41cc2135224ced468aface28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4f079a68056aacf175cebcbe82e199f25424a41cc2135224ced468aface28a->enter($__internal_1e4f079a68056aacf175cebcbe82e199f25424a41cc2135224ced468aface28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1e4f079a68056aacf175cebcbe82e199f25424a41cc2135224ced468aface28a->leave($__internal_1e4f079a68056aacf175cebcbe82e199f25424a41cc2135224ced468aface28a_prof);

        
        $__internal_ecd7a954ead7de81a4524263e71e2882849cb7be0f7b2c7e5c6d598c7540dc56->leave($__internal_ecd7a954ead7de81a4524263e71e2882849cb7be0f7b2c7e5c6d598c7540dc56_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_24d8ae5b7c8c2168f0eac20949b93d49644ab6a6536382eb9c299484b69c8f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d8ae5b7c8c2168f0eac20949b93d49644ab6a6536382eb9c299484b69c8f67->enter($__internal_24d8ae5b7c8c2168f0eac20949b93d49644ab6a6536382eb9c299484b69c8f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f364dd1898b01c80155e77a4f7a46acbe0df322b9e07e75cea1ed8e932ae54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f364dd1898b01c80155e77a4f7a46acbe0df322b9e07e75cea1ed8e932ae54e->enter($__internal_9f364dd1898b01c80155e77a4f7a46acbe0df322b9e07e75cea1ed8e932ae54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9f364dd1898b01c80155e77a4f7a46acbe0df322b9e07e75cea1ed8e932ae54e->leave($__internal_9f364dd1898b01c80155e77a4f7a46acbe0df322b9e07e75cea1ed8e932ae54e_prof);

        
        $__internal_24d8ae5b7c8c2168f0eac20949b93d49644ab6a6536382eb9c299484b69c8f67->leave($__internal_24d8ae5b7c8c2168f0eac20949b93d49644ab6a6536382eb9c299484b69c8f67_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f848675e3bdc98bcfe934a3e09c459d6ad1fec172059732dd68d247514d992b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f848675e3bdc98bcfe934a3e09c459d6ad1fec172059732dd68d247514d992b0->enter($__internal_f848675e3bdc98bcfe934a3e09c459d6ad1fec172059732dd68d247514d992b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d7670429d8fdc27def494e30b66e4b7d88c434439e94b1260d2bcfe25d9d7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7670429d8fdc27def494e30b66e4b7d88c434439e94b1260d2bcfe25d9d7dc->enter($__internal_4d7670429d8fdc27def494e30b66e4b7d88c434439e94b1260d2bcfe25d9d7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4d7670429d8fdc27def494e30b66e4b7d88c434439e94b1260d2bcfe25d9d7dc->leave($__internal_4d7670429d8fdc27def494e30b66e4b7d88c434439e94b1260d2bcfe25d9d7dc_prof);

        
        $__internal_f848675e3bdc98bcfe934a3e09c459d6ad1fec172059732dd68d247514d992b0->leave($__internal_f848675e3bdc98bcfe934a3e09c459d6ad1fec172059732dd68d247514d992b0_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
