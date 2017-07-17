<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_2450752214f40c3810e6a12eba8eb3b69b91b8003413fe85e7e5485899749437 extends Twig_Template
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
        $__internal_5413fb84dfd33e220bb8f9523b972f28fecd0e832d91732eebe6d2fa07e9719a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5413fb84dfd33e220bb8f9523b972f28fecd0e832d91732eebe6d2fa07e9719a->enter($__internal_5413fb84dfd33e220bb8f9523b972f28fecd0e832d91732eebe6d2fa07e9719a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9aed6959501df3297b67c924b6a6cea69b386e36b83b5a3048f1e8054bb2259d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aed6959501df3297b67c924b6a6cea69b386e36b83b5a3048f1e8054bb2259d->enter($__internal_9aed6959501df3297b67c924b6a6cea69b386e36b83b5a3048f1e8054bb2259d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5413fb84dfd33e220bb8f9523b972f28fecd0e832d91732eebe6d2fa07e9719a->leave($__internal_5413fb84dfd33e220bb8f9523b972f28fecd0e832d91732eebe6d2fa07e9719a_prof);

        
        $__internal_9aed6959501df3297b67c924b6a6cea69b386e36b83b5a3048f1e8054bb2259d->leave($__internal_9aed6959501df3297b67c924b6a6cea69b386e36b83b5a3048f1e8054bb2259d_prof);

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
