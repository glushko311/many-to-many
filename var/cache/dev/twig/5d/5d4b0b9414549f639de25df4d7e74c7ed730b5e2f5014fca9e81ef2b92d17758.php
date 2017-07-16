<?php

/* TrackBundle:Track:show_track.html.twig */
class __TwigTemplate_f0340292e6ff4636a56874f53f29b07754a96ff77d49e6efc9adfbb2fa3e36d3 extends Twig_Template
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
        $__internal_b80d9554dff17495c9333e5fbbca868beb0397d62da84ca451805a16e5c20f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80d9554dff17495c9333e5fbbca868beb0397d62da84ca451805a16e5c20f90->enter($__internal_b80d9554dff17495c9333e5fbbca868beb0397d62da84ca451805a16e5c20f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:show_track.html.twig"));

        $__internal_e78686a9d68cb8f9907614c8dc588a5f0b1c581ac978e6de8ab36fcdfca0c423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78686a9d68cb8f9907614c8dc588a5f0b1c581ac978e6de8ab36fcdfca0c423->enter($__internal_e78686a9d68cb8f9907614c8dc588a5f0b1c581ac978e6de8ab36fcdfca0c423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:show_track.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b80d9554dff17495c9333e5fbbca868beb0397d62da84ca451805a16e5c20f90->leave($__internal_b80d9554dff17495c9333e5fbbca868beb0397d62da84ca451805a16e5c20f90_prof);

        
        $__internal_e78686a9d68cb8f9907614c8dc588a5f0b1c581ac978e6de8ab36fcdfca0c423->leave($__internal_e78686a9d68cb8f9907614c8dc588a5f0b1c581ac978e6de8ab36fcdfca0c423_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_031c589ecbe4e2e215ce99e0d78421f997da30ea750c84e6d60625c3913afb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031c589ecbe4e2e215ce99e0d78421f997da30ea750c84e6d60625c3913afb7e->enter($__internal_031c589ecbe4e2e215ce99e0d78421f997da30ea750c84e6d60625c3913afb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24b57e975e5a5c06b0b0dfdaa0402e0c11686190b58e7f318f2da868a1166a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b57e975e5a5c06b0b0dfdaa0402e0c11686190b58e7f318f2da868a1166a21->enter($__internal_24b57e975e5a5c06b0b0dfdaa0402e0c11686190b58e7f318f2da868a1166a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["track"]) ? $context["track"] : $this->getContext($context, "track")));
        echo "

";
        
        $__internal_24b57e975e5a5c06b0b0dfdaa0402e0c11686190b58e7f318f2da868a1166a21->leave($__internal_24b57e975e5a5c06b0b0dfdaa0402e0c11686190b58e7f318f2da868a1166a21_prof);

        
        $__internal_031c589ecbe4e2e215ce99e0d78421f997da30ea750c84e6d60625c3913afb7e->leave($__internal_031c589ecbe4e2e215ce99e0d78421f997da30ea750c84e6d60625c3913afb7e_prof);

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

", "TrackBundle:Track:show_track.html.twig", "C:\\OpenServer\\domains\\many-to-many\\src\\TrackBundle/Resources/views/Track/show_track.html.twig");
    }
}
