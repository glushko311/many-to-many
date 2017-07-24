<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1e278b8edb0d7d15d60ec89667f63582dde3fc1db60187a0c09740f5cd8f17b6 extends Twig_Template
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
        $__internal_31bd653b2a7c115d415a124f97e7f3272a63576a23aacdf7620d42d6934888dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31bd653b2a7c115d415a124f97e7f3272a63576a23aacdf7620d42d6934888dc->enter($__internal_31bd653b2a7c115d415a124f97e7f3272a63576a23aacdf7620d42d6934888dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_299cff40feb81758ba731ef079b09b747a6f738863ff0f4868ff15bbc38d2a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299cff40feb81758ba731ef079b09b747a6f738863ff0f4868ff15bbc38d2a55->enter($__internal_299cff40feb81758ba731ef079b09b747a6f738863ff0f4868ff15bbc38d2a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_31bd653b2a7c115d415a124f97e7f3272a63576a23aacdf7620d42d6934888dc->leave($__internal_31bd653b2a7c115d415a124f97e7f3272a63576a23aacdf7620d42d6934888dc_prof);

        
        $__internal_299cff40feb81758ba731ef079b09b747a6f738863ff0f4868ff15bbc38d2a55->leave($__internal_299cff40feb81758ba731ef079b09b747a6f738863ff0f4868ff15bbc38d2a55_prof);

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
