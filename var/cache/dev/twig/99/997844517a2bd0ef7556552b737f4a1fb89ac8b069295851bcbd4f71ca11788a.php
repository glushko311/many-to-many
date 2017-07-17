<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_676754fbfebf7b9274ca100cd9584597ea62119bac9666e204ccb3c2315f64ae extends Twig_Template
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
        $__internal_ab19f2b366ea7bbfacef07afd14f156cfe38a65e09fea274c2ff4440b400786d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab19f2b366ea7bbfacef07afd14f156cfe38a65e09fea274c2ff4440b400786d->enter($__internal_ab19f2b366ea7bbfacef07afd14f156cfe38a65e09fea274c2ff4440b400786d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c84f3723a63265af728b81fc56c1086ce29d73d8b31ada44cae0b49c47dd5328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84f3723a63265af728b81fc56c1086ce29d73d8b31ada44cae0b49c47dd5328->enter($__internal_c84f3723a63265af728b81fc56c1086ce29d73d8b31ada44cae0b49c47dd5328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ab19f2b366ea7bbfacef07afd14f156cfe38a65e09fea274c2ff4440b400786d->leave($__internal_ab19f2b366ea7bbfacef07afd14f156cfe38a65e09fea274c2ff4440b400786d_prof);

        
        $__internal_c84f3723a63265af728b81fc56c1086ce29d73d8b31ada44cae0b49c47dd5328->leave($__internal_c84f3723a63265af728b81fc56c1086ce29d73d8b31ada44cae0b49c47dd5328_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
