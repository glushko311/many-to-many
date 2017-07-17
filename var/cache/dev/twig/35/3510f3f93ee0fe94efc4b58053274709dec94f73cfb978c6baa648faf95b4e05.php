<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_99b47bf65430edda4a82739af792599d7dff84f79a745ce2fa6a255345b6dd50 extends Twig_Template
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
        $__internal_2a8241fe6b97f294eaef47daf2546456477baf24abdb13e9edfe7a4169325fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a8241fe6b97f294eaef47daf2546456477baf24abdb13e9edfe7a4169325fb8->enter($__internal_2a8241fe6b97f294eaef47daf2546456477baf24abdb13e9edfe7a4169325fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_24480a04e2000dc73e605dbdb3ea8a371d2dea2e850f1622eb7cf76fb1fb38d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24480a04e2000dc73e605dbdb3ea8a371d2dea2e850f1622eb7cf76fb1fb38d8->enter($__internal_24480a04e2000dc73e605dbdb3ea8a371d2dea2e850f1622eb7cf76fb1fb38d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2a8241fe6b97f294eaef47daf2546456477baf24abdb13e9edfe7a4169325fb8->leave($__internal_2a8241fe6b97f294eaef47daf2546456477baf24abdb13e9edfe7a4169325fb8_prof);

        
        $__internal_24480a04e2000dc73e605dbdb3ea8a371d2dea2e850f1622eb7cf76fb1fb38d8->leave($__internal_24480a04e2000dc73e605dbdb3ea8a371d2dea2e850f1622eb7cf76fb1fb38d8_prof);

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
