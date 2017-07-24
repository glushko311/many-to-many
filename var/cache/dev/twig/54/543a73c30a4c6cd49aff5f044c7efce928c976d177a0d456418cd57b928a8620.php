<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_7fbc8229fdd48ca870c1f62327851f626a831becb17e57e325f04c65c9617629 extends Twig_Template
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
        $__internal_58892a5bc1a75b60812cc53675849e9e8249f667c33db2e3782917f6c3afa0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58892a5bc1a75b60812cc53675849e9e8249f667c33db2e3782917f6c3afa0fc->enter($__internal_58892a5bc1a75b60812cc53675849e9e8249f667c33db2e3782917f6c3afa0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_89add47b85381b2ac46545ff4fa70e140c081883ed28d4d0daba48e9bb1b3b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89add47b85381b2ac46545ff4fa70e140c081883ed28d4d0daba48e9bb1b3b61->enter($__internal_89add47b85381b2ac46545ff4fa70e140c081883ed28d4d0daba48e9bb1b3b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_58892a5bc1a75b60812cc53675849e9e8249f667c33db2e3782917f6c3afa0fc->leave($__internal_58892a5bc1a75b60812cc53675849e9e8249f667c33db2e3782917f6c3afa0fc_prof);

        
        $__internal_89add47b85381b2ac46545ff4fa70e140c081883ed28d4d0daba48e9bb1b3b61->leave($__internal_89add47b85381b2ac46545ff4fa70e140c081883ed28d4d0daba48e9bb1b3b61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
