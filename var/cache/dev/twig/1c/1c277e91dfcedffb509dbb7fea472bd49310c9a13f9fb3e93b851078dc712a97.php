<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ea18e764903bb9d1a47ad823c663bf0a7f3f85b35d4256c030405b9323c6e46b extends Twig_Template
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
        $__internal_668135ca5a846b10e523e884068717071a697058ac9bfa4c4b52993143d8ea83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668135ca5a846b10e523e884068717071a697058ac9bfa4c4b52993143d8ea83->enter($__internal_668135ca5a846b10e523e884068717071a697058ac9bfa4c4b52993143d8ea83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d1373d4f200bc12314d1b2d27ee8b05cee491834fb0de4490d46ca93d9d9d6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1373d4f200bc12314d1b2d27ee8b05cee491834fb0de4490d46ca93d9d9d6ac->enter($__internal_d1373d4f200bc12314d1b2d27ee8b05cee491834fb0de4490d46ca93d9d9d6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_668135ca5a846b10e523e884068717071a697058ac9bfa4c4b52993143d8ea83->leave($__internal_668135ca5a846b10e523e884068717071a697058ac9bfa4c4b52993143d8ea83_prof);

        
        $__internal_d1373d4f200bc12314d1b2d27ee8b05cee491834fb0de4490d46ca93d9d9d6ac->leave($__internal_d1373d4f200bc12314d1b2d27ee8b05cee491834fb0de4490d46ca93d9d9d6ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
