<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_dab9c6986a7c13359318b45d96c8b5dd2cd2b096ef45d208707f587828d42b1d extends Twig_Template
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
        $__internal_ef08dec9a1df029cd9e6e83d02a1ea331abea593b752d9ef4c34d55c7621a511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef08dec9a1df029cd9e6e83d02a1ea331abea593b752d9ef4c34d55c7621a511->enter($__internal_ef08dec9a1df029cd9e6e83d02a1ea331abea593b752d9ef4c34d55c7621a511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_9caced6f8d53c5d16b4a82fbd124759fe2eb5e151c1a02298f99cf7b2cb25656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9caced6f8d53c5d16b4a82fbd124759fe2eb5e151c1a02298f99cf7b2cb25656->enter($__internal_9caced6f8d53c5d16b4a82fbd124759fe2eb5e151c1a02298f99cf7b2cb25656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ef08dec9a1df029cd9e6e83d02a1ea331abea593b752d9ef4c34d55c7621a511->leave($__internal_ef08dec9a1df029cd9e6e83d02a1ea331abea593b752d9ef4c34d55c7621a511_prof);

        
        $__internal_9caced6f8d53c5d16b4a82fbd124759fe2eb5e151c1a02298f99cf7b2cb25656->leave($__internal_9caced6f8d53c5d16b4a82fbd124759fe2eb5e151c1a02298f99cf7b2cb25656_prof);

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
