<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4dff2620c6b742a85e52f1e957c893b4e482bf2dfe535d9928ef759d20a949fd extends Twig_Template
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
        $__internal_16a8a47c2a0773fff52f134e9894999728822c4a613beaf5181511923c928e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a8a47c2a0773fff52f134e9894999728822c4a613beaf5181511923c928e9e->enter($__internal_16a8a47c2a0773fff52f134e9894999728822c4a613beaf5181511923c928e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_822fa056ae1a9deb414874f5721c8a32a51cc3abb4ae453f7d2bd48ff8bf0eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822fa056ae1a9deb414874f5721c8a32a51cc3abb4ae453f7d2bd48ff8bf0eee->enter($__internal_822fa056ae1a9deb414874f5721c8a32a51cc3abb4ae453f7d2bd48ff8bf0eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_16a8a47c2a0773fff52f134e9894999728822c4a613beaf5181511923c928e9e->leave($__internal_16a8a47c2a0773fff52f134e9894999728822c4a613beaf5181511923c928e9e_prof);

        
        $__internal_822fa056ae1a9deb414874f5721c8a32a51cc3abb4ae453f7d2bd48ff8bf0eee->leave($__internal_822fa056ae1a9deb414874f5721c8a32a51cc3abb4ae453f7d2bd48ff8bf0eee_prof);

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
", "@Framework/Form/textarea_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
