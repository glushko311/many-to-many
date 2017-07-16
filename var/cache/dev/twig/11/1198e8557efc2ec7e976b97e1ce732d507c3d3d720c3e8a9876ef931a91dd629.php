<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ed4522e1486dd2c4ff345f2c89ad0f3536db4e1460dbd513f6ac853d07d11341 extends Twig_Template
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
        $__internal_989b9d908c0c671d8407f6d204a5d07fcd5de6308fd314a70ff600f1f41e7b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989b9d908c0c671d8407f6d204a5d07fcd5de6308fd314a70ff600f1f41e7b04->enter($__internal_989b9d908c0c671d8407f6d204a5d07fcd5de6308fd314a70ff600f1f41e7b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_6458ea0abaf3d07b57fe9ade8d7b20dc4673dc9654bc5b94b59b8edbb7855e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6458ea0abaf3d07b57fe9ade8d7b20dc4673dc9654bc5b94b59b8edbb7855e66->enter($__internal_6458ea0abaf3d07b57fe9ade8d7b20dc4673dc9654bc5b94b59b8edbb7855e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_989b9d908c0c671d8407f6d204a5d07fcd5de6308fd314a70ff600f1f41e7b04->leave($__internal_989b9d908c0c671d8407f6d204a5d07fcd5de6308fd314a70ff600f1f41e7b04_prof);

        
        $__internal_6458ea0abaf3d07b57fe9ade8d7b20dc4673dc9654bc5b94b59b8edbb7855e66->leave($__internal_6458ea0abaf3d07b57fe9ade8d7b20dc4673dc9654bc5b94b59b8edbb7855e66_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
