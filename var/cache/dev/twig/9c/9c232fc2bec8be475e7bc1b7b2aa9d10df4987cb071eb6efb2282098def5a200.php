<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_34fb5ba3c2f9d5e28e5dc25b54d5313829ca947ac6c515392fd3970293f53e78 extends Twig_Template
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
        $__internal_6e4ec681f513540d26269a53922ee0801207bfd7f8ca713bca33617d8ababae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4ec681f513540d26269a53922ee0801207bfd7f8ca713bca33617d8ababae0->enter($__internal_6e4ec681f513540d26269a53922ee0801207bfd7f8ca713bca33617d8ababae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5ff80f0d192fd36e1925472cf5d2cbd46e8bb3fb3923278c326cf5afccad7231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff80f0d192fd36e1925472cf5d2cbd46e8bb3fb3923278c326cf5afccad7231->enter($__internal_5ff80f0d192fd36e1925472cf5d2cbd46e8bb3fb3923278c326cf5afccad7231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6e4ec681f513540d26269a53922ee0801207bfd7f8ca713bca33617d8ababae0->leave($__internal_6e4ec681f513540d26269a53922ee0801207bfd7f8ca713bca33617d8ababae0_prof);

        
        $__internal_5ff80f0d192fd36e1925472cf5d2cbd46e8bb3fb3923278c326cf5afccad7231->leave($__internal_5ff80f0d192fd36e1925472cf5d2cbd46e8bb3fb3923278c326cf5afccad7231_prof);

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
