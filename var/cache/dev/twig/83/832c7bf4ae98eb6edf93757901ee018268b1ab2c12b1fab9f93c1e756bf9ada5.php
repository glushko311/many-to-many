<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e05b37908227b62b73859d94ddc9ea81c59dadae90cd6231ccdb07c87b2887f9 extends Twig_Template
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
        $__internal_9e254904d6912968e1abe6613a3947296e75b3ffa4723ad8b76363822fab3a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e254904d6912968e1abe6613a3947296e75b3ffa4723ad8b76363822fab3a7c->enter($__internal_9e254904d6912968e1abe6613a3947296e75b3ffa4723ad8b76363822fab3a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_23c27c94d7ee8533608d2829a66647ba250e177213d977e2721b2cd6e9d2a02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c27c94d7ee8533608d2829a66647ba250e177213d977e2721b2cd6e9d2a02b->enter($__internal_23c27c94d7ee8533608d2829a66647ba250e177213d977e2721b2cd6e9d2a02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9e254904d6912968e1abe6613a3947296e75b3ffa4723ad8b76363822fab3a7c->leave($__internal_9e254904d6912968e1abe6613a3947296e75b3ffa4723ad8b76363822fab3a7c_prof);

        
        $__internal_23c27c94d7ee8533608d2829a66647ba250e177213d977e2721b2cd6e9d2a02b->leave($__internal_23c27c94d7ee8533608d2829a66647ba250e177213d977e2721b2cd6e9d2a02b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
