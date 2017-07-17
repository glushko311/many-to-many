<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f6f678b651361c5ecac8b269a83f4f647be573bf2fc5ec7d006a0b2de14f8614 extends Twig_Template
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
        $__internal_895d6505a354b40139c9b4957836c73cb6cd8446a080fc5e47a0d05894905e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895d6505a354b40139c9b4957836c73cb6cd8446a080fc5e47a0d05894905e1d->enter($__internal_895d6505a354b40139c9b4957836c73cb6cd8446a080fc5e47a0d05894905e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e00f41ce05a608d8292932700bee60a047b80899f00b13a78a36f8414752d44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00f41ce05a608d8292932700bee60a047b80899f00b13a78a36f8414752d44d->enter($__internal_e00f41ce05a608d8292932700bee60a047b80899f00b13a78a36f8414752d44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_895d6505a354b40139c9b4957836c73cb6cd8446a080fc5e47a0d05894905e1d->leave($__internal_895d6505a354b40139c9b4957836c73cb6cd8446a080fc5e47a0d05894905e1d_prof);

        
        $__internal_e00f41ce05a608d8292932700bee60a047b80899f00b13a78a36f8414752d44d->leave($__internal_e00f41ce05a608d8292932700bee60a047b80899f00b13a78a36f8414752d44d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
