<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_23b215f1195a6999bc3dbb82bb751bf54b02defb073393dd6d44d3ee75baf93e extends Twig_Template
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
        $__internal_0ba779f4a1ef56db1993a0ee6488cdf9a1f50f268ff40c53c4ce08f49f4fbfdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba779f4a1ef56db1993a0ee6488cdf9a1f50f268ff40c53c4ce08f49f4fbfdc->enter($__internal_0ba779f4a1ef56db1993a0ee6488cdf9a1f50f268ff40c53c4ce08f49f4fbfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b83a55bd7489b4d97256ac1344d9f20511abfcec4fe07c008b0e838d5d906a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83a55bd7489b4d97256ac1344d9f20511abfcec4fe07c008b0e838d5d906a28->enter($__internal_b83a55bd7489b4d97256ac1344d9f20511abfcec4fe07c008b0e838d5d906a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0ba779f4a1ef56db1993a0ee6488cdf9a1f50f268ff40c53c4ce08f49f4fbfdc->leave($__internal_0ba779f4a1ef56db1993a0ee6488cdf9a1f50f268ff40c53c4ce08f49f4fbfdc_prof);

        
        $__internal_b83a55bd7489b4d97256ac1344d9f20511abfcec4fe07c008b0e838d5d906a28->leave($__internal_b83a55bd7489b4d97256ac1344d9f20511abfcec4fe07c008b0e838d5d906a28_prof);

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
