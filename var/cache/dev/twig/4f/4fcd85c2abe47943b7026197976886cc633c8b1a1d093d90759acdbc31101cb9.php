<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_3a6fb9826ed7ba1c110710a324fb145e8e774c14bb046ec941b2f5e7506d88d3 extends Twig_Template
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
        $__internal_4495c3e81ce81d5e5f5052a10af12d7e3291dc7227077a7e1a8c4161fb9cdcee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4495c3e81ce81d5e5f5052a10af12d7e3291dc7227077a7e1a8c4161fb9cdcee->enter($__internal_4495c3e81ce81d5e5f5052a10af12d7e3291dc7227077a7e1a8c4161fb9cdcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_bea757412a579020c1291047027afb473829022a1abf7fdec35cc002ebd8f392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea757412a579020c1291047027afb473829022a1abf7fdec35cc002ebd8f392->enter($__internal_bea757412a579020c1291047027afb473829022a1abf7fdec35cc002ebd8f392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_4495c3e81ce81d5e5f5052a10af12d7e3291dc7227077a7e1a8c4161fb9cdcee->leave($__internal_4495c3e81ce81d5e5f5052a10af12d7e3291dc7227077a7e1a8c4161fb9cdcee_prof);

        
        $__internal_bea757412a579020c1291047027afb473829022a1abf7fdec35cc002ebd8f392->leave($__internal_bea757412a579020c1291047027afb473829022a1abf7fdec35cc002ebd8f392_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
