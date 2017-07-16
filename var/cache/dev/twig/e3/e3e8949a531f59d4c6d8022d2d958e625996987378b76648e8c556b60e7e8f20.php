<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e67b04b27d85034815adc5dcbb3d99e0ce258660c19d13aaf99031addd50bd1b extends Twig_Template
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
        $__internal_ae56d9841034e3ab9bf2b8020da5a618959f88e24ca2de126009c4708bb1e6a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae56d9841034e3ab9bf2b8020da5a618959f88e24ca2de126009c4708bb1e6a8->enter($__internal_ae56d9841034e3ab9bf2b8020da5a618959f88e24ca2de126009c4708bb1e6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_649c582913eb38c119a24fccdf3e040f180692b1d703529e81751ed9dff73154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649c582913eb38c119a24fccdf3e040f180692b1d703529e81751ed9dff73154->enter($__internal_649c582913eb38c119a24fccdf3e040f180692b1d703529e81751ed9dff73154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ae56d9841034e3ab9bf2b8020da5a618959f88e24ca2de126009c4708bb1e6a8->leave($__internal_ae56d9841034e3ab9bf2b8020da5a618959f88e24ca2de126009c4708bb1e6a8_prof);

        
        $__internal_649c582913eb38c119a24fccdf3e040f180692b1d703529e81751ed9dff73154->leave($__internal_649c582913eb38c119a24fccdf3e040f180692b1d703529e81751ed9dff73154_prof);

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
", "@Framework/Form/hidden_row.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
