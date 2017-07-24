<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_35f1d9674c0e8ddf6374aab3bef86847d5d7c4ed6e4e8de047b371ea4e57eb90 extends Twig_Template
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
        $__internal_7a5ec7a162592ff54cec1f693982eaace3987bbe27f55e6524217eb3b6032023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5ec7a162592ff54cec1f693982eaace3987bbe27f55e6524217eb3b6032023->enter($__internal_7a5ec7a162592ff54cec1f693982eaace3987bbe27f55e6524217eb3b6032023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4d965c40f03ee3ff427d779720bbf0a0ff0adeb98f9fd1df1e6df6d8211a07dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d965c40f03ee3ff427d779720bbf0a0ff0adeb98f9fd1df1e6df6d8211a07dd->enter($__internal_4d965c40f03ee3ff427d779720bbf0a0ff0adeb98f9fd1df1e6df6d8211a07dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7a5ec7a162592ff54cec1f693982eaace3987bbe27f55e6524217eb3b6032023->leave($__internal_7a5ec7a162592ff54cec1f693982eaace3987bbe27f55e6524217eb3b6032023_prof);

        
        $__internal_4d965c40f03ee3ff427d779720bbf0a0ff0adeb98f9fd1df1e6df6d8211a07dd->leave($__internal_4d965c40f03ee3ff427d779720bbf0a0ff0adeb98f9fd1df1e6df6d8211a07dd_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
