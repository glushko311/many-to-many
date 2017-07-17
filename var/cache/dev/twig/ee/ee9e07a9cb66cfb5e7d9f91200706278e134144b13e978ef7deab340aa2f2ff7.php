<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_cbec4e8e84cf4c4bb0064981380090709263df5245553a7c893acba77c9c5d10 extends Twig_Template
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
        $__internal_7c9674c8a519c0bb2098cd2d57031c44c3c339ba48564c307f10bffbd3d9210d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9674c8a519c0bb2098cd2d57031c44c3c339ba48564c307f10bffbd3d9210d->enter($__internal_7c9674c8a519c0bb2098cd2d57031c44c3c339ba48564c307f10bffbd3d9210d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8cd7a274dcf8b822ba1a7ec28782d5ea1cb2fbb0be33dc57163179015327f422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd7a274dcf8b822ba1a7ec28782d5ea1cb2fbb0be33dc57163179015327f422->enter($__internal_8cd7a274dcf8b822ba1a7ec28782d5ea1cb2fbb0be33dc57163179015327f422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7c9674c8a519c0bb2098cd2d57031c44c3c339ba48564c307f10bffbd3d9210d->leave($__internal_7c9674c8a519c0bb2098cd2d57031c44c3c339ba48564c307f10bffbd3d9210d_prof);

        
        $__internal_8cd7a274dcf8b822ba1a7ec28782d5ea1cb2fbb0be33dc57163179015327f422->leave($__internal_8cd7a274dcf8b822ba1a7ec28782d5ea1cb2fbb0be33dc57163179015327f422_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
