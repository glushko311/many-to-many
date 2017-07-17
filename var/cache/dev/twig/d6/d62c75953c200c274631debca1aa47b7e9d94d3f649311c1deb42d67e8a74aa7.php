<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ed7837691e7b2c456a701bc114ce04ad8a15be23746bb42af1905aa6e7b2d08f extends Twig_Template
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
        $__internal_9e888a0caa16ad373770e8d8c6808faa287021f8fe07943a90d11637232f9eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e888a0caa16ad373770e8d8c6808faa287021f8fe07943a90d11637232f9eda->enter($__internal_9e888a0caa16ad373770e8d8c6808faa287021f8fe07943a90d11637232f9eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_134da36daee3ab3c3e253bf1ec52873a82027b2c476c340c9c0b0f9cb5917b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134da36daee3ab3c3e253bf1ec52873a82027b2c476c340c9c0b0f9cb5917b50->enter($__internal_134da36daee3ab3c3e253bf1ec52873a82027b2c476c340c9c0b0f9cb5917b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9e888a0caa16ad373770e8d8c6808faa287021f8fe07943a90d11637232f9eda->leave($__internal_9e888a0caa16ad373770e8d8c6808faa287021f8fe07943a90d11637232f9eda_prof);

        
        $__internal_134da36daee3ab3c3e253bf1ec52873a82027b2c476c340c9c0b0f9cb5917b50->leave($__internal_134da36daee3ab3c3e253bf1ec52873a82027b2c476c340c9c0b0f9cb5917b50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
