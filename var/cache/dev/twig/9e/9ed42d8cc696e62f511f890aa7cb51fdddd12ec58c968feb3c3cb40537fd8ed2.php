<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a37a29ee30be38c3c73c5bf5d9de342c3fdeabbf7a5ce47c18b6cba310f0c5bf extends Twig_Template
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
        $__internal_6a3113413adb7243b83e60d6222b0a18c8065998648adf1a88e6582779963af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3113413adb7243b83e60d6222b0a18c8065998648adf1a88e6582779963af0->enter($__internal_6a3113413adb7243b83e60d6222b0a18c8065998648adf1a88e6582779963af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_27f29dd8f307ef1fa7d51aa456fc4f532b61909abef551388b56478506e755e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f29dd8f307ef1fa7d51aa456fc4f532b61909abef551388b56478506e755e4->enter($__internal_27f29dd8f307ef1fa7d51aa456fc4f532b61909abef551388b56478506e755e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6a3113413adb7243b83e60d6222b0a18c8065998648adf1a88e6582779963af0->leave($__internal_6a3113413adb7243b83e60d6222b0a18c8065998648adf1a88e6582779963af0_prof);

        
        $__internal_27f29dd8f307ef1fa7d51aa456fc4f532b61909abef551388b56478506e755e4->leave($__internal_27f29dd8f307ef1fa7d51aa456fc4f532b61909abef551388b56478506e755e4_prof);

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
", "@Framework/Form/form_row.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
