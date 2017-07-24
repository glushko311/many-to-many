<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_332ea9512c6441af1c51ee214d946da64a2f690d2bf16f834d117ab563cdf927 extends Twig_Template
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
        $__internal_b0813aaf26329ab9ed17f62cd392a474a64eee488fe119367fc908647f393bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0813aaf26329ab9ed17f62cd392a474a64eee488fe119367fc908647f393bf4->enter($__internal_b0813aaf26329ab9ed17f62cd392a474a64eee488fe119367fc908647f393bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_cd527a3ad39d296ac119864e79404d0e18daa9c21f7733196e4126955292c182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd527a3ad39d296ac119864e79404d0e18daa9c21f7733196e4126955292c182->enter($__internal_cd527a3ad39d296ac119864e79404d0e18daa9c21f7733196e4126955292c182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b0813aaf26329ab9ed17f62cd392a474a64eee488fe119367fc908647f393bf4->leave($__internal_b0813aaf26329ab9ed17f62cd392a474a64eee488fe119367fc908647f393bf4_prof);

        
        $__internal_cd527a3ad39d296ac119864e79404d0e18daa9c21f7733196e4126955292c182->leave($__internal_cd527a3ad39d296ac119864e79404d0e18daa9c21f7733196e4126955292c182_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
