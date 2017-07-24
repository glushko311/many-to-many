<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c7b92f64d99cf4a2a4f1dca18ba99f2375c6a784200f829a571edb1b1651b96b extends Twig_Template
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
        $__internal_880b8800378f20091ded9bc69e6357699c90924ec83d9670a596207dfd306daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880b8800378f20091ded9bc69e6357699c90924ec83d9670a596207dfd306daa->enter($__internal_880b8800378f20091ded9bc69e6357699c90924ec83d9670a596207dfd306daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_98d016869a150dc62b52e1632dfdf710a7c41015659e220c31b9a3b2e06dd8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d016869a150dc62b52e1632dfdf710a7c41015659e220c31b9a3b2e06dd8c3->enter($__internal_98d016869a150dc62b52e1632dfdf710a7c41015659e220c31b9a3b2e06dd8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_880b8800378f20091ded9bc69e6357699c90924ec83d9670a596207dfd306daa->leave($__internal_880b8800378f20091ded9bc69e6357699c90924ec83d9670a596207dfd306daa_prof);

        
        $__internal_98d016869a150dc62b52e1632dfdf710a7c41015659e220c31b9a3b2e06dd8c3->leave($__internal_98d016869a150dc62b52e1632dfdf710a7c41015659e220c31b9a3b2e06dd8c3_prof);

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
