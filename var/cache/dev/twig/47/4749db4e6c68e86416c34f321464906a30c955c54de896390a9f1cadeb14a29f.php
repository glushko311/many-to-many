<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_653b76626d540f27148a328b0c619539891719e00167b63dd56ffe8733bedf32 extends Twig_Template
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
        $__internal_888d6341af1794c50966029afbf8a03075a0b8465c7e98da7739366add0f6f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888d6341af1794c50966029afbf8a03075a0b8465c7e98da7739366add0f6f52->enter($__internal_888d6341af1794c50966029afbf8a03075a0b8465c7e98da7739366add0f6f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_dd2cb105a245d41f37fad752b7267236d6cf78c35d2d609c90136cf08e55a6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2cb105a245d41f37fad752b7267236d6cf78c35d2d609c90136cf08e55a6bf->enter($__internal_dd2cb105a245d41f37fad752b7267236d6cf78c35d2d609c90136cf08e55a6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_888d6341af1794c50966029afbf8a03075a0b8465c7e98da7739366add0f6f52->leave($__internal_888d6341af1794c50966029afbf8a03075a0b8465c7e98da7739366add0f6f52_prof);

        
        $__internal_dd2cb105a245d41f37fad752b7267236d6cf78c35d2d609c90136cf08e55a6bf->leave($__internal_dd2cb105a245d41f37fad752b7267236d6cf78c35d2d609c90136cf08e55a6bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
