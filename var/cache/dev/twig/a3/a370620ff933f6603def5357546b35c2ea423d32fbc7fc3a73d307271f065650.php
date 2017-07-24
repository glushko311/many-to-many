<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9175390ce46024c37eacece08549f5891b702fc84b63ee2907f6cc4cdd5680fa extends Twig_Template
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
        $__internal_218df8e69b5f26038b6e0f67fa524ac43d907eb8c02c98837c4d97b4854739d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218df8e69b5f26038b6e0f67fa524ac43d907eb8c02c98837c4d97b4854739d0->enter($__internal_218df8e69b5f26038b6e0f67fa524ac43d907eb8c02c98837c4d97b4854739d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4a9a086f1c9c457da1a4969707a73c0ce95a7815a32e15e78c2122a67cd4cfbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9a086f1c9c457da1a4969707a73c0ce95a7815a32e15e78c2122a67cd4cfbd->enter($__internal_4a9a086f1c9c457da1a4969707a73c0ce95a7815a32e15e78c2122a67cd4cfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_218df8e69b5f26038b6e0f67fa524ac43d907eb8c02c98837c4d97b4854739d0->leave($__internal_218df8e69b5f26038b6e0f67fa524ac43d907eb8c02c98837c4d97b4854739d0_prof);

        
        $__internal_4a9a086f1c9c457da1a4969707a73c0ce95a7815a32e15e78c2122a67cd4cfbd->leave($__internal_4a9a086f1c9c457da1a4969707a73c0ce95a7815a32e15e78c2122a67cd4cfbd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d607865d003f2ebd54194aa29a56829311c50d1b408dbad7f157b5646d1ff092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d607865d003f2ebd54194aa29a56829311c50d1b408dbad7f157b5646d1ff092->enter($__internal_d607865d003f2ebd54194aa29a56829311c50d1b408dbad7f157b5646d1ff092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1c76de60b25423526fd32ed0c2815b029f0d4c215efae12544f178dbbda57df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c76de60b25423526fd32ed0c2815b029f0d4c215efae12544f178dbbda57df4->enter($__internal_1c76de60b25423526fd32ed0c2815b029f0d4c215efae12544f178dbbda57df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_1c76de60b25423526fd32ed0c2815b029f0d4c215efae12544f178dbbda57df4->leave($__internal_1c76de60b25423526fd32ed0c2815b029f0d4c215efae12544f178dbbda57df4_prof);

        
        $__internal_d607865d003f2ebd54194aa29a56829311c50d1b408dbad7f157b5646d1ff092->leave($__internal_d607865d003f2ebd54194aa29a56829311c50d1b408dbad7f157b5646d1ff092_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
