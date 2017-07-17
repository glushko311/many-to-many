<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5c02ef36a7beef7df1cb4e3f2b0635c536331a653140e1838b21d7c9b7d8bd18 extends Twig_Template
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
        $__internal_ef664df9e79849cddcb9e262d955f0a727a7a494c3fda79f79926afc3a8e5cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef664df9e79849cddcb9e262d955f0a727a7a494c3fda79f79926afc3a8e5cba->enter($__internal_ef664df9e79849cddcb9e262d955f0a727a7a494c3fda79f79926afc3a8e5cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2ff8ea8997c490239376537c4dac32e5c78d9a19618e9077f735ca8eafe32415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff8ea8997c490239376537c4dac32e5c78d9a19618e9077f735ca8eafe32415->enter($__internal_2ff8ea8997c490239376537c4dac32e5c78d9a19618e9077f735ca8eafe32415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ef664df9e79849cddcb9e262d955f0a727a7a494c3fda79f79926afc3a8e5cba->leave($__internal_ef664df9e79849cddcb9e262d955f0a727a7a494c3fda79f79926afc3a8e5cba_prof);

        
        $__internal_2ff8ea8997c490239376537c4dac32e5c78d9a19618e9077f735ca8eafe32415->leave($__internal_2ff8ea8997c490239376537c4dac32e5c78d9a19618e9077f735ca8eafe32415_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
