<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8212ce8125a76b7e810b0ec6c82ce79c94b293ab65a4ec9779301831f40535c7 extends Twig_Template
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
        $__internal_78cc1e1a78d8a7e1f434c634966983b35aaaaca748ab076a4def8985b3a3aa67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cc1e1a78d8a7e1f434c634966983b35aaaaca748ab076a4def8985b3a3aa67->enter($__internal_78cc1e1a78d8a7e1f434c634966983b35aaaaca748ab076a4def8985b3a3aa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_2719e5b06878e4b70241b39a6d733913de6c02f2af6720740e8410efd986f344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2719e5b06878e4b70241b39a6d733913de6c02f2af6720740e8410efd986f344->enter($__internal_2719e5b06878e4b70241b39a6d733913de6c02f2af6720740e8410efd986f344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_78cc1e1a78d8a7e1f434c634966983b35aaaaca748ab076a4def8985b3a3aa67->leave($__internal_78cc1e1a78d8a7e1f434c634966983b35aaaaca748ab076a4def8985b3a3aa67_prof);

        
        $__internal_2719e5b06878e4b70241b39a6d733913de6c02f2af6720740e8410efd986f344->leave($__internal_2719e5b06878e4b70241b39a6d733913de6c02f2af6720740e8410efd986f344_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
