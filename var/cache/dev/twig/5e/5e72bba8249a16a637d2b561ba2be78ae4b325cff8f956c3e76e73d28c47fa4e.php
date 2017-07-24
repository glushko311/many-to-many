<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b1019208c8a2f4fbfeb157404a26557e2cc0635258021c7776ac008bc82dbd6a extends Twig_Template
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
        $__internal_066a7c857b07cf0f4bf24e9de51afba9fbc5e060b31bafedd7ece08f7948ac68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066a7c857b07cf0f4bf24e9de51afba9fbc5e060b31bafedd7ece08f7948ac68->enter($__internal_066a7c857b07cf0f4bf24e9de51afba9fbc5e060b31bafedd7ece08f7948ac68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_81e2852bae3b0e149bcc393ae92c19a44798536ec8e5ca3a7ca87fa89d5e555c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e2852bae3b0e149bcc393ae92c19a44798536ec8e5ca3a7ca87fa89d5e555c->enter($__internal_81e2852bae3b0e149bcc393ae92c19a44798536ec8e5ca3a7ca87fa89d5e555c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_066a7c857b07cf0f4bf24e9de51afba9fbc5e060b31bafedd7ece08f7948ac68->leave($__internal_066a7c857b07cf0f4bf24e9de51afba9fbc5e060b31bafedd7ece08f7948ac68_prof);

        
        $__internal_81e2852bae3b0e149bcc393ae92c19a44798536ec8e5ca3a7ca87fa89d5e555c->leave($__internal_81e2852bae3b0e149bcc393ae92c19a44798536ec8e5ca3a7ca87fa89d5e555c_prof);

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
