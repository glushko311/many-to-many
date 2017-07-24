<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b3f4aae6b9cba638fe7c04cdae16cd4b1a400830a20aa607fd49e9fe59649899 extends Twig_Template
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
        $__internal_e8998f5737517b858d9fd0aed395d69eb5719c5a4afe7a93db2d953fe4e8715d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8998f5737517b858d9fd0aed395d69eb5719c5a4afe7a93db2d953fe4e8715d->enter($__internal_e8998f5737517b858d9fd0aed395d69eb5719c5a4afe7a93db2d953fe4e8715d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f56566dfd4a76c4beb2981cdc277e09429d8813a53a7e08fe53193d18d1018a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56566dfd4a76c4beb2981cdc277e09429d8813a53a7e08fe53193d18d1018a4->enter($__internal_f56566dfd4a76c4beb2981cdc277e09429d8813a53a7e08fe53193d18d1018a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e8998f5737517b858d9fd0aed395d69eb5719c5a4afe7a93db2d953fe4e8715d->leave($__internal_e8998f5737517b858d9fd0aed395d69eb5719c5a4afe7a93db2d953fe4e8715d_prof);

        
        $__internal_f56566dfd4a76c4beb2981cdc277e09429d8813a53a7e08fe53193d18d1018a4->leave($__internal_f56566dfd4a76c4beb2981cdc277e09429d8813a53a7e08fe53193d18d1018a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
