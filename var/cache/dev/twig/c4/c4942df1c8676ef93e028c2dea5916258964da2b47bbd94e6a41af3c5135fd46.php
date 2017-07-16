<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1b319372e09c7a18f708cd7a743680021a0fb10e65a1af6fba9b90deff82d26e extends Twig_Template
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
        $__internal_3a85b95fd94c86f835046c885aa9ad3b98cf22031eeb44f62e1289dbf167884c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a85b95fd94c86f835046c885aa9ad3b98cf22031eeb44f62e1289dbf167884c->enter($__internal_3a85b95fd94c86f835046c885aa9ad3b98cf22031eeb44f62e1289dbf167884c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_246b220bbbdedaa8142e9e4b5ad97fbfc1ec42ce5a3805b02479790c5f843e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246b220bbbdedaa8142e9e4b5ad97fbfc1ec42ce5a3805b02479790c5f843e4d->enter($__internal_246b220bbbdedaa8142e9e4b5ad97fbfc1ec42ce5a3805b02479790c5f843e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3a85b95fd94c86f835046c885aa9ad3b98cf22031eeb44f62e1289dbf167884c->leave($__internal_3a85b95fd94c86f835046c885aa9ad3b98cf22031eeb44f62e1289dbf167884c_prof);

        
        $__internal_246b220bbbdedaa8142e9e4b5ad97fbfc1ec42ce5a3805b02479790c5f843e4d->leave($__internal_246b220bbbdedaa8142e9e4b5ad97fbfc1ec42ce5a3805b02479790c5f843e4d_prof);

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
", "@Framework/Form/form_rest.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
