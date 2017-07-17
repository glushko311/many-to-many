<?php

/* ::base.html.twig */
class __TwigTemplate_56a892609981b9a4569575c7ed45bce78650b1c7e450419f0e64b58c0534223e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c38254e4bfe09b8eb0f92981cc01018214e41ebd35035588967fe9d9631784cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38254e4bfe09b8eb0f92981cc01018214e41ebd35035588967fe9d9631784cd->enter($__internal_c38254e4bfe09b8eb0f92981cc01018214e41ebd35035588967fe9d9631784cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_db3111b18e44bed0da164504e2dd87c8998402be5d48a0bda57c095fdb90d4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3111b18e44bed0da164504e2dd87c8998402be5d48a0bda57c095fdb90d4da->enter($__internal_db3111b18e44bed0da164504e2dd87c8998402be5d48a0bda57c095fdb90d4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_c38254e4bfe09b8eb0f92981cc01018214e41ebd35035588967fe9d9631784cd->leave($__internal_c38254e4bfe09b8eb0f92981cc01018214e41ebd35035588967fe9d9631784cd_prof);

        
        $__internal_db3111b18e44bed0da164504e2dd87c8998402be5d48a0bda57c095fdb90d4da->leave($__internal_db3111b18e44bed0da164504e2dd87c8998402be5d48a0bda57c095fdb90d4da_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5caf287e61fbced1add4304d94523a190a38a77801d07a534d34da0c5f999a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5caf287e61fbced1add4304d94523a190a38a77801d07a534d34da0c5f999a8->enter($__internal_d5caf287e61fbced1add4304d94523a190a38a77801d07a534d34da0c5f999a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31aeca93d6da8111112165cb44d967dd459673e01baa756745f5c4022d54cdc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31aeca93d6da8111112165cb44d967dd459673e01baa756745f5c4022d54cdc6->enter($__internal_31aeca93d6da8111112165cb44d967dd459673e01baa756745f5c4022d54cdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_31aeca93d6da8111112165cb44d967dd459673e01baa756745f5c4022d54cdc6->leave($__internal_31aeca93d6da8111112165cb44d967dd459673e01baa756745f5c4022d54cdc6_prof);

        
        $__internal_d5caf287e61fbced1add4304d94523a190a38a77801d07a534d34da0c5f999a8->leave($__internal_d5caf287e61fbced1add4304d94523a190a38a77801d07a534d34da0c5f999a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ab5eb3a7dbe5e15942897027ae85f672127f6eecb984bb9937fda5ab0d4c763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab5eb3a7dbe5e15942897027ae85f672127f6eecb984bb9937fda5ab0d4c763->enter($__internal_9ab5eb3a7dbe5e15942897027ae85f672127f6eecb984bb9937fda5ab0d4c763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_12d761f19ae89fb646e332fc0e4ee4f15ab23a23288dc08154a49c29ff4db917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d761f19ae89fb646e332fc0e4ee4f15ab23a23288dc08154a49c29ff4db917->enter($__internal_12d761f19ae89fb646e332fc0e4ee4f15ab23a23288dc08154a49c29ff4db917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_12d761f19ae89fb646e332fc0e4ee4f15ab23a23288dc08154a49c29ff4db917->leave($__internal_12d761f19ae89fb646e332fc0e4ee4f15ab23a23288dc08154a49c29ff4db917_prof);

        
        $__internal_9ab5eb3a7dbe5e15942897027ae85f672127f6eecb984bb9937fda5ab0d4c763->leave($__internal_9ab5eb3a7dbe5e15942897027ae85f672127f6eecb984bb9937fda5ab0d4c763_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0db467b097cd7e117e3adbff2af23e265d4ab425ea1794fb5a5c9278e331d37e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db467b097cd7e117e3adbff2af23e265d4ab425ea1794fb5a5c9278e331d37e->enter($__internal_0db467b097cd7e117e3adbff2af23e265d4ab425ea1794fb5a5c9278e331d37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1dc88b6c1d4227c481f4f02b7efa221a0c6b7bdc2c04f02ca5638502656cd4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc88b6c1d4227c481f4f02b7efa221a0c6b7bdc2c04f02ca5638502656cd4ca->enter($__internal_1dc88b6c1d4227c481f4f02b7efa221a0c6b7bdc2c04f02ca5638502656cd4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1dc88b6c1d4227c481f4f02b7efa221a0c6b7bdc2c04f02ca5638502656cd4ca->leave($__internal_1dc88b6c1d4227c481f4f02b7efa221a0c6b7bdc2c04f02ca5638502656cd4ca_prof);

        
        $__internal_0db467b097cd7e117e3adbff2af23e265d4ab425ea1794fb5a5c9278e331d37e->leave($__internal_0db467b097cd7e117e3adbff2af23e265d4ab425ea1794fb5a5c9278e331d37e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d04b14e99985b16b5aee549ed8514aadd19b9b22b5d8d8a7a9d3c328d3fe54ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04b14e99985b16b5aee549ed8514aadd19b9b22b5d8d8a7a9d3c328d3fe54ad->enter($__internal_d04b14e99985b16b5aee549ed8514aadd19b9b22b5d8d8a7a9d3c328d3fe54ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_30b4663553de0a59180978afd4a8eb81392a6fab327d87885eb0f28dd1e367c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b4663553de0a59180978afd4a8eb81392a6fab327d87885eb0f28dd1e367c7->enter($__internal_30b4663553de0a59180978afd4a8eb81392a6fab327d87885eb0f28dd1e367c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_30b4663553de0a59180978afd4a8eb81392a6fab327d87885eb0f28dd1e367c7->leave($__internal_30b4663553de0a59180978afd4a8eb81392a6fab327d87885eb0f28dd1e367c7_prof);

        
        $__internal_d04b14e99985b16b5aee549ed8514aadd19b9b22b5d8d8a7a9d3c328d3fe54ad->leave($__internal_d04b14e99985b16b5aee549ed8514aadd19b9b22b5d8d8a7a9d3c328d3fe54ad_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 12,  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 13,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/many2/many-to-many/app/Resources/views/base.html.twig");
    }
}
