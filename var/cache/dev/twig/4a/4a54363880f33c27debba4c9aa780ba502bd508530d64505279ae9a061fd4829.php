<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3a8589908d689f55c7850e96ea7ef207141238130da2b5ec70bebd91db1d0a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bbb2537e319e3e0311a5adeb6665c91b07be2fb33e73190382153eaed134803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bbb2537e319e3e0311a5adeb6665c91b07be2fb33e73190382153eaed134803->enter($__internal_0bbb2537e319e3e0311a5adeb6665c91b07be2fb33e73190382153eaed134803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c623eb3b125f3dc7154e80d563d3f1320440b6989ec96973210f5efe7f6a8d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c623eb3b125f3dc7154e80d563d3f1320440b6989ec96973210f5efe7f6a8d81->enter($__internal_c623eb3b125f3dc7154e80d563d3f1320440b6989ec96973210f5efe7f6a8d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bbb2537e319e3e0311a5adeb6665c91b07be2fb33e73190382153eaed134803->leave($__internal_0bbb2537e319e3e0311a5adeb6665c91b07be2fb33e73190382153eaed134803_prof);

        
        $__internal_c623eb3b125f3dc7154e80d563d3f1320440b6989ec96973210f5efe7f6a8d81->leave($__internal_c623eb3b125f3dc7154e80d563d3f1320440b6989ec96973210f5efe7f6a8d81_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a8bd047feab430f7b2108fda899bc5262915c6c20eb0713fc8c9c5930377ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8bd047feab430f7b2108fda899bc5262915c6c20eb0713fc8c9c5930377ecf->enter($__internal_0a8bd047feab430f7b2108fda899bc5262915c6c20eb0713fc8c9c5930377ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_154186aea4243dced55a53741db976340daf1345eaadd8cdcbf2678c50f6183a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154186aea4243dced55a53741db976340daf1345eaadd8cdcbf2678c50f6183a->enter($__internal_154186aea4243dced55a53741db976340daf1345eaadd8cdcbf2678c50f6183a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_154186aea4243dced55a53741db976340daf1345eaadd8cdcbf2678c50f6183a->leave($__internal_154186aea4243dced55a53741db976340daf1345eaadd8cdcbf2678c50f6183a_prof);

        
        $__internal_0a8bd047feab430f7b2108fda899bc5262915c6c20eb0713fc8c9c5930377ecf->leave($__internal_0a8bd047feab430f7b2108fda899bc5262915c6c20eb0713fc8c9c5930377ecf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7b98d9b4eaffe6b3adf1cc7b47ab3eca361f98c6007af72065eb27c9da6ff29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b98d9b4eaffe6b3adf1cc7b47ab3eca361f98c6007af72065eb27c9da6ff29->enter($__internal_a7b98d9b4eaffe6b3adf1cc7b47ab3eca361f98c6007af72065eb27c9da6ff29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_41195381c0b6b411780db64fc0e37b180d284f7d42112f060f8f70ece475cd4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41195381c0b6b411780db64fc0e37b180d284f7d42112f060f8f70ece475cd4e->enter($__internal_41195381c0b6b411780db64fc0e37b180d284f7d42112f060f8f70ece475cd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41195381c0b6b411780db64fc0e37b180d284f7d42112f060f8f70ece475cd4e->leave($__internal_41195381c0b6b411780db64fc0e37b180d284f7d42112f060f8f70ece475cd4e_prof);

        
        $__internal_a7b98d9b4eaffe6b3adf1cc7b47ab3eca361f98c6007af72065eb27c9da6ff29->leave($__internal_a7b98d9b4eaffe6b3adf1cc7b47ab3eca361f98c6007af72065eb27c9da6ff29_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_360c2dafa4095273ba17e197f835be9c3125cbc05d08f9aa56efc6c6899a4af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360c2dafa4095273ba17e197f835be9c3125cbc05d08f9aa56efc6c6899a4af0->enter($__internal_360c2dafa4095273ba17e197f835be9c3125cbc05d08f9aa56efc6c6899a4af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a181e3645f4b7ef53d99f135e17af193ac6675a7834fa67d673f8b99d9bd5f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a181e3645f4b7ef53d99f135e17af193ac6675a7834fa67d673f8b99d9bd5f5d->enter($__internal_a181e3645f4b7ef53d99f135e17af193ac6675a7834fa67d673f8b99d9bd5f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a181e3645f4b7ef53d99f135e17af193ac6675a7834fa67d673f8b99d9bd5f5d->leave($__internal_a181e3645f4b7ef53d99f135e17af193ac6675a7834fa67d673f8b99d9bd5f5d_prof);

        
        $__internal_360c2dafa4095273ba17e197f835be9c3125cbc05d08f9aa56efc6c6899a4af0->leave($__internal_360c2dafa4095273ba17e197f835be9c3125cbc05d08f9aa56efc6c6899a4af0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
