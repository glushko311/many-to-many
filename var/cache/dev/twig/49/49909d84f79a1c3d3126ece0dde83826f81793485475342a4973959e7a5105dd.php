<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_db81357280645f042b00cfcfe9427725eb4101731b41696a00b9807bb22bc024 extends Twig_Template
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
        $__internal_114aed141682882fab8bbe4e1821904cab1ffa969963f3785884c9c30427e0c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_114aed141682882fab8bbe4e1821904cab1ffa969963f3785884c9c30427e0c2->enter($__internal_114aed141682882fab8bbe4e1821904cab1ffa969963f3785884c9c30427e0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1e453d7b77455a25a5d7efd1c74923f05f221d4eb962990e82625adfe7a81c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e453d7b77455a25a5d7efd1c74923f05f221d4eb962990e82625adfe7a81c0b->enter($__internal_1e453d7b77455a25a5d7efd1c74923f05f221d4eb962990e82625adfe7a81c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_114aed141682882fab8bbe4e1821904cab1ffa969963f3785884c9c30427e0c2->leave($__internal_114aed141682882fab8bbe4e1821904cab1ffa969963f3785884c9c30427e0c2_prof);

        
        $__internal_1e453d7b77455a25a5d7efd1c74923f05f221d4eb962990e82625adfe7a81c0b->leave($__internal_1e453d7b77455a25a5d7efd1c74923f05f221d4eb962990e82625adfe7a81c0b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_46f54f470c2f0fd64870fa429d82c0219d5431aa1abab2aa94f249b772363249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f54f470c2f0fd64870fa429d82c0219d5431aa1abab2aa94f249b772363249->enter($__internal_46f54f470c2f0fd64870fa429d82c0219d5431aa1abab2aa94f249b772363249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04bea4aa0663f2151afbc82ee82448d6947f170667fb8f608aabc679542a34f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04bea4aa0663f2151afbc82ee82448d6947f170667fb8f608aabc679542a34f2->enter($__internal_04bea4aa0663f2151afbc82ee82448d6947f170667fb8f608aabc679542a34f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_04bea4aa0663f2151afbc82ee82448d6947f170667fb8f608aabc679542a34f2->leave($__internal_04bea4aa0663f2151afbc82ee82448d6947f170667fb8f608aabc679542a34f2_prof);

        
        $__internal_46f54f470c2f0fd64870fa429d82c0219d5431aa1abab2aa94f249b772363249->leave($__internal_46f54f470c2f0fd64870fa429d82c0219d5431aa1abab2aa94f249b772363249_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
