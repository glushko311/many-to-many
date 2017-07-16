<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_aa04b0ce93a7e7ef9fe4bdab608a67a13fb0f1ab82c4653c36c2a13de7d6153c extends Twig_Template
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
        $__internal_293aad176e28b7ab5fb6526e5a48bcaecb282fc90bc3818b4ef200b6600fc000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293aad176e28b7ab5fb6526e5a48bcaecb282fc90bc3818b4ef200b6600fc000->enter($__internal_293aad176e28b7ab5fb6526e5a48bcaecb282fc90bc3818b4ef200b6600fc000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_02c6fe6162469a31ac860447b8b72b3a5f1aaeb318cabee2786ff7137162a3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c6fe6162469a31ac860447b8b72b3a5f1aaeb318cabee2786ff7137162a3af->enter($__internal_02c6fe6162469a31ac860447b8b72b3a5f1aaeb318cabee2786ff7137162a3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_293aad176e28b7ab5fb6526e5a48bcaecb282fc90bc3818b4ef200b6600fc000->leave($__internal_293aad176e28b7ab5fb6526e5a48bcaecb282fc90bc3818b4ef200b6600fc000_prof);

        
        $__internal_02c6fe6162469a31ac860447b8b72b3a5f1aaeb318cabee2786ff7137162a3af->leave($__internal_02c6fe6162469a31ac860447b8b72b3a5f1aaeb318cabee2786ff7137162a3af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
