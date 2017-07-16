<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_359611da0d94e2daab8b0ea7bb030f01709b4015cb9175762b51facb9353d657 extends Twig_Template
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
        $__internal_ea4ad5f548a6a9c0ec0d180ded45ece0fca52728e7a846ce4487e4a845fdc14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4ad5f548a6a9c0ec0d180ded45ece0fca52728e7a846ce4487e4a845fdc14b->enter($__internal_ea4ad5f548a6a9c0ec0d180ded45ece0fca52728e7a846ce4487e4a845fdc14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1fc75d8c8ee8d364bbc06156cd09f3ae37bbdb01879def2d0404123b80fad51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc75d8c8ee8d364bbc06156cd09f3ae37bbdb01879def2d0404123b80fad51b->enter($__internal_1fc75d8c8ee8d364bbc06156cd09f3ae37bbdb01879def2d0404123b80fad51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ea4ad5f548a6a9c0ec0d180ded45ece0fca52728e7a846ce4487e4a845fdc14b->leave($__internal_ea4ad5f548a6a9c0ec0d180ded45ece0fca52728e7a846ce4487e4a845fdc14b_prof);

        
        $__internal_1fc75d8c8ee8d364bbc06156cd09f3ae37bbdb01879def2d0404123b80fad51b->leave($__internal_1fc75d8c8ee8d364bbc06156cd09f3ae37bbdb01879def2d0404123b80fad51b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
