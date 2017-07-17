<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2eed936553e46d4f6f4bfa9770f85249a23826259401105908a34c2ea3a239bc extends Twig_Template
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
        $__internal_0ad1e4aae5d41213391b832a57bf1a74c9bf85b4ee1dfa4d6f8a5cca7d98fdd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad1e4aae5d41213391b832a57bf1a74c9bf85b4ee1dfa4d6f8a5cca7d98fdd3->enter($__internal_0ad1e4aae5d41213391b832a57bf1a74c9bf85b4ee1dfa4d6f8a5cca7d98fdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e71920ed60f95a12482ddf048558e56fab3dd975e634a476d9b3a06898df9aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71920ed60f95a12482ddf048558e56fab3dd975e634a476d9b3a06898df9aad->enter($__internal_e71920ed60f95a12482ddf048558e56fab3dd975e634a476d9b3a06898df9aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0ad1e4aae5d41213391b832a57bf1a74c9bf85b4ee1dfa4d6f8a5cca7d98fdd3->leave($__internal_0ad1e4aae5d41213391b832a57bf1a74c9bf85b4ee1dfa4d6f8a5cca7d98fdd3_prof);

        
        $__internal_e71920ed60f95a12482ddf048558e56fab3dd975e634a476d9b3a06898df9aad->leave($__internal_e71920ed60f95a12482ddf048558e56fab3dd975e634a476d9b3a06898df9aad_prof);

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
", "TwigBundle:Exception:exception.js.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
