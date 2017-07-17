<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_10a606dcaa575060ca29be43c6a4e7e25ce8e4aaf093ea634eb1acdb8b5a2f94 extends Twig_Template
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
        $__internal_38245e2367f99f5a4f5dd29869a9977259037355e8b2a0454f0ee43eec349b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38245e2367f99f5a4f5dd29869a9977259037355e8b2a0454f0ee43eec349b7e->enter($__internal_38245e2367f99f5a4f5dd29869a9977259037355e8b2a0454f0ee43eec349b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_091a311e4a7495656554ff871af5f7d6a148bbb47a4921f8eef4d67d0c408483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091a311e4a7495656554ff871af5f7d6a148bbb47a4921f8eef4d67d0c408483->enter($__internal_091a311e4a7495656554ff871af5f7d6a148bbb47a4921f8eef4d67d0c408483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_38245e2367f99f5a4f5dd29869a9977259037355e8b2a0454f0ee43eec349b7e->leave($__internal_38245e2367f99f5a4f5dd29869a9977259037355e8b2a0454f0ee43eec349b7e_prof);

        
        $__internal_091a311e4a7495656554ff871af5f7d6a148bbb47a4921f8eef4d67d0c408483->leave($__internal_091a311e4a7495656554ff871af5f7d6a148bbb47a4921f8eef4d67d0c408483_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
