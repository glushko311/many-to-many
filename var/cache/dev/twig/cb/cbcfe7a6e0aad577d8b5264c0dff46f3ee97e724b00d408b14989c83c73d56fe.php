<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_92b8012cd5b825d9660df846912a196bc6fca853c9fca9204f4831cfc5f49add extends Twig_Template
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
        $__internal_e6ef2f392a802b9658e479286d3eada2d4ecea66474c884c2fb13fe921b88eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ef2f392a802b9658e479286d3eada2d4ecea66474c884c2fb13fe921b88eaf->enter($__internal_e6ef2f392a802b9658e479286d3eada2d4ecea66474c884c2fb13fe921b88eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ed194296ae47d0d4630bcd0cc4a640aa734c25e9f885f76c6616bd0ed8ad8ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed194296ae47d0d4630bcd0cc4a640aa734c25e9f885f76c6616bd0ed8ad8ede->enter($__internal_ed194296ae47d0d4630bcd0cc4a640aa734c25e9f885f76c6616bd0ed8ad8ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e6ef2f392a802b9658e479286d3eada2d4ecea66474c884c2fb13fe921b88eaf->leave($__internal_e6ef2f392a802b9658e479286d3eada2d4ecea66474c884c2fb13fe921b88eaf_prof);

        
        $__internal_ed194296ae47d0d4630bcd0cc4a640aa734c25e9f885f76c6616bd0ed8ad8ede->leave($__internal_ed194296ae47d0d4630bcd0cc4a640aa734c25e9f885f76c6616bd0ed8ad8ede_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
