<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9c5ea9cf690216684e971f9b03c7ae9627d135b42bde8bbf80ec10e014b4e155 extends Twig_Template
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
        $__internal_17ee63728cc992cea2e4eb0fe93c24719242c872e1978aa0b5804976163718af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ee63728cc992cea2e4eb0fe93c24719242c872e1978aa0b5804976163718af->enter($__internal_17ee63728cc992cea2e4eb0fe93c24719242c872e1978aa0b5804976163718af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_992b86c3d6f8e80076a00b44b63c6862fc42b46a86304002212c8ba474b1b625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992b86c3d6f8e80076a00b44b63c6862fc42b46a86304002212c8ba474b1b625->enter($__internal_992b86c3d6f8e80076a00b44b63c6862fc42b46a86304002212c8ba474b1b625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_17ee63728cc992cea2e4eb0fe93c24719242c872e1978aa0b5804976163718af->leave($__internal_17ee63728cc992cea2e4eb0fe93c24719242c872e1978aa0b5804976163718af_prof);

        
        $__internal_992b86c3d6f8e80076a00b44b63c6862fc42b46a86304002212c8ba474b1b625->leave($__internal_992b86c3d6f8e80076a00b44b63c6862fc42b46a86304002212c8ba474b1b625_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
