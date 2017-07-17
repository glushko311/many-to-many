<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e2c9c70db42908a16327559409329652f9d49d2681cf7cb75242cc1ac88288f9 extends Twig_Template
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
        $__internal_755dbd6a926355d7fe84d0ddfb49de4cce517e927a5ffee1318464439c190081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755dbd6a926355d7fe84d0ddfb49de4cce517e927a5ffee1318464439c190081->enter($__internal_755dbd6a926355d7fe84d0ddfb49de4cce517e927a5ffee1318464439c190081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_9be210fd69c5446468b280719624b0ca87aec189e486be9e5894cb6b4007da2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be210fd69c5446468b280719624b0ca87aec189e486be9e5894cb6b4007da2d->enter($__internal_9be210fd69c5446468b280719624b0ca87aec189e486be9e5894cb6b4007da2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_755dbd6a926355d7fe84d0ddfb49de4cce517e927a5ffee1318464439c190081->leave($__internal_755dbd6a926355d7fe84d0ddfb49de4cce517e927a5ffee1318464439c190081_prof);

        
        $__internal_9be210fd69c5446468b280719624b0ca87aec189e486be9e5894cb6b4007da2d->leave($__internal_9be210fd69c5446468b280719624b0ca87aec189e486be9e5894cb6b4007da2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
