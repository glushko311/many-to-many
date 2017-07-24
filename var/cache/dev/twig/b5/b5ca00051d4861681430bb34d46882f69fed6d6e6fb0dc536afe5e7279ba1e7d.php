<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_84f042aa51daa1e7bf154b3daba45fa2a2e305e0c6de8a10079e9eaeb179ba4f extends Twig_Template
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
        $__internal_8b6e9eff591ff950d82047b132402f6d66bd5a426df68f4533c6aef096330014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6e9eff591ff950d82047b132402f6d66bd5a426df68f4533c6aef096330014->enter($__internal_8b6e9eff591ff950d82047b132402f6d66bd5a426df68f4533c6aef096330014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c29e76782ea21096c24026bb491a11e89f25ba542b56fda9f24265724507dc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29e76782ea21096c24026bb491a11e89f25ba542b56fda9f24265724507dc24->enter($__internal_c29e76782ea21096c24026bb491a11e89f25ba542b56fda9f24265724507dc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8b6e9eff591ff950d82047b132402f6d66bd5a426df68f4533c6aef096330014->leave($__internal_8b6e9eff591ff950d82047b132402f6d66bd5a426df68f4533c6aef096330014_prof);

        
        $__internal_c29e76782ea21096c24026bb491a11e89f25ba542b56fda9f24265724507dc24->leave($__internal_c29e76782ea21096c24026bb491a11e89f25ba542b56fda9f24265724507dc24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
