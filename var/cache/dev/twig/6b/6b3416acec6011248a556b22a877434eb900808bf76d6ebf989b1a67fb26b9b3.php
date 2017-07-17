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
        $__internal_0e2401103492b30a732870b1762b001b1f4e7d6e6574d518e80ec82d9fdf79f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2401103492b30a732870b1762b001b1f4e7d6e6574d518e80ec82d9fdf79f0->enter($__internal_0e2401103492b30a732870b1762b001b1f4e7d6e6574d518e80ec82d9fdf79f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5625424cd8a024559e85d57c84b5fc8b69346c470d866f4612a0b9431d6bc200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5625424cd8a024559e85d57c84b5fc8b69346c470d866f4612a0b9431d6bc200->enter($__internal_5625424cd8a024559e85d57c84b5fc8b69346c470d866f4612a0b9431d6bc200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e2401103492b30a732870b1762b001b1f4e7d6e6574d518e80ec82d9fdf79f0->leave($__internal_0e2401103492b30a732870b1762b001b1f4e7d6e6574d518e80ec82d9fdf79f0_prof);

        
        $__internal_5625424cd8a024559e85d57c84b5fc8b69346c470d866f4612a0b9431d6bc200->leave($__internal_5625424cd8a024559e85d57c84b5fc8b69346c470d866f4612a0b9431d6bc200_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37619f95df18ae73bdf492a79405cd2d147c79d5e9f240e766e1a44d6c652d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37619f95df18ae73bdf492a79405cd2d147c79d5e9f240e766e1a44d6c652d48->enter($__internal_37619f95df18ae73bdf492a79405cd2d147c79d5e9f240e766e1a44d6c652d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3c9b522b1476d44c2b601c3cf1412e1d45aaddfece468e77ebbc57d9fce0fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c9b522b1476d44c2b601c3cf1412e1d45aaddfece468e77ebbc57d9fce0fc9->enter($__internal_d3c9b522b1476d44c2b601c3cf1412e1d45aaddfece468e77ebbc57d9fce0fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d3c9b522b1476d44c2b601c3cf1412e1d45aaddfece468e77ebbc57d9fce0fc9->leave($__internal_d3c9b522b1476d44c2b601c3cf1412e1d45aaddfece468e77ebbc57d9fce0fc9_prof);

        
        $__internal_37619f95df18ae73bdf492a79405cd2d147c79d5e9f240e766e1a44d6c652d48->leave($__internal_37619f95df18ae73bdf492a79405cd2d147c79d5e9f240e766e1a44d6c652d48_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b3a06a225703d43a729add2598c85f3dd05bb30ffca3075ec12d82ef2b7441e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3a06a225703d43a729add2598c85f3dd05bb30ffca3075ec12d82ef2b7441e->enter($__internal_0b3a06a225703d43a729add2598c85f3dd05bb30ffca3075ec12d82ef2b7441e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_78821fcc797229a0e849e54663dc192af48bef46a07cdd890c70c3140bd1509c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78821fcc797229a0e849e54663dc192af48bef46a07cdd890c70c3140bd1509c->enter($__internal_78821fcc797229a0e849e54663dc192af48bef46a07cdd890c70c3140bd1509c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_78821fcc797229a0e849e54663dc192af48bef46a07cdd890c70c3140bd1509c->leave($__internal_78821fcc797229a0e849e54663dc192af48bef46a07cdd890c70c3140bd1509c_prof);

        
        $__internal_0b3a06a225703d43a729add2598c85f3dd05bb30ffca3075ec12d82ef2b7441e->leave($__internal_0b3a06a225703d43a729add2598c85f3dd05bb30ffca3075ec12d82ef2b7441e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c859db3c70d67cf21c4d1b2f1f3276e95d5486ce61aa4b26884d94ef25c47338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c859db3c70d67cf21c4d1b2f1f3276e95d5486ce61aa4b26884d94ef25c47338->enter($__internal_c859db3c70d67cf21c4d1b2f1f3276e95d5486ce61aa4b26884d94ef25c47338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bf550e44048dd78998ce3f4abdc48bb452784a6982db9f155b8417449883f69f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf550e44048dd78998ce3f4abdc48bb452784a6982db9f155b8417449883f69f->enter($__internal_bf550e44048dd78998ce3f4abdc48bb452784a6982db9f155b8417449883f69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bf550e44048dd78998ce3f4abdc48bb452784a6982db9f155b8417449883f69f->leave($__internal_bf550e44048dd78998ce3f4abdc48bb452784a6982db9f155b8417449883f69f_prof);

        
        $__internal_c859db3c70d67cf21c4d1b2f1f3276e95d5486ce61aa4b26884d94ef25c47338->leave($__internal_c859db3c70d67cf21c4d1b2f1f3276e95d5486ce61aa4b26884d94ef25c47338_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/many2/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
