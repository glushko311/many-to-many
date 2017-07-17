<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6c95da31b0e57a619c4ff723f2700fad63b24fcd60462b804bfcfcb4440f592b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_794a7e26f5a8dd2c406d61f4d81a7952e510ec5c3daba007a605971d9faa3d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794a7e26f5a8dd2c406d61f4d81a7952e510ec5c3daba007a605971d9faa3d24->enter($__internal_794a7e26f5a8dd2c406d61f4d81a7952e510ec5c3daba007a605971d9faa3d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b459e785a1d038b11066dd4b1ca58f72f457f85927346e98055a9a36bc9f75d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b459e785a1d038b11066dd4b1ca58f72f457f85927346e98055a9a36bc9f75d8->enter($__internal_b459e785a1d038b11066dd4b1ca58f72f457f85927346e98055a9a36bc9f75d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_794a7e26f5a8dd2c406d61f4d81a7952e510ec5c3daba007a605971d9faa3d24->leave($__internal_794a7e26f5a8dd2c406d61f4d81a7952e510ec5c3daba007a605971d9faa3d24_prof);

        
        $__internal_b459e785a1d038b11066dd4b1ca58f72f457f85927346e98055a9a36bc9f75d8->leave($__internal_b459e785a1d038b11066dd4b1ca58f72f457f85927346e98055a9a36bc9f75d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3ee6cb11bc0db024e9cda557f8e82133c176a82b501b41672546d7b889601fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ee6cb11bc0db024e9cda557f8e82133c176a82b501b41672546d7b889601fc->enter($__internal_e3ee6cb11bc0db024e9cda557f8e82133c176a82b501b41672546d7b889601fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c6b94bb6f64be3e0fadaed09c789720dd779b302bda86b088988181c9aa8cc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b94bb6f64be3e0fadaed09c789720dd779b302bda86b088988181c9aa8cc0b->enter($__internal_c6b94bb6f64be3e0fadaed09c789720dd779b302bda86b088988181c9aa8cc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c6b94bb6f64be3e0fadaed09c789720dd779b302bda86b088988181c9aa8cc0b->leave($__internal_c6b94bb6f64be3e0fadaed09c789720dd779b302bda86b088988181c9aa8cc0b_prof);

        
        $__internal_e3ee6cb11bc0db024e9cda557f8e82133c176a82b501b41672546d7b889601fc->leave($__internal_e3ee6cb11bc0db024e9cda557f8e82133c176a82b501b41672546d7b889601fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/many2/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
