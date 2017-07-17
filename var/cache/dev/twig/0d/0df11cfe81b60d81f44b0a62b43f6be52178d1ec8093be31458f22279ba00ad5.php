<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_2066239b004edc309178a88e6d305655aaebd8382c1a37d287d358e34b1943ef extends Twig_Template
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
        $__internal_02a887e68baacc2a0af2693f64c2d316897bfdb29d888df1c4887826f5be3071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a887e68baacc2a0af2693f64c2d316897bfdb29d888df1c4887826f5be3071->enter($__internal_02a887e68baacc2a0af2693f64c2d316897bfdb29d888df1c4887826f5be3071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_f994de31278d644e4572252c9367e7399468bcad09a971ab716bfe58dd46d789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f994de31278d644e4572252c9367e7399468bcad09a971ab716bfe58dd46d789->enter($__internal_f994de31278d644e4572252c9367e7399468bcad09a971ab716bfe58dd46d789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_02a887e68baacc2a0af2693f64c2d316897bfdb29d888df1c4887826f5be3071->leave($__internal_02a887e68baacc2a0af2693f64c2d316897bfdb29d888df1c4887826f5be3071_prof);

        
        $__internal_f994de31278d644e4572252c9367e7399468bcad09a971ab716bfe58dd46d789->leave($__internal_f994de31278d644e4572252c9367e7399468bcad09a971ab716bfe58dd46d789_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
