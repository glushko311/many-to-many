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
        $__internal_c560784896b541c231db49553987a544ed72addca9cc73a3fc72bad7992f0dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c560784896b541c231db49553987a544ed72addca9cc73a3fc72bad7992f0dfb->enter($__internal_c560784896b541c231db49553987a544ed72addca9cc73a3fc72bad7992f0dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5d12855aede2dd8340cccdb2062351ccd0a409645c3073158857266000b04dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d12855aede2dd8340cccdb2062351ccd0a409645c3073158857266000b04dc3->enter($__internal_5d12855aede2dd8340cccdb2062351ccd0a409645c3073158857266000b04dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c560784896b541c231db49553987a544ed72addca9cc73a3fc72bad7992f0dfb->leave($__internal_c560784896b541c231db49553987a544ed72addca9cc73a3fc72bad7992f0dfb_prof);

        
        $__internal_5d12855aede2dd8340cccdb2062351ccd0a409645c3073158857266000b04dc3->leave($__internal_5d12855aede2dd8340cccdb2062351ccd0a409645c3073158857266000b04dc3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4900fa25902c37c1886888e296b4363385088f3eb175c021e514a3079389f6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4900fa25902c37c1886888e296b4363385088f3eb175c021e514a3079389f6fc->enter($__internal_4900fa25902c37c1886888e296b4363385088f3eb175c021e514a3079389f6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_58556f541594b2373ee9ec97e3504544a19b982fb1c81fb479bf216384189605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58556f541594b2373ee9ec97e3504544a19b982fb1c81fb479bf216384189605->enter($__internal_58556f541594b2373ee9ec97e3504544a19b982fb1c81fb479bf216384189605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58556f541594b2373ee9ec97e3504544a19b982fb1c81fb479bf216384189605->leave($__internal_58556f541594b2373ee9ec97e3504544a19b982fb1c81fb479bf216384189605_prof);

        
        $__internal_4900fa25902c37c1886888e296b4363385088f3eb175c021e514a3079389f6fc->leave($__internal_4900fa25902c37c1886888e296b4363385088f3eb175c021e514a3079389f6fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bea03b4a045de84cd5051a0730b23135f515f6c0a34de211788138111c181275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea03b4a045de84cd5051a0730b23135f515f6c0a34de211788138111c181275->enter($__internal_bea03b4a045de84cd5051a0730b23135f515f6c0a34de211788138111c181275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_450cb802336ce95b29363e3f0f5c92e8aac4818cd6b563a8c6c4237d4ba0fa2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450cb802336ce95b29363e3f0f5c92e8aac4818cd6b563a8c6c4237d4ba0fa2b->enter($__internal_450cb802336ce95b29363e3f0f5c92e8aac4818cd6b563a8c6c4237d4ba0fa2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_450cb802336ce95b29363e3f0f5c92e8aac4818cd6b563a8c6c4237d4ba0fa2b->leave($__internal_450cb802336ce95b29363e3f0f5c92e8aac4818cd6b563a8c6c4237d4ba0fa2b_prof);

        
        $__internal_bea03b4a045de84cd5051a0730b23135f515f6c0a34de211788138111c181275->leave($__internal_bea03b4a045de84cd5051a0730b23135f515f6c0a34de211788138111c181275_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2685e44bb9a645dc10a0dd506200782bbcd8ca8f41366c9198356affc159dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2685e44bb9a645dc10a0dd506200782bbcd8ca8f41366c9198356affc159dbb->enter($__internal_c2685e44bb9a645dc10a0dd506200782bbcd8ca8f41366c9198356affc159dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_97af1dc878d63959596a63c034f2b46afb99c6e3974153740e220517a22db80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97af1dc878d63959596a63c034f2b46afb99c6e3974153740e220517a22db80f->enter($__internal_97af1dc878d63959596a63c034f2b46afb99c6e3974153740e220517a22db80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_97af1dc878d63959596a63c034f2b46afb99c6e3974153740e220517a22db80f->leave($__internal_97af1dc878d63959596a63c034f2b46afb99c6e3974153740e220517a22db80f_prof);

        
        $__internal_c2685e44bb9a645dc10a0dd506200782bbcd8ca8f41366c9198356affc159dbb->leave($__internal_c2685e44bb9a645dc10a0dd506200782bbcd8ca8f41366c9198356affc159dbb_prof);

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
