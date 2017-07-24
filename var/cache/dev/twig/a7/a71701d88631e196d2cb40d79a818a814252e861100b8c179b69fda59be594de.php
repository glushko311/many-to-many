<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6c59d09a5c7a4a51df68ba53ee0f878b1276f7b8e0bc32234c8f19ade6d43527 extends Twig_Template
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
        $__internal_3894e8ed1f57e0cef38e1f5a05320af6c2426ad25613a2b7501ac0fe629a1e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3894e8ed1f57e0cef38e1f5a05320af6c2426ad25613a2b7501ac0fe629a1e8e->enter($__internal_3894e8ed1f57e0cef38e1f5a05320af6c2426ad25613a2b7501ac0fe629a1e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_cac3bf7e447cf5839da6ab2d018cacd6875458d613d02680448ba14b6cff3dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac3bf7e447cf5839da6ab2d018cacd6875458d613d02680448ba14b6cff3dcf->enter($__internal_cac3bf7e447cf5839da6ab2d018cacd6875458d613d02680448ba14b6cff3dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3894e8ed1f57e0cef38e1f5a05320af6c2426ad25613a2b7501ac0fe629a1e8e->leave($__internal_3894e8ed1f57e0cef38e1f5a05320af6c2426ad25613a2b7501ac0fe629a1e8e_prof);

        
        $__internal_cac3bf7e447cf5839da6ab2d018cacd6875458d613d02680448ba14b6cff3dcf->leave($__internal_cac3bf7e447cf5839da6ab2d018cacd6875458d613d02680448ba14b6cff3dcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
