<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_f47a09b7085f10bd59fd76ee26c08fbd3ea21396ed6e4cad6bf540bc741d58e9 extends Twig_Template
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
        $__internal_ef07027d1118e5a8e76588f3acc712401f8679b97bc129b2a7d2fa05062146b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef07027d1118e5a8e76588f3acc712401f8679b97bc129b2a7d2fa05062146b5->enter($__internal_ef07027d1118e5a8e76588f3acc712401f8679b97bc129b2a7d2fa05062146b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_0e9c271309280fc3f618132fed029ff002e3ef9d2f0193e944f6715d70fb0c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9c271309280fc3f618132fed029ff002e3ef9d2f0193e944f6715d70fb0c47->enter($__internal_0e9c271309280fc3f618132fed029ff002e3ef9d2f0193e944f6715d70fb0c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ef07027d1118e5a8e76588f3acc712401f8679b97bc129b2a7d2fa05062146b5->leave($__internal_ef07027d1118e5a8e76588f3acc712401f8679b97bc129b2a7d2fa05062146b5_prof);

        
        $__internal_0e9c271309280fc3f618132fed029ff002e3ef9d2f0193e944f6715d70fb0c47->leave($__internal_0e9c271309280fc3f618132fed029ff002e3ef9d2f0193e944f6715d70fb0c47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
