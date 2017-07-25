<?php

/* ::base.html.twig */
class __TwigTemplate_9533a903bd1ac61f25d9fbac7a74e48891a9eaa30684029d9fe6fc6a5e46951f extends Twig_Template
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
        $__internal_c314c09b1dc01febef95fb243bae7e78efea8504f4e9ceec11f91e35ae915aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c314c09b1dc01febef95fb243bae7e78efea8504f4e9ceec11f91e35ae915aa9->enter($__internal_c314c09b1dc01febef95fb243bae7e78efea8504f4e9ceec11f91e35ae915aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_518885925a505702897550c09a7b485d6526ed5927084e07eb015964e43e8be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518885925a505702897550c09a7b485d6526ed5927084e07eb015964e43e8be2->enter($__internal_518885925a505702897550c09a7b485d6526ed5927084e07eb015964e43e8be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c314c09b1dc01febef95fb243bae7e78efea8504f4e9ceec11f91e35ae915aa9->leave($__internal_c314c09b1dc01febef95fb243bae7e78efea8504f4e9ceec11f91e35ae915aa9_prof);

        
        $__internal_518885925a505702897550c09a7b485d6526ed5927084e07eb015964e43e8be2->leave($__internal_518885925a505702897550c09a7b485d6526ed5927084e07eb015964e43e8be2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f68727e5500bbf74de75c37f9086d9884755b19fcdb8a2983aa3b011ab2c711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f68727e5500bbf74de75c37f9086d9884755b19fcdb8a2983aa3b011ab2c711->enter($__internal_5f68727e5500bbf74de75c37f9086d9884755b19fcdb8a2983aa3b011ab2c711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fda787e5a3511cf81adbfd857fc249348507fd76f3f8dfa83bc0e18b07919ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda787e5a3511cf81adbfd857fc249348507fd76f3f8dfa83bc0e18b07919ae8->enter($__internal_fda787e5a3511cf81adbfd857fc249348507fd76f3f8dfa83bc0e18b07919ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fda787e5a3511cf81adbfd857fc249348507fd76f3f8dfa83bc0e18b07919ae8->leave($__internal_fda787e5a3511cf81adbfd857fc249348507fd76f3f8dfa83bc0e18b07919ae8_prof);

        
        $__internal_5f68727e5500bbf74de75c37f9086d9884755b19fcdb8a2983aa3b011ab2c711->leave($__internal_5f68727e5500bbf74de75c37f9086d9884755b19fcdb8a2983aa3b011ab2c711_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af7a0f488fcf65bcefbe1c5dc97a1a1e13c89d7f32e5fc2d5ac92e3d18e93ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af7a0f488fcf65bcefbe1c5dc97a1a1e13c89d7f32e5fc2d5ac92e3d18e93ff7->enter($__internal_af7a0f488fcf65bcefbe1c5dc97a1a1e13c89d7f32e5fc2d5ac92e3d18e93ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5a240adf69e246666b8a7d83a19a29bae0ec49f8616d1288399ccf6749462c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a240adf69e246666b8a7d83a19a29bae0ec49f8616d1288399ccf6749462c7e->enter($__internal_5a240adf69e246666b8a7d83a19a29bae0ec49f8616d1288399ccf6749462c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a240adf69e246666b8a7d83a19a29bae0ec49f8616d1288399ccf6749462c7e->leave($__internal_5a240adf69e246666b8a7d83a19a29bae0ec49f8616d1288399ccf6749462c7e_prof);

        
        $__internal_af7a0f488fcf65bcefbe1c5dc97a1a1e13c89d7f32e5fc2d5ac92e3d18e93ff7->leave($__internal_af7a0f488fcf65bcefbe1c5dc97a1a1e13c89d7f32e5fc2d5ac92e3d18e93ff7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2609a9d8963715660019f87dfa5a73430a2990dfdda105a64770b9fcc71e0a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2609a9d8963715660019f87dfa5a73430a2990dfdda105a64770b9fcc71e0a7f->enter($__internal_2609a9d8963715660019f87dfa5a73430a2990dfdda105a64770b9fcc71e0a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_527de5a76891404dfc1133555a136f87850a7d746f46879ec064093421c03fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527de5a76891404dfc1133555a136f87850a7d746f46879ec064093421c03fd0->enter($__internal_527de5a76891404dfc1133555a136f87850a7d746f46879ec064093421c03fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_527de5a76891404dfc1133555a136f87850a7d746f46879ec064093421c03fd0->leave($__internal_527de5a76891404dfc1133555a136f87850a7d746f46879ec064093421c03fd0_prof);

        
        $__internal_2609a9d8963715660019f87dfa5a73430a2990dfdda105a64770b9fcc71e0a7f->leave($__internal_2609a9d8963715660019f87dfa5a73430a2990dfdda105a64770b9fcc71e0a7f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c02a71d5869abf82b84b32884afed53ab8adafa8d47d786f9caa5869eae02366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02a71d5869abf82b84b32884afed53ab8adafa8d47d786f9caa5869eae02366->enter($__internal_c02a71d5869abf82b84b32884afed53ab8adafa8d47d786f9caa5869eae02366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f25f464443f7e1a8ee56d30f9ee5edc2908b945844c07aea7a4eab7f6984ddd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25f464443f7e1a8ee56d30f9ee5edc2908b945844c07aea7a4eab7f6984ddd9->enter($__internal_f25f464443f7e1a8ee56d30f9ee5edc2908b945844c07aea7a4eab7f6984ddd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_f25f464443f7e1a8ee56d30f9ee5edc2908b945844c07aea7a4eab7f6984ddd9->leave($__internal_f25f464443f7e1a8ee56d30f9ee5edc2908b945844c07aea7a4eab7f6984ddd9_prof);

        
        $__internal_c02a71d5869abf82b84b32884afed53ab8adafa8d47d786f9caa5869eae02366->leave($__internal_c02a71d5869abf82b84b32884afed53ab8adafa8d47d786f9caa5869eae02366_prof);

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
", "::base.html.twig", "/var/www/html/many-to-many/app/Resources/views/base.html.twig");
    }
}
