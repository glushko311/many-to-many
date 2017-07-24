<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_92b2d31859a4d8e23e3d9d34f6ed683a4316a56e6d20ee8e7df77471316e0157 extends Twig_Template
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
        $__internal_1a29305e4bc00f8cfa499a49727b153c4a2ba9bb924f68d61bded6e620eaeaf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a29305e4bc00f8cfa499a49727b153c4a2ba9bb924f68d61bded6e620eaeaf2->enter($__internal_1a29305e4bc00f8cfa499a49727b153c4a2ba9bb924f68d61bded6e620eaeaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_c4a82ab36c4b4750352c2ac986eca116dfa5819a867c735fb04c31789f12abbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a82ab36c4b4750352c2ac986eca116dfa5819a867c735fb04c31789f12abbc->enter($__internal_c4a82ab36c4b4750352c2ac986eca116dfa5819a867c735fb04c31789f12abbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_1a29305e4bc00f8cfa499a49727b153c4a2ba9bb924f68d61bded6e620eaeaf2->leave($__internal_1a29305e4bc00f8cfa499a49727b153c4a2ba9bb924f68d61bded6e620eaeaf2_prof);

        
        $__internal_c4a82ab36c4b4750352c2ac986eca116dfa5819a867c735fb04c31789f12abbc->leave($__internal_c4a82ab36c4b4750352c2ac986eca116dfa5819a867c735fb04c31789f12abbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
