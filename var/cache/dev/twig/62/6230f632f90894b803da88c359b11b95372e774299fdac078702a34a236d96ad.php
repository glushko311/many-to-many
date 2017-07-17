<?php

/* TrackBundle:Track:load_track.html.twig */
class __TwigTemplate_9e680d23954979a3aeda7c2c83c3628f17ab5f1d700f55428a084ec19057efeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TrackBundle:Track:load_track.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30a801d7a965f8a5d814c507ff0bf0fee3882938c47a19668a2f81fc95d18e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a801d7a965f8a5d814c507ff0bf0fee3882938c47a19668a2f81fc95d18e48->enter($__internal_30a801d7a965f8a5d814c507ff0bf0fee3882938c47a19668a2f81fc95d18e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:load_track.html.twig"));

        $__internal_2856570cbafd0fa33ff6edfd0d3e935f410942a253ac222772237d7b688ddb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2856570cbafd0fa33ff6edfd0d3e935f410942a253ac222772237d7b688ddb67->enter($__internal_2856570cbafd0fa33ff6edfd0d3e935f410942a253ac222772237d7b688ddb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:load_track.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a801d7a965f8a5d814c507ff0bf0fee3882938c47a19668a2f81fc95d18e48->leave($__internal_30a801d7a965f8a5d814c507ff0bf0fee3882938c47a19668a2f81fc95d18e48_prof);

        
        $__internal_2856570cbafd0fa33ff6edfd0d3e935f410942a253ac222772237d7b688ddb67->leave($__internal_2856570cbafd0fa33ff6edfd0d3e935f410942a253ac222772237d7b688ddb67_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a03e0a8c8ebc9810df7b6215e096baacfb87bb4ac8cc4f4f7826b64432720aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03e0a8c8ebc9810df7b6215e096baacfb87bb4ac8cc4f4f7826b64432720aae->enter($__internal_a03e0a8c8ebc9810df7b6215e096baacfb87bb4ac8cc4f4f7826b64432720aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2447a54970580ad0997d9c87034b94dadf7f912e28029d7f098c4faa871e28fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2447a54970580ad0997d9c87034b94dadf7f912e28029d7f098c4faa871e28fc->enter($__internal_2447a54970580ad0997d9c87034b94dadf7f912e28029d7f098c4faa871e28fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <style type=\"text/css\">
        form{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:space-between;
        }
    </style>

    <form action=\"\" method=\"post\">
        <h2>Создание нового трека</h2>
        <label for=\"track\">Нитка маршрута</label>
        <textarea name=\"track\" id=\"textarea-track-load-195\" cols=\"30\" rows=\"10\"></textarea>
        <button type=\"submit\">Создать новый трек</button>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</h3>
    </form>

";
        
        $__internal_2447a54970580ad0997d9c87034b94dadf7f912e28029d7f098c4faa871e28fc->leave($__internal_2447a54970580ad0997d9c87034b94dadf7f912e28029d7f098c4faa871e28fc_prof);

        
        $__internal_a03e0a8c8ebc9810df7b6215e096baacfb87bb4ac8cc4f4f7826b64432720aae->leave($__internal_a03e0a8c8ebc9810df7b6215e096baacfb87bb4ac8cc4f4f7826b64432720aae_prof);

    }

    public function getTemplateName()
    {
        return "TrackBundle:Track:load_track.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body%}
    <style type=\"text/css\">
        form{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:space-between;
        }
    </style>

    <form action=\"\" method=\"post\">
        <h2>Создание нового трека</h2>
        <label for=\"track\">Нитка маршрута</label>
        <textarea name=\"track\" id=\"textarea-track-load-195\" cols=\"30\" rows=\"10\"></textarea>
        <button type=\"submit\">Создать новый трек</button>
        <h3>{{ message }}</h3>
    </form>

{% endblock %}

", "TrackBundle:Track:load_track.html.twig", "/var/www/html/many-to-many/src/TrackBundle/Resources/views/Track/load_track.html.twig");
    }
}
