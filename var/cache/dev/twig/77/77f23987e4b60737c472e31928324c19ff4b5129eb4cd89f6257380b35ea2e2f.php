<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c14dacd12d795f1ce3491d651df6d7c2209d3a2f35fe1ecfdf8791a9998acfd4 extends Twig_Template
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
        $__internal_d2f22617e73da3c8113869c7d7020139313e7eb1f122d9f7f847e3d867d3df37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f22617e73da3c8113869c7d7020139313e7eb1f122d9f7f847e3d867d3df37->enter($__internal_d2f22617e73da3c8113869c7d7020139313e7eb1f122d9f7f847e3d867d3df37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_21f5ee3c763891539b01ec47c152a9368153076325a0f0f4cd0733124f41ac5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f5ee3c763891539b01ec47c152a9368153076325a0f0f4cd0733124f41ac5d->enter($__internal_21f5ee3c763891539b01ec47c152a9368153076325a0f0f4cd0733124f41ac5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d2f22617e73da3c8113869c7d7020139313e7eb1f122d9f7f847e3d867d3df37->leave($__internal_d2f22617e73da3c8113869c7d7020139313e7eb1f122d9f7f847e3d867d3df37_prof);

        
        $__internal_21f5ee3c763891539b01ec47c152a9368153076325a0f0f4cd0733124f41ac5d->leave($__internal_21f5ee3c763891539b01ec47c152a9368153076325a0f0f4cd0733124f41ac5d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
