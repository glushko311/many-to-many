<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b88cca597c9bc1fd69d37a2c6fd2b9ffc5bb24d32241b3084a6777afb84200e4 extends Twig_Template
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
        $__internal_6b97405334682bd35890b7c79f5889af8fa98a1a572622e7362b8ec42be69e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b97405334682bd35890b7c79f5889af8fa98a1a572622e7362b8ec42be69e66->enter($__internal_6b97405334682bd35890b7c79f5889af8fa98a1a572622e7362b8ec42be69e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e21f3dd9dfc00eed987451aea4870a00d6417ac979a5d61b4c27fef61b80ef26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21f3dd9dfc00eed987451aea4870a00d6417ac979a5d61b4c27fef61b80ef26->enter($__internal_e21f3dd9dfc00eed987451aea4870a00d6417ac979a5d61b4c27fef61b80ef26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6b97405334682bd35890b7c79f5889af8fa98a1a572622e7362b8ec42be69e66->leave($__internal_6b97405334682bd35890b7c79f5889af8fa98a1a572622e7362b8ec42be69e66_prof);

        
        $__internal_e21f3dd9dfc00eed987451aea4870a00d6417ac979a5d61b4c27fef61b80ef26->leave($__internal_e21f3dd9dfc00eed987451aea4870a00d6417ac979a5d61b4c27fef61b80ef26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
