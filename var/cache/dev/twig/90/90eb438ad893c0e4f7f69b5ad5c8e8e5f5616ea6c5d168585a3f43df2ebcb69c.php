<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_511b3d5269449183e9e0472c5960cabe890692e05f6d98e4307e1852e9eed67c extends Twig_Template
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
        $__internal_99c0052d43bd8bd7445ccfc12a9278881f47d78f997d13f9bf46084b2ca6396e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c0052d43bd8bd7445ccfc12a9278881f47d78f997d13f9bf46084b2ca6396e->enter($__internal_99c0052d43bd8bd7445ccfc12a9278881f47d78f997d13f9bf46084b2ca6396e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_237ce601f61d69d112daa20fce1606a0ffc1174c32b089422a6f5b67eb4be5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237ce601f61d69d112daa20fce1606a0ffc1174c32b089422a6f5b67eb4be5ba->enter($__internal_237ce601f61d69d112daa20fce1606a0ffc1174c32b089422a6f5b67eb4be5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_99c0052d43bd8bd7445ccfc12a9278881f47d78f997d13f9bf46084b2ca6396e->leave($__internal_99c0052d43bd8bd7445ccfc12a9278881f47d78f997d13f9bf46084b2ca6396e_prof);

        
        $__internal_237ce601f61d69d112daa20fce1606a0ffc1174c32b089422a6f5b67eb4be5ba->leave($__internal_237ce601f61d69d112daa20fce1606a0ffc1174c32b089422a6f5b67eb4be5ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
