<?php

/* TrackBundle:Track:load_track.html.twig */
class __TwigTemplate_1fdea6f3ca4e746e7a2f3ec2ed4e353544aac641a796fccef274e509f23d1eee extends Twig_Template
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
        $__internal_a449f030ec8bd2ee6d27f365ed1efe28556d5f3c4d0f888f0e886d5a3bd607d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a449f030ec8bd2ee6d27f365ed1efe28556d5f3c4d0f888f0e886d5a3bd607d8->enter($__internal_a449f030ec8bd2ee6d27f365ed1efe28556d5f3c4d0f888f0e886d5a3bd607d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:load_track.html.twig"));

        $__internal_cd1aefd7081b32cd87ec5102ef85e6be0e8057feba0ab6f495694083fecef8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1aefd7081b32cd87ec5102ef85e6be0e8057feba0ab6f495694083fecef8ba->enter($__internal_cd1aefd7081b32cd87ec5102ef85e6be0e8057feba0ab6f495694083fecef8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:load_track.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a449f030ec8bd2ee6d27f365ed1efe28556d5f3c4d0f888f0e886d5a3bd607d8->leave($__internal_a449f030ec8bd2ee6d27f365ed1efe28556d5f3c4d0f888f0e886d5a3bd607d8_prof);

        
        $__internal_cd1aefd7081b32cd87ec5102ef85e6be0e8057feba0ab6f495694083fecef8ba->leave($__internal_cd1aefd7081b32cd87ec5102ef85e6be0e8057feba0ab6f495694083fecef8ba_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d78f9a2de0b5d60cfc5f993347c3c7f86753b8174a0ce8994bfdf9ec6d93b436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78f9a2de0b5d60cfc5f993347c3c7f86753b8174a0ce8994bfdf9ec6d93b436->enter($__internal_d78f9a2de0b5d60cfc5f993347c3c7f86753b8174a0ce8994bfdf9ec6d93b436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5740ff3b2c548e8f586205ede9c7cd16129a0e816b32a34afa29a2bb2c2471a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5740ff3b2c548e8f586205ede9c7cd16129a0e816b32a34afa29a2bb2c2471a4->enter($__internal_5740ff3b2c548e8f586205ede9c7cd16129a0e816b32a34afa29a2bb2c2471a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5740ff3b2c548e8f586205ede9c7cd16129a0e816b32a34afa29a2bb2c2471a4->leave($__internal_5740ff3b2c548e8f586205ede9c7cd16129a0e816b32a34afa29a2bb2c2471a4_prof);

        
        $__internal_d78f9a2de0b5d60cfc5f993347c3c7f86753b8174a0ce8994bfdf9ec6d93b436->leave($__internal_d78f9a2de0b5d60cfc5f993347c3c7f86753b8174a0ce8994bfdf9ec6d93b436_prof);

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
