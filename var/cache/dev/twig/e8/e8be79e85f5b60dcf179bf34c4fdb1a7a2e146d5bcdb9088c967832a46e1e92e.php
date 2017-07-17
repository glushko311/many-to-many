<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c71e011ab152bc77de56294d0edd2a2b4d8dcc8ac64ea7a2fd62363148c24ccc extends Twig_Template
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
        $__internal_32b296b3ec6d3bf8c3b6245c5e485b99ef2b5236160dfdc9f32a6e86f33c80fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b296b3ec6d3bf8c3b6245c5e485b99ef2b5236160dfdc9f32a6e86f33c80fd->enter($__internal_32b296b3ec6d3bf8c3b6245c5e485b99ef2b5236160dfdc9f32a6e86f33c80fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_692e1f601f7e323d12076f729760ebacb595d4b80aca23d7fec46f7a1601e035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692e1f601f7e323d12076f729760ebacb595d4b80aca23d7fec46f7a1601e035->enter($__internal_692e1f601f7e323d12076f729760ebacb595d4b80aca23d7fec46f7a1601e035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_32b296b3ec6d3bf8c3b6245c5e485b99ef2b5236160dfdc9f32a6e86f33c80fd->leave($__internal_32b296b3ec6d3bf8c3b6245c5e485b99ef2b5236160dfdc9f32a6e86f33c80fd_prof);

        
        $__internal_692e1f601f7e323d12076f729760ebacb595d4b80aca23d7fec46f7a1601e035->leave($__internal_692e1f601f7e323d12076f729760ebacb595d4b80aca23d7fec46f7a1601e035_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
