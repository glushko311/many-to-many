<?php

/* TrackBundle:Track:show_track.html.twig */
class __TwigTemplate_36377403a172f9c77695d81ddaf1566f9c17d35a2b6fc58b70ea8f2a829e26a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TrackBundle:Track:show_track.html.twig", 1);
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
        $__internal_b5cddfaa765fbad5001c28b84c0b43edf55a855b855f1b7cf16a224d39e295a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5cddfaa765fbad5001c28b84c0b43edf55a855b855f1b7cf16a224d39e295a6->enter($__internal_b5cddfaa765fbad5001c28b84c0b43edf55a855b855f1b7cf16a224d39e295a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:show_track.html.twig"));

        $__internal_65201dacf4888b244cb140188849c5b4fd30b871406750d052af544de1ff4fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65201dacf4888b244cb140188849c5b4fd30b871406750d052af544de1ff4fab->enter($__internal_65201dacf4888b244cb140188849c5b4fd30b871406750d052af544de1ff4fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:show_track.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5cddfaa765fbad5001c28b84c0b43edf55a855b855f1b7cf16a224d39e295a6->leave($__internal_b5cddfaa765fbad5001c28b84c0b43edf55a855b855f1b7cf16a224d39e295a6_prof);

        
        $__internal_65201dacf4888b244cb140188849c5b4fd30b871406750d052af544de1ff4fab->leave($__internal_65201dacf4888b244cb140188849c5b4fd30b871406750d052af544de1ff4fab_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_29eedf7897feb119aef4d98aa89f5a49e852b641e70745365f22aeb69dc6dfe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29eedf7897feb119aef4d98aa89f5a49e852b641e70745365f22aeb69dc6dfe3->enter($__internal_29eedf7897feb119aef4d98aa89f5a49e852b641e70745365f22aeb69dc6dfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d49b7fddfe3debf96875b7fd1e4e11dd180cef993d1c13a899d62099ce50e029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49b7fddfe3debf96875b7fd1e4e11dd180cef993d1c13a899d62099ce50e029->enter($__internal_d49b7fddfe3debf96875b7fd1e4e11dd180cef993d1c13a899d62099ce50e029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "track", array()), "html", null, true);
        echo "</h3>
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["track"] ?? $this->getContext($context, "track")));
        echo "
";
        
        $__internal_d49b7fddfe3debf96875b7fd1e4e11dd180cef993d1c13a899d62099ce50e029->leave($__internal_d49b7fddfe3debf96875b7fd1e4e11dd180cef993d1c13a899d62099ce50e029_prof);

        
        $__internal_29eedf7897feb119aef4d98aa89f5a49e852b641e70745365f22aeb69dc6dfe3->leave($__internal_29eedf7897feb119aef4d98aa89f5a49e852b641e70745365f22aeb69dc6dfe3_prof);

    }

    public function getTemplateName()
    {
        return "TrackBundle:Track:show_track.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <h3>{{ track.track }}</h3>
    {{ dump(track) }}
{% endblock %}

", "TrackBundle:Track:show_track.html.twig", "/var/www/html/many-to-many/src/TrackBundle/Resources/views/Track/show_track.html.twig");
    }
}
