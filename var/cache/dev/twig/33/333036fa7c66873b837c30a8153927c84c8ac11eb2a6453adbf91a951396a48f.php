<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_ea73b8bc40b78b653f706aedfa55ce7c9647ea4dcbc60dbe6cac4483125bf624 extends Twig_Template
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
        $__internal_cd462ebea1e41c209256b796c23b4f59d2850901501e1c0f8786899c5d78732e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd462ebea1e41c209256b796c23b4f59d2850901501e1c0f8786899c5d78732e->enter($__internal_cd462ebea1e41c209256b796c23b4f59d2850901501e1c0f8786899c5d78732e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_53491a0643f69f0b58fbd36c12bffe2d6acd9abf20575ffb76f381ef92c5e6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53491a0643f69f0b58fbd36c12bffe2d6acd9abf20575ffb76f381ef92c5e6c4->enter($__internal_53491a0643f69f0b58fbd36c12bffe2d6acd9abf20575ffb76f381ef92c5e6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_cd462ebea1e41c209256b796c23b4f59d2850901501e1c0f8786899c5d78732e->leave($__internal_cd462ebea1e41c209256b796c23b4f59d2850901501e1c0f8786899c5d78732e_prof);

        
        $__internal_53491a0643f69f0b58fbd36c12bffe2d6acd9abf20575ffb76f381ef92c5e6c4->leave($__internal_53491a0643f69f0b58fbd36c12bffe2d6acd9abf20575ffb76f381ef92c5e6c4_prof);

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
", "TwigBundle:Exception:traces.xml.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
