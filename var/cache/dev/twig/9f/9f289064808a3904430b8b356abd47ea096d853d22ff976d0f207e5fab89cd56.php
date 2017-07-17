<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1272841a9e7a91be603bc3913c2efbf9fb4cf4aaf4978dec489fe62e2e2567fd extends Twig_Template
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
        $__internal_792e0a8175d34dd61ca1a5c5f12e2c853439687f2f2baeb9a8b4ff1e80e31d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792e0a8175d34dd61ca1a5c5f12e2c853439687f2f2baeb9a8b4ff1e80e31d87->enter($__internal_792e0a8175d34dd61ca1a5c5f12e2c853439687f2f2baeb9a8b4ff1e80e31d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_1f4b38b8830e5acbbf46af6a8e1a02a3ccfb9ac5bac355c6ca86a8a412fbf0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4b38b8830e5acbbf46af6a8e1a02a3ccfb9ac5bac355c6ca86a8a412fbf0b9->enter($__internal_1f4b38b8830e5acbbf46af6a8e1a02a3ccfb9ac5bac355c6ca86a8a412fbf0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_792e0a8175d34dd61ca1a5c5f12e2c853439687f2f2baeb9a8b4ff1e80e31d87->leave($__internal_792e0a8175d34dd61ca1a5c5f12e2c853439687f2f2baeb9a8b4ff1e80e31d87_prof);

        
        $__internal_1f4b38b8830e5acbbf46af6a8e1a02a3ccfb9ac5bac355c6ca86a8a412fbf0b9->leave($__internal_1f4b38b8830e5acbbf46af6a8e1a02a3ccfb9ac5bac355c6ca86a8a412fbf0b9_prof);

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
