<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_766bece506b92626592cc12424339d2e3ea76a38f6f2e45d176b691806f14eee extends Twig_Template
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
        $__internal_f6d246ad69aa89c8dfeb66f6c216d92b63494076bc7f95934ac668d672a0fc0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d246ad69aa89c8dfeb66f6c216d92b63494076bc7f95934ac668d672a0fc0d->enter($__internal_f6d246ad69aa89c8dfeb66f6c216d92b63494076bc7f95934ac668d672a0fc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_6780be6da251836cb25b42bd4e4616baf2f89fd9bb2a33a5d54fa4aff223d751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6780be6da251836cb25b42bd4e4616baf2f89fd9bb2a33a5d54fa4aff223d751->enter($__internal_6780be6da251836cb25b42bd4e4616baf2f89fd9bb2a33a5d54fa4aff223d751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f6d246ad69aa89c8dfeb66f6c216d92b63494076bc7f95934ac668d672a0fc0d->leave($__internal_f6d246ad69aa89c8dfeb66f6c216d92b63494076bc7f95934ac668d672a0fc0d_prof);

        
        $__internal_6780be6da251836cb25b42bd4e4616baf2f89fd9bb2a33a5d54fa4aff223d751->leave($__internal_6780be6da251836cb25b42bd4e4616baf2f89fd9bb2a33a5d54fa4aff223d751_prof);

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
