<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9dc123c13a63e9fd9ec8e052d397a67c657a5317dd9536d15871dfa4d1ca23ae extends Twig_Template
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
        $__internal_42d0dc2de6d965c27747f23609a06bf88f108ed48c3e4a4708cbbed8eea4ec6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d0dc2de6d965c27747f23609a06bf88f108ed48c3e4a4708cbbed8eea4ec6b->enter($__internal_42d0dc2de6d965c27747f23609a06bf88f108ed48c3e4a4708cbbed8eea4ec6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_bf9f4a3c2a8b31206f5bd44f49332cf23b99edee0809c8839bb67b22c2f7d472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9f4a3c2a8b31206f5bd44f49332cf23b99edee0809c8839bb67b22c2f7d472->enter($__internal_bf9f4a3c2a8b31206f5bd44f49332cf23b99edee0809c8839bb67b22c2f7d472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_42d0dc2de6d965c27747f23609a06bf88f108ed48c3e4a4708cbbed8eea4ec6b->leave($__internal_42d0dc2de6d965c27747f23609a06bf88f108ed48c3e4a4708cbbed8eea4ec6b_prof);

        
        $__internal_bf9f4a3c2a8b31206f5bd44f49332cf23b99edee0809c8839bb67b22c2f7d472->leave($__internal_bf9f4a3c2a8b31206f5bd44f49332cf23b99edee0809c8839bb67b22c2f7d472_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
