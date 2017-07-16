<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3ca376d1197d714d31aefcb300f1528965db9f4479ef0f2a8573150e069fb91f extends Twig_Template
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
        $__internal_654f547e67c0a6a2cd4002d4b722a1ea350d2915b6be493ba156e440c0a41e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654f547e67c0a6a2cd4002d4b722a1ea350d2915b6be493ba156e440c0a41e90->enter($__internal_654f547e67c0a6a2cd4002d4b722a1ea350d2915b6be493ba156e440c0a41e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0e26b217366c97321e5c2b8a6103ec9b3ad5d627c4730234c8f526bdf95d64f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e26b217366c97321e5c2b8a6103ec9b3ad5d627c4730234c8f526bdf95d64f9->enter($__internal_0e26b217366c97321e5c2b8a6103ec9b3ad5d627c4730234c8f526bdf95d64f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_654f547e67c0a6a2cd4002d4b722a1ea350d2915b6be493ba156e440c0a41e90->leave($__internal_654f547e67c0a6a2cd4002d4b722a1ea350d2915b6be493ba156e440c0a41e90_prof);

        
        $__internal_0e26b217366c97321e5c2b8a6103ec9b3ad5d627c4730234c8f526bdf95d64f9->leave($__internal_0e26b217366c97321e5c2b8a6103ec9b3ad5d627c4730234c8f526bdf95d64f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
