<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_1c6c09f922094c796bcb3d8773a7b1df6033cd500a45ef78732b2d34aaa17583 extends Twig_Template
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
        $__internal_4a9793747bdb352b6b7269a5ef5efe372fb8d55fd5e11f302f53f7938c78edd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a9793747bdb352b6b7269a5ef5efe372fb8d55fd5e11f302f53f7938c78edd0->enter($__internal_4a9793747bdb352b6b7269a5ef5efe372fb8d55fd5e11f302f53f7938c78edd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_45765f9b24bcea932948fc163f2e35a02f31e6d76cb9df01e2d827ee70956de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45765f9b24bcea932948fc163f2e35a02f31e6d76cb9df01e2d827ee70956de8->enter($__internal_45765f9b24bcea932948fc163f2e35a02f31e6d76cb9df01e2d827ee70956de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "class", array()) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "type", array())) . $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute(($context["trace"] ?? null), "file", array(), "any", true, true) && $this->getAttribute(($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute(($context["trace"] ?? $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_4a9793747bdb352b6b7269a5ef5efe372fb8d55fd5e11f302f53f7938c78edd0->leave($__internal_4a9793747bdb352b6b7269a5ef5efe372fb8d55fd5e11f302f53f7938c78edd0_prof);

        
        $__internal_45765f9b24bcea932948fc163f2e35a02f31e6d76cb9df01e2d827ee70956de8->leave($__internal_45765f9b24bcea932948fc163f2e35a02f31e6d76cb9df01e2d827ee70956de8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "/var/www/html/many2/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}