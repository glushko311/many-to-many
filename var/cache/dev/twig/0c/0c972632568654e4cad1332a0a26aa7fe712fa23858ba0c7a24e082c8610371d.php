<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_704702142ea0d607bab74929d578e1a005ab9c393daf0eb232590e34496c3e40 extends Twig_Template
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
        $__internal_7d7731da6b397dcd2d83521529960a757cc2f4bdeecd5025db9fae2d85f14745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7731da6b397dcd2d83521529960a757cc2f4bdeecd5025db9fae2d85f14745->enter($__internal_7d7731da6b397dcd2d83521529960a757cc2f4bdeecd5025db9fae2d85f14745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_9ab03e7cd23b5436ae21ab4dad363142331312fa856613021c68980071925ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab03e7cd23b5436ae21ab4dad363142331312fa856613021c68980071925ea3->enter($__internal_9ab03e7cd23b5436ae21ab4dad363142331312fa856613021c68980071925ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7d7731da6b397dcd2d83521529960a757cc2f4bdeecd5025db9fae2d85f14745->leave($__internal_7d7731da6b397dcd2d83521529960a757cc2f4bdeecd5025db9fae2d85f14745_prof);

        
        $__internal_9ab03e7cd23b5436ae21ab4dad363142331312fa856613021c68980071925ea3->leave($__internal_9ab03e7cd23b5436ae21ab4dad363142331312fa856613021c68980071925ea3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
