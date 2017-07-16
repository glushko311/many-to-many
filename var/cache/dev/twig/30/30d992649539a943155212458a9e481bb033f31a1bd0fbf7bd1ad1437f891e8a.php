<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_70647ce63b5190144c2e8845b3c9655625d0224381c92b35466794b5cbd10728 extends Twig_Template
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
        $__internal_c42a9081fb76a198b8d64fd806cfb208369068f64bb07643c19d75aac6bee1a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42a9081fb76a198b8d64fd806cfb208369068f64bb07643c19d75aac6bee1a5->enter($__internal_c42a9081fb76a198b8d64fd806cfb208369068f64bb07643c19d75aac6bee1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ed4f6885c5bfe11cdcbc7a399558b2f683e33f6c2c78024e42496fa2f37fceec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4f6885c5bfe11cdcbc7a399558b2f683e33f6c2c78024e42496fa2f37fceec->enter($__internal_ed4f6885c5bfe11cdcbc7a399558b2f683e33f6c2c78024e42496fa2f37fceec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c42a9081fb76a198b8d64fd806cfb208369068f64bb07643c19d75aac6bee1a5->leave($__internal_c42a9081fb76a198b8d64fd806cfb208369068f64bb07643c19d75aac6bee1a5_prof);

        
        $__internal_ed4f6885c5bfe11cdcbc7a399558b2f683e33f6c2c78024e42496fa2f37fceec->leave($__internal_ed4f6885c5bfe11cdcbc7a399558b2f683e33f6c2c78024e42496fa2f37fceec_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7226080d3102adb4a786d4fa525dfd42ef763618fc70271bb54f8513236d815d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7226080d3102adb4a786d4fa525dfd42ef763618fc70271bb54f8513236d815d->enter($__internal_7226080d3102adb4a786d4fa525dfd42ef763618fc70271bb54f8513236d815d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d334d857fa4c5d3842fa921aa5c73f7173a981c7a112b7245e760bf90ecb862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d334d857fa4c5d3842fa921aa5c73f7173a981c7a112b7245e760bf90ecb862->enter($__internal_1d334d857fa4c5d3842fa921aa5c73f7173a981c7a112b7245e760bf90ecb862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1d334d857fa4c5d3842fa921aa5c73f7173a981c7a112b7245e760bf90ecb862->leave($__internal_1d334d857fa4c5d3842fa921aa5c73f7173a981c7a112b7245e760bf90ecb862_prof);

        
        $__internal_7226080d3102adb4a786d4fa525dfd42ef763618fc70271bb54f8513236d815d->leave($__internal_7226080d3102adb4a786d4fa525dfd42ef763618fc70271bb54f8513236d815d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
