<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_628b13208b4f232c85d589c1d371909378dd32f3fd843dc5f7ad802a30513d38 extends Twig_Template
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
        $__internal_9f82cd39c54ccc63fd8fba7f87e5d334c80e99fdd9f7cacd2bae7ba670e3cb32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f82cd39c54ccc63fd8fba7f87e5d334c80e99fdd9f7cacd2bae7ba670e3cb32->enter($__internal_9f82cd39c54ccc63fd8fba7f87e5d334c80e99fdd9f7cacd2bae7ba670e3cb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5c8adbb702c97459f19041f3209c0001b640cd5dba1f5aa9198477fb448b6ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8adbb702c97459f19041f3209c0001b640cd5dba1f5aa9198477fb448b6ac3->enter($__internal_5c8adbb702c97459f19041f3209c0001b640cd5dba1f5aa9198477fb448b6ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9f82cd39c54ccc63fd8fba7f87e5d334c80e99fdd9f7cacd2bae7ba670e3cb32->leave($__internal_9f82cd39c54ccc63fd8fba7f87e5d334c80e99fdd9f7cacd2bae7ba670e3cb32_prof);

        
        $__internal_5c8adbb702c97459f19041f3209c0001b640cd5dba1f5aa9198477fb448b6ac3->leave($__internal_5c8adbb702c97459f19041f3209c0001b640cd5dba1f5aa9198477fb448b6ac3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
