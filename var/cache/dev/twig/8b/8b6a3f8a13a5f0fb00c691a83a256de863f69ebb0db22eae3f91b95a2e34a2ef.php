<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_dc16b7d31a65651776804938226a0e936c9e4b73f940345fd31967d08e1f1217 extends Twig_Template
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
        $__internal_f848069f261cc539191d7cba04e9c68b95ad6de67dae4a1e2c2011f7fdcea28f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f848069f261cc539191d7cba04e9c68b95ad6de67dae4a1e2c2011f7fdcea28f->enter($__internal_f848069f261cc539191d7cba04e9c68b95ad6de67dae4a1e2c2011f7fdcea28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b585bc13d125d98eb62cc60e4bc17ddf7c35e0b3c668f1d8250cf60471777100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b585bc13d125d98eb62cc60e4bc17ddf7c35e0b3c668f1d8250cf60471777100->enter($__internal_b585bc13d125d98eb62cc60e4bc17ddf7c35e0b3c668f1d8250cf60471777100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f848069f261cc539191d7cba04e9c68b95ad6de67dae4a1e2c2011f7fdcea28f->leave($__internal_f848069f261cc539191d7cba04e9c68b95ad6de67dae4a1e2c2011f7fdcea28f_prof);

        
        $__internal_b585bc13d125d98eb62cc60e4bc17ddf7c35e0b3c668f1d8250cf60471777100->leave($__internal_b585bc13d125d98eb62cc60e4bc17ddf7c35e0b3c668f1d8250cf60471777100_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
