<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2d998d041b8f35a333d4ac3b82534ac38e001fc7bd0fa57b07afce2a8e4eecc5 extends Twig_Template
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
        $__internal_75ab88edc93cbbe3f841cac108467088a0846b951444735a9836e13eaadae813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ab88edc93cbbe3f841cac108467088a0846b951444735a9836e13eaadae813->enter($__internal_75ab88edc93cbbe3f841cac108467088a0846b951444735a9836e13eaadae813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_60613874cb69b2fa6b7122a94710dada084998bf20c2bf5ffe118af52e22a32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60613874cb69b2fa6b7122a94710dada084998bf20c2bf5ffe118af52e22a32b->enter($__internal_60613874cb69b2fa6b7122a94710dada084998bf20c2bf5ffe118af52e22a32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_75ab88edc93cbbe3f841cac108467088a0846b951444735a9836e13eaadae813->leave($__internal_75ab88edc93cbbe3f841cac108467088a0846b951444735a9836e13eaadae813_prof);

        
        $__internal_60613874cb69b2fa6b7122a94710dada084998bf20c2bf5ffe118af52e22a32b->leave($__internal_60613874cb69b2fa6b7122a94710dada084998bf20c2bf5ffe118af52e22a32b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
