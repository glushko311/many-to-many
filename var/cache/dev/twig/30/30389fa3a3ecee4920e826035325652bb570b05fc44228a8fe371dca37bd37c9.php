<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b11a637c84d86af9e8c82e99a762b40eb20c277dd5077b9aba8ab737e6c3a854 extends Twig_Template
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
        $__internal_51c2eb2a9be707e84ff7f743622cd40dbe7dbc0ae4c4ced7a3c25872c04d4c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c2eb2a9be707e84ff7f743622cd40dbe7dbc0ae4c4ced7a3c25872c04d4c5d->enter($__internal_51c2eb2a9be707e84ff7f743622cd40dbe7dbc0ae4c4ced7a3c25872c04d4c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_24e03fdddb14643bac3e20dcaa78cc9c995eb0c3bdf20e08802554d5f84cac20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e03fdddb14643bac3e20dcaa78cc9c995eb0c3bdf20e08802554d5f84cac20->enter($__internal_24e03fdddb14643bac3e20dcaa78cc9c995eb0c3bdf20e08802554d5f84cac20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_51c2eb2a9be707e84ff7f743622cd40dbe7dbc0ae4c4ced7a3c25872c04d4c5d->leave($__internal_51c2eb2a9be707e84ff7f743622cd40dbe7dbc0ae4c4ced7a3c25872c04d4c5d_prof);

        
        $__internal_24e03fdddb14643bac3e20dcaa78cc9c995eb0c3bdf20e08802554d5f84cac20->leave($__internal_24e03fdddb14643bac3e20dcaa78cc9c995eb0c3bdf20e08802554d5f84cac20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
