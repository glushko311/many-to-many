<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_44363f77f1742e91fa6376396fb6d5b1adb9cc15d75f99e6f054b3acc7f81347 extends Twig_Template
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
        $__internal_8a02af063be1f86dd396b9b58957f1249cb4acffd236125ce3a5e4ef157c79be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a02af063be1f86dd396b9b58957f1249cb4acffd236125ce3a5e4ef157c79be->enter($__internal_8a02af063be1f86dd396b9b58957f1249cb4acffd236125ce3a5e4ef157c79be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e1b0c15b49d27db629dc51a7163259ace6938692857693f5c2505e7d2b2a1763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b0c15b49d27db629dc51a7163259ace6938692857693f5c2505e7d2b2a1763->enter($__internal_e1b0c15b49d27db629dc51a7163259ace6938692857693f5c2505e7d2b2a1763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8a02af063be1f86dd396b9b58957f1249cb4acffd236125ce3a5e4ef157c79be->leave($__internal_8a02af063be1f86dd396b9b58957f1249cb4acffd236125ce3a5e4ef157c79be_prof);

        
        $__internal_e1b0c15b49d27db629dc51a7163259ace6938692857693f5c2505e7d2b2a1763->leave($__internal_e1b0c15b49d27db629dc51a7163259ace6938692857693f5c2505e7d2b2a1763_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
