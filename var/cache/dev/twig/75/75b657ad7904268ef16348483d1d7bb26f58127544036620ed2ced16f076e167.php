<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9f2731aabbe42d0d07588ea4df0c967194883d594f6d11191df54a60eb718153 extends Twig_Template
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
        $__internal_9167d28e4a0a986957ddbeafee7af1e14eb00987080579d1846fb9f4e4ab1e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9167d28e4a0a986957ddbeafee7af1e14eb00987080579d1846fb9f4e4ab1e6b->enter($__internal_9167d28e4a0a986957ddbeafee7af1e14eb00987080579d1846fb9f4e4ab1e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_271bfd3d851ba39f8ec7556c5c3584c52ada422fbf5215c62964136591c5039e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271bfd3d851ba39f8ec7556c5c3584c52ada422fbf5215c62964136591c5039e->enter($__internal_271bfd3d851ba39f8ec7556c5c3584c52ada422fbf5215c62964136591c5039e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_9167d28e4a0a986957ddbeafee7af1e14eb00987080579d1846fb9f4e4ab1e6b->leave($__internal_9167d28e4a0a986957ddbeafee7af1e14eb00987080579d1846fb9f4e4ab1e6b_prof);

        
        $__internal_271bfd3d851ba39f8ec7556c5c3584c52ada422fbf5215c62964136591c5039e->leave($__internal_271bfd3d851ba39f8ec7556c5c3584c52ada422fbf5215c62964136591c5039e_prof);

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
