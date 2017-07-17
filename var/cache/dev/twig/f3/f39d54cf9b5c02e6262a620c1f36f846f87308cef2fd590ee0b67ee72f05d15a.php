<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e151e7e47a5f9fc23c4e37b207db79d47ec1785e6dff4867020327e4ad8fd9c4 extends Twig_Template
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
        $__internal_96be567f381edc24b50ae0187a3baaaab2e0bf9e49624f91ee65f13e9ef50ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96be567f381edc24b50ae0187a3baaaab2e0bf9e49624f91ee65f13e9ef50ba9->enter($__internal_96be567f381edc24b50ae0187a3baaaab2e0bf9e49624f91ee65f13e9ef50ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_cfb51931ee806d21e25cd4e732eceb5ef69ba16890b726540dec9c70b439e1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb51931ee806d21e25cd4e732eceb5ef69ba16890b726540dec9c70b439e1c1->enter($__internal_cfb51931ee806d21e25cd4e732eceb5ef69ba16890b726540dec9c70b439e1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_96be567f381edc24b50ae0187a3baaaab2e0bf9e49624f91ee65f13e9ef50ba9->leave($__internal_96be567f381edc24b50ae0187a3baaaab2e0bf9e49624f91ee65f13e9ef50ba9_prof);

        
        $__internal_cfb51931ee806d21e25cd4e732eceb5ef69ba16890b726540dec9c70b439e1c1->leave($__internal_cfb51931ee806d21e25cd4e732eceb5ef69ba16890b726540dec9c70b439e1c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
