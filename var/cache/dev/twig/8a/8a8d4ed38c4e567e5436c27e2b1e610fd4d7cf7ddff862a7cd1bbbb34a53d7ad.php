<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_eb3b20d91f901e84b4bde81a29aba5342da23c3b81e032ee26d9bfa3c1a0ccdb extends Twig_Template
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
        $__internal_a8255d90b0efe178277ccdd001c85bcec4e4ed6cd554d0f3f34d1fbbc685383d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8255d90b0efe178277ccdd001c85bcec4e4ed6cd554d0f3f34d1fbbc685383d->enter($__internal_a8255d90b0efe178277ccdd001c85bcec4e4ed6cd554d0f3f34d1fbbc685383d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_8dde073817ce65ab4a48df4c7aca8461d20e4dd15094181137ba42d260a4ad5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dde073817ce65ab4a48df4c7aca8461d20e4dd15094181137ba42d260a4ad5b->enter($__internal_8dde073817ce65ab4a48df4c7aca8461d20e4dd15094181137ba42d260a4ad5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a8255d90b0efe178277ccdd001c85bcec4e4ed6cd554d0f3f34d1fbbc685383d->leave($__internal_a8255d90b0efe178277ccdd001c85bcec4e4ed6cd554d0f3f34d1fbbc685383d_prof);

        
        $__internal_8dde073817ce65ab4a48df4c7aca8461d20e4dd15094181137ba42d260a4ad5b->leave($__internal_8dde073817ce65ab4a48df4c7aca8461d20e4dd15094181137ba42d260a4ad5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
