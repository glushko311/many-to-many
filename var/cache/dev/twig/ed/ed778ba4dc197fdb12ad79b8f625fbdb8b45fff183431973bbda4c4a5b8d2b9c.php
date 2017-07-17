<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4e1638ec8dd6ca39e9792802e01bb2c036658e70a6d39729269b046337ed9152 extends Twig_Template
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
        $__internal_892a0346c265af98b5235e2f0436448704cfd1f358ee2761d53eb922192ac840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892a0346c265af98b5235e2f0436448704cfd1f358ee2761d53eb922192ac840->enter($__internal_892a0346c265af98b5235e2f0436448704cfd1f358ee2761d53eb922192ac840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0b6bc6292c43343b5c5b5a75e22598996e7632010acdeb122d6448c1ff6ea8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6bc6292c43343b5c5b5a75e22598996e7632010acdeb122d6448c1ff6ea8ed->enter($__internal_0b6bc6292c43343b5c5b5a75e22598996e7632010acdeb122d6448c1ff6ea8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_892a0346c265af98b5235e2f0436448704cfd1f358ee2761d53eb922192ac840->leave($__internal_892a0346c265af98b5235e2f0436448704cfd1f358ee2761d53eb922192ac840_prof);

        
        $__internal_0b6bc6292c43343b5c5b5a75e22598996e7632010acdeb122d6448c1ff6ea8ed->leave($__internal_0b6bc6292c43343b5c5b5a75e22598996e7632010acdeb122d6448c1ff6ea8ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
