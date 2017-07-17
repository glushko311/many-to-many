<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c352ead0b22f19a65079946f52d7c7c51cdb79d9a171f54de10e4e5c79e6f373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9eb80d01960c1890fe2e6f84e475ad2e1a3d80c52d32f0c71404a5f95c84d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9eb80d01960c1890fe2e6f84e475ad2e1a3d80c52d32f0c71404a5f95c84d8a->enter($__internal_d9eb80d01960c1890fe2e6f84e475ad2e1a3d80c52d32f0c71404a5f95c84d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3ff61d65b2e1b386cab5d77a0775bf2b507eb70ca9c75f275c51423feeb7d9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff61d65b2e1b386cab5d77a0775bf2b507eb70ca9c75f275c51423feeb7d9c8->enter($__internal_3ff61d65b2e1b386cab5d77a0775bf2b507eb70ca9c75f275c51423feeb7d9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9eb80d01960c1890fe2e6f84e475ad2e1a3d80c52d32f0c71404a5f95c84d8a->leave($__internal_d9eb80d01960c1890fe2e6f84e475ad2e1a3d80c52d32f0c71404a5f95c84d8a_prof);

        
        $__internal_3ff61d65b2e1b386cab5d77a0775bf2b507eb70ca9c75f275c51423feeb7d9c8->leave($__internal_3ff61d65b2e1b386cab5d77a0775bf2b507eb70ca9c75f275c51423feeb7d9c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0b1956527b2ad5dc51ed4ddcbe42cee554e47cb12c7baa921bbc684ae7adbbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b1956527b2ad5dc51ed4ddcbe42cee554e47cb12c7baa921bbc684ae7adbbd->enter($__internal_e0b1956527b2ad5dc51ed4ddcbe42cee554e47cb12c7baa921bbc684ae7adbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c4f55bc23b6be541d044644d455a3bc9b219c5f573436626940bf74e3e6ddf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4f55bc23b6be541d044644d455a3bc9b219c5f573436626940bf74e3e6ddf5->enter($__internal_6c4f55bc23b6be541d044644d455a3bc9b219c5f573436626940bf74e3e6ddf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6c4f55bc23b6be541d044644d455a3bc9b219c5f573436626940bf74e3e6ddf5->leave($__internal_6c4f55bc23b6be541d044644d455a3bc9b219c5f573436626940bf74e3e6ddf5_prof);

        
        $__internal_e0b1956527b2ad5dc51ed4ddcbe42cee554e47cb12c7baa921bbc684ae7adbbd->leave($__internal_e0b1956527b2ad5dc51ed4ddcbe42cee554e47cb12c7baa921bbc684ae7adbbd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c98f381d58a05dda573e27c32baa4c89f6c80911daac2fd2aab0e8a04210442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c98f381d58a05dda573e27c32baa4c89f6c80911daac2fd2aab0e8a04210442->enter($__internal_4c98f381d58a05dda573e27c32baa4c89f6c80911daac2fd2aab0e8a04210442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9180e2ca580af497978ab940a74dc7898e7b733b29be3162838f229d784ea16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9180e2ca580af497978ab940a74dc7898e7b733b29be3162838f229d784ea16->enter($__internal_a9180e2ca580af497978ab940a74dc7898e7b733b29be3162838f229d784ea16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a9180e2ca580af497978ab940a74dc7898e7b733b29be3162838f229d784ea16->leave($__internal_a9180e2ca580af497978ab940a74dc7898e7b733b29be3162838f229d784ea16_prof);

        
        $__internal_4c98f381d58a05dda573e27c32baa4c89f6c80911daac2fd2aab0e8a04210442->leave($__internal_4c98f381d58a05dda573e27c32baa4c89f6c80911daac2fd2aab0e8a04210442_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
