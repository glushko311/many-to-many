<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6aed9fe7618ecc79544c9c957a81eb85639cb0d7edabea7c2662fc0a379ec73b extends Twig_Template
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
        $__internal_55a0c0cb2a0967a300db43554c07b60e1e2308be0df38bba223dbe8e120a25a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a0c0cb2a0967a300db43554c07b60e1e2308be0df38bba223dbe8e120a25a9->enter($__internal_55a0c0cb2a0967a300db43554c07b60e1e2308be0df38bba223dbe8e120a25a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_25ef3f415cb5bef2ca3cdfab9b76c3a56d2f1afb0a1a2e9407ba55587daed2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ef3f415cb5bef2ca3cdfab9b76c3a56d2f1afb0a1a2e9407ba55587daed2f6->enter($__internal_25ef3f415cb5bef2ca3cdfab9b76c3a56d2f1afb0a1a2e9407ba55587daed2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_55a0c0cb2a0967a300db43554c07b60e1e2308be0df38bba223dbe8e120a25a9->leave($__internal_55a0c0cb2a0967a300db43554c07b60e1e2308be0df38bba223dbe8e120a25a9_prof);

        
        $__internal_25ef3f415cb5bef2ca3cdfab9b76c3a56d2f1afb0a1a2e9407ba55587daed2f6->leave($__internal_25ef3f415cb5bef2ca3cdfab9b76c3a56d2f1afb0a1a2e9407ba55587daed2f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
