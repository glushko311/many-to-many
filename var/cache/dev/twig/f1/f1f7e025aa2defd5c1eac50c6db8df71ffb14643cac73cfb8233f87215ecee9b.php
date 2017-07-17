<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1e57b692360edbdff34440288be79d2c57ac58122eb5a11c38331da3fbf7b074 extends Twig_Template
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
        $__internal_11480a277a79f70465bfa85fbe4976e898d514fc84e46d5705408a14c69cfb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11480a277a79f70465bfa85fbe4976e898d514fc84e46d5705408a14c69cfb39->enter($__internal_11480a277a79f70465bfa85fbe4976e898d514fc84e46d5705408a14c69cfb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_882f9ab5d59c2ae29dc629a5c396ec4896eb6f50348f448b7dcd98d9f7d467bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882f9ab5d59c2ae29dc629a5c396ec4896eb6f50348f448b7dcd98d9f7d467bf->enter($__internal_882f9ab5d59c2ae29dc629a5c396ec4896eb6f50348f448b7dcd98d9f7d467bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_11480a277a79f70465bfa85fbe4976e898d514fc84e46d5705408a14c69cfb39->leave($__internal_11480a277a79f70465bfa85fbe4976e898d514fc84e46d5705408a14c69cfb39_prof);

        
        $__internal_882f9ab5d59c2ae29dc629a5c396ec4896eb6f50348f448b7dcd98d9f7d467bf->leave($__internal_882f9ab5d59c2ae29dc629a5c396ec4896eb6f50348f448b7dcd98d9f7d467bf_prof);

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
