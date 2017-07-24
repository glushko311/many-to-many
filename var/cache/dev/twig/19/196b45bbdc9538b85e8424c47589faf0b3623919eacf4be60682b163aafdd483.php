<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c01f4fa22b4f5157eeafeee95fcee71384e1c9c5e59edd33d0bdb817d4ca5374 extends Twig_Template
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
        $__internal_c1fb9bd860bcd99d9f1ff0995d3baf0616aef8752b58047fdcb0fdfa7dd6c6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1fb9bd860bcd99d9f1ff0995d3baf0616aef8752b58047fdcb0fdfa7dd6c6b8->enter($__internal_c1fb9bd860bcd99d9f1ff0995d3baf0616aef8752b58047fdcb0fdfa7dd6c6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7ecbe2c4a4756e4b0dd57d6db6fe1697001c1097c90b2884f8e8a5f57c2e7b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecbe2c4a4756e4b0dd57d6db6fe1697001c1097c90b2884f8e8a5f57c2e7b9e->enter($__internal_7ecbe2c4a4756e4b0dd57d6db6fe1697001c1097c90b2884f8e8a5f57c2e7b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c1fb9bd860bcd99d9f1ff0995d3baf0616aef8752b58047fdcb0fdfa7dd6c6b8->leave($__internal_c1fb9bd860bcd99d9f1ff0995d3baf0616aef8752b58047fdcb0fdfa7dd6c6b8_prof);

        
        $__internal_7ecbe2c4a4756e4b0dd57d6db6fe1697001c1097c90b2884f8e8a5f57c2e7b9e->leave($__internal_7ecbe2c4a4756e4b0dd57d6db6fe1697001c1097c90b2884f8e8a5f57c2e7b9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
