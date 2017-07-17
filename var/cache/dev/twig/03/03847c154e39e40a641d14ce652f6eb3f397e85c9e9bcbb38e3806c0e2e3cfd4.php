<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4968ec472e82e45d91db54e5509704c31bda3597079812b5bb85c6ee7036fe6c extends Twig_Template
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
        $__internal_2eca6cf60250a7704d7a0516b200da7333f97316ad8ba57f85374c31863e2eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eca6cf60250a7704d7a0516b200da7333f97316ad8ba57f85374c31863e2eb6->enter($__internal_2eca6cf60250a7704d7a0516b200da7333f97316ad8ba57f85374c31863e2eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_cd113ea1adbec2547b25a681f2789f56d1fc909dfe9e2e34de4239e3e6eca2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd113ea1adbec2547b25a681f2789f56d1fc909dfe9e2e34de4239e3e6eca2c7->enter($__internal_cd113ea1adbec2547b25a681f2789f56d1fc909dfe9e2e34de4239e3e6eca2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2eca6cf60250a7704d7a0516b200da7333f97316ad8ba57f85374c31863e2eb6->leave($__internal_2eca6cf60250a7704d7a0516b200da7333f97316ad8ba57f85374c31863e2eb6_prof);

        
        $__internal_cd113ea1adbec2547b25a681f2789f56d1fc909dfe9e2e34de4239e3e6eca2c7->leave($__internal_cd113ea1adbec2547b25a681f2789f56d1fc909dfe9e2e34de4239e3e6eca2c7_prof);

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
", "@Framework/Form/radio_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
