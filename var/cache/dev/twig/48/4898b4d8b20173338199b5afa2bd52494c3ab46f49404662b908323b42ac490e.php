<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_26693739b2c38f3b2e59d82887d47ec51421e0d3079600ea8417714b37c5321f extends Twig_Template
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
        $__internal_36aba3d3ecf481371530bef8d6e8a45d2464084a51b5ff8e6b08abcf44b87624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36aba3d3ecf481371530bef8d6e8a45d2464084a51b5ff8e6b08abcf44b87624->enter($__internal_36aba3d3ecf481371530bef8d6e8a45d2464084a51b5ff8e6b08abcf44b87624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_a528481545d153ef973fce97dd67febf4648c977f08022f57d6335792f45e845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a528481545d153ef973fce97dd67febf4648c977f08022f57d6335792f45e845->enter($__internal_a528481545d153ef973fce97dd67febf4648c977f08022f57d6335792f45e845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_36aba3d3ecf481371530bef8d6e8a45d2464084a51b5ff8e6b08abcf44b87624->leave($__internal_36aba3d3ecf481371530bef8d6e8a45d2464084a51b5ff8e6b08abcf44b87624_prof);

        
        $__internal_a528481545d153ef973fce97dd67febf4648c977f08022f57d6335792f45e845->leave($__internal_a528481545d153ef973fce97dd67febf4648c977f08022f57d6335792f45e845_prof);

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
", "TwigBundle:Exception:exception.css.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
