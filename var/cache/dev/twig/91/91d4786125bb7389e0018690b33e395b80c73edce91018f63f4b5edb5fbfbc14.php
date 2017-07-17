<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_82065a5001944024c0a6986167041daa4e7858d7009564b5117d8498335295f2 extends Twig_Template
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
        $__internal_0620a1d96c0eed1e0c3d240aa3ddef2f18f16bcd12e31f75d21aba807b993486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0620a1d96c0eed1e0c3d240aa3ddef2f18f16bcd12e31f75d21aba807b993486->enter($__internal_0620a1d96c0eed1e0c3d240aa3ddef2f18f16bcd12e31f75d21aba807b993486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b761a75ec6b75459e2e01b6bb651ff891bd789cb7fc8771663bd1084f700fc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b761a75ec6b75459e2e01b6bb651ff891bd789cb7fc8771663bd1084f700fc0f->enter($__internal_b761a75ec6b75459e2e01b6bb651ff891bd789cb7fc8771663bd1084f700fc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_0620a1d96c0eed1e0c3d240aa3ddef2f18f16bcd12e31f75d21aba807b993486->leave($__internal_0620a1d96c0eed1e0c3d240aa3ddef2f18f16bcd12e31f75d21aba807b993486_prof);

        
        $__internal_b761a75ec6b75459e2e01b6bb651ff891bd789cb7fc8771663bd1084f700fc0f->leave($__internal_b761a75ec6b75459e2e01b6bb651ff891bd789cb7fc8771663bd1084f700fc0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
