<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fac33de9638f1e4d5124aaadf964780d232476831c4ac7741695659c524115e0 extends Twig_Template
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
        $__internal_de18845ed583e52bf39269a102c43641b5e82c8e9de01f0c0bc8dc16667e1a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de18845ed583e52bf39269a102c43641b5e82c8e9de01f0c0bc8dc16667e1a29->enter($__internal_de18845ed583e52bf39269a102c43641b5e82c8e9de01f0c0bc8dc16667e1a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_3b4b0d1a2cb8dd8c104da4d498de11c34a6c199bb8dd52bebf4bfad3531c58d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4b0d1a2cb8dd8c104da4d498de11c34a6c199bb8dd52bebf4bfad3531c58d5->enter($__internal_3b4b0d1a2cb8dd8c104da4d498de11c34a6c199bb8dd52bebf4bfad3531c58d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_de18845ed583e52bf39269a102c43641b5e82c8e9de01f0c0bc8dc16667e1a29->leave($__internal_de18845ed583e52bf39269a102c43641b5e82c8e9de01f0c0bc8dc16667e1a29_prof);

        
        $__internal_3b4b0d1a2cb8dd8c104da4d498de11c34a6c199bb8dd52bebf4bfad3531c58d5->leave($__internal_3b4b0d1a2cb8dd8c104da4d498de11c34a6c199bb8dd52bebf4bfad3531c58d5_prof);

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
