<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_baaee15b4710b18d9027da5710992cc038578bdaf88feff3d8a110d157c7c6ef extends Twig_Template
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
        $__internal_dd17f0c3f63918e3e600ff04c146e00c4bdf027da44385fade0e79e4997ca669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd17f0c3f63918e3e600ff04c146e00c4bdf027da44385fade0e79e4997ca669->enter($__internal_dd17f0c3f63918e3e600ff04c146e00c4bdf027da44385fade0e79e4997ca669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e73b5d4390b930079cdf9e4aed15db84e927bc4e98567fd3ffb676c74dc2fddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73b5d4390b930079cdf9e4aed15db84e927bc4e98567fd3ffb676c74dc2fddd->enter($__internal_e73b5d4390b930079cdf9e4aed15db84e927bc4e98567fd3ffb676c74dc2fddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd17f0c3f63918e3e600ff04c146e00c4bdf027da44385fade0e79e4997ca669->leave($__internal_dd17f0c3f63918e3e600ff04c146e00c4bdf027da44385fade0e79e4997ca669_prof);

        
        $__internal_e73b5d4390b930079cdf9e4aed15db84e927bc4e98567fd3ffb676c74dc2fddd->leave($__internal_e73b5d4390b930079cdf9e4aed15db84e927bc4e98567fd3ffb676c74dc2fddd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
