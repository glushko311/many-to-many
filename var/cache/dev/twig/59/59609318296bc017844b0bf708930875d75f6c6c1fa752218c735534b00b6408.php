<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4b4ba080141d6a25aea5c6fa5cd18d7ed4370c0e4f5d1352a647e214bfd6a341 extends Twig_Template
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
        $__internal_7710dbcdfbc38adceede733265710a4c26c15172a1f6e946645680c64709b3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7710dbcdfbc38adceede733265710a4c26c15172a1f6e946645680c64709b3b2->enter($__internal_7710dbcdfbc38adceede733265710a4c26c15172a1f6e946645680c64709b3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_cebc0554afa8f42949fdd8ce7f21826a64b81755aa36136e7849c8504eb5d4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebc0554afa8f42949fdd8ce7f21826a64b81755aa36136e7849c8504eb5d4a0->enter($__internal_cebc0554afa8f42949fdd8ce7f21826a64b81755aa36136e7849c8504eb5d4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7710dbcdfbc38adceede733265710a4c26c15172a1f6e946645680c64709b3b2->leave($__internal_7710dbcdfbc38adceede733265710a4c26c15172a1f6e946645680c64709b3b2_prof);

        
        $__internal_cebc0554afa8f42949fdd8ce7f21826a64b81755aa36136e7849c8504eb5d4a0->leave($__internal_cebc0554afa8f42949fdd8ce7f21826a64b81755aa36136e7849c8504eb5d4a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
