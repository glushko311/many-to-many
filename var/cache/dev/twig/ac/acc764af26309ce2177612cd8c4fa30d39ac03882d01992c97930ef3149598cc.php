<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b84082dd696ba7df3e8cef40008355a2a4079f59f1e189e5c78a3288cf841e6d extends Twig_Template
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
        $__internal_7339283e95659e68290831bfa8e0566fc8839304f435741dfa439ce5f66b4cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7339283e95659e68290831bfa8e0566fc8839304f435741dfa439ce5f66b4cef->enter($__internal_7339283e95659e68290831bfa8e0566fc8839304f435741dfa439ce5f66b4cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7b51a616b312aa28ec5eef2137548a8d403a3a23f2d1b96a0d08e5237822dce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b51a616b312aa28ec5eef2137548a8d403a3a23f2d1b96a0d08e5237822dce7->enter($__internal_7b51a616b312aa28ec5eef2137548a8d403a3a23f2d1b96a0d08e5237822dce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7339283e95659e68290831bfa8e0566fc8839304f435741dfa439ce5f66b4cef->leave($__internal_7339283e95659e68290831bfa8e0566fc8839304f435741dfa439ce5f66b4cef_prof);

        
        $__internal_7b51a616b312aa28ec5eef2137548a8d403a3a23f2d1b96a0d08e5237822dce7->leave($__internal_7b51a616b312aa28ec5eef2137548a8d403a3a23f2d1b96a0d08e5237822dce7_prof);

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
