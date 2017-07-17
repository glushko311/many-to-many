<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_078ed254cddf017d78c221de61bcd7acb7fd61457406bb1a7dc2d56e5142c97b extends Twig_Template
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
        $__internal_0cd94c84cc0d8855c1982c7328ff74b14f8adc58b50ba945f072f033af8f055a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd94c84cc0d8855c1982c7328ff74b14f8adc58b50ba945f072f033af8f055a->enter($__internal_0cd94c84cc0d8855c1982c7328ff74b14f8adc58b50ba945f072f033af8f055a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4e0d5bc82f5e53020f909808a36091d5561484eb5f9edb43ce13afdecffbd7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0d5bc82f5e53020f909808a36091d5561484eb5f9edb43ce13afdecffbd7cf->enter($__internal_4e0d5bc82f5e53020f909808a36091d5561484eb5f9edb43ce13afdecffbd7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cd94c84cc0d8855c1982c7328ff74b14f8adc58b50ba945f072f033af8f055a->leave($__internal_0cd94c84cc0d8855c1982c7328ff74b14f8adc58b50ba945f072f033af8f055a_prof);

        
        $__internal_4e0d5bc82f5e53020f909808a36091d5561484eb5f9edb43ce13afdecffbd7cf->leave($__internal_4e0d5bc82f5e53020f909808a36091d5561484eb5f9edb43ce13afdecffbd7cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_941e63376ce56ee604d4087bb00797bf3d6f59a70ba62620f5d086797c65b0ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941e63376ce56ee604d4087bb00797bf3d6f59a70ba62620f5d086797c65b0ba->enter($__internal_941e63376ce56ee604d4087bb00797bf3d6f59a70ba62620f5d086797c65b0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_14b2354964fec22d60fd54860a4fe57b7ccb547b37149465f0e75ce59f7b3717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b2354964fec22d60fd54860a4fe57b7ccb547b37149465f0e75ce59f7b3717->enter($__internal_14b2354964fec22d60fd54860a4fe57b7ccb547b37149465f0e75ce59f7b3717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_14b2354964fec22d60fd54860a4fe57b7ccb547b37149465f0e75ce59f7b3717->leave($__internal_14b2354964fec22d60fd54860a4fe57b7ccb547b37149465f0e75ce59f7b3717_prof);

        
        $__internal_941e63376ce56ee604d4087bb00797bf3d6f59a70ba62620f5d086797c65b0ba->leave($__internal_941e63376ce56ee604d4087bb00797bf3d6f59a70ba62620f5d086797c65b0ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca364b3f1395d414b359976bf874538a19e0c7e1ea2c7e38c74ed3f9e7e8e133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca364b3f1395d414b359976bf874538a19e0c7e1ea2c7e38c74ed3f9e7e8e133->enter($__internal_ca364b3f1395d414b359976bf874538a19e0c7e1ea2c7e38c74ed3f9e7e8e133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6a5f1b205206f47c3dde1a5b9b6be228ce42a57ad948228e4d0f44486ada66b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5f1b205206f47c3dde1a5b9b6be228ce42a57ad948228e4d0f44486ada66b2->enter($__internal_6a5f1b205206f47c3dde1a5b9b6be228ce42a57ad948228e4d0f44486ada66b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6a5f1b205206f47c3dde1a5b9b6be228ce42a57ad948228e4d0f44486ada66b2->leave($__internal_6a5f1b205206f47c3dde1a5b9b6be228ce42a57ad948228e4d0f44486ada66b2_prof);

        
        $__internal_ca364b3f1395d414b359976bf874538a19e0c7e1ea2c7e38c74ed3f9e7e8e133->leave($__internal_ca364b3f1395d414b359976bf874538a19e0c7e1ea2c7e38c74ed3f9e7e8e133_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3fe87fd7f1313705b9a5227981ab9793c22a39a36d68b4b260e7a788e23192d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fe87fd7f1313705b9a5227981ab9793c22a39a36d68b4b260e7a788e23192d->enter($__internal_d3fe87fd7f1313705b9a5227981ab9793c22a39a36d68b4b260e7a788e23192d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eaa4eabae47b5f2912a4a84e825911692a0ee40b11f73ffba68879279d5f4273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa4eabae47b5f2912a4a84e825911692a0ee40b11f73ffba68879279d5f4273->enter($__internal_eaa4eabae47b5f2912a4a84e825911692a0ee40b11f73ffba68879279d5f4273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eaa4eabae47b5f2912a4a84e825911692a0ee40b11f73ffba68879279d5f4273->leave($__internal_eaa4eabae47b5f2912a4a84e825911692a0ee40b11f73ffba68879279d5f4273_prof);

        
        $__internal_d3fe87fd7f1313705b9a5227981ab9793c22a39a36d68b4b260e7a788e23192d->leave($__internal_d3fe87fd7f1313705b9a5227981ab9793c22a39a36d68b4b260e7a788e23192d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/many2/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
