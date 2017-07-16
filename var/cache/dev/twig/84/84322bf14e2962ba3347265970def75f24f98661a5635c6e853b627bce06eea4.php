<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_96ed2e195ccd83a545c5ad9a6dd62ab0661bea812b06006b06ea1817e777be21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a30377112cbe73cb46b9487fcbc11ad0124f2411d927525b9d6505221e5c9fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30377112cbe73cb46b9487fcbc11ad0124f2411d927525b9d6505221e5c9fde->enter($__internal_a30377112cbe73cb46b9487fcbc11ad0124f2411d927525b9d6505221e5c9fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_59b0e1457040f8231bec14fca25d5a10a432248a6fd008213addd72791289648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b0e1457040f8231bec14fca25d5a10a432248a6fd008213addd72791289648->enter($__internal_59b0e1457040f8231bec14fca25d5a10a432248a6fd008213addd72791289648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30377112cbe73cb46b9487fcbc11ad0124f2411d927525b9d6505221e5c9fde->leave($__internal_a30377112cbe73cb46b9487fcbc11ad0124f2411d927525b9d6505221e5c9fde_prof);

        
        $__internal_59b0e1457040f8231bec14fca25d5a10a432248a6fd008213addd72791289648->leave($__internal_59b0e1457040f8231bec14fca25d5a10a432248a6fd008213addd72791289648_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_531088b71e0e080087229f2422d951fda2c5867fc1226a55101ee30a93dd7799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531088b71e0e080087229f2422d951fda2c5867fc1226a55101ee30a93dd7799->enter($__internal_531088b71e0e080087229f2422d951fda2c5867fc1226a55101ee30a93dd7799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_30f38746d046cdbf44e716662d2dbb3300a9a4c24ef81c885f4cfc81e9ccfb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f38746d046cdbf44e716662d2dbb3300a9a4c24ef81c885f4cfc81e9ccfb87->enter($__internal_30f38746d046cdbf44e716662d2dbb3300a9a4c24ef81c885f4cfc81e9ccfb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_30f38746d046cdbf44e716662d2dbb3300a9a4c24ef81c885f4cfc81e9ccfb87->leave($__internal_30f38746d046cdbf44e716662d2dbb3300a9a4c24ef81c885f4cfc81e9ccfb87_prof);

        
        $__internal_531088b71e0e080087229f2422d951fda2c5867fc1226a55101ee30a93dd7799->leave($__internal_531088b71e0e080087229f2422d951fda2c5867fc1226a55101ee30a93dd7799_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24d9870e6f4cfbb6982226a3fabb3f5f7324600b92de878efc44b64013946e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d9870e6f4cfbb6982226a3fabb3f5f7324600b92de878efc44b64013946e6b->enter($__internal_24d9870e6f4cfbb6982226a3fabb3f5f7324600b92de878efc44b64013946e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5ae5a76513cfd9ce1598e177c7a9c6ff7cabfb6c58946249aa823fd9589ccbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae5a76513cfd9ce1598e177c7a9c6ff7cabfb6c58946249aa823fd9589ccbf1->enter($__internal_5ae5a76513cfd9ce1598e177c7a9c6ff7cabfb6c58946249aa823fd9589ccbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ae5a76513cfd9ce1598e177c7a9c6ff7cabfb6c58946249aa823fd9589ccbf1->leave($__internal_5ae5a76513cfd9ce1598e177c7a9c6ff7cabfb6c58946249aa823fd9589ccbf1_prof);

        
        $__internal_24d9870e6f4cfbb6982226a3fabb3f5f7324600b92de878efc44b64013946e6b->leave($__internal_24d9870e6f4cfbb6982226a3fabb3f5f7324600b92de878efc44b64013946e6b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d534b87f5087caad8b4e6a59cb8c56d554df470d9839edfd185863a00caf50c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d534b87f5087caad8b4e6a59cb8c56d554df470d9839edfd185863a00caf50c9->enter($__internal_d534b87f5087caad8b4e6a59cb8c56d554df470d9839edfd185863a00caf50c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3029b5c2d19ce9a36a6bda0aa39bf632477b0b00348b7823a32d6588776643a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3029b5c2d19ce9a36a6bda0aa39bf632477b0b00348b7823a32d6588776643a8->enter($__internal_3029b5c2d19ce9a36a6bda0aa39bf632477b0b00348b7823a32d6588776643a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3029b5c2d19ce9a36a6bda0aa39bf632477b0b00348b7823a32d6588776643a8->leave($__internal_3029b5c2d19ce9a36a6bda0aa39bf632477b0b00348b7823a32d6588776643a8_prof);

        
        $__internal_d534b87f5087caad8b4e6a59cb8c56d554df470d9839edfd185863a00caf50c9->leave($__internal_d534b87f5087caad8b4e6a59cb8c56d554df470d9839edfd185863a00caf50c9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
