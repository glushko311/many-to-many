<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5b7a428b876dc239c65ac6866387acd868f21bb858b0b992165305ae9628bc0d extends Twig_Template
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
        $__internal_127cb23d5737382910d88a2c2fd7eade9fee4401367e5d426794acfdefe41449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127cb23d5737382910d88a2c2fd7eade9fee4401367e5d426794acfdefe41449->enter($__internal_127cb23d5737382910d88a2c2fd7eade9fee4401367e5d426794acfdefe41449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_56f5ceafcda40fb4b45d44cbc361571516785dd5e78c49ec5b1200acc0077482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f5ceafcda40fb4b45d44cbc361571516785dd5e78c49ec5b1200acc0077482->enter($__internal_56f5ceafcda40fb4b45d44cbc361571516785dd5e78c49ec5b1200acc0077482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_127cb23d5737382910d88a2c2fd7eade9fee4401367e5d426794acfdefe41449->leave($__internal_127cb23d5737382910d88a2c2fd7eade9fee4401367e5d426794acfdefe41449_prof);

        
        $__internal_56f5ceafcda40fb4b45d44cbc361571516785dd5e78c49ec5b1200acc0077482->leave($__internal_56f5ceafcda40fb4b45d44cbc361571516785dd5e78c49ec5b1200acc0077482_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
