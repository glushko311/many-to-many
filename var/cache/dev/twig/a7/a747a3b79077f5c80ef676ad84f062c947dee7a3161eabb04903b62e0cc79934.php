<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ecca138f915753b781b9103e2d60b405604308efcf7d225f1d15c93875debd2d extends Twig_Template
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
        $__internal_79beb73cd43c8fb7572bdacea09817481db0ae73cc8e72fb2a8df9b584b01911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79beb73cd43c8fb7572bdacea09817481db0ae73cc8e72fb2a8df9b584b01911->enter($__internal_79beb73cd43c8fb7572bdacea09817481db0ae73cc8e72fb2a8df9b584b01911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3d0dfe342df469c26e082a7a273a7886b88e8a371017293d322f31ba85496cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0dfe342df469c26e082a7a273a7886b88e8a371017293d322f31ba85496cc4->enter($__internal_3d0dfe342df469c26e082a7a273a7886b88e8a371017293d322f31ba85496cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_79beb73cd43c8fb7572bdacea09817481db0ae73cc8e72fb2a8df9b584b01911->leave($__internal_79beb73cd43c8fb7572bdacea09817481db0ae73cc8e72fb2a8df9b584b01911_prof);

        
        $__internal_3d0dfe342df469c26e082a7a273a7886b88e8a371017293d322f31ba85496cc4->leave($__internal_3d0dfe342df469c26e082a7a273a7886b88e8a371017293d322f31ba85496cc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
