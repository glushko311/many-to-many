<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b3e431b273a7a606642996a29d9054426547fde99bb3f83f9fd43e30fcc79afb extends Twig_Template
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
        $__internal_7cdd10fbcbd0a46757e58664ef395c7e21ef4ddad78471410ade920dd3c5ab93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cdd10fbcbd0a46757e58664ef395c7e21ef4ddad78471410ade920dd3c5ab93->enter($__internal_7cdd10fbcbd0a46757e58664ef395c7e21ef4ddad78471410ade920dd3c5ab93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_37122c9f3712a3515c35fdec9ff71fb49057a5200086bd2e8fef57d8877bec19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37122c9f3712a3515c35fdec9ff71fb49057a5200086bd2e8fef57d8877bec19->enter($__internal_37122c9f3712a3515c35fdec9ff71fb49057a5200086bd2e8fef57d8877bec19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7cdd10fbcbd0a46757e58664ef395c7e21ef4ddad78471410ade920dd3c5ab93->leave($__internal_7cdd10fbcbd0a46757e58664ef395c7e21ef4ddad78471410ade920dd3c5ab93_prof);

        
        $__internal_37122c9f3712a3515c35fdec9ff71fb49057a5200086bd2e8fef57d8877bec19->leave($__internal_37122c9f3712a3515c35fdec9ff71fb49057a5200086bd2e8fef57d8877bec19_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
