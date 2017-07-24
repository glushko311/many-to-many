<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e178bc55df9dc0ec75aa6b977a0bb10b3c37e592742e495b991cc2d44af6dc22 extends Twig_Template
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
        $__internal_40674e5fcb8e9b977317cef233cd63718eb91f8f24ea6649a0d9e37973af272b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40674e5fcb8e9b977317cef233cd63718eb91f8f24ea6649a0d9e37973af272b->enter($__internal_40674e5fcb8e9b977317cef233cd63718eb91f8f24ea6649a0d9e37973af272b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2a85cbf4061c5701b903a5716e2bf05e59fc40c9bd798b7e8b640eed31f89a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a85cbf4061c5701b903a5716e2bf05e59fc40c9bd798b7e8b640eed31f89a2b->enter($__internal_2a85cbf4061c5701b903a5716e2bf05e59fc40c9bd798b7e8b640eed31f89a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_40674e5fcb8e9b977317cef233cd63718eb91f8f24ea6649a0d9e37973af272b->leave($__internal_40674e5fcb8e9b977317cef233cd63718eb91f8f24ea6649a0d9e37973af272b_prof);

        
        $__internal_2a85cbf4061c5701b903a5716e2bf05e59fc40c9bd798b7e8b640eed31f89a2b->leave($__internal_2a85cbf4061c5701b903a5716e2bf05e59fc40c9bd798b7e8b640eed31f89a2b_prof);

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
", "@Framework/Form/reset_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
