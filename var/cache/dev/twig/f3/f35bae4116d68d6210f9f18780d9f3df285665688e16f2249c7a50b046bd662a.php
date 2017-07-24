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
        $__internal_b3f1b87e09e65afa986b30cc6903b90cdb7e3080d5da17b7cf8b4fa9169d9c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f1b87e09e65afa986b30cc6903b90cdb7e3080d5da17b7cf8b4fa9169d9c40->enter($__internal_b3f1b87e09e65afa986b30cc6903b90cdb7e3080d5da17b7cf8b4fa9169d9c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:show_track.html.twig"));

        $__internal_b1221f3dce14d86616278229f351f57b0630e93718e58e4a73dc55612dc4d5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1221f3dce14d86616278229f351f57b0630e93718e58e4a73dc55612dc4d5ab->enter($__internal_b1221f3dce14d86616278229f351f57b0630e93718e58e4a73dc55612dc4d5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:show_track.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3f1b87e09e65afa986b30cc6903b90cdb7e3080d5da17b7cf8b4fa9169d9c40->leave($__internal_b3f1b87e09e65afa986b30cc6903b90cdb7e3080d5da17b7cf8b4fa9169d9c40_prof);

        
        $__internal_b1221f3dce14d86616278229f351f57b0630e93718e58e4a73dc55612dc4d5ab->leave($__internal_b1221f3dce14d86616278229f351f57b0630e93718e58e4a73dc55612dc4d5ab_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac844b268f50a944e5a9b359c61ff4b1c54933dae6797913a9b09836e49cce5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac844b268f50a944e5a9b359c61ff4b1c54933dae6797913a9b09836e49cce5c->enter($__internal_ac844b268f50a944e5a9b359c61ff4b1c54933dae6797913a9b09836e49cce5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf24d759ad4411713c052a3b3ccfb274629c6521738d89b10a2469c4c76e1574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf24d759ad4411713c052a3b3ccfb274629c6521738d89b10a2469c4c76e1574->enter($__internal_bf24d759ad4411713c052a3b3ccfb274629c6521738d89b10a2469c4c76e1574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["track"] ?? $this->getContext($context, "track")));
        echo "

";
        
        $__internal_bf24d759ad4411713c052a3b3ccfb274629c6521738d89b10a2469c4c76e1574->leave($__internal_bf24d759ad4411713c052a3b3ccfb274629c6521738d89b10a2469c4c76e1574_prof);

        
        $__internal_ac844b268f50a944e5a9b359c61ff4b1c54933dae6797913a9b09836e49cce5c->leave($__internal_ac844b268f50a944e5a9b359c61ff4b1c54933dae6797913a9b09836e49cce5c_prof);

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
