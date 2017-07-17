<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3889f84bc1e0d7110ffbcfc1f9b968567d9b61f25c961f5fd37ea7157a3bd53b extends Twig_Template
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
        $__internal_34db3aae150f61081195861ab1e5ee1be9ef27715efe96bba126ce91d5b584a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34db3aae150f61081195861ab1e5ee1be9ef27715efe96bba126ce91d5b584a6->enter($__internal_34db3aae150f61081195861ab1e5ee1be9ef27715efe96bba126ce91d5b584a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f83a1f08b7262826656f7255a71dd06db3f25f5deac0df359f03d7abcbef6441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83a1f08b7262826656f7255a71dd06db3f25f5deac0df359f03d7abcbef6441->enter($__internal_f83a1f08b7262826656f7255a71dd06db3f25f5deac0df359f03d7abcbef6441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_34db3aae150f61081195861ab1e5ee1be9ef27715efe96bba126ce91d5b584a6->leave($__internal_34db3aae150f61081195861ab1e5ee1be9ef27715efe96bba126ce91d5b584a6_prof);

        
        $__internal_f83a1f08b7262826656f7255a71dd06db3f25f5deac0df359f03d7abcbef6441->leave($__internal_f83a1f08b7262826656f7255a71dd06db3f25f5deac0df359f03d7abcbef6441_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
