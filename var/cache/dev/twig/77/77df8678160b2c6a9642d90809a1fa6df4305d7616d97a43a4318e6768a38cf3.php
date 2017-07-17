<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9d10b9bf103060f35f5a4f401d0ce82e2050226594cdadbe3f0d4d26dd0bdf8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6a6cde6ca69c76543acaaf67b294f1d878b7a83f8032137c336ac210d274f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a6cde6ca69c76543acaaf67b294f1d878b7a83f8032137c336ac210d274f11->enter($__internal_f6a6cde6ca69c76543acaaf67b294f1d878b7a83f8032137c336ac210d274f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8548c3111cce3365772ebd67ac19380fde3ee9c60b014c6e84c5c6064f99c5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8548c3111cce3365772ebd67ac19380fde3ee9c60b014c6e84c5c6064f99c5ba->enter($__internal_8548c3111cce3365772ebd67ac19380fde3ee9c60b014c6e84c5c6064f99c5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f6a6cde6ca69c76543acaaf67b294f1d878b7a83f8032137c336ac210d274f11->leave($__internal_f6a6cde6ca69c76543acaaf67b294f1d878b7a83f8032137c336ac210d274f11_prof);

        
        $__internal_8548c3111cce3365772ebd67ac19380fde3ee9c60b014c6e84c5c6064f99c5ba->leave($__internal_8548c3111cce3365772ebd67ac19380fde3ee9c60b014c6e84c5c6064f99c5ba_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_92a554639140810e7254fe8738de9ab6f58ae1b12bc4cb2fa840502c2597d4b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a554639140810e7254fe8738de9ab6f58ae1b12bc4cb2fa840502c2597d4b8->enter($__internal_92a554639140810e7254fe8738de9ab6f58ae1b12bc4cb2fa840502c2597d4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_426da697d6549e279775eb543ac05fdb6df6b03c758d78582a462b8bee1a2197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426da697d6549e279775eb543ac05fdb6df6b03c758d78582a462b8bee1a2197->enter($__internal_426da697d6549e279775eb543ac05fdb6df6b03c758d78582a462b8bee1a2197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_426da697d6549e279775eb543ac05fdb6df6b03c758d78582a462b8bee1a2197->leave($__internal_426da697d6549e279775eb543ac05fdb6df6b03c758d78582a462b8bee1a2197_prof);

        
        $__internal_92a554639140810e7254fe8738de9ab6f58ae1b12bc4cb2fa840502c2597d4b8->leave($__internal_92a554639140810e7254fe8738de9ab6f58ae1b12bc4cb2fa840502c2597d4b8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
