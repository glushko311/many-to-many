<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_602fdb1f332b2361f7722a63c965430b7174610925a8ae61d2b630cec7454ff6 extends Twig_Template
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
        $__internal_b1144810aae530a65ef621f7164554ada985f84a27b5c0cf64a82105261d5399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1144810aae530a65ef621f7164554ada985f84a27b5c0cf64a82105261d5399->enter($__internal_b1144810aae530a65ef621f7164554ada985f84a27b5c0cf64a82105261d5399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6d59e3e5461d6071d38505e3f2f9ea1c1a7f7697881a34005a34aa5d957c0215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d59e3e5461d6071d38505e3f2f9ea1c1a7f7697881a34005a34aa5d957c0215->enter($__internal_6d59e3e5461d6071d38505e3f2f9ea1c1a7f7697881a34005a34aa5d957c0215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b1144810aae530a65ef621f7164554ada985f84a27b5c0cf64a82105261d5399->leave($__internal_b1144810aae530a65ef621f7164554ada985f84a27b5c0cf64a82105261d5399_prof);

        
        $__internal_6d59e3e5461d6071d38505e3f2f9ea1c1a7f7697881a34005a34aa5d957c0215->leave($__internal_6d59e3e5461d6071d38505e3f2f9ea1c1a7f7697881a34005a34aa5d957c0215_prof);

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
