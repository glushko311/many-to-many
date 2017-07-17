<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_04513e1679d8ca797d70fc1df4abe1d7266336ce7d1f71218a7e67bb8adcac0b extends Twig_Template
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
        $__internal_6410013e08acf900729be1e7328fd4665188a35292796e58bf77d4f68e550b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6410013e08acf900729be1e7328fd4665188a35292796e58bf77d4f68e550b3d->enter($__internal_6410013e08acf900729be1e7328fd4665188a35292796e58bf77d4f68e550b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5b43a7615cbedff31d03c8b44ba5a2d2f7f19b3d680cb5c85c15d55c891260be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b43a7615cbedff31d03c8b44ba5a2d2f7f19b3d680cb5c85c15d55c891260be->enter($__internal_5b43a7615cbedff31d03c8b44ba5a2d2f7f19b3d680cb5c85c15d55c891260be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6410013e08acf900729be1e7328fd4665188a35292796e58bf77d4f68e550b3d->leave($__internal_6410013e08acf900729be1e7328fd4665188a35292796e58bf77d4f68e550b3d_prof);

        
        $__internal_5b43a7615cbedff31d03c8b44ba5a2d2f7f19b3d680cb5c85c15d55c891260be->leave($__internal_5b43a7615cbedff31d03c8b44ba5a2d2f7f19b3d680cb5c85c15d55c891260be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
