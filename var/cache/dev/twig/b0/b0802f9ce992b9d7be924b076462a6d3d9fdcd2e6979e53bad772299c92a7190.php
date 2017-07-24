<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_93d63e4eeec9bc002c8e205e13a578674a55229256e1d2a6060f9d284306a22c extends Twig_Template
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
        $__internal_ea4066b0c23b8635f6af9a5aff57383febc650f219311de605be91aa483adb02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4066b0c23b8635f6af9a5aff57383febc650f219311de605be91aa483adb02->enter($__internal_ea4066b0c23b8635f6af9a5aff57383febc650f219311de605be91aa483adb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_914a9064f3d3cf193018a35aad08585ed77f9037b4be99f9d85dfe611097344a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914a9064f3d3cf193018a35aad08585ed77f9037b4be99f9d85dfe611097344a->enter($__internal_914a9064f3d3cf193018a35aad08585ed77f9037b4be99f9d85dfe611097344a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ea4066b0c23b8635f6af9a5aff57383febc650f219311de605be91aa483adb02->leave($__internal_ea4066b0c23b8635f6af9a5aff57383febc650f219311de605be91aa483adb02_prof);

        
        $__internal_914a9064f3d3cf193018a35aad08585ed77f9037b4be99f9d85dfe611097344a->leave($__internal_914a9064f3d3cf193018a35aad08585ed77f9037b4be99f9d85dfe611097344a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
