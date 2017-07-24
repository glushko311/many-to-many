<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c3e6c982f9a3a251087d635a1b515bc3f63392603fcdba8a4c4b1e28d67dbb9f extends Twig_Template
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
        $__internal_42ebe43efdad7ee425ff883b88dbcab3c0927d1fbe57c235c6fee7ac5f6788b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ebe43efdad7ee425ff883b88dbcab3c0927d1fbe57c235c6fee7ac5f6788b8->enter($__internal_42ebe43efdad7ee425ff883b88dbcab3c0927d1fbe57c235c6fee7ac5f6788b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c3df2937f1c920b6012ef7105dcce30decdcab5d648552bfb9e0878bbc9bc1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3df2937f1c920b6012ef7105dcce30decdcab5d648552bfb9e0878bbc9bc1a9->enter($__internal_c3df2937f1c920b6012ef7105dcce30decdcab5d648552bfb9e0878bbc9bc1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_42ebe43efdad7ee425ff883b88dbcab3c0927d1fbe57c235c6fee7ac5f6788b8->leave($__internal_42ebe43efdad7ee425ff883b88dbcab3c0927d1fbe57c235c6fee7ac5f6788b8_prof);

        
        $__internal_c3df2937f1c920b6012ef7105dcce30decdcab5d648552bfb9e0878bbc9bc1a9->leave($__internal_c3df2937f1c920b6012ef7105dcce30decdcab5d648552bfb9e0878bbc9bc1a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
