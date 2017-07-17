<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_9564433d914fe782ec451755ad7294ffa2fef59e8d27632deb4cc16151b0f983 extends Twig_Template
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
        $__internal_adf701a5ee51a6d32a21c9eb5e304a8f4495314a66a115f0a87be35eb7bbff70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf701a5ee51a6d32a21c9eb5e304a8f4495314a66a115f0a87be35eb7bbff70->enter($__internal_adf701a5ee51a6d32a21c9eb5e304a8f4495314a66a115f0a87be35eb7bbff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_b6dd25a09e192d50974fef2d362bf38ea34abe612ecd5b21e0d9fb9e297a753d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dd25a09e192d50974fef2d362bf38ea34abe612ecd5b21e0d9fb9e297a753d->enter($__internal_b6dd25a09e192d50974fef2d362bf38ea34abe612ecd5b21e0d9fb9e297a753d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_adf701a5ee51a6d32a21c9eb5e304a8f4495314a66a115f0a87be35eb7bbff70->leave($__internal_adf701a5ee51a6d32a21c9eb5e304a8f4495314a66a115f0a87be35eb7bbff70_prof);

        
        $__internal_b6dd25a09e192d50974fef2d362bf38ea34abe612ecd5b21e0d9fb9e297a753d->leave($__internal_b6dd25a09e192d50974fef2d362bf38ea34abe612ecd5b21e0d9fb9e297a753d_prof);

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
