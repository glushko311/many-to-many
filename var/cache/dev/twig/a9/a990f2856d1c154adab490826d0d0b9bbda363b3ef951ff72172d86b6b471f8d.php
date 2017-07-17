<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1e5b3a58e3b794909cad15608b44cadb1323834c15208f55c37d05345b6898d6 extends Twig_Template
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
        $__internal_d67e5a8b3a1260713363503bd915cede2d7fc24ee76bcdbe913bfac80d94af3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67e5a8b3a1260713363503bd915cede2d7fc24ee76bcdbe913bfac80d94af3b->enter($__internal_d67e5a8b3a1260713363503bd915cede2d7fc24ee76bcdbe913bfac80d94af3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_4d7e3154b9d1b71cc7dc8ae9031a21459ee5d0ff2412d5ce7777d56a1e3b8c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7e3154b9d1b71cc7dc8ae9031a21459ee5d0ff2412d5ce7777d56a1e3b8c7f->enter($__internal_4d7e3154b9d1b71cc7dc8ae9031a21459ee5d0ff2412d5ce7777d56a1e3b8c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d67e5a8b3a1260713363503bd915cede2d7fc24ee76bcdbe913bfac80d94af3b->leave($__internal_d67e5a8b3a1260713363503bd915cede2d7fc24ee76bcdbe913bfac80d94af3b_prof);

        
        $__internal_4d7e3154b9d1b71cc7dc8ae9031a21459ee5d0ff2412d5ce7777d56a1e3b8c7f->leave($__internal_4d7e3154b9d1b71cc7dc8ae9031a21459ee5d0ff2412d5ce7777d56a1e3b8c7f_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
