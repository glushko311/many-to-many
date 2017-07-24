<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4d9253c4a9d009b87062f2de53e4db6067d7df35f2329657faa17511f1d650f0 extends Twig_Template
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
        $__internal_6a0500cf1bf16b6c262f57183843f0ca91a0490e9d5b7e884b5e1059b123d105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0500cf1bf16b6c262f57183843f0ca91a0490e9d5b7e884b5e1059b123d105->enter($__internal_6a0500cf1bf16b6c262f57183843f0ca91a0490e9d5b7e884b5e1059b123d105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_21d31bc36bba494665361f7b985476bd7f01a89ee132f92b85256c35ee5163cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d31bc36bba494665361f7b985476bd7f01a89ee132f92b85256c35ee5163cc->enter($__internal_21d31bc36bba494665361f7b985476bd7f01a89ee132f92b85256c35ee5163cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6a0500cf1bf16b6c262f57183843f0ca91a0490e9d5b7e884b5e1059b123d105->leave($__internal_6a0500cf1bf16b6c262f57183843f0ca91a0490e9d5b7e884b5e1059b123d105_prof);

        
        $__internal_21d31bc36bba494665361f7b985476bd7f01a89ee132f92b85256c35ee5163cc->leave($__internal_21d31bc36bba494665361f7b985476bd7f01a89ee132f92b85256c35ee5163cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
