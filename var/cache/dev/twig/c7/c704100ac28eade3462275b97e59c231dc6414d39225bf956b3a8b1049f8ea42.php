<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c6313bd724b3c2c9824d71923c3e0bb1fa94a245891b19e566dc17c2c6151daf extends Twig_Template
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
        $__internal_048bd282416503f538f64fc6cc31ba4136d057e9e2e1d5ab0688f2bb7f848c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048bd282416503f538f64fc6cc31ba4136d057e9e2e1d5ab0688f2bb7f848c64->enter($__internal_048bd282416503f538f64fc6cc31ba4136d057e9e2e1d5ab0688f2bb7f848c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_494f37be066c493c27f1147aa7568259a2c6a946479494c5d08bd008ff22f2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494f37be066c493c27f1147aa7568259a2c6a946479494c5d08bd008ff22f2af->enter($__internal_494f37be066c493c27f1147aa7568259a2c6a946479494c5d08bd008ff22f2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_048bd282416503f538f64fc6cc31ba4136d057e9e2e1d5ab0688f2bb7f848c64->leave($__internal_048bd282416503f538f64fc6cc31ba4136d057e9e2e1d5ab0688f2bb7f848c64_prof);

        
        $__internal_494f37be066c493c27f1147aa7568259a2c6a946479494c5d08bd008ff22f2af->leave($__internal_494f37be066c493c27f1147aa7568259a2c6a946479494c5d08bd008ff22f2af_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
