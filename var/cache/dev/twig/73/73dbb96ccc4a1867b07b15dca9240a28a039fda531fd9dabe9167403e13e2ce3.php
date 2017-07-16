<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_5bb57f2b6bba5d757075591ceba26746875ef5b6887ceecece2caee8a268f67d extends Twig_Template
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
        $__internal_c54cd0c60ca99f7f8b753e725190091d4a241d3c5b5049c991461cc8422749af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54cd0c60ca99f7f8b753e725190091d4a241d3c5b5049c991461cc8422749af->enter($__internal_c54cd0c60ca99f7f8b753e725190091d4a241d3c5b5049c991461cc8422749af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_24a1d862a797bce7e18a13c2d2c1a7fd6a1d278ce329873e810d616bf8a0e2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a1d862a797bce7e18a13c2d2c1a7fd6a1d278ce329873e810d616bf8a0e2b0->enter($__internal_24a1d862a797bce7e18a13c2d2c1a7fd6a1d278ce329873e810d616bf8a0e2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c54cd0c60ca99f7f8b753e725190091d4a241d3c5b5049c991461cc8422749af->leave($__internal_c54cd0c60ca99f7f8b753e725190091d4a241d3c5b5049c991461cc8422749af_prof);

        
        $__internal_24a1d862a797bce7e18a13c2d2c1a7fd6a1d278ce329873e810d616bf8a0e2b0->leave($__internal_24a1d862a797bce7e18a13c2d2c1a7fd6a1d278ce329873e810d616bf8a0e2b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
