<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ba6a38d8ecc4da4b67fcb1a058588cbf9c05b70efc35622ecae3b009805423e4 extends Twig_Template
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
        $__internal_29e6f966ef8efeadc393a5457ee9b23470b094f526a273e2736d4d3b1229cfab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e6f966ef8efeadc393a5457ee9b23470b094f526a273e2736d4d3b1229cfab->enter($__internal_29e6f966ef8efeadc393a5457ee9b23470b094f526a273e2736d4d3b1229cfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1094469c6c9aecf0c5f28b1d068fdcc226b2bc27bb833ccd514e49e5e6f95213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1094469c6c9aecf0c5f28b1d068fdcc226b2bc27bb833ccd514e49e5e6f95213->enter($__internal_1094469c6c9aecf0c5f28b1d068fdcc226b2bc27bb833ccd514e49e5e6f95213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_29e6f966ef8efeadc393a5457ee9b23470b094f526a273e2736d4d3b1229cfab->leave($__internal_29e6f966ef8efeadc393a5457ee9b23470b094f526a273e2736d4d3b1229cfab_prof);

        
        $__internal_1094469c6c9aecf0c5f28b1d068fdcc226b2bc27bb833ccd514e49e5e6f95213->leave($__internal_1094469c6c9aecf0c5f28b1d068fdcc226b2bc27bb833ccd514e49e5e6f95213_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
