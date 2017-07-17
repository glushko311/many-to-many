<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_794a0f361923bba5c06ba273363f63980419ec8a0f2c56f057b22c6bef771f40 extends Twig_Template
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
        $__internal_afb69ad1210494c4dbc724fb1aee792d3403c676f7043e84c52960f068f70a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb69ad1210494c4dbc724fb1aee792d3403c676f7043e84c52960f068f70a12->enter($__internal_afb69ad1210494c4dbc724fb1aee792d3403c676f7043e84c52960f068f70a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a7e465b9f2027963b24f28a282c353f374a4df412123ff7ac4e3fcab4d0a28d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e465b9f2027963b24f28a282c353f374a4df412123ff7ac4e3fcab4d0a28d0->enter($__internal_a7e465b9f2027963b24f28a282c353f374a4df412123ff7ac4e3fcab4d0a28d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_afb69ad1210494c4dbc724fb1aee792d3403c676f7043e84c52960f068f70a12->leave($__internal_afb69ad1210494c4dbc724fb1aee792d3403c676f7043e84c52960f068f70a12_prof);

        
        $__internal_a7e465b9f2027963b24f28a282c353f374a4df412123ff7ac4e3fcab4d0a28d0->leave($__internal_a7e465b9f2027963b24f28a282c353f374a4df412123ff7ac4e3fcab4d0a28d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
