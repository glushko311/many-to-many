<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_6730e20c303b6ca5767192e40bc900cff4f3210edf5d62275fd8e5040947e6e3 extends Twig_Template
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
        $__internal_a53ca73e2a5f308f1aaba668ca2fc25144d8cf02ace89e0a99a4e47594e63e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53ca73e2a5f308f1aaba668ca2fc25144d8cf02ace89e0a99a4e47594e63e2d->enter($__internal_a53ca73e2a5f308f1aaba668ca2fc25144d8cf02ace89e0a99a4e47594e63e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_8f8e14f5fa7855425801779fad7bb42742591492c27fbbc73dcfd2ea5cd8f5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8e14f5fa7855425801779fad7bb42742591492c27fbbc73dcfd2ea5cd8f5e7->enter($__internal_8f8e14f5fa7855425801779fad7bb42742591492c27fbbc73dcfd2ea5cd8f5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a53ca73e2a5f308f1aaba668ca2fc25144d8cf02ace89e0a99a4e47594e63e2d->leave($__internal_a53ca73e2a5f308f1aaba668ca2fc25144d8cf02ace89e0a99a4e47594e63e2d_prof);

        
        $__internal_8f8e14f5fa7855425801779fad7bb42742591492c27fbbc73dcfd2ea5cd8f5e7->leave($__internal_8f8e14f5fa7855425801779fad7bb42742591492c27fbbc73dcfd2ea5cd8f5e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
