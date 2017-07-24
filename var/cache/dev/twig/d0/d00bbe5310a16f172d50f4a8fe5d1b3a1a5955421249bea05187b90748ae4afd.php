<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e0da8a93ae62e92fc1c003fba582b19df67fc2954c8da28e9378fb88d4f26c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_690d44067d9d491fc8c7e11a3e03e6dd6d5cb05e68511dbc75998f188e08ae12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690d44067d9d491fc8c7e11a3e03e6dd6d5cb05e68511dbc75998f188e08ae12->enter($__internal_690d44067d9d491fc8c7e11a3e03e6dd6d5cb05e68511dbc75998f188e08ae12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a503958cf230614374c6ff7fd53fb9cfa77559b5ae90f11d8e0ed9035103d4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a503958cf230614374c6ff7fd53fb9cfa77559b5ae90f11d8e0ed9035103d4d2->enter($__internal_a503958cf230614374c6ff7fd53fb9cfa77559b5ae90f11d8e0ed9035103d4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_690d44067d9d491fc8c7e11a3e03e6dd6d5cb05e68511dbc75998f188e08ae12->leave($__internal_690d44067d9d491fc8c7e11a3e03e6dd6d5cb05e68511dbc75998f188e08ae12_prof);

        
        $__internal_a503958cf230614374c6ff7fd53fb9cfa77559b5ae90f11d8e0ed9035103d4d2->leave($__internal_a503958cf230614374c6ff7fd53fb9cfa77559b5ae90f11d8e0ed9035103d4d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
