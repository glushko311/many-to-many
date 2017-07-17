<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_70c3fce63e6a64a4a762747dad3d7d354b8f8a89575d316fbafe17a32b79bffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_f39d9bcd9d16ca9aab90fbf4f10736d8bdd88308a18055d50bd6873b35f6a51d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39d9bcd9d16ca9aab90fbf4f10736d8bdd88308a18055d50bd6873b35f6a51d->enter($__internal_f39d9bcd9d16ca9aab90fbf4f10736d8bdd88308a18055d50bd6873b35f6a51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0265048306b0e249b78b2c04a90c3bbc2fff9c33b1244f01ea24bf125f428b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0265048306b0e249b78b2c04a90c3bbc2fff9c33b1244f01ea24bf125f428b43->enter($__internal_0265048306b0e249b78b2c04a90c3bbc2fff9c33b1244f01ea24bf125f428b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f39d9bcd9d16ca9aab90fbf4f10736d8bdd88308a18055d50bd6873b35f6a51d->leave($__internal_f39d9bcd9d16ca9aab90fbf4f10736d8bdd88308a18055d50bd6873b35f6a51d_prof);

        
        $__internal_0265048306b0e249b78b2c04a90c3bbc2fff9c33b1244f01ea24bf125f428b43->leave($__internal_0265048306b0e249b78b2c04a90c3bbc2fff9c33b1244f01ea24bf125f428b43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea74674c3d514845ffe1b9319f2c3b02fb915c5cb0d002c07668a69a9a8ceba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea74674c3d514845ffe1b9319f2c3b02fb915c5cb0d002c07668a69a9a8ceba0->enter($__internal_ea74674c3d514845ffe1b9319f2c3b02fb915c5cb0d002c07668a69a9a8ceba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0000a226b2511987c5fecdb6c877ae675f8ea1cb7fd2ef5bf474d65badd90fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0000a226b2511987c5fecdb6c877ae675f8ea1cb7fd2ef5bf474d65badd90fc1->enter($__internal_0000a226b2511987c5fecdb6c877ae675f8ea1cb7fd2ef5bf474d65badd90fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0000a226b2511987c5fecdb6c877ae675f8ea1cb7fd2ef5bf474d65badd90fc1->leave($__internal_0000a226b2511987c5fecdb6c877ae675f8ea1cb7fd2ef5bf474d65badd90fc1_prof);

        
        $__internal_ea74674c3d514845ffe1b9319f2c3b02fb915c5cb0d002c07668a69a9a8ceba0->leave($__internal_ea74674c3d514845ffe1b9319f2c3b02fb915c5cb0d002c07668a69a9a8ceba0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_403b1c7ca872044bfe0c71f846d3ddec7c17f5e0d2e370a3803c07830c6a33d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_403b1c7ca872044bfe0c71f846d3ddec7c17f5e0d2e370a3803c07830c6a33d9->enter($__internal_403b1c7ca872044bfe0c71f846d3ddec7c17f5e0d2e370a3803c07830c6a33d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c5ec867d7ac924d7f0da4e38e9e7333b71e80fcced4ed67c08402d3ac52f3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5ec867d7ac924d7f0da4e38e9e7333b71e80fcced4ed67c08402d3ac52f3ce->enter($__internal_5c5ec867d7ac924d7f0da4e38e9e7333b71e80fcced4ed67c08402d3ac52f3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5c5ec867d7ac924d7f0da4e38e9e7333b71e80fcced4ed67c08402d3ac52f3ce->leave($__internal_5c5ec867d7ac924d7f0da4e38e9e7333b71e80fcced4ed67c08402d3ac52f3ce_prof);

        
        $__internal_403b1c7ca872044bfe0c71f846d3ddec7c17f5e0d2e370a3803c07830c6a33d9->leave($__internal_403b1c7ca872044bfe0c71f846d3ddec7c17f5e0d2e370a3803c07830c6a33d9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
