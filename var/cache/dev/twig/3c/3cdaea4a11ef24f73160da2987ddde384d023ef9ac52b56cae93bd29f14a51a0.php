<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_36240d46c59f697a97fd7ad0c7c42d7db8160946714d65dbea52ff93455359ab extends Twig_Template
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
        $__internal_9a72546482975c1f1a132b740090a83900a23f448bc1f336b89d2a0d1a61a5ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a72546482975c1f1a132b740090a83900a23f448bc1f336b89d2a0d1a61a5ef->enter($__internal_9a72546482975c1f1a132b740090a83900a23f448bc1f336b89d2a0d1a61a5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c66cc6e07471bc5c3a4bfe8c31cad7022159a1fac2a52acfc2580945bbaf219c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66cc6e07471bc5c3a4bfe8c31cad7022159a1fac2a52acfc2580945bbaf219c->enter($__internal_c66cc6e07471bc5c3a4bfe8c31cad7022159a1fac2a52acfc2580945bbaf219c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_9a72546482975c1f1a132b740090a83900a23f448bc1f336b89d2a0d1a61a5ef->leave($__internal_9a72546482975c1f1a132b740090a83900a23f448bc1f336b89d2a0d1a61a5ef_prof);

        
        $__internal_c66cc6e07471bc5c3a4bfe8c31cad7022159a1fac2a52acfc2580945bbaf219c->leave($__internal_c66cc6e07471bc5c3a4bfe8c31cad7022159a1fac2a52acfc2580945bbaf219c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
