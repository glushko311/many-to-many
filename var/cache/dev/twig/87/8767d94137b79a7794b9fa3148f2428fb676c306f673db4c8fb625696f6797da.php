<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_826090777d5047c8c1cce47b9e21a0ae5c638fa0a884c6ffb3b5629263c00417 extends Twig_Template
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
        $__internal_c4dc8e50e3ce0fe65e6046889867914b1482cf03dc54c931fb54811498342a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4dc8e50e3ce0fe65e6046889867914b1482cf03dc54c931fb54811498342a40->enter($__internal_c4dc8e50e3ce0fe65e6046889867914b1482cf03dc54c931fb54811498342a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ca22ddf19cafa33fc71dc8bf10976e19fd30bef83acc0f45efed6d65b9691244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca22ddf19cafa33fc71dc8bf10976e19fd30bef83acc0f45efed6d65b9691244->enter($__internal_ca22ddf19cafa33fc71dc8bf10976e19fd30bef83acc0f45efed6d65b9691244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c4dc8e50e3ce0fe65e6046889867914b1482cf03dc54c931fb54811498342a40->leave($__internal_c4dc8e50e3ce0fe65e6046889867914b1482cf03dc54c931fb54811498342a40_prof);

        
        $__internal_ca22ddf19cafa33fc71dc8bf10976e19fd30bef83acc0f45efed6d65b9691244->leave($__internal_ca22ddf19cafa33fc71dc8bf10976e19fd30bef83acc0f45efed6d65b9691244_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
