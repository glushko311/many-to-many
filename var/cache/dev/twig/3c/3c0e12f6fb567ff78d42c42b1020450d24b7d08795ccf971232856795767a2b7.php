<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_27b27e762efab688d227d03cc68b43e9f4dc0eb123f91d8a1fbefc869b894c60 extends Twig_Template
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
        $__internal_04a01df15cbee4629a822ab191b998cea9179f2c2ea66e288a1e99ab3d0a7daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a01df15cbee4629a822ab191b998cea9179f2c2ea66e288a1e99ab3d0a7daa->enter($__internal_04a01df15cbee4629a822ab191b998cea9179f2c2ea66e288a1e99ab3d0a7daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_522f818d64316146e8787b748568fd687bc2d353cf5c08db84f083d440a6882d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522f818d64316146e8787b748568fd687bc2d353cf5c08db84f083d440a6882d->enter($__internal_522f818d64316146e8787b748568fd687bc2d353cf5c08db84f083d440a6882d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_04a01df15cbee4629a822ab191b998cea9179f2c2ea66e288a1e99ab3d0a7daa->leave($__internal_04a01df15cbee4629a822ab191b998cea9179f2c2ea66e288a1e99ab3d0a7daa_prof);

        
        $__internal_522f818d64316146e8787b748568fd687bc2d353cf5c08db84f083d440a6882d->leave($__internal_522f818d64316146e8787b748568fd687bc2d353cf5c08db84f083d440a6882d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
