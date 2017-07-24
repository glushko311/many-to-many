<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_684ff3e604fd4817dc06ab16c7f09f666342511e3cc88a38c824773df5342af0 extends Twig_Template
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
        $__internal_f736c84987362d0073cd8c4481c8654826fb55ed17ba28902f2caa078945d9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f736c84987362d0073cd8c4481c8654826fb55ed17ba28902f2caa078945d9e4->enter($__internal_f736c84987362d0073cd8c4481c8654826fb55ed17ba28902f2caa078945d9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9bea1519eed75f1a98ced2c40b90a112f3614fb9c50ccd933324d73e828c544e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bea1519eed75f1a98ced2c40b90a112f3614fb9c50ccd933324d73e828c544e->enter($__internal_9bea1519eed75f1a98ced2c40b90a112f3614fb9c50ccd933324d73e828c544e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f736c84987362d0073cd8c4481c8654826fb55ed17ba28902f2caa078945d9e4->leave($__internal_f736c84987362d0073cd8c4481c8654826fb55ed17ba28902f2caa078945d9e4_prof);

        
        $__internal_9bea1519eed75f1a98ced2c40b90a112f3614fb9c50ccd933324d73e828c544e->leave($__internal_9bea1519eed75f1a98ced2c40b90a112f3614fb9c50ccd933324d73e828c544e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8cf96154e400c9b03b5be2ae208944d2e155bdd5c6b38feada276d88b7bbb82e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf96154e400c9b03b5be2ae208944d2e155bdd5c6b38feada276d88b7bbb82e->enter($__internal_8cf96154e400c9b03b5be2ae208944d2e155bdd5c6b38feada276d88b7bbb82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ca431bb0321527fa878132350968ddad23f4a023981666d69582d018705e0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca431bb0321527fa878132350968ddad23f4a023981666d69582d018705e0a9->enter($__internal_5ca431bb0321527fa878132350968ddad23f4a023981666d69582d018705e0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5ca431bb0321527fa878132350968ddad23f4a023981666d69582d018705e0a9->leave($__internal_5ca431bb0321527fa878132350968ddad23f4a023981666d69582d018705e0a9_prof);

        
        $__internal_8cf96154e400c9b03b5be2ae208944d2e155bdd5c6b38feada276d88b7bbb82e->leave($__internal_8cf96154e400c9b03b5be2ae208944d2e155bdd5c6b38feada276d88b7bbb82e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a27eae03bad71c45735231420196a13f56fe7150b653f964c41e3a891874fba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27eae03bad71c45735231420196a13f56fe7150b653f964c41e3a891874fba8->enter($__internal_a27eae03bad71c45735231420196a13f56fe7150b653f964c41e3a891874fba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5fdf2dba19b7cc885525246a47d7575cf9cec761e10a51b2c4cec300040e5a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdf2dba19b7cc885525246a47d7575cf9cec761e10a51b2c4cec300040e5a2c->enter($__internal_5fdf2dba19b7cc885525246a47d7575cf9cec761e10a51b2c4cec300040e5a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5fdf2dba19b7cc885525246a47d7575cf9cec761e10a51b2c4cec300040e5a2c->leave($__internal_5fdf2dba19b7cc885525246a47d7575cf9cec761e10a51b2c4cec300040e5a2c_prof);

        
        $__internal_a27eae03bad71c45735231420196a13f56fe7150b653f964c41e3a891874fba8->leave($__internal_a27eae03bad71c45735231420196a13f56fe7150b653f964c41e3a891874fba8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_325cf1dc52a3745cee3cbd72e9d464e06c4c88111093ff2b42a62c810d4382da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325cf1dc52a3745cee3cbd72e9d464e06c4c88111093ff2b42a62c810d4382da->enter($__internal_325cf1dc52a3745cee3cbd72e9d464e06c4c88111093ff2b42a62c810d4382da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc0dc75d5b6f85a3180ec43d1bb5069ab129d16f0650ed426e69f6bd532d237d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0dc75d5b6f85a3180ec43d1bb5069ab129d16f0650ed426e69f6bd532d237d->enter($__internal_bc0dc75d5b6f85a3180ec43d1bb5069ab129d16f0650ed426e69f6bd532d237d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bc0dc75d5b6f85a3180ec43d1bb5069ab129d16f0650ed426e69f6bd532d237d->leave($__internal_bc0dc75d5b6f85a3180ec43d1bb5069ab129d16f0650ed426e69f6bd532d237d_prof);

        
        $__internal_325cf1dc52a3745cee3cbd72e9d464e06c4c88111093ff2b42a62c810d4382da->leave($__internal_325cf1dc52a3745cee3cbd72e9d464e06c4c88111093ff2b42a62c810d4382da_prof);

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
