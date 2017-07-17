<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_16360690cf27a2790bb3488dd0422241582df47f916ed4ff6f5d80a609b02ce6 extends Twig_Template
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
        $__internal_d0e9d2f5d755bcd3f2067573e294c465bbedd83e4cd4a8156792f65c58bdd7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e9d2f5d755bcd3f2067573e294c465bbedd83e4cd4a8156792f65c58bdd7a3->enter($__internal_d0e9d2f5d755bcd3f2067573e294c465bbedd83e4cd4a8156792f65c58bdd7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_49b65910c817aa94765b372f0dcfec432b33d3a543e3fa8a93aec56595f53769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b65910c817aa94765b372f0dcfec432b33d3a543e3fa8a93aec56595f53769->enter($__internal_49b65910c817aa94765b372f0dcfec432b33d3a543e3fa8a93aec56595f53769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d0e9d2f5d755bcd3f2067573e294c465bbedd83e4cd4a8156792f65c58bdd7a3->leave($__internal_d0e9d2f5d755bcd3f2067573e294c465bbedd83e4cd4a8156792f65c58bdd7a3_prof);

        
        $__internal_49b65910c817aa94765b372f0dcfec432b33d3a543e3fa8a93aec56595f53769->leave($__internal_49b65910c817aa94765b372f0dcfec432b33d3a543e3fa8a93aec56595f53769_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
