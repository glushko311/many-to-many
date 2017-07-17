<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0ba50f0a9ecae6da8c7c7e3ef03ec1de97f2eacdccb5d531a08fb9f9d416a15b extends Twig_Template
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
        $__internal_a43898b0d77b4add9047c5c8ab014cc839592a8c3c9408609bcb0ec5b9e8046b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a43898b0d77b4add9047c5c8ab014cc839592a8c3c9408609bcb0ec5b9e8046b->enter($__internal_a43898b0d77b4add9047c5c8ab014cc839592a8c3c9408609bcb0ec5b9e8046b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c53ba3b6226fec19d6f287e2697772f9718fa7bfe254eb78550eec1ea0e587f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53ba3b6226fec19d6f287e2697772f9718fa7bfe254eb78550eec1ea0e587f9->enter($__internal_c53ba3b6226fec19d6f287e2697772f9718fa7bfe254eb78550eec1ea0e587f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a43898b0d77b4add9047c5c8ab014cc839592a8c3c9408609bcb0ec5b9e8046b->leave($__internal_a43898b0d77b4add9047c5c8ab014cc839592a8c3c9408609bcb0ec5b9e8046b_prof);

        
        $__internal_c53ba3b6226fec19d6f287e2697772f9718fa7bfe254eb78550eec1ea0e587f9->leave($__internal_c53ba3b6226fec19d6f287e2697772f9718fa7bfe254eb78550eec1ea0e587f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
