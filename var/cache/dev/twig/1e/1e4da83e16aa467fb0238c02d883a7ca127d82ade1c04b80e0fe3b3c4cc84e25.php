<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_087295f2700ea021cddff9c298547bd03f1d1b8247f9d232434eebfd4b368b87 extends Twig_Template
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
        $__internal_ac30f90a819efa30d2df924039ca0326d813cd48659677f89ffe7257b8ed5beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac30f90a819efa30d2df924039ca0326d813cd48659677f89ffe7257b8ed5beb->enter($__internal_ac30f90a819efa30d2df924039ca0326d813cd48659677f89ffe7257b8ed5beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_9ebad834571b11309c8c62ce1becf7ce91870826abfebcb5d16f58c5e2dec3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebad834571b11309c8c62ce1becf7ce91870826abfebcb5d16f58c5e2dec3d9->enter($__internal_9ebad834571b11309c8c62ce1becf7ce91870826abfebcb5d16f58c5e2dec3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ac30f90a819efa30d2df924039ca0326d813cd48659677f89ffe7257b8ed5beb->leave($__internal_ac30f90a819efa30d2df924039ca0326d813cd48659677f89ffe7257b8ed5beb_prof);

        
        $__internal_9ebad834571b11309c8c62ce1becf7ce91870826abfebcb5d16f58c5e2dec3d9->leave($__internal_9ebad834571b11309c8c62ce1becf7ce91870826abfebcb5d16f58c5e2dec3d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
