<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_782cbbaf9d8c0bc8a56e5104a4a0e48c306ef66369d6cd89cea424af1d951af5 extends Twig_Template
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
        $__internal_e573d4c1675dab9bd0ff7cfd97a5d8356401634de0bc5b8603261a742839ba7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e573d4c1675dab9bd0ff7cfd97a5d8356401634de0bc5b8603261a742839ba7b->enter($__internal_e573d4c1675dab9bd0ff7cfd97a5d8356401634de0bc5b8603261a742839ba7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_da9e121a7666bff8aebe244592eaaae0f97c6e4de76aea4357d60d3facc6a2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9e121a7666bff8aebe244592eaaae0f97c6e4de76aea4357d60d3facc6a2cb->enter($__internal_da9e121a7666bff8aebe244592eaaae0f97c6e4de76aea4357d60d3facc6a2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e573d4c1675dab9bd0ff7cfd97a5d8356401634de0bc5b8603261a742839ba7b->leave($__internal_e573d4c1675dab9bd0ff7cfd97a5d8356401634de0bc5b8603261a742839ba7b_prof);

        
        $__internal_da9e121a7666bff8aebe244592eaaae0f97c6e4de76aea4357d60d3facc6a2cb->leave($__internal_da9e121a7666bff8aebe244592eaaae0f97c6e4de76aea4357d60d3facc6a2cb_prof);

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
", "@Framework/Form/form_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
