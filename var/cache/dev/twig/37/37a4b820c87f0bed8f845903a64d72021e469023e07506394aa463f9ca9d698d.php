<?php

/* @Track/Track/show_track.html.twig */
class __TwigTemplate_b04f02c7fb728ed86279a50ca4d74501f53d935f693a8c5ffd4f6937d8503daa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Track/Track/show_track.html.twig", 1);
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
        $__internal_8a7e1069ab8da4842bc44e61ffdd189bafb168b30eaedb2a3283713aabb4b000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7e1069ab8da4842bc44e61ffdd189bafb168b30eaedb2a3283713aabb4b000->enter($__internal_8a7e1069ab8da4842bc44e61ffdd189bafb168b30eaedb2a3283713aabb4b000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Track/Track/show_track.html.twig"));

        $__internal_3312b6cc00a4ebc261d67ae568cdb6dc06138477a81efbeb5e8c354224a0deb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3312b6cc00a4ebc261d67ae568cdb6dc06138477a81efbeb5e8c354224a0deb7->enter($__internal_3312b6cc00a4ebc261d67ae568cdb6dc06138477a81efbeb5e8c354224a0deb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Track/Track/show_track.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a7e1069ab8da4842bc44e61ffdd189bafb168b30eaedb2a3283713aabb4b000->leave($__internal_8a7e1069ab8da4842bc44e61ffdd189bafb168b30eaedb2a3283713aabb4b000_prof);

        
        $__internal_3312b6cc00a4ebc261d67ae568cdb6dc06138477a81efbeb5e8c354224a0deb7->leave($__internal_3312b6cc00a4ebc261d67ae568cdb6dc06138477a81efbeb5e8c354224a0deb7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0de5df23c0f59bcd5ed00598559dca5fe5434108795e74a2168468c453030c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de5df23c0f59bcd5ed00598559dca5fe5434108795e74a2168468c453030c7d->enter($__internal_0de5df23c0f59bcd5ed00598559dca5fe5434108795e74a2168468c453030c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adcc723e74a13c51c2329a93b8b5aac63958860706beff7da3eaa90c1ea295b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adcc723e74a13c51c2329a93b8b5aac63958860706beff7da3eaa90c1ea295b5->enter($__internal_adcc723e74a13c51c2329a93b8b5aac63958860706beff7da3eaa90c1ea295b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["track"]) ? $context["track"] : $this->getContext($context, "track")));
        echo "

";
        
        $__internal_adcc723e74a13c51c2329a93b8b5aac63958860706beff7da3eaa90c1ea295b5->leave($__internal_adcc723e74a13c51c2329a93b8b5aac63958860706beff7da3eaa90c1ea295b5_prof);

        
        $__internal_0de5df23c0f59bcd5ed00598559dca5fe5434108795e74a2168468c453030c7d->leave($__internal_0de5df23c0f59bcd5ed00598559dca5fe5434108795e74a2168468c453030c7d_prof);

    }

    public function getTemplateName()
    {
        return "@Track/Track/show_track.html.twig";
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

", "@Track/Track/show_track.html.twig", "C:\\OpenServer\\domains\\many-to-many\\src\\TrackBundle\\Resources\\views\\Track\\show_track.html.twig");
    }
}
