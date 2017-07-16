<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_210f872a87acc525e48993c152f4d7ca964ba5babf9bd69e38f946148e440e5a extends Twig_Template
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
        $__internal_3e3416a81884420b6c184f83e05a5be7f85d4a91915a6e33023fd5232e4bb392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3416a81884420b6c184f83e05a5be7f85d4a91915a6e33023fd5232e4bb392->enter($__internal_3e3416a81884420b6c184f83e05a5be7f85d4a91915a6e33023fd5232e4bb392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_1ee723b0ccde61d1585b209191136392836dc292f9350c7a6c0cd1db09a6ca1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee723b0ccde61d1585b209191136392836dc292f9350c7a6c0cd1db09a6ca1d->enter($__internal_1ee723b0ccde61d1585b209191136392836dc292f9350c7a6c0cd1db09a6ca1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3e3416a81884420b6c184f83e05a5be7f85d4a91915a6e33023fd5232e4bb392->leave($__internal_3e3416a81884420b6c184f83e05a5be7f85d4a91915a6e33023fd5232e4bb392_prof);

        
        $__internal_1ee723b0ccde61d1585b209191136392836dc292f9350c7a6c0cd1db09a6ca1d->leave($__internal_1ee723b0ccde61d1585b209191136392836dc292f9350c7a6c0cd1db09a6ca1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
