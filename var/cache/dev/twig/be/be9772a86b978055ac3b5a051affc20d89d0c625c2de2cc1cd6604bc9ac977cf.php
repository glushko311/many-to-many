<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d8a2fcefa22a19e345044a6640f31c01276a12d3ce846a5f46486421429110e4 extends Twig_Template
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
        $__internal_84f1aee720389153dbbc6f0c57e4f611e5bd1994bc8fff33902dac9b6eff5db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f1aee720389153dbbc6f0c57e4f611e5bd1994bc8fff33902dac9b6eff5db4->enter($__internal_84f1aee720389153dbbc6f0c57e4f611e5bd1994bc8fff33902dac9b6eff5db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c6beb2920d3a37e74784af374439d68e52d723c77e100f42d76867c12a665a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6beb2920d3a37e74784af374439d68e52d723c77e100f42d76867c12a665a31->enter($__internal_c6beb2920d3a37e74784af374439d68e52d723c77e100f42d76867c12a665a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_84f1aee720389153dbbc6f0c57e4f611e5bd1994bc8fff33902dac9b6eff5db4->leave($__internal_84f1aee720389153dbbc6f0c57e4f611e5bd1994bc8fff33902dac9b6eff5db4_prof);

        
        $__internal_c6beb2920d3a37e74784af374439d68e52d723c77e100f42d76867c12a665a31->leave($__internal_c6beb2920d3a37e74784af374439d68e52d723c77e100f42d76867c12a665a31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
