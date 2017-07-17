<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_90e2448aff1aa35e9ef944d1881b6ae323b992990d36805cda6a6cff7a72d2e5 extends Twig_Template
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
        $__internal_eab812421d0a9f5410e0b6da0d2fb532551849cf3ecd6bff1787e9534b599cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab812421d0a9f5410e0b6da0d2fb532551849cf3ecd6bff1787e9534b599cdd->enter($__internal_eab812421d0a9f5410e0b6da0d2fb532551849cf3ecd6bff1787e9534b599cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_955310944c6cba0c5f3c57af1cb48e77bee0c514e5be82268b62283177736441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955310944c6cba0c5f3c57af1cb48e77bee0c514e5be82268b62283177736441->enter($__internal_955310944c6cba0c5f3c57af1cb48e77bee0c514e5be82268b62283177736441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_eab812421d0a9f5410e0b6da0d2fb532551849cf3ecd6bff1787e9534b599cdd->leave($__internal_eab812421d0a9f5410e0b6da0d2fb532551849cf3ecd6bff1787e9534b599cdd_prof);

        
        $__internal_955310944c6cba0c5f3c57af1cb48e77bee0c514e5be82268b62283177736441->leave($__internal_955310944c6cba0c5f3c57af1cb48e77bee0c514e5be82268b62283177736441_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
