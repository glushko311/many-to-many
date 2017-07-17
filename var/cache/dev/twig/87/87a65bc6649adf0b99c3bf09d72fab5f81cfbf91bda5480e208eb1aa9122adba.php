<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_df02663c2ca6a434210f22e07a7d96dd3e016d6b81bce94c1876921b575eb816 extends Twig_Template
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
        $__internal_e237bbff9e11909b10d4d862c16ae41abd57893f2cb44d22af94396503f3092f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e237bbff9e11909b10d4d862c16ae41abd57893f2cb44d22af94396503f3092f->enter($__internal_e237bbff9e11909b10d4d862c16ae41abd57893f2cb44d22af94396503f3092f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_bbd179648e30ff7baf25791cabed2488df9d3082fe4b4fb2c990588b0eb8735e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd179648e30ff7baf25791cabed2488df9d3082fe4b4fb2c990588b0eb8735e->enter($__internal_bbd179648e30ff7baf25791cabed2488df9d3082fe4b4fb2c990588b0eb8735e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_e237bbff9e11909b10d4d862c16ae41abd57893f2cb44d22af94396503f3092f->leave($__internal_e237bbff9e11909b10d4d862c16ae41abd57893f2cb44d22af94396503f3092f_prof);

        
        $__internal_bbd179648e30ff7baf25791cabed2488df9d3082fe4b4fb2c990588b0eb8735e->leave($__internal_bbd179648e30ff7baf25791cabed2488df9d3082fe4b4fb2c990588b0eb8735e_prof);

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
