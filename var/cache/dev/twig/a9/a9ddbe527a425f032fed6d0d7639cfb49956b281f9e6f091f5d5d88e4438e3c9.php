<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8f4082c6e2ab0ebeda17d99afa7fdc79b44498e1ada08c52be50103021fa15a1 extends Twig_Template
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
        $__internal_d544e0c2c0f5745e2d8186e60a2b58f4b2bb6f097e5db0352aeca773dd42f3e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d544e0c2c0f5745e2d8186e60a2b58f4b2bb6f097e5db0352aeca773dd42f3e7->enter($__internal_d544e0c2c0f5745e2d8186e60a2b58f4b2bb6f097e5db0352aeca773dd42f3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_63f76aa8b9bdc24171da1d4b152ac4ef038d08613b9bac7e1708e445bdbe53b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f76aa8b9bdc24171da1d4b152ac4ef038d08613b9bac7e1708e445bdbe53b2->enter($__internal_63f76aa8b9bdc24171da1d4b152ac4ef038d08613b9bac7e1708e445bdbe53b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_d544e0c2c0f5745e2d8186e60a2b58f4b2bb6f097e5db0352aeca773dd42f3e7->leave($__internal_d544e0c2c0f5745e2d8186e60a2b58f4b2bb6f097e5db0352aeca773dd42f3e7_prof);

        
        $__internal_63f76aa8b9bdc24171da1d4b152ac4ef038d08613b9bac7e1708e445bdbe53b2->leave($__internal_63f76aa8b9bdc24171da1d4b152ac4ef038d08613b9bac7e1708e445bdbe53b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
