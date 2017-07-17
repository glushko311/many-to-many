<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ce042a9be88bcf328af869963d2e5bf40e1997e1b44300dbe2235d30031f3973 extends Twig_Template
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
        $__internal_01ad6d6a6a070cd4b4ded6bf9d1f2686a5e3321b177e5abfe062f30d3b5b06dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ad6d6a6a070cd4b4ded6bf9d1f2686a5e3321b177e5abfe062f30d3b5b06dd->enter($__internal_01ad6d6a6a070cd4b4ded6bf9d1f2686a5e3321b177e5abfe062f30d3b5b06dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_bb7e997c8b814136cedd8a1a467b8b0f969401b63da730ff08644a4d432f2571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7e997c8b814136cedd8a1a467b8b0f969401b63da730ff08644a4d432f2571->enter($__internal_bb7e997c8b814136cedd8a1a467b8b0f969401b63da730ff08644a4d432f2571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_01ad6d6a6a070cd4b4ded6bf9d1f2686a5e3321b177e5abfe062f30d3b5b06dd->leave($__internal_01ad6d6a6a070cd4b4ded6bf9d1f2686a5e3321b177e5abfe062f30d3b5b06dd_prof);

        
        $__internal_bb7e997c8b814136cedd8a1a467b8b0f969401b63da730ff08644a4d432f2571->leave($__internal_bb7e997c8b814136cedd8a1a467b8b0f969401b63da730ff08644a4d432f2571_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
