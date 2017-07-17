<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_21546c9e5c52d93a4d6a73de7f066c02553282fe97d2f628f9d8deb5b1e1d7e6 extends Twig_Template
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
        $__internal_b7ba72b36f35c2384599a98e3f894d7bb60f18e39b5de18dd26ef24db4464c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ba72b36f35c2384599a98e3f894d7bb60f18e39b5de18dd26ef24db4464c32->enter($__internal_b7ba72b36f35c2384599a98e3f894d7bb60f18e39b5de18dd26ef24db4464c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_45bf43a86b4a1ce93c719544be6a574e5b4c5342494e439aae7ec482d355fd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45bf43a86b4a1ce93c719544be6a574e5b4c5342494e439aae7ec482d355fd02->enter($__internal_45bf43a86b4a1ce93c719544be6a574e5b4c5342494e439aae7ec482d355fd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b7ba72b36f35c2384599a98e3f894d7bb60f18e39b5de18dd26ef24db4464c32->leave($__internal_b7ba72b36f35c2384599a98e3f894d7bb60f18e39b5de18dd26ef24db4464c32_prof);

        
        $__internal_45bf43a86b4a1ce93c719544be6a574e5b4c5342494e439aae7ec482d355fd02->leave($__internal_45bf43a86b4a1ce93c719544be6a574e5b4c5342494e439aae7ec482d355fd02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
