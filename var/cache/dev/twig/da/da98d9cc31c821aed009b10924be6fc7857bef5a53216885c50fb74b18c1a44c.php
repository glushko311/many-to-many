<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7e5cfce7538818f1f2d893663495a27a1765e5290ad2a355c7f6dfbb06506a64 extends Twig_Template
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
        $__internal_519f1c1ca4e9e7b8874510226cd43fc6b36a7b20b5babfafa9ac7d71b5276c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519f1c1ca4e9e7b8874510226cd43fc6b36a7b20b5babfafa9ac7d71b5276c90->enter($__internal_519f1c1ca4e9e7b8874510226cd43fc6b36a7b20b5babfafa9ac7d71b5276c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_bc76b5492436fd182e3d3504f0e570a373da42ed8e8b403fd53b9b47dcb136f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc76b5492436fd182e3d3504f0e570a373da42ed8e8b403fd53b9b47dcb136f7->enter($__internal_bc76b5492436fd182e3d3504f0e570a373da42ed8e8b403fd53b9b47dcb136f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_519f1c1ca4e9e7b8874510226cd43fc6b36a7b20b5babfafa9ac7d71b5276c90->leave($__internal_519f1c1ca4e9e7b8874510226cd43fc6b36a7b20b5babfafa9ac7d71b5276c90_prof);

        
        $__internal_bc76b5492436fd182e3d3504f0e570a373da42ed8e8b403fd53b9b47dcb136f7->leave($__internal_bc76b5492436fd182e3d3504f0e570a373da42ed8e8b403fd53b9b47dcb136f7_prof);

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
", "TwigBundle:Exception:error.json.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
