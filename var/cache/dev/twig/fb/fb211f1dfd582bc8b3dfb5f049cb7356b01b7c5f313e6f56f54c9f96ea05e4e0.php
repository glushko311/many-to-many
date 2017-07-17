<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_5ca9ab1ab93f01d006ffdc8b5175ecfefb9485a954d11440e5bfd82c2b0d2ef2 extends Twig_Template
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
        $__internal_75da4e8cd600cda8600992f8c59a91e2572f29accc20725d563c67341d527834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75da4e8cd600cda8600992f8c59a91e2572f29accc20725d563c67341d527834->enter($__internal_75da4e8cd600cda8600992f8c59a91e2572f29accc20725d563c67341d527834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_0fbed9e5b879933fbac488dc643cfaa56d3a5a3833695789a6440e11ab284e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fbed9e5b879933fbac488dc643cfaa56d3a5a3833695789a6440e11ab284e20->enter($__internal_0fbed9e5b879933fbac488dc643cfaa56d3a5a3833695789a6440e11ab284e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_75da4e8cd600cda8600992f8c59a91e2572f29accc20725d563c67341d527834->leave($__internal_75da4e8cd600cda8600992f8c59a91e2572f29accc20725d563c67341d527834_prof);

        
        $__internal_0fbed9e5b879933fbac488dc643cfaa56d3a5a3833695789a6440e11ab284e20->leave($__internal_0fbed9e5b879933fbac488dc643cfaa56d3a5a3833695789a6440e11ab284e20_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
