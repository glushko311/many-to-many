<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_f2405d8ba32ac6872d2a9a9356e78e3388e265da71cd8417c0d4ec2464c22c92 extends Twig_Template
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
        $__internal_e96a1dc90661fda90bdfbc5d2beff293632a4e8882fb2ab0f3f897e0266e5dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96a1dc90661fda90bdfbc5d2beff293632a4e8882fb2ab0f3f897e0266e5dd7->enter($__internal_e96a1dc90661fda90bdfbc5d2beff293632a4e8882fb2ab0f3f897e0266e5dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_5d71a3ee63b59dd15c2ef1527b80a5b29ac09d0851e08a375b366b2d84054ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d71a3ee63b59dd15c2ef1527b80a5b29ac09d0851e08a375b366b2d84054ac7->enter($__internal_5d71a3ee63b59dd15c2ef1527b80a5b29ac09d0851e08a375b366b2d84054ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_e96a1dc90661fda90bdfbc5d2beff293632a4e8882fb2ab0f3f897e0266e5dd7->leave($__internal_e96a1dc90661fda90bdfbc5d2beff293632a4e8882fb2ab0f3f897e0266e5dd7_prof);

        
        $__internal_5d71a3ee63b59dd15c2ef1527b80a5b29ac09d0851e08a375b366b2d84054ac7->leave($__internal_5d71a3ee63b59dd15c2ef1527b80a5b29ac09d0851e08a375b366b2d84054ac7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
