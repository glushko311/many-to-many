<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0920480bce2627ecd94a394abf3aaa1f6c65e33cafdf6a6f6aa2a2466968148c extends Twig_Template
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
        $__internal_b0ebef66154cd67c5bb3592adf0638263cd4b8bf033f30f39dff3366cfc70085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ebef66154cd67c5bb3592adf0638263cd4b8bf033f30f39dff3366cfc70085->enter($__internal_b0ebef66154cd67c5bb3592adf0638263cd4b8bf033f30f39dff3366cfc70085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_577f9657620a74c5f49ac7b7f3688bf8f59a236673e1d71328e9a9dd9b5684af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577f9657620a74c5f49ac7b7f3688bf8f59a236673e1d71328e9a9dd9b5684af->enter($__internal_577f9657620a74c5f49ac7b7f3688bf8f59a236673e1d71328e9a9dd9b5684af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0ebef66154cd67c5bb3592adf0638263cd4b8bf033f30f39dff3366cfc70085->leave($__internal_b0ebef66154cd67c5bb3592adf0638263cd4b8bf033f30f39dff3366cfc70085_prof);

        
        $__internal_577f9657620a74c5f49ac7b7f3688bf8f59a236673e1d71328e9a9dd9b5684af->leave($__internal_577f9657620a74c5f49ac7b7f3688bf8f59a236673e1d71328e9a9dd9b5684af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e1eff35653f33d9bda29df999fce02fb4fffd7ccd19e62f1cfc131190e9f24a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1eff35653f33d9bda29df999fce02fb4fffd7ccd19e62f1cfc131190e9f24a->enter($__internal_6e1eff35653f33d9bda29df999fce02fb4fffd7ccd19e62f1cfc131190e9f24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cc719b745dfb77f7cdd4e28dad504ebbf7e5c9dcf8d44ae67139c1d42ab7d813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc719b745dfb77f7cdd4e28dad504ebbf7e5c9dcf8d44ae67139c1d42ab7d813->enter($__internal_cc719b745dfb77f7cdd4e28dad504ebbf7e5c9dcf8d44ae67139c1d42ab7d813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc719b745dfb77f7cdd4e28dad504ebbf7e5c9dcf8d44ae67139c1d42ab7d813->leave($__internal_cc719b745dfb77f7cdd4e28dad504ebbf7e5c9dcf8d44ae67139c1d42ab7d813_prof);

        
        $__internal_6e1eff35653f33d9bda29df999fce02fb4fffd7ccd19e62f1cfc131190e9f24a->leave($__internal_6e1eff35653f33d9bda29df999fce02fb4fffd7ccd19e62f1cfc131190e9f24a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7068a3b4ea79e8a3a6ae731f4c9b6e8bef3f2b2162106513838dc99ee9932d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7068a3b4ea79e8a3a6ae731f4c9b6e8bef3f2b2162106513838dc99ee9932d61->enter($__internal_7068a3b4ea79e8a3a6ae731f4c9b6e8bef3f2b2162106513838dc99ee9932d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eed2a9dd0523a870b647aba8da15b26d6c3b0f68752c0fca891ecb744a84b6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed2a9dd0523a870b647aba8da15b26d6c3b0f68752c0fca891ecb744a84b6a4->enter($__internal_eed2a9dd0523a870b647aba8da15b26d6c3b0f68752c0fca891ecb744a84b6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eed2a9dd0523a870b647aba8da15b26d6c3b0f68752c0fca891ecb744a84b6a4->leave($__internal_eed2a9dd0523a870b647aba8da15b26d6c3b0f68752c0fca891ecb744a84b6a4_prof);

        
        $__internal_7068a3b4ea79e8a3a6ae731f4c9b6e8bef3f2b2162106513838dc99ee9932d61->leave($__internal_7068a3b4ea79e8a3a6ae731f4c9b6e8bef3f2b2162106513838dc99ee9932d61_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79589e9bdbd1f1a190fbaeb5c85e18a06fa0fb1eb2afb9b7da31eed3bc185a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79589e9bdbd1f1a190fbaeb5c85e18a06fa0fb1eb2afb9b7da31eed3bc185a4e->enter($__internal_79589e9bdbd1f1a190fbaeb5c85e18a06fa0fb1eb2afb9b7da31eed3bc185a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a29db683b57309e3057e061b152e6bfbe34c12c0f0ad53494ba0abe2c1435490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29db683b57309e3057e061b152e6bfbe34c12c0f0ad53494ba0abe2c1435490->enter($__internal_a29db683b57309e3057e061b152e6bfbe34c12c0f0ad53494ba0abe2c1435490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a29db683b57309e3057e061b152e6bfbe34c12c0f0ad53494ba0abe2c1435490->leave($__internal_a29db683b57309e3057e061b152e6bfbe34c12c0f0ad53494ba0abe2c1435490_prof);

        
        $__internal_79589e9bdbd1f1a190fbaeb5c85e18a06fa0fb1eb2afb9b7da31eed3bc185a4e->leave($__internal_79589e9bdbd1f1a190fbaeb5c85e18a06fa0fb1eb2afb9b7da31eed3bc185a4e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
