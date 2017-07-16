<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_db6b93687012918cd93b697164788daf1d3d5abbd7309e83c423244af1c82cff extends Twig_Template
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
        $__internal_0f81a574f81a4c51acd5ab8537ad48d4c791f4430ffde3a8728e46dd9b470cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f81a574f81a4c51acd5ab8537ad48d4c791f4430ffde3a8728e46dd9b470cc1->enter($__internal_0f81a574f81a4c51acd5ab8537ad48d4c791f4430ffde3a8728e46dd9b470cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d112b908aa891cc20622d604e470442723bc8d0a4dbaac9177d8c9df183b4f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d112b908aa891cc20622d604e470442723bc8d0a4dbaac9177d8c9df183b4f0d->enter($__internal_d112b908aa891cc20622d604e470442723bc8d0a4dbaac9177d8c9df183b4f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0f81a574f81a4c51acd5ab8537ad48d4c791f4430ffde3a8728e46dd9b470cc1->leave($__internal_0f81a574f81a4c51acd5ab8537ad48d4c791f4430ffde3a8728e46dd9b470cc1_prof);

        
        $__internal_d112b908aa891cc20622d604e470442723bc8d0a4dbaac9177d8c9df183b4f0d->leave($__internal_d112b908aa891cc20622d604e470442723bc8d0a4dbaac9177d8c9df183b4f0d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
