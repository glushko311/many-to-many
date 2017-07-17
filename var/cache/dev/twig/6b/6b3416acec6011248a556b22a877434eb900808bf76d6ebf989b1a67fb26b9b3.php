<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_21fedabfb2752bd9c2c41fbf26cd85b6022da5a9885d379c074c6c2dedf6a531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0a802b08a2e57732ced606e6a6b875fdb47f73cb68b5045465fb2a01184476cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a802b08a2e57732ced606e6a6b875fdb47f73cb68b5045465fb2a01184476cd->enter($__internal_0a802b08a2e57732ced606e6a6b875fdb47f73cb68b5045465fb2a01184476cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9754b293e6f442d08b7fe392fca5f6ce14b4d2cefdf81b0077ce551544333dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9754b293e6f442d08b7fe392fca5f6ce14b4d2cefdf81b0077ce551544333dc2->enter($__internal_9754b293e6f442d08b7fe392fca5f6ce14b4d2cefdf81b0077ce551544333dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a802b08a2e57732ced606e6a6b875fdb47f73cb68b5045465fb2a01184476cd->leave($__internal_0a802b08a2e57732ced606e6a6b875fdb47f73cb68b5045465fb2a01184476cd_prof);

        
        $__internal_9754b293e6f442d08b7fe392fca5f6ce14b4d2cefdf81b0077ce551544333dc2->leave($__internal_9754b293e6f442d08b7fe392fca5f6ce14b4d2cefdf81b0077ce551544333dc2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61db299f670d3a291f7f4d3535a8e7b6c5f1b8d34ba39bcb4123a62651af23a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61db299f670d3a291f7f4d3535a8e7b6c5f1b8d34ba39bcb4123a62651af23a7->enter($__internal_61db299f670d3a291f7f4d3535a8e7b6c5f1b8d34ba39bcb4123a62651af23a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7cbb970c7c79d85aab3ec8658e5e94f661930789b894d39d629f00a2a980b926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbb970c7c79d85aab3ec8658e5e94f661930789b894d39d629f00a2a980b926->enter($__internal_7cbb970c7c79d85aab3ec8658e5e94f661930789b894d39d629f00a2a980b926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7cbb970c7c79d85aab3ec8658e5e94f661930789b894d39d629f00a2a980b926->leave($__internal_7cbb970c7c79d85aab3ec8658e5e94f661930789b894d39d629f00a2a980b926_prof);

        
        $__internal_61db299f670d3a291f7f4d3535a8e7b6c5f1b8d34ba39bcb4123a62651af23a7->leave($__internal_61db299f670d3a291f7f4d3535a8e7b6c5f1b8d34ba39bcb4123a62651af23a7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e65b131fb5cc1ffc7a89fc8d2b1d18818cf937546670aa633f84c5e10af7b849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e65b131fb5cc1ffc7a89fc8d2b1d18818cf937546670aa633f84c5e10af7b849->enter($__internal_e65b131fb5cc1ffc7a89fc8d2b1d18818cf937546670aa633f84c5e10af7b849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_603113cddfa4d55a6f862cdd262376b22586e631520a69f721975b1e7cbe3a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603113cddfa4d55a6f862cdd262376b22586e631520a69f721975b1e7cbe3a3b->enter($__internal_603113cddfa4d55a6f862cdd262376b22586e631520a69f721975b1e7cbe3a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_603113cddfa4d55a6f862cdd262376b22586e631520a69f721975b1e7cbe3a3b->leave($__internal_603113cddfa4d55a6f862cdd262376b22586e631520a69f721975b1e7cbe3a3b_prof);

        
        $__internal_e65b131fb5cc1ffc7a89fc8d2b1d18818cf937546670aa633f84c5e10af7b849->leave($__internal_e65b131fb5cc1ffc7a89fc8d2b1d18818cf937546670aa633f84c5e10af7b849_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e23e2befc1c9623a47ba5939658c76e00d363753cdb09cff7cae1d2d0e5c1470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23e2befc1c9623a47ba5939658c76e00d363753cdb09cff7cae1d2d0e5c1470->enter($__internal_e23e2befc1c9623a47ba5939658c76e00d363753cdb09cff7cae1d2d0e5c1470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e3b3dba296145acd3a00a9f576fdfaf8fd6330d6df052ae6b1f1c49297ce8585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b3dba296145acd3a00a9f576fdfaf8fd6330d6df052ae6b1f1c49297ce8585->enter($__internal_e3b3dba296145acd3a00a9f576fdfaf8fd6330d6df052ae6b1f1c49297ce8585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e3b3dba296145acd3a00a9f576fdfaf8fd6330d6df052ae6b1f1c49297ce8585->leave($__internal_e3b3dba296145acd3a00a9f576fdfaf8fd6330d6df052ae6b1f1c49297ce8585_prof);

        
        $__internal_e23e2befc1c9623a47ba5939658c76e00d363753cdb09cff7cae1d2d0e5c1470->leave($__internal_e23e2befc1c9623a47ba5939658c76e00d363753cdb09cff7cae1d2d0e5c1470_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
