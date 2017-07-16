<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_15e745d9c973813b724db5b5aaf3f8cc1fb317184344031a472fb835e5cb17ae extends Twig_Template
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
        $__internal_e1b9adf6ed0527e5e3a148a51b3db198f50e16d23132ce1cd1fcfc67d2727bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b9adf6ed0527e5e3a148a51b3db198f50e16d23132ce1cd1fcfc67d2727bdc->enter($__internal_e1b9adf6ed0527e5e3a148a51b3db198f50e16d23132ce1cd1fcfc67d2727bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_92ee6c4fad943f1c6b52ca17f3561b9f71ca7fbe1cbe1f99a531884df10173b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ee6c4fad943f1c6b52ca17f3561b9f71ca7fbe1cbe1f99a531884df10173b8->enter($__internal_92ee6c4fad943f1c6b52ca17f3561b9f71ca7fbe1cbe1f99a531884df10173b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e1b9adf6ed0527e5e3a148a51b3db198f50e16d23132ce1cd1fcfc67d2727bdc->leave($__internal_e1b9adf6ed0527e5e3a148a51b3db198f50e16d23132ce1cd1fcfc67d2727bdc_prof);

        
        $__internal_92ee6c4fad943f1c6b52ca17f3561b9f71ca7fbe1cbe1f99a531884df10173b8->leave($__internal_92ee6c4fad943f1c6b52ca17f3561b9f71ca7fbe1cbe1f99a531884df10173b8_prof);

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
", "@Framework/Form/money_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
