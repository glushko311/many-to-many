<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0fa7299dbc9164ca468d661308edb55d71e8ebc55c3ae81aeb3dfb65bc368b5b extends Twig_Template
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
        $__internal_1f86ec10f7c5a0ae28118c1cf0b39ca91905d89745107f45baffdb3d212dddc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f86ec10f7c5a0ae28118c1cf0b39ca91905d89745107f45baffdb3d212dddc7->enter($__internal_1f86ec10f7c5a0ae28118c1cf0b39ca91905d89745107f45baffdb3d212dddc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1d4b3f28f8d494b8ca449f0198715a61df6bfe7e89ed7efa3dcdf0481e2f08fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4b3f28f8d494b8ca449f0198715a61df6bfe7e89ed7efa3dcdf0481e2f08fe->enter($__internal_1d4b3f28f8d494b8ca449f0198715a61df6bfe7e89ed7efa3dcdf0481e2f08fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1f86ec10f7c5a0ae28118c1cf0b39ca91905d89745107f45baffdb3d212dddc7->leave($__internal_1f86ec10f7c5a0ae28118c1cf0b39ca91905d89745107f45baffdb3d212dddc7_prof);

        
        $__internal_1d4b3f28f8d494b8ca449f0198715a61df6bfe7e89ed7efa3dcdf0481e2f08fe->leave($__internal_1d4b3f28f8d494b8ca449f0198715a61df6bfe7e89ed7efa3dcdf0481e2f08fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
