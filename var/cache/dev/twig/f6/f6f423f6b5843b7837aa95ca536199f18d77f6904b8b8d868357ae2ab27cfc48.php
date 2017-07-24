<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9fe0e8320178743b3102923351c350b6f0efacd33134425e05a6ef937da2f5ab extends Twig_Template
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
        $__internal_482927bba0027a990ed7328e00c131a986520b63a046c6821f30a6a9ba5a74e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482927bba0027a990ed7328e00c131a986520b63a046c6821f30a6a9ba5a74e4->enter($__internal_482927bba0027a990ed7328e00c131a986520b63a046c6821f30a6a9ba5a74e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4927628aa4857876ad469f5a59efd44e715181c54759920a60b6ea16c76a7d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4927628aa4857876ad469f5a59efd44e715181c54759920a60b6ea16c76a7d86->enter($__internal_4927628aa4857876ad469f5a59efd44e715181c54759920a60b6ea16c76a7d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_482927bba0027a990ed7328e00c131a986520b63a046c6821f30a6a9ba5a74e4->leave($__internal_482927bba0027a990ed7328e00c131a986520b63a046c6821f30a6a9ba5a74e4_prof);

        
        $__internal_4927628aa4857876ad469f5a59efd44e715181c54759920a60b6ea16c76a7d86->leave($__internal_4927628aa4857876ad469f5a59efd44e715181c54759920a60b6ea16c76a7d86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
