<?php

/* TrackBundle:Track:show_track.html.twig */
class __TwigTemplate_42f7c2d2c5b8f7c7933add595e967d7ad68a810b1d6ad9b7d599e5131b56c87a extends Twig_Template
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
        $__internal_c85e56a3440782121f09eac0a9466b77542b0260f5c263c76772d2e770810b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85e56a3440782121f09eac0a9466b77542b0260f5c263c76772d2e770810b5d->enter($__internal_c85e56a3440782121f09eac0a9466b77542b0260f5c263c76772d2e770810b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:show_track.html.twig"));

        $__internal_61408a08ccf208dd6fc089a7bfab3fdc53f5e26d873ea534beb8c1becddf46e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61408a08ccf208dd6fc089a7bfab3fdc53f5e26d873ea534beb8c1becddf46e2->enter($__internal_61408a08ccf208dd6fc089a7bfab3fdc53f5e26d873ea534beb8c1becddf46e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:show_track.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c85e56a3440782121f09eac0a9466b77542b0260f5c263c76772d2e770810b5d->leave($__internal_c85e56a3440782121f09eac0a9466b77542b0260f5c263c76772d2e770810b5d_prof);

        
        $__internal_61408a08ccf208dd6fc089a7bfab3fdc53f5e26d873ea534beb8c1becddf46e2->leave($__internal_61408a08ccf208dd6fc089a7bfab3fdc53f5e26d873ea534beb8c1becddf46e2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_68cf5bcbcca7a42b17b18788ffb312ab05053da29f7abe8f0bfc4a1d2397ea63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68cf5bcbcca7a42b17b18788ffb312ab05053da29f7abe8f0bfc4a1d2397ea63->enter($__internal_68cf5bcbcca7a42b17b18788ffb312ab05053da29f7abe8f0bfc4a1d2397ea63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c2355edb933e1388f20804da3e0c655a7a399d00a1d156181696bdb0b0321e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2355edb933e1388f20804da3e0c655a7a399d00a1d156181696bdb0b0321e7->enter($__internal_2c2355edb933e1388f20804da3e0c655a7a399d00a1d156181696bdb0b0321e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["track"] ?? $this->getContext($context, "track")));
        echo "

";
        
        $__internal_2c2355edb933e1388f20804da3e0c655a7a399d00a1d156181696bdb0b0321e7->leave($__internal_2c2355edb933e1388f20804da3e0c655a7a399d00a1d156181696bdb0b0321e7_prof);

        
        $__internal_68cf5bcbcca7a42b17b18788ffb312ab05053da29f7abe8f0bfc4a1d2397ea63->leave($__internal_68cf5bcbcca7a42b17b18788ffb312ab05053da29f7abe8f0bfc4a1d2397ea63_prof);

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
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
{{ dump(track) }}

{% endblock %}

", "TrackBundle:Track:show_track.html.twig", "/var/www/html/many-to-many/src/TrackBundle/Resources/views/Track/show_track.html.twig");
    }
}
