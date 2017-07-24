<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_81501c7813b982a080676df2db072adc7d7ae70e2f0a18287b20f1e78c0fd91e extends Twig_Template
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
        $__internal_3cc40361c82a7def79f62f2e21d0b74b2a485cc3e0ce988f3fb8079312f997d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc40361c82a7def79f62f2e21d0b74b2a485cc3e0ce988f3fb8079312f997d2->enter($__internal_3cc40361c82a7def79f62f2e21d0b74b2a485cc3e0ce988f3fb8079312f997d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b03c891008b607b98890bd27343b41fc96ed0a1529fe84f0c9e33822c4277d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03c891008b607b98890bd27343b41fc96ed0a1529fe84f0c9e33822c4277d52->enter($__internal_b03c891008b607b98890bd27343b41fc96ed0a1529fe84f0c9e33822c4277d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3cc40361c82a7def79f62f2e21d0b74b2a485cc3e0ce988f3fb8079312f997d2->leave($__internal_3cc40361c82a7def79f62f2e21d0b74b2a485cc3e0ce988f3fb8079312f997d2_prof);

        
        $__internal_b03c891008b607b98890bd27343b41fc96ed0a1529fe84f0c9e33822c4277d52->leave($__internal_b03c891008b607b98890bd27343b41fc96ed0a1529fe84f0c9e33822c4277d52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
