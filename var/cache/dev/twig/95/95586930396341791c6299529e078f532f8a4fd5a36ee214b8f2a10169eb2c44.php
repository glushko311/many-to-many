<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_936e2fdea9b49aedbe7e013bfe49101252996c805e2cd44d8c8cb975fe863588 extends Twig_Template
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
        $__internal_e03ff0e83c290f42dbe0fc17189d761530cf8dcfedb19f654d502d8f2666b773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03ff0e83c290f42dbe0fc17189d761530cf8dcfedb19f654d502d8f2666b773->enter($__internal_e03ff0e83c290f42dbe0fc17189d761530cf8dcfedb19f654d502d8f2666b773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_456176650d21c7962df4bda76a990ba90b0d3fe3343c35c4dd30ccbe93c65880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456176650d21c7962df4bda76a990ba90b0d3fe3343c35c4dd30ccbe93c65880->enter($__internal_456176650d21c7962df4bda76a990ba90b0d3fe3343c35c4dd30ccbe93c65880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e03ff0e83c290f42dbe0fc17189d761530cf8dcfedb19f654d502d8f2666b773->leave($__internal_e03ff0e83c290f42dbe0fc17189d761530cf8dcfedb19f654d502d8f2666b773_prof);

        
        $__internal_456176650d21c7962df4bda76a990ba90b0d3fe3343c35c4dd30ccbe93c65880->leave($__internal_456176650d21c7962df4bda76a990ba90b0d3fe3343c35c4dd30ccbe93c65880_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
