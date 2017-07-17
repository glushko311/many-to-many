<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_008064eba1cedec9615acf0c89a94fdbff334fc697f6a6eab28f51d4d01f2a0c extends Twig_Template
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
        $__internal_89eb55886549cc760da1b272b8c67e1aee63ffdc974049f311676140fc0e1c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89eb55886549cc760da1b272b8c67e1aee63ffdc974049f311676140fc0e1c05->enter($__internal_89eb55886549cc760da1b272b8c67e1aee63ffdc974049f311676140fc0e1c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_41bbbcdbfe716000f23ce7940479cb8641c39e70fff92b935056229d1f4b36b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bbbcdbfe716000f23ce7940479cb8641c39e70fff92b935056229d1f4b36b7->enter($__internal_41bbbcdbfe716000f23ce7940479cb8641c39e70fff92b935056229d1f4b36b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_89eb55886549cc760da1b272b8c67e1aee63ffdc974049f311676140fc0e1c05->leave($__internal_89eb55886549cc760da1b272b8c67e1aee63ffdc974049f311676140fc0e1c05_prof);

        
        $__internal_41bbbcdbfe716000f23ce7940479cb8641c39e70fff92b935056229d1f4b36b7->leave($__internal_41bbbcdbfe716000f23ce7940479cb8641c39e70fff92b935056229d1f4b36b7_prof);

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
