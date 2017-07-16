<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7f22858b2ec70965828cd48bc69029d4fbe2c330671e3aba52cd797ea162e99b extends Twig_Template
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
        $__internal_f6a2ec5d22406b6eb7c4a9d16b396bd557238114b7607f6a40dc50409c06d636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a2ec5d22406b6eb7c4a9d16b396bd557238114b7607f6a40dc50409c06d636->enter($__internal_f6a2ec5d22406b6eb7c4a9d16b396bd557238114b7607f6a40dc50409c06d636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_19a1bddcb2edc4ceec3797a495344b1cb8a7ce28558fe78340ca22d5ec8eefd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a1bddcb2edc4ceec3797a495344b1cb8a7ce28558fe78340ca22d5ec8eefd4->enter($__internal_19a1bddcb2edc4ceec3797a495344b1cb8a7ce28558fe78340ca22d5ec8eefd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f6a2ec5d22406b6eb7c4a9d16b396bd557238114b7607f6a40dc50409c06d636->leave($__internal_f6a2ec5d22406b6eb7c4a9d16b396bd557238114b7607f6a40dc50409c06d636_prof);

        
        $__internal_19a1bddcb2edc4ceec3797a495344b1cb8a7ce28558fe78340ca22d5ec8eefd4->leave($__internal_19a1bddcb2edc4ceec3797a495344b1cb8a7ce28558fe78340ca22d5ec8eefd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
