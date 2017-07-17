<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_903d9d5422dbdddcab784029ea505821681cf97159c1ae32376447b5ad160038 extends Twig_Template
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
        $__internal_4406394ec25f68b6b6684ce4e61f530cd1b124a24d22c6e220238d877166203f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4406394ec25f68b6b6684ce4e61f530cd1b124a24d22c6e220238d877166203f->enter($__internal_4406394ec25f68b6b6684ce4e61f530cd1b124a24d22c6e220238d877166203f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_dda150c59c913ca629c690629afb2fe76179d0cfd1ff4b0f78963e20b1f0b01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda150c59c913ca629c690629afb2fe76179d0cfd1ff4b0f78963e20b1f0b01f->enter($__internal_dda150c59c913ca629c690629afb2fe76179d0cfd1ff4b0f78963e20b1f0b01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4406394ec25f68b6b6684ce4e61f530cd1b124a24d22c6e220238d877166203f->leave($__internal_4406394ec25f68b6b6684ce4e61f530cd1b124a24d22c6e220238d877166203f_prof);

        
        $__internal_dda150c59c913ca629c690629afb2fe76179d0cfd1ff4b0f78963e20b1f0b01f->leave($__internal_dda150c59c913ca629c690629afb2fe76179d0cfd1ff4b0f78963e20b1f0b01f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
