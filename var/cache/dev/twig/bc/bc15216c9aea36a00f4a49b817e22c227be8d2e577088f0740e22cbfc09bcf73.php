<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_635326142a42e883562383e760776314c19c140fe1dc2b733da637cc685d4f57 extends Twig_Template
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
        $__internal_d9d562e376cb5d78ffb4185b2d105e834fa359c3afee23b3aaf60bb895e3d8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d562e376cb5d78ffb4185b2d105e834fa359c3afee23b3aaf60bb895e3d8f8->enter($__internal_d9d562e376cb5d78ffb4185b2d105e834fa359c3afee23b3aaf60bb895e3d8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_394f50a7d9c3ffbefa330851321373fd8d39042343d982d7e152dc3866a0078d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394f50a7d9c3ffbefa330851321373fd8d39042343d982d7e152dc3866a0078d->enter($__internal_394f50a7d9c3ffbefa330851321373fd8d39042343d982d7e152dc3866a0078d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_d9d562e376cb5d78ffb4185b2d105e834fa359c3afee23b3aaf60bb895e3d8f8->leave($__internal_d9d562e376cb5d78ffb4185b2d105e834fa359c3afee23b3aaf60bb895e3d8f8_prof);

        
        $__internal_394f50a7d9c3ffbefa330851321373fd8d39042343d982d7e152dc3866a0078d->leave($__internal_394f50a7d9c3ffbefa330851321373fd8d39042343d982d7e152dc3866a0078d_prof);

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
