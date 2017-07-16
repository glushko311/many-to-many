<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_79020d7d1e854160506f2a846a4725606d9f39a85a6763a81d8b1cd3fc79a402 extends Twig_Template
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
        $__internal_f4096cc15aa9b7ac27ee4251d96ba50868dce4b6132c2755911fa29147c65501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4096cc15aa9b7ac27ee4251d96ba50868dce4b6132c2755911fa29147c65501->enter($__internal_f4096cc15aa9b7ac27ee4251d96ba50868dce4b6132c2755911fa29147c65501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_172d71b7adfb12f3b7f1a1d5408e286d529103e8add4a78a0fbe474cc595691b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172d71b7adfb12f3b7f1a1d5408e286d529103e8add4a78a0fbe474cc595691b->enter($__internal_172d71b7adfb12f3b7f1a1d5408e286d529103e8add4a78a0fbe474cc595691b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f4096cc15aa9b7ac27ee4251d96ba50868dce4b6132c2755911fa29147c65501->leave($__internal_f4096cc15aa9b7ac27ee4251d96ba50868dce4b6132c2755911fa29147c65501_prof);

        
        $__internal_172d71b7adfb12f3b7f1a1d5408e286d529103e8add4a78a0fbe474cc595691b->leave($__internal_172d71b7adfb12f3b7f1a1d5408e286d529103e8add4a78a0fbe474cc595691b_prof);

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
", "TwigBundle:Exception:error.atom.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
