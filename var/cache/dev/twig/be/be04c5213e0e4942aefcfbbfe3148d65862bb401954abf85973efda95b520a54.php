<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c009938afcf06bc67a2938392d54e5cd8b8058fb64a135549e68bbf3c0511645 extends Twig_Template
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
        $__internal_0a9ceeff259cdfc9bdad3873b130eab1bf44e1fd998b1f64a956d28e5bb316dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9ceeff259cdfc9bdad3873b130eab1bf44e1fd998b1f64a956d28e5bb316dd->enter($__internal_0a9ceeff259cdfc9bdad3873b130eab1bf44e1fd998b1f64a956d28e5bb316dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c87051c7aa821ed0a0171a60205df9eacf30f66c23f4cbe5d3f104afef1f00a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87051c7aa821ed0a0171a60205df9eacf30f66c23f4cbe5d3f104afef1f00a9->enter($__internal_c87051c7aa821ed0a0171a60205df9eacf30f66c23f4cbe5d3f104afef1f00a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a9ceeff259cdfc9bdad3873b130eab1bf44e1fd998b1f64a956d28e5bb316dd->leave($__internal_0a9ceeff259cdfc9bdad3873b130eab1bf44e1fd998b1f64a956d28e5bb316dd_prof);

        
        $__internal_c87051c7aa821ed0a0171a60205df9eacf30f66c23f4cbe5d3f104afef1f00a9->leave($__internal_c87051c7aa821ed0a0171a60205df9eacf30f66c23f4cbe5d3f104afef1f00a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f69f7668bbce3599583e1156a458901f47a7b4f63db92dd8b73510b6c8d73af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f69f7668bbce3599583e1156a458901f47a7b4f63db92dd8b73510b6c8d73af->enter($__internal_7f69f7668bbce3599583e1156a458901f47a7b4f63db92dd8b73510b6c8d73af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_527344a4338be311ff8d39f7b62b35cc1ee01b85dd27395b506a572c4c5e94bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527344a4338be311ff8d39f7b62b35cc1ee01b85dd27395b506a572c4c5e94bf->enter($__internal_527344a4338be311ff8d39f7b62b35cc1ee01b85dd27395b506a572c4c5e94bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_527344a4338be311ff8d39f7b62b35cc1ee01b85dd27395b506a572c4c5e94bf->leave($__internal_527344a4338be311ff8d39f7b62b35cc1ee01b85dd27395b506a572c4c5e94bf_prof);

        
        $__internal_7f69f7668bbce3599583e1156a458901f47a7b4f63db92dd8b73510b6c8d73af->leave($__internal_7f69f7668bbce3599583e1156a458901f47a7b4f63db92dd8b73510b6c8d73af_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de48f4357c678caa0f52aededcfeed1fec58ab18ceae1e436dc1afb716ce9eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de48f4357c678caa0f52aededcfeed1fec58ab18ceae1e436dc1afb716ce9eb8->enter($__internal_de48f4357c678caa0f52aededcfeed1fec58ab18ceae1e436dc1afb716ce9eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_829033451ab8a57cd4a4a584caf97f7816df2edbc60456ebbd2cbabfe3bdf5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829033451ab8a57cd4a4a584caf97f7816df2edbc60456ebbd2cbabfe3bdf5ac->enter($__internal_829033451ab8a57cd4a4a584caf97f7816df2edbc60456ebbd2cbabfe3bdf5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_829033451ab8a57cd4a4a584caf97f7816df2edbc60456ebbd2cbabfe3bdf5ac->leave($__internal_829033451ab8a57cd4a4a584caf97f7816df2edbc60456ebbd2cbabfe3bdf5ac_prof);

        
        $__internal_de48f4357c678caa0f52aededcfeed1fec58ab18ceae1e436dc1afb716ce9eb8->leave($__internal_de48f4357c678caa0f52aededcfeed1fec58ab18ceae1e436dc1afb716ce9eb8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a85856936b441fe3377d62937710d22c5fdefd591565ebcd0d31dcab9eb4e9c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85856936b441fe3377d62937710d22c5fdefd591565ebcd0d31dcab9eb4e9c2->enter($__internal_a85856936b441fe3377d62937710d22c5fdefd591565ebcd0d31dcab9eb4e9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2e6c023e12ffb5c86d9d25d6742c6a8596017dffe5db2365f2b540cd7b3a84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e6c023e12ffb5c86d9d25d6742c6a8596017dffe5db2365f2b540cd7b3a84f->enter($__internal_d2e6c023e12ffb5c86d9d25d6742c6a8596017dffe5db2365f2b540cd7b3a84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d2e6c023e12ffb5c86d9d25d6742c6a8596017dffe5db2365f2b540cd7b3a84f->leave($__internal_d2e6c023e12ffb5c86d9d25d6742c6a8596017dffe5db2365f2b540cd7b3a84f_prof);

        
        $__internal_a85856936b441fe3377d62937710d22c5fdefd591565ebcd0d31dcab9eb4e9c2->leave($__internal_a85856936b441fe3377d62937710d22c5fdefd591565ebcd0d31dcab9eb4e9c2_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
