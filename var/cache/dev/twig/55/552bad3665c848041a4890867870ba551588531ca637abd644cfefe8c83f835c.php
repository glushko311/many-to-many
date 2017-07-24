<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_71ddde52a2123458a27fd1f52646ea0ecc171809c346fd515c3f52c747b9571f extends Twig_Template
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
        $__internal_a220ba65cb49ceb1ce176e8d08355ef5623ef01ee057e821f705844b244cb0d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a220ba65cb49ceb1ce176e8d08355ef5623ef01ee057e821f705844b244cb0d6->enter($__internal_a220ba65cb49ceb1ce176e8d08355ef5623ef01ee057e821f705844b244cb0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c23f788480a1ee2e60523f1b28539e10570db28bfd2d779854c305cf97157df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23f788480a1ee2e60523f1b28539e10570db28bfd2d779854c305cf97157df0->enter($__internal_c23f788480a1ee2e60523f1b28539e10570db28bfd2d779854c305cf97157df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a220ba65cb49ceb1ce176e8d08355ef5623ef01ee057e821f705844b244cb0d6->leave($__internal_a220ba65cb49ceb1ce176e8d08355ef5623ef01ee057e821f705844b244cb0d6_prof);

        
        $__internal_c23f788480a1ee2e60523f1b28539e10570db28bfd2d779854c305cf97157df0->leave($__internal_c23f788480a1ee2e60523f1b28539e10570db28bfd2d779854c305cf97157df0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
