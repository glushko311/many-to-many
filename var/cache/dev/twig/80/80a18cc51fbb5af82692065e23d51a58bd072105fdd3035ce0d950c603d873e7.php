<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_af5c427bd0acd45805b1de7680cd4f494fb39505469c19e35a67323051f6c86b extends Twig_Template
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
        $__internal_d742206000d6bfa0d388ee3545ca026283223d91f884cbcc329c2e4884ac77a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d742206000d6bfa0d388ee3545ca026283223d91f884cbcc329c2e4884ac77a3->enter($__internal_d742206000d6bfa0d388ee3545ca026283223d91f884cbcc329c2e4884ac77a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9f12f04267dc3079a29c539b7a03a6d7580edb8c9e009d806438aa144534f7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f12f04267dc3079a29c539b7a03a6d7580edb8c9e009d806438aa144534f7e0->enter($__internal_9f12f04267dc3079a29c539b7a03a6d7580edb8c9e009d806438aa144534f7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d742206000d6bfa0d388ee3545ca026283223d91f884cbcc329c2e4884ac77a3->leave($__internal_d742206000d6bfa0d388ee3545ca026283223d91f884cbcc329c2e4884ac77a3_prof);

        
        $__internal_9f12f04267dc3079a29c539b7a03a6d7580edb8c9e009d806438aa144534f7e0->leave($__internal_9f12f04267dc3079a29c539b7a03a6d7580edb8c9e009d806438aa144534f7e0_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
