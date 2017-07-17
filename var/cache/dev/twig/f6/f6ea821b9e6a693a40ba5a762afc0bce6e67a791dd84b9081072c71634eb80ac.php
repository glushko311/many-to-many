<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f9885901270aa5e163cc32c849e6b49ea7e867a3c301ad36c58d076ab9c43d01 extends Twig_Template
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
        $__internal_69f84aa377f4b6316b52b50c48cf63b1ae01594cb90d981172230958028719ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f84aa377f4b6316b52b50c48cf63b1ae01594cb90d981172230958028719ca->enter($__internal_69f84aa377f4b6316b52b50c48cf63b1ae01594cb90d981172230958028719ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_e7b8a2219561ed15c8f112352844de04c93487a2915f1f311bdb5165337ec139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b8a2219561ed15c8f112352844de04c93487a2915f1f311bdb5165337ec139->enter($__internal_e7b8a2219561ed15c8f112352844de04c93487a2915f1f311bdb5165337ec139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_69f84aa377f4b6316b52b50c48cf63b1ae01594cb90d981172230958028719ca->leave($__internal_69f84aa377f4b6316b52b50c48cf63b1ae01594cb90d981172230958028719ca_prof);

        
        $__internal_e7b8a2219561ed15c8f112352844de04c93487a2915f1f311bdb5165337ec139->leave($__internal_e7b8a2219561ed15c8f112352844de04c93487a2915f1f311bdb5165337ec139_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
