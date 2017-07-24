<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_caece52f012e1958fadc794ddb83ebd095975671d994c1cd32738e04c62322e0 extends Twig_Template
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
        $__internal_1ad5fccc0bde74c16f340ab383f2fa27677678a075413330f73043d7ba012827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad5fccc0bde74c16f340ab383f2fa27677678a075413330f73043d7ba012827->enter($__internal_1ad5fccc0bde74c16f340ab383f2fa27677678a075413330f73043d7ba012827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_217bc5f40d18e988b71e56394008513fdb033b7206c24e50384dc458e28af1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217bc5f40d18e988b71e56394008513fdb033b7206c24e50384dc458e28af1c0->enter($__internal_217bc5f40d18e988b71e56394008513fdb033b7206c24e50384dc458e28af1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1ad5fccc0bde74c16f340ab383f2fa27677678a075413330f73043d7ba012827->leave($__internal_1ad5fccc0bde74c16f340ab383f2fa27677678a075413330f73043d7ba012827_prof);

        
        $__internal_217bc5f40d18e988b71e56394008513fdb033b7206c24e50384dc458e28af1c0->leave($__internal_217bc5f40d18e988b71e56394008513fdb033b7206c24e50384dc458e28af1c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
