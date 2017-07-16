<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_09fe1b9ab03fd54edfb0782d48c6c23a7c18031226febb23c9122ca2684d37e5 extends Twig_Template
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
        $__internal_dde78a7816d0c808fdf582c755ed9ea84121a9aa8dede2dab12879428fea145e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde78a7816d0c808fdf582c755ed9ea84121a9aa8dede2dab12879428fea145e->enter($__internal_dde78a7816d0c808fdf582c755ed9ea84121a9aa8dede2dab12879428fea145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1db3e8d6c0b772f097ffae885bdc31a2c72e8ea0f046dc2275dac839a301039d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db3e8d6c0b772f097ffae885bdc31a2c72e8ea0f046dc2275dac839a301039d->enter($__internal_1db3e8d6c0b772f097ffae885bdc31a2c72e8ea0f046dc2275dac839a301039d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_dde78a7816d0c808fdf582c755ed9ea84121a9aa8dede2dab12879428fea145e->leave($__internal_dde78a7816d0c808fdf582c755ed9ea84121a9aa8dede2dab12879428fea145e_prof);

        
        $__internal_1db3e8d6c0b772f097ffae885bdc31a2c72e8ea0f046dc2275dac839a301039d->leave($__internal_1db3e8d6c0b772f097ffae885bdc31a2c72e8ea0f046dc2275dac839a301039d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
