<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3b94cca5ad9dc9bb4027b4e3566284708b5c3e20241332841d8aa647c62b8f01 extends Twig_Template
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
        $__internal_3f090ae7fa562e7eac570c5a7f6d3bbdca4943c248580e41febb2b26395fb011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f090ae7fa562e7eac570c5a7f6d3bbdca4943c248580e41febb2b26395fb011->enter($__internal_3f090ae7fa562e7eac570c5a7f6d3bbdca4943c248580e41febb2b26395fb011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9c0fbfa5caf799cfeca64bdb52bb50ec0f514b5c37af180b12b537146d91b72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0fbfa5caf799cfeca64bdb52bb50ec0f514b5c37af180b12b537146d91b72d->enter($__internal_9c0fbfa5caf799cfeca64bdb52bb50ec0f514b5c37af180b12b537146d91b72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3f090ae7fa562e7eac570c5a7f6d3bbdca4943c248580e41febb2b26395fb011->leave($__internal_3f090ae7fa562e7eac570c5a7f6d3bbdca4943c248580e41febb2b26395fb011_prof);

        
        $__internal_9c0fbfa5caf799cfeca64bdb52bb50ec0f514b5c37af180b12b537146d91b72d->leave($__internal_9c0fbfa5caf799cfeca64bdb52bb50ec0f514b5c37af180b12b537146d91b72d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
