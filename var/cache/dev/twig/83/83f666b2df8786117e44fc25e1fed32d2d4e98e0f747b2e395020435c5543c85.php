<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_78489aff4d81249a2e9741f399adc78295e9130f11884a738a1ed867e63b9fd7 extends Twig_Template
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
        $__internal_38f5918e078718cabdb2ac5582fd4b868fa77619b6c3700d11a8ef60fbbbe3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f5918e078718cabdb2ac5582fd4b868fa77619b6c3700d11a8ef60fbbbe3e9->enter($__internal_38f5918e078718cabdb2ac5582fd4b868fa77619b6c3700d11a8ef60fbbbe3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_6da7d46d711382f21d17d392295cd68f73cda4dd42ace5e0cb8bae870187a7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da7d46d711382f21d17d392295cd68f73cda4dd42ace5e0cb8bae870187a7dc->enter($__internal_6da7d46d711382f21d17d392295cd68f73cda4dd42ace5e0cb8bae870187a7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_38f5918e078718cabdb2ac5582fd4b868fa77619b6c3700d11a8ef60fbbbe3e9->leave($__internal_38f5918e078718cabdb2ac5582fd4b868fa77619b6c3700d11a8ef60fbbbe3e9_prof);

        
        $__internal_6da7d46d711382f21d17d392295cd68f73cda4dd42ace5e0cb8bae870187a7dc->leave($__internal_6da7d46d711382f21d17d392295cd68f73cda4dd42ace5e0cb8bae870187a7dc_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
