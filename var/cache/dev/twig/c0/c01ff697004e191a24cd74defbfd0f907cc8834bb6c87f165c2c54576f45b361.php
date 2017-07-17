<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d5c95b8338ff241273e1b0d3c1ba65a478045f9260e9f60dc0e2aa41c8ca0cd6 extends Twig_Template
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
        $__internal_624eb3de645be7594692938b7c7b3259ad05a14cbcc83a446fffa179c392b348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624eb3de645be7594692938b7c7b3259ad05a14cbcc83a446fffa179c392b348->enter($__internal_624eb3de645be7594692938b7c7b3259ad05a14cbcc83a446fffa179c392b348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_06667ad54358ff87609f8e33c68110b32515cbc69a6b7a8e4d2419e1d6499a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06667ad54358ff87609f8e33c68110b32515cbc69a6b7a8e4d2419e1d6499a66->enter($__internal_06667ad54358ff87609f8e33c68110b32515cbc69a6b7a8e4d2419e1d6499a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_624eb3de645be7594692938b7c7b3259ad05a14cbcc83a446fffa179c392b348->leave($__internal_624eb3de645be7594692938b7c7b3259ad05a14cbcc83a446fffa179c392b348_prof);

        
        $__internal_06667ad54358ff87609f8e33c68110b32515cbc69a6b7a8e4d2419e1d6499a66->leave($__internal_06667ad54358ff87609f8e33c68110b32515cbc69a6b7a8e4d2419e1d6499a66_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
