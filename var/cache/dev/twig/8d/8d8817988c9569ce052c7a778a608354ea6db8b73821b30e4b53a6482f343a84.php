<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b69d3aac1e177c390d60dbcd842202ea954b1b0a96cb1292a0ec114cd10046ed extends Twig_Template
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
        $__internal_4f076119937dde5b0b8b26619995ec46210ee6249dc0dd8d757bac46ea69ca9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f076119937dde5b0b8b26619995ec46210ee6249dc0dd8d757bac46ea69ca9e->enter($__internal_4f076119937dde5b0b8b26619995ec46210ee6249dc0dd8d757bac46ea69ca9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9f2d713fb3a6f52d918f43342233e1f6f0f818f63eb7e224e5588776081a81b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2d713fb3a6f52d918f43342233e1f6f0f818f63eb7e224e5588776081a81b1->enter($__internal_9f2d713fb3a6f52d918f43342233e1f6f0f818f63eb7e224e5588776081a81b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4f076119937dde5b0b8b26619995ec46210ee6249dc0dd8d757bac46ea69ca9e->leave($__internal_4f076119937dde5b0b8b26619995ec46210ee6249dc0dd8d757bac46ea69ca9e_prof);

        
        $__internal_9f2d713fb3a6f52d918f43342233e1f6f0f818f63eb7e224e5588776081a81b1->leave($__internal_9f2d713fb3a6f52d918f43342233e1f6f0f818f63eb7e224e5588776081a81b1_prof);

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
", "@Framework/Form/container_attributes.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
