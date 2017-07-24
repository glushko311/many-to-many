<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_33fc2aba3feee06499837de70d6363b72252c41456c06dc964726775bace11f5 extends Twig_Template
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
        $__internal_65e5b5d9b1a8d16bea1bf7f854c8698072b5a99195dbafd9f9738a52ed45b73d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e5b5d9b1a8d16bea1bf7f854c8698072b5a99195dbafd9f9738a52ed45b73d->enter($__internal_65e5b5d9b1a8d16bea1bf7f854c8698072b5a99195dbafd9f9738a52ed45b73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f1b422c5f61d2b2674c8f322cb486af609f6330250c98a8a115ff72a9eb83432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b422c5f61d2b2674c8f322cb486af609f6330250c98a8a115ff72a9eb83432->enter($__internal_f1b422c5f61d2b2674c8f322cb486af609f6330250c98a8a115ff72a9eb83432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_65e5b5d9b1a8d16bea1bf7f854c8698072b5a99195dbafd9f9738a52ed45b73d->leave($__internal_65e5b5d9b1a8d16bea1bf7f854c8698072b5a99195dbafd9f9738a52ed45b73d_prof);

        
        $__internal_f1b422c5f61d2b2674c8f322cb486af609f6330250c98a8a115ff72a9eb83432->leave($__internal_f1b422c5f61d2b2674c8f322cb486af609f6330250c98a8a115ff72a9eb83432_prof);

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
