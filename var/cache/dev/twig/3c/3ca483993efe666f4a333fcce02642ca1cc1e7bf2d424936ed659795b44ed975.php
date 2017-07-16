<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d90065b0ba6e5ceb8860a785a5b34426f3c3a27c9f5ca594890eb7b2be0c8b1b extends Twig_Template
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
        $__internal_1e5969cda24f582d10c68817564239105ee6128bb956b79cd6346298dc5b443b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5969cda24f582d10c68817564239105ee6128bb956b79cd6346298dc5b443b->enter($__internal_1e5969cda24f582d10c68817564239105ee6128bb956b79cd6346298dc5b443b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_42d4ef891d5c93b3fb9f4cb174f00340120319c1c58f472216b48945c0fa2627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d4ef891d5c93b3fb9f4cb174f00340120319c1c58f472216b48945c0fa2627->enter($__internal_42d4ef891d5c93b3fb9f4cb174f00340120319c1c58f472216b48945c0fa2627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1e5969cda24f582d10c68817564239105ee6128bb956b79cd6346298dc5b443b->leave($__internal_1e5969cda24f582d10c68817564239105ee6128bb956b79cd6346298dc5b443b_prof);

        
        $__internal_42d4ef891d5c93b3fb9f4cb174f00340120319c1c58f472216b48945c0fa2627->leave($__internal_42d4ef891d5c93b3fb9f4cb174f00340120319c1c58f472216b48945c0fa2627_prof);

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
", "TwigBundle:Exception:error.css.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
