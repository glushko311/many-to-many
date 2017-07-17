<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8272ffce31dd88caa245fdfe3eaf007e65e918acc64d52eabcd8593c167b98ed extends Twig_Template
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
        $__internal_867c20c1c905cceb04be1538298224a134f6eb408d5b47d9ce8ac9c6a36f9d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867c20c1c905cceb04be1538298224a134f6eb408d5b47d9ce8ac9c6a36f9d91->enter($__internal_867c20c1c905cceb04be1538298224a134f6eb408d5b47d9ce8ac9c6a36f9d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_aaca173b3b761f415f582a9e5fb390a66585391394ab2782525bc19c885b7c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaca173b3b761f415f582a9e5fb390a66585391394ab2782525bc19c885b7c1c->enter($__internal_aaca173b3b761f415f582a9e5fb390a66585391394ab2782525bc19c885b7c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_867c20c1c905cceb04be1538298224a134f6eb408d5b47d9ce8ac9c6a36f9d91->leave($__internal_867c20c1c905cceb04be1538298224a134f6eb408d5b47d9ce8ac9c6a36f9d91_prof);

        
        $__internal_aaca173b3b761f415f582a9e5fb390a66585391394ab2782525bc19c885b7c1c->leave($__internal_aaca173b3b761f415f582a9e5fb390a66585391394ab2782525bc19c885b7c1c_prof);

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
