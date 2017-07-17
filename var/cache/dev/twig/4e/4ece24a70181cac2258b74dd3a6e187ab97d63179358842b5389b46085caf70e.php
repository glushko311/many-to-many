<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_c497d992585fbd81b4907da9a14ca360cd4a1831612a04d96e34adfaa609929c extends Twig_Template
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
        $__internal_f17ab9f4e0220dccbb50e320cd649f6e1e8cd2ff26593b4873afd7df1cbcb77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17ab9f4e0220dccbb50e320cd649f6e1e8cd2ff26593b4873afd7df1cbcb77d->enter($__internal_f17ab9f4e0220dccbb50e320cd649f6e1e8cd2ff26593b4873afd7df1cbcb77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_8b4026f744201903aa6916e2f29067efbbbb362f6b6422c8bf6588ef4f71e878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4026f744201903aa6916e2f29067efbbbb362f6b6422c8bf6588ef4f71e878->enter($__internal_8b4026f744201903aa6916e2f29067efbbbb362f6b6422c8bf6588ef4f71e878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_f17ab9f4e0220dccbb50e320cd649f6e1e8cd2ff26593b4873afd7df1cbcb77d->leave($__internal_f17ab9f4e0220dccbb50e320cd649f6e1e8cd2ff26593b4873afd7df1cbcb77d_prof);

        
        $__internal_8b4026f744201903aa6916e2f29067efbbbb362f6b6422c8bf6588ef4f71e878->leave($__internal_8b4026f744201903aa6916e2f29067efbbbb362f6b6422c8bf6588ef4f71e878_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
