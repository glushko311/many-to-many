<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d318a6d3a25ad5611b7949c4a5c97d06d9e5ca197281cf1d3295c6661bfbf177 extends Twig_Template
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
        $__internal_01a7f7fbb378ee843ce77086d0926593a2d0e7c4250737389efbf8860fd457e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a7f7fbb378ee843ce77086d0926593a2d0e7c4250737389efbf8860fd457e3->enter($__internal_01a7f7fbb378ee843ce77086d0926593a2d0e7c4250737389efbf8860fd457e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d64686a5883da7f0384cef000036756226502909fae2c8d9182c2e9391b2e497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64686a5883da7f0384cef000036756226502909fae2c8d9182c2e9391b2e497->enter($__internal_d64686a5883da7f0384cef000036756226502909fae2c8d9182c2e9391b2e497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_01a7f7fbb378ee843ce77086d0926593a2d0e7c4250737389efbf8860fd457e3->leave($__internal_01a7f7fbb378ee843ce77086d0926593a2d0e7c4250737389efbf8860fd457e3_prof);

        
        $__internal_d64686a5883da7f0384cef000036756226502909fae2c8d9182c2e9391b2e497->leave($__internal_d64686a5883da7f0384cef000036756226502909fae2c8d9182c2e9391b2e497_prof);

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
", "@Framework/Form/number_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
