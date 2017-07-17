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
        $__internal_e7f11363ddd7ecfb3e720cd853966cdf3aefceda531616eb337957a38f8b453c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f11363ddd7ecfb3e720cd853966cdf3aefceda531616eb337957a38f8b453c->enter($__internal_e7f11363ddd7ecfb3e720cd853966cdf3aefceda531616eb337957a38f8b453c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c691db26e4102234e1879f05f88f7fb6fca7218a7a892bd829634e0e83078cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c691db26e4102234e1879f05f88f7fb6fca7218a7a892bd829634e0e83078cb2->enter($__internal_c691db26e4102234e1879f05f88f7fb6fca7218a7a892bd829634e0e83078cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e7f11363ddd7ecfb3e720cd853966cdf3aefceda531616eb337957a38f8b453c->leave($__internal_e7f11363ddd7ecfb3e720cd853966cdf3aefceda531616eb337957a38f8b453c_prof);

        
        $__internal_c691db26e4102234e1879f05f88f7fb6fca7218a7a892bd829634e0e83078cb2->leave($__internal_c691db26e4102234e1879f05f88f7fb6fca7218a7a892bd829634e0e83078cb2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1bc3f7a8b40fea07954448806240b79a9fe2f66754bf85134d8ee230a344fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1bc3f7a8b40fea07954448806240b79a9fe2f66754bf85134d8ee230a344fd1->enter($__internal_f1bc3f7a8b40fea07954448806240b79a9fe2f66754bf85134d8ee230a344fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c48088eeb0ebff5483f079650136824b3d44c16c7b59a8b22184228cee435d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48088eeb0ebff5483f079650136824b3d44c16c7b59a8b22184228cee435d71->enter($__internal_c48088eeb0ebff5483f079650136824b3d44c16c7b59a8b22184228cee435d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c48088eeb0ebff5483f079650136824b3d44c16c7b59a8b22184228cee435d71->leave($__internal_c48088eeb0ebff5483f079650136824b3d44c16c7b59a8b22184228cee435d71_prof);

        
        $__internal_f1bc3f7a8b40fea07954448806240b79a9fe2f66754bf85134d8ee230a344fd1->leave($__internal_f1bc3f7a8b40fea07954448806240b79a9fe2f66754bf85134d8ee230a344fd1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af1928f5e54a856140ef4cc2fdf6e82c619291b6bf51d004511ef9e48a2a3f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1928f5e54a856140ef4cc2fdf6e82c619291b6bf51d004511ef9e48a2a3f89->enter($__internal_af1928f5e54a856140ef4cc2fdf6e82c619291b6bf51d004511ef9e48a2a3f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c11f3d6cd7516e3091c1e1724821d3b67b0c0d7af1b572815d9c25018a46bfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11f3d6cd7516e3091c1e1724821d3b67b0c0d7af1b572815d9c25018a46bfee->enter($__internal_c11f3d6cd7516e3091c1e1724821d3b67b0c0d7af1b572815d9c25018a46bfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c11f3d6cd7516e3091c1e1724821d3b67b0c0d7af1b572815d9c25018a46bfee->leave($__internal_c11f3d6cd7516e3091c1e1724821d3b67b0c0d7af1b572815d9c25018a46bfee_prof);

        
        $__internal_af1928f5e54a856140ef4cc2fdf6e82c619291b6bf51d004511ef9e48a2a3f89->leave($__internal_af1928f5e54a856140ef4cc2fdf6e82c619291b6bf51d004511ef9e48a2a3f89_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_85cbc2286b1c164058c467da462cd73be0c8942a5667e44d2cf1f38792e8001c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85cbc2286b1c164058c467da462cd73be0c8942a5667e44d2cf1f38792e8001c->enter($__internal_85cbc2286b1c164058c467da462cd73be0c8942a5667e44d2cf1f38792e8001c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2564fdc31503921006d9cb33f52899dbd1489593d2311592057302d6bce8e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2564fdc31503921006d9cb33f52899dbd1489593d2311592057302d6bce8e76->enter($__internal_c2564fdc31503921006d9cb33f52899dbd1489593d2311592057302d6bce8e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c2564fdc31503921006d9cb33f52899dbd1489593d2311592057302d6bce8e76->leave($__internal_c2564fdc31503921006d9cb33f52899dbd1489593d2311592057302d6bce8e76_prof);

        
        $__internal_85cbc2286b1c164058c467da462cd73be0c8942a5667e44d2cf1f38792e8001c->leave($__internal_85cbc2286b1c164058c467da462cd73be0c8942a5667e44d2cf1f38792e8001c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_831c4cd7ae7397574c5aa97b22d7a80aad1901e42aa575d7f0860aa32332152e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831c4cd7ae7397574c5aa97b22d7a80aad1901e42aa575d7f0860aa32332152e->enter($__internal_831c4cd7ae7397574c5aa97b22d7a80aad1901e42aa575d7f0860aa32332152e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_04de230bf75998739eee0eaf564dacc65bf195e169014f7c96fc0aa88c0ae3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04de230bf75998739eee0eaf564dacc65bf195e169014f7c96fc0aa88c0ae3a4->enter($__internal_04de230bf75998739eee0eaf564dacc65bf195e169014f7c96fc0aa88c0ae3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_04de230bf75998739eee0eaf564dacc65bf195e169014f7c96fc0aa88c0ae3a4->leave($__internal_04de230bf75998739eee0eaf564dacc65bf195e169014f7c96fc0aa88c0ae3a4_prof);

        
        $__internal_831c4cd7ae7397574c5aa97b22d7a80aad1901e42aa575d7f0860aa32332152e->leave($__internal_831c4cd7ae7397574c5aa97b22d7a80aad1901e42aa575d7f0860aa32332152e_prof);

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
