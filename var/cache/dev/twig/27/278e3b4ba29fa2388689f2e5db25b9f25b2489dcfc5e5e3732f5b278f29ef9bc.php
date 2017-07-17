<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1bc075f8c862881b3d82cca96ef2c865a78fdd535ce7f5d83593a1250cb85389 extends Twig_Template
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
        $__internal_cd7c44e50175c82fb809dd7c738e118795df31cbddf70db9a613bb8d09a6c055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7c44e50175c82fb809dd7c738e118795df31cbddf70db9a613bb8d09a6c055->enter($__internal_cd7c44e50175c82fb809dd7c738e118795df31cbddf70db9a613bb8d09a6c055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5d470974a7b6d237ebe9d02743b849dd6340148712dcf1edc7119bff8bf4b93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d470974a7b6d237ebe9d02743b849dd6340148712dcf1edc7119bff8bf4b93d->enter($__internal_5d470974a7b6d237ebe9d02743b849dd6340148712dcf1edc7119bff8bf4b93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cd7c44e50175c82fb809dd7c738e118795df31cbddf70db9a613bb8d09a6c055->leave($__internal_cd7c44e50175c82fb809dd7c738e118795df31cbddf70db9a613bb8d09a6c055_prof);

        
        $__internal_5d470974a7b6d237ebe9d02743b849dd6340148712dcf1edc7119bff8bf4b93d->leave($__internal_5d470974a7b6d237ebe9d02743b849dd6340148712dcf1edc7119bff8bf4b93d_prof);

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
", "@Framework/Form/form.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
