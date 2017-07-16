<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3a32be90a6f7666b1efd5cf3aafabb96ce1b7a6281814908ae3f8424bcc9ad22 extends Twig_Template
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
        $__internal_0911b17eb33e3ef33034dc4a9a845f16cbe441056847f62d5c49c9367ea8ac04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0911b17eb33e3ef33034dc4a9a845f16cbe441056847f62d5c49c9367ea8ac04->enter($__internal_0911b17eb33e3ef33034dc4a9a845f16cbe441056847f62d5c49c9367ea8ac04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a01dc6ffed1c5a99a5602a7d2a8c729d7068726b0ca5c63ff53df3af9e0a073a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01dc6ffed1c5a99a5602a7d2a8c729d7068726b0ca5c63ff53df3af9e0a073a->enter($__internal_a01dc6ffed1c5a99a5602a7d2a8c729d7068726b0ca5c63ff53df3af9e0a073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_0911b17eb33e3ef33034dc4a9a845f16cbe441056847f62d5c49c9367ea8ac04->leave($__internal_0911b17eb33e3ef33034dc4a9a845f16cbe441056847f62d5c49c9367ea8ac04_prof);

        
        $__internal_a01dc6ffed1c5a99a5602a7d2a8c729d7068726b0ca5c63ff53df3af9e0a073a->leave($__internal_a01dc6ffed1c5a99a5602a7d2a8c729d7068726b0ca5c63ff53df3af9e0a073a_prof);

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
", "TwigBundle:Exception:error.js.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
