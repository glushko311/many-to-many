<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_ed19a9db9a27c52d88c226e0d0baa8444c18c788c0b29d7272a7863f9bd312d0 extends Twig_Template
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
        $__internal_84f09d3a248f73ec85435db543ff0b7d93a01e8dc6db73ae1a17938d53bd6b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f09d3a248f73ec85435db543ff0b7d93a01e8dc6db73ae1a17938d53bd6b03->enter($__internal_84f09d3a248f73ec85435db543ff0b7d93a01e8dc6db73ae1a17938d53bd6b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_0f5973d2bf9ffb2fdd542a4457586ae0fd55d102cae6ee85b501b80be67fa8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5973d2bf9ffb2fdd542a4457586ae0fd55d102cae6ee85b501b80be67fa8e8->enter($__internal_0f5973d2bf9ffb2fdd542a4457586ae0fd55d102cae6ee85b501b80be67fa8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_84f09d3a248f73ec85435db543ff0b7d93a01e8dc6db73ae1a17938d53bd6b03->leave($__internal_84f09d3a248f73ec85435db543ff0b7d93a01e8dc6db73ae1a17938d53bd6b03_prof);

        
        $__internal_0f5973d2bf9ffb2fdd542a4457586ae0fd55d102cae6ee85b501b80be67fa8e8->leave($__internal_0f5973d2bf9ffb2fdd542a4457586ae0fd55d102cae6ee85b501b80be67fa8e8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
