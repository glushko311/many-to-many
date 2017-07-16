<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_45243fdd1cc689572f3580121d1abfe42756fc20b61895204b951d4f53a78499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_f604ddb1920b0b9881ee4f4720912eddab374d6223b95790e605dd0be489e76f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f604ddb1920b0b9881ee4f4720912eddab374d6223b95790e605dd0be489e76f->enter($__internal_f604ddb1920b0b9881ee4f4720912eddab374d6223b95790e605dd0be489e76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_dd23b06ab6ae2e8db412640eb730b1b1846a67bd4891e84c88ba279729eb64b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd23b06ab6ae2e8db412640eb730b1b1846a67bd4891e84c88ba279729eb64b3->enter($__internal_dd23b06ab6ae2e8db412640eb730b1b1846a67bd4891e84c88ba279729eb64b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f604ddb1920b0b9881ee4f4720912eddab374d6223b95790e605dd0be489e76f->leave($__internal_f604ddb1920b0b9881ee4f4720912eddab374d6223b95790e605dd0be489e76f_prof);

        
        $__internal_dd23b06ab6ae2e8db412640eb730b1b1846a67bd4891e84c88ba279729eb64b3->leave($__internal_dd23b06ab6ae2e8db412640eb730b1b1846a67bd4891e84c88ba279729eb64b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd7582540af03d1dabc4a0f5a9006ce1588c1fe98a417d2aa3dce262f9277713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7582540af03d1dabc4a0f5a9006ce1588c1fe98a417d2aa3dce262f9277713->enter($__internal_bd7582540af03d1dabc4a0f5a9006ce1588c1fe98a417d2aa3dce262f9277713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9c5bfe911abf28c14fefd2bc86789162f081d2ced2bfcb156808e7dbca89499a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5bfe911abf28c14fefd2bc86789162f081d2ced2bfcb156808e7dbca89499a->enter($__internal_9c5bfe911abf28c14fefd2bc86789162f081d2ced2bfcb156808e7dbca89499a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9c5bfe911abf28c14fefd2bc86789162f081d2ced2bfcb156808e7dbca89499a->leave($__internal_9c5bfe911abf28c14fefd2bc86789162f081d2ced2bfcb156808e7dbca89499a_prof);

        
        $__internal_bd7582540af03d1dabc4a0f5a9006ce1588c1fe98a417d2aa3dce262f9277713->leave($__internal_bd7582540af03d1dabc4a0f5a9006ce1588c1fe98a417d2aa3dce262f9277713_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfa0f46fbedd4390483cadf481b8771d75c875aee5e5ab44103461d43910d507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa0f46fbedd4390483cadf481b8771d75c875aee5e5ab44103461d43910d507->enter($__internal_dfa0f46fbedd4390483cadf481b8771d75c875aee5e5ab44103461d43910d507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4fd368bfbb4ffa29d8b0292aecc5618330100924d6173b24b9402a1ddc79b26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd368bfbb4ffa29d8b0292aecc5618330100924d6173b24b9402a1ddc79b26f->enter($__internal_4fd368bfbb4ffa29d8b0292aecc5618330100924d6173b24b9402a1ddc79b26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4fd368bfbb4ffa29d8b0292aecc5618330100924d6173b24b9402a1ddc79b26f->leave($__internal_4fd368bfbb4ffa29d8b0292aecc5618330100924d6173b24b9402a1ddc79b26f_prof);

        
        $__internal_dfa0f46fbedd4390483cadf481b8771d75c875aee5e5ab44103461d43910d507->leave($__internal_dfa0f46fbedd4390483cadf481b8771d75c875aee5e5ab44103461d43910d507_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b207888eb7603e1417d48201edb458b1e84d11e72520a375b19727dc6a1db0de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b207888eb7603e1417d48201edb458b1e84d11e72520a375b19727dc6a1db0de->enter($__internal_b207888eb7603e1417d48201edb458b1e84d11e72520a375b19727dc6a1db0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cddd10e6d09d275ce94a5c0e5a75703fe24948015d8e3b843f53f067d6876365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cddd10e6d09d275ce94a5c0e5a75703fe24948015d8e3b843f53f067d6876365->enter($__internal_cddd10e6d09d275ce94a5c0e5a75703fe24948015d8e3b843f53f067d6876365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cddd10e6d09d275ce94a5c0e5a75703fe24948015d8e3b843f53f067d6876365->leave($__internal_cddd10e6d09d275ce94a5c0e5a75703fe24948015d8e3b843f53f067d6876365_prof);

        
        $__internal_b207888eb7603e1417d48201edb458b1e84d11e72520a375b19727dc6a1db0de->leave($__internal_b207888eb7603e1417d48201edb458b1e84d11e72520a375b19727dc6a1db0de_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
