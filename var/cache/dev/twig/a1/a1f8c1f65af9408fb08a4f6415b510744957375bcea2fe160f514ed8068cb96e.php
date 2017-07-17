<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_44f1347b3d3724ab7a6ab600847697282fbae0357f7c742b2aaf61aac96d745e extends Twig_Template
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
        $__internal_96167ac9714457dff822c0dba2d3d08dcb4911605b859167bd9137ea75cd91c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96167ac9714457dff822c0dba2d3d08dcb4911605b859167bd9137ea75cd91c0->enter($__internal_96167ac9714457dff822c0dba2d3d08dcb4911605b859167bd9137ea75cd91c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a3d0e3627dba85222c4c8cdc3783bd2552454bec9553c4654768e43fa3891034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d0e3627dba85222c4c8cdc3783bd2552454bec9553c4654768e43fa3891034->enter($__internal_a3d0e3627dba85222c4c8cdc3783bd2552454bec9553c4654768e43fa3891034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_96167ac9714457dff822c0dba2d3d08dcb4911605b859167bd9137ea75cd91c0->leave($__internal_96167ac9714457dff822c0dba2d3d08dcb4911605b859167bd9137ea75cd91c0_prof);

        
        $__internal_a3d0e3627dba85222c4c8cdc3783bd2552454bec9553c4654768e43fa3891034->leave($__internal_a3d0e3627dba85222c4c8cdc3783bd2552454bec9553c4654768e43fa3891034_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
