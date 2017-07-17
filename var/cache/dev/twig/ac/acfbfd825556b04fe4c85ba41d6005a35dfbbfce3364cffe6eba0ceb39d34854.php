<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_40631d9d49b681f41e28ab943196b749057b7a41408248a36e0f3f141456187b extends Twig_Template
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
        $__internal_963384d3cd3725bca5725cec7735207b654d3191b16797df89d98b3a77c47db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963384d3cd3725bca5725cec7735207b654d3191b16797df89d98b3a77c47db6->enter($__internal_963384d3cd3725bca5725cec7735207b654d3191b16797df89d98b3a77c47db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c3c4d9661f83ceb8232d37d4b170fc12b19580e6c6f4fb0d23d65e3fc1ef6717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c4d9661f83ceb8232d37d4b170fc12b19580e6c6f4fb0d23d65e3fc1ef6717->enter($__internal_c3c4d9661f83ceb8232d37d4b170fc12b19580e6c6f4fb0d23d65e3fc1ef6717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_963384d3cd3725bca5725cec7735207b654d3191b16797df89d98b3a77c47db6->leave($__internal_963384d3cd3725bca5725cec7735207b654d3191b16797df89d98b3a77c47db6_prof);

        
        $__internal_c3c4d9661f83ceb8232d37d4b170fc12b19580e6c6f4fb0d23d65e3fc1ef6717->leave($__internal_c3c4d9661f83ceb8232d37d4b170fc12b19580e6c6f4fb0d23d65e3fc1ef6717_prof);

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
