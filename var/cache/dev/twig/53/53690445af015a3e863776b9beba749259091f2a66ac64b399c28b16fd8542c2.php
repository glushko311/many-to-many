<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8194cc898dcc7bad119404dbfa4b03431a2157997ecdde2f909b91cb40b41b7e extends Twig_Template
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
        $__internal_54605c895200a41f4a95d8c3ee90a2cdf6ddac4d15f79d59b4a4df522e753618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54605c895200a41f4a95d8c3ee90a2cdf6ddac4d15f79d59b4a4df522e753618->enter($__internal_54605c895200a41f4a95d8c3ee90a2cdf6ddac4d15f79d59b4a4df522e753618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1b34b203593c96bcab02ab28dd068d8e93eca87adc2e99e250138075e60e54ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b34b203593c96bcab02ab28dd068d8e93eca87adc2e99e250138075e60e54ee->enter($__internal_1b34b203593c96bcab02ab28dd068d8e93eca87adc2e99e250138075e60e54ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_54605c895200a41f4a95d8c3ee90a2cdf6ddac4d15f79d59b4a4df522e753618->leave($__internal_54605c895200a41f4a95d8c3ee90a2cdf6ddac4d15f79d59b4a4df522e753618_prof);

        
        $__internal_1b34b203593c96bcab02ab28dd068d8e93eca87adc2e99e250138075e60e54ee->leave($__internal_1b34b203593c96bcab02ab28dd068d8e93eca87adc2e99e250138075e60e54ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
