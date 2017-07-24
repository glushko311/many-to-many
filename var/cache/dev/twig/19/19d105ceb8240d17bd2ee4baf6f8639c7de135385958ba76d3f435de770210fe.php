<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9f61fc38b35ae1c393e00b7c54a44533a46389e2a55a77f520472c9badf7c178 extends Twig_Template
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
        $__internal_19f07f31b44a2118614fb451fc09d5a7c8b9d8106b99ac5bc1f2ac7f9040c17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f07f31b44a2118614fb451fc09d5a7c8b9d8106b99ac5bc1f2ac7f9040c17d->enter($__internal_19f07f31b44a2118614fb451fc09d5a7c8b9d8106b99ac5bc1f2ac7f9040c17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b87b3cea931855761b4c26a95931d6fa36e8886f531dc5a2213b0b21af3043ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87b3cea931855761b4c26a95931d6fa36e8886f531dc5a2213b0b21af3043ab->enter($__internal_b87b3cea931855761b4c26a95931d6fa36e8886f531dc5a2213b0b21af3043ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_19f07f31b44a2118614fb451fc09d5a7c8b9d8106b99ac5bc1f2ac7f9040c17d->leave($__internal_19f07f31b44a2118614fb451fc09d5a7c8b9d8106b99ac5bc1f2ac7f9040c17d_prof);

        
        $__internal_b87b3cea931855761b4c26a95931d6fa36e8886f531dc5a2213b0b21af3043ab->leave($__internal_b87b3cea931855761b4c26a95931d6fa36e8886f531dc5a2213b0b21af3043ab_prof);

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
