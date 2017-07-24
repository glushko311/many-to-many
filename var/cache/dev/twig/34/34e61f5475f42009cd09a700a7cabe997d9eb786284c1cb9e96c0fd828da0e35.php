<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ee5ca80ba37277eb6df7fb48042841a05df276313194b7d7cec00ab5a95f2437 extends Twig_Template
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
        $__internal_2c8f22b9aafe09ff2b6c2c46f1c51327c3bb0affc62e3d23855d74471754ed6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8f22b9aafe09ff2b6c2c46f1c51327c3bb0affc62e3d23855d74471754ed6f->enter($__internal_2c8f22b9aafe09ff2b6c2c46f1c51327c3bb0affc62e3d23855d74471754ed6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1106cba286cabf6fe0493376bc8dfd222ccde27986dd02ecf474df28b82f0a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1106cba286cabf6fe0493376bc8dfd222ccde27986dd02ecf474df28b82f0a69->enter($__internal_1106cba286cabf6fe0493376bc8dfd222ccde27986dd02ecf474df28b82f0a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c8f22b9aafe09ff2b6c2c46f1c51327c3bb0affc62e3d23855d74471754ed6f->leave($__internal_2c8f22b9aafe09ff2b6c2c46f1c51327c3bb0affc62e3d23855d74471754ed6f_prof);

        
        $__internal_1106cba286cabf6fe0493376bc8dfd222ccde27986dd02ecf474df28b82f0a69->leave($__internal_1106cba286cabf6fe0493376bc8dfd222ccde27986dd02ecf474df28b82f0a69_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57140c8f403b7d85fae90777da69ecd5a84feb00cd82d9f48b2ddaeda6c40d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57140c8f403b7d85fae90777da69ecd5a84feb00cd82d9f48b2ddaeda6c40d95->enter($__internal_57140c8f403b7d85fae90777da69ecd5a84feb00cd82d9f48b2ddaeda6c40d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95a42ff34806cd4325a1120cd4ce85a5d192dd4ba35dbd66d7581feaf31c6dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a42ff34806cd4325a1120cd4ce85a5d192dd4ba35dbd66d7581feaf31c6dec->enter($__internal_95a42ff34806cd4325a1120cd4ce85a5d192dd4ba35dbd66d7581feaf31c6dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_95a42ff34806cd4325a1120cd4ce85a5d192dd4ba35dbd66d7581feaf31c6dec->leave($__internal_95a42ff34806cd4325a1120cd4ce85a5d192dd4ba35dbd66d7581feaf31c6dec_prof);

        
        $__internal_57140c8f403b7d85fae90777da69ecd5a84feb00cd82d9f48b2ddaeda6c40d95->leave($__internal_57140c8f403b7d85fae90777da69ecd5a84feb00cd82d9f48b2ddaeda6c40d95_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d2125df14bd7a407694f7d210f87cfccef5a7a8a613dd42461227478c9e5d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2125df14bd7a407694f7d210f87cfccef5a7a8a613dd42461227478c9e5d3d->enter($__internal_4d2125df14bd7a407694f7d210f87cfccef5a7a8a613dd42461227478c9e5d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f3b8a2324dfd482b1a1cdae2d7c5fa680da9f4c5b2d27155e1f454b72161ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3b8a2324dfd482b1a1cdae2d7c5fa680da9f4c5b2d27155e1f454b72161ae5->enter($__internal_8f3b8a2324dfd482b1a1cdae2d7c5fa680da9f4c5b2d27155e1f454b72161ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_8f3b8a2324dfd482b1a1cdae2d7c5fa680da9f4c5b2d27155e1f454b72161ae5->leave($__internal_8f3b8a2324dfd482b1a1cdae2d7c5fa680da9f4c5b2d27155e1f454b72161ae5_prof);

        
        $__internal_4d2125df14bd7a407694f7d210f87cfccef5a7a8a613dd42461227478c9e5d3d->leave($__internal_4d2125df14bd7a407694f7d210f87cfccef5a7a8a613dd42461227478c9e5d3d_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
