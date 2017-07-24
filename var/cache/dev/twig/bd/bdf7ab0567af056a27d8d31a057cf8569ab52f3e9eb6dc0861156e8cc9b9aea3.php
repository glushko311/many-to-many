<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a245550f868c78fe19e8fee0fd75381da31db300b9c347f8a757c6125b017e39 extends Twig_Template
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
        $__internal_feab5f055d822697a4f1095ba2f2d7f99235247a703cf1ff2ce1020ca060559c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feab5f055d822697a4f1095ba2f2d7f99235247a703cf1ff2ce1020ca060559c->enter($__internal_feab5f055d822697a4f1095ba2f2d7f99235247a703cf1ff2ce1020ca060559c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_80694350dc53c92260f370789d237000c77d6821a827acfaffbbce98943ff156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80694350dc53c92260f370789d237000c77d6821a827acfaffbbce98943ff156->enter($__internal_80694350dc53c92260f370789d237000c77d6821a827acfaffbbce98943ff156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_feab5f055d822697a4f1095ba2f2d7f99235247a703cf1ff2ce1020ca060559c->leave($__internal_feab5f055d822697a4f1095ba2f2d7f99235247a703cf1ff2ce1020ca060559c_prof);

        
        $__internal_80694350dc53c92260f370789d237000c77d6821a827acfaffbbce98943ff156->leave($__internal_80694350dc53c92260f370789d237000c77d6821a827acfaffbbce98943ff156_prof);

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
