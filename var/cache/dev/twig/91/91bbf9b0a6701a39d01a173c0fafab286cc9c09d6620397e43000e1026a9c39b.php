<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_502145a6c9d464a24db3085d794d21df5ac1141bba010f56db26c21c45bb005c extends Twig_Template
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
        $__internal_b17a5d1cbeff542faff4457334e2177b2b88ab9bf6a12e280356eeb3f341d19f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b17a5d1cbeff542faff4457334e2177b2b88ab9bf6a12e280356eeb3f341d19f->enter($__internal_b17a5d1cbeff542faff4457334e2177b2b88ab9bf6a12e280356eeb3f341d19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_73dd30b121a541387a7c7b23d458f8548f14b112e8203e56b88cf5a2a656db33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dd30b121a541387a7c7b23d458f8548f14b112e8203e56b88cf5a2a656db33->enter($__internal_73dd30b121a541387a7c7b23d458f8548f14b112e8203e56b88cf5a2a656db33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b17a5d1cbeff542faff4457334e2177b2b88ab9bf6a12e280356eeb3f341d19f->leave($__internal_b17a5d1cbeff542faff4457334e2177b2b88ab9bf6a12e280356eeb3f341d19f_prof);

        
        $__internal_73dd30b121a541387a7c7b23d458f8548f14b112e8203e56b88cf5a2a656db33->leave($__internal_73dd30b121a541387a7c7b23d458f8548f14b112e8203e56b88cf5a2a656db33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
