<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fb05b2deb105ef1e8be846d8a022b022b33bfcc8ef181c792e8136b9a6be14c6 extends Twig_Template
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
        $__internal_9ac482377acfff6bfb1eb878df6195c8889748a3a371643b2422f0a79575b6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac482377acfff6bfb1eb878df6195c8889748a3a371643b2422f0a79575b6b5->enter($__internal_9ac482377acfff6bfb1eb878df6195c8889748a3a371643b2422f0a79575b6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9c2d8eab24331d0194cecfc9b8cdf5e9db840bf5f58b7618ef03b0f8dae2bf1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2d8eab24331d0194cecfc9b8cdf5e9db840bf5f58b7618ef03b0f8dae2bf1d->enter($__internal_9c2d8eab24331d0194cecfc9b8cdf5e9db840bf5f58b7618ef03b0f8dae2bf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9ac482377acfff6bfb1eb878df6195c8889748a3a371643b2422f0a79575b6b5->leave($__internal_9ac482377acfff6bfb1eb878df6195c8889748a3a371643b2422f0a79575b6b5_prof);

        
        $__internal_9c2d8eab24331d0194cecfc9b8cdf5e9db840bf5f58b7618ef03b0f8dae2bf1d->leave($__internal_9c2d8eab24331d0194cecfc9b8cdf5e9db840bf5f58b7618ef03b0f8dae2bf1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
