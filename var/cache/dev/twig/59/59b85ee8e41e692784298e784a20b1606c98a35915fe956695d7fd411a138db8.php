<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_504fe0b514cbe578b863e08b4a19cc4f556990c27192683d73dac13fac1ff841 extends Twig_Template
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
        $__internal_393330fbcf94511b78be8720416098ab0daa400eb10d6018cbb374ec9ff93c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393330fbcf94511b78be8720416098ab0daa400eb10d6018cbb374ec9ff93c6f->enter($__internal_393330fbcf94511b78be8720416098ab0daa400eb10d6018cbb374ec9ff93c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_914f4ade6311d14cfc9943e60ffba58c33b292b6fd8543860d67099c2a64bac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914f4ade6311d14cfc9943e60ffba58c33b292b6fd8543860d67099c2a64bac3->enter($__internal_914f4ade6311d14cfc9943e60ffba58c33b292b6fd8543860d67099c2a64bac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_393330fbcf94511b78be8720416098ab0daa400eb10d6018cbb374ec9ff93c6f->leave($__internal_393330fbcf94511b78be8720416098ab0daa400eb10d6018cbb374ec9ff93c6f_prof);

        
        $__internal_914f4ade6311d14cfc9943e60ffba58c33b292b6fd8543860d67099c2a64bac3->leave($__internal_914f4ade6311d14cfc9943e60ffba58c33b292b6fd8543860d67099c2a64bac3_prof);

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
", "@Framework/Form/form_errors.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
