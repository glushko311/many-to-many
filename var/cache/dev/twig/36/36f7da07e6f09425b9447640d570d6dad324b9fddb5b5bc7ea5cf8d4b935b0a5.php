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
        $__internal_f066c00ca5a2bcfffa8239f363e89f71f78fdaa13c768e59055f21d7b8e429d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f066c00ca5a2bcfffa8239f363e89f71f78fdaa13c768e59055f21d7b8e429d9->enter($__internal_f066c00ca5a2bcfffa8239f363e89f71f78fdaa13c768e59055f21d7b8e429d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:show_track.html.twig"));

        $__internal_627c1e0ae0f19f79c5acb5ffc93f9e100ea07587016cd654c2ecc766dce9dc5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627c1e0ae0f19f79c5acb5ffc93f9e100ea07587016cd654c2ecc766dce9dc5d->enter($__internal_627c1e0ae0f19f79c5acb5ffc93f9e100ea07587016cd654c2ecc766dce9dc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:show_track.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f066c00ca5a2bcfffa8239f363e89f71f78fdaa13c768e59055f21d7b8e429d9->leave($__internal_f066c00ca5a2bcfffa8239f363e89f71f78fdaa13c768e59055f21d7b8e429d9_prof);

        
        $__internal_627c1e0ae0f19f79c5acb5ffc93f9e100ea07587016cd654c2ecc766dce9dc5d->leave($__internal_627c1e0ae0f19f79c5acb5ffc93f9e100ea07587016cd654c2ecc766dce9dc5d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b7843118f45523fc19ad7a3745f2ebcf5cd3082050e79a81496793499b2400a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7843118f45523fc19ad7a3745f2ebcf5cd3082050e79a81496793499b2400a->enter($__internal_0b7843118f45523fc19ad7a3745f2ebcf5cd3082050e79a81496793499b2400a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a1eefba1281a544de647dedf5b75438f50673d956be18b5a6f6f0bc599d38d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1eefba1281a544de647dedf5b75438f50673d956be18b5a6f6f0bc599d38d0->enter($__internal_8a1eefba1281a544de647dedf5b75438f50673d956be18b5a6f6f0bc599d38d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["track"] ?? $this->getContext($context, "track")));
        echo "

";
        
        $__internal_8a1eefba1281a544de647dedf5b75438f50673d956be18b5a6f6f0bc599d38d0->leave($__internal_8a1eefba1281a544de647dedf5b75438f50673d956be18b5a6f6f0bc599d38d0_prof);

        
        $__internal_0b7843118f45523fc19ad7a3745f2ebcf5cd3082050e79a81496793499b2400a->leave($__internal_0b7843118f45523fc19ad7a3745f2ebcf5cd3082050e79a81496793499b2400a_prof);

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

", "TrackBundle:Track:show_track.html.twig", "/var/www/html/many2/many-to-many/src/TrackBundle/Resources/views/Track/show_track.html.twig");
    }
}
