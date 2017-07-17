<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_e1cc2e3062ee17d3a6bdff693beb68c2a66438654f800cd2b62820df5c3f5521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_db83d6251d3c9206a788b8de116013386d33f75e099c6c87ebe7db4dc1ab23b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db83d6251d3c9206a788b8de116013386d33f75e099c6c87ebe7db4dc1ab23b6->enter($__internal_db83d6251d3c9206a788b8de116013386d33f75e099c6c87ebe7db4dc1ab23b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_bfdd2db4cdc22df5ae7c9a0de362faaf02a13fbd91905576c6f627d73a19f2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdd2db4cdc22df5ae7c9a0de362faaf02a13fbd91905576c6f627d73a19f2b4->enter($__internal_bfdd2db4cdc22df5ae7c9a0de362faaf02a13fbd91905576c6f627d73a19f2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db83d6251d3c9206a788b8de116013386d33f75e099c6c87ebe7db4dc1ab23b6->leave($__internal_db83d6251d3c9206a788b8de116013386d33f75e099c6c87ebe7db4dc1ab23b6_prof);

        
        $__internal_bfdd2db4cdc22df5ae7c9a0de362faaf02a13fbd91905576c6f627d73a19f2b4->leave($__internal_bfdd2db4cdc22df5ae7c9a0de362faaf02a13fbd91905576c6f627d73a19f2b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f56bb7bdbe8d23eecb94f8ff1ab754165668c67cbeec7f0bfee309377884667a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56bb7bdbe8d23eecb94f8ff1ab754165668c67cbeec7f0bfee309377884667a->enter($__internal_f56bb7bdbe8d23eecb94f8ff1ab754165668c67cbeec7f0bfee309377884667a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ee410e0a411af6f87185166cd81b9ffd19c7fd5ab4ae0af526b7b58b4ed20b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee410e0a411af6f87185166cd81b9ffd19c7fd5ab4ae0af526b7b58b4ed20b5->enter($__internal_8ee410e0a411af6f87185166cd81b9ffd19c7fd5ab4ae0af526b7b58b4ed20b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8ee410e0a411af6f87185166cd81b9ffd19c7fd5ab4ae0af526b7b58b4ed20b5->leave($__internal_8ee410e0a411af6f87185166cd81b9ffd19c7fd5ab4ae0af526b7b58b4ed20b5_prof);

        
        $__internal_f56bb7bdbe8d23eecb94f8ff1ab754165668c67cbeec7f0bfee309377884667a->leave($__internal_f56bb7bdbe8d23eecb94f8ff1ab754165668c67cbeec7f0bfee309377884667a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3d3279d44ed67a49e240c86c682232d6afc058f039d5ff02f4a1f34a92e86cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d3279d44ed67a49e240c86c682232d6afc058f039d5ff02f4a1f34a92e86cc->enter($__internal_a3d3279d44ed67a49e240c86c682232d6afc058f039d5ff02f4a1f34a92e86cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c045f715aab59d8dbdb7e8be1aa33f3e1a4fec5088455045bc6728caa04708dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c045f715aab59d8dbdb7e8be1aa33f3e1a4fec5088455045bc6728caa04708dc->enter($__internal_c045f715aab59d8dbdb7e8be1aa33f3e1a4fec5088455045bc6728caa04708dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_c045f715aab59d8dbdb7e8be1aa33f3e1a4fec5088455045bc6728caa04708dc->leave($__internal_c045f715aab59d8dbdb7e8be1aa33f3e1a4fec5088455045bc6728caa04708dc_prof);

        
        $__internal_a3d3279d44ed67a49e240c86c682232d6afc058f039d5ff02f4a1f34a92e86cc->leave($__internal_a3d3279d44ed67a49e240c86c682232d6afc058f039d5ff02f4a1f34a92e86cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
