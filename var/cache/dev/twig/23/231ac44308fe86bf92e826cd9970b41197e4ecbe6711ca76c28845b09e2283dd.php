<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_8922acff26edb6bb81957b0a2dd0ee7274c5eec6bb69fb4186e9066acd5b2358 extends Twig_Template
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
        $__internal_bc6279ad96a1abd4c807991e37b6c89620fbe076ac5a900da1aa9bed898112e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6279ad96a1abd4c807991e37b6c89620fbe076ac5a900da1aa9bed898112e0->enter($__internal_bc6279ad96a1abd4c807991e37b6c89620fbe076ac5a900da1aa9bed898112e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1720b26584ab1c90c537eb09ab016ccf1078c77d21a06ea0f09d8cfd6b84683b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1720b26584ab1c90c537eb09ab016ccf1078c77d21a06ea0f09d8cfd6b84683b->enter($__internal_1720b26584ab1c90c537eb09ab016ccf1078c77d21a06ea0f09d8cfd6b84683b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_bc6279ad96a1abd4c807991e37b6c89620fbe076ac5a900da1aa9bed898112e0->leave($__internal_bc6279ad96a1abd4c807991e37b6c89620fbe076ac5a900da1aa9bed898112e0_prof);

        
        $__internal_1720b26584ab1c90c537eb09ab016ccf1078c77d21a06ea0f09d8cfd6b84683b->leave($__internal_1720b26584ab1c90c537eb09ab016ccf1078c77d21a06ea0f09d8cfd6b84683b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
