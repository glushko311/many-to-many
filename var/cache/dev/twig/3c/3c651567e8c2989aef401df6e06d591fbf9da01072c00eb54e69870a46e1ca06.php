<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_dcff7e83579373eec1446f63b2f89ab784e45d52a6bef75c246c79126d6f7545 extends Twig_Template
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
        $__internal_bd4a6880e96b06f442423a5f1d6c8907963ff3b60f214d5c62bd2f5a95c45d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4a6880e96b06f442423a5f1d6c8907963ff3b60f214d5c62bd2f5a95c45d32->enter($__internal_bd4a6880e96b06f442423a5f1d6c8907963ff3b60f214d5c62bd2f5a95c45d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5375a7ce0132c25c1eefb39a506c2df6e77bb9b5ceda793d1fcf126461a706cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5375a7ce0132c25c1eefb39a506c2df6e77bb9b5ceda793d1fcf126461a706cb->enter($__internal_5375a7ce0132c25c1eefb39a506c2df6e77bb9b5ceda793d1fcf126461a706cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bd4a6880e96b06f442423a5f1d6c8907963ff3b60f214d5c62bd2f5a95c45d32->leave($__internal_bd4a6880e96b06f442423a5f1d6c8907963ff3b60f214d5c62bd2f5a95c45d32_prof);

        
        $__internal_5375a7ce0132c25c1eefb39a506c2df6e77bb9b5ceda793d1fcf126461a706cb->leave($__internal_5375a7ce0132c25c1eefb39a506c2df6e77bb9b5ceda793d1fcf126461a706cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
