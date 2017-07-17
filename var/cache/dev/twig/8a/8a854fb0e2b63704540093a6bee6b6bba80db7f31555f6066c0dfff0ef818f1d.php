<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_691797bbf351572c71738cc263d016e8e275b33936723399b298c8e9169a011e extends Twig_Template
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
        $__internal_962220453bfc48d42ef957f155efb804dba94aa310ec57e980b47b04b6637940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962220453bfc48d42ef957f155efb804dba94aa310ec57e980b47b04b6637940->enter($__internal_962220453bfc48d42ef957f155efb804dba94aa310ec57e980b47b04b6637940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c87f2c1d927592f9854ebed43fb41b3722ea0cd2a9036b1373ae53c3a86a8cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87f2c1d927592f9854ebed43fb41b3722ea0cd2a9036b1373ae53c3a86a8cf3->enter($__internal_c87f2c1d927592f9854ebed43fb41b3722ea0cd2a9036b1373ae53c3a86a8cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_962220453bfc48d42ef957f155efb804dba94aa310ec57e980b47b04b6637940->leave($__internal_962220453bfc48d42ef957f155efb804dba94aa310ec57e980b47b04b6637940_prof);

        
        $__internal_c87f2c1d927592f9854ebed43fb41b3722ea0cd2a9036b1373ae53c3a86a8cf3->leave($__internal_c87f2c1d927592f9854ebed43fb41b3722ea0cd2a9036b1373ae53c3a86a8cf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
