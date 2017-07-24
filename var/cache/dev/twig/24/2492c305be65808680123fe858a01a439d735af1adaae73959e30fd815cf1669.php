<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_23b17d37a1cfbbd63e489584dfe588a1cf5d20b3adabb101c46b32b520354a3e extends Twig_Template
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
        $__internal_b14dc44c72c5ec8eead4e2f4f548a80afab9ebe844539cbbb9680330e8fcc24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14dc44c72c5ec8eead4e2f4f548a80afab9ebe844539cbbb9680330e8fcc24f->enter($__internal_b14dc44c72c5ec8eead4e2f4f548a80afab9ebe844539cbbb9680330e8fcc24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_df0d409d35de4182b9f46ba5cf9e59b4066897955127f96e51de574325c3302f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0d409d35de4182b9f46ba5cf9e59b4066897955127f96e51de574325c3302f->enter($__internal_df0d409d35de4182b9f46ba5cf9e59b4066897955127f96e51de574325c3302f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_b14dc44c72c5ec8eead4e2f4f548a80afab9ebe844539cbbb9680330e8fcc24f->leave($__internal_b14dc44c72c5ec8eead4e2f4f548a80afab9ebe844539cbbb9680330e8fcc24f_prof);

        
        $__internal_df0d409d35de4182b9f46ba5cf9e59b4066897955127f96e51de574325c3302f->leave($__internal_df0d409d35de4182b9f46ba5cf9e59b4066897955127f96e51de574325c3302f_prof);

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
